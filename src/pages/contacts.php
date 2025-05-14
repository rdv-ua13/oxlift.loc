<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="gap-md">
    <div class="container">
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/breadcrumbs.php"); ?>
    </div>
</div>

<div class="gap-xl cp contacts-page">
    <div class="cp-content">
        <div class="gap-md">
            <div class="cp-heading">
                <div class="container">
                    <h1 class="h1 cp-heading__title">Контакты</h1>
                </div>
            </div>
        </div>

        <div class="gap-md cp-content__item">
            <div id="contacts" class="contacts-page__address">
                <div class="contacts-page__address-map">
                    <div class="contacts-page__address-map-content" id="contacts-map"></div>
                </div>
                <div class="container contacts-page__address-descr">
                    <div class="contacts-page__address-list">
                        <div class="contacts-page__address-list-item">
                            <label class="contacts-page__address-list-label form__label-radio  form__label-radio--black order__points-label-radio">
								<?/*<input class="contacts-page__address-list-input form__input-radio order__points-input-radio js-map-choise-contact" type="radio" name="point" value="yakornaya" required="">*/?>
                                <div class="contacts-page__address-list-descr form__label-radio-wrap order__points-radio-wrap">
									<?/*<span class="contacts-page__address-list-checkbox form__check-radio order__points-check-radio"></span>*/?>
                                    <span class="contacts-page__address-list-checkbox-field form__radio-text order__points-text-wrap">
                                            <span class="order__points-name">Центральный офис</span>
                                            <span class="order__points-address">Москва, Востряковский проезд, 10б, стр.7</span>
                                            <span class="order__points-address">тел.: <a href="tel:+84951209097">8 (495) 120 90 97</a></span>
                                            <span class="order__points-route"><a target="_blank" href="https://yandex.ru/maps/?mode=routes&amp;rtext=~55.577622%2C37.624192&amp;rtt=auto">Проложить маршрут</a></span>
                                            <span class="order__points-time">Время работы:<br> пн-пт с 9:00 до 18:00,<br> сб-вс выходной</span>
                                        </span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap-xl cp-content__item">
            <div class="container">
                <form class="form-s" action="" method="POST" enctype="multipart/form-data" id="faq-form">
					<?/*<input type="hidden" name="bxajaxid" id="bxajaxid_9f0b67046bc1b0a9627a5b2fadf5fa68_8BACKi" value="9f0b67046bc1b0a9627a5b2fadf5fa68">
                <input type="hidden" name="AJAX_CALL" value="Y">
                <script type="text/javascript">
                    function _processform_8BACKi(){
                        if (BX('bxajaxid_9f0b67046bc1b0a9627a5b2fadf5fa68_8BACKi'))
                        {
                            var obForm = BX('bxajaxid_9f0b67046bc1b0a9627a5b2fadf5fa68_8BACKi').form;
                            BX.bind(obForm, 'submit', function() {BX.ajax.submitComponentForm(this, 'comp_9f0b67046bc1b0a9627a5b2fadf5fa68', true)});
                        }
                        BX.removeCustomEvent('onAjaxSuccess', _processform_8BACKi);
                    }
                    if (BX('bxajaxid_9f0b67046bc1b0a9627a5b2fadf5fa68_8BACKi'))
                        _processform_8BACKi();
                    else
                        BX.addCustomEvent('onAjaxSuccess', _processform_8BACKi);
                </script>
                <input type="hidden" name="sessid" id="sessid" value="43e3f8a172857688f24a78d211a6d4f2">    */?>
                    <div class="gap-sm">
                        <div class="form-s__header">
                            <div class="h2">Обратная связь</div>
                            <div>Менеджеры компании ответят на все Ваши вопросы, подберут необходимое оборудование и подготовят коммерческое предложение.</div>
                        </div>
                    </div>

                    <div class="gap-sm row">
                        <div class="col col-12 col-md-6">
                            <div class="input-wrapper">
                                <input
                                        id=""
                                        class="input-reset input"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Имя"
                                        autocomplete="off"
                                >
                            </div>
                            <div class="input-wrapper">
                                <input
                                        id=""
                                        class="input-reset input isPhone"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Телефон"
                                        autocomplete="off"
                                >
                            </div>
                            <div class="input-wrapper">
                                <input
                                        id=""
                                        class="input-reset input"
                                        type="email"
                                        name=""
                                        value=""
                                        placeholder="E-mail"
                                        autocomplete="off"
                                >
                            </div>
                        </div>
                        <div class="col col-md-flex col-12 col-md-6">
                            <div class="input-wrapper input-wrapper-h-stretch">
                                <textarea name="" class="input-reset input" placeholder="Комментарий"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-md-6">
                            <div class="row">
                                <div class="col col-12 col-sm-6">
                                    <div class="input-wrapper">
                                        <div class="input-reset input captcha">
                                            <img src="" width="180" height="40" alt="CAPTCHA">
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-12 col-sm-6">
                                    <div class="input-wrapper">
                                        <input
                                                id=""
                                                class="input-reset input"
                                                type="text"
                                                name="captcha_word"
                                                value=""
                                                size="30" maxlength="50"
                                        >
                                        <input type="hidden" name="captcha_sid" value="0d9b89940b6fca484fcd48d3d89b6293">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-sm col col-12 col-md-6">
                            <label class="custom-checkbox">
                                <input class="input-invisible" name="CHECK_PROCESSING" type="checkbox" value="16">
                                <i></i>
                                <span>Я согласен на <a href="javascript:;" target="_blank">обработку персональных данных</a></span>
                            </label>
                        </div>
                        <div class="col col-12 col-md-flex col-md-6">
                            <div class="form-s__submit">
                                <?/*<input type="hidden" name="LINK" value="moscow.focus-demo.ru/contacts/">
                                <input type="hidden" name="PARAMS_HASH" value="a29b7363f59f688547d3ebb4ad55f079">*/?>
                                <button class="btn-reset btn btn-secondary" type="submit" name="submit" role="button" value="OK">Отправить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="cp-content__item">
            <div class="container content-box">
                <div class="gap-sm">
                    <div class="h2">Центральный офис</div>
                </div>
                <div class="row">
                    <div class="col col-12 col-sm-5">
                        <div class="content-box__item">
                            <div class="ico">
                                <img alt="Адрес | ОКСЛИФТ" src="img/sprite.svg#location" class="icon-sm ico__map">
                            </div>
                            <div class="content-box__item-text"> 117403, г. Москва,</div>
                            <div class="content-box__item-text"> Востряковский проезд, 10б, стр.7</div>
                        </div>
                        <div class="content-box__item">
                            <div class="ico">
                                <img alt="Телефон | ОКСЛИФТ" src="img/sprite.svg#call-calling" class="icon-sm ico__phone">
                            </div>
                            <div class="content-box__item-text contacts-page__item-info">
                                <a href="tel:">8 (800) 500 78 69</a> - по России бесплатно;</div>
                            <div class="content-box__item-text contacts-page__item-info">
                                <span class="mgo-NIZ">
                                    <a href="tel:8 (495) 120 90 97">8 (495) 120 90 97</a>
                                </span>
                                ;
                            </div>
                            <div class="content-box__item-text contacts-page__item-info">
                                <a href="tel:8 (499) 110 92 67">8 (499) 110 92 67</a>
                                - отдел сервиса.
                            </div>
                        </div>
                        <div class="content-box__item">
                            <div class="ico">
                                <img alt="E-mail | ОКСЛИФТ" src="img/sprite.svg#sms" class="icon-sm ico__mail">
                            </div>
                            <div class="content-box__item-text contacts-page__item-info">
                                <a href="mailto:sales+203623918@oxlift.ru">sales+203623918@oxlift.ru </a>
                                - отдел продаж
                            </div>
                            <div class="content-box__item-text contacts-page__item-info">
                                <a href="mailto:service@oxlift.ru">service@oxlift.ru </a>
                                - отдел сервиса
                            </div>
                            <div class="content-box__item-text contacts-page__item-info">
                                <a href="mailto:502@oxlift.ru">502@oxlift.ru </a>
                                - отдел бухгалтерии
                            </div>
                        </div>
                        <div class="content-box__item" style="display: flex;flex-direction: column;justify-content: flex-end;">
                            <div class="gap-xs">
                                <a href="https://oxlift.ru/customers/articles/kak-k-nam-dobratsya/" class="link-brand">Как к нам добраться</a>
                            </div>
                            <div>
                                <a href="https://oxlift.ru/twomaps.png" class="link-brand" taret="_blank">Схема проезда Видное</a>
                                &nbsp;(г.Видное, Белокаменное шоссе вл. 10бс1)
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-sm-7">
                        <div class="content-box__map">
                            <img alt="Карта | ОКСЛИФТ" src="https://oxlift.ru/map.jpg" class="map_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>