<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

    <link rel="preload" href="fonts/nunito-sans-v11-latin_cyrillic-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/nunito-sans-v11-latin_cyrillic-600.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/nunito-sans-v11-latin_cyrillic-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/nunito-sans-v11-latin_cyrillic-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/NunitoSans-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/NunitoSans-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/NunitoSans-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/NunitoSans-Black.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/ui.css" type="text/css">

	<?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>              <!-- jquery -->
    <script defer src="js/fancybox.umd.js"></script>        <!-- fancybox -->
    <script defer src="js/popper.js"></script>              <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>       <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->

    <script defer src="js/main.js"></script>
</head>
<body>
<div class="ui">
    <div class="container-fluid">
        <div class="ui-section">
            <h3 class="h3 ui-title title-bold text-center">Colors</h3>

            <div class="ui-row">
                <div class="ui-color">
                    <span class="ui-color__item tooltip" data-tippy-content="--text-primary" style="background-color: var(--text-primary);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--text-secondary" style="background-color: var(--text-secondary);"></span>
                </div>
            </div>
            <div class="ui-row">
                <div class="ui-color">
                    <span class="ui-color__item light tooltip" data-tippy-content="--gray0-color" style="background-color: var(--gray0-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--gray10-color" style="background-color: var(--gray10-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--gray20-color" style="background-color: var(--gray20-color);"></span>
                </div>
            </div>
            <div class="ui-row">
                <div class="ui-color">
                    <span class="ui-color__item tooltip" data-tippy-content="--blue0-color" style="background-color: var(--blue0-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--blue10-color" style="background-color: var(--blue10-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--blue20-color" style="background-color: var(--blue20-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--blue30-color" style="background-color: var(--blue30-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--blue40-color" style="background-color: var(--blue40-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--green0-color" style="background-color: var(--green0-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--green10-color" style="background-color: var(--green10-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--yellow-color" style="background-color: var(--yellow-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--orange0-color" style="background-color: var(--orange0-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--red0-color" style="background-color: var(--red0-color);"></span>
                    <span class="ui-color__item tooltip" data-tippy-content="--red10-color" style="background-color: var(--red10-color);"></span>
                </div>
            </div>
        </div>

        <div class="ui-section">
            <h3 class="h3 ui-title title-bold text-center">Gaps</h3>

            <div class="ui-row">
                <div class="fz-md">
                        <pre>
@media (min-width: 992px) {
    .gap-xxxs { margin-bottom: 8px !important; }
    .gap-xxs { margin-bottom: 12px !important; }
    .gap-xs { margin-bottom: 16px !important; }
    .gap-sm { margin-bottom: 20px !important; }
    .gap-sm-plus { margin-bottom: 24px !important; }
    .gap-md { margin-bottom: 32px !important; }
    .gap-md-plus, .gap-lg { margin-bottom: 40px !important; }
    .gap-lg-plus { margin-bottom: 48px !important; }
    .gap-xl { margin-bottom: 60px !important; }
}
@media (max-width: 991.98px) {
    .gap-xxxs { margin-bottom: 8px !important; }
    .gap-xxs, .gap-xs, .gap-sm { margin-bottom: 12px !important; }
    .gap-sm-plus, .gap-md, .gap-md-plus { margin-bottom: 16px !important; }
    .gap-lg, .gap-lg-plus, .gap-xl { margin-bottom: 24px !important; }
}
                        </pre>
                </div>
            </div>
        </div>

        <div class="ui-section">
            <h3 class="h3 ui-title title-bold text-center">Icons</h3>

            <div class="ui-row">
                <div class="ui-title">
                    <div class="fz-md">
                        .icon-fill - строго запрещает свойство "stroke"
                        <br>
                        .icon-stroke - строго запрещает свойство "fill"
                    </div><br>
                    <div class="fz-md">&#60;use&#62; -> sprite.svg#id_из_тултип / file-name.svg#file-name</div>
                    <div class="fz-md">
                            <pre>
.icon-xs { width: 12px!important; height: 16px!important; }
.icon-sm { width: 16px!important; height: 20px!important; } <- default
.icon-md { width: 20px!important; height: 24px!important; }
.icon-lg { width: 24px!important; height: 32px!important; }
.icon-xl { width: 24px!important; height: 40px!important; }
                            </pre>
                    </div>
                </div>
                <div class="ui-tooltip-set">
                    <span class="tooltip" data-tippy-content="#arrow-up">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#arrow-up"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#arrow-right">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#arrow-right"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#arrow-down">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#arrow-down"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#arrow-left">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#arrow-left"></use>
                        </svg>
                        <!--end ui content-->
                    </span>

                    <span class="tooltip" data-tippy-content="#chevron-up">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-up"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#chevron-right">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-right"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#chevron-down">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-down"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#chevron-left">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-left"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#chevron-down-select">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-down-select"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#cross">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#cross"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#minus">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#minus"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#plus">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#plus"></use>
                        </svg>
                        <!--end ui content-->
                    </span>

                    <span class="tooltip" data-tippy-content="#bookmark">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#bookmark"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#calendar">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#calendar"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#call-calling">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#call-calling"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#catalog">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#catalog"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#category">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#category"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#clock">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#clock"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#compare">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#compare"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#copy">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#copy"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#delivery">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#delivery"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#edit">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#edit"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#eye-off">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#eye-off"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#eye-on">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#eye-on"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#file">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#file"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#filter">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#filter"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#heart">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#heart"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#heart-filled">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#heart-filled"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#history">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#history"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#info">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#info"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#location">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#location"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#logout">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#logout"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#map">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#map"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#menu">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#menu"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#print">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#print"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#profile">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#profile"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#refresh">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#refresh"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#search">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#search"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#shopping-cart">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#shopping-cart"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#sms">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#sms"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#sms-notification">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#sms-notification"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#splash">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#splash"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#timer">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#timer"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#checkbox-rec">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#checkbox-rec"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#trash">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#trash"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#warning">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#warning"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#sort-asc">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#sort-asc"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#sort-desc">
                        <!--start ui content-->
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#sort-desc"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                </div>
                <br>
                <div class="ui-tooltip-set">
                    <span class="tooltip" data-tippy-content="#soc-ok">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-ok"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#soc-tg">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-tg"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#soc-vk">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-vk"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#soc-ya">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-ya"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#soc-yt">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-yt"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#soc-ok-bg">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-ok-bg"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#soc-tg-bg">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-tg-bg"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#soc-vk-bg">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-vk-bg"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#soc-ya-bg">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-ya-bg"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="#soc-yt-bg">
                        <!--start ui content-->
                        <svg class="icon icon-lg icon-fill">
                            <use href="img/sprite.svg#soc-yt-bg"></use>
                        </svg>
                        <!--end ui content-->
                    </span>
                </div>
            </div>
        </div>

        <div class="ui-section">
            <h3 class="h3 ui-title title-bold text-center">Buttons</h3>

            <div class="ui-row">
                <div class="ui-tooltip-set">
                    <span class="tooltip" data-tippy-content="class='btn-reset btn/btn-primary'">
                        <!--start ui content-->
                        <button class="btn-reset btn">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                            <span class="text-content">Кнопка</span>
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="class='btn-reset btn btn-secondary'">
                        <!--start ui content-->
                        <button class="btn-reset btn btn-secondary">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                            <span class="text-content">Кнопка</span>
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="class='btn-reset btn btn-extra'">
                        <!--start ui content-->
                        <button class="btn-reset btn btn-extra">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                            <span class="text-content">Кнопка</span>
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="class='btn-reset btn btn-extra-primary'">
                        <!--start ui content-->
                        <button class="btn-reset btn btn-extra-primary">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                            <span class="text-content">Кнопка</span>
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="class='btn-reset btn btn-extra-secondary'">
                        <!--start ui content-->
                        <button class="btn-reset btn btn-extra-secondary">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                            <span class="text-content">Кнопка</span>
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="class='btn-reset btn btn-ghost'">
                        <!--start ui content-->
                        <button class="btn-reset btn btn-ghost">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                            <span class="text-content">Кнопка</span>
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="class='btn-reset btn btn-icon'">
                        <!--start ui content-->
                        <button class="btn-reset btn btn-icon">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#menu"></use>
                            </svg>
                        </button>
                        <!--end ui content-->
                    </span>
                </div>
            </div>
        </div>

        <div class="ui-section">
            <h3 class="h3 ui-title title-bold text-center">Links</h3>

            <div class="ui-row">
                <div class="ui-tooltip-set">
                    <span class="tooltip" data-tippy-content="class='link' (default)">
                        <!--start ui content-->
                        <a class="link" href="javascript:;">Ссылка</a>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="class='link-secondary'">
                        <!--start ui content-->
                        <a class="link-secondary" href="javascript:;">Ссылка</a>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="class='link-brand'">
                        <!--start ui content-->
                        <a class="link-brand" href="javascript:;">Ссылка</a>
                        <!--end ui content-->
                    </span>
                    <span class="tooltip" data-tippy-content="class='link-invert'" style="background-color: var(--gray20-color); padding: 0 4px; border-radius: 4px;">
                        <!--start ui content-->
                        <a class="link-invert" href="javascript:;">Ссылка</a>
                        <!--end ui content-->
                    </span>
                </div>
            </div>
        </div>

        <div class="ui-section">
            <h3 class="h3 ui-title title-bold text-center">Fields</h3>

            <div class="ui-row">
                <div class="ui-title">
                    <div class="fz-md">input</div>
                </div>
                <div class="ui-tooltip-set">
                    <span class="tooltip" data-tippy-content="default">
                        <!--start ui content-->
                        <div class="input-wrapper has-icon-l has-icon-r">
                            <input
                                    class="input-reset input"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Placeholder"
                                    autocomplete="off"
                            >
                            <label class="input-icon input-icon-l">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#search"></use>
                                </svg>
                            </label>
                            <label class="input-icon input-icon-r">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#search"></use>
                                </svg>
                            </label>
                        </div>
                        <!--end ui content-->
                    </span>

                    <span class="tooltip" data-tippy-content="search">
                        <!--start ui content-->
                        <div class="input-wrapper input-wrapper-split has-icon-l">
                            <input
                                    class="input-reset input"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Placeholder"
                                    autocomplete="off"
                            >
                            <label class="input-icon input-icon-l">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#search"></use>
                                </svg>
                            </label>
                            <button class="btn-reset btn" type="button">
                                <span class="text-content">Найти</span>
                            </button>
                        </div>
                    <!--end ui content-->
                    </span>

                    <span class="tooltip" data-tippy-content="password">
                        <!--start ui content-->
                        <div class="input-wrapper has-icon-r">
                            <input
                                    class="input-reset input input-secondary"
                                    type="password"
                                    name=""
                                    value=""
                                    placeholder="Пароль"
                                    data-password-target
                                    required
                            >
                            <label class="input-icon input-icon-r input-icon-btn">
                                <svg class="icon icon-fill icon-default">
                                    <use href="img/sprite.svg#eye-off"></use>
                                </svg>
                                <svg class="icon icon-sm icon-fill icon-show">
                                    <use href="img/sprite.svg#eye-on"></use>
                                </svg>
                                <input
                                        type="checkbox"
                                        class="visually-hidden"
                                        data-password-switcher
                                >
                            </label>
                        </div>
                        <!--end ui content-->
                    </span>

                    <span class="tooltip" data-tippy-content="titled-input + error">
                        <!--start ui content-->
                        <div class="titled-input">
                            <div class="input-title">Номер телефона <span class="required-star">*</span></div>
                            <div class="input-wrapper error">
                                <input
                                        class="input-reset input input-secondary"
                                        type="email"
                                        name=""
                                        value=""
                                        placeholder="Электронная почта"
                                        required
                                >
                                <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Это поле обязательное</span>
                            </span>
                            </div>
                        </div>
                        <!--end ui content-->
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>