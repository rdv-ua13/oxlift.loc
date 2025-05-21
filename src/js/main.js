document.addEventListener('DOMContentLoaded', () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;

    /*
     // Braikpoints
      let screenPoints = {
        mobSmall: 480,
        mob: 670,
        ipad: 960,
        tablet: 1280,
        laptop: 1440
      };
    */
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
    this.initBasicTabs();
    this.initInputSearchBehavior();
    this.initSearchResBehavior();
    this.initContactsMap();
    this.initFooterAccordion();
    this.initPageUp();

    this.initTestShowHideDropmenu();

    this.initCatalogContentSort();
    this.initCatalogAccordion();
    this.initCatalogRange();
    this.initCatalogFilter();
    this.initCatalogInputAmount();

    this.initCardProductRelated();
    this.initCardProductReadmore();
    /*this.initCardProductSliders();*/
    this.initCardProductTabs();
    /*this.initMobileSearch();*/
    this.initAsMaterikContactsMap();
    this.initMaskedInput();
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
        if(window.matchMedia('(max-width: 575px)').matches) {
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
    else if (window.matchMedia('(max-width: 1199px)').matches) {
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
            if (window.matchMedia('(min-width: 960px)').matches) {
                if(slider.eq(i).is('[data-basic-slider-xs]')) {
                    spaceBetween = 4;
                }
                else if(slider.eq(i).is('[data-basic-slider-sm]')) {
                    spaceBetween = 12;
                }
                else {
                    spaceBetween = 20;
                }
            }
            else if (window.matchMedia('(max-width: 959px)').matches) {
                if(slider.eq(i).is('[data-basic-slider-xs]')) {
                    spaceBetween = 4;
                }
                else {
                    spaceBetween = 8;
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
    if ($('[data-basic-product-slider]').length) {
        const slider = $('[data-basic-product-slider]');
        let basicProductSlider = null;
        let spaceBetween = 12;

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-product-slider-wrap-' + i);

            // spaceBetween
            if (window.matchMedia('(min-width: 960px)').matches) {
                spaceBetween = 12;
            }
            else if (window.matchMedia('(max-width: 959px)').matches) {
                spaceBetween = 8;
            }

            const basicProductSliderSetting = {
                slidesPerView: 2,
                slidesPerGroup: 1,
                spaceBetween: spaceBetween,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-product-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-product-slider-wrap-' + i + ' .swiper-button-prev',
                },
                pagination: {
                    el: '.basic-product-slider-wrap-' + i + ' .swiper-pagination',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 3,
                        spaceBetween: spaceBetween
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: spaceBetween
                    },
                    1440: {
                        slidesPerView: 5,
                        spaceBetween: spaceBetween
                    },
                }
            };

            basicProductSlider = new Swiper('.basic-product-slider-wrap-' + i + ' .basic-slider', basicProductSliderSetting);
        });
    }

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
                670: {
                    slidesPerView: 3,
                    spaceBetween: 12,
                },
                960: {
                    slidesPerView: 4,
                    spaceBetween: 12,
                },
            }
        };
        let offersSlider = new Swiper('.offers-slider', offersSliderSettings);
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
                if (window.matchMedia('(min-width: 960px)').matches) {
                    if(footerAccordion != null) {
                        if(footerAccordion[i] != null) {
                            footerAccordion[i].destroy();
                            footerAccordion[i] = null;
                        }
                    }
                    return;
                } else if (window.matchMedia('(max-width: 959px)').matches) {
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

            if(window.matchMedia('(max-width: 991px)').matches) {
                $('body').toggleClass('dis-scroll overflow-hidden');
            }
        });
    }

    if ($('.testShowDropmenu02').length) {
        $('.testShowDropmenu02').on('click', function () {
            $('.testShowDropmenu02').closest('.header-search-results').addClass('request');

            if(window.matchMedia('(max-width: 991px)').matches) {
                $('body').toggleClass('dis-scroll overflow-hidden');
            }
        });
    }
};


// Initialize catalog content sort
application.prototype.initCatalogContentSort = function () {
    if ($('.js-sort-btn').length) {
        let $sortBtn = $('.js-sort-btn');
        let $sortList = $('.js-sort-list');
        let $productSortBtn = $('.js-product-sort-btn');

        $sortBtn.on('click', function () {
            $(this).toggleClass('open');
            $sortList.toggleClass('open');
        });

        $productSortBtn.on('click', function () {
            let dataSort = $(this).attr('data-sort');
            let isActive = $(this).hasClass('active');
            let isAsc = $(this).hasClass('asc');
            let doAsc = 'desc';
            if(isAsc)doAsc = 'asc';

            if (window.matchMedia("(max-width: 1199px)").matches) {
                $sortBtn.removeClass('open');
                $sortList.removeClass('open');
            }

            if (isActive && isAsc) {
                $(this).removeClass('asc');
                $(this).addClass('desc');
                catalogSort({sort: dataSort, order: 'desc', is_catalog_ajax: 'Y'});
                return;
            }

            if (isActive && !isAsc) {
                $(this).removeClass('desc');
                $(this).addClass('asc');
                catalogSort({sort: dataSort, order: 'asc', is_catalog_ajax: 'Y'});
                return;
            }

            $productSortBtn.removeClass('active');
            $(this).addClass('active');
            catalogSort({sort: dataSort, order: doAsc, is_catalog_ajax: 'Y'});
        });

        function catalogSort(data) {
            $.ajax({
                type: 'get',
                data: data,
                success: function (res) {
                    $("#catalogContent").html(res);
                }
            });
        }
    }
};

// Initialize catalog accordion
application.prototype.initCatalogAccordion = function () {
    let accordionArr = document.querySelectorAll('.js-accordion');

    if (accordionArr.length !== 0) {
        for (let i = 0; i < accordionArr.length; i++) {
            accordionArr[i].querySelector('.js-accordion-btn').addEventListener('click', toggleAccordion);

            if (accordionArr[i].querySelector('.js-accordion-btn').classList.contains('js-accordion-btn--active')) {
                accordionArr[i].querySelector('.js-accordion-info').style.display = "block";
            }
        }
    }

    function toggleAccordion(event, element) {
        event.preventDefault();
        let item;

        if (event) {
            item = this;
        } else {
            item = element;
        }

        item.classList.toggle('js-accordion-btn--active');
        $(item.closest('.js-accordion').querySelector('.js-accordion-info')).slideToggle(300);
    }
};

// Initialize catalog range slider
application.prototype.initCatalogRange = function () {
    let rangeItemsArr = document.querySelectorAll('.js-range-slider');

    if (rangeItemsArr.length !== 0) {
        let startRange = function startRange(item) {
            let currentInputFrom = item.closest('.js-range').querySelector('.range__input--from');
            let currentInputTo = item.closest('.js-range').querySelector('.range__input--to');
            let startValue = +item.dataset.start;
            let finishValue = +item.dataset.finish;
            let minValue = +item.dataset.min;
            let maxValue = +item.dataset.max;
            let stepValue = +item.dataset.step;
            noUiSlider.create(item, {
                // инициализируем слайдер
                start: [startValue, finishValue],
                // устанавливаем начальные значения
                connect: true,
                range: {
                    // устанавливаем минимальное и максимальное значения
                    'min': minValue,
                    'max': maxValue
                },
                step: stepValue // шаг изменения значений

            });
            item.noUiSlider.on('update', function (value) {
                // при изменений положения элементов управления слайдера изменяем соответствующие значения
                currentInputFrom.value = parseInt(value[0]).toLocaleString("ru");
                currentInputTo.value = parseInt(value[1]).toLocaleString("ru");
            });
            item.noUiSlider.on('change', function (value) {
                // при изменений положения элементов управления слайдера изменяем соответствующие значения

                $(currentInputFrom).change();
            });
            currentInputFrom.addEventListener('change', function () {
                // при изменении меньшего значения в input - меняем положение соответствующего элемента управления
                let currentValue = parseInt(this.value.replace(",", ".").replace(/[^0-9.]/gim, ""));
                item.noUiSlider.set([currentValue, null]);
            });
            currentInputTo.addEventListener('change', function () {
                // при изменении меньшего значения в input - меняем положение соответствующего элемента управления
                let currentValue = parseInt(this.value.replace(",", ".").replace(/[^0-9.]/gim, ""));
                item.noUiSlider.set([null, currentValue]);
            });
        };

        for (let i = 0; i < rangeItemsArr.length; i++) {
            startRange(rangeItemsArr[i]);
        }
    }
};

// Initialize catalog filter
application.prototype.initCatalogFilter = function () {
    let $btnFilterOpen = $('.js-btn-filter-mobile');
    let $btnFilterClose = $('.js-btn-filter-close');
    let $productFilter = $('.js-product-filter');

    let isbodyScrollEnabled = false;
    $btnFilterOpen.on('click', function () {
        $productFilter.addClass('open');
        return application.prototype.disableScroll();
    });
    $btnFilterClose.on('click', function () {
        $productFilter.removeClass('open');
        return application.prototype.enableScroll();
    });
    $(".js-product-filter .product_filter_btn_exec").on('click', function () {
        $productFilter.removeClass('open');
        return application.prototype.enableScroll();
    });

    $(window).resize(function () {
        if (!window.matchMedia("(max-width: 991px").matches && isbodyScrollEnabled) {
            $productFilter.removeClass('open');
            return application.prototype.enableScroll();
        }
    });
};

// Initialize catalog input amount
application.prototype.initCatalogInputAmount = function () {
    //******** Изменение кол-ва единиц в input по клику на +/- *******//
    let fieldsNum = document.querySelectorAll('.js-amount-block');

    if (fieldsNum.length !== 0) {
        for (let item = 0; item < fieldsNum.length; item++) {
            fieldsNum[item].addEventListener('click', changeValueInputByButton);
            fieldsNum[item].addEventListener('change', changeValueInput);
        }
    }

    function changeValueInputByButton(event) {
        let eventTarget = event.target;
        let block = this;
        let currentNum = block.querySelector('.js-amount');
        let change = 0; //изменение

        let step = +currentNum.step || 1; //шаг

        if (eventTarget.closest('.js-amount-btn-reduce')) {
            change = -step;
        } else if (eventTarget.closest('.js-amount-btn-increase')) {
            change = +step;
        }

        let newCount = +currentNum.value + change;
        currentNum.value = newCount; //создаем событие изменения значения form-num__input - чтобы не дублировать условия изменения input

        let numInputChange;

        if (typeof Event === 'function') {
            numInputChange = new Event('change', {
                bubbles: true,
                cancelable: true
            });
        } else {
            numInputChange = document.createEvent('Event');
            numInputChange.initEvent('change', true, true);
        }

        currentNum.dispatchEvent(numInputChange);
    } //Изменение кол-ва единиц в input по заполнению


    function changeValueInput(event) {
        let eventTarget = event.target;
        let minNum = +eventTarget.min || 0; //минимальное значение

        let maxNum = +eventTarget.max || Infinity; //максимальное значение

        let valueInput = +eventTarget.value;

        if (valueInput < minNum) {
            eventTarget.value = minNum;
            alert("\u041A\u043E\u043B\u0438\u0447\u0435\u0441\u0442\u0432\u043E \u043D\u0435 \u043C\u043E\u0436\u0435\u0442 \u0431\u044B\u0442\u044C \u043C\u0435\u043D\u044C\u0448\u0435 ".concat(minNum));
        } else if (valueInput > maxNum) {
            eventTarget.value = maxNum;
            alert("\u041A\u043E\u043B\u0438\u0447\u0435\u0441\u0442\u0432\u043E \u043D\u0435 \u043C\u043E\u0436\u0435\u0442 \u0431\u044B\u0442\u044C \u0431\u043E\u043B\u044C\u0448\u0435 ".concat(maxNum));
        } //создаем событие 'input-number-change'


        let inputNumberChangeEvent;

        if (typeof Event === 'function') {
            inputNumberChangeEvent = new Event('input-number-change', {
                bubbles: true,
                cancelable: true
            });
        } else {
            inputNumberChangeEvent = document.createEvent('Event');
            inputNumberChangeEvent.initEvent('input-number-change', true, true);
        }

        eventTarget.dispatchEvent(inputNumberChangeEvent);
    }
};

// Initialize card-product related
application.prototype.initCardProductRelated = function () {
    // Слайдеры product-promo на странице товара
    if (window.matchMedia("(max-width: 767px").matches) {
        $('#product-promo-slider-mob').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            rows: 0
        });
    }
};

// Initialize card-product readmore
application.prototype.initCardProductReadmore = function () {
    //Функционал "читать далее"
    let showMoreTextArr = document.querySelectorAll('.js-show-more-text');

    if (showMoreTextArr.length !== 0) {
        let addBtnShowMoreText = function addBtnShowMoreText(item) {
            let elementArr = item.querySelectorAll('p,ul,ol,h2,h3');
            let start = item.dataset.startValue;
            let btnName = item.dataset.nameBtn;

            if (elementArr.length > start) {
                /*item.insertAdjacentHTML('beforeend', "<button class=\"btn-reset js-show-more-text-btn\">".concat(btnName, "</button>"));*/
                item.querySelector('.js-show-more-text-btn').addEventListener('click', toggleShowMoreText);
                let elementArr = item.querySelectorAll('p,ul,ol,h2,h3');

                for (let j = start; j < elementArr.length; j++) {
                    $(elementArr[j]).slideUp(300);
                }
            }
        };

        let toggleShowMoreText = function toggleShowMoreText(event) {
            let parentItem = this.closest('.js-show-more-text');
            let paragraphArr = parentItem.querySelectorAll('p,ul,ol,h2,h3');
            let start = parentItem.dataset.startValue;
            let btnName = parentItem.dataset.nameBtn;

            if (this.classList.contains('js-show-more-text-btn--close')) {
                this.innerHTML = btnName;
                this.classList.remove('js-show-more-text-btn--close');
            } else {
                this.innerHTML = 'Скрыть';
                this.classList.add('js-show-more-text-btn--close');
            }

            for (let j = start; j < paragraphArr.length; j++) {
                $(paragraphArr[j]).slideToggle(300);
            }
        };

        for (let i = 0; i < showMoreTextArr.length; i++) {
            let currentItem = showMoreTextArr[i];
            let currentMediaQuery = currentItem.dataset.mediaQuery;

            if (currentMediaQuery !== 'all') {
                if (window.matchMedia("(max-width: ".concat(currentMediaQuery, "px)")).matches) {
                    addBtnShowMoreText(currentItem);
                }
            } else {
                addBtnShowMoreText(currentItem);
            }
        }
    }
};

// Initialize card-product sliders
application.prototype.initCardProductSliders = function () {
    // Слайдеры фотогалереи на странице товара
    function startMobSliderProduct() {
        $('#product-mob-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.j-single-m-products-slider-prev'),
            nextArrow: $('.j-single-m-products-slider-next'),
            rows: 0,
            touchThreshold: 100,
            swipeToSlide: true,
            cssEase: 'ease-out',
            speed: 300
        });
    }

    function startDesctopSliderProduct() {
        $('#product-photogallery').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '#product-thumbs',
            rows: 0,
            speed: 1000,
            fade: true,
            cssEase: 'linear'
        });

        $('#product-thumbs').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.j-single-products-slider-prev'),
            nextArrow: $('.j-single-products-slider-next'),
            asNavFor: '#product-photogallery',
            focusOnSelect: true,
            rows: 0,
            centerMode: true,
            centerPadding: '0',
        });
    }


    function startDesctopSliderReview() {
        $('.product_review_thumbs').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.rev_slider_prev'),
            nextArrow: $('.rev_slider_next'),
            //asNavFor: '#product-photogallery',
            focusOnSelect: true,
            rows: 0,
            centerMode: true,
            centerPadding: '0',
        });
        $('.product_review_thumbs_all').slick({
            slidesToShow: 8,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $('.rev_slider_prev_all'),
            nextArrow: $('.rev_slider_next_all'),
            //asNavFor: '#product-photogallery',
            focusOnSelect: true,
            rows: 0,
            centerMode: true,
            centerPadding: '0',
        });
    }

    $('button[data-tabs-link="reviews"]').click(function(){
        $('.product_review_thumbs').slick('unslick');
        $('.product_review_thumbs_all').slick('unslick');
        startDesctopSliderReview();
    })


    function currentVersionWindow() {
        if (window.matchMedia(`(max-width: ${screenPoints.ipad - 1}px)`).matches) {
            let currentVersion = 'mob';
        } else {
            let currentVersion = 'desc';
        }
        return currentVersion;
    }

    function checkPhotogalleryInCardProduct() {
        let newVersionWindow = currentVersionWindow();

        if (newVersionWindow !== currentVersion) {
            if (newVersionWindow === 'mob') {
                $('#product-photogallery').slick('unslick'); //убираем десктопную карусель
                $('#product-thumbs').slick('unslick'); //убираем десктопную карусель
                startMobSliderProduct(); //запускаем мобильную карусель
            } else {
                $('#product-mob-slider').slick('unslick'); //убираем мобильную карусель
                startDesctopSliderProduct();     //запускаем десктопные карусель
                startDesctopSliderReview()
            }
            currentVersion = newVersionWindow;
        }
    }

    if (document.querySelector('#product-photogallery')) {
        if (window.matchMedia(`(max-width: 991px)`).matches) {
            startMobSliderProduct();
        } else {
            startDesctopSliderProduct();
            startDesctopSliderReview()
        }

        let currentVersion = currentVersionWindow();

        window.addEventListener('resize', checkPhotogalleryInCardProduct);
    }
};

// Initialize card-product tabs
application.prototype.initCardProductTabs = function () {
    //Табы
    let tabsBlockArr = document.querySelectorAll('.js-tabs');

    if (tabsBlockArr.length !== 0) {
        for (let i = 0; i < tabsBlockArr.length; i++) {
            tabsBlockArr[i].addEventListener('click', changeActiveTab);
        }
    }

    function changeActiveTab(event) {
        let tabsBlock = this;
        let currentTabsBtn = event.target.closest('.js-tabs-btn');

        if (currentTabsBtn) {
            tabsBlock.querySelector('.js-tabs-btn--active').classList.remove('js-tabs-btn--active');
            currentTabsBtn.classList.add('js-tabs-btn--active');
            let dataBlock = currentTabsBtn.dataset.tabsLink;
            let currentOpenTabNode = tabsBlock.querySelector('.js-tabs-info--open');
            let willOpenTabNode = tabsBlock.querySelector(".js-tabs-info[data-tabs-id=".concat(dataBlock, "]"));
            currentOpenTabNode.classList.remove('js-tabs-info--open');

            if ($(currentOpenTabNode).hasClass('j-products-slider')) {
                unslickSlickSlider($(currentOpenTabNode));
            }

            willOpenTabNode.classList.add('js-tabs-info--open');

            if ($(willOpenTabNode).hasClass('j-products-slider')) {
                initSlickSlider($(willOpenTabNode));
            }
        }
    }
};

// Initialize card-product tabs
application.prototype.initMobileSearch = function () {
    //Поиск на мобильном
    let $searchBtn = $('.js-mobile-search-btn');
    let $headerLogo = $('.js-header-logo');
    let $searchForm = $('.js-header-search');
    let isSearchOpen = false;
    $(document).on('click', function (event) {
        if (!window.matchMedia("(max-width: 767px)").matches) {
            return;
        }

        if ($(event.target).closest('.js-mobile-search-btn').length) {
            /*$searchBtn.hide();*/
            $headerLogo.hide();
            $searchForm.show();
            $searchForm.find('input').focus();
            isSearchOpen = true;
            return;
        }

        if (!$(event.target).closest('.js-header-search').length && isSearchOpen) {
            /*$searchBtn.show();*/
            $headerLogo.show();
            $searchForm.hide();
            $searchForm.find('input').val('');
            isSearchOpen = false;
        }
    });
    $(window).resize(function () {
        if (window.matchMedia("(max-width: 767px)").matches) {
            return;
        }

        if (!isSearchOpen) {
            $searchForm.removeAttr('style');
            isSearchOpen = true;
        }
    });
};

// Initialize
application.prototype.initAsMaterikContactsMap = function () {
    /*startDeliveryMap();*/ // Карта пунктов выдачи
    /*startDeliveryPointsMap();*/ //Карта для контактов
    startContactsMap();

    //Карта выбора точки для доставки
    function startDeliveryMap() {
        let hasMapDelivery = document.querySelector('#delivery-map');

        if (hasMapDelivery) {
            let init = function init() {
                //Создаем карту
                MapDelivery = new ymaps.Map('delivery-map', {
                    center: centerMap,
                    zoom: 10,
                    controls: ['zoomControl'] // Отключаем все элементы управления

                });
                MapDelivery.behaviors.disable('scrollZoom'); //запрет прокрутки по скроллу
                // Подключаем поисковые подсказки к полю ввода.

                let suggestView = new ymaps.SuggestView('js-delivery-address'),
                    MapDelivery,
                    placemark; // Создаём коллекцию меток для дистрибьютеров

                let itemsCollection = new ymaps.GeoObjectCollection();
                let inputAddress = document.querySelector('.js-delivery-address');

                if (inputAddress.value !== "") {
                    getGeocode();
                }

                inputAddress.addEventListener('change', getGeocode); //!!!Получение координат

                function getGeocode() {
                    // Забираем запрос из поля ввода.
                    let request = $('.js-delivery-address').val(); // Геокодируем введённые данные.

                    ymaps.geocode(request).then(function (res) {
                        let obj = res.geoObjects.get(0),
                            error,
                            hint,
                            coordinates;

                        if (obj) {
                            // Об оценке точности ответа геокодера можно прочитать тут: https://tech.yandex.ru/maps/doc/geocoder/desc/reference/precision-docpage/
                            switch (obj.properties.get('metaDataProperty.GeocoderMetaData.precision')) {
                                case 'exact':
                                    break;

                                case 'number':
                                case 'near':
                                case 'range':
                                    error = 'Неточный адрес, требуется уточнение';
                                    hint = 'Уточните номер дома';
                                    break;

                                case 'street':
                                    error = 'Неполный адрес, требуется уточнение';
                                    hint = 'Уточните номер дома';
                                    break;

                                case 'other':
                                default:
                                    error = 'Неточный адрес, требуется уточнение';
                                    hint = 'Уточните адрес';
                            }
                        } else {
                            error = 'Адрес не найден';
                            hint = 'Уточните адрес';
                        } // Если геокодер возвращает пустой массив или неточный результат, то показываем ошибку.
                        // if (error) {
                        //   console.log(error);
                        //   console.log(hint);
                        // } else {
                        //   coordinates = obj.geometry._coordinates;
                        //   addNewPlacemark(coordinates);
                        // }


                        coordinates = obj.geometry._coordinates;
                        addNewPlacemark(coordinates, request);
                    }, function (e) {
                        console.log(e);
                    });
                } //END Получение координат


                function addNewPlacemark(coordinates, address) {
                    itemsCollection.removeAll();
                    MapDelivery.setCenter(coordinates);
                    let currentPlacemark = new ymaps.Placemark(coordinates, {
                        iconContent: address
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '/local/templates/materik_2024/images/icons/balloon.png',
                        iconImageSize: [44, 55],
                        iconImageOffset: [-22, -27],
                        // preset: '/local/templates/materik_2024/images/icons/balloon.png',
                        // iconColor: '#2d7fe9',
                        hideIconOnBalloonOpen: false
                    }); // Добавляем метку в коллекцию

                    itemsCollection.add(currentPlacemark);
                } // Добавляем коллекцию на карту


                MapDelivery.geoObjects.add(itemsCollection); //!!!Отслеживаем выбор точки!!!

                itemsCollection.events.add('click', function (e) {
                    let element = e.get('target').properties._data.iconContent;

                    console.log(element);
                }); //End Отслеживаем выбор точки!
            };

            if (window.matchMedia("(max-width: 670px)").matches) {
                let centerMap = [59.939099, 30.315877];
            } else if (window.matchMedia("(max-width: 960px)").matches) {
                let centerMap = [59.939099, 30.315877];
            } else {
                let centerMap = [59.939099, 30.315877];
            }

            let MapDelivery;
            ymaps.ready(init);
        }
    }

    // Карта пунктов выдачи
    function startDeliveryPointsMap() {
        let hasMaPoints = document.querySelector('#points-map');

        if (hasMaPoints) {
            let init = function init() {
                //Создаем карту
                MapPoints = new ymaps.Map('points-map', {
                    center: centerMap,
                    zoom: 10,
                    controls: ['zoomControl'] // Отключаем все элементы управления

                });
                MapPoints.behaviors.disable('scrollZoom'); //запрет прокрутки по скроллу
                // Создаём коллекцию меток для дистрибьютеров

                let itemsCollection = new ymaps.GeoObjectCollection();

                for (let j = 0; j < listItemsPoints.length; j++) {
                    let info = listItemsPoints[j];
                    let currentPlacemark = new ymaps.Placemark(info.coordinates, {
                        iconContent: info.id,
                        // hintContent: info.name,
                        balloonContent: "\n            <div class=\"choise-address__map-ballon\">\n              <p class='choise-address__map-adress-name'>".concat(info.name, "</p>\n              <p class='choise-address__map-adress'>").concat(info.address, "</p>\n            </div>\n            ") // balloonContentHeader: `<p class='map__adress-name'>${info.name}</p>`,
                        // balloonContentBody: `<p class='map__adress'>${info.address}</p>`

                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '/local/templates/materik_2024/images/icons/balloon-gray.png',
                        iconImageSize: [44, 55],
                        iconImageOffset: [-22, -27],
                        // preset: '/local/templates/materik_2024/images/icons/balloon.png',
                        // iconColor: '#2d7fe9',
                        hideIconOnBalloonOpen: false
                    }); // Добавляем метку в коллекцию

                    itemsCollection.add(currentPlacemark);
                } // Добавляем коллекцию на карту


                MapPoints.geoObjects.add(itemsCollection); // JОтслеживаем hover

                if (!window.matchMedia("(max-width: 1200px)").matches) {
                    itemsCollection.events.add('mouseenter', function (e) {
                        if (!e.get('target').balloon.isOpen()) {// e.get('target').balloon.open();
                        }
                    });
                    itemsCollection.events.add('mouseleave', function (e) {});
                } //Отслеживаем выбор точки!


                itemsCollection.events.add('click', function (e) {
                    if (!e.get('target').balloon.isOpen()) {
                        e.get('target').balloon.open(); //открываем баллун
                    } //перебор всех значений коллекции


                    itemsCollection.each(function (geoObject) {
                        geoObject.options.set('iconImageHref', '/local/templates/materik_2024/images/icons/balloon-gray.png');
                    }); //меняем у выбранного иконку

                    e.get('target').options.set('iconImageHref', '/local/templates/materik_2024/images/icons/balloon.png'); //получаем адрес (параметр по которому будем сравнивать с радио-кнопками)

                    let element = e.get('target');
                    let address = element.properties._data.iconContent; // let elementsArr = document.querySelectorAll('.js-map-element');

                    if (elementsArr.length !== 0) {
                        for (let i = 0; i < elementsArr.length; i++) {
                            if (elementsArr[i].value === address) {
                                elementsArr[i].checked = true; //событие изменение радио-кнопок

                                let changeAdress;

                                if (typeof Event === 'function') {
                                    changeAdress = new Event('change', {
                                        bubbles: true,
                                        cancelable: true
                                    });
                                } else {
                                    changeAdress = document.createEvent('Event');
                                    changeAdress.initEvent('change', true, true);
                                }

                                elementsArr[i].dispatchEvent(changeAdress); //вызываем событие
                            }
                        }
                    } //меняем центр карты


                    let newCoordinates = element.geometry._coordinates;
                    MapPoints.setCenter(newCoordinates);
                }); //End Отслеживаем выбор точки!
                //Отслеживаем клики на radio-button

                let elementsArr = document.querySelectorAll('.js-map-element');

                if (elementsArr.length !== 0) {
                    for (let i = 0; i < elementsArr.length; i++) {
                        elementsArr[i].addEventListener('click', changeMapObject);
                    }
                }

                function changeMapObject(element) {
                    let adress = this.value;
                    itemsCollection.each(function (geoObject) {
                        if (geoObject.properties._data.balloonContent.indexOf(adress) !== -1) {
                            geoObject.options.set('iconImageHref', '/local/templates/materik_2024/images/icons/balloon.png');

                            if (!geoObject.balloon.isOpen()) {
                                geoObject.balloon.open(); //открываем баллун
                            } //меняем центр карты


                            let newCoordinates = geoObject.geometry._coordinates;
                            MapPoints.setCenter(newCoordinates);
                        } else {
                            geoObject.options.set('iconImageHref', '/local/templates/materik_2024/images/icons/balloon-gray.png');
                        }
                    });
                } //End Отслеживаем клики на radio-button

            };

            if (window.matchMedia("(max-width: 670px)").matches) {
                let centerMap = [59.939099, 30.315877];
            } else if (window.matchMedia("(max-width: 960px)").matches) {
                let centerMap = [59.939099, 30.315877];
            } else {
                let centerMap = [59.939099, 30.315877];
            }

            let MapPoints; // Список точек на карте Пунктов выдачи

            let listItemsPoints = [{
                'coordinates': [59.943607, 30.439485],
                'id': 'Якорная',
                'name': 'Якорная',
                'address': 'ул. Якорная, 16/1 (ст. м. «Ладожская»)'
            }, {
                'coordinates': [59.896323, 30.251459],
                'id': 'Нарвская',
                'name': 'Нарвская',
                'address': 'ул. Калинина, 39 (ст. м. «Нарвская»)'
            }, {
                'coordinates': [59.947500, 30.254342],
                'id': 'Василеостровская',
                'name': 'Василеостровская',
                'address': 'наб. реки Смоленки, 31 (ст. м. «Василеостровская, Приморская»)'
            }];
            ymaps.ready(init);
        }
    }

    //Карта для контактов
    function startContactsMap() {
        let hasMapContacts = document.querySelector('#contacts-map');

        if (hasMapContacts) {
            let centerMap = [55.577622, 37.624192];
            let zoomMap = null;
            if (window.matchMedia("(max-width: 669px)").matches) {
                zoomMap = 10;
            } else if (window.matchMedia("(max-width: 959px)").matches) {
                zoomMap = 11;
            } else {
                zoomMap = 12;
            }

            let init = function init() {
                //Создаем карту
                MapContacts = new ymaps.Map('contacts-map', {
                    center: centerMap,
                    zoom: zoomMap,
                    controls: ['zoomControl'] // Отключаем все элементы управления

                });
                MapContacts.behaviors.disable('scrollZoom'); //запрет прокрутки по скроллу
                // Создаём коллекцию меток

                let itemsCollection = new ymaps.GeoObjectCollection(); // ***New*** //

                for (let j = 0; j < listItemsContacts.length; j++) {
                    let info = listItemsContacts[j];
                    let currentPlacemark = new ymaps.Placemark(info.coordinates, {
                        iconContent: info.id,
                        balloonContent: "\n            <div class=\"choise-address__map-ballon\">\n              <p class='choise-address__map-adress-id'>".concat(info.id, "</p>\n              <p class='choise-address__map-adress-name'>").concat(info.name, "</p>\n              <p class='choise-address__map-adress'>").concat(info.address, "</p>\n            </div>\n            ")
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '/img/balloon-gray.png',
                        iconImageSize: [44, 55],
                        iconImageOffset: [-22, -27],
                        hideIconOnBalloonOpen: false
                    }); // Добавляем метку в коллекцию

                    itemsCollection.add(currentPlacemark);
                } // Добавляем коллекцию на карту


                MapContacts.geoObjects.add(itemsCollection); // ***End New*** //
                //Отслеживаем клики на radio-button

                let elementsArr = document.querySelectorAll('.js-map-choise-contact');

                if (elementsArr.length !== 0) {
                    for (let i = 0; i < elementsArr.length; i++) {
                        if (elementsArr[i].checked) {
                            // changeMapContacts(null, elementsArr[i]);
                            changeMapContactsNew(null, elementsArr[i]);
                        } // elementsArr[i].addEventListener('click', changeMapContacts);


                        elementsArr[i].addEventListener('click', changeMapContactsNew);
                    }
                }

                function changeMapContactsNew(event, element) {
                    let idElement = null;
                    if (event) {
                        idElement = this.value;
                    } else {
                        idElement = element.value;
                    }

                    itemsCollection.each(function (geoObject) {
                        if (geoObject.properties._data.balloonContent.indexOf(idElement) !== -1) {
                            geoObject.options.set('iconImageHref', '/img/balloon.png');

                            if (!geoObject.balloon.isOpen()) {
                                geoObject.balloon.open(); //открываем баллун
                            } //меняем центр карты


                            let newCoordinates = geoObject.geometry._coordinates;
                            MapContacts.setCenter(newCoordinates);
                        } else {
                            geoObject.options.set('iconImageHref', '/img/balloon-gray.png');
                        }
                    }); //меняем hash-страницы

                    window.location.hash = "#".concat(idElement);
                } //Отслеживаем выбор точки!


                itemsCollection.events.add('click', function (e) {
                    if (!e.get('target').balloon.isOpen()) {
                        e.get('target').balloon.open(); //открываем баллун
                    } //перебор всех значений коллекции


                    itemsCollection.each(function (geoObject) {
                        geoObject.options.set('iconImageHref', '/img/balloon-gray.png');
                    }); //меняем у выбранного иконку

                    e.get('target').options.set('iconImageHref', '/img/balloon.png'); //получаем id (параметр по которому будем сравнивать с радио-кнопками)

                    let element = e.get('target');
                    let idElement = element.properties._data.iconContent; // let elementsArr = document.querySelectorAll('.js-map-choise-contact');

                    if (elementsArr.length !== 0) {
                        for (let i = 0; i < elementsArr.length; i++) {
                            if (elementsArr[i].value === idElement) {
                                elementsArr[i].checked = true; //событие изменение радио-кнопок

                                let changeAdress;

                                if (typeof Event === 'function') {
                                    changeAdress = new Event('change', {
                                        bubbles: true,
                                        cancelable: true
                                    });
                                } else {
                                    changeAdress = document.createEvent('Event');
                                    changeAdress.initEvent('change', true, true);
                                }

                                elementsArr[i].dispatchEvent(changeAdress); //вызываем событие
                            }
                        }
                    } //меняем центр карты


                    let newCoordinates = element.geometry._coordinates;
                    MapContacts.setCenter(newCoordinates); //меняем hash-страницы

                    window.location.hash = "#".concat(idElement);
                }); //End Отслеживаем выбор точки!
                // ***Old*** //

                function changeMapContacts(event, element) {
                    if (event) {
                        let name = this.value;
                    } else {
                        let name = element.value;
                    }

                    for (let i = 0; i < listItemsContacts.length; i++) {
                        if (listItemsContacts[i].id === name) {
                            addNewPlacemarkContacts(listItemsContacts[i].coordinates, listItemsContacts[i].name);
                        }
                    } //меняем hash-страницы


                    window.location.hash = "#".concat(name);
                } //Добавление новой метки (+ удаление остальных)


                function addNewPlacemarkContacts(coordinates, address) {
                    itemsCollection.removeAll();
                    MapContacts.setCenter(coordinates);
                    let currentPlacemark = new ymaps.Placemark(coordinates, {
                        iconContent: address
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '/img/balloon.png',
                        iconImageSize: [44, 55],
                        iconImageOffset: [-22, -27],
                        hideIconOnBalloonOpen: false
                    }); // Добавляем метку в коллекцию

                    itemsCollection.add(currentPlacemark); // Добавляем коллекцию на карту

                    MapContacts.geoObjects.add(itemsCollection);
                } // ***End Old*** //

            }; //***функция проверки загрузки страницы с хешом

            let loadPageWithHash = function loadPageWithHash() {
                let currentHash = window.location.hash;

                if (currentHash !== '') {
                    let hash = currentHash.slice(1, currentHash.length);
                    checkCurrentHash(hash);
                    console.log('hash = ' + hash);
                } else {
                    console.log('нет хеша');
                }
            };

            let checkCurrentHash = function checkCurrentHash(hash) {
                let elementsArr = document.querySelectorAll('.js-map-choise-contact');

                for (let i = 0; i < elementsArr.length; i++) {
                    if (elementsArr[i].value === hash) {
                        elementsArr[i].checked = true; //событие изменение радио-кнопок

                        let changeAdress;

                        if (typeof Event === 'function') {
                            changeAdress = new Event('change', {
                                bubbles: true,
                                cancelable: true
                            });
                        } else {
                            changeAdress = document.createEvent('Event');
                            changeAdress.initEvent('change', true, true);
                        }

                        elementsArr[i].dispatchEvent(changeAdress); //вызываем событие
                        //прокручиваем к карте

                        let positionblock = $('#contacts').offset().top;
                        let heightHeader = document.querySelector('.header').clientHeight;
                        positionblock = positionblock - heightHeader;
                        setTimeout(function () {
                            $('html, body').animate({
                                scrollTop: positionblock
                            }, 1000);
                        }, 1000);
                    } // Удаляем hash

                }
            }; //***End функция проверки загрузки страницы с хешом

            let MapContacts; // Список точек на карте Пунктов выдачи

            let listItemsContacts = [{
                'coordinates': [55.577622, 37.624192],
                'id': 'head_office',
                'name': 'Центральный офис',
                'address': 'Москва, Востряковский проезд, 10б, стр.7'
            }/*, {
                'coordinates': [59.947500, 30.254342],
                'id': 'vasileostrovskaya',
                'name': 'Василеостровская',
                'address': 'наб. реки Смоленки, 31 (ст. м. «Василеостровская, Приморская»)'
            }*/];
            ymaps.ready(init);
            loadPageWithHash();
        }
    }
};

// Initialize mobile number mask
application.prototype.initMaskedInput = function () {
    if ($('.isPhone').length) {
        $('.isPhone').mask('+7 (999) 999-99-99', { autoclear: false });
    }
};

// Initialize
application.prototype.initAsd = function () {

};