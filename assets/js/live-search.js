/**
 * Cartiva – live search for the header Search block.
 *
 * Progressive enhancement only: the Search block keeps working as a normal
 * search form. After two characters, results are fetched from the
 * WooCommerce Store API (products) or the core WordPress REST API (posts and
 * pages) and shown in an accessible dropdown. No data is stored or sent
 * anywhere else.
 *
 * @package Cartiva
 */
( function () {
	'use strict';

	var cfg = window.cartivaLiveSearch;
	if ( ! cfg || ! window.fetch ) {
		return;
	}

	var MIN_CHARS = cfg.minChars || 2;
	var LIMIT = cfg.limit || 6;
	var DELAY = 220;
	var i18n = cfg.i18n || {};
	var uid = 0;

	function decode( html ) {
		return new DOMParser().parseFromString( String( html || '' ), 'text/html' ).body.textContent || '';
	}

	function el( tag, className, text ) {
		var node = document.createElement( tag );
		if ( className ) {
			node.className = className;
		}
		if ( text !== undefined ) {
			node.textContent = text;
		}
		return node;
	}

	/* Wrap matches of the query in <mark> without using innerHTML. */
	function highlight( text, query ) {
		var frag = document.createDocumentFragment();
		var lower = text.toLowerCase();
		var q = query.toLowerCase();
		var pos = 0;
		var idx = q ? lower.indexOf( q ) : -1;
		while ( idx !== -1 ) {
			frag.appendChild( document.createTextNode( text.slice( pos, idx ) ) );
			frag.appendChild( el( 'mark', '', text.slice( idx, idx + q.length ) ) );
			pos = idx + q.length;
			idx = lower.indexOf( q, pos );
		}
		frag.appendChild( document.createTextNode( text.slice( pos ) ) );
		return frag;
	}

	/* Format a Store API price (minor units) using the store's currency settings. */
	function formatPrice( prices, key ) {
		if ( ! prices || prices[ key ] === undefined || prices[ key ] === '' ) {
			return '';
		}
		var minor = parseInt( prices.currency_minor_unit, 10 ) || 0;
		var value = parseInt( prices[ key ], 10 ) / Math.pow( 10, minor );
		var parts = value.toFixed( minor ).split( '.' );
		parts[ 0 ] = parts[ 0 ].replace( /\B(?=(\d{3})+(?!\d))/g, prices.currency_thousand_separator || ',' );
		var number = parts.join( prices.currency_decimal_separator || '.' );
		return decode( prices.currency_prefix || '' ) + number + decode( prices.currency_suffix || '' );
	}

	function LiveSearch( form ) {
		this.form = form;
		this.input = form.querySelector( 'input[type="search"], .wp-block-search__input' );
		if ( ! this.input ) {
			return;
		}
		this.cache = {};
		this.items = [];
		this.active = -1;
		this.timer = null;
		this.controller = null;
		this.query = '';
		this.build();
		this.bind();
	}

	LiveSearch.prototype.build = function () {
		uid += 1;
		var id = 'cartiva-live-search-' + uid;

		this.panel = el( 'div', 'cartiva-live-search' );
		this.panel.hidden = true;

		this.list = el( 'ul', 'cartiva-live-search__list' );
		this.list.id = id;
		this.list.setAttribute( 'role', 'listbox' );
		this.list.setAttribute( 'aria-label', i18n.results || 'Search results' );

		this.status = el( 'p', 'cartiva-live-search__status' );
		this.footer = el( 'button', 'cartiva-live-search__all' );
		this.footer.type = 'submit';

		this.live = el( 'div', 'screen-reader-text' );
		this.live.setAttribute( 'aria-live', 'polite' );
		this.live.setAttribute( 'role', 'status' );

		this.panel.appendChild( this.status );
		this.panel.appendChild( this.list );
		this.panel.appendChild( this.footer );
		this.form.appendChild( this.panel );
		this.form.appendChild( this.live );
		this.form.classList.add( 'has-cartiva-live-search' );

		this.input.setAttribute( 'role', 'combobox' );
		this.input.setAttribute( 'aria-autocomplete', 'list' );
		this.input.setAttribute( 'aria-expanded', 'false' );
		this.input.setAttribute( 'aria-controls', id );
		this.input.setAttribute( 'autocomplete', 'off' );
	};

	LiveSearch.prototype.bind = function () {
		var self = this;

		this.input.addEventListener( 'input', function () {
			window.clearTimeout( self.timer );
			var q = self.input.value.trim();
			if ( q.length < MIN_CHARS ) {
				self.close();
				return;
			}
			self.timer = window.setTimeout( function () {
				self.search( q );
			}, DELAY );
		} );

		this.input.addEventListener( 'keydown', function ( e ) {
			if ( self.panel.hidden ) {
				return;
			}
			if ( 'ArrowDown' === e.key ) {
				e.preventDefault();
				self.move( 1 );
			} else if ( 'ArrowUp' === e.key ) {
				e.preventDefault();
				self.move( -1 );
			} else if ( 'Enter' === e.key && self.active > -1 && self.items[ self.active ] ) {
				e.preventDefault();
				window.location.href = self.items[ self.active ].url;
			} else if ( 'Escape' === e.key ) {
				self.close();
			}
		} );

		this.input.addEventListener( 'focus', function () {
			if ( self.input.value.trim().length >= MIN_CHARS && self.items.length ) {
				self.open();
			}
		} );

		document.addEventListener( 'click', function ( e ) {
			if ( ! self.form.contains( e.target ) ) {
				self.close();
			}
		} );
	};

	LiveSearch.prototype.search = function ( q ) {
		var self = this;
		this.query = q;

		if ( this.cache[ q ] ) {
			this.render( this.cache[ q ], q );
			return;
		}

		if ( this.controller ) {
			this.controller.abort();
		}
		this.controller = 'AbortController' in window ? new AbortController() : null;

		this.showStatus( i18n.searching || 'Searching…', 'is-loading' );

		var url = cfg.products ?
			cfg.productsUrl + ( cfg.productsUrl.indexOf( '?' ) > -1 ? '&' : '?' ) + 'search=' + encodeURIComponent( q ) + '&per_page=' + LIMIT :
			cfg.searchUrl + ( cfg.searchUrl.indexOf( '?' ) > -1 ? '&' : '?' ) + 'search=' + encodeURIComponent( q ) + '&per_page=' + LIMIT + '&_fields=title,url,subtype';

		fetch( url, {
			credentials: 'same-origin',
			signal: this.controller ? this.controller.signal : undefined,
		} )
			.then( function ( res ) {
				if ( ! res.ok ) {
					throw new Error( res.status );
				}
				return res.json();
			} )
			.then( function ( data ) {
				var items = self.normalize( Array.isArray( data ) ? data : [] );
				self.cache[ q ] = items;
				if ( self.query === q ) {
					self.render( items, q );
				}
			} )
			.catch( function ( err ) {
				if ( err && 'AbortError' === err.name ) {
					return;
				}
				self.close();
			} );
	};

	LiveSearch.prototype.normalize = function ( data ) {
		if ( cfg.products ) {
			return data.map( function ( p ) {
				var img = p.images && p.images[ 0 ] ? p.images[ 0 ] : null;
				return {
					url: p.permalink,
					title: decode( p.name ),
					image: img ? ( img.thumbnail || img.src ) : '',
					alt: img ? decode( img.alt ) : '',
					price: formatPrice( p.prices, 'price' ),
					regular: p.on_sale ? formatPrice( p.prices, 'regular_price' ) : '',
					onSale: !! p.on_sale,
					inStock: p.is_in_stock !== false,
				};
			} );
		}
		return data.map( function ( r ) {
			return {
				url: r.url,
				title: decode( r.title ),
				meta: r.subtype || '',
			};
		} );
	};

	LiveSearch.prototype.render = function ( items, q ) {
		var self = this;
		this.items = items;
		this.active = -1;
		this.list.textContent = '';

		if ( ! items.length ) {
			this.showStatus( ( i18n.noResults || 'No results for “%s”' ).replace( '%s', q ), 'is-empty' );
			this.footer.hidden = true;
			this.live.textContent = this.status.textContent;
			this.open();
			return;
		}

		this.status.hidden = true;
		this.status.className = 'cartiva-live-search__status';

		items.forEach( function ( item, i ) {
			var li = el( 'li', 'cartiva-live-search__item' );
			li.setAttribute( 'role', 'option' );
			li.setAttribute( 'aria-selected', 'false' );
			li.id = self.list.id + '-' + i;

			var a = el( 'a', 'cartiva-live-search__link' );
			a.href = item.url;
			a.tabIndex = -1;

			if ( cfg.products ) {
				var media = el( 'span', 'cartiva-live-search__media' );
				if ( item.image ) {
					var img = el( 'img' );
					img.src = item.image;
					img.alt = item.alt;
					img.loading = 'lazy';
					img.width = 56;
					img.height = 56;
					media.appendChild( img );
				}
				a.appendChild( media );
			}

			var text = el( 'span', 'cartiva-live-search__text' );
			var title = el( 'span', 'cartiva-live-search__title' );
			title.appendChild( highlight( item.title, q ) );
			text.appendChild( title );

			if ( cfg.products ) {
				var price = el( 'span', 'cartiva-live-search__price' );
				if ( item.regular ) {
					price.appendChild( el( 'del', '', item.regular ) );
					price.appendChild( document.createTextNode( ' ' ) );
				}
				price.appendChild( el( item.onSale ? 'ins' : 'span', '', item.price ) );
				if ( ! item.inStock ) {
					price.appendChild( el( 'span', 'cartiva-live-search__stock', i18n.outOfStock || 'Out of stock' ) );
				}
				text.appendChild( price );
			} else if ( item.meta ) {
				text.appendChild( el( 'span', 'cartiva-live-search__meta', item.meta ) );
			}

			a.appendChild( text );
			li.appendChild( a );
			li.addEventListener( 'mousemove', function () {
				self.setActive( i );
			} );
			self.list.appendChild( li );
		} );

		this.footer.hidden = false;
		this.footer.textContent = ( i18n.viewAll || 'See all results for “%s”' ).replace( '%s', q );
		this.live.textContent = ( 1 === items.length ? i18n.oneResult || '1 result' : ( i18n.results_n || '%d results' ).replace( '%d', items.length ) );
		this.open();
	};

	LiveSearch.prototype.showStatus = function ( text, state ) {
		this.status.hidden = false;
		this.status.textContent = text;
		this.status.className = 'cartiva-live-search__status ' + ( state || '' );
		if ( 'is-loading' === state && ! this.items.length ) {
			this.list.textContent = '';
			this.footer.hidden = true;
		}
		this.open();
	};

	LiveSearch.prototype.move = function ( step ) {
		if ( ! this.items.length ) {
			return;
		}
		var next = this.active + step;
		if ( next < 0 ) {
			next = this.items.length - 1;
		} else if ( next >= this.items.length ) {
			next = 0;
		}
		this.setActive( next );
	};

	LiveSearch.prototype.setActive = function ( i ) {
		var options = this.list.children;
		if ( this.active > -1 && options[ this.active ] ) {
			options[ this.active ].setAttribute( 'aria-selected', 'false' );
			options[ this.active ].classList.remove( 'is-active' );
		}
		this.active = i;
		if ( options[ i ] ) {
			options[ i ].setAttribute( 'aria-selected', 'true' );
			options[ i ].classList.add( 'is-active' );
			options[ i ].scrollIntoView( { block: 'nearest' } );
			this.input.setAttribute( 'aria-activedescendant', options[ i ].id );
		}
	};

	LiveSearch.prototype.open = function () {
		this.panel.hidden = false;
		this.input.setAttribute( 'aria-expanded', 'true' );
		this.form.classList.add( 'is-cartiva-live-search-open' );
	};

	LiveSearch.prototype.close = function () {
		if ( this.controller ) {
			this.controller.abort();
		}
		this.panel.hidden = true;
		this.active = -1;
		this.input.setAttribute( 'aria-expanded', 'false' );
		this.input.removeAttribute( 'aria-activedescendant' );
		this.form.classList.remove( 'is-cartiva-live-search-open' );
	};

	function init() {
		var forms = document.querySelectorAll( cfg.selector || '.cartiva-header form.wp-block-search' );
		Array.prototype.forEach.call( forms, function ( form ) {
			if ( ! form.classList.contains( 'has-cartiva-live-search' ) ) {
				new LiveSearch( form ); // eslint-disable-line no-new
			}
		} );
	}

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
}() );
