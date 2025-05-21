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
                            <table class="contacts-page__table">
                                <tbody>
                                <tr>
                                    <td><i class="i-icon fontello-location"></i></td>
                                    <td>
                                        <h6 class="h6 contacts-page__table-subtitle">Адрес:</h6>
                                        <span>Москва, Востряковский проезд, 10б, стр.7</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <i class="i-icon fontello-phone2"></i>
                                    </td>
                                    <td>
                                        <h6 class="h6 contacts-page__table-subtitle">Телефон:</h6>
                                        <a href="tel:88005007869">8 (800) 500 78 69</a> - по России бесплатно;<br>
                                        <a href="tel:84951209097">8 (495) 120 90 97</a>;<br>
                                        <a href="tel:84991109267">8 (499) 110 92 67</a> - отдел сервиса.<br>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <i class="i-icon fontello-mail"></i>
                                    </td>
                                    <td>
                                        <h6 class="h6 contacts-page__table-subtitle">E-mail:</h6>
                                        <a href="mailto:sales+206458482@oxlift.ru">sales+206458482@oxlift.ru</a> - отдел продаж<br>
                                        <a href="mailto:service@oxlift.ru">service@oxlift.ru</a> - отдел сервиса<br>
                                        <a href="mailto:502@oxlift.ru">502@oxlift.ru</a> - отдел бухгалтерии<br>
                                    </td>
                                </tr>

                                <tr>
                                    <td><i class="i-icon fontello-clock"></i></td>
                                    <td>
                                        <h6 class="h6 contacts-page__table-subtitle">Режим работы</h6>
                                        Пн. – Пт.: с 9:00 до 18:00<br>
                                        Сб. - Вс.: выходной
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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

        <div class="gap-xl cp-content__item">
            <div class="container">

                <div class="gap-md">
                    <div class="h4 requisites-heading">РЕКВИЗИТЫ КОМПАНИИ</div>
                </div>

                <div class="requisites">
                    <table class="text-right">
                        <tbody>
                        <tr>
                            <td class="text-left">Полное наименование:</td>
                            <td>Общество с ограниченной ответственностью «ОКСЛИФТ»</td>
                        </tr>
                        <tr>
                            <td class="text-left">Сокращенное наименование:</td>
                            <td>ООО «ОКСЛИФТ»</td>
                        </tr>
                        <tr>
                            <td class="text-left">ИНН / КПП:</td>
                            <td>7724404353 / 772401001</td>
                        </tr>
                        <tr>
                            <td class="text-left">ОГРН:</td>
                            <td>1177746250780</td>
                        </tr>
                        <tr>
                            <td class="text-left">Юридический адрес:</td>
                            <td>117403, Москва г, вн.тер.г. муниципальный округ Бирюлево Западное, проезд Востряковский, д. 10Б, стр. 7, этаж 2, помещ. I, ком. Б, ком. 28</td>
                        </tr>
                        <tr>
                            <td class="text-left">Фактический адрес:</td>
                            <td>117403, Москва г, вн.тер.г. муниципальный округ Бирюлево Западное, проезд Востряковский, д. 10Б, стр. 7, этаж 2, помещ. I, ком. Б, ком. 28</td>
                        </tr>
                        <tr>
                            <td class="text-left">Телефон, факс:</td>
                            <td>+7 (495) 120-90-97</td>
                        </tr>
                        <tr>
                            <td class="text-left">Электронная почта:</td>
                            <td>sales@oxlift.ru , oxlift@gmail.com, info@oxlift.ru</td>
                        </tr>
                        <tr>
                            <td class="text-left">Сайт:</td>
                            <td>oxlift.ru</td>
                        </tr>
                        <tr>
                            <td class="text-left">Банковские реквизиты:</td>
                            <td>БИК 044525411 <br>Р/с №40702810224460001939 в Филиал "Центральный" Банка ВТБ (ПАО) <br>Кор/счет 30101810145250000411</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="cp-content__item">
            <div class="container">

                <div class="row">
                    <div class="col col-12 col-lg-6">
                        <div class="contacts-page__office">
                            <div class="contacts-page__office-title">Москва</div>
                            <div class="contacts-page__office-info">
                                <div class="row">
                                    <div class="col col-12 col-sm-flex col-sm-6">
                                        <div class="contacts-page__office-info-part">
                                            <div class="contacts-page__office-info-title">Адрес:</div>
                                            <div class="contacts-page__office-info-text">
                                                <p>г. Москва, Востряковский проезд, 10б, стр.7</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-12 col-sm-flex col-sm-6">
                                        <div class="contacts-page__office-info-part">
                                            <div class="contacts-page__office-info-title">Email:</div>
                                            <div class="contacts-page__office-info-text">
                                                <a href="mailto:sales+206458482@oxlift.ru">sales+206458482@oxlift.ru</a> - отдел продаж<br>
                                                <a href="mailto:service@oxlift.ru">service@oxlift.ru</a> - отдел сервиса<br>
                                                <a href="mailto:502@oxlift.ru">502@oxlift.ru</a> - отдел бухгалтерии<br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-12 col-sm-flex col-sm-6">
                                        <div class="contacts-page__office-info-part">
                                            <div class="contacts-page__office-info-title">Телефон:</div>
                                            <div class="contacts-page__office-info-text">
                                                <a href="tel:88005007869">8 (800) 500 78 69</a> - по России бесплатно;<br>
                                                <a href="tel:84951209097">8 (495) 120 90 97</a>;<br>
                                                <a href="tel:84991109267">8 (499) 110 92 67</a> - отдел сервиса.<br>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-12 col-sm-flex col-sm-6">
                                        <div class="contacts-page__office-info-part">
                                            <div class="contacts-page__office-info-title">Режим работы:</div>
                                            <div class="contacts-page__office-info-text">
                                                Пн. – Пт.: с 9:00 до 18:00<br>
                                                Сб. - Вс.: выходной
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-12 col-sm-flex col-sm-6">
                                        <div class="contacts-page__office-info-part">
                                            <div class="contacts-page__office-info-title">Адрес сайта:</div>
                                            <div class="contacts-page__office-info-text">
                                                <a href="https://new.oxlift.ru/" target="_blank">https://new.oxlift.ru/</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col col-12 col-sm-flex col-sm-6">
                                        <div class="contacts-page__office-info-part">
                                            <div class="contacts-page__office-info-text">
                                                <a href="https://oxlift.ru/twomaps.png" taret="_blank">Схема проезда Видное</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-lg-6">
                        <div class="contacts-page__office-map contacts-map">
                            <div class="contacts-map-content" data-x="55.577622" data-y="37.624192"></div>
                        </div>
                    </div>
                </div>
                <br>
                <br>

            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>