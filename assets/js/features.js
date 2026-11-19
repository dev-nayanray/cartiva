/**
 * Cartiva visitor features: sticky add to cart bar, sale countdown,
 * off-canvas shop filters, mobile bottom bar, back to top, dark mode.
 * Each part only runs when its markup is on the page.
 */
( function () {
	'use strict';

	var i18n = ( window.cartivaFeatures && window.cartivaFeatures.i18n ) || {};
	var reduceMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	function scrollToEl( el ) {
		el.scrollIntoView( { behavior: reduceMotion ? 'auto' : 'smooth', block: 'center' } );
	}

	/* ---------- Sticky add to cart bar ---------- */
	function stickyCart() {
		var bar = document.querySelector( '.cartiva-sticky-cart' );
		var form = document.querySelector( 'form.cart' );
		if ( ! bar || ! form || ! ( 'IntersectionObserver' in window ) ) {
			return;
		}
		var target = form.querySelector( '.single_add_to_cart_button:not(.cartiva-buy-now)' ) || form;
		bar.hidden = false;
		new IntersectionObserver( function ( entries ) {
			var gone = ! entries[ 0 ].isIntersecting && entries[ 0 ].boundingClientRect.top < 0;
			bar.classList.toggle( 'is-visible', gone );
			document.body.classList.toggle( 'cartiva-sticky-cart-open', gone );
		} ).observe( target );

		bar.querySelector( '.cartiva-sticky-cart__button' ).addEventListener( 'click', function () {
			var btn = form.querySelector( '.single_add_to_cart_button:not(.cartiva-buy-now)' );
			var needsOptions = 'options' === this.getAttribute( 'data-action' ) || ( btn && btn.classList.contains( 'disabled' ) );
			if ( ! needsOptions && btn ) {
				btn.click();
				return;
			}
			scrollToEl( form );
			var field = form.querySelector( 'select, input.qty' );
			if ( field ) {
				window.setTimeout( function () {
					field.focus( { preventScroll: true } );
				}, reduceMotion ? 0 : 450 );
			}
		} );
	}

	/* ---------- Sale countdown ---------- */
	function countdowns() {
		document.querySelectorAll( '.cartiva-countdown[data-end]' ).forEach( function ( el ) {
			var end = parseInt( el.getAttribute( 'data-end' ), 10 ) * 1000;
			var out = el.querySelector( '.cartiva-countdown__time' );
			if ( ! end || ! out ) {
				return;
			}
			function pad( n ) {
				return n < 10 ? '0' + n : String( n );
			}
			function tick() {
				var left = Math.max( 0, Math.floor( ( end - Date.now() ) / 1000 ) );
				var d = Math.floor( left / 86400 );
				var h = Math.floor( ( left % 86400 ) / 3600 );
				var m = Math.floor( ( left % 3600 ) / 60 );
				var s = left % 60;
				out.textContent = ( d ? d + ( i18n.d || 'd' ) + ' ' : '' ) + pad( h ) + ( i18n.h || 'h' ) + ' ' + pad( m ) + ( i18n.m || 'm' ) + ' ' + pad( s ) + ( i18n.s || 's' );
				if ( ! left ) {
					el.classList.add( 'is-ended' );
					return;
				}
				window.setTimeout( tick, 1000 );
			}
			tick();
		} );
	}

	/* ---------- Off-canvas shop filters (phones) ---------- */
	function offcanvasFilters() {
		var sidebar = document.querySelector( 'body.cartiva-offcanvas-filters .cartiva-shop-sidebar' );
		if ( ! sidebar ) {
			return;
		}
		var id = sidebar.id || 'cartiva-shop-filters';
		sidebar.id = id;
		sidebar.classList.add( 'cartiva-filters-panel' );
		sidebar.setAttribute( 'aria-label', i18n.filters || 'Filters' );

		var open = document.createElement( 'button' );
		open.type = 'button';
		open.className = 'cartiva-filters-open';
		open.setAttribute( 'aria-controls', id );
		open.setAttribute( 'aria-expanded', 'false' );
		open.textContent = i18n.filters || 'Filters';
		sidebar.parentNode.insertBefore( open, sidebar );

		var close = document.createElement( 'button' );
		close.type = 'button';
		close.className = 'cartiva-filters-close';
		close.setAttribute( 'aria-label', i18n.close || 'Close filters' );
		sidebar.insertBefore( close, sidebar.firstChild );

		var backdrop = document.createElement( 'div' );
		backdrop.className = 'cartiva-filters-backdrop';
		document.body.appendChild( backdrop );

		function set( state ) {
			sidebar.classList.toggle( 'is-open', state );
			backdrop.classList.toggle( 'is-open', state );
			document.documentElement.classList.toggle( 'cartiva-no-scroll', state );
			open.setAttribute( 'aria-expanded', state ? 'true' : 'false' );
			if ( state ) {
				close.focus();
			} else {
				open.focus();
			}
		}
		open.addEventListener( 'click', function () {
			set( true );
		} );
		close.addEventListener( 'click', function () {
			set( false );
		} );
		backdrop.addEventListener( 'click', function () {
			set( false );
		} );
		document.addEventListener( 'keydown', function ( e ) {
			if ( 'Escape' === e.key && sidebar.classList.contains( 'is-open' ) ) {
				set( false );
			}
		} );
	}

	/* ---------- Mobile bottom bar ---------- */
	function mobileBar() {
		var bar = document.querySelector( '.cartiva-mobile-bar' );
		if ( ! bar ) {
			return;
		}
		var search = bar.querySelector( '.cartiva-mobile-bar__item--search' );
		if ( search ) {
			search.addEventListener( 'click', function ( e ) {
				var headerSearch = document.querySelector( '.cartiva-header .wp-block-search' );
				var button = headerSearch && headerSearch.querySelector( '.wp-block-search__button' );
				var input = headerSearch && headerSearch.querySelector( 'input[type="search"]' );
				if ( ! input ) {
					return;
				}
				e.preventDefault();
				window.scrollTo( { top: 0, behavior: reduceMotion ? 'auto' : 'smooth' } );
				if ( headerSearch.classList.contains( 'wp-block-search__searchfield-hidden' ) && button ) {
					button.click();
				}
				window.setTimeout( function () {
					input.focus();
				}, 80 );
			} );
		}
		var cart = bar.querySelector( '.cartiva-mobile-bar__item--cart' );
		var miniCartButton = document.querySelector( '.wc-block-mini-cart__button' );
		if ( cart && miniCartButton ) {
			cart.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				miniCartButton.click();
			} );
		}
		var count = bar.querySelector( '.cartiva-mobile-bar__count' );
		var badgeHost = document.querySelector( '.wc-block-mini-cart' );
		if ( count && badgeHost && 'MutationObserver' in window ) {
			var sync = function () {
				var badge = badgeHost.querySelector( '.wc-block-mini-cart__badge' );
				var n = badge ? parseInt( badge.textContent, 10 ) || 0 : 0;
				count.textContent = n;
				count.hidden = n < 1;
			};
			sync();
			new MutationObserver( sync ).observe( badgeHost, { childList: true, subtree: true, characterData: true } );
		}
	}

	/* ---------- Back to top ---------- */
	function backToTop() {
		var btn = document.querySelector( '.cartiva-to-top' );
		if ( ! btn ) {
			return;
		}
		btn.hidden = false;
		var ticking = false;
		function update() {
			btn.classList.toggle( 'is-visible', window.scrollY > 700 );
			ticking = false;
		}
		window.addEventListener( 'scroll', function () {
			if ( ! ticking ) {
				ticking = true;
				window.requestAnimationFrame( update );
			}
		}, { passive: true } );
		update();
		btn.addEventListener( 'click', function () {
			window.scrollTo( { top: 0, behavior: reduceMotion ? 'auto' : 'smooth' } );
			var skip = document.querySelector( '.wp-site-blocks' );
			if ( skip ) {
				skip.setAttribute( 'tabindex', '-1' );
				skip.focus( { preventScroll: true } );
			}
		} );
	}

	/* ---------- Dark mode ---------- */
	function darkMode() {
		var root = document.documentElement;
		document.querySelectorAll( '.cartiva-scheme-toggle' ).forEach( function ( btn ) {
			function sync() {
				var dark = root.classList.contains( 'cartiva-dark' );
				btn.setAttribute( 'aria-pressed', dark ? 'true' : 'false' );
				btn.setAttribute( 'aria-label', dark ? ( i18n.light || 'Light mode' ) : ( i18n.dark || 'Dark mode' ) );
				btn.title = btn.getAttribute( 'aria-label' );
			}
			sync();
			btn.addEventListener( 'click', function () {
				var dark = ! root.classList.contains( 'cartiva-dark' );
				root.classList.toggle( 'cartiva-dark', dark );
				try {
					window.localStorage.setItem( 'cartiva-scheme', dark ? 'dark' : 'light' );
				} catch ( e ) {}
				sync();
			} );
		} );
	}

	function init() {
		stickyCart();
		countdowns();
		offcanvasFilters();
		mobileBar();
		backToTop();
		darkMode();
	}

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
}() );
