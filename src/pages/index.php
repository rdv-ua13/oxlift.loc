<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="gap-md">
    <div class="container">
        <div class="index-top">
            <div class="index-top-primary">
                <div class="slider-out basic-slider-wrap">
                    <div class="basic-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture>
                                    <source srcset="img/banner_image_1_1900x490.png" media="(min-width: 992px)">
                                    <img src="img/banner_image_4_800x600.png" alt="Изображение блока">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                    <source srcset="img/banner_image_2_1900x490.png" media="(min-width: 992px)">
                                    <img src="img/banner_image_2_700x700.png" alt="Изображение блока">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                    <source srcset="img/banner_image_1_1900x490.png" media="(min-width: 992px)">
                                    <img src="img/banner_image_4_800x600.png" alt="Изображение блока">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                    <source srcset="img/banner_image_2_1900x490.png" media="(min-width: 992px)">
                                    <img src="img/banner_image_2_700x700.png" alt="Изображение блока">
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-button-next btn btn-icon">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#arrow-right"></use>
                                </svg>
                            </div>
                            <div class="swiper-button-prev btn btn-icon">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#arrow-left"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-sm-plus">
    <div class="block dark-bg advantages-bg" style="background-image: url('img/tile_bg.png');">
        <div class="container">
            <div class="advantages">
                <div class="gap-sm-plus h2 advantages__heading">Преимущества</div>
                <ul class="list-reset advantages__list">
                    <li class="advantages__item">
                        <span class="advantages__view">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/advantages_img_1.png"
                                    width="60"
                                    height="60"
                                    alt="Изображение блока"
                            >
                        </span>
                        <span class="advantages__descr">
                            <span class="fz-subheading advantages__title">Высокая квалификация специалистов</span>
                            <span class="advantages__info">Наши специалисты ответят на любой интересующий Вас вопрос и помогут выбрать оборудование по нужным Вам характеристикам</span>
                        </span>
                    </li>
                    <li class="advantages__item">
                        <span class="advantages__view">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/advantages_img_2.png"
                                    width="60"
                                    height="60"
                                    alt="Изображение блока"
                            >
                        </span>
                        <span class="advantages__descr">
                            <span class="fz-subheading advantages__title">Гарантия качества</span>
                            <span class="advantages__info">Вся продукция сопровождается сертификатами и соответствует самым высоким мировым стандартам качества</span>
                        </span>
                    </li>
                    <li class="advantages__item">
                        <span class="advantages__view">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/advantages_img_3.png"
                                    width="60"
                                    height="60"
                                    alt="Изображение блока"
                            >
                        </span>
                        <span class="advantages__descr">
                            <span class="fz-subheading advantages__title">Ассортимент запчастей</span>
                            <span class="advantages__info">Более 5 тонн запчастей для нашего оборудования в наличии на складе</span>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?/*<div class="gap-xl">
    <div class="container">
        Catalog
    </div>
</div>*/?>

<div class="gap-xl">
    <div class="container">
        <div class="basic-hca partner">
            <div class="basic-hca__heading">
                <div class="h2">Наши клиенты</div>
            </div>
            <div class="basic-hca__content">
                <div class="slider-out basic-slider-wrap partner-slider-wrap">
                    <div class="partner-slider basic-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="javascript:;" class="partner-slider__link">
                                    <picture>
                                        <source srcset="img/partner_dyadyavanya.png" media="(min-width: 992px)">
                                        <img src="img/partner_dyadyavanya.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="partner-slider__link">
                                    <picture>
                                        <source srcset="img/partner_orion.png" media="(min-width: 992px)">
                                        <img src="img/partner_orion.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="partner-slider__link">
                                    <picture>
                                        <source srcset="img/partner_ozon.png" media="(min-width: 992px)">
                                        <img src="img/partner_ozon.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="partner-slider__link">
                                    <picture>
                                        <source srcset="img/partner_dyadyavanya.png" media="(min-width: 992px)">
                                        <img src="img/partner_dyadyavanya.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="partner-slider__link">
                                    <picture>
                                        <source srcset="img/partner_orion.png" media="(min-width: 992px)">
                                        <img src="img/partner_orion.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="partner-slider__link">
                                    <picture>
                                        <source srcset="img/partner_ozon.png" media="(min-width: 992px)">
                                        <img src="img/partner_ozon.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="partner-slider__link">
                                    <picture>
                                        <source srcset="img/partner_dyadyavanya.png" media="(min-width: 992px)">
                                        <img src="img/partner_dyadyavanya.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="partner-slider__link">
                                    <picture>
                                        <source srcset="img/partner_orion.png" media="(min-width: 992px)">
                                        <img src="img/partner_orion.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="partner-slider__link">
                                    <picture>
                                        <source srcset="img/partner_ozon.png" media="(min-width: 992px)">
                                        <img src="img/partner_ozon.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basic-hca__action">
                <div class="basic-hca__action-more">
                    <a href="javascript:;" class="btn-reset btn btn-extra">
                        <span class="text-content">Все клиенты</span>
                    </a>
                </div>
                <div class="basic-hca__action-nav desktop-only swiper-navigation swiper-navigation--solo">
                    <div class="swiper-button-next btn btn-icon">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </div>
                    <div class="swiper-button-prev btn btn-icon">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-left"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?/*
<div class="gap-xl">
    <div class="container">
        <div class="basic-hca promo">
            <div class="basic-hca__heading">
                <div class="h2">Спецпредложения</div>
            </div>

            <div class="basic-hca__content">
                <div class="slider-out basic-slider-wrap promo-slider-wrap">
                    <div class="promo-slider basic-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="javascript:;" class="promo-slider__link">
                                    <picture>
                                        <source srcset="img/partner_dyadyavanya.png" media="(min-width: 992px)">
                                        <img src="img/partner_dyadyavanya.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="promo-slider__link">
                                    <picture>
                                        <source srcset="img/partner_orion.png" media="(min-width: 992px)">
                                        <img src="img/partner_orion.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="promo-slider__link">
                                    <picture>
                                        <source srcset="img/partner_ozon.png" media="(min-width: 992px)">
                                        <img src="img/partner_ozon.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="promo-slider__link">
                                    <picture>
                                        <source srcset="img/partner_dyadyavanya.png" media="(min-width: 992px)">
                                        <img src="img/partner_dyadyavanya.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="promo-slider__link">
                                    <picture>
                                        <source srcset="img/partner_orion.png" media="(min-width: 992px)">
                                        <img src="img/partner_orion.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="promo-slider__link">
                                    <picture>
                                        <source srcset="img/partner_ozon.png" media="(min-width: 992px)">
                                        <img src="img/partner_ozon.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="promo-slider__link">
                                    <picture>
                                        <source srcset="img/partner_dyadyavanya.png" media="(min-width: 992px)">
                                        <img src="img/partner_dyadyavanya.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="promo-slider__link">
                                    <picture>
                                        <source srcset="img/partner_orion.png" media="(min-width: 992px)">
                                        <img src="img/partner_orion.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="promo-slider__link">
                                    <picture>
                                        <source srcset="img/partner_ozon.png" media="(min-width: 992px)">
                                        <img src="img/partner_ozon.png" alt="Изображение блока">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basic-hca__action">
                <div class="basic-hca__action-more">
                    <a href="javascript:;" class="btn-reset btn btn-extra">
                        <span class="text-content">Все партнёры</span>
                    </a>
                </div>
                <div class="basic-hca__action-nav swiper-navigation swiper-navigation--solo">
                    <div class="swiper-button-next btn btn-icon">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                    </div>
                    <div class="swiper-button-prev btn btn-icon">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-left"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>*/?>

<div class="gap-xl">
    <div class="container">
        <div class="basic-hca basic-hca--action-into-tab">
            <div class="basic-hca__content">
                <div class="basic-tabs">
                    <div class="gap-sm-plus basic-tabs__header slider-out basic-slider-wrap">
                        <div class="basic-tabs-container basic-slider swiper" data-tab="geo-useful-tabs" data-basic-slider data-basic-slider-xxs>
                            <div class="basic-tabs-slider-list swiper-wrapper">
                                <div class="basic-tabs-item swiper-slide">
                                    <span class="btn btn-extra-secondary basic-tabs-trigger active" data-target="0"><span>Хиты продаж</span></span>
                                </div>
                                <div class="basic-tabs-item swiper-slide">
                                    <span class="btn btn-extra-secondary basic-tabs-trigger" data-target="1"><span>Скидки</span></span>
                                </div>
                                <div class="basic-tabs-item swiper-slide">
                                    <span class="btn btn-extra-secondary basic-tabs-trigger" data-target="2"><span>Новинки</span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="basic-tabs-content" data-tab-content="geo-useful-tabs">
                        <div class="basic-tabs-content__panel active" data-id="0">
                            <div class="basic-tabs-content__content">
                                <a class="btn-reset btn btn-extra basic-hca__content-more" href="javascript:;">
                                    <span class="text-content">Cмотреть все</span>
                                </a>

                                <div class="slider-out basic-slider-wrap card-info-slider-wrap">
                                    <div class="basic-slider nav-out swiper" data-basic-slider>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card card-product">
                                                    <a class="card__view" href="javascript:;">
                                                        <img
                                                                loading="lazy"
                                                                src="img/cp1.png"
                                                                class="image"
                                                                width="160"
                                                                height="160"
                                                                alt="Изображение блока"
                                                        >
                                                        <div class="card__sale-label">
                                                            <span class="sale-label sale-label-red">20%</span>
                                                            <span class="sale-label sale-label-orange">Распродажа</span>
                                                            <span class="sale-label sale-label-green">Хит</span>
                                                        </div>
                                                    </a>
                                                    <div class="card__descr">
                                                        <div class="card__info">
                                                            <span class="product-code"><span class="text-content">Арт. 790990</span></span>
                                                            <span class="star-rating-wrapper">
                                                                <span class="star-rating">
                                                                    <span class="star-rating__container">
                                                                        <label>
                                                                            <svg class="icon icon-fill">
                                                                                <use href="img/sprite.svg#star-filled"></use>
                                                                            </svg>
                                                                        </label>
                                                                    </span>
                                                                </span>
                                                                <span class="star-rating__value" data-value="4.5">4.5</span>
                                                            </span>
                                                        </div>
                                                        <div class="card__stock product-stock in-stock">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#checkbox-rec"></use>
                                                            </svg>
                                                            <span>В наличии</span>
                                                        </div>

                                                        <a class="card__title" href="javascript:;">Ручная Гидравлическая Тележка OXLIFT OX25-1X 2500 кг</a>

                                                        <div class="card__characteristics">
                                                            <p>Грузоподъемность: 2500 кг</p>
                                                            <p>Высота подъёма: 85-200 мм</p>
                                                        </div>

                                                        <div class="card__price">
                                                            <span class="card__price-title">Цена</span>
                                                            <span class="card__price-value">
                                                                <span class="card__price-current">21000 ₽</span>
                                                                <span class="card__price-origin">22300 ₽</span>
                                                            </span>
                                                        </div>

                                                        <div class="card__cta">
                                                            <button class="btn-reset btn btn-light card__cta-more" data-card-cta-more>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#more-h-filled"></use>
                                                                </svg>
                                                            </button>
                                                            <div class="card__cta-list" data-card-cta-content>
                                                                <button class="btn-reset btn btn-icon btn-icon-switch card__cta-btn" data-notice="favorites" title="В избранное">
                                                                    <svg class="icon icon-fill icon-default">
                                                                        <use href="img/sprite.svg#heart"></use>
                                                                    </svg>
                                                                    <span class="text-content text-default">В избранное</span>
                                                                    <svg class="icon icon-fill icon-selected">
                                                                        <use href="img/sprite.svg#heart-filled"></use>
                                                                    </svg>
                                                                    <span class="text-content text-selected">В избранном</span>
                                                                </button>
                                                                <button class="btn-reset btn btn-icon btn-icon-switch card__cta-btn" data-notice="compare" title="Сравнить">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#compare"></use>
                                                                    </svg>
                                                                    <span class="text-content text-default">Сравнить</span>
                                                                    <span class="text-content text-selected">В сравнении</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="card__cart cart-buy">
                                                            <div class="cart-quantity">
                                                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#minus"></use>
                                                                    </svg>
                                                                </button>
                                                                <input
                                                                        id=""
                                                                        class="input-reset cart-quantity-input"
                                                                        type="text"
                                                                        placeholder="999"
                                                                        value="1"
                                                                        max="999"
                                                                        data-mult="1"
                                                                >
                                                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#plus"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div data-entity="buttons-block">
                                                                <div id="">
                                                                    <a id="" class="btn-reset btn cart-in" href="javascript:;" rel="nofollow">
                                                                        <span class="text-content">В корзину</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <button class="btn-reset btn btn-icon btn-icon-switch" type="button" data-favorites data-notice="favorites">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#heart"></use>
                                                                </svg>
                                                                <svg class="icon icon-fill selected">
                                                                    <use href="img/sprite.svg#filled-heart"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-navigation">
                                        <div class="swiper-button-next btn btn-icon">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#chevron-right"></use>
                                            </svg>
                                        </div>
                                        <div class="swiper-button-prev btn btn-icon">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#chevron-left"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basic-tabs-content__panel" data-id="1">
                            <div class="basic-tabs-content__content">
                                <a class="btn-reset btn btn-extra basic-hca__content-more" href="javascript:;">
                                    <span class="text-content">Cмотреть все</span>
                                </a>

                                <div class="slider-out basic-slider-wrap card-info-slider-wrap">
                                    <div class="basic-slider nav-out swiper" data-basic-slider data-basic-slider-sm>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card card-info">
                                                    <a class="card__view" href="javascript:;">
                                                        <img
                                                                loading="lazy"
                                                                src="img/ci1.png"
                                                                class="image"
                                                                width="160"
                                                                height="160"
                                                                alt="Изображение блока"
                                                        >
                                                    </a>
                                                    <div class="card__descr">
                                                        <div class="card__caption fz-caption-sm">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#eye-on"></use>
                                                            </svg>
                                                            <div class="text-content">695</div>
                                                        </div>

                                                        <a class="card__title link link-tdu link-tdu--native" href="javascript:;">Где используется обмазочная гидроизоляция</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card card-info">
                                                    <a class="card__view" href="javascript:;">
                                                        <img
                                                                loading="lazy"
                                                                src="img/ci2.png"
                                                                class="image"
                                                                width="160"
                                                                height="160"
                                                                alt="Изображение блока"
                                                        >
                                                    </a>
                                                    <div class="card__descr">
                                                        <div class="card__caption fz-caption-sm">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#eye-on"></use>
                                                            </svg>
                                                            <div class="text-content">850</div>
                                                        </div>

                                                        <a class="card__title link link-tdu link-tdu--native" href="javascript:;">Спанбонд: особенности, свойства и назначение</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card card-info">
                                                    <a class="card__view" href="javascript:;">
                                                        <img
                                                                loading="lazy"
                                                                src="img/ci3.png"
                                                                class="image"
                                                                width="160"
                                                                height="160"
                                                                alt="Изображение блока"
                                                        >
                                                    </a>
                                                    <div class="card__descr">
                                                        <div class="card__caption fz-caption-sm">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#eye-on"></use>
                                                            </svg>
                                                            <div class="text-content">1074</div>
                                                        </div>

                                                        <a class="card__title link link-tdu link-tdu--native" href="javascript:;">Область применения термоскрепленного геотекстиля</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card card-info">
                                                    <a class="card__view" href="javascript:;">
                                                        <img
                                                                loading="lazy"
                                                                src="img/ci4.png"
                                                                class="image"
                                                                width="160"
                                                                height="160"
                                                                alt="Изображение блока"
                                                        >
                                                    </a>
                                                    <div class="card__descr">
                                                        <div class="card__caption fz-caption-sm">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#eye-on"></use>
                                                            </svg>
                                                            <div class="text-content">4237</div>
                                                        </div>

                                                        <a class="card__title link link-tdu link-tdu--native" href="javascript:;">Пластиковая газонная решетка: технология укладки</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card card-info">
                                                    <a class="card__view" href="javascript:;">
                                                        <img
                                                                loading="lazy"
                                                                src="img/ci1.png"
                                                                class="image"
                                                                width="160"
                                                                height="160"
                                                                alt="Изображение блока"
                                                        >
                                                    </a>
                                                    <div class="card__descr">
                                                        <div class="card__caption fz-caption-sm">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#eye-on"></use>
                                                            </svg>
                                                            <div class="text-content">695</div>
                                                        </div>

                                                        <a class="card__title link link-tdu link-tdu--native" href="javascript:;">Где используется обмазочная гидроизоляция</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-navigation">
                                        <div class="swiper-button-next btn btn-icon">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#chevron-right"></use>
                                            </svg>
                                        </div>
                                        <div class="swiper-button-prev btn btn-icon">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#chevron-left"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basic-tabs-content__panel" data-id="2">
                            <div class="basic-tabs-content__content">
                                <a class="btn-reset btn btn-extra basic-hca__content-more" href="javascript:;">
                                    <span class="text-content">Cмотреть все</span>
                                </a>

                                <div class="cp-column cp-column--sm">
                                    <div class="cp-item cp-item--frame">
                                        <div class="fw-semibold fz-subheading-sm">Как быстро я могу получить товар после заказа?</div>
                                        <div class="cp-item__content">
                                            Если заказ сделан до 12:00, то доставка возможна в этот же день. В ином случае доставка осуществляется на следующий день
                                        </div>
                                    </div>
                                    <div class="cp-item cp-item--frame">
                                        <div class="fw-semibold fz-subheading-sm">За счет чего у Вас такие низкие цены?</div>
                                        <div class="cp-item__content">
                                            Большинство товара мы производим самостоятельно. Это позволяет нам держать самую низкую цену на качественный материал
                                        </div>
                                    </div>
                                    <div class="cp-item cp-item--frame">
                                        <div class="fw-semibold fz-subheading-sm">Могу ли я посмотреть выставочные образцы Ваших габионов где-то еще помимо основного склада в Колпино?</div>
                                        <div class="cp-item__content">
                                            Конечно! Специально для Вашего удобства наши габионы размещаются по двум адресам в СПб:
                                            <br>
                                            <br>
                                            - Инкеркам, ТК Мурманка, Мурманское шоссе 26 (р-н Мега Дыбенко)
                                            <br>
                                            - Выборгское шоссе 212 (р-н Озерков)
                                        </div>
                                    </div>
                                    <div class="cp-item cp-item--frame">
                                        <div class="fw-semibold fz-subheading-sm">Осуществляете ли Вы продажу габионов с их монтажом?</div>
                                        <div class="cp-item__content">
                                            Да, конечно! Наш специалист рассчитает для Вас стоимость материала с учетом работ и сделает индивидуальное предложение.
                                        </div>
                                    </div>
                                    <div class="cp-item cp-item--frame">
                                        <div class="fw-semibold fz-subheading-sm">Могу ли я приобрести у Вас геомембрану на отрез?</div>
                                        <div class="cp-item__content">
                                            Да, это возможно! Мы отрежем Вам необходимое количество погонных метров.
                                        </div>
                                    </div>
                                    <div class="cp-item cp-item--frame">
                                        <div class="fw-semibold fz-subheading-sm">Работаете ли Вы с физическими лицами и продаете ли материал в розницу?</div>
                                        <div class="cp-item__content">
                                            Да, конечно. Вы можете приобрести у нас необходимое количество материала кратно его фасовке. (искл. Геомембрана)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xl">
    <div class="container">
        <div class="payment" style="background: linear-gradient(100deg, #cae3ee 17.99%, #e1f1f8 87.06%);">
            <div class="payment__bgi">
                <img
                    loading="lazy"
                    class="image"
                    src="img/payment_bgi.png"
                    alt="Изображение блока"
                >
            </div>
            <div class="payment__descr">
                <div class="payment__title h3">Удобная оплата</div>
                <div class="payment__info fz-subheading">Оплачивайте покупки любым удобным способом</div>
            </div>
            <div class="payment__cta">
                <a href="javascript:;" class="btn-reset btn btn-sm btn-ghost">
                    <span class="text-content">Оплата наличными</span>
                </a>
                <a href="javascript:;" class="btn-reset btn btn-sm btn-ghost">
                    <span class="text-content">Безналичная оплата</span>
                </a>
                <a href="javascript:;" class="btn-reset btn btn-sm btn-ghost">
                    <span class="text-content">Лизинг</span>
                </a>
                <a href="javascript:;" class="btn-reset btn btn-sm btn-secondary payment__cta-more">
                    <span class="text-content">Подробнее</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="gap-xl">
    <div class="container">
        <div class="basic-hca">
            <div class="basic-hca__heading">
                <div class="h2">Складская техника и оборудование</div>
            </div>
            <div class="basic-hca__content">
                <div class="seo-block">
                    <div class="seo-block__item">
                        <p>Представительство завода-производителя «OXLIFT» работает на территории России с 2015 года. OXLIFT производит складскую подъемную технику, от гидравлических тележек до электронных узкопроходных штабелеров и высотных ричтраков, в том числе и под заказ по индивидуальным параметрам. Наше оборудование позволяет осуществлять подъем и транспортировку грузов различного тоннажа. В нашем ассортименте представлены:</p>

                        <ul>
                            <li><a href="javascript:;">гидравлические тележки</a> – складская техника для транспортировки палетированного груза. Самоходные, гидравлические, с весами, ножничные, стальные, и т.д.</li>
                            <li><a href="javascript:;">подъемные столы</a> – передвижная и стационарная техника для подъема грузов до 3 тонн.</li>
                            <li><a href="javascript:;">штабелеры</a> – современные легкие погрузчики для подъема и перемещения палетированного груза. Гидравлические, полуэлектричнеские, самоходные, высотные, с весами, стальные, нестандартные модели.</li>
                            <li><a href="javascript:;">ричтраки</a> – более современная, маневренная и производительная версия складской техники, позволяющая перемещать и поднимать груз на высоту до 20 метров на складах класса А+.</li>
                            <li><a href="javascript:;">подъемники</a> – в нашем ассортименте ножничные и мачтовые подъемники.</li>
                            <li><a href="javascript:;">погрузчики</a> – мы предлагаем вилочные электропогрузчики для мобильного перемещения грузов.</li>
                        </ul>
                    </div>

                    <div class="seo-block__item">
                        <div class="h3">Почему мы</div>
                        <br>

                        <p>Работа с производителем техники осуществляется без посредников, поэтому стоимость складского оборудования для конечного клиента значительно ниже. Плюсы работы с нами:</p>

                        <ul>
                            <li>гарантия от 12 месяцев на любое оборудование;</li>
                            <li>собственный сервисный центр;</li>
                            <li>сеть дилеров по всей РФ;</li>
                            <li>сеть дилерских сервисов по всей РФ;</li>
                            <li>наличие запчастей на любую технику;</li>
                            <li>отсутствие наценок.</li>
                        </ul>

                        <p>Мы рады сотрудничеству с оптовыми клиентами, для дилеров мы предлагаем особые условия сотрудничества. Для детальной информации обращайтесь по телефону <a href="tel:+88005007869">8 (800) 500 78 69</a>.</p>

                        <p>Сертификаты на складскую продукцию компании ОКСЛИФТ можно найти в соответствующем разделе сайта <a href="javascript:;">Сертификаты</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap-xl">
    <div class="container">
        <div class="basic-hca">
            <div class="basic-hca__heading">
                <div class="h2">Наши отгрузки</div>
            </div>
            <div class="basic-hca__content">
                <ul class="list-reset load">
                    <li class="load__item">
                        <a href="javascript:;" class="load__link">
                            <span class="load__view">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/load_1.png"
                                    alt="Изображение блока"
                                >
                            </span>
                            <span class="load__descr">
                                <span class="load__title h4">Мини-погрузчики уехали в Санкт-Петербург</span>
                                <span class="load__caption fz-caption ">08.11.2023</span>
                            </span>
                        </a>
                    </li>
                    <li class="load__item">
                        <a href="javascript:;" class="load__link">
                            <span class="load__view">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/load_2.png"
                                    alt="Изображение блока"
                                >
                            </span>
                            <span class="load__descr">
                                <span class="load__title h4">Продолжаются активные отгрузки товаров на маркетплейсы со склада в Москве</span>
                                <span class="load__caption fz-caption">08.11.2023</span>
                            </span>
                        </a>
                    </li>
                    <li class="load__item">
                        <a href="javascript:;" class="load__link">
                            <span class="load__view">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/load_3.png"
                                    alt="Изображение блока"
                                >
                            </span>
                            <span class="load__descr">
                                <span class="load__title h4">Маркетплейсы выбирают OXLIFT</span>
                                <span class="load__caption fz-caption">26.10.2023</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="basic-hca__action">
                <div class="basic-hca__action-more">
                    <a href="javascript:;" class="btn-reset btn btn-extra">
                        <span class="text-content">Все отгрузки</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>