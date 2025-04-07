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
                                    <img src="img/banner_image_1_700x700.png" alt="Изображение блока">
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
                                    <img src="img/banner_image_1_700x700.png" alt="Изображение блока">
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
        <div class="basic-hca">
            <div class="basic-hca__heading">
                <div class="h2">Складская техника и оборудование</div>
            </div>
            <div class="basic-hca__content">
                <div class="seo-block">
                    <p>Представительство завода-производителя «OXLIFT» работает на территории России с 2015 года. OXLIFT производит складскую подъемную технику, от гидравлических тележек до электронных узкопроходных штабелеров и высотных ричтраков, в том числе и под заказ по индивидуальным параметрам. Наше оборудование позволяет осуществлять подъем и транспортировку грузов различного тоннажа. В нашем ассортименте представлены:</p>

                    <ul>
                        <li><a href="javascript:;" class="link-brand link-tdu link-tdu-text"><span class="text-content">гидравлические тележки</span></a> – складская техника для транспортировки палетированного груза. Самоходные, гидравлические, с весами, ножничные, стальные, и т.д.</li>
                        <li><a href="javascript:;" class="link-brand link-tdu link-tdu-text"><span class="text-content">подъемные столы</span></a> – передвижная и стационарная техника для подъема грузов до 3 тонн.</li>
                        <li><a href="javascript:;" class="link-brand link-tdu link-tdu-text"><span class="text-content">штабелеры</span></a> – современные легкие погрузчики для подъема и перемещения палетированного груза. Гидравлические, полуэлектричнеские, самоходные, высотные, с весами, стальные, нестандартные модели.</li>
                        <li><a href="javascript:;" class="link-brand link-tdu link-tdu-text"><span class="text-content">ричтраки</span></a> – более современная, маневренная и производительная версия складской техники, позволяющая перемещать и поднимать груз на высоту до 20 метров на складах класса А+.</li>
                        <li><a href="javascript:;" class="link-brand link-tdu link-tdu-text"><span class="text-content">подъемники</span></a> – в нашем ассортименте ножничные и мачтовые подъемники.</li>
                        <li><a href="javascript:;" class="link-brand link-tdu link-tdu-text"><span class="text-content">погрузчики</span></a> – мы предлагаем вилочные электропогрузчики для мобильного перемещения грузов.</li>
                    </ul>
                    <br>

                    <div class="h3">Почему мы</div>
                    <br>
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
                    <br>

                    <p>Мы рады сотрудничеству с оптовыми клиентами, для дилеров мы предлагаем особые условия сотрудничества. Для детальной информации обращайтесь по телефону
                        <a href="tel:+88005007869" class="link">8 (800) 500 78 69</a>.</p>

                    <p>Сертификаты на складскую продукцию компании ОКСЛИФТ можно найти в соответствующем разделе сайта <a href="javascript:;" class="link-brand link-tdu link-tdu-text"><span class="text-content">Сертификаты</span></a>.</p>
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