/**
 * Cartiva – hero slider and product carousel.
 *
 * Progressive enhancement for Group blocks with the class "cartiva-slider"
 * (each child block is a slide) and Product Collection blocks with the class
 * "cartiva-product-carousel". Without JavaScript both are still swipeable,
 * scroll-snapping rows. This script adds arrows, dots, autoplay (sliders
 * only, paused on hover, focus, hidden tabs and reduced motion) and keyboard
 * support.
 *
 * Loaded only on pages that contain one of these blocks.
 *
 * @package Cartiva
 */
( function () {
	'use strict';

	var cfg = window.cartivaSlider || {};
	var i18n = cfg.i18n || {};
	var reduceMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	function button( className, label, path ) {
		var b = document.createElement( 'button' );
		b.type = 'button';
		b.className = className;
		b.setAttribute( 'aria-label', label );
		b.innerHTML = '<svg viewBox="0 0 24 24" width="22" height="22" aria-hidden="true" focusable="false"><path d="' + path + '" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
		return b;
	}

	function Carousel( root, track, options ) {
		this.root = root;
		this.track = track;
		this.options = options;
		this.slides = Array.prototype.filter.call( track.children, function ( el ) {
			return 1 === el.nodeType;
		} );
		if ( this.slides.length < 2 ) {
			return;
		}
		this.index = 0;
		this.timer = null;
		this.paused = false;
		this.setup();
	}

	Carousel.prototype.setup = function () {
		var self = this;
		var label = this.options.label;

		this.root.classList.add( 'is-cartiva-carousel-ready' );
		this.root.setAttribute( 'role', 'region' );
		this.root.setAttribute( 'aria-roledescription', i18n.carousel || 'carousel' );
		if ( ! this.root.getAttribute( 'aria-label' ) ) {
			this.root.setAttribute( 'aria-label', label );
		}

		this.slides.forEach( function ( slide, i ) {
			slide.setAttribute( 'role', 'group' );
			slide.setAttribute( 'aria-roledescription', i18n.slide || 'slide' );
			slide.setAttribute( 'aria-label', ( i18n.ofLabel || '%1$s of %2$s' ).replace( '%1$s', i + 1 ).replace( '%2$s', self.slides.length ) );
		} );

		var controls = document.createElement( 'div' );
		controls.className = 'cartiva-carousel__controls';

		this.prev = button( 'cartiva-carousel__arrow cartiva-carousel__arrow--prev', i18n.previous || 'Previous', 'M15 5l-7 7 7 7' );
		this.next = button( 'cartiva-carousel__arrow cartiva-carousel__arrow--next', i18n.next || 'Next', 'M9 5l7 7-7 7' );
		this.prev.addEventListener( 'click', function () {
			self.go( self.index - 1, true );
		} );
		this.next.addEventListener( 'click', function () {
			self.go( self.index + 1, true );
		} );

		controls.appendChild( this.prev );

		if ( this.options.dots ) {
			this.dots = document.createElement( 'div' );
			this.dots.className = 'cartiva-carousel__dots';
			this.slides.forEach( function ( slide, i ) {
				var dot = document.createElement( 'button' );
				dot.type = 'button';
				dot.className = 'cartiva-carousel__dot';
				dot.setAttribute( 'aria-label', ( i18n.goTo || 'Go to slide %s' ).replace( '%s', i + 1 ) );
				dot.addEventListener( 'click', function () {
					self.go( i, true );
				} );
				self.dots.appendChild( dot );
			} );
			controls.appendChild( this.dots );
		}

		controls.appendChild( this.next );
		this.root.appendChild( controls );

		var ticking = false;
		this.track.addEventListener( 'scroll', function () {
			if ( ticking ) {
				return;
			}
			ticking = true;
			window.requestAnimationFrame( function () {
				self.sync();
				ticking = false;
			} );
		}, { passive: true } );

		this.root.addEventListener( 'keydown', function ( e ) {
			if ( 'ArrowRight' === e.key ) {
				e.preventDefault();
				self.go( self.index + 1, true );
			} else if ( 'ArrowLeft' === e.key ) {
				e.preventDefault();
				self.go( self.index - 1, true );
			}
		} );

		if ( this.options.autoplay && ! reduceMotion ) {
			[ 'mouseenter', 'focusin', 'touchstart' ].forEach( function ( ev ) {
				self.root.addEventListener( ev, function () {
					self.paused = true;
				}, { passive: true } );
			} );
			[ 'mouseleave', 'focusout' ].forEach( function ( ev ) {
				self.root.addEventListener( ev, function () {
					self.paused = false;
				} );
			} );
			document.addEventListener( 'visibilitychange', function () {
				self.paused = document.hidden;
			} );
			this.timer = window.setInterval( function () {
				if ( ! self.paused ) {
					self.go( self.index + 1 >= self.pageCount() ? 0 : self.index + 1, false );
				}
			}, this.options.interval );
		}

		window.addEventListener( 'resize', function () {
			self.sync();
		} );
		this.sync();
	};

	/* Number of positions the track can scroll to. */
	Carousel.prototype.pageCount = function () {
		var slideWidth = this.slides[ 0 ].getBoundingClientRect().width || 1;
		var visible = Math.max( 1, Math.round( this.track.clientWidth / slideWidth ) );
		return Math.max( 1, this.slides.length - visible + 1 );
	};

	Carousel.prototype.go = function ( i, user ) {
		var count = this.pageCount();
		if ( i < 0 ) {
			i = this.options.loop ? count - 1 : 0;
		}
		if ( i >= count ) {
			i = this.options.loop ? 0 : count - 1;
		}
		var target = this.slides[ i ];
		var offset = target.offsetLeft - this.slides[ 0 ].offsetLeft;
		this.track.scrollTo( { left: offset, behavior: reduceMotion ? 'auto' : 'smooth' } );
		this.index = i;
		if ( user ) {
			this.paused = true;
		}
		this.update();
	};

	Carousel.prototype.sync = function () {
		var left = this.track.scrollLeft;
		var start = this.slides[ 0 ].offsetLeft;
		var best = 0;
		var bestDist = Infinity;
		this.slides.forEach( function ( slide, i ) {
			var d = Math.abs( slide.offsetLeft - start - left );
			if ( d < bestDist ) {
				bestDist = d;
				best = i;
			}
		} );
		this.index = Math.min( best, this.pageCount() - 1 );
		this.update();
	};

	Carousel.prototype.update = function () {
		var self = this;
		var count = this.pageCount();
		this.root.classList.toggle( 'is-cartiva-carousel-static', count < 2 );
		if ( ! this.options.loop ) {
			this.prev.disabled = this.index <= 0;
			this.next.disabled = this.index >= count - 1;
		}
		if ( this.dots ) {
			Array.prototype.forEach.call( this.dots.children, function ( dot, i ) {
				var on = i === self.index;
				dot.classList.toggle( 'is-active', on );
				dot.setAttribute( 'aria-current', on ? 'true' : 'false' );
			} );
		}
		this.slides.forEach( function ( slide, i ) {
			var visible = i >= self.index && i < self.index + ( self.slides.length - count + 1 );
			slide.toggleAttribute( 'inert', ! visible && 'inert' in slide && self.options.dots );
		} );
	};

	function init() {
		document.querySelectorAll( '.cartiva-slider' ).forEach( function ( el ) {
			if ( el.classList.contains( 'is-cartiva-carousel-ready' ) ) {
				return;
			}
			// The block itself scrolls, so controls live in a wrapper around it.
			var wrap = document.createElement( 'div' );
			wrap.className = 'cartiva-slider-wrap' + ( el.classList.contains( 'alignfull' ) ? ' alignfull' : '' ) + ( el.classList.contains( 'alignwide' ) ? ' alignwide' : '' );
			el.parentNode.insertBefore( wrap, el );
			wrap.appendChild( el );
			el.classList.add( 'is-cartiva-carousel-ready' );
			// eslint-disable-next-line no-new
			new Carousel( wrap, el, {
				dots: true,
				loop: true,
				autoplay: ! el.classList.contains( 'is-autoplay-off' ),
				interval: parseInt( el.getAttribute( 'data-interval' ), 10 ) || 6000,
				label: i18n.featured || 'Featured',
			} );
		} );

		// Card carousels: a Group whose children are cards, or a Query Loop.
		document.querySelectorAll( '.cartiva-card-carousel' ).forEach( function ( el ) {
			if ( el.classList.contains( 'is-cartiva-carousel-ready' ) ) {
				return;
			}
			var loop = el.querySelector( '.wp-block-post-template' );
			var root = el;
			var track = loop || el;
			if ( ! loop ) {
				root = document.createElement( 'div' );
				root.className = 'cartiva-card-carousel-wrap' + ( el.classList.contains( 'alignwide' ) ? ' alignwide' : '' );
				el.parentNode.insertBefore( root, el );
				root.appendChild( el );
				el.classList.add( 'is-cartiva-carousel-ready' );
			}
			track.classList.add( 'cartiva-card-carousel__track' );
			// eslint-disable-next-line no-new
			new Carousel( root, track, {
				dots: false,
				loop: false,
				autoplay: false,
				label: i18n.items || 'Items',
			} );
		} );

		document.querySelectorAll( '.cartiva-product-carousel' ).forEach( function ( el ) {
			var track = el.querySelector( '.wc-block-product-template, .wp-block-woocommerce-product-template, ul' );
			if ( ! track || el.classList.contains( 'is-cartiva-carousel-ready' ) ) {
				return;
			}
			// eslint-disable-next-line no-new
			new Carousel( el, track, {
				dots: false,
				loop: false,
				autoplay: false,
				label: i18n.products || 'Products',
			} );
		} );
	}

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
}() );
