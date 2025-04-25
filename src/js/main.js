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
    this.initHeaderFloat();
    this.initHeaderContactsClickMobile();
    this.initBurger();
    this.initOverlay();
    this.initMenu();
    this.initMenuCatalogSubmenu();
    this.initBasicSlider();
    this.initSliders();
    this.initCartQuantity();
    this.initBasicTabs();
    this.initInputSearchBehavior();
    this.initSearchResBehavior();
    this.initContactsMap();
    this.initFooterAccordion();
    this.initCardAction();
    this.initCardActionMore();
    this.initCatalogContentSort();
    this.initSortSwitch();
    this.initPageUp();

    this.initTestShowHideDropmenu();
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

// Initialize header contacts click mobile
application.prototype.initHeaderContactsClickMobile = function () {
    $(window).on('resize', headerContactsOnResizeOff);

    $('.header-contacts__email').on('click', function () {
        if(window.matchMedia('(max-width: 575.98px)').matches) {
            $(this).addClass('active');
        }
    });

    function headerContactsOnResizeOff() {
        if(window.matchMedia('(min-width: 576)').matches) {
            $('.header-contacts__email').removeClass('active');
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
        const currentRootItem = $(".menu-catalog-root-link[data-submenu-section='0']");
        const currentSubmenuItem = $(".menu-catalog-submenu-section[data-root-pointer='0']");
        let currentCatalogTitle = catalogTitle.data('catalog-title');

        catalogTitle.text(currentCatalogTitle);
        rootItem.closest('.menu-catalog-root').removeClass('hide');
        rootItem.closest('.menu-catalog').find('.menu-catalog-submenu').removeClass('active');
        $('.menu-catalog-root-link').removeClass('selected');
        currentRootItem.addClass('selected');
        $('.menu-catalog-submenu-section').removeClass('active');
        currentSubmenuItem.addClass('active');
    });

    if (window.matchMedia('(min-width: 1200px)').matches) {
        if (!$('html').hasClass('touch')) {
            rootItem.on('mouseover', function () {
                let rootItemId = $(this).data('submenu-section');

                $('.menu-catalog-submenu-section').removeClass('active');
                $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
            });
        }
        else {
            rootItem.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                let rootItemId = $(this).data('submenu-section');

                $('.menu-catalog-submenu-section').removeClass('active');
                $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
            });
        }
    }
    else if (window.matchMedia('(max-width: 1199.98px)').matches) {
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
            $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
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
        let spaceBetween = 20;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            // spaceBetween
            if (window.matchMedia('(min-width: 992px)').matches) {
                if(slider.eq(i).is('[data-basic-slider-sm]')) {
                    spaceBetween = 12;
                }
                else {
                    spaceBetween = 20;
                }
            }
            else if (window.matchMedia('(max-width: 991.98px)').matches) {
                spaceBetween = 8;
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
    if ($('.index-top-primary .swiper').length) {
        const indexTopPrimarySliderSettings = {
            slidesPerView: 'auto',
            spaceBetween: 12,
            loop: true,
            autoplay: {delay: 5000},
            navigation: {
                nextEl: '.index-top-primary .swiper .swiper-button-next',
                prevEl: '.index-top-primary .swiper .swiper-button-prev',
            },
            pagination: {
                el: '.index-top-primary .swiper .swiper-pagination',
            },
        };
        let indexTopPrimarySlider = new Swiper('.index-top-primary .swiper', indexTopPrimarySliderSettings);
    }

    if ($('.index-top-secondary .swiper').length) {
        const indexTopSecondarySliderSettings = {
            slidesPerView: 'auto',
            spaceBetween: 12,
            navigation: {
                nextEl: '.index-top-secondary .swiper .swiper-button-next',
                prevEl: '.index-top-secondary .swiper .swiper-button-prev',
            },
            pagination: {
                el: '.index-top-secondary .swiper .swiper-pagination',
            },
        };
        let indexTopSecondarySlider = new Swiper('.index-top-secondary .swiper', indexTopSecondarySliderSettings);
    }

    if ($('.partner-slider').length) {
        const partnerSliderSettings = {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 4,
            loop: true,
            autoplay: {delay: 5000},
            navigation: {
                nextEl: '.partner .swiper-button-next',
                prevEl: '.partner .swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 4,
                    spaceBetween: 12,
                },
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 12,
                },
                1440: {
                    slidesPerView: 7,
                    spaceBetween: 12,
                },
            }
        };
        let partnerSlider = new Swiper('.partner-slider', partnerSliderSettings);
    }

    if ($('.offers-slider').length) {
        const offersSliderSettings = {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 4,
            loop: true,
            autoplay: {delay: 5000},
            navigation: {
                nextEl: '.offers .swiper-button-next',
                prevEl: '.offers .swiper-button-prev',
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 12,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 12,
                },
            }
        };
        let offersSlider = new Swiper('.offers-slider', offersSliderSettings);
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

// Initialize footer accordion
application.prototype.initFooterAccordion = function () {
    if ($(".accordion-footer").length) {
        initAccordionResponsive();

        function initAccordionResponsive() {
            const accordions = Array.from(document.querySelectorAll('.accordion-footer'));
            let footerAccordion = null;

            $(accordions).each(function (i) {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(footerAccordion != null) {
                        if(footerAccordion[i] != null) {
                            footerAccordion[i].destroy();
                            footerAccordion[i] = null;
                        }
                    }
                    return;
                } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    footerAccordion = new Accordion(accordions, {
                        duration: 200,
                        showMultiple: true,
                        onlyChildNodes: false,
                    });
                    footerAccordion[i].closeAll();
                }
            });
        }
    }
};

// Initialize card actions
application.prototype.initCardAction = function () {
    if ($('[data-action]').length) {
        $(document).on('click', '[data-action]', function (e) {
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
            }
            else if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            }
        });
    }
};

// Initialize button "more" in card-product
application.prototype.initCardActionMore = function () {
    if ($('[data-card-cta-more]').length) {
        $('[data-card-cta-more]').on('click', function () {
            if(!$(this).hasClass('active')) {
                $('[data-card-cta-more]').not($(this)).removeClass('active');
                $('[data-card-cta-content]').removeClass('active');
                $(this).addClass('active');
                $(this).siblings('[data-card-cta-content]').addClass('active');
            } else {
                $(this).removeClass('active');
                $(this).siblings('[data-card-cta-content]').removeClass('active');
            }
        });

        $(document).on('click', function (e) {
            if ($('.card__cta').is(e.target) || $('.card__cta').has(e.target).length === 0) {
                $('[data-card-cta-more]').removeClass('active');
                $('[data-card-cta-content]').removeClass('active');
            }
        });
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

                if (window.matchMedia('(max-width: 1199.98px)').matches) {
                    let selectPlaceholder = $('.cp-content__sort-label.active').text();

                    $('.cp-content__sort').find('.cp-content__sort-select .cp-content__sort-select-value').text(selectPlaceholder);
                    closeCatalogContentSettingsSort();
                }
            });
        }

        function catalogSettingsSortSelect() {
            if (window.matchMedia('(min-width: 1200px)').matches) {
                closeCatalogContentSettingsSort();
            } else if (window.matchMedia('(max-width: 1199.98px)').matches) {
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

// Initialize sort switch
application.prototype.initSortSwitch = function () {
    if ($('.cp-content__sort-label').length) {
        $('.cp-content__sort-label').on('click', function () {
            if ($(this).hasClass('asc')) {
                $(this).removeClass('asc').addClass('desc');
            }
            else if ($(this).hasClass('desc')) {
                $(this).removeClass('desc').addClass('asc');
            }
        });
    }
};

// Initialize page up move
application.prototype.initPageUp = function () {
    if ($('.page-up').length) {
        const btn = $('.page-up');

        setPageUpShow();
        $(window).on('scroll', setPageUpShow);

        btn.on('click', function () {
            $('html, body').animate({
                scrollTop: $('body').scrollTop()
            }, 300);
        });

        function setPageUpShow() {
            let sensDistance = $(window).height() + 50;

            if ($(window).scrollTop() > sensDistance) {
                btn.removeClass('visually-hidden');
            } else {
                btn.addClass('visually-hidden');
            }
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