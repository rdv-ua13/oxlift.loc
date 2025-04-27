<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="gap-md">
    <div class="container">
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/breadcrumbs.php"); ?>
    </div>
</div>

<div class="container">
    <div class="catalog-category">
        <div class="gap-xl cp">
            <div class="cp-sidebar" data-filter>
                <div class="cp-sidebar__item cp-sidebar-filter">
                    <div class="product-filter js-product-filter">
                        <button class="product-filter__btn-close js-btn-filter-close">
                            <span>Закрыть фильтр</span>
                        </button>
                        <div class="product-filter__content-wrap">
                            <div class="product-filter__content">
                                <form name="_form" action="" method="get" class="product-filter__main">
                                    <div class="product-filter__header">
                                        <strong class="product-filter__title">
                                            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z" fill="#33333D"></path>
                                            </svg>
                                            Фильтр
                                        </strong>

                                        <button id="del_filter" type="reset" class="btn-reset product-filter__btn-reset">
                                            Очистить
                                            <svg width="10" height="10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.796 5l3.54-3.54a.563.563 0 10-.797-.795L5 4.205 1.46.664a.563.563 0 10-.795.796L4.205 5 .664 8.538a.563.563 0 10.796.796L5 5.795l3.538 3.54a.561.561 0 00.796 0 .563.563 0 000-.796L5.795 5z" fill="#8B98A7"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-filter__section product-filter__section--row">
                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="available" type="radio" class="product-filter__checkbox" value="Y" onclick="check_val(this);smartFilter.click(this)">
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">В&nbsp;наличии</span>
                                            </label>
                                        </div>
                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="available" type="radio" class="product-filter__checkbox" value="N" onclick="check_val(this);smartFilter.click(this)">
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Под&nbsp;заказ</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="product-filter__section">
                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="hit" type="checkbox" class="product-filter__checkbox prop" onclick="smartFilter.prop(this)">
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Хит продаж</span>
                                            </label>
                                        </div>
                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="best_price" type="checkbox" class="product-filter__checkbox prop" onclick="smartFilter.prop(this)">
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Лучшая цена</span>
                                            </label>
                                        </div>

                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="sale" type="checkbox" class="product-filter__checkbox prop" onclick="smartFilter.prop(this)">
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Распродажа</span>
                                            </label>
                                        </div>
                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="stock" type="checkbox" class="product-filter__checkbox prop" onclick="smartFilter.prop(this)">
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Ликвидация</span>
                                            </label>
                                        </div>

                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="new" type="checkbox" class="product-filter__checkbox prop" onclick="smartFilter.prop(this)">
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Новинка</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="product-filter__section">
                                        <div class="product-filter__accordion js-accordion">
                                            <button class="btn-reset product-filter__accordion-btn js-accordion-btn">
                                                <span>Тип товара</span>
                                            </button>
                                            <div class="product-filter__accordion-info js-accordion-info">
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_327139305" class="product-filter__label " for="arrFilterCatalog_869_327139305">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_327139305" id="arrFilterCatalog_869_327139305" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title=" Лента уплотнительная"> Лента уплотнительная&nbsp;(<span data-role="count_arrFilterCatalog_869_327139305">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2573007870" class="product-filter__label " for="arrFilterCatalog_869_2573007870">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2573007870" id="arrFilterCatalog_869_2573007870" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="H-профиль">H-профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_2573007870">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_519888541" class="product-filter__label " for="arrFilterCatalog_869_519888541">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_519888541" id="arrFilterCatalog_869_519888541" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="J-профиль">J-профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_519888541">21</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1684551544" class="product-filter__label " for="arrFilterCatalog_869_1684551544">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1684551544" id="arrFilterCatalog_869_1684551544" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="J-фаска (карнизная доска)">J-фаска (карнизная доска)&nbsp;(<span data-role="count_arrFilterCatalog_869_1684551544">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2539245404" class="product-filter__label " for="arrFilterCatalog_869_2539245404">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2539245404" id="arrFilterCatalog_869_2539245404" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Аквапанель">Аквапанель&nbsp;(<span data-role="count_arrFilterCatalog_869_2539245404">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2658723607" class="product-filter__label " for="arrFilterCatalog_869_2658723607">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2658723607" id="arrFilterCatalog_869_2658723607" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Алебастр">Алебастр&nbsp;(<span data-role="count_arrFilterCatalog_869_2658723607">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3919709179" class="product-filter__label " for="arrFilterCatalog_869_3919709179">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3919709179" id="arrFilterCatalog_869_3919709179" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Анкер">Анкер&nbsp;(<span data-role="count_arrFilterCatalog_869_3919709179">27</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3223649332" class="product-filter__label " for="arrFilterCatalog_869_3223649332">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3223649332" id="arrFilterCatalog_869_3223649332" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Анкер-клин">Анкер-клин&nbsp;(<span data-role="count_arrFilterCatalog_869_3223649332">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2513086307" class="product-filter__label " for="arrFilterCatalog_869_2513086307">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2513086307" id="arrFilterCatalog_869_2513086307" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Антифриз">Антифриз&nbsp;(<span data-role="count_arrFilterCatalog_869_2513086307">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_975260717" class="product-filter__label " for="arrFilterCatalog_869_975260717">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_975260717" id="arrFilterCatalog_869_975260717" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Арматура">Арматура&nbsp;(<span data-role="count_arrFilterCatalog_869_975260717">24</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2222450256" class="product-filter__label " for="arrFilterCatalog_869_2222450256">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2222450256" id="arrFilterCatalog_869_2222450256" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Армпанель">Армпанель&nbsp;(<span data-role="count_arrFilterCatalog_869_2222450256">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_481363161" class="product-filter__label " for="arrFilterCatalog_869_481363161">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_481363161" id="arrFilterCatalog_869_481363161" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Блок">Блок&nbsp;(<span data-role="count_arrFilterCatalog_869_481363161">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3817062557" class="product-filter__label " for="arrFilterCatalog_869_3817062557">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3817062557" id="arrFilterCatalog_869_3817062557" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Болт">Болт&nbsp;(<span data-role="count_arrFilterCatalog_869_3817062557">20</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2403689778" class="product-filter__label " for="arrFilterCatalog_869_2403689778">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2403689778" id="arrFilterCatalog_869_2403689778" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Вата ">Вата &nbsp;(<span data-role="count_arrFilterCatalog_869_2403689778">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3820184850" class="product-filter__label " for="arrFilterCatalog_869_3820184850">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3820184850" id="arrFilterCatalog_869_3820184850" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Вата базальтовая">Вата базальтовая&nbsp;(<span data-role="count_arrFilterCatalog_869_3820184850">29</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2606010331" class="product-filter__label " for="arrFilterCatalog_869_2606010331">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2606010331" id="arrFilterCatalog_869_2606010331" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Вата минеральная">Вата минеральная&nbsp;(<span data-role="count_arrFilterCatalog_869_2606010331">21</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3822141363" class="product-filter__label " for="arrFilterCatalog_869_3822141363">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3822141363" id="arrFilterCatalog_869_3822141363" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ветро-влагозащита">Ветро-влагозащита&nbsp;(<span data-role="count_arrFilterCatalog_869_3822141363">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4079959026" class="product-filter__label " for="arrFilterCatalog_869_4079959026">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4079959026" id="arrFilterCatalog_869_4079959026" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Виброопора">Виброопора&nbsp;(<span data-role="count_arrFilterCatalog_869_4079959026">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2956436038" class="product-filter__label " for="arrFilterCatalog_869_2956436038">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2956436038" id="arrFilterCatalog_869_2956436038" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Виброподвес">Виброподвес&nbsp;(<span data-role="count_arrFilterCatalog_869_2956436038">13</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3273114479" class="product-filter__label " for="arrFilterCatalog_869_3273114479">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3273114479" id="arrFilterCatalog_869_3273114479" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Внешний угол">Внешний угол&nbsp;(<span data-role="count_arrFilterCatalog_869_3273114479">14</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4225755997" class="product-filter__label " for="arrFilterCatalog_869_4225755997">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4225755997" id="arrFilterCatalog_869_4225755997" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Внутренний угол">Внутренний угол&nbsp;(<span data-role="count_arrFilterCatalog_869_4225755997">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3193851086" class="product-filter__label " for="arrFilterCatalog_869_3193851086">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3193851086" id="arrFilterCatalog_869_3193851086" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Вспененный полиэтилен">Вспененный полиэтилен&nbsp;(<span data-role="count_arrFilterCatalog_869_3193851086">10</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_564327280" class="product-filter__label " for="arrFilterCatalog_869_564327280">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_564327280" id="arrFilterCatalog_869_564327280" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Газобетон">Газобетон&nbsp;(<span data-role="count_arrFilterCatalog_869_564327280">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3267781374" class="product-filter__label " for="arrFilterCatalog_869_3267781374">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3267781374" id="arrFilterCatalog_869_3267781374" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гайка">Гайка&nbsp;(<span data-role="count_arrFilterCatalog_869_3267781374">21</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3743606743" class="product-filter__label " for="arrFilterCatalog_869_3743606743">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3743606743" id="arrFilterCatalog_869_3743606743" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гарцовка">Гарцовка&nbsp;(<span data-role="count_arrFilterCatalog_869_3743606743">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_12541262" class="product-filter__label " for="arrFilterCatalog_869_12541262">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_12541262" id="arrFilterCatalog_869_12541262" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гвоздь">Гвоздь&nbsp;(<span data-role="count_arrFilterCatalog_869_12541262">43</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4101816217" class="product-filter__label " for="arrFilterCatalog_869_4101816217">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4101816217" id="arrFilterCatalog_869_4101816217" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Геомембрана">Геомембрана&nbsp;(<span data-role="count_arrFilterCatalog_869_4101816217">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_503019295" class="product-filter__label " for="arrFilterCatalog_869_503019295">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_503019295" id="arrFilterCatalog_869_503019295" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик">Герметик&nbsp;(<span data-role="count_arrFilterCatalog_869_503019295">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_869415042" class="product-filter__label " for="arrFilterCatalog_869_869415042">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_869415042" id="arrFilterCatalog_869_869415042" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик акриловый">Герметик акриловый&nbsp;(<span data-role="count_arrFilterCatalog_869_869415042">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4181932205" class="product-filter__label " for="arrFilterCatalog_869_4181932205">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4181932205" id="arrFilterCatalog_869_4181932205" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик битумный">Герметик битумный&nbsp;(<span data-role="count_arrFilterCatalog_869_4181932205">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3082878320" class="product-filter__label " for="arrFilterCatalog_869_3082878320">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3082878320" id="arrFilterCatalog_869_3082878320" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик для OSB-плит">Герметик для OSB-плит&nbsp;(<span data-role="count_arrFilterCatalog_869_3082878320">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3799802008" class="product-filter__label " for="arrFilterCatalog_869_3799802008">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3799802008" id="arrFilterCatalog_869_3799802008" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик для дерева">Герметик для дерева&nbsp;(<span data-role="count_arrFilterCatalog_869_3799802008">18</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_703087317" class="product-filter__label " for="arrFilterCatalog_869_703087317">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_703087317" id="arrFilterCatalog_869_703087317" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик кровельный">Герметик кровельный&nbsp;(<span data-role="count_arrFilterCatalog_869_703087317">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1461759736" class="product-filter__label " for="arrFilterCatalog_869_1461759736">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1461759736" id="arrFilterCatalog_869_1461759736" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик полиуретановый">Герметик полиуретановый&nbsp;(<span data-role="count_arrFilterCatalog_869_1461759736">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_830771921" class="product-filter__label " for="arrFilterCatalog_869_830771921">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_830771921" id="arrFilterCatalog_869_830771921" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик противопожарный">Герметик противопожарный&nbsp;(<span data-role="count_arrFilterCatalog_869_830771921">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1065147978" class="product-filter__label " for="arrFilterCatalog_869_1065147978">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1065147978" id="arrFilterCatalog_869_1065147978" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик силакриловый">Герметик силакриловый&nbsp;(<span data-role="count_arrFilterCatalog_869_1065147978">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_15811948" class="product-filter__label " for="arrFilterCatalog_869_15811948">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_15811948" id="arrFilterCatalog_869_15811948" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик силиконовый">Герметик силиконовый&nbsp;(<span data-role="count_arrFilterCatalog_869_15811948">47</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3459617176" class="product-filter__label " for="arrFilterCatalog_869_3459617176">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3459617176" id="arrFilterCatalog_869_3459617176" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гидро-пароизоляция">Гидро-пароизоляция&nbsp;(<span data-role="count_arrFilterCatalog_869_3459617176">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_506848257" class="product-filter__label " for="arrFilterCatalog_869_506848257">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_506848257" id="arrFilterCatalog_869_506848257" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гидроизоляция">Гидроизоляция&nbsp;(<span data-role="count_arrFilterCatalog_869_506848257">13</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1807265888" class="product-filter__label " for="arrFilterCatalog_869_1807265888">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1807265888" id="arrFilterCatalog_869_1807265888" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гидропароизоляция">Гидропароизоляция&nbsp;(<span data-role="count_arrFilterCatalog_869_1807265888">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1691516863" class="product-filter__label " for="arrFilterCatalog_869_1691516863">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1691516863" id="arrFilterCatalog_869_1691516863" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гипс высокопрочный ГВВС-16">Гипс высокопрочный ГВВС-16&nbsp;(<span data-role="count_arrFilterCatalog_869_1691516863">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_280946283" class="product-filter__label " for="arrFilterCatalog_869_280946283">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_280946283" id="arrFilterCatalog_869_280946283" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гипс строительный">Гипс строительный&nbsp;(<span data-role="count_arrFilterCatalog_869_280946283">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_719896490" class="product-filter__label " for="arrFilterCatalog_869_719896490">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_719896490" id="arrFilterCatalog_869_719896490" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гипсоволокнистый лист">Гипсоволокнистый лист&nbsp;(<span data-role="count_arrFilterCatalog_869_719896490">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2927443373" class="product-filter__label " for="arrFilterCatalog_869_2927443373">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2927443373" id="arrFilterCatalog_869_2927443373" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гипсокартон">Гипсокартон&nbsp;(<span data-role="count_arrFilterCatalog_869_2927443373">44</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1380041460" class="product-filter__label " for="arrFilterCatalog_869_1380041460">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1380041460" id="arrFilterCatalog_869_1380041460" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Грунт">Грунт&nbsp;(<span data-role="count_arrFilterCatalog_869_1380041460">50</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1778171759" class="product-filter__label " for="arrFilterCatalog_869_1778171759">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1778171759" id="arrFilterCatalog_869_1778171759" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Грунтовка">Грунтовка&nbsp;(<span data-role="count_arrFilterCatalog_869_1778171759">25</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4139894063" class="product-filter__label " for="arrFilterCatalog_869_4139894063">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4139894063" id="arrFilterCatalog_869_4139894063" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Держатель балки">Держатель балки&nbsp;(<span data-role="count_arrFilterCatalog_869_4139894063">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_181224758" class="product-filter__label " for="arrFilterCatalog_869_181224758">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_181224758" id="arrFilterCatalog_869_181224758" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Добавка">Добавка&nbsp;(<span data-role="count_arrFilterCatalog_869_181224758">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2586982582" class="product-filter__label " for="arrFilterCatalog_869_2586982582">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2586982582" id="arrFilterCatalog_869_2586982582" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Древесноволокнистая плита ">Древесноволокнистая плита &nbsp;(<span data-role="count_arrFilterCatalog_869_2586982582">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1610927304" class="product-filter__label " for="arrFilterCatalog_869_1610927304">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1610927304" id="arrFilterCatalog_869_1610927304" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Древесностружечная плита ">Древесностружечная плита &nbsp;(<span data-role="count_arrFilterCatalog_869_1610927304">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2308404353" class="product-filter__label " for="arrFilterCatalog_869_2308404353">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2308404353" id="arrFilterCatalog_869_2308404353" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Дюбель">Дюбель&nbsp;(<span data-role="count_arrFilterCatalog_869_2308404353">56</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2157100439" class="product-filter__label " for="arrFilterCatalog_869_2157100439">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2157100439" id="arrFilterCatalog_869_2157100439" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Дюбель для теплоизоляции">Дюбель для теплоизоляции&nbsp;(<span data-role="count_arrFilterCatalog_869_2157100439">42</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3059546618" class="product-filter__label " for="arrFilterCatalog_869_3059546618">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3059546618" id="arrFilterCatalog_869_3059546618" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Дюбель-гвоздь">Дюбель-гвоздь&nbsp;(<span data-role="count_arrFilterCatalog_869_3059546618">23</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_454457858" class="product-filter__label " for="arrFilterCatalog_869_454457858">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_454457858" id="arrFilterCatalog_869_454457858" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Дюбель-гвоздь для монтажного пистолета">Дюбель-гвоздь для монтажного пистолета&nbsp;(<span data-role="count_arrFilterCatalog_869_454457858">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1282468335" class="product-filter__label " for="arrFilterCatalog_869_1282468335">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1282468335" id="arrFilterCatalog_869_1282468335" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Жгут">Жгут&nbsp;(<span data-role="count_arrFilterCatalog_869_1282468335">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2077224892" class="product-filter__label " for="arrFilterCatalog_869_2077224892">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2077224892" id="arrFilterCatalog_869_2077224892" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Жидкая резина">Жидкая резина&nbsp;(<span data-role="count_arrFilterCatalog_869_2077224892">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4045493961" class="product-filter__label " for="arrFilterCatalog_869_4045493961">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4045493961" id="arrFilterCatalog_869_4045493961" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Жидкое стекло">Жидкое стекло&nbsp;(<span data-role="count_arrFilterCatalog_869_4045493961">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_390610022" class="product-filter__label " for="arrFilterCatalog_869_390610022">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_390610022" id="arrFilterCatalog_869_390610022" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Зажим">Зажим&nbsp;(<span data-role="count_arrFilterCatalog_869_390610022">10</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3457483187" class="product-filter__label " for="arrFilterCatalog_869_3457483187">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3457483187" id="arrFilterCatalog_869_3457483187" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Заклепка">Заклепка&nbsp;(<span data-role="count_arrFilterCatalog_869_3457483187">15</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1046340595" class="product-filter__label " for="arrFilterCatalog_869_1046340595">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1046340595" id="arrFilterCatalog_869_1046340595" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Затирка">Затирка&nbsp;(<span data-role="count_arrFilterCatalog_869_1046340595">83</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1172847307" class="product-filter__label " for="arrFilterCatalog_869_1172847307">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1172847307" id="arrFilterCatalog_869_1172847307" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Защитный колпачок">Защитный колпачок&nbsp;(<span data-role="count_arrFilterCatalog_869_1172847307">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1459465077" class="product-filter__label " for="arrFilterCatalog_869_1459465077">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1459465077" id="arrFilterCatalog_869_1459465077" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Звукоизоляционная панель">Звукоизоляционная панель&nbsp;(<span data-role="count_arrFilterCatalog_869_1459465077">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1312821036" class="product-filter__label " for="arrFilterCatalog_869_1312821036">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1312821036" id="arrFilterCatalog_869_1312821036" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Карабин">Карабин&nbsp;(<span data-role="count_arrFilterCatalog_869_1312821036">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1472568607" class="product-filter__label " for="arrFilterCatalog_869_1472568607">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1472568607" id="arrFilterCatalog_869_1472568607" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Кембрийская глина">Кембрийская глина&nbsp;(<span data-role="count_arrFilterCatalog_869_1472568607">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2342632251" class="product-filter__label " for="arrFilterCatalog_869_2342632251">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2342632251" id="arrFilterCatalog_869_2342632251" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Керамзит">Керамзит&nbsp;(<span data-role="count_arrFilterCatalog_869_2342632251">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1955749097" class="product-filter__label " for="arrFilterCatalog_869_1955749097">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1955749097" id="arrFilterCatalog_869_1955749097" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Кирпич">Кирпич&nbsp;(<span data-role="count_arrFilterCatalog_869_1955749097">28</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_968523910" class="product-filter__label " for="arrFilterCatalog_869_968523910">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_968523910" id="arrFilterCatalog_869_968523910" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Кладочная смесь">Кладочная смесь&nbsp;(<span data-role="count_arrFilterCatalog_869_968523910">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1591679334" class="product-filter__label " for="arrFilterCatalog_869_1591679334">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1591679334" id="arrFilterCatalog_869_1591679334" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клеевой состав">Клеевой состав&nbsp;(<span data-role="count_arrFilterCatalog_869_1591679334">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2347429496" class="product-filter__label " for="arrFilterCatalog_869_2347429496">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2347429496" id="arrFilterCatalog_869_2347429496" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей">Клей&nbsp;(<span data-role="count_arrFilterCatalog_869_2347429496">22</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3653696915" class="product-filter__label " for="arrFilterCatalog_869_3653696915">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3653696915" id="arrFilterCatalog_869_3653696915" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей - герметик">Клей - герметик&nbsp;(<span data-role="count_arrFilterCatalog_869_3653696915">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2725795874" class="product-filter__label " for="arrFilterCatalog_869_2725795874">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2725795874" id="arrFilterCatalog_869_2725795874" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей - пена">Клей - пена&nbsp;(<span data-role="count_arrFilterCatalog_869_2725795874">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_961477620" class="product-filter__label " for="arrFilterCatalog_869_961477620">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_961477620" id="arrFilterCatalog_869_961477620" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей - шпатлёвка">Клей - шпатлёвка&nbsp;(<span data-role="count_arrFilterCatalog_869_961477620">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1926923060" class="product-filter__label " for="arrFilterCatalog_869_1926923060">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1926923060" id="arrFilterCatalog_869_1926923060" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей КС">Клей КС&nbsp;(<span data-role="count_arrFilterCatalog_869_1926923060">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_297321386" class="product-filter__label " for="arrFilterCatalog_869_297321386">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_297321386" id="arrFilterCatalog_869_297321386" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей ПВА">Клей ПВА&nbsp;(<span data-role="count_arrFilterCatalog_869_297321386">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4287516107" class="product-filter__label " for="arrFilterCatalog_869_4287516107">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4287516107" id="arrFilterCatalog_869_4287516107" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для ПГП">Клей для ПГП&nbsp;(<span data-role="count_arrFilterCatalog_869_4287516107">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_762666825" class="product-filter__label " for="arrFilterCatalog_869_762666825">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_762666825" id="arrFilterCatalog_869_762666825" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для ЭПП">Клей для ЭПП&nbsp;(<span data-role="count_arrFilterCatalog_869_762666825">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1723302437" class="product-filter__label " for="arrFilterCatalog_869_1723302437">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1723302437" id="arrFilterCatalog_869_1723302437" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для газобетона">Клей для газобетона&nbsp;(<span data-role="count_arrFilterCatalog_869_1723302437">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1361435665" class="product-filter__label " for="arrFilterCatalog_869_1361435665">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1361435665" id="arrFilterCatalog_869_1361435665" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для минераловатных плит">Клей для минераловатных плит&nbsp;(<span data-role="count_arrFilterCatalog_869_1361435665">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_413555247" class="product-filter__label " for="arrFilterCatalog_869_413555247">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_413555247" id="arrFilterCatalog_869_413555247" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для минеральной ваты ">Клей для минеральной ваты &nbsp;(<span data-role="count_arrFilterCatalog_869_413555247">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3563363889" class="product-filter__label " for="arrFilterCatalog_869_3563363889">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3563363889" id="arrFilterCatalog_869_3563363889" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для плитки">Клей для плитки&nbsp;(<span data-role="count_arrFilterCatalog_869_3563363889">25</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1611525820" class="product-filter__label " for="arrFilterCatalog_869_1611525820">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1611525820" id="arrFilterCatalog_869_1611525820" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для плитки и камня">Клей для плитки и камня&nbsp;(<span data-role="count_arrFilterCatalog_869_1611525820">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_734472452" class="product-filter__label " for="arrFilterCatalog_869_734472452">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_734472452" id="arrFilterCatalog_869_734472452" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для плитки и керамогранита  ">Клей для плитки и керамогранита  &nbsp;(<span data-role="count_arrFilterCatalog_869_734472452">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3013810872" class="product-filter__label " for="arrFilterCatalog_869_3013810872">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3013810872" id="arrFilterCatalog_869_3013810872" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей монтажный">Клей монтажный&nbsp;(<span data-role="count_arrFilterCatalog_869_3013810872">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3960498677" class="product-filter__label " for="arrFilterCatalog_869_3960498677">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3960498677" id="arrFilterCatalog_869_3960498677" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей-герметик">Клей-герметик&nbsp;(<span data-role="count_arrFilterCatalog_869_3960498677">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1223049038" class="product-filter__label " for="arrFilterCatalog_869_1223049038">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1223049038" id="arrFilterCatalog_869_1223049038" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клинкер">Клинкер&nbsp;(<span data-role="count_arrFilterCatalog_869_1223049038">20</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2098518073" class="product-filter__label " for="arrFilterCatalog_869_2098518073">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2098518073" id="arrFilterCatalog_869_2098518073" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ковер">Ковер&nbsp;(<span data-role="count_arrFilterCatalog_869_2098518073">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3292435807" class="product-filter__label " for="arrFilterCatalog_869_3292435807">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3292435807" id="arrFilterCatalog_869_3292435807" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Комплект звукоизоляции труб">Комплект звукоизоляции труб&nbsp;(<span data-role="count_arrFilterCatalog_869_3292435807">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_559999954" class="product-filter__label " for="arrFilterCatalog_869_559999954">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_559999954" id="arrFilterCatalog_869_559999954" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Комплект реек">Комплект реек&nbsp;(<span data-role="count_arrFilterCatalog_869_559999954">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2806609171" class="product-filter__label " for="arrFilterCatalog_869_2806609171">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2806609171" id="arrFilterCatalog_869_2806609171" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Комплектующие для несъемной опалубки">Комплектующие для несъемной опалубки&nbsp;(<span data-role="count_arrFilterCatalog_869_2806609171">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2476060212" class="product-filter__label " for="arrFilterCatalog_869_2476060212">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2476060212" id="arrFilterCatalog_869_2476060212" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Коуш">Коуш&nbsp;(<span data-role="count_arrFilterCatalog_869_2476060212">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2018868574" class="product-filter__label " for="arrFilterCatalog_869_2018868574">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2018868574" id="arrFilterCatalog_869_2018868574" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крепеж">Крепеж&nbsp;(<span data-role="count_arrFilterCatalog_869_2018868574">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4099714954" class="product-filter__label " for="arrFilterCatalog_869_4099714954">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4099714954" id="arrFilterCatalog_869_4099714954" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крепление">Крепление&nbsp;(<span data-role="count_arrFilterCatalog_869_4099714954">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2903973463" class="product-filter__label " for="arrFilterCatalog_869_2903973463">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2903973463" id="arrFilterCatalog_869_2903973463" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крепление для маячкового профиля">Крепление для маячкового профиля&nbsp;(<span data-role="count_arrFilterCatalog_869_2903973463">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_763366471" class="product-filter__label " for="arrFilterCatalog_869_763366471">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_763366471" id="arrFilterCatalog_869_763366471" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Кронштейн">Кронштейн&nbsp;(<span data-role="count_arrFilterCatalog_869_763366471">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4174380455" class="product-filter__label " for="arrFilterCatalog_869_4174380455">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4174380455" id="arrFilterCatalog_869_4174380455" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крюк для вязальной проволоки">Крюк для вязальной проволоки&nbsp;(<span data-role="count_arrFilterCatalog_869_4174380455">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1098190656" class="product-filter__label " for="arrFilterCatalog_869_1098190656">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1098190656" id="arrFilterCatalog_869_1098190656" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крючок">Крючок&nbsp;(<span data-role="count_arrFilterCatalog_869_1098190656">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1281530572" class="product-filter__label " for="arrFilterCatalog_869_1281530572">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1281530572" id="arrFilterCatalog_869_1281530572" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лента">Лента&nbsp;(<span data-role="count_arrFilterCatalog_869_1281530572">56</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_834438450" class="product-filter__label " for="arrFilterCatalog_869_834438450">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_834438450" id="arrFilterCatalog_869_834438450" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лента соединительная">Лента соединительная&nbsp;(<span data-role="count_arrFilterCatalog_869_834438450">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1222539205" class="product-filter__label " for="arrFilterCatalog_869_1222539205">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1222539205" id="arrFilterCatalog_869_1222539205" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лента уплотнительная">Лента уплотнительная&nbsp;(<span data-role="count_arrFilterCatalog_869_1222539205">19</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_154786096" class="product-filter__label " for="arrFilterCatalog_869_154786096">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_154786096" id="arrFilterCatalog_869_154786096" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лента-серпянка">Лента-серпянка&nbsp;(<span data-role="count_arrFilterCatalog_869_154786096">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1509125456" class="product-filter__label " for="arrFilterCatalog_869_1509125456">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1509125456" id="arrFilterCatalog_869_1509125456" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лист">Лист&nbsp;(<span data-role="count_arrFilterCatalog_869_1509125456">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4081430966" class="product-filter__label " for="arrFilterCatalog_869_4081430966">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4081430966" id="arrFilterCatalog_869_4081430966" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лист огнестойкий">Лист огнестойкий&nbsp;(<span data-role="count_arrFilterCatalog_869_4081430966">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1968765491" class="product-filter__label " for="arrFilterCatalog_869_1968765491">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1968765491" id="arrFilterCatalog_869_1968765491" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лист огнестойкий Gyproc Файер ">Лист огнестойкий Gyproc Файер &nbsp;(<span data-role="count_arrFilterCatalog_869_1968765491">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4046235041" class="product-filter__label " for="arrFilterCatalog_869_4046235041">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4046235041" id="arrFilterCatalog_869_4046235041" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лист стекломагниевый">Лист стекломагниевый&nbsp;(<span data-role="count_arrFilterCatalog_869_4046235041">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2088553040" class="product-filter__label " for="arrFilterCatalog_869_2088553040">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2088553040" id="arrFilterCatalog_869_2088553040" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лягушка из арматуры">Лягушка из арматуры&nbsp;(<span data-role="count_arrFilterCatalog_869_2088553040">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2813883438" class="product-filter__label " for="arrFilterCatalog_869_2813883438">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2813883438" id="arrFilterCatalog_869_2813883438" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Манжета">Манжета&nbsp;(<span data-role="count_arrFilterCatalog_869_2813883438">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2058205941" class="product-filter__label " for="arrFilterCatalog_869_2058205941">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2058205941" id="arrFilterCatalog_869_2058205941" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мастика">Мастика&nbsp;(<span data-role="count_arrFilterCatalog_869_2058205941">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1367451419" class="product-filter__label " for="arrFilterCatalog_869_1367451419">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1367451419" id="arrFilterCatalog_869_1367451419" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мастика гидроизоляционная ">Мастика гидроизоляционная &nbsp;(<span data-role="count_arrFilterCatalog_869_1367451419">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1365040641" class="product-filter__label " for="arrFilterCatalog_869_1365040641">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1365040641" id="arrFilterCatalog_869_1365040641" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мастика каучукобитумная">Мастика каучукобитумная&nbsp;(<span data-role="count_arrFilterCatalog_869_1365040641">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3608031078" class="product-filter__label " for="arrFilterCatalog_869_3608031078">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3608031078" id="arrFilterCatalog_869_3608031078" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мастика клеящая">Мастика клеящая&nbsp;(<span data-role="count_arrFilterCatalog_869_3608031078">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1308110404" class="product-filter__label " for="arrFilterCatalog_869_1308110404">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1308110404" id="arrFilterCatalog_869_1308110404" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Маячок реперный">Маячок реперный&nbsp;(<span data-role="count_arrFilterCatalog_869_1308110404">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2403360228" class="product-filter__label " for="arrFilterCatalog_869_2403360228">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2403360228" id="arrFilterCatalog_869_2403360228" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мел">Мел&nbsp;(<span data-role="count_arrFilterCatalog_869_2403360228">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3250282428" class="product-filter__label " for="arrFilterCatalog_869_3250282428">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3250282428" id="arrFilterCatalog_869_3250282428" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мембрана">Мембрана&nbsp;(<span data-role="count_arrFilterCatalog_869_3250282428">17</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1656180521" class="product-filter__label " for="arrFilterCatalog_869_1656180521">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1656180521" id="arrFilterCatalog_869_1656180521" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мембрана профилированная">Мембрана профилированная&nbsp;(<span data-role="count_arrFilterCatalog_869_1656180521">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3881396040" class="product-filter__label " for="arrFilterCatalog_869_3881396040">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3881396040" id="arrFilterCatalog_869_3881396040" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Молдинг">Молдинг&nbsp;(<span data-role="count_arrFilterCatalog_869_3881396040">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_46095260" class="product-filter__label " for="arrFilterCatalog_869_46095260">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_46095260" id="arrFilterCatalog_869_46095260" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Набор">Набор&nbsp;(<span data-role="count_arrFilterCatalog_869_46095260">22</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1004422485" class="product-filter__label " for="arrFilterCatalog_869_1004422485">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1004422485" id="arrFilterCatalog_869_1004422485" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Наличник">Наличник&nbsp;(<span data-role="count_arrFilterCatalog_869_1004422485">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_697078208" class="product-filter__label " for="arrFilterCatalog_869_697078208">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_697078208" id="arrFilterCatalog_869_697078208" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Наружный угол">Наружный угол&nbsp;(<span data-role="count_arrFilterCatalog_869_697078208">33</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2250296434" class="product-filter__label " for="arrFilterCatalog_869_2250296434">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2250296434" id="arrFilterCatalog_869_2250296434" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Обеспыливатель">Обеспыливатель&nbsp;(<span data-role="count_arrFilterCatalog_869_2250296434">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2165420133" class="product-filter__label " for="arrFilterCatalog_869_2165420133">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2165420133" id="arrFilterCatalog_869_2165420133" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Околооконный профиль">Околооконный профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_2165420133">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3869322867" class="product-filter__label " for="arrFilterCatalog_869_3869322867">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3869322867" id="arrFilterCatalog_869_3869322867" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Опора">Опора&nbsp;(<span data-role="count_arrFilterCatalog_869_3869322867">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2491414556" class="product-filter__label " for="arrFilterCatalog_869_2491414556">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2491414556" id="arrFilterCatalog_869_2491414556" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Опора балки">Опора балки&nbsp;(<span data-role="count_arrFilterCatalog_869_2491414556">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_887265300" class="product-filter__label " for="arrFilterCatalog_869_887265300">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_887265300" id="arrFilterCatalog_869_887265300" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Опора бруса">Опора бруса&nbsp;(<span data-role="count_arrFilterCatalog_869_887265300">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1538901756" class="product-filter__label " for="arrFilterCatalog_869_1538901756">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1538901756" id="arrFilterCatalog_869_1538901756" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Основание">Основание&nbsp;(<span data-role="count_arrFilterCatalog_869_1538901756">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1469437806" class="product-filter__label " for="arrFilterCatalog_869_1469437806">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1469437806" id="arrFilterCatalog_869_1469437806" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Отлив">Отлив&nbsp;(<span data-role="count_arrFilterCatalog_869_1469437806">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3067605565" class="product-filter__label " for="arrFilterCatalog_869_3067605565">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3067605565" id="arrFilterCatalog_869_3067605565" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Очиститель">Очиститель&nbsp;(<span data-role="count_arrFilterCatalog_869_3067605565">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1610714475" class="product-filter__label " for="arrFilterCatalog_869_1610714475">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1610714475" id="arrFilterCatalog_869_1610714475" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="ППГЗ - плита перфорированная гипсокартонная звукопоглащающая">ППГЗ - плита перфорированная гипсокартонная звукопоглащающая&nbsp;(<span data-role="count_arrFilterCatalog_869_1610714475">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1680337359" class="product-filter__label " for="arrFilterCatalog_869_1680337359">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1680337359" id="arrFilterCatalog_869_1680337359" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Панель">Панель&nbsp;(<span data-role="count_arrFilterCatalog_869_1680337359">15</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1085616544" class="product-filter__label " for="arrFilterCatalog_869_1085616544">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1085616544" id="arrFilterCatalog_869_1085616544" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Панель сайдинга">Панель сайдинга&nbsp;(<span data-role="count_arrFilterCatalog_869_1085616544">33</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2283820108" class="product-filter__label " for="arrFilterCatalog_869_2283820108">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2283820108" id="arrFilterCatalog_869_2283820108" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пароизоляция">Пароизоляция&nbsp;(<span data-role="count_arrFilterCatalog_869_2283820108">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3581550667" class="product-filter__label " for="arrFilterCatalog_869_3581550667">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3581550667" id="arrFilterCatalog_869_3581550667" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пароизоляция отражающая">Пароизоляция отражающая&nbsp;(<span data-role="count_arrFilterCatalog_869_3581550667">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1119411310" class="product-filter__label " for="arrFilterCatalog_869_1119411310">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1119411310" id="arrFilterCatalog_869_1119411310" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Патрон для монтажного пистолета">Патрон для монтажного пистолета&nbsp;(<span data-role="count_arrFilterCatalog_869_1119411310">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_288200354" class="product-filter__label " for="arrFilterCatalog_869_288200354">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_288200354" id="arrFilterCatalog_869_288200354" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пена">Пена&nbsp;(<span data-role="count_arrFilterCatalog_869_288200354">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_465978919" class="product-filter__label " for="arrFilterCatalog_869_465978919">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_465978919" id="arrFilterCatalog_869_465978919" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пена монтажная">Пена монтажная&nbsp;(<span data-role="count_arrFilterCatalog_869_465978919">17</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_231998132" class="product-filter__label " for="arrFilterCatalog_869_231998132">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_231998132" id="arrFilterCatalog_869_231998132" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пенопласт">Пенопласт&nbsp;(<span data-role="count_arrFilterCatalog_869_231998132">26</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3067500978" class="product-filter__label " for="arrFilterCatalog_869_3067500978">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3067500978" id="arrFilterCatalog_869_3067500978" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пенополистирол">Пенополистирол&nbsp;(<span data-role="count_arrFilterCatalog_869_3067500978">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_939051576" class="product-filter__label " for="arrFilterCatalog_869_939051576">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_939051576" id="arrFilterCatalog_869_939051576" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Перемычка">Перемычка&nbsp;(<span data-role="count_arrFilterCatalog_869_939051576">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3407601517" class="product-filter__label " for="arrFilterCatalog_869_3407601517">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3407601517" id="arrFilterCatalog_869_3407601517" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Песок">Песок&nbsp;(<span data-role="count_arrFilterCatalog_869_3407601517">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1028520026" class="product-filter__label " for="arrFilterCatalog_869_1028520026">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1028520026" id="arrFilterCatalog_869_1028520026" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пистолет монтажный">Пистолет монтажный&nbsp;(<span data-role="count_arrFilterCatalog_869_1028520026">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_19189584" class="product-filter__label " for="arrFilterCatalog_869_19189584">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_19189584" id="arrFilterCatalog_869_19189584" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Планка околооконная">Планка околооконная&nbsp;(<span data-role="count_arrFilterCatalog_869_19189584">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1176918710" class="product-filter__label " for="arrFilterCatalog_869_1176918710">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1176918710" id="arrFilterCatalog_869_1176918710" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пластина">Пластина&nbsp;(<span data-role="count_arrFilterCatalog_869_1176918710">33</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_310663669" class="product-filter__label " for="arrFilterCatalog_869_310663669">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_310663669" id="arrFilterCatalog_869_310663669" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пластификатор">Пластификатор&nbsp;(<span data-role="count_arrFilterCatalog_869_310663669">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1437358919" class="product-filter__label " for="arrFilterCatalog_869_1437358919">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1437358919" id="arrFilterCatalog_869_1437358919" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пленка полиэтиленовая">Пленка полиэтиленовая&nbsp;(<span data-role="count_arrFilterCatalog_869_1437358919">20</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2303803373" class="product-filter__label " for="arrFilterCatalog_869_2303803373">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2303803373" id="arrFilterCatalog_869_2303803373" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Плита">Плита&nbsp;(<span data-role="count_arrFilterCatalog_869_2303803373">27</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_482762713" class="product-filter__label " for="arrFilterCatalog_869_482762713">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_482762713" id="arrFilterCatalog_869_482762713" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Плита пазогребневая">Плита пазогребневая&nbsp;(<span data-role="count_arrFilterCatalog_869_482762713">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2871076307" class="product-filter__label " for="arrFilterCatalog_869_2871076307">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2871076307" id="arrFilterCatalog_869_2871076307" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подвес ">Подвес &nbsp;(<span data-role="count_arrFilterCatalog_869_2871076307">14</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4209725579" class="product-filter__label " for="arrFilterCatalog_869_4209725579">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4209725579" id="arrFilterCatalog_869_4209725579" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подвес Нониус">Подвес Нониус&nbsp;(<span data-role="count_arrFilterCatalog_869_4209725579">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2786843657" class="product-filter__label " for="arrFilterCatalog_869_2786843657">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2786843657" id="arrFilterCatalog_869_2786843657" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подложка">Подложка&nbsp;(<span data-role="count_arrFilterCatalog_869_2786843657">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3405637123" class="product-filter__label " for="arrFilterCatalog_869_3405637123">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3405637123" id="arrFilterCatalog_869_3405637123" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник двухсекционный">Подрозетник двухсекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_3405637123">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1150643299" class="product-filter__label " for="arrFilterCatalog_869_1150643299">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1150643299" id="arrFilterCatalog_869_1150643299" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник односекционный">Подрозетник односекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_1150643299">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1045736542" class="product-filter__label " for="arrFilterCatalog_869_1045736542">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1045736542" id="arrFilterCatalog_869_1045736542" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник пятисекционный">Подрозетник пятисекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_1045736542">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3861514235" class="product-filter__label " for="arrFilterCatalog_869_3861514235">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3861514235" id="arrFilterCatalog_869_3861514235" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник трёхсекционный">Подрозетник трёхсекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_3861514235">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_964247198" class="product-filter__label " for="arrFilterCatalog_869_964247198">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_964247198" id="arrFilterCatalog_869_964247198" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник четырёхсекционный">Подрозетник четырёхсекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_964247198">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1615538701" class="product-filter__label " for="arrFilterCatalog_869_1615538701">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1615538701" id="arrFilterCatalog_869_1615538701" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Полимерный пол">Полимерный пол&nbsp;(<span data-role="count_arrFilterCatalog_869_1615538701">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_533822611" class="product-filter__label " for="arrFilterCatalog_869_533822611">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_533822611" id="arrFilterCatalog_869_533822611" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Полоса">Полоса&nbsp;(<span data-role="count_arrFilterCatalog_869_533822611">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4164044913" class="product-filter__label " for="arrFilterCatalog_869_4164044913">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4164044913" id="arrFilterCatalog_869_4164044913" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Полоса горячекатаная">Полоса горячекатаная&nbsp;(<span data-role="count_arrFilterCatalog_869_4164044913">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2694798327" class="product-filter__label " for="arrFilterCatalog_869_2694798327">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2694798327" id="arrFilterCatalog_869_2694798327" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Полотно">Полотно&nbsp;(<span data-role="count_arrFilterCatalog_869_2694798327">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_99647425" class="product-filter__label " for="arrFilterCatalog_869_99647425">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_99647425" id="arrFilterCatalog_869_99647425" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Праймер">Праймер&nbsp;(<span data-role="count_arrFilterCatalog_869_99647425">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2968579249" class="product-filter__label " for="arrFilterCatalog_869_2968579249">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2968579249" id="arrFilterCatalog_869_2968579249" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Праймер битумный">Праймер битумный&nbsp;(<span data-role="count_arrFilterCatalog_869_2968579249">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_136138432" class="product-filter__label " for="arrFilterCatalog_869_136138432">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_136138432" id="arrFilterCatalog_869_136138432" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Проволока вязальная">Проволока вязальная&nbsp;(<span data-role="count_arrFilterCatalog_869_136138432">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1048881086" class="product-filter__label " for="arrFilterCatalog_869_1048881086">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1048881086" id="arrFilterCatalog_869_1048881086" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Профиль">Профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_1048881086">104</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2869859912" class="product-filter__label " for="arrFilterCatalog_869_2869859912">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2869859912" id="arrFilterCatalog_869_2869859912" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Профиль капельник">Профиль капельник&nbsp;(<span data-role="count_arrFilterCatalog_869_2869859912">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2248542433" class="product-filter__label " for="arrFilterCatalog_869_2248542433">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2248542433" id="arrFilterCatalog_869_2248542433" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Растворитель">Растворитель&nbsp;(<span data-role="count_arrFilterCatalog_869_2248542433">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2269294926" class="product-filter__label " for="arrFilterCatalog_869_2269294926">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2269294926" id="arrFilterCatalog_869_2269294926" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Рейка">Рейка&nbsp;(<span data-role="count_arrFilterCatalog_869_2269294926">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1789759355" class="product-filter__label " for="arrFilterCatalog_869_1789759355">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1789759355" id="arrFilterCatalog_869_1789759355" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ремсостав">Ремсостав&nbsp;(<span data-role="count_arrFilterCatalog_869_1789759355">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3119163310" class="product-filter__label " for="arrFilterCatalog_869_3119163310">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3119163310" id="arrFilterCatalog_869_3119163310" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ровнитель">Ровнитель&nbsp;(<span data-role="count_arrFilterCatalog_869_3119163310">18</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1664854554" class="product-filter__label " for="arrFilterCatalog_869_1664854554">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1664854554" id="arrFilterCatalog_869_1664854554" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ровнитель (Наливной пол)">Ровнитель (Наливной пол)&nbsp;(<span data-role="count_arrFilterCatalog_869_1664854554">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2647539913" class="product-filter__label " for="arrFilterCatalog_869_2647539913">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2647539913" id="arrFilterCatalog_869_2647539913" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Рым-болт">Рым-болт&nbsp;(<span data-role="count_arrFilterCatalog_869_2647539913">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1712867035" class="product-filter__label " for="arrFilterCatalog_869_1712867035">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1712867035" id="arrFilterCatalog_869_1712867035" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Саморез">Саморез&nbsp;(<span data-role="count_arrFilterCatalog_869_1712867035">156</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_74085815" class="product-filter__label " for="arrFilterCatalog_869_74085815">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_74085815" id="arrFilterCatalog_869_74085815" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Саморез кровельный">Саморез кровельный&nbsp;(<span data-role="count_arrFilterCatalog_869_74085815">44</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3952444432" class="product-filter__label " for="arrFilterCatalog_869_3952444432">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3952444432" id="arrFilterCatalog_869_3952444432" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Саморез оконный">Саморез оконный&nbsp;(<span data-role="count_arrFilterCatalog_869_3952444432">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3237335746" class="product-filter__label " for="arrFilterCatalog_869_3237335746">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3237335746" id="arrFilterCatalog_869_3237335746" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Саморез универсальный">Саморез универсальный&nbsp;(<span data-role="count_arrFilterCatalog_869_3237335746">42</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2375352127" class="product-filter__label " for="arrFilterCatalog_869_2375352127">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2375352127" id="arrFilterCatalog_869_2375352127" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Сетка">Сетка&nbsp;(<span data-role="count_arrFilterCatalog_869_2375352127">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3353333960" class="product-filter__label " for="arrFilterCatalog_869_3353333960">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3353333960" id="arrFilterCatalog_869_3353333960" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Сетка кладочная">Сетка кладочная&nbsp;(<span data-role="count_arrFilterCatalog_869_3353333960">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1607890053" class="product-filter__label " for="arrFilterCatalog_869_1607890053">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1607890053" id="arrFilterCatalog_869_1607890053" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Сетка стеклотканевая">Сетка стеклотканевая&nbsp;(<span data-role="count_arrFilterCatalog_869_1607890053">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3624199701" class="product-filter__label " for="arrFilterCatalog_869_3624199701">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3624199701" id="arrFilterCatalog_869_3624199701" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Скоба">Скоба&nbsp;(<span data-role="count_arrFilterCatalog_869_3624199701">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1880374896" class="product-filter__label " for="arrFilterCatalog_869_1880374896">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1880374896" id="arrFilterCatalog_869_1880374896" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Скобы">Скобы&nbsp;(<span data-role="count_arrFilterCatalog_869_1880374896">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1722232077" class="product-filter__label " for="arrFilterCatalog_869_1722232077">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1722232077" id="arrFilterCatalog_869_1722232077" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Смесь">Смесь&nbsp;(<span data-role="count_arrFilterCatalog_869_1722232077">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1541893289" class="product-filter__label " for="arrFilterCatalog_869_1541893289">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1541893289" id="arrFilterCatalog_869_1541893289" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Соединитель">Соединитель&nbsp;(<span data-role="count_arrFilterCatalog_869_1541893289">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3533433546" class="product-filter__label " for="arrFilterCatalog_869_3533433546">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3533433546" id="arrFilterCatalog_869_3533433546" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Софит">Софит&nbsp;(<span data-role="count_arrFilterCatalog_869_3533433546">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_811360933" class="product-filter__label " for="arrFilterCatalog_869_811360933">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_811360933" id="arrFilterCatalog_869_811360933" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Стартовый профиль">Стартовый профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_811360933">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1911896660" class="product-filter__label " for="arrFilterCatalog_869_1911896660">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1911896660" id="arrFilterCatalog_869_1911896660" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Стартовый угол">Стартовый угол&nbsp;(<span data-role="count_arrFilterCatalog_869_1911896660">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3247211088" class="product-filter__label " for="arrFilterCatalog_869_3247211088">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3247211088" id="arrFilterCatalog_869_3247211088" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Строп">Строп&nbsp;(<span data-role="count_arrFilterCatalog_869_3247211088">18</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2555282411" class="product-filter__label " for="arrFilterCatalog_869_2555282411">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2555282411" id="arrFilterCatalog_869_2555282411" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Сэндвич панель">Сэндвич панель&nbsp;(<span data-role="count_arrFilterCatalog_869_2555282411">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3938534368" class="product-filter__label " for="arrFilterCatalog_869_3938534368">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3938534368" id="arrFilterCatalog_869_3938534368" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Талреп">Талреп&nbsp;(<span data-role="count_arrFilterCatalog_869_3938534368">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3461508230" class="product-filter__label " for="arrFilterCatalog_869_3461508230">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3461508230" id="arrFilterCatalog_869_3461508230" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Топпинг для полов">Топпинг для полов&nbsp;(<span data-role="count_arrFilterCatalog_869_3461508230">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_814168385" class="product-filter__label " for="arrFilterCatalog_869_814168385">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_814168385" id="arrFilterCatalog_869_814168385" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Трос">Трос&nbsp;(<span data-role="count_arrFilterCatalog_869_814168385">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3017641920" class="product-filter__label " for="arrFilterCatalog_869_3017641920">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3017641920" id="arrFilterCatalog_869_3017641920" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Труба">Труба&nbsp;(<span data-role="count_arrFilterCatalog_869_3017641920">32</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4073327800" class="product-filter__label " for="arrFilterCatalog_869_4073327800">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4073327800" id="arrFilterCatalog_869_4073327800" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Тяга">Тяга&nbsp;(<span data-role="count_arrFilterCatalog_869_4073327800">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1681574901" class="product-filter__label " for="arrFilterCatalog_869_1681574901">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1681574901" id="arrFilterCatalog_869_1681574901" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Угол">Угол&nbsp;(<span data-role="count_arrFilterCatalog_869_1681574901">31</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_470276353" class="product-filter__label " for="arrFilterCatalog_869_470276353">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_470276353" id="arrFilterCatalog_869_470276353" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Угол внешний">Угол внешний&nbsp;(<span data-role="count_arrFilterCatalog_869_470276353">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1431572139" class="product-filter__label " for="arrFilterCatalog_869_1431572139">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1431572139" id="arrFilterCatalog_869_1431572139" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Угол внутренний">Угол внутренний&nbsp;(<span data-role="count_arrFilterCatalog_869_1431572139">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4239390787" class="product-filter__label " for="arrFilterCatalog_869_4239390787">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4239390787" id="arrFilterCatalog_869_4239390787" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Угол крепежный">Угол крепежный&nbsp;(<span data-role="count_arrFilterCatalog_869_4239390787">24</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_560516638" class="product-filter__label " for="arrFilterCatalog_869_560516638">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_560516638" id="arrFilterCatalog_869_560516638" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Уголок">Уголок&nbsp;(<span data-role="count_arrFilterCatalog_869_560516638">28</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3385042813" class="product-filter__label " for="arrFilterCatalog_869_3385042813">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3385042813" id="arrFilterCatalog_869_3385042813" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Удлинитель Нониус">Удлинитель Нониус&nbsp;(<span data-role="count_arrFilterCatalog_869_3385042813">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1380777092" class="product-filter__label " for="arrFilterCatalog_869_1380777092">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1380777092" id="arrFilterCatalog_869_1380777092" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Удлинитель профиля">Удлинитель профиля&nbsp;(<span data-role="count_arrFilterCatalog_869_1380777092">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4005757555" class="product-filter__label " for="arrFilterCatalog_869_4005757555">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4005757555" id="arrFilterCatalog_869_4005757555" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Уплотнитель">Уплотнитель&nbsp;(<span data-role="count_arrFilterCatalog_869_4005757555">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2882072139" class="product-filter__label " for="arrFilterCatalog_869_2882072139">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2882072139" id="arrFilterCatalog_869_2882072139" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Упрочнитель бетонных полов">Упрочнитель бетонных полов&nbsp;(<span data-role="count_arrFilterCatalog_869_2882072139">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_344492163" class="product-filter__label " for="arrFilterCatalog_869_344492163">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_344492163" id="arrFilterCatalog_869_344492163" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Утеплитель">Утеплитель&nbsp;(<span data-role="count_arrFilterCatalog_869_344492163">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3382314309" class="product-filter__label " for="arrFilterCatalog_869_3382314309">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3382314309" id="arrFilterCatalog_869_3382314309" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фанера">Фанера&nbsp;(<span data-role="count_arrFilterCatalog_869_3382314309">21</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3428231305" class="product-filter__label " for="arrFilterCatalog_869_3428231305">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3428231305" id="arrFilterCatalog_869_3428231305" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фасадная панель">Фасадная панель&nbsp;(<span data-role="count_arrFilterCatalog_869_3428231305">36</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4090530097" class="product-filter__label " for="arrFilterCatalog_869_4090530097">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4090530097" id="arrFilterCatalog_869_4090530097" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фасадная плитка">Фасадная плитка&nbsp;(<span data-role="count_arrFilterCatalog_869_4090530097">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3560309294" class="product-filter__label " for="arrFilterCatalog_869_3560309294">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3560309294" id="arrFilterCatalog_869_3560309294" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фиброволокно">Фиброволокно&nbsp;(<span data-role="count_arrFilterCatalog_869_3560309294">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_789254570" class="product-filter__label " for="arrFilterCatalog_869_789254570">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_789254570" id="arrFilterCatalog_869_789254570" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фибросайдинг">Фибросайдинг&nbsp;(<span data-role="count_arrFilterCatalog_869_789254570">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3842969856" class="product-filter__label " for="arrFilterCatalog_869_3842969856">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3842969856" id="arrFilterCatalog_869_3842969856" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фиксатор">Фиксатор&nbsp;(<span data-role="count_arrFilterCatalog_869_3842969856">20</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1198745858" class="product-filter__label " for="arrFilterCatalog_869_1198745858">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1198745858" id="arrFilterCatalog_869_1198745858" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фиксатор для арматуры">Фиксатор для арматуры&nbsp;(<span data-role="count_arrFilterCatalog_869_1198745858">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1366195962" class="product-filter__label " for="arrFilterCatalog_869_1366195962">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1366195962" id="arrFilterCatalog_869_1366195962" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Финишный профиль">Финишный профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_1366195962">10</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2743988980" class="product-filter__label " for="arrFilterCatalog_869_2743988980">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2743988980" id="arrFilterCatalog_869_2743988980" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Холодный асфальт">Холодный асфальт&nbsp;(<span data-role="count_arrFilterCatalog_869_2743988980">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1173943856" class="product-filter__label " for="arrFilterCatalog_869_1173943856">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1173943856" id="arrFilterCatalog_869_1173943856" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Хомут">Хомут&nbsp;(<span data-role="count_arrFilterCatalog_869_1173943856">19</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_953516824" class="product-filter__label " for="arrFilterCatalog_869_953516824">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_953516824" id="arrFilterCatalog_869_953516824" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Цемент">Цемент&nbsp;(<span data-role="count_arrFilterCatalog_869_953516824">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2384280699" class="product-filter__label " for="arrFilterCatalog_869_2384280699">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2384280699" id="arrFilterCatalog_869_2384280699" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Цементно-стружечная плита">Цементно-стружечная плита&nbsp;(<span data-role="count_arrFilterCatalog_869_2384280699">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_421982091" class="product-filter__label " for="arrFilterCatalog_869_421982091">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_421982091" id="arrFilterCatalog_869_421982091" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Цепь">Цепь&nbsp;(<span data-role="count_arrFilterCatalog_869_421982091">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2492508382" class="product-filter__label " for="arrFilterCatalog_869_2492508382">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2492508382" id="arrFilterCatalog_869_2492508382" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Цилиндр">Цилиндр&nbsp;(<span data-role="count_arrFilterCatalog_869_2492508382">30</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1660408592" class="product-filter__label " for="arrFilterCatalog_869_1660408592">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1660408592" id="arrFilterCatalog_869_1660408592" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шайба">Шайба&nbsp;(<span data-role="count_arrFilterCatalog_869_1660408592">27</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4218528370" class="product-filter__label " for="arrFilterCatalog_869_4218528370">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4218528370" id="arrFilterCatalog_869_4218528370" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Швеллер">Швеллер&nbsp;(<span data-role="count_arrFilterCatalog_869_4218528370">16</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3843221677" class="product-filter__label " for="arrFilterCatalog_869_3843221677">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3843221677" id="arrFilterCatalog_869_3843221677" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шнур">Шнур&nbsp;(<span data-role="count_arrFilterCatalog_869_3843221677">13</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3216322055" class="product-filter__label " for="arrFilterCatalog_869_3216322055">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3216322055" id="arrFilterCatalog_869_3216322055" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шпагат">Шпагат&nbsp;(<span data-role="count_arrFilterCatalog_869_3216322055">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2987642742" class="product-filter__label " for="arrFilterCatalog_869_2987642742">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2987642742" id="arrFilterCatalog_869_2987642742" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шпаклевка">Шпаклевка&nbsp;(<span data-role="count_arrFilterCatalog_869_2987642742">31</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_761919937" class="product-filter__label " for="arrFilterCatalog_869_761919937">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_761919937" id="arrFilterCatalog_869_761919937" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шпилька">Шпилька&nbsp;(<span data-role="count_arrFilterCatalog_869_761919937">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1789237789" class="product-filter__label " for="arrFilterCatalog_869_1789237789">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1789237789" id="arrFilterCatalog_869_1789237789" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шпилька для химического анкера">Шпилька для химического анкера&nbsp;(<span data-role="count_arrFilterCatalog_869_1789237789">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1007586625" class="product-filter__label " for="arrFilterCatalog_869_1007586625">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1007586625" id="arrFilterCatalog_869_1007586625" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шплинт Нониус">Шплинт Нониус&nbsp;(<span data-role="count_arrFilterCatalog_869_1007586625">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2814716462" class="product-filter__label " for="arrFilterCatalog_869_2814716462">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2814716462" id="arrFilterCatalog_869_2814716462" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Штукатурка">Штукатурка&nbsp;(<span data-role="count_arrFilterCatalog_869_2814716462">26</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3576163456" class="product-filter__label " for="arrFilterCatalog_869_3576163456">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3576163456" id="arrFilterCatalog_869_3576163456" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Штукатурка декоративная">Штукатурка декоративная&nbsp;(<span data-role="count_arrFilterCatalog_869_3576163456">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3110147650" class="product-filter__label " for="arrFilterCatalog_869_3110147650">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3110147650" id="arrFilterCatalog_869_3110147650" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Штукатурно-клеевая смесь">Штукатурно-клеевая смесь&nbsp;(<span data-role="count_arrFilterCatalog_869_3110147650">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2699552454" class="product-filter__label " for="arrFilterCatalog_869_2699552454">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2699552454" id="arrFilterCatalog_869_2699552454" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Штукатурный обрызг">Штукатурный обрызг&nbsp;(<span data-role="count_arrFilterCatalog_869_2699552454">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1599548953" class="product-filter__label " for="arrFilterCatalog_869_1599548953">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1599548953" id="arrFilterCatalog_869_1599548953" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шуруп">Шуруп&nbsp;(<span data-role="count_arrFilterCatalog_869_1599548953">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_759315225" class="product-filter__label " for="arrFilterCatalog_869_759315225">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_759315225" id="arrFilterCatalog_869_759315225" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Щебень">Щебень&nbsp;(<span data-role="count_arrFilterCatalog_869_759315225">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_910974247" class="product-filter__label " for="arrFilterCatalog_869_910974247">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_910974247" id="arrFilterCatalog_869_910974247" onclick="smartFilter.click(this)" class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Щетка">Щетка&nbsp;(<span data-role="count_arrFilterCatalog_869_910974247">2</span>)</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-filter__section">
                                        <div class="product-filter__accordion js-accordion">
                                            <button class="btn-reset product-filter__accordion-btn js-accordion-btn js-accordion-btn--active">
                                                <span>Цена интернет магазина</span>
                                            </button>
                                            <div class="product-filter__accordion-info js-accordion-info">

                                                <div class="range js-range">
                                                    <div class="range__values">
                                                        <div class="range__value-wrap">
                                                            <div class="range__value-item">
                                                                <span class="range__inpul-label-text">от</span>
                                                                <input class="js-range-input range__input range__input--from" type="text" name="arrFilterCatalog_P1_MIN" id="arrFilterCatalog_P1_MIN" value="" size="5" onchange="smartFilter.keyup(this)">
                                                                <span class="range__inpul-label">₽</span>
                                                            </div>
                                                        </div>
                                                        <div class="range__value-wrap">
                                                            <div class="range__value-item">
                                                                <span class="range__inpul-label-text">до</span>
                                                                <input class="js-range-input range__input range__input--to" type="text" name="arrFilterCatalog_P1_MAX" id="arrFilterCatalog_P1_MAX" value="" onchange="smartFilter.keyup(this)">
                                                                <span class="range__inpul-label">₽</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="range__slider">
                                                        <div class="js-range-slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-min="3" data-max="24000" data-start="3" data-finish="24000" data-step="1"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(1, 1);"></div></div><div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="3.0" aria-valuemax="24000.0" aria-valuenow="3.0" aria-valuetext="3.00"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="3.0" aria-valuemax="24000.0" aria-valuenow="24000.0" aria-valuetext="24000.00"><div class="noUi-touch-area"></div></div></div></div></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row" style="display: none;">
                                        <div class="col-xs-12 bx-filter-button-box">
                                            <div class="bx-filter-block">
                                                <div class="bx-filter-parameters-box-container">
                                                    <input class="btn btn-themes" type="button" id="set_filter" name="set_filter" value="Показать">
                                                    <input class="btn btn-link" type="submit" id="del_filter1_1" name="del_filter" value="очистить фильтр">
                                                    <div class="bx-filter-popup-result left" id="modef2" style="display:none">
                                                        Выбрано: <span id="modef_num2">0</span>                                    <span class="arrow"></span>
                                                        <br>
                                                        <a href="javascript:;" target="">Показать</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="product-filter__section product_filter_btn_exec">
                                    <a class="btn-reset btn btn-secondary" href="#">Применить</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cp-content">
                <div class="gap-md">
                    <div class="cp-heading">
                        <h1 class="h1 cp-heading__title">Геотекстиль</h1>
                    </div>
                </div>
                <div class="cp-content__item cp-content__top">
                    <div class="cp-content__category">
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/test-cc-img3.png"
                                    width="180"
                                    height="140"
                                    alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Гидравлические тележки</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                    loading="lazy"
                                    class="image"
                                    src="img/test-cc-img2.png"
                                    width="180"
                                    height="140"
                                    alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Самоходные тележки</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img3.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Погрузчики</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img2.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Электротягачи</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img2.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Оборудование для агрессивных сред</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img3.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Запчасти</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img1.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Штабелеры</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img3.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Подъемники и вышки</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img1.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Гидравлические подъемные столы</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img1.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Оборудование для промышленности</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img2.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Клининговое оборудование</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img3.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Оборудование с весами</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img1.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Ричтраки</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img2.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Колесные опоры и ролики</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img3.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Грузоподъемное оборудование</span>
                            </span>
                        </a>
                        <a href="javascript:;" class="cp-content__category-item">
                            <span class="cp-content__category-view">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/test-cc-img1.png"
                                        width="180"
                                        height="140"
                                        alt="Изображение блока"
                                >
                            </span>
                            <span class="cp-content__category-descr">
                                <span class="cp-content__category-title">Комплектовщики заказов</span>
                            </span>
                        </a>
                    </div>

                    <div class="cp-content__settings">
                        <div class="cp-content__sort product-sort">
                            <div class="product-sort__filter">
                                <div class="product-sort__filter-text">Сортировать:</div>
                                <button class="btn-reset product-sort__btn-select js-sort-btn">
                                    Сортировка
                                </button>
                                <ul class="product-sort__list js-sort-list">
                                    <li class="product-sort__item">
                                        <button class="btn-reset product-sort__btn  asc  js-product-sort-btn" data-sort="price">
                                            <svg class="icon icon-fill product-sort__icon product-sort__icon--asc" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 12h2.667v-1.333H8V12zm0-8v1.333h8V4H8zm0 4.667h5.333V7.333H8v1.334zM1 4.857h2.143V12H4.57V4.857h2.143L3.857 2 1 4.857z"></path>
                                            </svg>
                                            <svg class="icon icon-fill product-sort__icon product-sort__icon--desc" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 12h2.667v-1.333H8V12zm0-8v1.333h8V4H8zm0 4.667h5.333V7.333H8v1.334zM1 11.143h2.143V4H4.57v7.143h2.143L3.857 14 1 11.143z"></path>
                                            </svg>
                                            <span>По цене</span>
                                        </button>
                                    </li>
                                    <li class="product-sort__item">
                                        <button class="btn-reset product-sort__btn  asc  js-product-sort-btn" data-sort="name">
                                            <svg class="icon icon-fill product-sort__icon product-sort__icon--asc" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 12h2.667v-1.333H8V12zm0-8v1.333h8V4H8zm0 4.667h5.333V7.333H8v1.334zM1 4.857h2.143V12H4.57V4.857h2.143L3.857 2 1 4.857z"></path>
                                            </svg>
                                            <svg class="icon icon-fill product-sort__icon product-sort__icon--desc" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 12h2.667v-1.333H8V12zm0-8v1.333h8V4H8zm0 4.667h5.333V7.333H8v1.334zM1 11.143h2.143V4H4.57v7.143h2.143L3.857 14 1 11.143z"></path>
                                            </svg>
                                            <span>По названию</span>
                                        </button>
                                    </li>
                                    <li class="product-sort__item">
                                        <button class="btn-reset product-sort__btn  active asc js-product-sort-btn" data-sort="sale">
                                            <svg class="icon icon-fill product-sort__icon product-sort__icon--asc" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 12h2.667v-1.333H8V12zm0-8v1.333h8V4H8zm0 4.667h5.333V7.333H8v1.334zM1 4.857h2.143V12H4.57V4.857h2.143L3.857 2 1 4.857z"></path>
                                            </svg>
                                            <svg class="icon icon-fill product-sort__icon product-sort__icon--desc" width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 12h2.667v-1.333H8V12zm0-8v1.333h8V4H8zm0 4.667h5.333V7.333H8v1.334zM1 11.143h2.143V4H4.57v7.143h2.143L3.857 14 1 11.143z"></path>
                                            </svg>
                                            <span>По скидке</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-sort__result">
                                Найдено товаров: <span id="catalog_total">2619</span>
                            </div>
                            <div class="product-sort__btn-filter-wrap">
                                <button class="btn-reset product-sort__btn-filter js-btn-filter-mobile">
                                    Фильтр
                                    <svg class="icon icon-fill" viewBox="0 0 24 24" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z" fill="#33333D"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cp-content__item" data-entity="container-l">
                    <div id="catalogContent" class="gap-lg card-list card-list--lg">
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доставим завтра</span>
                                </div>

                                <a class="card__title " href="javascript:;">Геотекстиль для грядок, шир. 2*10 м.п</a>

                                <div class="card__characteristics">
                                    <p>Цвет: Белый</p>
                                    <p>Плотность: 150 гр/м2</p>
                                    <p>Ширина рулона: 2 м</p>
                                    <p>Длина рулона: 10 м</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_01_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за</span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_01_square_meter">
                                                                <span>м<sup>2</sup></span>
                                                            </span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                <span class="card__price-tab tab basic-tabs-trigger" data-target="id_01_piece"><span>штуку</span></span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_01_card-price">
                                            <div class="basic-tabs-content__panel active" data-id="id_01_square_meter">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">910 ₽</span>
                                                    <span class="card__price-origin">1230 ₽</span>
                                                </div>
                                            </div>
                                            <div class="basic-tabs-content__panel" data-id="id_01_piece">
                                                <div class="basic-tabs-content__content">
                                                    <div class="card__price-current">210 ₽</div>
                                                    <div class="card__price-origin">430 ₽</div>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доступно сегодня</span>
                                </div>

                                <a class="card__title " href="javascript:;">Техническая пленка 100 мкм, шир. 3х10</a>

                                <div class="card__characteristics">
                                    <p>Плотность: 100 мкм</p>
                                    <p>Намотка: 10 м.п.</p>
                                    <p>Ширина: 3м</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_02_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за штуку</span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_02_card-price">
                                            <div class="basic-tabs-content__panel active">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">300 ₽</span>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock on-order">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#timer"></use>
                                    </svg>
                                    <span>Под заказ</span>
                                </div>

                                <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                                <div class="card__characteristics">
                                    <p>Цвет: Синий</p>
                                    <p>Размер, м: 2х3</p>
                                    <p>Шаг люверсов, см: 50</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_03_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за</span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_03_square_meter">
                                                                <span>м<sup>2</sup></span>
                                                            </span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                <span class="card__price-tab tab basic-tabs-trigger" data-target="id_03_piece"><span>рулон</span></span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_03_card-price">
                                            <div class="basic-tabs-content__panel active" data-id="id_03_square_meter">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">225 ₽</span>
                                                </div>
                                            </div>
                                            <div class="basic-tabs-content__panel" data-id="id_03_piece">
                                                <div class="basic-tabs-content__content">
                                                    <div class="card__price-current">210 ₽</div>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock out-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#splash"></use>
                                    </svg>
                                    <span>Нет в наличии</span>
                                </div>

                                <a class="card__title " href="javascript:;">Геотекстиль Дорнит ГЕО 300 гр/м2 шир. 2х50 м.п, 100 м2</a>

                                <div class="card__characteristics">
                                    <p>Плотность: 300 гр/м2</p>
                                    <p>Ширина рулона: 2 м</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_04_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за</span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_04_square_meter">
                                                                <span>м<sup>2</sup></span>
                                                            </span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                <span class="card__price-tab tab basic-tabs-trigger" data-target="id_04_piece"><span>штуку</span></span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_04_card-price">
                                            <div class="basic-tabs-content__panel active" data-id="id_04_square_meter">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">5800 ₽</span>
                                                    <span class="card__price-origin">5950 ₽</span>
                                                </div>
                                            </div>
                                            <div class="basic-tabs-content__panel" data-id="id_04_piece">
                                                <div class="basic-tabs-content__content">
                                                    <div class="card__price-current">210 ₽</div>
                                                    <div class="card__price-origin">430 ₽</div>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доступно сегодня</span>
                                </div>

                                <a class="card__title " href="javascript:;">Объемная георешетка ГА ОР 210/100 мм</a>

                                <div class="card__characteristics">
                                    <p>Цвет: Белый</p>
                                    <p>Плотность: 150 гр/м2</p>
                                    <p>Ширина рулона: 2 м</p>
                                    <p>Длина рулона: 10 м</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_05_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за м2</span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_05_card-price">
                                            <div class="basic-tabs-content__panel active">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">127 ₽</span>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock on-order">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#timer"></use>
                                    </svg>
                                    <span>Под заказ</span>
                                </div>

                                <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                                <div class="card__characteristics">
                                    <p>Цвет: Синий</p>
                                    <p>Размер, м: 2х3</p>
                                    <p>Шаг люверсов, см: 50</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_06_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за</span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                    <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_06_square_meter">
                                                        <span>м<sup>2</sup></span>
                                                    </span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                <span class="card__price-tab tab basic-tabs-trigger" data-target="id_06_piece"><span>рулон</span></span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_06_card-price">
                                            <div class="basic-tabs-content__panel active" data-id="id_06_square_meter">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">225 ₽</span>
                                                </div>
                                            </div>
                                            <div class="basic-tabs-content__panel" data-id="id_06_piece">
                                                <div class="basic-tabs-content__content">
                                                    <div class="card__price-current">210 ₽</div>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доставим завтра</span>
                                </div>

                                <a class="card__title " href="javascript:;">Геотекстиль для грядок, шир. 2*10 м.п</a>

                                <div class="card__characteristics">
                                    <p>Цвет: Белый</p>
                                    <p>Плотность: 150 гр/м2</p>
                                    <p>Ширина рулона: 2 м</p>
                                    <p>Длина рулона: 10 м</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_01_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за</span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_01_square_meter">
                                                                <span>м<sup>2</sup></span>
                                                            </span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                <span class="card__price-tab tab basic-tabs-trigger" data-target="id_01_piece"><span>штуку</span></span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_01_card-price">
                                            <div class="basic-tabs-content__panel active" data-id="id_01_square_meter">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">910 ₽</span>
                                                    <span class="card__price-origin">1230 ₽</span>
                                                </div>
                                            </div>
                                            <div class="basic-tabs-content__panel" data-id="id_01_piece">
                                                <div class="basic-tabs-content__content">
                                                    <div class="card__price-current">210 ₽</div>
                                                    <div class="card__price-origin">430 ₽</div>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доступно сегодня</span>
                                </div>

                                <a class="card__title " href="javascript:;">Техническая пленка 100 мкм, шир. 3х10</a>

                                <div class="card__characteristics">
                                    <p>Плотность: 100 мкм</p>
                                    <p>Намотка: 10 м.п.</p>
                                    <p>Ширина: 3м</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_02_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за штуку</span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_02_card-price">
                                            <div class="basic-tabs-content__panel active">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">300 ₽</span>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock on-order">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#timer"></use>
                                    </svg>
                                    <span>Под заказ</span>
                                </div>

                                <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                                <div class="card__characteristics">
                                    <p>Цвет: Синий</p>
                                    <p>Размер, м: 2х3</p>
                                    <p>Шаг люверсов, см: 50</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_03_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за</span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_03_square_meter">
                                                                <span>м<sup>2</sup></span>
                                                            </span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                <span class="card__price-tab tab basic-tabs-trigger" data-target="id_03_piece"><span>рулон</span></span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_03_card-price">
                                            <div class="basic-tabs-content__panel active" data-id="id_03_square_meter">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">225 ₽</span>
                                                </div>
                                            </div>
                                            <div class="basic-tabs-content__panel" data-id="id_03_piece">
                                                <div class="basic-tabs-content__content">
                                                    <div class="card__price-current">210 ₽</div>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock out-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#splash"></use>
                                    </svg>
                                    <span>Нет в наличии</span>
                                </div>

                                <a class="card__title " href="javascript:;">Геотекстиль Дорнит ГЕО 300 гр/м2 шир. 2х50 м.п, 100 м2</a>

                                <div class="card__characteristics">
                                    <p>Плотность: 300 гр/м2</p>
                                    <p>Ширина рулона: 2 м</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_04_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за</span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_04_square_meter">
                                                                <span>м<sup>2</sup></span>
                                                            </span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                <span class="card__price-tab tab basic-tabs-trigger" data-target="id_04_piece"><span>штуку</span></span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_04_card-price">
                                            <div class="basic-tabs-content__panel active" data-id="id_04_square_meter">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">5800 ₽</span>
                                                    <span class="card__price-origin">5950 ₽</span>
                                                </div>
                                            </div>
                                            <div class="basic-tabs-content__panel" data-id="id_04_piece">
                                                <div class="basic-tabs-content__content">
                                                    <div class="card__price-current">210 ₽</div>
                                                    <div class="card__price-origin">430 ₽</div>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доступно сегодня</span>
                                </div>

                                <a class="card__title " href="javascript:;">Объемная георешетка ГА ОР 210/100 мм</a>

                                <div class="card__characteristics">
                                    <p>Цвет: Белый</p>
                                    <p>Плотность: 150 гр/м2</p>
                                    <p>Ширина рулона: 2 м</p>
                                    <p>Длина рулона: 10 м</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_05_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за м2</span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_05_card-price">
                                            <div class="basic-tabs-content__panel active">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">127 ₽</span>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <div class="mini-slider">
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp3.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 1;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp1.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <div class="mini-slider__slide">
                                        <img
                                                loading="lazy"
                                                src="img/cp2.png"
                                                class="mini-slider__img"
                                                width="160"
                                                height="160"
                                                style="opacity: 0;"
                                                alt="Изображение блока"
                                        >
                                    </div>
                                    <ul class="list-reset mini-slider__dots"></ul>
                                </div>
                            </a>
                            <div class="card__descr">
                                <div class="card__stock product-stock on-order">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#timer"></use>
                                    </svg>
                                    <span>Под заказ</span>
                                </div>

                                <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                                <div class="card__characteristics">
                                    <p>Цвет: Синий</p>
                                    <p>Размер, м: 2х3</p>
                                    <p>Шаг люверсов, см: 50</p>
                                </div>

                                <div class="card__price">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container" data-tab="id_06_card-price">
                                            <div class="basic-tabs-item basic-tabs-item-label">
                                                <span class="card__price-tab card__price-title tab">Цена за</span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                    <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_06_square_meter">
                                                        <span>м<sup>2</sup></span>
                                                    </span>
                                            </div>
                                            <div class="basic-tabs-item">
                                                <span class="card__price-tab tab basic-tabs-trigger" data-target="id_06_piece"><span>рулон</span></span>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content" data-tab-content="id_06_card-price">
                                            <div class="basic-tabs-content__panel active" data-id="id_06_square_meter">
                                                <div class="basic-tabs-content__content">
                                                    <span class="card__price-current">225 ₽</span>
                                                </div>
                                            </div>
                                            <div class="basic-tabs-content__panel" data-id="id_06_piece">
                                                <div class="basic-tabs-content__content">
                                                    <div class="card__price-current">210 ₽</div>
                                                </div>
                                            </div>
                                        </div>
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
                        </div>
                    </div>
                </div>
                <div class="gap-lg cp-content__item">
                    <div class="pagination-wrapper">
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/pagination.php"); ?>
                    </div>
                </div>

                <div class="gap-xl cp-content__item">
                    <div class="spoiler-wrapper manual-manager">
                        <div
                            class="spoiler"
                            data-spoiler
                            data-spoiler-more="Показать полностью"
                            data-spoiler-less="Скрыть"
                        >
                            <div class="spoiler-content">
                                <div class="gap-sm">
                                    <div class="h3">Виды и область применения геосинтетиков</div>
                                </div>
                                Вы можете купить геосинтетические материалы для решения обширного круга задач, которые возникают в процессе строительства, земельных работ и благоустройства территории. Современная промышленность предлагает широкий выбор геосинтетиков:
                                <br>
                                <br>
                                <ul>
                                    <li>текстиль (тканые и нетканые полотна);</li>
                                    <li>мембраны;</li>
                                    <li>сетки и решетки;</li>
                                    <li>композиты (объединяют нескольких видов геосинтетиков).</li>
                                </ul>
                                <br>
                                <br>
                                Геосинтетические материалы получили широкое распространение, так как целесообразность и экономическая выгода их использования не вызывают сомнений. Сферы применения:
                                <br>
                                <br>
                                <ul>
                                    <li>строительство автомобильных и железных дорог, а также взлетно-посадочных полос аэродромов;</li>
                                    <li>обустройство полигонов для утилизации ТБО;</li>
                                    <li>укладка тротуарной плитки и брусчатки;</li>
                                    <li>укрепление берегов естественных и искусственных водоемов, противодействие эрозии;</li>
                                    <li>организация дренирования земельных участков, обустройство систем водоотведения;</li>
                                    <li>обустройство фундаментов;</li>
                                    <li>строительство теплиц, защита сельскохозяйственных культур от сорняков;</li>
                                    <li>ландшафтный дизайн.</li>
                                </ul>
                                <br>
                                <br>
                                Широкий выбор и универсальность обеспечивают широкую область применения материала, а цена на геосинтетические материалы позволяет добиться существенной экономии в процессе строительства и эксплуатации объектов гражданской, промышленной, транспортной и сельскохозяйственной инфраструктуры.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap-xl">
            <div class="basic-hca">
                <div class="basic-hca__heading">
                    <div class="h3">Вы недавно смотрели</div>
                </div>
                <div class="basic-hca__content">
                    <div class="slider-out basic-slider-wrap card-product-slider-wrap-sm">
                        <div class="basic-slider nav-out swiper" data-basic-slider data-basic-slider-watched>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-product card-product--watched">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <a class="card__title " href="javascript:;">Геотекстиль для грядок, шир. 2*10 м.п</a>

                                            <div class="card__price">
                                                <span class="card__price-current">910 ₽</span>
                                                <span class="card__price-origin">1230 ₽</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product card-product--watched">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <a class="card__title " href="javascript:;">Техническая пленка 100 мкм, шир. 3х10</a>

                                            <div class="card__price">
                                                <span class="card__price-current">300 ₽</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product card-product--watched">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                                            <div class="card__price">
                                                <span class="card__price-current">225 ₽</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product card-product--watched">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <a class="card__title " href="javascript:;">Объемная георешетка ГА ОР 210/100 мм</a>

                                            <div class="card__price">
                                                <span class="card__price-current">127 ₽</span>
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
                <div class="basic-hca__action"></div>
            </div>
        </div>

        <div class="gap-lg">
            <div class="benefit">
                <div class="card card-benefit">
                    <div class="card__view">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/benefit-ozon.svg"
                                alt="Изображение блока"
                        >
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Premium-продавец на Ozon</div>
                        <div class="card__text-content">
                            Рейтинг 4,8 из 5<br>
                            100% доставленных заказов вовремя
                        </div>
                    </div>
                </div>
                <div class="card card-benefit">
                    <div class="card__view">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/benefit-avito.svg"
                                alt="Изображение блока"
                        >
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Проверенный партнер Авито</div>
                        <div class="card__text-content">
                            Более 4-х лет на площадке<br>
                            Рейтинг 4,8 из 5
                        </div>
                    </div>
                </div>
                <div class="card card-benefit">
                    <div class="card__view">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/benefit-messages.svg"
                                alt="Изображение блока"
                        >
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Более 1000 отзывов</div>
                        <div class="card__text-content">
                            На площадках
                            <a class="link link-tdu-text" href="javascript:;"><span class="text-content">Ozon,</span></a>
                            <a class="link link-tdu-text" href="javascript:;"><span class="text-content">Авито,</span></a>
                            <a class="link link-tdu-text" href="javascript:;"><span class="text-content">Яндекс&nbsp;Карты</span></a>
                        </div>
                    </div>
                </div>
                <div class="card card-benefit">
                    <div class="card__view">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/benefit-box-tick.svg"
                                alt="Изображение блока"
                        >
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Более 10 тысяч заказов</div>
                        <div class="card__text-content">
                            Доставлено нашим клиентам по всей России
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>