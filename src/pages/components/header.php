<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

    <link rel="preload" href="fonts/nunito-sans-v11-latin_cyrillic-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/nunito-sans-v11-latin_cyrillic-600.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/nunito-sans-v11-latin_cyrillic-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/nunito-sans-v11-latin_cyrillic-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/NunitoSans-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/NunitoSans-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/NunitoSans-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/NunitoSans-Black.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css?v=<?=time();?>" type="text/css">

    <?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>                  <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>      <!-- maskedinput -->
    <script defer src="js/fancybox.umd.js"></script>            <!-- fancybox -->
    <script defer src="js/popper.js"></script>                  <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>           <!-- swiper -->
    <script defer src="js/accordion.min.js"></script>           <!-- accordion -->
    <script defer src="js/nouislider.js"></script>              <!-- nouislider -->
    <script defer src="js/slick.js"></script>                   <!-- slick -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js?v=<?=time();?>"></script>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
</head>


<body class="<?=(strpos($_SERVER["REQUEST_URI"], "index.php"))? 'index' : ''?>">
    <header class="header fixed-block">
        <div class="header-top">
            <div class="container header-container header-top-container">
                <div class="header-top-nav">
                    <a class="header-top__link" href="javascript:;">
                        <span class="text-content">О компании</span>
                    </a>
                    <a class="header-top__link" href="javascript:;">
                        <span class="text-content">Доставка и оплата</span>
                    </a>
                    <a class="header-top__link" href="javascript:;">
                        <span class="text-content">Спецпредложения</span>
                    </a>
                    <a class="header-top__link" href="javascript:;">
                        <span class="text-content">Покупателю</span>
                    </a>
                    <a class="header-top__link" href="javascript:;">
                        <span class="text-content">Сервис</span>
                    </a>
                    <a class="header-top__link" href="javascript:;">
                        <span class="text-content">Запчасти</span>
                    </a>
                    <a class="header-top__link" href="javascript:;">
                        <span class="text-content">Вакансии</span>
                    </a>
                    <a class="header-top__link" href="javascript:;">
                        <span class="text-content">Контакты</span>
                    </a>
                </div>

                <div class="header-top-mobile header__reg-nav reg-nav reg-nav--mob">
                    <i class="reg-nav__icon">
                        <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zM5.07 16.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78A7.893 7.893 0 0110 18c-1.86 0-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33A7.95 7.95 0 012 10c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM10 4C8.06 4 6.5 5.56 6.5 7.5S8.06 11 10 11s3.5-1.56 3.5-3.5S11.94 4 10 4zm0 5c-.83 0-1.5-.67-1.5-1.5S9.17 6 10 6s1.5.67 1.5 1.5S10.83 9 10 9z" fill="#0C4DB9"></path>
                        </svg>
                    </i>
                    <ul class="list-reset reg-nav__list">
                        <li class="reg-nav__item">
                            <a href="#authorization" class="reg-nav__link js-call-popup">Вход</a>
                        </li>
                        <li class="reg-nav__item">
                            <a href="#registration" class="reg-nav__link js-call-popup">Регистрация</a>
                        </li>
                    </ul>
                </div>

                <div class="header-top-info">
                    <div class="header-top-info__email">
                        <div class="header-top-info__email-view">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#sms"></use>
                            </svg>
                        </div>
                        <div class="header-top-info__email-title">Email</div>
                        <a class="header-top__link header-top-info__email-link" href="mailto:sales+189802973@oxlift.ru">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#sms"></use>
                            </svg>
                            <span class="text-content">sales+189802973@oxlift.ru</span>
                            <span class="text-content mobile-text">Email</span>
                        </a>
                    </div>

                    <a class="header-top__link header-top__link--tel" href="tel:+88005007869">
                        <svg class="icon icon-fill mobile-only">
                            <use href="img/sprite.svg#call-calling"></use>
                        </svg>
                        <span class="text-content">8 800 500 78 69</span>
                    </a>
                    <a class="header-top__link  header__callback-link js-modal" href="/ajax/callback.php">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#call-calling"></use>
                        </svg>
                        <span class="text-content">Обратный звонок</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="container header-container header-nav-container">
                <div class="header-mobile-menu">
                    <button
                            class="btn-reset burger"
                            aria-label="Открыть меню"
                            aria-expanded="false"
                            data-menu-spoiler
                            data-overlay
                    >
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#menu"></use>
                        </svg>
                    </button>
                </div>

                <div class="header-logo">
					<?if(strpos($_SERVER["REQUEST_URI"], "index.php")):?>
                        <span class="logo">
                    <?else:?>
                        <a class="logo" href="javascript:;">
                    <?endif;?>
                        <img
                                loading="lazy"
                                class="image"
                                src="img/logo.svg"
                                width="55"
                                height="36"
                                alt="oxlift.ru"
                        >
					<?if(strpos($_SERVER["REQUEST_URI"], "index.php")):?>
                        </span>
                    <?else:?>
                        </a>
                    <?endif;?>
                </div>

                <div class="header-catalog-spoiler">
                    <button
                            class="btn-reset btn btn-secondary menu-catalog-spoiler menu-catalog-spoiler-float"
                            aria-label="Открыть меню"
                            aria-expanded="false"
                            data-catalog-spoiler
                            data-overlay-transparent
                    >
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#category"></use>
                        </svg>
                        <span class="text-content">Все категории</span>
                    </button>
                </div>

                <div class="header-search">
                    <form id="" class="form form-desktop" method="" action="javascript:;">
                        <div class="input-wrapper input-wrapper-search">
                            <input
                                    class="input-reset input input-search"
                                    type="search"
                                    name=""
                                    placeholder="Найти товар или услугу"
                                    autocomplete="off"
                                    onclick="$(this).closest('.header-search').find('.header-search-results').toggleClass('active');"
                            >
                            <button class="btn-reset btn btn-secondary input-search-btn" type="submit">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#search"></use>
                                </svg>
                            </button>
                        </div>
                    </form>
                    <div class="header-search-results">
                        <div class="search-results">
                            <div class="search-results__header">
                                <div class="search-results__header-top">
                                    <div class="search-results__close">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-left"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="search-results__search">
                                    <div class="search-results__search-item">
                                        <form id="" class="form form-mobile" method="" action="javascript:;">
                                            <div class="input-wrapper input-wrapper-split input-wrapper-search">
                                                <input
                                                        class="input-reset input"
                                                        type="search"
                                                        name=""
                                                        placeholder="Найти товар или услугу"
                                                        autocomplete="off"
                                                >
                                                <button class="btn-reset btn input-search-btn" type="submit">
                                                    <span class="text-content">Найти</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
							<div class="search-results__suggest before-request">
                                <div class="search-results__suggest-wrapper">
                                    <div class="search-results__suggest-list">
                                        <div class="search-results__suggest-header">
                                            <div class="search-results__suggest-title">История поиска</div>
                                            <a href="javascript:;" class="search-results__suggest-item" data-removable>
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#history"></use>
                                                </svg>
                                                <span class="text-content">гидравлические тележки</span>
                                                <span class="search-results__suggest-delete" data-delete-trigger>
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="javascript:;" class="search-results__suggest-item" data-removable>
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#history"></use>
                                                </svg>
                                                <span class="text-content">рохли гидравлические</span>
                                                <span class="search-results__suggest-delete" data-delete-trigger>
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="search-results__suggest-content">
                                            <div class="search-results__suggest-title">Популярное</div>
                                            <a href="javascript:;" class="search-results__suggest-item">
                                                <span class="text-content">Гидравлические тележки</span>
                                            </a>
                                            <a href="javascript:;" class="search-results__suggest-item">
                                                <span class="text-content">Самоходные тележки</span>
                                            </a>
                                            <a href="javascript:;" class="search-results__suggest-item">
                                                <span class="text-content">Погрузчики</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?/*<div class="search-results__suggest request">
                                <div class="search-results__suggest-wrapper">
                                    <div class="search-results__suggest-list">
                                        <div class="search-results__suggest-content search-results__suggest-content-products">
                                            <div class="search-results__suggest-title">Товары</div>
                                            <a href="javascript:;" class="search-results-product">
                                                <span class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </span>
                                                <span class="search-results-product__descr">
                                                    <span class="search-results-product__info">
                                                        <span class="search-results-product__title">Ручная Гидравлическая Тележка OXLIFT OX25-1X 2500 кг</span>
                                                        <span class="search-results-product__price">
                                                            <span class="search-results-product__price-current">21 000 ₽</span>
                                                        </span>
                                                    </span>
                                                    <span class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </span>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <span class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </span>
                                                <span class="search-results-product__descr">
                                                    <span class="search-results-product__info">
                                                        <span class="search-results-product__title">Самоходная Тележка OXLIFT CBD20J-Li3 2000 кг Li-ion</span>
                                                        <span class="search-results-product__price">
                                                            <span class="search-results-product__price-current">175 320 ₽</span>
                                                        </span>
                                                    </span>
                                                    <span class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </span>
                                                </span>
                                            </a>
                                            <div class="search-results__suggest-more">
                                                <a class="btn-reset btn btn-extra" href="javascript:;">
                                                    <span class="text-content">Показать все найденные товары</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>*/?>
                        </div>
                    </div>

                    <div class="header-search-mobile">
                        <button class="btn-reset btn" onclick="$(this).closest('.header-search').find('.header-search-results').toggleClass('active');">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#search"></use>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="header-profile">
                    <button class="btn-reset header-profile__btn">
                        <span class="header-profile__btn-view">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#compare"></use>
                            </svg>
                            <span class="header-profile__btn-count">24</span>
                        </span>
                        <span class="header-profile__btn-text">Сравнение</span>
                    </button>
                    <button class="btn-reset header-profile__btn">
                        <span class="header-profile__btn-view">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#favorites"></use>
                            </svg>
                            <span class="header-profile__btn-count">24</span>
                        </span>
                        <span class="header-profile__btn-text">Избранное</span>
                    </button>
                    <button class="btn-reset header-profile__btn header-profile__btn-cart">
                        <span class="header-profile__btn-view">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#shopping-cart"></use>
                            </svg>
                            <span class="header-profile__btn-count">3</span>
                        </span>
                        <span class="header-profile__btn-text">Корзина</span>
                    </button>
                    <button class="btn-reset header-profile__btn header-top-profile not-logged">
                        <span class="header-profile__btn-view">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#profile"></use>
                            </svg>
                        </span>
                        <span class="header-profile__btn-text">Войти</span>
                    </button>
                </div>

                <div class="header-pay">
                    <a class="btn-reset btn btn-sm btn-extra-secondary" href="javascript:;">Написать нам</a>
                </div>
            </div>
        </div>
        <div class="header-categories">
            <div class="container header-container header-categories-container">
                <button
                        class="btn-reset btn btn-secondary menu-catalog-spoiler"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-catalog-spoiler
                        data-overlay-transparent
                >
                    <svg class="icon icon-fill icon-xs">
                        <use href="img/sprite.svg#category"></use>
                    </svg>
                    <span class="text-content">Все категории</span>
                </button>

                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Гидравлические тележки</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Самоходные тележки</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Погрузчики</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Электротягачи</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Оборудование для агрессивных сред</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Запчасти</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Штабелеры</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Подъемники и вышки</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Гидравлические подъемные столы</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Оборудование для промышленности</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Клининговое оборудование</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Оборудование с весами</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Ричтраки</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Колесные опоры и ролики</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Грузоподъемное оборудование</a>
                <a class="btn-reset btn btn-extra-primary" href="javascript:;">Комплектовщики заказов</a>
            </div>
        </div>
    </header>

    <div class="mobile-menu" data-menu>
        <div class="mobile-menu-catalog">
            <button
                    class="btn-reset btn btn-secondary menu-catalog-spoiler"
                    aria-label="Открыть меню"
                    aria-expanded="false"
                    data-catalog-spoiler
                    data-overlay-transparent
            >
                <svg class="icon icon-fill menu-catalog-spoiler__icon">
                    <use href="img/sprite.svg#category"></use>
                </svg>
                <span class="text-content">Все категории</span>
            </button>
        </div>

        <div class="mobile-menu-nav">
            <ul class="list-reset mobile-menu-list">
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_akcii"></use>
                        </svg>
                        <span class="text-content">Акции</span>
                    </a>
                </li>
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_uslugi"></use>
                        </svg>
                        <span class="text-content">Услуги</span>
                    </a>
                </li>
            </ul>

            <ul class="list-reset mobile-menu-list">
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_izbrannoe"></use>
                        </svg>
                        <span class="text-content">Избранное</span>
                    </a>
                </li>
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_sravnenie"></use>
                        </svg>
                        <span class="text-content">Сравнение</span>
                    </a>
                </li>
            </ul>

            <ul class="list-reset mobile-menu-list">
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_dostavka"></use>
                        </svg>
                        <span class="text-content">Доставка</span>
                    </a>
                </li>
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_oplata"></use>
                        </svg>
                        <span class="text-content">Оплата</span>
                    </a>
                </li>
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_vozvrat"></use>
                        </svg>
                        <span class="text-content">Возврат</span>
                    </a>
                </li>
            </ul>

            <ul class="list-reset mobile-menu-list">
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_kompaniya"></use>
                        </svg>
                        <span class="text-content">О компании</span>
                    </a>
                </li>
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_kontakti"></use>
                        </svg>
                        <span class="text-content">Контакты</span>
                    </a>
                </li>
                <li>
                    <a class="mobile-menu__link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#mobmenu_vakansii"></use>
                        </svg>
                        <span class="text-content">Вакансии</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mobile-menu-footer">
            <div class="mobile-menu-contacts">
                <a class="mobile-menu-contacts__item mobile-menu-contacts__tel" href="tel:+88005007869"><span class="text-content">8 800 500 78 69</span></a>
                <span class="mobile-menu-contacts__item mobile-menu-contacts__schedule">с 08:00 по 21:00</span>
                <a class="mobile-menu-contacts__item mobile-menu-contacts__callback js-modal" href="javascript:;"><span class="text-content">Обратный звонок</span></a>
            </div>
        </div>
    </div>

    <div class="menu-catalog" data-catalog>
        <div class="container menu-catalog-container">
            <div class="menu-catalog-header">
                <div class="menu-catalog-title h4">
                    <div class="menu-catalog-title-back">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#arrow-left"></use>
                        </svg>
                    </div>
                    <span data-catalog-title="Каталог">Каталог</span>
                </div>
                <div class="menu-catalog-close" data-catalog-close>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#cross"></use>
                    </svg>
                </div>
            </div>
            <div class="menu-catalog-root">
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link selected" href="javascript:;" data-submenu-section="0">
                        <span class="text-content">Гидравлические тележки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;" data-submenu-section="1">
                        <span class="text-content">Самоходные тележки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Погрузчики</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Электротягачи</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Оборудование для агрессивных сред</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Запчасти</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Штабелеры</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Подъемники и вышки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Гидравлические подъемные столы</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Оборудование для промышленности</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Клининговое оборудование</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Оборудование с весами</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Ричтраки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Колесные опоры и ролики</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Грузоподъемное оборудование</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Комплектовщики заказов</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="menu-catalog-submenu">
                <div class="menu-catalog-submenu-section active" data-root-pointer="0">
                    <div class="h3 menu-catalog-submenu-section__title">Гидравлические тележки</div>
                    <div class="menu-catalog-submenu-links">
                        <div class="menu-catalog-submenu-links__column">
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li class="menu-catalog-submenu-all">
                                    <a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Все товары раздела</span></a>
                                </li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Стандартные</span></a></li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">С различной шириной и длиной вил</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Низкопрофильные гидравлические тележки</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">С весами</span>
                                    </a>
                                </li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Для рулонов</span></a></li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Ножничные</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Гидравлические тележки грузоподъемностью 2000 кг</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Гидравлические тележки грузоподъемностью 2500 кг</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Рохли гидравлические</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Тележки для бочек</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-catalog-submenu-section" data-root-pointer="1">
                    <div class="h3 menu-catalog-submenu-section__title">Самоходные тележки</div>
                    <div class="menu-catalog-submenu-links">
                        <div class="menu-catalog-submenu-links__column">
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li class="menu-catalog-submenu-all">
                                    <a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Все товары раздела</span></a>
                                </li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;">Стандартные самоходные тележки</a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;">Тележки для палет</a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;">Электротележки</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main">