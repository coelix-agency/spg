/**
 * AllPage
 * @type {{init: AllPage.init}}
 */
const AllPage = function () {

    /**
     * Plugin
     */
    const pluginStart = function () {

        /**
         * Replace all SVG images with inline SVG
         */
		jQuery('img.svg').each(function(){
			var $img = jQuery(this);
			var imgID = $img.attr('id');
			var imgClass = $img.attr('class');
			var imgURL = $img.attr('src');

			jQuery.get(imgURL, function(data) {
				// Get the SVG tag, ignore the rest
				var $svg = jQuery(data).find('svg');

				// Add replaced image ID to the new SVG
				if(typeof imgID !== 'undefined') {
					$svg = $svg.attr('id', imgID);
				}
				// Add replaced image classes to the new SVG
				if(typeof imgClass !== 'undefined') {
					$svg = $svg.attr('class', imgClass+' replaced-svg');
				}

				// Remove any invalid XML tags as per http://validator.w3.org
				$svg = $svg.removeAttr('xmlns:a');

				// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
				if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
					$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
				}

				// Replace image with new SVG
				$img.replaceWith($svg);

			}, 'xml');

		});

        /**
         * Select2
         */
        if( $('select').length ) {

            $('select').each(function(){
                const   $select         = $(this),
                        placeholder     = $(this).data('placeholder');

                $select.select2({
                    minimumResultsForSearch :   Infinity,
                    containerCssClass       :   '',
                    placeholder             :   placeholder,
                    width                   : '100%',
                    dropdownParent          : $select.parent(),

                });

                /**
                 * Change
                 */
                $(document).on('change', '#dynamic-select', function(e) {
                    const val = $(this).val();

                    if( val === 'Partenariats' || val === 'Partnership' ) {
                        $('.form .dynamic').show();
                    }else{
                        $('.form .dynamic').hide();
                    }
                });

                /**
                 * Callback
                 */
                $select.on('select2:select', function (e) {

                    // var data = e.params.data;

                });

            });

        }

	}

    /**
     * Header
     */
    const Header = function () {

        /**
         * Navbar Menu
         */
        $(document).on('click', '.header__btnmobile', function(e) {
            e.preventDefault();

            $('body').toggleClass('menu__active');

        });

        /**
         * Lang Mobile
         */
        $(document).on('click', '.langDropdown', function(e) {
            e.preventDefault();

            $('body').toggleClass('lang__active');

        });

        /**
         * Search Open
         */
        $(document).on('click', '.header__search-link > a', function(e) {
            e.preventDefault();

            const $container = $('.header__search-link');

            $container.find('form').remove();

            $container.append( $('.header__search-form').clone() );

        });

        $(document).mouseup(function (e){
            var div = $('.header__search-link form');
            if (!div.is(e.target)
                && div.has(e.target).length === 0) {
                div.remove();
            }
        });


        /**
         * Mobile Collapse
         */
        $(document).on('click', '.header__mobilemenu .menu-item-has-children > a', function(e) {
            e.preventDefault();

            const   $this = $(this),
                    $ul = $this.parent().find('.sub-menu');

            if ($ul.is(':visible')) {
                $ul.slideUp();
                $this.removeClass('sub-menu-active');
            }else{
                $('.header__mobilemenu').find('.sub-menu-active').removeClass('sub-menu-active');
                $('.header__mobilemenu').find('.sub-menu').slideUp();
                $this.addClass('sub-menu-active');
                $ul.slideDown();
            }

        });


        /**
         * Header Fixed
         * @type {jQuery.fn.init|jQuery|HTMLElement}
         */
        var header = $('header'),
            scrollPrev  = 0;
        $(window).scroll(function() {
            const scrolled = $(window).scrollTop();

            if ( scrolled > 100 && scrolled > scrollPrev ) {
                header.addClass('out');
            } else {
                header.removeClass('out');
            }
            scrollPrev = scrolled;
        });

    }

    /**
     * Init
     */
	return {
		init: function () {
			pluginStart();
            Header();
		}
	};

}();

/**
 * AllPage
 * @type {{init: AllPage.init}}
 */
const HomePage = function () {

    /**
     * Programs
     * @constructor
     */
    const Programs = function () {

        /**
         * Swiper
         * @type {Swiper}
         */
        const swiper = new Swiper('.program__slider .swiper-container', {
            loop            : false,
            slidesPerView   : 1,
            spaceBetween    : 30,
            pagination: {
                el          : '.program__slider .swiper-pagination',
                clickable   : true,
            },
            navigation: {
                nextEl      : '.program__slider .swiper-button-next',
                prevEl      : '.program__slider .swiper-button-prev',
            },
            breakpoints: {
                1000: {
                    slidesPerView: 4,
                },
                500: {
                    slidesPerView: 2,
                },
            },

        });

    }


    /**
     * Sheme
     * @constructor
     */
    const Sheme = function () {

        /**
         * Swiper
         * @type {Swiper}
         */
        if( $('.sheme__slider').length ) {

            let active_slide = $('.sheme__slider').data('active');

            const swiper = new Swiper('.sheme__slider .swiper-container', {
                loop            : false,
                slidesPerView   : 1,
                spaceBetween    : 15,
                simulateTouch   : false,
                initialSlide    : active_slide,
                navigation: {
                    nextEl      : '.sheme__slider .swiper-button-next',
                    prevEl      : '.sheme__slider .swiper-button-prev',
                },
                breakpoints: {
                    1000: {
                        slidesPerView   : 4,
                        simulateTouch   : false,
                        spaceBetween    : 0,
                    },
                },

            });

            /**
             *
             */
            swiper.on('slideChangeTransitionEnd', function () {

                const id = $('.sheme__slider .swiper-slide-active').find('.sheme__slider-item').data('step');

                $('.sheme__slider-phase').find('.active').removeClass('active');
                $('.sheme__slider-phase [data-step="' + id + '"]').addClass('active');

            });

        }

    }

    /**
     * Production
     * @constructor
     */
    const Production = function () {

        /**
         * Swiper
         * @type {Swiper}
         */
        const swiper = new Swiper('.production__slider .swiper-container', {
            loop            : false,
            slidesPerView   : 1,
            spaceBetween    : 30,
            observeParents: true,
            observeSlideChildren: true,
            observer: true,
            pagination: {
                el          : '.production__slider .swiper-pagination',
                clickable   : true,
            },
            navigation: {
                nextEl      : '.production__slider .swiper-button-next',
                prevEl      : '.production__slider .swiper-button-prev',
            },
            breakpoints: {
                1000: {
                    slidesPerView   : 6,
                    //autoHeight      : false,
                },
                787: {
                    slidesPerView   : 2,
                    //autoHeight      : true,
                },
                300: {
                    //autoHeight      : true,
                },
            },

        });

    }

    /**
     * Partners
     * @constructor
     */
    const Partners = function () {

        /**
         * Swiper
         * @type {Swiper}
         */
        const swiper = new Swiper('.partners__slider .swiper-container', {
            loop            : false,
            slidesPerView   : 1,
            spaceBetween    : 30,
            centerInsufficientSlides: true,
            pagination: {
                el          : '.partners__slider .swiper-pagination',
                clickable   : true,
            },
            navigation: {
                nextEl      : '.partners__slider .swiper-button-next',
                prevEl      : '.partners__slider .swiper-button-prev',
            },
            breakpoints: {
                1000: {
                    slidesPerView   : 3,
                },
            },

        });

    }

    /**
     * News
     * @constructor
     */
    const News = function () {

        /**
         * Swiper
         * @type {Swiper}
         */
        const swiper = new Swiper('.news__slider .swiper-container', {
            loop            : false,
            slidesPerView   : 1,
            spaceBetween    : 30,
            pagination: {
                el          : '.news__slider .swiper-pagination',
                clickable   : true,
            },
            navigation: {
                nextEl      : '.news__slider .swiper-button-next',
                prevEl      : '.news__slider .swiper-button-prev',
            },
            breakpoints: {
                1000: {
                    slidesPerView   : 3,
                },
                767: {
                    slidesPerView   : 2,
                },
            },

        });

    }

    /**
     * Init
     */
    return {
        init: function () {
            Programs();
            Sheme();
            Production();
            News();
            Partners();

        }
    };

}();

/**
 * ready
 */
jQuery(document).ready(function() {
	AllPage.init();
    HomePage.init();
});



