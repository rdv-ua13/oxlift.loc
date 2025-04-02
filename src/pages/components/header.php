<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

    <link rel="preload" href="fonts/NunitoSans-VariableFont_YTLC,opsz,wdth,wght.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css?v=<?=time();?>" type="text/css">

    <?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>                  <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>      <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>         <!-- validate -->
    <script defer src="js/messages_ru.js"></script>             <!-- validate -->
    <script defer src="js/fancybox.umd.js"></script>            <!-- fancybox -->
    <script defer src="js/flatpickr.min.js"></script>           <!-- flatpickr -->
    <script defer src="js/ru.js"></script>                      <!-- flatpickr -->
    <script defer src="js/nouislider.js"></script>              <!-- nouislider -->
    <script defer src="js/popper.js"></script>                  <!-- popper -->
    <script defer src="js/readmore.js"></script>                <!-- readmore -->
    <script defer src="js/select2.js"></script>                 <!-- select2 -->
    <script defer src="js/swiper-bundle.js"></script>           <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>        <!-- tippy -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js?v=<?=time();?>"></script>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
</head>


<body class="<?=(strpos($_SERVER["REQUEST_URI"], "index.php"))? 'index' : ''?>"
>
    <header
            class="header fixed-block
                <?=(!strpos($_SERVER["REQUEST_URI"], "index.php") && !strpos($_SERVER["REQUEST_URI"], "catalog.php"))? 'header-less' : ''?>
                <?=(strpos($_SERVER["REQUEST_URI"], "order.php"))? 'header-order' : ''?>"
    >
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
                <div class="header-top-info">
                    <a class="header-top__link" href="javascript:;">
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
                <div class="header-logo">
					<?if(strpos($_SERVER["REQUEST_URI"], "index.php")):?>
                        <span class="logo">
                    <?else:?>
                        <a class="logo" href="javascript:;">
                    <?endif;?>
                        <img
                                loading="lazy"
                                class="image"
                                src="img/logo.png"
                                width="98"
                                height="56"
                                alt="oxlift.ru"
                        >
					<?if(strpos($_SERVER["REQUEST_URI"], "index.php")):?>
                        </span>
                    <?else:?>
                        </a>
                    <?endif;?>
                </div>

                <div class="header-back">
                    <a class="link link-flex" href="javascript:;">
                        <svg class="icon icon-sm icon-fill">
                            <use href="img/sprite.svg#chevron-left"></use>
                        </svg>
                        <span>Вернуться в корзину</span>
                    </a>
                </div>

                <div class="header-catalog-spoiler">
                    <button
                            class="btn-reset btn menu-catalog-spoiler"
                            aria-label="Открыть меню"
                            aria-expanded="false"
                            data-catalog-spoiler
                            data-overlay-transparent
                    >
                        <svg class="icon icon-fill menu-catalog-spoiler__icon">
                            <use href="img/sprite.svg#menu"></use>
                        </svg>
                        <svg class="icon icon-fill menu-catalog-spoiler__icon-active">
                            <use href="img/sprite.svg#cross"></use>
                        </svg>
                        <span class="text-content">Каталог</span>
                    </button>
                </div>

                <div class="header-search">
                    <form id="" class="form" method="" action="javascript:;">
                        <div class="input-wrapper input-wrapper-search">
                            <input
                                    class="input-reset input input-search"
                                    type="search"
                                    name=""
                                    placeholder="Найти товар или услугу"
                                    autocomplete="off"
                                    <?/*onclick="$(this).closest('.header-search').find('.header-search-results').toggleClass('active');"
                                    readonly*/?>
                            >
                            <button class="btn-reset btn input-delete-btn">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#cross"></use>
                                </svg>
                            </button>
                            <button class="btn-reset btn input-search-btn" type="submit">
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
                                    <div class="search-results__title h4">Поиск</div>
                                    <div class="search-results__close">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#cross"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="search-results__search">
                                    <div class="search-results__search-item">
                                        <form id="" class="form" method="" action="javascript:;">
                                            <div class="input-wrapper input-wrapper-split input-wrapper-search has-icon-l">
                                                <input
                                                        class="input-reset input"
                                                        type="search"
                                                        name=""
                                                        placeholder="Найти товар или услугу"
                                                        autocomplete="off"
                                                >
                                                <label class="input-icon input-icon-l">
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#search"></use>
                                                    </svg>
                                                </label>
                                                <button class="btn-reset btn input-delete-btn">
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                </button>
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
                                            <a href="javascript:;" class="search-results__suggest-item  testShowDropmenu02" data-removable title="Клик покажет результаты поиска">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#history"></use>
                                                </svg>
                                                <span class="text-content">геотекстиль</span>
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
                                                <span class="text-content">геотекстиль из полипропилена</span>
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
                                                <span class="text-content">Геотекстиль Дорнит</span>
                                            </a>
                                            <a href="javascript:;" class="search-results__suggest-item">
                                                <span class="text-content">Дорнит</span>
                                            </a>
                                            <a href="javascript:;" class="search-results__suggest-item">
                                                <span class="text-content">Дренажная система</span>
                                            </a>
                                            <a href="javascript:;" class="search-results__suggest-item">
                                                <span class="text-content">Габионы сварные</span>
                                            </a>
                                            <a href="javascript:;" class="search-results__suggest-item">
                                                <span class="text-content">Габионы</span>
                                            </a>
                                            <a href="javascript:;" class="search-results__suggest-item">
                                                <span class="text-content">Фасадная сетка</span>
                                            </a>
                                            <a href="javascript:;" class="search-results__suggest-item">
                                                <span class="text-content">Спанбонд</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-results__suggest request">
                                <div class="search-results__suggest-wrapper">
                                    <div class="search-results__suggest-list">
                                        <div class="search-results__suggest-content search-results__suggest-content-products">
                                            <div class="search-results__suggest-title">Товары</div>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Геотекстиль для грядок, шир. 2*10 м.п</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">910,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Техническая пленка 100 мкм, шир. 3х10</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">300 ₽</div>
                                                            <div class="search-results-product__price-originally">1230,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Тент универсальный 80 гр, 2х3 с люверсами</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">225 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Геотекстиль для грядок, шир. 2*10 м.п</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">910,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Техническая пленка 100 мкм, шир. 3х10</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">300 ₽</div>
                                                            <div class="search-results-product__price-originally">1230,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Тент универсальный 80 гр, 2х3 с люверсами</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">225 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Геотекстиль для грядок, шир. 2*10 м.п</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">910,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Техническая пленка 100 мкм, шир. 3х10</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">300 ₽</div>
                                                            <div class="search-results-product__price-originally">1230,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Тент универсальный 80 гр, 2х3 с люверсами</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">225 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill mobile-only">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content desktop-only">В корзину</span>
                                                        </button>
                                                        <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#heart"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill selected">
                                                                <use href="img/sprite.svg#filled-heart"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="search-results__suggest-more">
                                                <a class="btn-reset btn btn-extra" href="javascript:;">
                                                    <span class="text-content">Показать все найденные товары</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                <use href="img/sprite.svg#bookmark"></use>
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

                <div class="header-contacts">
                    <a class="link fw-semibold fz-subheading-sm header-contacts__tel" href="tel:+79811558247">+7 981 155-82-47</a>
                    <a class="link-brand header-contacts__cta" href="javascript:;" data-fancybox data-src="#modal-calc">Заявка на расчет</a>
                    <a class="link-brand header-contacts__cta order" href="javascript:;" data-fancybox data-src="#modal-call">Позвоните мне</a>
                </div>

                <div class="header-catalog">
                    <div class="slider-out basic-slider-wrap">
                        <div class="basic-slider swiper" data-basic-slider data-header-catalog-slider>
                            <div class="swiper-wrapper">
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Геотекстиль</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Геосетки</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Пленки</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Профилированная мембрана</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Спанбонд</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Габионы сварные</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Габионы</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">&#x1F525; Предложения месяца</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">&#x1F525; Предложения месяца</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">&#x1F525; Предложения месяца</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">&#x1F525; Предложения месяца</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">&#x1F525; Предложения месяца</a>
                            </div>
                        </div>
                    </div>
                </div>

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
            </div>
        </div>
    </header>

    <div class="mobile-menu" data-menu>
        <div class="mobile-menu-close" data-menu-close>
            <svg class="icon icon-fill">
                <use href="img/sprite.svg#cross"></use>
            </svg>
        </div>

        <div class="mobile-menu-catalog">
            <button
                    class="btn-reset btn menu-catalog-spoiler"
                    aria-label="Открыть меню"
                    aria-expanded="false"
                    data-catalog-spoiler
                    data-overlay-transparent
            >
                <svg class="icon icon-fill menu-catalog-spoiler__icon">
                    <use href="img/sprite.svg#menu"></use>
                </svg>
                <svg class="icon icon-fill menu-catalog-spoiler__icon-active">
                    <use href="img/sprite.svg#cross"></use>
                </svg>
                <span class="text-content">Каталог</span>
            </button>
        </div>

        <ul class="list-reset mobile-menu-list">
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">Доставка</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">Оплата</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">Оптовым покупателям</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">Контакты</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">О нас</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">🏡  Услуги</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
        </ul>

        <div class="mobile-menu-footer">
            <div class="mobile-menu-login">
                <button class="btn-reset btn btn-extra" data-fancybox data-src="#modal-auth">
                    <span class="text-content">Войти</span>
                </button>
            </div>

            <div class="mobile-menu-contacts">
                <a class="link h4" href="tel:+79811558247">+7 981 155-82-47</a>
                <a class="link-brand " href="javascript:;">Заявка на расчет</a>
            </div>

            <div class="mobile-menu-connection">
                <a class="mobile-menu-connection__item" href="mailto:info@geo-dvor.ru">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#sms"></use>
                    </svg>
                    <span class="text-content">info@geo-dvor.ru</span>
                </a>
                <div class="mobile-menu-connection__soc">
                    <a href="javascript:;" class="mobile-menu-connection__soc-item">
                        <svg class="icon icon-fill icon-xl">
                            <use href="img/sprite.svg#soc-vk"></use>
                        </svg>
                    </a>
                    <a href="javascript:;" class="mobile-menu-connection__soc-item">
                        <svg class="icon icon-fill icon-xl">
                            <use href="img/sprite.svg#soc-tg"></use>
                        </svg>
                    </a>
                </div>
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
                        <span class="text-content">Спанбонд</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;" data-submenu-section="1">
                        <span class="text-content">Геотекстиль</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Габионы сварные</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Профилированная мембрана</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Фасадная сетка</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Пленки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Дренажная система</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Канализация</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Водоснабжение</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Геосетки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Газонные решетки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Тенты укрывные</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Объемная георешетка</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>

                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Анкер металлический</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Поверхностный водоотвод</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Защита кабеля</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Садовые решетки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Бордюры садовые</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Сетка от кротов</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Сетка для ограждения</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Фиксаторы под арматуру</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Мастики, праймер</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Сетка от грызунов</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Гидроизоляционные ленты</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Инструмент и комплектующие</span>
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
                    <div class="h3 menu-catalog-submenu-section__title">Геотекстиль</div>
                    <div class="menu-catalog-submenu-links">
                        <div class="menu-catalog-submenu-links__column">
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li class="menu-catalog-submenu-all"><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Все товары раздела</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Агроткань с разметкой</span></a></li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль Дорнит</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                    <div class="menu-catalog-submenu-link-points">
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 150</a>
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 200</a>
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 250</a>
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 300</a>
                                    </div>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль из полипропилена</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль для дренажа</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Геотекстиль для садовых дорожек</span></a></li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль в нарезке</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль для заезда на участок</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль под фундамент</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                        </div>
                        <div class="menu-catalog-submenu-links__column">
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li class="menu-catalog-submenu-all"><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Все товары раздела</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Агроткань с разметкой</span></a></li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль Дорнит</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                    <div class="menu-catalog-submenu-link-points">
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 150</a>
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 200</a>
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 250</a>
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 300</a>
                                    </div>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль из полипропилена</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль для дренажа</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Геотекстиль для садовых дорожек</span></a></li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль в нарезке</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль для заезда на участок</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль под фундамент</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                        </div>
                        <div class="menu-catalog-submenu-links__column">
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li class="menu-catalog-submenu-all"><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Все товары раздела</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Агроткань с разметкой</span></a></li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль Дорнит</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                    <div class="menu-catalog-submenu-link-points">
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 150</a>
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 200</a>
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 250</a>
                                        <a href="javascript:;" class="menu-catalog-submenu-link-points-item">Плотность 300</a>
                                    </div>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль из полипропилена</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль для дренажа</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Геотекстиль для садовых дорожек</span></a></li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль в нарезке</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль для заезда на участок</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="menu-catalog-submenu-link" href="javascript:;">
                                        <span class="text-content">Геотекстиль под фундамент</span>
                                        <svg class="icon icon-fill menu-catalog-submenu-link-pointer">
                                            <use href="img/sprite.svg#chevron-right"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                            <ul class="list-reset menu-catalog-submenu-links__list">
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                                <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-catalog-submenu-section" data-root-pointer="1">
                    <div class="h3 menu-catalog-submenu-section__title">Пункт меню 2</div>
                    <div class="menu-catalog-submenu-links">
                        <div class="menu-catalog-submenu-links__column">
                            <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        </div>
                        <div class="menu-catalog-submenu-links__column">
                            <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        </div>
                        <div class="menu-catalog-submenu-links__column">
                            <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="main">