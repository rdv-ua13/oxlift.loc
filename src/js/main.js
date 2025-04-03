document.addEventListener('DOMContentLoaded', () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initFancyboxBehavior();
    this.initTooltips();
    this.initReadmore();
    /*this.initReadmoreCatalog();*/
    this.initHeaderFloat();
    /*this.initCatalogDetailSidebarFloat();*/
    this.initBurger();
    this.initOverlay();
    this.initMenu();
    this.initMenuCatalogSubmenu();
    this.initBasicSlider();
    this.initSliders();
    /*this.initMiniSlider();*/
    /*this.initCartQuantity();*/
    /*this.initBasicTabs();*/
    this.initInputSearchBehavior();
    /*this.initHeaderInputSearchReadonly();*/
    /*this.initSearchResBehavior();*/
    /*this.initClipboard();*/
    /*this.initContactsMap();*/
    /*this.initDeleteTrigger();*/
    /*this.initCatalogSidebarFilter();*/
    /*this.initCatalogContentSort();*/
    /*this.initCardFavorites();*/
    /*this.initSmoothScrollTo();*/
    /*this.initDatepicker();*/
    /*this.initMaskedInput();*/
    /*this.initPasswordSwitcher();*/
    /*this.initSelect2();*/
    /*this.initInputDropdown();*/

    /*this.initTestShowHideDropmenu();*/
};

// Initialize disable scroll
application.prototype.disableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    const paddingOffset = `${(window.innerWidth - body.offsetWidth)}px`;

    document.documentElement.style.scrollBehavior = 'none';
    fixBlocks.forEach(el => { el.style.paddingRight = paddingOffset; });
    body.style.paddingRight = paddingOffset;
    body.classList.add('dis-scroll');
};

// Initialize enable scroll
application.prototype.enableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    fixBlocks.forEach(el => { el.style.paddingRight = '0px'; });
    body.style.paddingRight = '0px';
    body.classList.remove('dis-scroll');
};

// Initialize device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};

// Initialize custom fancybox behavior
application.prototype.initFancyboxBehavior = function () {
    const body = $('body');
    const fancybox = $('[data-fancybox]');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');
    const catalog = $('[data-catalog]');
    const catalogSpoiler = $('[data-catalog-spoiler]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        menu.removeClass('active');
        burger.attr('aria-expanded', 'false');
        burger.attr('aria-label', 'Открыть меню');
        catalog.removeClass('active');
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        $('.overlay').remove();
        $('.overlay-transparent').remove();

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            body.removeClass('overflow-hidden');
            $('[data-open-promocode]').removeClass('selected');
            $('[data-open-promocode]').closest('.modal-order-promocode__list').removeClass('has-active');
            $('[data-open-promocode]').closest('.modal-order-promocode__item').removeClass('active');
            return application.prototype.enableScroll();
        }
    });
};

// Initialize tooltips
application.prototype.initTooltips = function () {
    if ($('.tooltip').length) {
        tippy('.tooltip', {
            allowHTML: true,
            trigger: 'mouseenter click',
        });
    }
};

// Initialize readmore plugin
application.prototype.initReadmore = function () {
    if ($('[data-spoiler]').length) {
        const spoiler = $('[data-spoiler]');
        let spoilerSettings = null;

        spoiler.each(function (i) {
            let currentMoreText = spoiler.eq(i).data('spoiler-more');
            let currentLessText = spoiler.eq(i).data('spoiler-less');
            let defaultHeight = null;
            let defaultMoreText = 'Показать все';
            let defaultLessText = 'Свернуть';
            let currentElemHeight = null;
            let currentElemHeightDesktop = spoiler.eq(i).data('collapsed-height-desktop');
            let currentElemHeightMobile = spoiler.eq(i).data('collapsed-height-mobile');

            if (window.matchMedia('(min-width: 992px)').matches) {
                defaultHeight = 224;

                if (currentElemHeightDesktop) {
                    currentElemHeight = currentElemHeightDesktop;
                }
                else if (currentElemHeightDesktop === '' || currentElemHeightDesktop === null || currentElemHeightDesktop === undefined) {
                    currentElemHeight = defaultHeight;
                }
            }
            else if (window.matchMedia('(max-width: 991.98px)').matches) {
                defaultHeight = 272;

                if (currentElemHeightMobile) {
                    currentElemHeight = currentElemHeightMobile;
                }
                else if (currentElemHeightMobile === '' || currentElemHeightMobile === null || currentElemHeightMobile === undefined) {
                    currentElemHeight = defaultHeight;
                }
            }

            if (currentMoreText === '' || currentMoreText === null || currentMoreText === undefined &&
                currentLessText === '' || currentLessText === null || currentLessText === undefined)
            {
                currentMoreText = defaultMoreText;
                currentLessText = defaultLessText;
            } else if (currentMoreText === '' || currentMoreText === null || currentMoreText === undefined) {
                currentMoreText = defaultMoreText;
            } else if (currentLessText === '' || currentLessText === null || currentLessText === undefined) {
                currentLessText = defaultLessText;
            }

            if (currentElemHeight === '' || currentElemHeight === null || currentElemHeight === undefined) {
                currentElemHeight = defaultHeight;
            }

            spoiler.eq(i).addClass('spoiler-' + i);
            spoilerSettings = {
                collapsedHeight: currentElemHeight,
                moreLink: '<a href="javascript:;" class="link-brand spoiler-trigger">\n' +
                    '                                        <span class="text-content">' + currentMoreText + '</span>\n' +
                    '                                    </a>',
                lessLink: '<a href="javascript:;" class="link-brand spoiler-trigger">\n' +
                    '                                        <span class="text-content">' + currentLessText + '</span>\n' +
                    '                                    </a>'
            };

            if($('.spoiler-' + i).is('[data-spoiler-mobile-only]')) {
                if(window.matchMedia('(min-width: 992px)').matches) {
                    $('.spoiler-' + i).readmore('destroy');
                }
                else if(window.matchMedia('(max-width: 991.98px)').matches) {
                    $('.spoiler-' + i).readmore(spoilerSettings);
                }
            }
            else if($('.spoiler-' + i).is('[data-spoiler-desktop-only]')) {
                if(window.matchMedia('(min-width: 992px)').matches) {
                    $('.spoiler-' + i).readmore(spoilerSettings);
                }
                else if(window.matchMedia('(max-width: 991.98px)').matches) {
                    $('.spoiler-' + i).readmore('destroy');
                }
            }
            else {
                $('.spoiler-' + i).readmore(spoilerSettings);
            }
        });
    }
};

// Initialize readmore plugin in catalog`s sidebar
application.prototype.initReadmoreCatalog = function () {
    if ($('[data-spoiler-catalog]').length) {
        const spoiler = $('[data-spoiler-catalog]');
        let spoilerSettings = null;

        spoiler.each(function (i) {
            let currentMoreText = spoiler.eq(i).data('spoiler-more');
            let currentLessText = spoiler.eq(i).data('spoiler-less');
            let currentMoreNum = spoiler.eq(i).data('spoiler-more-num');
            let defaultHeight = null;
            let defaultMoreText = 'Еще ' + currentMoreNum;
            let defaultLessText = 'Свернуть';
            let currentElemHeight = null;
            let currentElemHeightDesktop = spoiler.eq(i).data('collapsed-height-desktop');
            let currentElemHeightMobile = spoiler.eq(i).data('collapsed-height-mobile');

            if (window.matchMedia('(min-width: 992px)').matches) {
                defaultHeight = 148;

                if (currentElemHeightDesktop) {
                    currentElemHeight = currentElemHeightDesktop;
                }
                else if (currentElemHeightDesktop === '' || currentElemHeightDesktop === null || currentElemHeightDesktop === undefined) {
                    currentElemHeight = defaultHeight;
                }
            }
            else if (window.matchMedia('(max-width: 991.98px)').matches) {
                defaultHeight = 164;

                if (currentElemHeightMobile) {
                    currentElemHeight = currentElemHeightMobile;
                }
                else if (currentElemHeightMobile === '' || currentElemHeightMobile === null || currentElemHeightMobile === undefined) {
                    currentElemHeight = defaultHeight;
                }
            }

            if (currentMoreText === '' || currentMoreText === null || currentMoreText === undefined &&
                currentLessText === '' || currentLessText === null || currentLessText === undefined)
            {
                currentMoreText = defaultMoreText;
                currentLessText = defaultLessText;
            } else if (currentMoreText === '' || currentMoreText === null || currentMoreText === undefined) {
                currentMoreText = defaultMoreText;
            } else if (currentLessText === '' || currentLessText === null || currentLessText === undefined) {
                currentLessText = defaultLessText;
            }

            spoiler.eq(i).addClass('spoiler-catalog-' + i);
            spoilerSettings = {
                collapsedHeight: currentElemHeight,
                moreLink: '<a href="javascript:;" class="link-secondary spoiler-trigger">\n' +
                    '   <span class="text-content">' + currentMoreText + '</span>\n' +
                    '       <svg class="icon icon-fill">\n' +
                    '           <use href="img/sprite.svg#chevron-down"></use>\n' +
                    '       </svg>' +
                    '</a>',
                lessLink: '<a href="javascript:;" class="link-secondary spoiler-trigger">\n' +
                    '   <span class="text-content">' + currentLessText + '</span>\n' +
                    '       <svg class="icon icon-fill">\n' +
                    '           <use href="img/sprite.svg#chevron-up"></use>\n' +
                    '       </svg>' +
                    '</a>',
            };

            if($('.spoiler-catalog-' + i).is('[data-spoiler-catalog-mobile-only]')) {
                if(window.matchMedia('(min-width: 992px)').matches) {
                    $('.spoiler-catalog-' + i).readmore('destroy');
                }
                else if(window.matchMedia('(max-width: 991.98px)').matches) {
                    $('.spoiler-catalog-' + i).readmore(spoilerSettings);
                }
            }
            else if($('.spoiler-catalog-' + i).is('[data-spoiler-catalog-desktop-only]')) {
                if(window.matchMedia('(min-width: 992px)').matches) {
                    $('.spoiler-catalog-' + i).readmore(spoilerSettings);
                }
                else if(window.matchMedia('(max-width: 991.98px)').matches) {
                    $('.spoiler-catalog-' + i).readmore('destroy');
                }
            }
            else {
                $('.spoiler-catalog-' + i).readmore(spoilerSettings);
            }
        });
    }
};

// Initialize header float
application.prototype.initHeaderFloat = function () {
    $(window).scroll(function () {
        setHeaderFloat();
    });

    function setHeaderFloat() {
        let heightHeader = $('.header').outerHeight();

        if ($(window).scrollTop() >= heightHeader) {
            $('.header').addClass('header-float');
        }
        else {
            $('.header').removeClass('header-float');
        }
    }
};

// Initialize catalog-detail sidebar float
application.prototype.initCatalogDetailSidebarFloat = function () {
    $(window).scroll(function () {
        setCatalogDetailSidebarFloat();
    });
    setCatalogDetailSidebarFloat();

    function setCatalogDetailSidebarFloat() {
        if ($(window).scrollTop() > 120) {
            $('.catalog-detail .cp-sidebar').addClass('cp-sidebar-float');
        } else {
            $('.catalog-detail .cp-sidebar').removeClass('cp-sidebar-float');
        }
    }
};

// Initialize burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            this.disableScroll();
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            this.enableScroll();
        }
    });

    menuClose?.addEventListener('click', () => {
        setMenuClose();
        $('.overlay').remove();
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        return application.prototype.enableScroll();
    }
};

// Initialize overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const body = $('body');
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            body.addClass('overflow-hidden');
            $('<div class="overlay"></div>').insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });
        
        function setTargetAction() {
            body.removeClass('overflow-hidden');
            $('.overlay').remove();
            return application.prototype.enableScroll();
        }
    }
};

// Initialize menu call
application.prototype.initMenu = function () {
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalog = $('[data-catalog]');
    const catalogClose = $('[data-catalog-close]');
    let overlayTrigger = $('[data-overlay-transparent]');

    catalogSpoiler.on('click', () => {
        setCatalogSwitch();
    });

    catalogClose.on('click', () => {
        setCatalogClose();
    });

    setOverlay();

    $(window).on('resize', function () {
        setCatalogClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setCatalogClose();
        }
    });

    function setCatalogSwitch() {
        if (catalog.hasClass('active') && catalogSpoiler.hasClass('active')) {
            catalogSpoiler.attr('aria-expanded', 'false');
            catalogSpoiler.attr('aria-label', 'Открыть меню');
            catalogSpoiler.removeClass('active');
            catalog.removeClass('active');
            return application.prototype.enableScroll();
        } else {
            catalogSpoiler.attr('aria-expanded', 'true');
            catalogSpoiler.attr('aria-label', 'Закрыть меню');
            catalogSpoiler.addClass('active');
            catalog.addClass('active');
            return application.prototype.disableScroll();
        }
    }

    function setCatalogClose() {
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        catalogSpoiler.removeClass('active');
        catalog.removeClass('active');
        $('.menu-catalog-header').removeClass('submenu');
        $('.overlay-transparent').remove();
        return application.prototype.enableScroll();
    }

    function setOverlay() {
        overlayTrigger.on('click', function () {
            $('<div class="overlay-transparent"></div>').insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay-transparent').is(e.target)) {
                setCatalogClose();
            }
        });
    }
};

// Initialize menu catalog behavior
application.prototype.initMenuCatalogSubmenu = function () {
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalogTitle = $('[data-catalog-title]');
    const rootItem = $('[data-submenu-section]');

    catalogSpoiler.on('click', function (e) {
        const currentRootItem = $('.menu-catalog-root-link[data-submenu-section="0"]');
        const currentSubmenuItem = $('.menu-catalog-submenu-section[data-root-pointer="0"]');
        let currentCatalogTitle = catalogTitle.data('catalog-title');

        catalogTitle.text(currentCatalogTitle);
        rootItem.closest('.menu-catalog-root').removeClass('hide');
        rootItem.closest('.menu-catalog').find('.menu-catalog-submenu').removeClass('active');
        $('.menu-catalog-root-link').removeClass('selected');
        currentRootItem.addClass('selected');
        $('.menu-catalog-submenu-section').removeClass('active');
        currentSubmenuItem.addClass('active');
    });

    if (window.matchMedia('(min-width: 992px)').matches) {
        if (!$('html').hasClass('touch')) {
            rootItem.on('mouseover', function () {
                let rootItemId = $(this).data('submenu-section');

                $('.menu-catalog-submenu-section').removeClass('active');
                $('.menu-catalog-submenu-section[data-root-pointer="' + rootItemId + '"]').addClass('active');
            });
        } else {
            rootItem.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                let rootItemId = $(this).data('submenu-section');

                $('.menu-catalog-submenu-section').removeClass('active');
                $('.menu-catalog-submenu-section[data-root-pointer="' + rootItemId + '"]').addClass('active');
            });
        }
    } else if (window.matchMedia('(max-width: 991.98px)').matches) {
        rootItem.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            let rootItemId = $(this).data('submenu-section');
            let currentCatalogTitle = $(this).text();

            catalogTitle.text(currentCatalogTitle);
            $(this).closest('.menu-catalog').find('.menu-catalog-header').addClass('submenu');
            $(this).closest('.menu-catalog-root').addClass('hide');
            $(this).closest('.menu-catalog').find('.menu-catalog-submenu').addClass('active');
            $('.menu-catalog-submenu-section').removeClass('active');
            $('.menu-catalog-submenu-section[data-root-pointer="' + rootItemId + '"]').addClass('active');
        });

        $('.menu-catalog-title-back').on('click', function (e) {
            let currentCatalogTitle = catalogTitle.data('catalog-title');

            catalogTitle.text(currentCatalogTitle);
            $(this).closest('.menu-catalog-header').removeClass('submenu');
            $(this).closest('.menu-catalog').find('.menu-catalog-root').removeClass('hide');
            $(this).closest('.menu-catalog').find('.menu-catalog-submenu').removeClass('active');
        });
    }
};

// Initialize basic slider
application.prototype.initBasicSlider = function () {
    if ($('[data-basic-slider]').length) {
        const slider = $('[data-basic-slider]');
        let basicSlider = null;
        let spaceBetween = 12;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            // spaceBetween
            if (window.matchMedia('(min-width: 992px)').matches) {
                if(slider.eq(i).is('[data-header-catalog-slider]')) {
                    spaceBetween = 40;
                }
                else if(slider.eq(i).is('[data-basic-slider-watched]')) {
                    spaceBetween = 24;
                }
                else if(slider.eq(i).is('[data-basic-slider-sm]')) {
                    spaceBetween = 20;
                }
                else if(slider.eq(i).is('[data-basic-slider-xs]')) {
                    spaceBetween = 16;
                }
                else if(slider.eq(i).is('[data-basic-slider-xxs]')) {
                    spaceBetween = 8;
                }
                else {
                    spaceBetween = 40;
                }
            }
            else if (window.matchMedia('(max-width: 991.98px)').matches) {
                if(slider.eq(i).is('[data-header-catalog-slider]')) {
                    spaceBetween = 24;
                }
                else if(slider.eq(i).is('[data-basic-slider-xs]') || slider.eq(i).is('[data-basic-slider-xxs]')) {
                    spaceBetween = 8;
                }
                else {
                    spaceBetween = 12;
                }
            }

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: spaceBetween,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-slider-wrap-' + i + ' .swiper-pagination',
                },
                breakpoints: {
                    992: {
                        spaceBetween: spaceBetween
                    },
                }
            };

            basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialize sliders
application.prototype.initSliders = function () {
    if ($('.nav-breadcrumbs').length) {
        let sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            slidesPerView: 'auto',
            spaceBetween: 4
        });
    }

    if ($('[data-single-slider]').length) {
        const slider = $('[data-single-slider]');
        let currentSlider = null;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i + '0');

            const singleSliderSettings = {
                slidesPerView: 1,
                spaceBetween: 12,
                autoHeight: true,
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + '0 .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + '0 .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-slider-wrap-' + i + '0 .swiper-pagination',
                }
            };

            currentSlider = new Swiper('.basic-slider-wrap-' + i + '0 [data-single-slider]', singleSliderSettings);
        });
    }
    if ($('[data-single-autoplay-slider]').length) {
        const slider = $('[data-single-autoplay-slider]');
        let currentSlider = null;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i + '00');

            const singleSliderAutoplaySettings = {
                slidesPerView: 1,
                loop: true,
                autoplay: {delay: 5000},
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + '00 .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + '00 .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-slider-wrap-' + i + '00 .swiper-pagination',
                }
            };

            currentSlider = new Swiper('.basic-slider-wrap-' + i + '00 [data-single-autoplay-slider]', singleSliderAutoplaySettings);
        });
    }

    if ($('.index-top-primary .swiper').length) {
        const indexTopPrimarySliderSettings = {
            slidesPerView: 'auto',
            spaceBetween: 8,
            navigation: {
                nextEl: '.index-top-primary .swiper .swiper-button-next',
                prevEl: '.index-top-primary .swiper .swiper-button-prev',
            },
            pagination: {
                el: '.index-top-primary .swiper .swiper-pagination',
            },
            breakpoints: {
                992: {
                    spaceBetween: 0
                },
            }
        };
        let indexTopPrimarySlider = new Swiper('.index-top-primary .swiper', indexTopPrimarySliderSettings);
    }

    if ($('.details-thumb-slider').length) {
        let detailsThumbSliderPointer = new Swiper('.details-thumb-slider-pointer', {
            slidesPerView: 'auto',
            spaceBetween: 8,
            direction: "horizontal",
            freeMode: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: '.details-thumb-slider-pointer .swiper-button-next',
                prevEl: '.details-thumb-slider-pointer .swiper-button-prev',
            }
        });
        let detailsThumbSlider = new Swiper('.details-thumb-slider', {
            slidesPerView: 1,
            spaceBetween: 8,
            watchOverflow: true,
            thumbs: {
                swiper: detailsThumbSliderPointer,
            },
            pagination: {
                el: '.details-thumb-slider .swiper-pagination',
            }
        });
    }
};

// Initialize mini slider - change images on mouse movement
application.prototype.initMiniSlider = function () {
    if ($('.mini-slider').length) {
        $('.mini-slider').each(function(index, element) {
            if (!$(element).hasClass('init-slider')) {
                $(element).addClass('init-slider');
                let slideLength = $(element).find('.mini-slider__slide').length;
                for (let i = 0; i < slideLength; i++) {
                    $(element).find('.mini-slider__dots').append('<li class="mini-slider__dot"></li>');
                }
                $(element).find('.mini-slider__slide:eq(0)').find('.mini-slider__img').css('opacity', '1');
                $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(0)').addClass('mini-slider__dot--active');
                $(element).find('.mini-slider__slide').on('touchstart mouseover', function(event) {
                    let thisOp = $(element).find('.mini-slider__slide').index(this);
                    $(element).find('.mini-slider__slide').find('.mini-slider__img').css('opacity', '0');
                    $(element).find(this).find('.mini-slider__img').css('opacity', '1');

                    $(element).find('.mini-slider__dots').find('.mini-slider__dot').removeClass('mini-slider__dot--active');
                    $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + thisOp + ')').addClass('mini-slider__dot--active');
                    event.stopPropagation();
                    event.preventDefault();
                });
            }
        });
    }
};

// Initialize cart quantity
application.prototype.initCartQuantity = function () {
    if ($('.cart-buy').length) {
        $(document).on('click', '.cart-quantity-btn', function(e) {
            let $button = $(this);
            let oldValue = $button.closest('.cart-quantity').find('input.cart-quantity-input').val();
            let mult = parseInt($button.closest('.cart-quantity').find('input.cart-quantity-input').data('mult'));
            let newVal = null;

            if(mult <= 0 || isNaN(mult)) {
                mult = 1;
            }

            if($button.data('value') === 'qty-add') {
                newVal = parseInt(oldValue) + mult;
            }
            else {
                if(oldValue > 0) {
                    newVal = parseInt(oldValue) - mult;
                }
                else {
                    newVal = 0;
                }
            }

            if(newVal == 0) {
                newVal = mult;

                if(window.matchMedia('(max-width: 991.98px)').matches) {
                    $(this).closest('.cart-quantity').removeClass('enabled');
                    $(this).closest('.cart-buy').find('.cart-in').removeClass('disabled');
                }
            }

            $button.closest('.cart-quantity').find('input.cart-quantity-input').val(newVal).trigger('change');
        });

        if(window.matchMedia('(max-width: 991.98px)').matches) {
            $(document).on('click', '.cart-in', function(e) {
                $(this).addClass('disabled');
                $(this).closest('.cart-buy').find('.cart-quantity').addClass('enabled');
            });
        }
    }
};

// Initialize basic tabs
application.prototype.initBasicTabs = function () {
    if ($('.basic-tabs').length) {
        const tabsContainer = $('.basic-tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        $('.basic-tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".basic-tabs-container[data-tab='" + currentTabBlockId + "']").find('.basic-tabs-trigger').removeClass('active');
            $(this).find('.basic-tabs-trigger').removeClass('notice').addClass('active');

            currentSelected = $(this).find('.basic-tabs-trigger').data('target');
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.basic-tabs-content__panel').removeClass('active');
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".basic-tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });
    }
};

// Initialize input-search behavior
application.prototype.initInputSearchBehavior = function () {
    if ($('.input-wrapper-search .input').length) {
        $('.input-wrapper-search .input').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-wrapper-search').removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-wrapper-search').addClass('has-data');
            }
        });

        $('.input-wrapper-search .input-delete-btn').on('click', function () {
            $(this).closest('.input-wrapper-search').removeClass('has-data');
            $(this).closest('.input-wrapper-search').find('.input').val('').removeClass('has-data');
        });
    }
};

// Initialize header input-search behavior
application.prototype.initHeaderInputSearchReadonly = function () {
    if ($('.header-search .input-wrapper-search .input-search').length) {
        if (window.matchMedia('(min-width: 992px)').matches) {
            $('.header-search .input-wrapper-search .input-search').prop('readonly', false);
        } else if (window.matchMedia('(max-width: 991.98px)').matches) {
            $('.header-search .input-wrapper-search .input-search').prop('readonly', true);
        }
    }
};

// Initialize search result behavior
application.prototype.initSearchResBehavior = function () {
    $(document).on('click', '.search-results__close', function () {
        $(this).closest('.header-search-results').removeClass('active');
        $(this).closest('.cart-quick-add').removeClass('active');
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            $('.search-results__close').closest('.header-search-results').removeClass('active');
            $('.search-results__close').closest('.cart-quick-add').removeClass('active');
        }
    });
};

// Initialize clipboard
application.prototype.initClipboard = function () {
    if ($('[data-clipboard]').length) {
        let clipboardBtn = $('.clipboard-trigger');

        clipboardBtn.on('click', function () {
            let clipboardValue = $(this).closest('[data-clipboard]').find('.clipboard-target');
            copyToClipboard(clipboardValue);
        });

        function copyToClipboard(element) {
            let $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
    }
};

// Initialize contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts-map').length) {
        ymaps.ready(init);

        let map,
            placemark,
            mapItem = $('.contacts-map-content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactsMap' + i);

                let coordX = $(this).data('x'),
                    coordY = $(this).data('y'),
                    hint = $(this).data('hint'),
                    zoomControl = new ymaps.control.ZoomControl({
                        options: {
                            size: 'large',
                            float: 'none',
                            position: {
                                top: 50,
                                right: 10,
                                left: 'auto',
                            },
                        }
                    });

                // Параметры карты можно задать в конструкторе.
                map = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactsMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [
                            coordX,
                            coordY
                        ],
                        // Масштаб.
                        zoom: 16,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );

                placemark = new ymaps.Placemark([coordX, coordY]);

                map.geoObjects.add(placemark);
                map.controls.add(zoomControl);
            });
        }
    }
};

// Initialize delete trigger
application.prototype.initDeleteTrigger = function () {
    $('[data-delete-trigger]').on('click', function () {
        $(this).closest('[data-removable]').remove();
    });
};

// Initialize catalog sidebar filter
application.prototype.initCatalogSidebarFilter = function () {
    if ($('[data-filter]').length && $('[data-filter-spoiler]').length) {
        const filter = $('[data-filter]');
        const filterSpoiler = $('[data-filter-spoiler]');
        const filterClose = $('[data-filter-close]');

        setResponsiveFilter();
        setCheckChangeFilter();
        $(window).on('resize', setResponsiveFilter, setCloseFilter, setCheckChangeFilter);

        filterClose.on('click', function () {
            setCloseFilter();
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setCloseFilter();
            }
        });

        function setResponsiveFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                setCloseFilter();
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filterSpoiler.on('click', function () {
                    $(this).addClass('active');
                    filter.addClass('active');
                });
            }
        }

        function setCloseFilter() {
            filter.removeClass('active');
            filterSpoiler.removeClass('active');
        }

        function setCheckChangeFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                filter.removeClass('has-filter');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filter.on('change', function () {
                    filter.addClass('has-filter');
                    filterSpoiler.addClass('has-filter');
                });
            }
        }
    }
};

// Initialize catalog content sort
application.prototype.initCatalogContentSort = function () {
    if ($('.cp-content__sort-options').length) {
        initCatalogContentSortSwitch();

        catalogSettingsSortSelect();
        $(window).on('resize', catalogSettingsSortSelect);

        $(document).on('click', function (e) {
            if (!$('.cp-content__sort-select').is(e.target) &&
                !$('.cp-content__sort-options').is(e.target) &&
                $('.cp-content__sort-options').has(e.target).length === 0)
            {
                closeCatalogContentSettingsSort();
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                closeCatalogContentSettingsSort();
            }
        });

        function initCatalogContentSortSwitch() {
            $('.cp-content__sort-options input[type="radio"]').on('click', function () {
                if($(this).prop('checked')) {
                    $(this).closest('.cp-content__sort-options').find('.cp-content__sort-label').removeClass('active');
                    $(this).siblings('.cp-content__sort-label').addClass('active');
                } else {
                    $(this).siblings('.cp-content__sort-label').removeClass('active');
                }

                if (window.matchMedia('(max-width: 991.98px)').matches) {
                    let selectPlaceholder = $('.cp-content__sort-label.active').text();

                    $('.cp-content__sort').find('.cp-content__sort-select .text-content').text(selectPlaceholder);
                    closeCatalogContentSettingsSort();
                }
            });
        }

        function catalogSettingsSortSelect() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                closeCatalogContentSettingsSort();
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                $('.cp-content__sort-select').on('click', function () {
                    if (!$(this).hasClass('active')) {
                        $(this).addClass('active');
                        $(this).siblings('.cp-content__sort-options').addClass('active');
                    } else if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                        $(this).siblings('.cp-content__sort-options').removeClass('active');
                    }
                });
            }
        }

        function closeCatalogContentSettingsSort () {
            $('.cp-content__sort-select').removeClass('active');
            $('.cp-content__sort-options').removeClass('active');
        }
    }
};

// Initialize card favorites action
application.prototype.initCardFavorites = function () {
    if ($('[data-favorites]').length) {
        $(document).on('click', '[data-favorites]', function (e) {
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
            }
            else if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            }
        });
    }
};

// Initialize scroll to
application.prototype.initSmoothScrollTo = function () {
    $('[data-scroll-to]').on('click', function (e) {
        let currentId = $(this).attr('href');
        let offset = null;
        if (window.matchMedia('(min-width: 992px)').matches) {
            offset = 90;
        }
        else {
            offset = 12;
        }

        e.preventDefault();

        $('html, body').animate({
            scrollTop: $(currentId).offset().top - offset
        }, 200);
    });
};

// Initialize datepicker
application.prototype.initDatepicker = function () {
    if ($('.flatpickr').length) {
        const dateElem = $('.flatpickr');

        let newFlatpickr = flatpickr(dateElem, {
            dateFormat: 'd.m.Y',
            disableMobile: 'true',
            locale: 'ru'
        });
    }
};

// Initialize mobile number mask
application.prototype.initMaskedInput = function () {
    if ($('.isPhone').length) {
        $('.isPhone').mask('+7 (999) 999-99-99', { autoclear: false });
    }
};

// Initialize password-switcher
application.prototype.initPasswordSwitcher = function () {
    $(document).on('click', 'input[data-password-switcher]', function(){
        if ($(this).is(':checked')) {
            $(this).closest('.input-wrapper').find('input[data-password-target]').attr('type', 'text');
            $(this).closest('.input-icon-btn').addClass('show');
        }
        else {
            $(this).closest('.input-wrapper').find('input[data-password-target]').attr('type', 'password');
            $(this).closest('.input-icon-btn').removeClass('show');
        }
    });
};

// Initialize select2 plagin
application.prototype.initSelect2 = function () {
    if ($('.js-select2').length) {
        $('.js-select2').select2();
    }
};

// Initialize input dropdown menu
application.prototype.initInputDropdown = function () {
    if ($('.input-wrapper-dropdown').length) {
        $('.input-wrapper-dropdown .input').on('click', function () {
            if (!$(this).closest('.input-wrapper-dropdown').hasClass('.dropdown-active')) {
                $(this).closest('.input-wrapper-dropdown').addClass('dropdown-active');
            }
            else if ($(this).closest('.input-wrapper-dropdown').hasClass('.dropdown-active')) {
                $(this).closest('.input-wrapper-dropdown').removeClass('dropdown-active');
            }
        });

        initInputDropdownSelect();

        $(document).on('click', function (e) {
            if (!$('.input-dropdown-wrapper').is(e.target) && $('.input-wrapper-dropdown').has(e.target).length === 0) {
                closeInputDropdown();
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                closeInputDropdown();
            }
        });

        function initInputDropdownSelect() {
            $('.input-dropdown__item').on('click', function () {
                let selectValue = $(this).text();

                $(this).closest('.input-wrapper-dropdown').find('.input').val(selectValue.trimStart());
                closeInputDropdown();
            });
        }

        function closeInputDropdown () {
            $('.input-wrapper-dropdown').removeClass('dropdown-active');
        }
    }
};


// Initialize dropmenus
application.prototype.initTestShowHideDropmenu = function () {
    if ($('.testShowDropmenu01').length) {
        $('.testShowDropmenu01').on('click', function () {
            $('.testShowDropmenu01').closest('.cart-quick-add').toggleClass('active');

            if(window.matchMedia('(max-width: 991.98px)').matches) {
                $('body').toggleClass('dis-scroll overflow-hidden');
            }
        });
    }
    if ($('.testHideDropmenu01').length) {
        $('.testHideDropmenu01').on('click', function () {
            $('.testShowDropmenu01').closest('.cart-quick-add').removeClass('active');

            if(window.matchMedia('(max-width: 991.98px)').matches) {
                $('body').toggleClass('dis-scroll overflow-hidden');
            }
        });
    }

    if ($('.testShowDropmenu02').length) {
        $('.testShowDropmenu02').on('click', function () {
            $('.testShowDropmenu02').closest('.header-search-results').addClass('request');

            if(window.matchMedia('(max-width: 991.98px)').matches) {
                $('body').toggleClass('dis-scroll overflow-hidden');
            }
        });
    }
};