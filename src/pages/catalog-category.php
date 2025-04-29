<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="gap-md">
    <div class="container">
	    <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/breadcrumbs.php"); ?>
    </div>
</div>

<div class="catalog-category">
    <div class="container">
        <div class="gap-xl cp">
            <div class="cp-sidebar">
                <div class="cp-sidebar__item">
                    <div class="product-filter js-product-filter">
                        <button class="btn-reset product-filter__btn-close js-btn-filter-close">
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
                                                <input name="available" type="radio" class="product-filter__checkbox" value="Y" <?/*onclick="check_val(this);smartFilter.click(this)"*/?>>
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">В&nbsp;наличии</span>
                                            </label>
                                        </div>
                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="available" type="radio" class="product-filter__checkbox" value="N" <?/*onclick="check_val(this);smartFilter.click(this)"*/?>>
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Под&nbsp;заказ</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="product-filter__section">
                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="hit" type="checkbox" class="product-filter__checkbox prop" <?/*onclick="smartFilter.prop(this)"*/?>>
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Хит продаж</span>
                                            </label>
                                        </div>
                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="best_price" type="checkbox" class="product-filter__checkbox prop" <?/*onclick="smartFilter.prop(this)"*/?>>
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Лучшая цена</span>
                                            </label>
                                        </div>

                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="sale" type="checkbox" class="product-filter__checkbox prop" <?/*onclick="smartFilter.prop(this)"*/?>>
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Распродажа</span>
                                            </label>
                                        </div>
                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="stock" type="checkbox" class="product-filter__checkbox prop" <?/*onclick="smartFilter.prop(this)"*/?>>
                                                <i class="product-filter__icon-checkbox"></i>
                                                <span class="product-filter__text">Ликвидация</span>
                                            </label>
                                        </div>

                                        <div class="product-filter__field">
                                            <label class="product-filter__label">
                                                <input name="new" type="checkbox" class="product-filter__checkbox prop" <?/*onclick="smartFilter.prop(this)"*/?>>
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
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_327139305" id="arrFilterCatalog_869_327139305" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title=" Лента уплотнительная"> Лента уплотнительная&nbsp;(<span data-role="count_arrFilterCatalog_869_327139305">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2573007870" class="product-filter__label " for="arrFilterCatalog_869_2573007870">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2573007870" id="arrFilterCatalog_869_2573007870" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="H-профиль">H-профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_2573007870">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_519888541" class="product-filter__label " for="arrFilterCatalog_869_519888541">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_519888541" id="arrFilterCatalog_869_519888541" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="J-профиль">J-профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_519888541">21</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1684551544" class="product-filter__label " for="arrFilterCatalog_869_1684551544">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1684551544" id="arrFilterCatalog_869_1684551544" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="J-фаска (карнизная доска)">J-фаска (карнизная доска)&nbsp;(<span data-role="count_arrFilterCatalog_869_1684551544">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2539245404" class="product-filter__label " for="arrFilterCatalog_869_2539245404">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2539245404" id="arrFilterCatalog_869_2539245404" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Аквапанель">Аквапанель&nbsp;(<span data-role="count_arrFilterCatalog_869_2539245404">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2658723607" class="product-filter__label " for="arrFilterCatalog_869_2658723607">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2658723607" id="arrFilterCatalog_869_2658723607" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Алебастр">Алебастр&nbsp;(<span data-role="count_arrFilterCatalog_869_2658723607">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3919709179" class="product-filter__label " for="arrFilterCatalog_869_3919709179">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3919709179" id="arrFilterCatalog_869_3919709179" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Анкер">Анкер&nbsp;(<span data-role="count_arrFilterCatalog_869_3919709179">27</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3223649332" class="product-filter__label " for="arrFilterCatalog_869_3223649332">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3223649332" id="arrFilterCatalog_869_3223649332" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Анкер-клин">Анкер-клин&nbsp;(<span data-role="count_arrFilterCatalog_869_3223649332">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2513086307" class="product-filter__label " for="arrFilterCatalog_869_2513086307">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2513086307" id="arrFilterCatalog_869_2513086307" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Антифриз">Антифриз&nbsp;(<span data-role="count_arrFilterCatalog_869_2513086307">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_975260717" class="product-filter__label " for="arrFilterCatalog_869_975260717">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_975260717" id="arrFilterCatalog_869_975260717" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Арматура">Арматура&nbsp;(<span data-role="count_arrFilterCatalog_869_975260717">24</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2222450256" class="product-filter__label " for="arrFilterCatalog_869_2222450256">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2222450256" id="arrFilterCatalog_869_2222450256" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Армпанель">Армпанель&nbsp;(<span data-role="count_arrFilterCatalog_869_2222450256">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_481363161" class="product-filter__label " for="arrFilterCatalog_869_481363161">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_481363161" id="arrFilterCatalog_869_481363161" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Блок">Блок&nbsp;(<span data-role="count_arrFilterCatalog_869_481363161">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3817062557" class="product-filter__label " for="arrFilterCatalog_869_3817062557">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3817062557" id="arrFilterCatalog_869_3817062557" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Болт">Болт&nbsp;(<span data-role="count_arrFilterCatalog_869_3817062557">20</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2403689778" class="product-filter__label " for="arrFilterCatalog_869_2403689778">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2403689778" id="arrFilterCatalog_869_2403689778" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Вата ">Вата &nbsp;(<span data-role="count_arrFilterCatalog_869_2403689778">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3820184850" class="product-filter__label " for="arrFilterCatalog_869_3820184850">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3820184850" id="arrFilterCatalog_869_3820184850" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Вата базальтовая">Вата базальтовая&nbsp;(<span data-role="count_arrFilterCatalog_869_3820184850">29</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2606010331" class="product-filter__label " for="arrFilterCatalog_869_2606010331">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2606010331" id="arrFilterCatalog_869_2606010331" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Вата минеральная">Вата минеральная&nbsp;(<span data-role="count_arrFilterCatalog_869_2606010331">21</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3822141363" class="product-filter__label " for="arrFilterCatalog_869_3822141363">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3822141363" id="arrFilterCatalog_869_3822141363" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ветро-влагозащита">Ветро-влагозащита&nbsp;(<span data-role="count_arrFilterCatalog_869_3822141363">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4079959026" class="product-filter__label " for="arrFilterCatalog_869_4079959026">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4079959026" id="arrFilterCatalog_869_4079959026" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Виброопора">Виброопора&nbsp;(<span data-role="count_arrFilterCatalog_869_4079959026">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2956436038" class="product-filter__label " for="arrFilterCatalog_869_2956436038">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2956436038" id="arrFilterCatalog_869_2956436038" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Виброподвес">Виброподвес&nbsp;(<span data-role="count_arrFilterCatalog_869_2956436038">13</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3273114479" class="product-filter__label " for="arrFilterCatalog_869_3273114479">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3273114479" id="arrFilterCatalog_869_3273114479" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Внешний угол">Внешний угол&nbsp;(<span data-role="count_arrFilterCatalog_869_3273114479">14</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4225755997" class="product-filter__label " for="arrFilterCatalog_869_4225755997">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4225755997" id="arrFilterCatalog_869_4225755997" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Внутренний угол">Внутренний угол&nbsp;(<span data-role="count_arrFilterCatalog_869_4225755997">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3193851086" class="product-filter__label " for="arrFilterCatalog_869_3193851086">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3193851086" id="arrFilterCatalog_869_3193851086" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Вспененный полиэтилен">Вспененный полиэтилен&nbsp;(<span data-role="count_arrFilterCatalog_869_3193851086">10</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_564327280" class="product-filter__label " for="arrFilterCatalog_869_564327280">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_564327280" id="arrFilterCatalog_869_564327280" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Газобетон">Газобетон&nbsp;(<span data-role="count_arrFilterCatalog_869_564327280">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3267781374" class="product-filter__label " for="arrFilterCatalog_869_3267781374">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3267781374" id="arrFilterCatalog_869_3267781374" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гайка">Гайка&nbsp;(<span data-role="count_arrFilterCatalog_869_3267781374">21</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3743606743" class="product-filter__label " for="arrFilterCatalog_869_3743606743">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3743606743" id="arrFilterCatalog_869_3743606743" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гарцовка">Гарцовка&nbsp;(<span data-role="count_arrFilterCatalog_869_3743606743">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_12541262" class="product-filter__label " for="arrFilterCatalog_869_12541262">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_12541262" id="arrFilterCatalog_869_12541262" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гвоздь">Гвоздь&nbsp;(<span data-role="count_arrFilterCatalog_869_12541262">43</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4101816217" class="product-filter__label " for="arrFilterCatalog_869_4101816217">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4101816217" id="arrFilterCatalog_869_4101816217" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Геомембрана">Геомембрана&nbsp;(<span data-role="count_arrFilterCatalog_869_4101816217">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_503019295" class="product-filter__label " for="arrFilterCatalog_869_503019295">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_503019295" id="arrFilterCatalog_869_503019295" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик">Герметик&nbsp;(<span data-role="count_arrFilterCatalog_869_503019295">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_869415042" class="product-filter__label " for="arrFilterCatalog_869_869415042">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_869415042" id="arrFilterCatalog_869_869415042" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик акриловый">Герметик акриловый&nbsp;(<span data-role="count_arrFilterCatalog_869_869415042">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4181932205" class="product-filter__label " for="arrFilterCatalog_869_4181932205">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4181932205" id="arrFilterCatalog_869_4181932205" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик битумный">Герметик битумный&nbsp;(<span data-role="count_arrFilterCatalog_869_4181932205">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3082878320" class="product-filter__label " for="arrFilterCatalog_869_3082878320">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3082878320" id="arrFilterCatalog_869_3082878320" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик для OSB-плит">Герметик для OSB-плит&nbsp;(<span data-role="count_arrFilterCatalog_869_3082878320">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3799802008" class="product-filter__label " for="arrFilterCatalog_869_3799802008">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3799802008" id="arrFilterCatalog_869_3799802008" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик для дерева">Герметик для дерева&nbsp;(<span data-role="count_arrFilterCatalog_869_3799802008">18</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_703087317" class="product-filter__label " for="arrFilterCatalog_869_703087317">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_703087317" id="arrFilterCatalog_869_703087317" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик кровельный">Герметик кровельный&nbsp;(<span data-role="count_arrFilterCatalog_869_703087317">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1461759736" class="product-filter__label " for="arrFilterCatalog_869_1461759736">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1461759736" id="arrFilterCatalog_869_1461759736" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик полиуретановый">Герметик полиуретановый&nbsp;(<span data-role="count_arrFilterCatalog_869_1461759736">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_830771921" class="product-filter__label " for="arrFilterCatalog_869_830771921">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_830771921" id="arrFilterCatalog_869_830771921" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик противопожарный">Герметик противопожарный&nbsp;(<span data-role="count_arrFilterCatalog_869_830771921">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1065147978" class="product-filter__label " for="arrFilterCatalog_869_1065147978">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1065147978" id="arrFilterCatalog_869_1065147978" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик силакриловый">Герметик силакриловый&nbsp;(<span data-role="count_arrFilterCatalog_869_1065147978">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_15811948" class="product-filter__label " for="arrFilterCatalog_869_15811948">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_15811948" id="arrFilterCatalog_869_15811948" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Герметик силиконовый">Герметик силиконовый&nbsp;(<span data-role="count_arrFilterCatalog_869_15811948">47</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3459617176" class="product-filter__label " for="arrFilterCatalog_869_3459617176">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3459617176" id="arrFilterCatalog_869_3459617176" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гидро-пароизоляция">Гидро-пароизоляция&nbsp;(<span data-role="count_arrFilterCatalog_869_3459617176">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_506848257" class="product-filter__label " for="arrFilterCatalog_869_506848257">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_506848257" id="arrFilterCatalog_869_506848257" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гидроизоляция">Гидроизоляция&nbsp;(<span data-role="count_arrFilterCatalog_869_506848257">13</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1807265888" class="product-filter__label " for="arrFilterCatalog_869_1807265888">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1807265888" id="arrFilterCatalog_869_1807265888" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гидропароизоляция">Гидропароизоляция&nbsp;(<span data-role="count_arrFilterCatalog_869_1807265888">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1691516863" class="product-filter__label " for="arrFilterCatalog_869_1691516863">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1691516863" id="arrFilterCatalog_869_1691516863" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гипс высокопрочный ГВВС-16">Гипс высокопрочный ГВВС-16&nbsp;(<span data-role="count_arrFilterCatalog_869_1691516863">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_280946283" class="product-filter__label " for="arrFilterCatalog_869_280946283">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_280946283" id="arrFilterCatalog_869_280946283" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гипс строительный">Гипс строительный&nbsp;(<span data-role="count_arrFilterCatalog_869_280946283">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_719896490" class="product-filter__label " for="arrFilterCatalog_869_719896490">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_719896490" id="arrFilterCatalog_869_719896490" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гипсоволокнистый лист">Гипсоволокнистый лист&nbsp;(<span data-role="count_arrFilterCatalog_869_719896490">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2927443373" class="product-filter__label " for="arrFilterCatalog_869_2927443373">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2927443373" id="arrFilterCatalog_869_2927443373" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Гипсокартон">Гипсокартон&nbsp;(<span data-role="count_arrFilterCatalog_869_2927443373">44</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1380041460" class="product-filter__label " for="arrFilterCatalog_869_1380041460">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1380041460" id="arrFilterCatalog_869_1380041460" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Грунт">Грунт&nbsp;(<span data-role="count_arrFilterCatalog_869_1380041460">50</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1778171759" class="product-filter__label " for="arrFilterCatalog_869_1778171759">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1778171759" id="arrFilterCatalog_869_1778171759" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Грунтовка">Грунтовка&nbsp;(<span data-role="count_arrFilterCatalog_869_1778171759">25</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4139894063" class="product-filter__label " for="arrFilterCatalog_869_4139894063">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4139894063" id="arrFilterCatalog_869_4139894063" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Держатель балки">Держатель балки&nbsp;(<span data-role="count_arrFilterCatalog_869_4139894063">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_181224758" class="product-filter__label " for="arrFilterCatalog_869_181224758">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_181224758" id="arrFilterCatalog_869_181224758" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Добавка">Добавка&nbsp;(<span data-role="count_arrFilterCatalog_869_181224758">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2586982582" class="product-filter__label " for="arrFilterCatalog_869_2586982582">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2586982582" id="arrFilterCatalog_869_2586982582" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Древесноволокнистая плита ">Древесноволокнистая плита &nbsp;(<span data-role="count_arrFilterCatalog_869_2586982582">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1610927304" class="product-filter__label " for="arrFilterCatalog_869_1610927304">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1610927304" id="arrFilterCatalog_869_1610927304" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Древесностружечная плита ">Древесностружечная плита &nbsp;(<span data-role="count_arrFilterCatalog_869_1610927304">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2308404353" class="product-filter__label " for="arrFilterCatalog_869_2308404353">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2308404353" id="arrFilterCatalog_869_2308404353" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Дюбель">Дюбель&nbsp;(<span data-role="count_arrFilterCatalog_869_2308404353">56</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2157100439" class="product-filter__label " for="arrFilterCatalog_869_2157100439">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2157100439" id="arrFilterCatalog_869_2157100439" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Дюбель для теплоизоляции">Дюбель для теплоизоляции&nbsp;(<span data-role="count_arrFilterCatalog_869_2157100439">42</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3059546618" class="product-filter__label " for="arrFilterCatalog_869_3059546618">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3059546618" id="arrFilterCatalog_869_3059546618" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Дюбель-гвоздь">Дюбель-гвоздь&nbsp;(<span data-role="count_arrFilterCatalog_869_3059546618">23</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_454457858" class="product-filter__label " for="arrFilterCatalog_869_454457858">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_454457858" id="arrFilterCatalog_869_454457858" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Дюбель-гвоздь для монтажного пистолета">Дюбель-гвоздь для монтажного пистолета&nbsp;(<span data-role="count_arrFilterCatalog_869_454457858">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1282468335" class="product-filter__label " for="arrFilterCatalog_869_1282468335">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1282468335" id="arrFilterCatalog_869_1282468335" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Жгут">Жгут&nbsp;(<span data-role="count_arrFilterCatalog_869_1282468335">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2077224892" class="product-filter__label " for="arrFilterCatalog_869_2077224892">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2077224892" id="arrFilterCatalog_869_2077224892" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Жидкая резина">Жидкая резина&nbsp;(<span data-role="count_arrFilterCatalog_869_2077224892">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4045493961" class="product-filter__label " for="arrFilterCatalog_869_4045493961">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4045493961" id="arrFilterCatalog_869_4045493961" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Жидкое стекло">Жидкое стекло&nbsp;(<span data-role="count_arrFilterCatalog_869_4045493961">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_390610022" class="product-filter__label " for="arrFilterCatalog_869_390610022">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_390610022" id="arrFilterCatalog_869_390610022" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Зажим">Зажим&nbsp;(<span data-role="count_arrFilterCatalog_869_390610022">10</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3457483187" class="product-filter__label " for="arrFilterCatalog_869_3457483187">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3457483187" id="arrFilterCatalog_869_3457483187" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Заклепка">Заклепка&nbsp;(<span data-role="count_arrFilterCatalog_869_3457483187">15</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1046340595" class="product-filter__label " for="arrFilterCatalog_869_1046340595">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1046340595" id="arrFilterCatalog_869_1046340595" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Затирка">Затирка&nbsp;(<span data-role="count_arrFilterCatalog_869_1046340595">83</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1172847307" class="product-filter__label " for="arrFilterCatalog_869_1172847307">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1172847307" id="arrFilterCatalog_869_1172847307" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Защитный колпачок">Защитный колпачок&nbsp;(<span data-role="count_arrFilterCatalog_869_1172847307">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1459465077" class="product-filter__label " for="arrFilterCatalog_869_1459465077">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1459465077" id="arrFilterCatalog_869_1459465077" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Звукоизоляционная панель">Звукоизоляционная панель&nbsp;(<span data-role="count_arrFilterCatalog_869_1459465077">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1312821036" class="product-filter__label " for="arrFilterCatalog_869_1312821036">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1312821036" id="arrFilterCatalog_869_1312821036" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Карабин">Карабин&nbsp;(<span data-role="count_arrFilterCatalog_869_1312821036">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1472568607" class="product-filter__label " for="arrFilterCatalog_869_1472568607">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1472568607" id="arrFilterCatalog_869_1472568607" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Кембрийская глина">Кембрийская глина&nbsp;(<span data-role="count_arrFilterCatalog_869_1472568607">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2342632251" class="product-filter__label " for="arrFilterCatalog_869_2342632251">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2342632251" id="arrFilterCatalog_869_2342632251" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Керамзит">Керамзит&nbsp;(<span data-role="count_arrFilterCatalog_869_2342632251">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1955749097" class="product-filter__label " for="arrFilterCatalog_869_1955749097">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1955749097" id="arrFilterCatalog_869_1955749097" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Кирпич">Кирпич&nbsp;(<span data-role="count_arrFilterCatalog_869_1955749097">28</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_968523910" class="product-filter__label " for="arrFilterCatalog_869_968523910">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_968523910" id="arrFilterCatalog_869_968523910" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Кладочная смесь">Кладочная смесь&nbsp;(<span data-role="count_arrFilterCatalog_869_968523910">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1591679334" class="product-filter__label " for="arrFilterCatalog_869_1591679334">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1591679334" id="arrFilterCatalog_869_1591679334" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клеевой состав">Клеевой состав&nbsp;(<span data-role="count_arrFilterCatalog_869_1591679334">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2347429496" class="product-filter__label " for="arrFilterCatalog_869_2347429496">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2347429496" id="arrFilterCatalog_869_2347429496" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей">Клей&nbsp;(<span data-role="count_arrFilterCatalog_869_2347429496">22</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3653696915" class="product-filter__label " for="arrFilterCatalog_869_3653696915">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3653696915" id="arrFilterCatalog_869_3653696915" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей - герметик">Клей - герметик&nbsp;(<span data-role="count_arrFilterCatalog_869_3653696915">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2725795874" class="product-filter__label " for="arrFilterCatalog_869_2725795874">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2725795874" id="arrFilterCatalog_869_2725795874" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей - пена">Клей - пена&nbsp;(<span data-role="count_arrFilterCatalog_869_2725795874">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_961477620" class="product-filter__label " for="arrFilterCatalog_869_961477620">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_961477620" id="arrFilterCatalog_869_961477620" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей - шпатлёвка">Клей - шпатлёвка&nbsp;(<span data-role="count_arrFilterCatalog_869_961477620">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1926923060" class="product-filter__label " for="arrFilterCatalog_869_1926923060">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1926923060" id="arrFilterCatalog_869_1926923060" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей КС">Клей КС&nbsp;(<span data-role="count_arrFilterCatalog_869_1926923060">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_297321386" class="product-filter__label " for="arrFilterCatalog_869_297321386">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_297321386" id="arrFilterCatalog_869_297321386" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей ПВА">Клей ПВА&nbsp;(<span data-role="count_arrFilterCatalog_869_297321386">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4287516107" class="product-filter__label " for="arrFilterCatalog_869_4287516107">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4287516107" id="arrFilterCatalog_869_4287516107" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для ПГП">Клей для ПГП&nbsp;(<span data-role="count_arrFilterCatalog_869_4287516107">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_762666825" class="product-filter__label " for="arrFilterCatalog_869_762666825">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_762666825" id="arrFilterCatalog_869_762666825" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для ЭПП">Клей для ЭПП&nbsp;(<span data-role="count_arrFilterCatalog_869_762666825">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1723302437" class="product-filter__label " for="arrFilterCatalog_869_1723302437">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1723302437" id="arrFilterCatalog_869_1723302437" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для газобетона">Клей для газобетона&nbsp;(<span data-role="count_arrFilterCatalog_869_1723302437">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1361435665" class="product-filter__label " for="arrFilterCatalog_869_1361435665">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1361435665" id="arrFilterCatalog_869_1361435665" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для минераловатных плит">Клей для минераловатных плит&nbsp;(<span data-role="count_arrFilterCatalog_869_1361435665">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_413555247" class="product-filter__label " for="arrFilterCatalog_869_413555247">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_413555247" id="arrFilterCatalog_869_413555247" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для минеральной ваты ">Клей для минеральной ваты &nbsp;(<span data-role="count_arrFilterCatalog_869_413555247">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3563363889" class="product-filter__label " for="arrFilterCatalog_869_3563363889">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3563363889" id="arrFilterCatalog_869_3563363889" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для плитки">Клей для плитки&nbsp;(<span data-role="count_arrFilterCatalog_869_3563363889">25</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1611525820" class="product-filter__label " for="arrFilterCatalog_869_1611525820">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1611525820" id="arrFilterCatalog_869_1611525820" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для плитки и камня">Клей для плитки и камня&nbsp;(<span data-role="count_arrFilterCatalog_869_1611525820">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_734472452" class="product-filter__label " for="arrFilterCatalog_869_734472452">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_734472452" id="arrFilterCatalog_869_734472452" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей для плитки и керамогранита  ">Клей для плитки и керамогранита  &nbsp;(<span data-role="count_arrFilterCatalog_869_734472452">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3013810872" class="product-filter__label " for="arrFilterCatalog_869_3013810872">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3013810872" id="arrFilterCatalog_869_3013810872" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей монтажный">Клей монтажный&nbsp;(<span data-role="count_arrFilterCatalog_869_3013810872">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3960498677" class="product-filter__label " for="arrFilterCatalog_869_3960498677">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3960498677" id="arrFilterCatalog_869_3960498677" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клей-герметик">Клей-герметик&nbsp;(<span data-role="count_arrFilterCatalog_869_3960498677">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1223049038" class="product-filter__label " for="arrFilterCatalog_869_1223049038">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1223049038" id="arrFilterCatalog_869_1223049038" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Клинкер">Клинкер&nbsp;(<span data-role="count_arrFilterCatalog_869_1223049038">20</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2098518073" class="product-filter__label " for="arrFilterCatalog_869_2098518073">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2098518073" id="arrFilterCatalog_869_2098518073" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ковер">Ковер&nbsp;(<span data-role="count_arrFilterCatalog_869_2098518073">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3292435807" class="product-filter__label " for="arrFilterCatalog_869_3292435807">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3292435807" id="arrFilterCatalog_869_3292435807" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Комплект звукоизоляции труб">Комплект звукоизоляции труб&nbsp;(<span data-role="count_arrFilterCatalog_869_3292435807">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_559999954" class="product-filter__label " for="arrFilterCatalog_869_559999954">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_559999954" id="arrFilterCatalog_869_559999954" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Комплект реек">Комплект реек&nbsp;(<span data-role="count_arrFilterCatalog_869_559999954">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2806609171" class="product-filter__label " for="arrFilterCatalog_869_2806609171">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2806609171" id="arrFilterCatalog_869_2806609171" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Комплектующие для несъемной опалубки">Комплектующие для несъемной опалубки&nbsp;(<span data-role="count_arrFilterCatalog_869_2806609171">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2476060212" class="product-filter__label " for="arrFilterCatalog_869_2476060212">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2476060212" id="arrFilterCatalog_869_2476060212" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Коуш">Коуш&nbsp;(<span data-role="count_arrFilterCatalog_869_2476060212">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2018868574" class="product-filter__label " for="arrFilterCatalog_869_2018868574">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2018868574" id="arrFilterCatalog_869_2018868574" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крепеж">Крепеж&nbsp;(<span data-role="count_arrFilterCatalog_869_2018868574">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4099714954" class="product-filter__label " for="arrFilterCatalog_869_4099714954">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4099714954" id="arrFilterCatalog_869_4099714954" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крепление">Крепление&nbsp;(<span data-role="count_arrFilterCatalog_869_4099714954">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2903973463" class="product-filter__label " for="arrFilterCatalog_869_2903973463">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2903973463" id="arrFilterCatalog_869_2903973463" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крепление для маячкового профиля">Крепление для маячкового профиля&nbsp;(<span data-role="count_arrFilterCatalog_869_2903973463">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_763366471" class="product-filter__label " for="arrFilterCatalog_869_763366471">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_763366471" id="arrFilterCatalog_869_763366471" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Кронштейн">Кронштейн&nbsp;(<span data-role="count_arrFilterCatalog_869_763366471">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4174380455" class="product-filter__label " for="arrFilterCatalog_869_4174380455">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4174380455" id="arrFilterCatalog_869_4174380455" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крюк для вязальной проволоки">Крюк для вязальной проволоки&nbsp;(<span data-role="count_arrFilterCatalog_869_4174380455">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1098190656" class="product-filter__label " for="arrFilterCatalog_869_1098190656">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1098190656" id="arrFilterCatalog_869_1098190656" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Крючок">Крючок&nbsp;(<span data-role="count_arrFilterCatalog_869_1098190656">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1281530572" class="product-filter__label " for="arrFilterCatalog_869_1281530572">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1281530572" id="arrFilterCatalog_869_1281530572" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лента">Лента&nbsp;(<span data-role="count_arrFilterCatalog_869_1281530572">56</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_834438450" class="product-filter__label " for="arrFilterCatalog_869_834438450">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_834438450" id="arrFilterCatalog_869_834438450" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лента соединительная">Лента соединительная&nbsp;(<span data-role="count_arrFilterCatalog_869_834438450">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1222539205" class="product-filter__label " for="arrFilterCatalog_869_1222539205">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1222539205" id="arrFilterCatalog_869_1222539205" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лента уплотнительная">Лента уплотнительная&nbsp;(<span data-role="count_arrFilterCatalog_869_1222539205">19</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_154786096" class="product-filter__label " for="arrFilterCatalog_869_154786096">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_154786096" id="arrFilterCatalog_869_154786096" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лента-серпянка">Лента-серпянка&nbsp;(<span data-role="count_arrFilterCatalog_869_154786096">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1509125456" class="product-filter__label " for="arrFilterCatalog_869_1509125456">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1509125456" id="arrFilterCatalog_869_1509125456" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лист">Лист&nbsp;(<span data-role="count_arrFilterCatalog_869_1509125456">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4081430966" class="product-filter__label " for="arrFilterCatalog_869_4081430966">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4081430966" id="arrFilterCatalog_869_4081430966" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лист огнестойкий">Лист огнестойкий&nbsp;(<span data-role="count_arrFilterCatalog_869_4081430966">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1968765491" class="product-filter__label " for="arrFilterCatalog_869_1968765491">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1968765491" id="arrFilterCatalog_869_1968765491" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лист огнестойкий Gyproc Файер ">Лист огнестойкий Gyproc Файер &nbsp;(<span data-role="count_arrFilterCatalog_869_1968765491">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4046235041" class="product-filter__label " for="arrFilterCatalog_869_4046235041">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4046235041" id="arrFilterCatalog_869_4046235041" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лист стекломагниевый">Лист стекломагниевый&nbsp;(<span data-role="count_arrFilterCatalog_869_4046235041">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2088553040" class="product-filter__label " for="arrFilterCatalog_869_2088553040">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2088553040" id="arrFilterCatalog_869_2088553040" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Лягушка из арматуры">Лягушка из арматуры&nbsp;(<span data-role="count_arrFilterCatalog_869_2088553040">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2813883438" class="product-filter__label " for="arrFilterCatalog_869_2813883438">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2813883438" id="arrFilterCatalog_869_2813883438" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Манжета">Манжета&nbsp;(<span data-role="count_arrFilterCatalog_869_2813883438">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2058205941" class="product-filter__label " for="arrFilterCatalog_869_2058205941">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2058205941" id="arrFilterCatalog_869_2058205941" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мастика">Мастика&nbsp;(<span data-role="count_arrFilterCatalog_869_2058205941">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1367451419" class="product-filter__label " for="arrFilterCatalog_869_1367451419">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1367451419" id="arrFilterCatalog_869_1367451419" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мастика гидроизоляционная ">Мастика гидроизоляционная &nbsp;(<span data-role="count_arrFilterCatalog_869_1367451419">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1365040641" class="product-filter__label " for="arrFilterCatalog_869_1365040641">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1365040641" id="arrFilterCatalog_869_1365040641" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мастика каучукобитумная">Мастика каучукобитумная&nbsp;(<span data-role="count_arrFilterCatalog_869_1365040641">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3608031078" class="product-filter__label " for="arrFilterCatalog_869_3608031078">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3608031078" id="arrFilterCatalog_869_3608031078" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мастика клеящая">Мастика клеящая&nbsp;(<span data-role="count_arrFilterCatalog_869_3608031078">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1308110404" class="product-filter__label " for="arrFilterCatalog_869_1308110404">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1308110404" id="arrFilterCatalog_869_1308110404" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Маячок реперный">Маячок реперный&nbsp;(<span data-role="count_arrFilterCatalog_869_1308110404">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2403360228" class="product-filter__label " for="arrFilterCatalog_869_2403360228">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2403360228" id="arrFilterCatalog_869_2403360228" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мел">Мел&nbsp;(<span data-role="count_arrFilterCatalog_869_2403360228">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3250282428" class="product-filter__label " for="arrFilterCatalog_869_3250282428">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3250282428" id="arrFilterCatalog_869_3250282428" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мембрана">Мембрана&nbsp;(<span data-role="count_arrFilterCatalog_869_3250282428">17</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1656180521" class="product-filter__label " for="arrFilterCatalog_869_1656180521">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1656180521" id="arrFilterCatalog_869_1656180521" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Мембрана профилированная">Мембрана профилированная&nbsp;(<span data-role="count_arrFilterCatalog_869_1656180521">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3881396040" class="product-filter__label " for="arrFilterCatalog_869_3881396040">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3881396040" id="arrFilterCatalog_869_3881396040" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Молдинг">Молдинг&nbsp;(<span data-role="count_arrFilterCatalog_869_3881396040">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_46095260" class="product-filter__label " for="arrFilterCatalog_869_46095260">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_46095260" id="arrFilterCatalog_869_46095260" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Набор">Набор&nbsp;(<span data-role="count_arrFilterCatalog_869_46095260">22</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1004422485" class="product-filter__label " for="arrFilterCatalog_869_1004422485">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1004422485" id="arrFilterCatalog_869_1004422485" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Наличник">Наличник&nbsp;(<span data-role="count_arrFilterCatalog_869_1004422485">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_697078208" class="product-filter__label " for="arrFilterCatalog_869_697078208">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_697078208" id="arrFilterCatalog_869_697078208" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Наружный угол">Наружный угол&nbsp;(<span data-role="count_arrFilterCatalog_869_697078208">33</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2250296434" class="product-filter__label " for="arrFilterCatalog_869_2250296434">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2250296434" id="arrFilterCatalog_869_2250296434" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Обеспыливатель">Обеспыливатель&nbsp;(<span data-role="count_arrFilterCatalog_869_2250296434">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2165420133" class="product-filter__label " for="arrFilterCatalog_869_2165420133">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2165420133" id="arrFilterCatalog_869_2165420133" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Околооконный профиль">Околооконный профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_2165420133">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3869322867" class="product-filter__label " for="arrFilterCatalog_869_3869322867">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3869322867" id="arrFilterCatalog_869_3869322867" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Опора">Опора&nbsp;(<span data-role="count_arrFilterCatalog_869_3869322867">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2491414556" class="product-filter__label " for="arrFilterCatalog_869_2491414556">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2491414556" id="arrFilterCatalog_869_2491414556" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Опора балки">Опора балки&nbsp;(<span data-role="count_arrFilterCatalog_869_2491414556">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_887265300" class="product-filter__label " for="arrFilterCatalog_869_887265300">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_887265300" id="arrFilterCatalog_869_887265300" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Опора бруса">Опора бруса&nbsp;(<span data-role="count_arrFilterCatalog_869_887265300">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1538901756" class="product-filter__label " for="arrFilterCatalog_869_1538901756">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1538901756" id="arrFilterCatalog_869_1538901756" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Основание">Основание&nbsp;(<span data-role="count_arrFilterCatalog_869_1538901756">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1469437806" class="product-filter__label " for="arrFilterCatalog_869_1469437806">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1469437806" id="arrFilterCatalog_869_1469437806" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Отлив">Отлив&nbsp;(<span data-role="count_arrFilterCatalog_869_1469437806">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3067605565" class="product-filter__label " for="arrFilterCatalog_869_3067605565">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3067605565" id="arrFilterCatalog_869_3067605565" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Очиститель">Очиститель&nbsp;(<span data-role="count_arrFilterCatalog_869_3067605565">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1610714475" class="product-filter__label " for="arrFilterCatalog_869_1610714475">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1610714475" id="arrFilterCatalog_869_1610714475" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="ППГЗ - плита перфорированная гипсокартонная звукопоглащающая">ППГЗ - плита перфорированная гипсокартонная звукопоглащающая&nbsp;(<span data-role="count_arrFilterCatalog_869_1610714475">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1680337359" class="product-filter__label " for="arrFilterCatalog_869_1680337359">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1680337359" id="arrFilterCatalog_869_1680337359" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Панель">Панель&nbsp;(<span data-role="count_arrFilterCatalog_869_1680337359">15</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1085616544" class="product-filter__label " for="arrFilterCatalog_869_1085616544">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1085616544" id="arrFilterCatalog_869_1085616544" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Панель сайдинга">Панель сайдинга&nbsp;(<span data-role="count_arrFilterCatalog_869_1085616544">33</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2283820108" class="product-filter__label " for="arrFilterCatalog_869_2283820108">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2283820108" id="arrFilterCatalog_869_2283820108" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пароизоляция">Пароизоляция&nbsp;(<span data-role="count_arrFilterCatalog_869_2283820108">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3581550667" class="product-filter__label " for="arrFilterCatalog_869_3581550667">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3581550667" id="arrFilterCatalog_869_3581550667" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пароизоляция отражающая">Пароизоляция отражающая&nbsp;(<span data-role="count_arrFilterCatalog_869_3581550667">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1119411310" class="product-filter__label " for="arrFilterCatalog_869_1119411310">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1119411310" id="arrFilterCatalog_869_1119411310" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Патрон для монтажного пистолета">Патрон для монтажного пистолета&nbsp;(<span data-role="count_arrFilterCatalog_869_1119411310">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_288200354" class="product-filter__label " for="arrFilterCatalog_869_288200354">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_288200354" id="arrFilterCatalog_869_288200354" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пена">Пена&nbsp;(<span data-role="count_arrFilterCatalog_869_288200354">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_465978919" class="product-filter__label " for="arrFilterCatalog_869_465978919">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_465978919" id="arrFilterCatalog_869_465978919" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пена монтажная">Пена монтажная&nbsp;(<span data-role="count_arrFilterCatalog_869_465978919">17</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_231998132" class="product-filter__label " for="arrFilterCatalog_869_231998132">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_231998132" id="arrFilterCatalog_869_231998132" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пенопласт">Пенопласт&nbsp;(<span data-role="count_arrFilterCatalog_869_231998132">26</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3067500978" class="product-filter__label " for="arrFilterCatalog_869_3067500978">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3067500978" id="arrFilterCatalog_869_3067500978" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пенополистирол">Пенополистирол&nbsp;(<span data-role="count_arrFilterCatalog_869_3067500978">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_939051576" class="product-filter__label " for="arrFilterCatalog_869_939051576">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_939051576" id="arrFilterCatalog_869_939051576" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Перемычка">Перемычка&nbsp;(<span data-role="count_arrFilterCatalog_869_939051576">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3407601517" class="product-filter__label " for="arrFilterCatalog_869_3407601517">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3407601517" id="arrFilterCatalog_869_3407601517" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Песок">Песок&nbsp;(<span data-role="count_arrFilterCatalog_869_3407601517">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1028520026" class="product-filter__label " for="arrFilterCatalog_869_1028520026">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1028520026" id="arrFilterCatalog_869_1028520026" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пистолет монтажный">Пистолет монтажный&nbsp;(<span data-role="count_arrFilterCatalog_869_1028520026">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_19189584" class="product-filter__label " for="arrFilterCatalog_869_19189584">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_19189584" id="arrFilterCatalog_869_19189584" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Планка околооконная">Планка околооконная&nbsp;(<span data-role="count_arrFilterCatalog_869_19189584">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1176918710" class="product-filter__label " for="arrFilterCatalog_869_1176918710">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1176918710" id="arrFilterCatalog_869_1176918710" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пластина">Пластина&nbsp;(<span data-role="count_arrFilterCatalog_869_1176918710">33</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_310663669" class="product-filter__label " for="arrFilterCatalog_869_310663669">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_310663669" id="arrFilterCatalog_869_310663669" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пластификатор">Пластификатор&nbsp;(<span data-role="count_arrFilterCatalog_869_310663669">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1437358919" class="product-filter__label " for="arrFilterCatalog_869_1437358919">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1437358919" id="arrFilterCatalog_869_1437358919" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Пленка полиэтиленовая">Пленка полиэтиленовая&nbsp;(<span data-role="count_arrFilterCatalog_869_1437358919">20</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2303803373" class="product-filter__label " for="arrFilterCatalog_869_2303803373">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2303803373" id="arrFilterCatalog_869_2303803373" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Плита">Плита&nbsp;(<span data-role="count_arrFilterCatalog_869_2303803373">27</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_482762713" class="product-filter__label " for="arrFilterCatalog_869_482762713">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_482762713" id="arrFilterCatalog_869_482762713" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Плита пазогребневая">Плита пазогребневая&nbsp;(<span data-role="count_arrFilterCatalog_869_482762713">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2871076307" class="product-filter__label " for="arrFilterCatalog_869_2871076307">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2871076307" id="arrFilterCatalog_869_2871076307" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подвес ">Подвес &nbsp;(<span data-role="count_arrFilterCatalog_869_2871076307">14</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4209725579" class="product-filter__label " for="arrFilterCatalog_869_4209725579">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4209725579" id="arrFilterCatalog_869_4209725579" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подвес Нониус">Подвес Нониус&nbsp;(<span data-role="count_arrFilterCatalog_869_4209725579">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2786843657" class="product-filter__label " for="arrFilterCatalog_869_2786843657">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2786843657" id="arrFilterCatalog_869_2786843657" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подложка">Подложка&nbsp;(<span data-role="count_arrFilterCatalog_869_2786843657">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3405637123" class="product-filter__label " for="arrFilterCatalog_869_3405637123">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3405637123" id="arrFilterCatalog_869_3405637123" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник двухсекционный">Подрозетник двухсекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_3405637123">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1150643299" class="product-filter__label " for="arrFilterCatalog_869_1150643299">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1150643299" id="arrFilterCatalog_869_1150643299" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник односекционный">Подрозетник односекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_1150643299">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1045736542" class="product-filter__label " for="arrFilterCatalog_869_1045736542">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1045736542" id="arrFilterCatalog_869_1045736542" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник пятисекционный">Подрозетник пятисекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_1045736542">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3861514235" class="product-filter__label " for="arrFilterCatalog_869_3861514235">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3861514235" id="arrFilterCatalog_869_3861514235" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник трёхсекционный">Подрозетник трёхсекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_3861514235">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_964247198" class="product-filter__label " for="arrFilterCatalog_869_964247198">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_964247198" id="arrFilterCatalog_869_964247198" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Подрозетник четырёхсекционный">Подрозетник четырёхсекционный&nbsp;(<span data-role="count_arrFilterCatalog_869_964247198">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1615538701" class="product-filter__label " for="arrFilterCatalog_869_1615538701">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1615538701" id="arrFilterCatalog_869_1615538701" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Полимерный пол">Полимерный пол&nbsp;(<span data-role="count_arrFilterCatalog_869_1615538701">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_533822611" class="product-filter__label " for="arrFilterCatalog_869_533822611">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_533822611" id="arrFilterCatalog_869_533822611" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Полоса">Полоса&nbsp;(<span data-role="count_arrFilterCatalog_869_533822611">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4164044913" class="product-filter__label " for="arrFilterCatalog_869_4164044913">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4164044913" id="arrFilterCatalog_869_4164044913" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Полоса горячекатаная">Полоса горячекатаная&nbsp;(<span data-role="count_arrFilterCatalog_869_4164044913">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2694798327" class="product-filter__label " for="arrFilterCatalog_869_2694798327">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2694798327" id="arrFilterCatalog_869_2694798327" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Полотно">Полотно&nbsp;(<span data-role="count_arrFilterCatalog_869_2694798327">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_99647425" class="product-filter__label " for="arrFilterCatalog_869_99647425">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_99647425" id="arrFilterCatalog_869_99647425" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Праймер">Праймер&nbsp;(<span data-role="count_arrFilterCatalog_869_99647425">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2968579249" class="product-filter__label " for="arrFilterCatalog_869_2968579249">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2968579249" id="arrFilterCatalog_869_2968579249" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Праймер битумный">Праймер битумный&nbsp;(<span data-role="count_arrFilterCatalog_869_2968579249">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_136138432" class="product-filter__label " for="arrFilterCatalog_869_136138432">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_136138432" id="arrFilterCatalog_869_136138432" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Проволока вязальная">Проволока вязальная&nbsp;(<span data-role="count_arrFilterCatalog_869_136138432">7</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1048881086" class="product-filter__label " for="arrFilterCatalog_869_1048881086">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1048881086" id="arrFilterCatalog_869_1048881086" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Профиль">Профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_1048881086">104</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2869859912" class="product-filter__label " for="arrFilterCatalog_869_2869859912">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2869859912" id="arrFilterCatalog_869_2869859912" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Профиль капельник">Профиль капельник&nbsp;(<span data-role="count_arrFilterCatalog_869_2869859912">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2248542433" class="product-filter__label " for="arrFilterCatalog_869_2248542433">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2248542433" id="arrFilterCatalog_869_2248542433" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Растворитель">Растворитель&nbsp;(<span data-role="count_arrFilterCatalog_869_2248542433">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2269294926" class="product-filter__label " for="arrFilterCatalog_869_2269294926">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2269294926" id="arrFilterCatalog_869_2269294926" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Рейка">Рейка&nbsp;(<span data-role="count_arrFilterCatalog_869_2269294926">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1789759355" class="product-filter__label " for="arrFilterCatalog_869_1789759355">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1789759355" id="arrFilterCatalog_869_1789759355" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ремсостав">Ремсостав&nbsp;(<span data-role="count_arrFilterCatalog_869_1789759355">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3119163310" class="product-filter__label " for="arrFilterCatalog_869_3119163310">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3119163310" id="arrFilterCatalog_869_3119163310" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ровнитель">Ровнитель&nbsp;(<span data-role="count_arrFilterCatalog_869_3119163310">18</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1664854554" class="product-filter__label " for="arrFilterCatalog_869_1664854554">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1664854554" id="arrFilterCatalog_869_1664854554" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Ровнитель (Наливной пол)">Ровнитель (Наливной пол)&nbsp;(<span data-role="count_arrFilterCatalog_869_1664854554">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2647539913" class="product-filter__label " for="arrFilterCatalog_869_2647539913">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2647539913" id="arrFilterCatalog_869_2647539913" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Рым-болт">Рым-болт&nbsp;(<span data-role="count_arrFilterCatalog_869_2647539913">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1712867035" class="product-filter__label " for="arrFilterCatalog_869_1712867035">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1712867035" id="arrFilterCatalog_869_1712867035" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Саморез">Саморез&nbsp;(<span data-role="count_arrFilterCatalog_869_1712867035">156</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_74085815" class="product-filter__label " for="arrFilterCatalog_869_74085815">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_74085815" id="arrFilterCatalog_869_74085815" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Саморез кровельный">Саморез кровельный&nbsp;(<span data-role="count_arrFilterCatalog_869_74085815">44</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3952444432" class="product-filter__label " for="arrFilterCatalog_869_3952444432">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3952444432" id="arrFilterCatalog_869_3952444432" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Саморез оконный">Саморез оконный&nbsp;(<span data-role="count_arrFilterCatalog_869_3952444432">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3237335746" class="product-filter__label " for="arrFilterCatalog_869_3237335746">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3237335746" id="arrFilterCatalog_869_3237335746" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Саморез универсальный">Саморез универсальный&nbsp;(<span data-role="count_arrFilterCatalog_869_3237335746">42</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2375352127" class="product-filter__label " for="arrFilterCatalog_869_2375352127">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2375352127" id="arrFilterCatalog_869_2375352127" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Сетка">Сетка&nbsp;(<span data-role="count_arrFilterCatalog_869_2375352127">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3353333960" class="product-filter__label " for="arrFilterCatalog_869_3353333960">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3353333960" id="arrFilterCatalog_869_3353333960" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Сетка кладочная">Сетка кладочная&nbsp;(<span data-role="count_arrFilterCatalog_869_3353333960">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1607890053" class="product-filter__label " for="arrFilterCatalog_869_1607890053">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1607890053" id="arrFilterCatalog_869_1607890053" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Сетка стеклотканевая">Сетка стеклотканевая&nbsp;(<span data-role="count_arrFilterCatalog_869_1607890053">11</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3624199701" class="product-filter__label " for="arrFilterCatalog_869_3624199701">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3624199701" id="arrFilterCatalog_869_3624199701" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Скоба">Скоба&nbsp;(<span data-role="count_arrFilterCatalog_869_3624199701">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1880374896" class="product-filter__label " for="arrFilterCatalog_869_1880374896">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1880374896" id="arrFilterCatalog_869_1880374896" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Скобы">Скобы&nbsp;(<span data-role="count_arrFilterCatalog_869_1880374896">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1722232077" class="product-filter__label " for="arrFilterCatalog_869_1722232077">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1722232077" id="arrFilterCatalog_869_1722232077" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Смесь">Смесь&nbsp;(<span data-role="count_arrFilterCatalog_869_1722232077">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1541893289" class="product-filter__label " for="arrFilterCatalog_869_1541893289">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1541893289" id="arrFilterCatalog_869_1541893289" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Соединитель">Соединитель&nbsp;(<span data-role="count_arrFilterCatalog_869_1541893289">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3533433546" class="product-filter__label " for="arrFilterCatalog_869_3533433546">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3533433546" id="arrFilterCatalog_869_3533433546" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Софит">Софит&nbsp;(<span data-role="count_arrFilterCatalog_869_3533433546">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_811360933" class="product-filter__label " for="arrFilterCatalog_869_811360933">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_811360933" id="arrFilterCatalog_869_811360933" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Стартовый профиль">Стартовый профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_811360933">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1911896660" class="product-filter__label " for="arrFilterCatalog_869_1911896660">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1911896660" id="arrFilterCatalog_869_1911896660" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Стартовый угол">Стартовый угол&nbsp;(<span data-role="count_arrFilterCatalog_869_1911896660">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3247211088" class="product-filter__label " for="arrFilterCatalog_869_3247211088">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3247211088" id="arrFilterCatalog_869_3247211088" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Строп">Строп&nbsp;(<span data-role="count_arrFilterCatalog_869_3247211088">18</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2555282411" class="product-filter__label " for="arrFilterCatalog_869_2555282411">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2555282411" id="arrFilterCatalog_869_2555282411" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Сэндвич панель">Сэндвич панель&nbsp;(<span data-role="count_arrFilterCatalog_869_2555282411">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3938534368" class="product-filter__label " for="arrFilterCatalog_869_3938534368">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3938534368" id="arrFilterCatalog_869_3938534368" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Талреп">Талреп&nbsp;(<span data-role="count_arrFilterCatalog_869_3938534368">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3461508230" class="product-filter__label " for="arrFilterCatalog_869_3461508230">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3461508230" id="arrFilterCatalog_869_3461508230" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Топпинг для полов">Топпинг для полов&nbsp;(<span data-role="count_arrFilterCatalog_869_3461508230">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_814168385" class="product-filter__label " for="arrFilterCatalog_869_814168385">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_814168385" id="arrFilterCatalog_869_814168385" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Трос">Трос&nbsp;(<span data-role="count_arrFilterCatalog_869_814168385">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3017641920" class="product-filter__label " for="arrFilterCatalog_869_3017641920">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3017641920" id="arrFilterCatalog_869_3017641920" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Труба">Труба&nbsp;(<span data-role="count_arrFilterCatalog_869_3017641920">32</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4073327800" class="product-filter__label " for="arrFilterCatalog_869_4073327800">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4073327800" id="arrFilterCatalog_869_4073327800" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Тяга">Тяга&nbsp;(<span data-role="count_arrFilterCatalog_869_4073327800">8</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1681574901" class="product-filter__label " for="arrFilterCatalog_869_1681574901">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1681574901" id="arrFilterCatalog_869_1681574901" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Угол">Угол&nbsp;(<span data-role="count_arrFilterCatalog_869_1681574901">31</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_470276353" class="product-filter__label " for="arrFilterCatalog_869_470276353">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_470276353" id="arrFilterCatalog_869_470276353" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Угол внешний">Угол внешний&nbsp;(<span data-role="count_arrFilterCatalog_869_470276353">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1431572139" class="product-filter__label " for="arrFilterCatalog_869_1431572139">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1431572139" id="arrFilterCatalog_869_1431572139" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Угол внутренний">Угол внутренний&nbsp;(<span data-role="count_arrFilterCatalog_869_1431572139">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4239390787" class="product-filter__label " for="arrFilterCatalog_869_4239390787">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4239390787" id="arrFilterCatalog_869_4239390787" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Угол крепежный">Угол крепежный&nbsp;(<span data-role="count_arrFilterCatalog_869_4239390787">24</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_560516638" class="product-filter__label " for="arrFilterCatalog_869_560516638">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_560516638" id="arrFilterCatalog_869_560516638" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Уголок">Уголок&nbsp;(<span data-role="count_arrFilterCatalog_869_560516638">28</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3385042813" class="product-filter__label " for="arrFilterCatalog_869_3385042813">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3385042813" id="arrFilterCatalog_869_3385042813" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Удлинитель Нониус">Удлинитель Нониус&nbsp;(<span data-role="count_arrFilterCatalog_869_3385042813">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1380777092" class="product-filter__label " for="arrFilterCatalog_869_1380777092">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1380777092" id="arrFilterCatalog_869_1380777092" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Удлинитель профиля">Удлинитель профиля&nbsp;(<span data-role="count_arrFilterCatalog_869_1380777092">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4005757555" class="product-filter__label " for="arrFilterCatalog_869_4005757555">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4005757555" id="arrFilterCatalog_869_4005757555" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Уплотнитель">Уплотнитель&nbsp;(<span data-role="count_arrFilterCatalog_869_4005757555">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2882072139" class="product-filter__label " for="arrFilterCatalog_869_2882072139">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2882072139" id="arrFilterCatalog_869_2882072139" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Упрочнитель бетонных полов">Упрочнитель бетонных полов&nbsp;(<span data-role="count_arrFilterCatalog_869_2882072139">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_344492163" class="product-filter__label " for="arrFilterCatalog_869_344492163">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_344492163" id="arrFilterCatalog_869_344492163" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Утеплитель">Утеплитель&nbsp;(<span data-role="count_arrFilterCatalog_869_344492163">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3382314309" class="product-filter__label " for="arrFilterCatalog_869_3382314309">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3382314309" id="arrFilterCatalog_869_3382314309" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фанера">Фанера&nbsp;(<span data-role="count_arrFilterCatalog_869_3382314309">21</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3428231305" class="product-filter__label " for="arrFilterCatalog_869_3428231305">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3428231305" id="arrFilterCatalog_869_3428231305" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фасадная панель">Фасадная панель&nbsp;(<span data-role="count_arrFilterCatalog_869_3428231305">36</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4090530097" class="product-filter__label " for="arrFilterCatalog_869_4090530097">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4090530097" id="arrFilterCatalog_869_4090530097" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фасадная плитка">Фасадная плитка&nbsp;(<span data-role="count_arrFilterCatalog_869_4090530097">6</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3560309294" class="product-filter__label " for="arrFilterCatalog_869_3560309294">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3560309294" id="arrFilterCatalog_869_3560309294" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фиброволокно">Фиброволокно&nbsp;(<span data-role="count_arrFilterCatalog_869_3560309294">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_789254570" class="product-filter__label " for="arrFilterCatalog_869_789254570">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_789254570" id="arrFilterCatalog_869_789254570" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фибросайдинг">Фибросайдинг&nbsp;(<span data-role="count_arrFilterCatalog_869_789254570">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3842969856" class="product-filter__label " for="arrFilterCatalog_869_3842969856">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3842969856" id="arrFilterCatalog_869_3842969856" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фиксатор">Фиксатор&nbsp;(<span data-role="count_arrFilterCatalog_869_3842969856">20</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1198745858" class="product-filter__label " for="arrFilterCatalog_869_1198745858">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1198745858" id="arrFilterCatalog_869_1198745858" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Фиксатор для арматуры">Фиксатор для арматуры&nbsp;(<span data-role="count_arrFilterCatalog_869_1198745858">3</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1366195962" class="product-filter__label " for="arrFilterCatalog_869_1366195962">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1366195962" id="arrFilterCatalog_869_1366195962" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Финишный профиль">Финишный профиль&nbsp;(<span data-role="count_arrFilterCatalog_869_1366195962">10</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2743988980" class="product-filter__label " for="arrFilterCatalog_869_2743988980">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2743988980" id="arrFilterCatalog_869_2743988980" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Холодный асфальт">Холодный асфальт&nbsp;(<span data-role="count_arrFilterCatalog_869_2743988980">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1173943856" class="product-filter__label " for="arrFilterCatalog_869_1173943856">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1173943856" id="arrFilterCatalog_869_1173943856" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Хомут">Хомут&nbsp;(<span data-role="count_arrFilterCatalog_869_1173943856">19</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_953516824" class="product-filter__label " for="arrFilterCatalog_869_953516824">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_953516824" id="arrFilterCatalog_869_953516824" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Цемент">Цемент&nbsp;(<span data-role="count_arrFilterCatalog_869_953516824">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2384280699" class="product-filter__label " for="arrFilterCatalog_869_2384280699">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2384280699" id="arrFilterCatalog_869_2384280699" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Цементно-стружечная плита">Цементно-стружечная плита&nbsp;(<span data-role="count_arrFilterCatalog_869_2384280699">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_421982091" class="product-filter__label " for="arrFilterCatalog_869_421982091">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_421982091" id="arrFilterCatalog_869_421982091" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Цепь">Цепь&nbsp;(<span data-role="count_arrFilterCatalog_869_421982091">9</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2492508382" class="product-filter__label " for="arrFilterCatalog_869_2492508382">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2492508382" id="arrFilterCatalog_869_2492508382" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Цилиндр">Цилиндр&nbsp;(<span data-role="count_arrFilterCatalog_869_2492508382">30</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1660408592" class="product-filter__label " for="arrFilterCatalog_869_1660408592">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1660408592" id="arrFilterCatalog_869_1660408592" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шайба">Шайба&nbsp;(<span data-role="count_arrFilterCatalog_869_1660408592">27</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_4218528370" class="product-filter__label " for="arrFilterCatalog_869_4218528370">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_4218528370" id="arrFilterCatalog_869_4218528370" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Швеллер">Швеллер&nbsp;(<span data-role="count_arrFilterCatalog_869_4218528370">16</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3843221677" class="product-filter__label " for="arrFilterCatalog_869_3843221677">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3843221677" id="arrFilterCatalog_869_3843221677" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шнур">Шнур&nbsp;(<span data-role="count_arrFilterCatalog_869_3843221677">13</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3216322055" class="product-filter__label " for="arrFilterCatalog_869_3216322055">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3216322055" id="arrFilterCatalog_869_3216322055" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шпагат">Шпагат&nbsp;(<span data-role="count_arrFilterCatalog_869_3216322055">4</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2987642742" class="product-filter__label " for="arrFilterCatalog_869_2987642742">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2987642742" id="arrFilterCatalog_869_2987642742" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шпаклевка">Шпаклевка&nbsp;(<span data-role="count_arrFilterCatalog_869_2987642742">31</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_761919937" class="product-filter__label " for="arrFilterCatalog_869_761919937">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_761919937" id="arrFilterCatalog_869_761919937" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шпилька">Шпилька&nbsp;(<span data-role="count_arrFilterCatalog_869_761919937">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1789237789" class="product-filter__label " for="arrFilterCatalog_869_1789237789">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1789237789" id="arrFilterCatalog_869_1789237789" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шпилька для химического анкера">Шпилька для химического анкера&nbsp;(<span data-role="count_arrFilterCatalog_869_1789237789">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1007586625" class="product-filter__label " for="arrFilterCatalog_869_1007586625">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1007586625" id="arrFilterCatalog_869_1007586625" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шплинт Нониус">Шплинт Нониус&nbsp;(<span data-role="count_arrFilterCatalog_869_1007586625">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2814716462" class="product-filter__label " for="arrFilterCatalog_869_2814716462">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2814716462" id="arrFilterCatalog_869_2814716462" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Штукатурка">Штукатурка&nbsp;(<span data-role="count_arrFilterCatalog_869_2814716462">26</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3576163456" class="product-filter__label " for="arrFilterCatalog_869_3576163456">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3576163456" id="arrFilterCatalog_869_3576163456" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Штукатурка декоративная">Штукатурка декоративная&nbsp;(<span data-role="count_arrFilterCatalog_869_3576163456">5</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_3110147650" class="product-filter__label " for="arrFilterCatalog_869_3110147650">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_3110147650" id="arrFilterCatalog_869_3110147650" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Штукатурно-клеевая смесь">Штукатурно-клеевая смесь&nbsp;(<span data-role="count_arrFilterCatalog_869_3110147650">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_2699552454" class="product-filter__label " for="arrFilterCatalog_869_2699552454">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_2699552454" id="arrFilterCatalog_869_2699552454" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Штукатурный обрызг">Штукатурный обрызг&nbsp;(<span data-role="count_arrFilterCatalog_869_2699552454">1</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_1599548953" class="product-filter__label " for="arrFilterCatalog_869_1599548953">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_1599548953" id="arrFilterCatalog_869_1599548953" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Шуруп">Шуруп&nbsp;(<span data-role="count_arrFilterCatalog_869_1599548953">12</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_759315225" class="product-filter__label " for="arrFilterCatalog_869_759315225">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_759315225" id="arrFilterCatalog_869_759315225" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
                                                        <span class="product-filter__text" title="Щебень">Щебень&nbsp;(<span data-role="count_arrFilterCatalog_869_759315225">2</span>)</span>
                                                    </label>
                                                </div>
                                                <div class="product-filter__field">
                                                    <label data-role="label_arrFilterCatalog_869_910974247" class="product-filter__label " for="arrFilterCatalog_869_910974247">
                                                        <input type="checkbox" value="Y" name="arrFilterCatalog_869_910974247" id="arrFilterCatalog_869_910974247" <?/*onclick="smartFilter.click(this)"*/?> class="product-filter__checkbox"><i class="product-filter__icon-checkbox"></i>
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
                                                                <span class="range__input-label-text">от</span>
                                                                <input class="js-range-input range__input range__input--from" type="text" name="arrFilterCatalog_P1_MIN" id="arrFilterCatalog_P1_MIN" value="" size="5" <?/*onchange="smartFilter.keyup(this)"*/?>>
                                                                <span class="range__input-label">₽</span>
                                                            </div>
                                                        </div>
                                                        <div class="range__value-wrap">
                                                            <div class="range__value-item">
                                                                <span class="range__input-label-text">до</span>
                                                                <input class="js-range-input range__input range__input--to" type="text" name="arrFilterCatalog_P1_MAX" id="arrFilterCatalog_P1_MAX" value="" <?/*onchange="smartFilter.keyup(this)"*/?>>
                                                                <span class="range__input-label">₽</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="range__slider">
                                                        <div class="js-range-slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr" data-min="3" data-max="24000" data-start="3" data-finish="24000" data-step="1"></div>
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
                        <h1 class="h1 cp-heading__title">Каталог</h1>
                    </div>
                </div>
                <div class="gap-md cp-content__item cp-content__top">
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
                                <ul class="list-reset product-sort__list js-sort-list">
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

                <div class="gap-xl cp-content__item" data-entity="container-l">
                    <div <?/*id="catalogContent"*/?> class="cp-content__products">
                        <div class="cp-content__products-item products__wrap" data-entity="container-1" itemscope="" itemtype="https://schema.org/Product">
                            <!-- items-container -->
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new hover" id="bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206" data-entity="item">
                                    <meta itemprop="name" content="Удлинитель профилей 60 х 27 Ветонит (Гипрок)">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="Ветонит (Гипрок)/Vetonit (Gyproc)">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00059461</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=243060" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Удлинитель профилей 60 х 27 Ветонит (Гипрок)" data-img="/upload/iblock/1c9/dohphn06oh1wpap11x3sn1vvia5h7uvz.jpg" data-url="/shop/udlinitel_profiley_60_kh_27_giprok/" id="compareid_243060" onclick="compare_tov(243060);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="243060">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/udlinitel_profiley_60_kh_27_giprok/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/1c9/dohphn06oh1wpap11x3sn1vvia5h7uvz.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-1.png" alt="" class="product-card-new__pic">







                                            <span class="product-card-new__label new">Новинка</span>







                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 55 шт</span>
                                            </div>
                                        </div>



                                        <a href="/shop/udlinitel_profiley_60_kh_27_giprok/" class="product-card-new__title" itemprop="url">Удлинитель профилей 60 х 27 Ветонит (Гипрок)</a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_243060" id="bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_price">18 руб.</span>

                                                            <!--meta itemprop="price" content="18 руб."-->
                                                            <meta itemprop="price" content="18 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_quantity" name="quantity" value="1" step="1" min="1" max1="55" data-basket_btn_id="bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="243060" id="bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_buy_link" data-product-id="243060" data-product-price="18">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206 = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'243060','NAME':'Удлинитель профилей 60 х 27 Ветонит (Гипрок)','DETAIL_PAGE_URL':'/shop/udlinitel_profiley_60_kh_27_giprok/','PICT':{'ID':'2383854','SRC':'/upload/iblock/f03/4945mnlxoj0wa90vn96w335k3qv16i3x.jpg','WIDTH':'1712','HEIGHT':'1529'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'55','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'18','UNROUND_PRICE':'18','BASE_PRICE':'18','PRICE':'18','ID':'331571','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'18 руб.','RATIO_BASE_PRICE':'18','PRINT_RATIO_BASE_PRICE':'18 руб.','PRINT_PRICE':'18 руб.','RATIO_PRICE':'18','PRINT_RATIO_PRICE':'18 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[{'ID':'2383854','SRC':'/upload/iblock/f03/4945mnlxoj0wa90vn96w335k3qv16i3x.jpg','WIDTH':'1712','HEIGHT':'1529'},{'ID':'2383855','SRC':'/upload/iblock/6c9/lxxfr8hh42ifcpfnwm7y4g1k2zwizjl4.jpg','WIDTH':'911','HEIGHT':'645'}],'MORE_PHOTO_COUNT':'2'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206','PICT_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_secondpict','PICT_SLIDER_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_pict_slider','QUANTITY_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_quantity','QUANTITY_UP_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_quant_down','PRICE_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_price','PRICE_OLD_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_price_old','PRICE_TOTAL_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_price_total','BUY_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_buy_link','BASKET_PROP_DIV':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_not_avail','COMPARE_LINK_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_compare_link','SUBSCRIBE_ID':'bx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206)
                                        {
                                            window.obbx_3966226736_243060_7e1b8e3524755c391129a9d7e6f2d206.setCompared('');

                                        }
                                    }));
                                </script>*/?>



                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new hover" id="bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755" data-entity="item">
                                    <meta itemprop="name" content="Соединитель профилей одноуровневый Краб Ветонит (Гипрок) 0,9мм 60 х 27 ">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="Ветонит (Гипрок)/Vetonit (Gyproc)">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00059573</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=243055" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Соединитель профилей одноуровневый Краб Ветонит (Гипрок) 0,9мм 60 х 27 " data-img="/upload/iblock/52a/3spejlr4ff447plddr3aniarnj5theqn.jpg" data-url="/shop/soedinitel_profiley_odnourovnevyy_krab_giprok_0_9mm_60_kh_27_/" id="compareid_243055" onclick="compare_tov(243055);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="243055">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/soedinitel_profiley_odnourovnevyy_krab_giprok_0_9mm_60_kh_27_/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/52a/3spejlr4ff447plddr3aniarnj5theqn.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-2.png" alt="" class="product-card-new__pic">







                                            <span class="product-card-new__label new">Новинка</span>







                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--to-order">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">Под заказ</span>
                                            </div>
                                        </div>



                                        <a href="/shop/soedinitel_profiley_odnourovnevyy_krab_giprok_0_9mm_60_kh_27_/" class="product-card-new__title" itemprop="url">Соединитель профилей одноуровневый Краб Ветонит (Гипрок) 0,9мм 60 х 27 </a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_243055" id="bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_price">55 руб.</span>

                                                            <!--meta itemprop="price" content="55 руб."-->
                                                            <meta itemprop="price" content="55 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_quantity" name="quantity" value="1" step="1" min="1" max1="80" data-basket_btn_id="bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="243055" id="bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_buy_link" data-product-id="243055" data-product-price="55">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_243055_362ce596257894d11ab5c1d73d13c755 = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'243055','NAME':'Соединитель профилей одноуровневый Краб Ветонит (Гипрок) 0,9мм 60 х 27 ','DETAIL_PAGE_URL':'/shop/soedinitel_profiley_odnourovnevyy_krab_giprok_0_9mm_60_kh_27_/','PICT':{'ID':'2383844','SRC':'/upload/iblock/bca/zqzpso22n0qfy0xg8qn0hez8w2osaldj.jpg','WIDTH':'936','HEIGHT':'633'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'80','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'55','UNROUND_PRICE':'55','BASE_PRICE':'55','PRICE':'55','ID':'331641','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'55 руб.','RATIO_BASE_PRICE':'55','PRINT_RATIO_BASE_PRICE':'55 руб.','PRINT_PRICE':'55 руб.','RATIO_PRICE':'55','PRINT_RATIO_PRICE':'55 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[{'ID':'2383844','SRC':'/upload/iblock/bca/zqzpso22n0qfy0xg8qn0hez8w2osaldj.jpg','WIDTH':'936','HEIGHT':'633'},{'ID':'2383845','SRC':'/upload/iblock/799/e07ml7l49ylp1uwvq4tn794u05w2vzoc.jpg','WIDTH':'1000','HEIGHT':'1000'}],'MORE_PHOTO_COUNT':'2'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755','PICT_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_secondpict','PICT_SLIDER_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_pict_slider','QUANTITY_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_quantity','QUANTITY_UP_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_quant_down','PRICE_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_price','PRICE_OLD_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_price_old','PRICE_TOTAL_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_price_total','BUY_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_buy_link','BASKET_PROP_DIV':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_not_avail','COMPARE_LINK_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_compare_link','SUBSCRIBE_ID':'bx_3966226736_243055_362ce596257894d11ab5c1d73d13c755_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_243055_362ce596257894d11ab5c1d73d13c755)
                                        {
                                            window.obbx_3966226736_243055_362ce596257894d11ab5c1d73d13c755.setCompared('');

                                        }
                                    }));
                                </script>*/?>



                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new hover" id="bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b" data-entity="item">
                                    <meta itemprop="name" content="Подвес прямой Ветонит (Гипрок) 0,9мм 60 х 27">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="Ветонит (Гипрок)/Vetonit (Gyproc)">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00059611</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=243056" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Подвес прямой Ветонит (Гипрок) 0,9мм 60 х 27" data-img="/upload/iblock/5a8/9j56nqolgifu5gnoi5fdgp3irvc71j9v.jpg" data-url="/shop/podves_pryamoy_giprok_0_9mm_60_kh_27/" id="compareid_243056" onclick="compare_tov(243056);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="243056">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/podves_pryamoy_giprok_0_9mm_60_kh_27/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/5a8/9j56nqolgifu5gnoi5fdgp3irvc71j9v.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-3.png" alt="" class="product-card-new__pic">







                                            <span class="product-card-new__label new">Новинка</span>







                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 132 шт</span>
                                            </div>
                                        </div>



                                        <a href="/shop/podves_pryamoy_giprok_0_9mm_60_kh_27/" class="product-card-new__title" itemprop="url">Подвес прямой Ветонит (Гипрок) 0,9мм 60 х 27</a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_243056" id="bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_price">23 руб.</span>

                                                            <!--meta itemprop="price" content="23 руб."-->
                                                            <meta itemprop="price" content="23 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_quantity" name="quantity" value="1" step="1" min="1" max1="132" data-basket_btn_id="bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="243056" id="bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_buy_link" data-product-id="243056" data-product-price="23">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'243056','NAME':'Подвес прямой Ветонит (Гипрок) 0,9мм 60 х 27','DETAIL_PAGE_URL':'/shop/podves_pryamoy_giprok_0_9mm_60_kh_27/','PICT':{'ID':'2383860','SRC':'/upload/iblock/5a8/9j56nqolgifu5gnoi5fdgp3irvc71j9v.jpg','WIDTH':'1000','HEIGHT':'1000'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'132','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'23','UNROUND_PRICE':'23','BASE_PRICE':'23','PRICE':'23','ID':'331585','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'23 руб.','RATIO_BASE_PRICE':'23','PRINT_RATIO_BASE_PRICE':'23 руб.','PRINT_PRICE':'23 руб.','RATIO_PRICE':'23','PRINT_RATIO_PRICE':'23 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[false],'MORE_PHOTO_COUNT':'1'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b','PICT_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_secondpict','PICT_SLIDER_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_pict_slider','QUANTITY_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_quantity','QUANTITY_UP_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_quant_down','PRICE_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_price','PRICE_OLD_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_price_old','PRICE_TOTAL_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_price_total','BUY_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_buy_link','BASKET_PROP_DIV':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_not_avail','COMPARE_LINK_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_compare_link','SUBSCRIBE_ID':'bx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b)
                                        {
                                            window.obbx_3966226736_243056_c80764dfaf26ca80162484593ec7c29b.setCompared('');

                                        }
                                    }));
                                </script>*/?>



                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new hover" id="bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e" data-entity="item">
                                    <meta itemprop="name" content="Лента бумажная для швов Ветонит (Гипрок) Марко ПРО 50м">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="Ветонит (Гипрок)/Vetonit (Gyproc)">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00059681</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=243057" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Лента бумажная для швов Ветонит (Гипрок) Марко ПРО 50м" data-img="/upload/iblock/427/cp2g08ax4peaapzpka1hp3iiz11neg92.jpg" data-url="/shop/lenta_bumazhnaya_dlya_shvov_giprok_marko_pro_50m/" id="compareid_243057" onclick="compare_tov(243057);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="243057">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/lenta_bumazhnaya_dlya_shvov_giprok_marko_pro_50m/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/427/cp2g08ax4peaapzpka1hp3iiz11neg92.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-1.png" alt="" class="product-card-new__pic">







                                            <span class="product-card-new__label new">Новинка</span>







                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 22 рул</span>
                                            </div>
                                        </div>



                                        <a href="/shop/lenta_bumazhnaya_dlya_shvov_giprok_marko_pro_50m/" class="product-card-new__title" itemprop="url">Лента бумажная для швов Ветонит (Гипрок) Марко ПРО 50м</a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_243057" id="bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_price">812 руб.</span>

                                                            <!--meta itemprop="price" content="812 руб."-->
                                                            <meta itemprop="price" content="812 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_quantity" name="quantity" value="1" step="1" min="1" max1="22" data-basket_btn_id="bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="243057" id="bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_buy_link" data-product-id="243057" data-product-price="812">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'243057','NAME':'Лента бумажная для швов Ветонит (Гипрок) Марко ПРО 50м','DETAIL_PAGE_URL':'/shop/lenta_bumazhnaya_dlya_shvov_giprok_marko_pro_50m/','PICT':{'ID':'2383846','SRC':'/upload/iblock/427/cp2g08ax4peaapzpka1hp3iiz11neg92.jpg','WIDTH':'1000','HEIGHT':'1000'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'22','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'812','UNROUND_PRICE':'812','BASE_PRICE':'812','PRICE':'812','ID':'331613','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'812 руб.','RATIO_BASE_PRICE':'812','PRINT_RATIO_BASE_PRICE':'812 руб.','PRINT_PRICE':'812 руб.','RATIO_PRICE':'812','PRINT_RATIO_PRICE':'812 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[false],'MORE_PHOTO_COUNT':'1'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e','PICT_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_secondpict','PICT_SLIDER_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_pict_slider','QUANTITY_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_quantity','QUANTITY_UP_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_quant_down','PRICE_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_price','PRICE_OLD_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_price_old','PRICE_TOTAL_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_price_total','BUY_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_buy_link','BASKET_PROP_DIV':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_not_avail','COMPARE_LINK_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_compare_link','SUBSCRIBE_ID':'bx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e)
                                        {
                                            window.obbx_3966226736_243057_d0fb066f64e2309c4b241a491f76c62e.setCompared('');

                                        }
                                    }));
                                </script>*/?>
                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new" id="bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa" data-entity="item">
                                    <meta itemprop="name" content="Клей универсальный Sormat MDF KIT 435 80+400">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="Sormat">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00060470</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=243096" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Клей универсальный Sormat MDF KIT 435 80+400" data-img="/upload/iblock/968/zuus6xcwsuj3ozqi1bjlfc6xs572rqul.jpg" data-url="/shop/kley_universalnyy_sormat_mdf_kit_435_80_400/" id="compareid_243096" onclick="compare_tov(243096);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="243096">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/kley_universalnyy_sormat_mdf_kit_435_80_400/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/968/zuus6xcwsuj3ozqi1bjlfc6xs572rqul.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-2.png" alt="" class="product-card-new__pic">







                                            <span class="product-card-new__label new">Новинка</span>








                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 22 шт</span>
                                            </div>
                                        </div>



                                        <a href="/shop/kley_universalnyy_sormat_mdf_kit_435_80_400/" class="product-card-new__title" itemprop="url">Клей универсальный Sormat MDF KIT 435 80+400</a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_243096" id="bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_price">720 руб.</span>

                                                            <!--meta itemprop="price" content="720 руб."-->
                                                            <meta itemprop="price" content="720 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_quantity" name="quantity" value="1" step="1" min="1" max1="22" data-basket_btn_id="bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="243096" id="bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_buy_link" data-product-id="243096" data-product-price="720">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'243096','NAME':'Клей универсальный Sormat MDF KIT 435 80+400','DETAIL_PAGE_URL':'/shop/kley_universalnyy_sormat_mdf_kit_435_80_400/','PICT':{'ID':'2384516','SRC':'/upload/iblock/0fe/w7qa6ihk3riq31b782d9zwn3ijz51q3x.jpg','WIDTH':'540','HEIGHT':'718'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'22','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'720','UNROUND_PRICE':'720','BASE_PRICE':'720','PRICE':'720','ID':'331823','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'720 руб.','RATIO_BASE_PRICE':'720','PRINT_RATIO_BASE_PRICE':'720 руб.','PRINT_PRICE':'720 руб.','RATIO_PRICE':'720','PRINT_RATIO_PRICE':'720 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[{'ID':'2384516','SRC':'/upload/iblock/0fe/w7qa6ihk3riq31b782d9zwn3ijz51q3x.jpg','WIDTH':'540','HEIGHT':'718'},{'ID':'2384517','SRC':'/upload/iblock/b00/ujy5mfm3mjxgqo9uic7fg3wtmg86jakz.jpg','WIDTH':'560','HEIGHT':'764'}],'MORE_PHOTO_COUNT':'2'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa','PICT_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_secondpict','PICT_SLIDER_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_pict_slider','QUANTITY_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_quantity','QUANTITY_UP_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_quant_down','PRICE_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_price','PRICE_OLD_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_price_old','PRICE_TOTAL_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_price_total','BUY_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_buy_link','BASKET_PROP_DIV':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_not_avail','COMPARE_LINK_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_compare_link','SUBSCRIBE_ID':'bx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa)
                                        {
                                            window.obbx_3966226736_243096_8e8f6cea7f5e44ced2966cbefca3ecfa.setCompared('');

                                        }
                                    }));
                                </script>*/?>
                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new" id="bx_3966226736_237630_0f73996d13437b0b91038138616a89fe" data-entity="item">
                                    <meta itemprop="name" content="Грунт краска КНАУФ Вайсгрунд белая 15кг F">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="KNAUF / КНАУФ">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00057051</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=237630" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Грунт краска КНАУФ Вайсгрунд белая 15кг F" data-img="/upload/iblock/711/01ck790vhujvpuclf9tspo0lg5ecix7a.jpg" data-url="/shop/grunt_kraska_knauf_vaysgrund_belaya_15kg_f/" id="compareid_237630" onclick="compare_tov(237630);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="237630">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/grunt_kraska_knauf_vaysgrund_belaya_15kg_f/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/711/01ck790vhujvpuclf9tspo0lg5ecix7a.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-3.png" alt="" class="product-card-new__pic">







                                            <span class="product-card-new__label new">Новинка</span>








                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 105 шт</span>
                                            </div>
                                        </div>



                                        <a href="/shop/grunt_kraska_knauf_vaysgrund_belaya_15kg_f/" class="product-card-new__title" itemprop="url">Грунт краска КНАУФ Вайсгрунд белая 15кг F</a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_237630" id="bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_price">2 393 руб.</span>

                                                            <!--meta itemprop="price" content="2 393 руб."-->
                                                            <meta itemprop="price" content="2 393 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_quantity" name="quantity" value="1" step="1" min="1" max1="105" data-basket_btn_id="bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="237630" id="bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_buy_link" data-product-id="237630" data-product-price="2393">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_237630_0f73996d13437b0b91038138616a89fe = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'237630','NAME':'Грунт краска КНАУФ Вайсгрунд белая 15кг F','DETAIL_PAGE_URL':'/shop/grunt_kraska_knauf_vaysgrund_belaya_15kg_f/','PICT':{'ID':'2423387','SRC':'/upload/iblock/cb4/ckd274l8gu45mvu6dz048i5ygy20hk1h.jpg','WIDTH':'1153','HEIGHT':'771'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'105','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'2393','UNROUND_PRICE':'2393','BASE_PRICE':'2393','PRICE':'2393','ID':'305054','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'2 393 руб.','RATIO_BASE_PRICE':'2393','PRINT_RATIO_BASE_PRICE':'2 393 руб.','PRINT_PRICE':'2 393 руб.','RATIO_PRICE':'2393','PRINT_RATIO_PRICE':'2 393 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[{'ID':'2423387','SRC':'/upload/iblock/cb4/ckd274l8gu45mvu6dz048i5ygy20hk1h.jpg','WIDTH':'1153','HEIGHT':'771'},{'ID':'2423388','SRC':'/upload/iblock/398/2pdumy74gpktyy08v4pw76pwxoihvcu1.jpg','WIDTH':'1920','HEIGHT':'1408'}],'MORE_PHOTO_COUNT':'2'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe','PICT_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_secondpict','PICT_SLIDER_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_pict_slider','QUANTITY_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_quantity','QUANTITY_UP_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_quant_down','PRICE_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_price','PRICE_OLD_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_price_old','PRICE_TOTAL_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_price_total','BUY_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_buy_link','BASKET_PROP_DIV':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_not_avail','COMPARE_LINK_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_compare_link','SUBSCRIBE_ID':'bx_3966226736_237630_0f73996d13437b0b91038138616a89fe_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_237630_0f73996d13437b0b91038138616a89fe)
                                        {
                                            window.obbx_3966226736_237630_0f73996d13437b0b91038138616a89fe.setCompared('');

                                        }
                                    }));
                                </script>*/?>
                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new" id="bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be" data-entity="item">
                                    <meta itemprop="name" content="Гипсокартон Сапфир КНАУФ 2000 х 1200 х 12,5мм кромка ПЛУК ">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="KNAUF / КНАУФ">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00040331</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=243551" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Гипсокартон Сапфир КНАУФ 2000 х 1200 х 12,5мм кромка ПЛУК " data-img="/upload/iblock/f79/i3etot3aroefd5vqerekgormmskpzket.jpg" data-url="/shop/gipsokarton_sapfir_knauf_2000_kh_1200_kh_12_5mm_kromka_pluk_/" id="compareid_243551" onclick="compare_tov(243551);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="243551">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/gipsokarton_sapfir_knauf_2000_kh_1200_kh_12_5mm_kromka_pluk_/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/f79/i3etot3aroefd5vqerekgormmskpzket.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-1.png" alt="" class="product-card-new__pic">

                                            <span class="product-card-new__label action-label">АКЦИЯ</span>






                                            <span class="product-card-new__label new">Новинка</span>







                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 254 шт</span>
                                            </div>
                                        </div>



                                        <a href="/shop/gipsokarton_sapfir_knauf_2000_kh_1200_kh_12_5mm_kromka_pluk_/" class="product-card-new__title" itemprop="url">Гипсокартон Сапфир КНАУФ 2000 х 1200 х 12,5мм кромка ПЛУК </a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_243551" id="bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_price">884 руб.</span>

                                                            <!--meta itemprop="price" content="884 руб."-->
                                                            <meta itemprop="price" content="884 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_quantity" name="quantity" value="1" step="1" min="1" max1="254" data-basket_btn_id="bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="243551" id="bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_buy_link" data-product-id="243551" data-product-price="884">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'243551','NAME':'Гипсокартон Сапфир КНАУФ 2000 х 1200 х 12,5мм кромка ПЛУК ','DETAIL_PAGE_URL':'/shop/gipsokarton_sapfir_knauf_2000_kh_1200_kh_12_5mm_kromka_pluk_/','PICT':{'ID':'2443856','SRC':'/upload/iblock/cc5/d47iwuddckr08u2a92pc3ofjmkg486io.jpg','WIDTH':'1400','HEIGHT':'900'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'254','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'884','UNROUND_PRICE':'884','BASE_PRICE':'884','PRICE':'884','ID':'335132','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'884 руб.','RATIO_BASE_PRICE':'884','PRINT_RATIO_BASE_PRICE':'884 руб.','PRINT_PRICE':'884 руб.','RATIO_PRICE':'884','PRINT_RATIO_PRICE':'884 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[{'ID':'2443856','SRC':'/upload/iblock/cc5/d47iwuddckr08u2a92pc3ofjmkg486io.jpg','WIDTH':'1400','HEIGHT':'900'},{'ID':'2443857','SRC':'/upload/iblock/28c/0p044t63gw3uv6seuzaeowdb913sxejc.jpg','WIDTH':'1400','HEIGHT':'900'},{'ID':'2443858','SRC':'/upload/iblock/69b/8fl2w28jad35ll4bupge0v6enlzsmupk.jpg','WIDTH':'683','HEIGHT':'512'},{'ID':'2443859','SRC':'/upload/iblock/d39/fk9265e07pz9z74t4zrj1syywyzi8jvh.jpg','WIDTH':'1200','HEIGHT':'900'},{'ID':'2443860','SRC':'/upload/iblock/a98/mpxn3ehe0fh200qbrcpn1lsb05m10jnm.jpg','WIDTH':'1200','HEIGHT':'900'}],'MORE_PHOTO_COUNT':'5'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be','PICT_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_secondpict','PICT_SLIDER_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_pict_slider','QUANTITY_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_quantity','QUANTITY_UP_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_quant_down','PRICE_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_price','PRICE_OLD_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_price_old','PRICE_TOTAL_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_price_total','BUY_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_buy_link','BASKET_PROP_DIV':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_not_avail','COMPARE_LINK_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_compare_link','SUBSCRIBE_ID':'bx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be)
                                        {
                                            window.obbx_3966226736_243551_ec5d0e2cff91ab20debac17d8febe5be.setCompared('');

                                        }
                                    }));
                                </script>*/?>
                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new" id="bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4" data-entity="item">
                                    <meta itemprop="name" content="Гипсокартон КНАУФ Аквамарин повышенной влагостойкости 2000 х 1200 х 12,5мм кромка ПЛУК">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="KNAUF / КНАУФ">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00060521</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=243274" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Гипсокартон КНАУФ Аквамарин повышенной влагостойкости 2000 х 1200 х 12,5мм кромка ПЛУК" data-img="/upload/iblock/3aa/byvfs3t03q0rorl6pxy9gzmsh52zjymj.jpg" data-url="/shop/gipsokarton_knauf_akvamarin_povyshennoy_vlagostoykosti_2000_kh_1200_kh_12_5mm_kromka_pluk/" id="compareid_243274" onclick="compare_tov(243274);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="243274">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/gipsokarton_knauf_akvamarin_povyshennoy_vlagostoykosti_2000_kh_1200_kh_12_5mm_kromka_pluk/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/3aa/byvfs3t03q0rorl6pxy9gzmsh52zjymj.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-2.png" alt="" class="product-card-new__pic">

                                            <span class="product-card-new__label action-label">АКЦИЯ</span>






                                            <span class="product-card-new__label new">Новинка</span>







                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 165 шт</span>
                                            </div>
                                        </div>



                                        <a href="/shop/gipsokarton_knauf_akvamarin_povyshennoy_vlagostoykosti_2000_kh_1200_kh_12_5mm_kromka_pluk/" class="product-card-new__title" itemprop="url">Гипсокартон КНАУФ Аквамарин повышенной влагостойкости 2000 х 1200 х 12,5мм кромка ПЛУК</a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_243274" id="bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_price">793 руб.</span>

                                                            <!--meta itemprop="price" content="793 руб."-->
                                                            <meta itemprop="price" content="793 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_quantity" name="quantity" value="1" step="1" min="1" max1="165" data-basket_btn_id="bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="243274" id="bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_buy_link" data-product-id="243274" data-product-price="793">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4 = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'243274','NAME':'Гипсокартон КНАУФ Аквамарин повышенной влагостойкости 2000 х 1200 х 12,5мм кромка ПЛУК','DETAIL_PAGE_URL':'/shop/gipsokarton_knauf_akvamarin_povyshennoy_vlagostoykosti_2000_kh_1200_kh_12_5mm_kromka_pluk/','PICT':{'ID':'2444454','SRC':'/upload/iblock/cd3/99fqqeo3xpwd5j9pty6jaebv69twz94h.jpg','WIDTH':'800','HEIGHT':'600'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'165','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'793','UNROUND_PRICE':'793','BASE_PRICE':'793','PRICE':'793','ID':'333483','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'793 руб.','RATIO_BASE_PRICE':'793','PRINT_RATIO_BASE_PRICE':'793 руб.','PRINT_PRICE':'793 руб.','RATIO_PRICE':'793','PRINT_RATIO_PRICE':'793 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[{'ID':'2444454','SRC':'/upload/iblock/cd3/99fqqeo3xpwd5j9pty6jaebv69twz94h.jpg','WIDTH':'800','HEIGHT':'600'},{'ID':'2444455','SRC':'/upload/iblock/c57/qdworyp6zyaeo3qcjzxqa0ty5grsck7o.jpg','WIDTH':'800','HEIGHT':'514'},{'ID':'2444456','SRC':'/upload/iblock/222/yjn9mm0c2v4zy2j5vo4p4rlr81k3glnw.jpg','WIDTH':'1920','HEIGHT':'1080'},{'ID':'2444457','SRC':'/upload/iblock/b59/r6hrggmvq05hrcwl5ldsuo5i38gkrlht.jpg','WIDTH':'1400','HEIGHT':'900'}],'MORE_PHOTO_COUNT':'4'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4','PICT_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_secondpict','PICT_SLIDER_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_pict_slider','QUANTITY_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_quantity','QUANTITY_UP_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_quant_down','PRICE_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_price','PRICE_OLD_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_price_old','PRICE_TOTAL_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_price_total','BUY_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_buy_link','BASKET_PROP_DIV':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_not_avail','COMPARE_LINK_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_compare_link','SUBSCRIBE_ID':'bx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4)
                                        {
                                            window.obbx_3966226736_243274_e7e5a53fd4b76e4dce4f311b34c340d4.setCompared('');

                                        }
                                    }));
                                </script>*/?>
                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new" id="bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c" data-entity="item">
                                    <meta itemprop="name" content="Гипсокартон Ветонит (Гипрок) Оптима 2000 х 1200 х 12,5мм кромка PRO">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="Ветонит (Гипрок)/Vetonit (Gyproc)">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00060236</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=243059" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Гипсокартон Ветонит (Гипрок) Оптима 2000 х 1200 х 12,5мм кромка PRO" data-img="/upload/iblock/703/hs9qcajh62nfw9i5u1qek6o4e9j648x3.jpg" data-url="/shop/gipsokarton_giprok_optima_2000_kh_1200_kh_12_5mm_kromka_pro/" id="compareid_243059" onclick="compare_tov(243059);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="243059">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/gipsokarton_giprok_optima_2000_kh_1200_kh_12_5mm_kromka_pro/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/703/hs9qcajh62nfw9i5u1qek6o4e9j648x3.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-3.png" alt="" class="product-card-new__pic">







                                            <span class="product-card-new__label new">Новинка</span>







                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 182 шт</span>
                                            </div>
                                        </div>



                                        <a href="/shop/gipsokarton_giprok_optima_2000_kh_1200_kh_12_5mm_kromka_pro/" class="product-card-new__title" itemprop="url">Гипсокартон Ветонит (Гипрок) Оптима 2000 х 1200 х 12,5мм кромка PRO</a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_243059" id="bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_price">470 руб.</span>

                                                            <!--meta itemprop="price" content="470 руб."-->
                                                            <meta itemprop="price" content="470 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_quantity" name="quantity" value="1" step="1" min="1" max1="182" data-basket_btn_id="bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="243059" id="bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_buy_link" data-product-id="243059" data-product-price="470">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'243059','NAME':'Гипсокартон Ветонит (Гипрок) Оптима 2000 х 1200 х 12,5мм кромка PRO','DETAIL_PAGE_URL':'/shop/gipsokarton_giprok_optima_2000_kh_1200_kh_12_5mm_kromka_pro/','PICT':{'ID':'2383866','SRC':'/upload/iblock/3e5/w8swlbfcqr5xuf8m8bwh6ffdi16ldfou.jpg','WIDTH':'1000','HEIGHT':'1000'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'182','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'470','UNROUND_PRICE':'470','BASE_PRICE':'470','PRICE':'470','ID':'331557','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'470 руб.','RATIO_BASE_PRICE':'470','PRINT_RATIO_BASE_PRICE':'470 руб.','PRINT_PRICE':'470 руб.','RATIO_PRICE':'470','PRINT_RATIO_PRICE':'470 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[{'ID':'2383866','SRC':'/upload/iblock/3e5/w8swlbfcqr5xuf8m8bwh6ffdi16ldfou.jpg','WIDTH':'1000','HEIGHT':'1000'},{'ID':'2383867','SRC':'/upload/iblock/299/zo018ccqjfpmt6zb1hxtbt9w5zdkyc7p.jpg','WIDTH':'1000','HEIGHT':'1000'}],'MORE_PHOTO_COUNT':'2'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c','PICT_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_secondpict','PICT_SLIDER_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_pict_slider','QUANTITY_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_quantity','QUANTITY_UP_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_quant_down','PRICE_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_price','PRICE_OLD_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_price_old','PRICE_TOTAL_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_price_total','BUY_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_buy_link','BASKET_PROP_DIV':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_not_avail','COMPARE_LINK_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_compare_link','SUBSCRIBE_ID':'bx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/*
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c)
                                        {
                                            window.obbx_3966226736_243059_4acf0f176831c66031059fe22bcc4d9c.setCompared('');

                                        }
                                    }));
                                </script>*/?>
                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new" id="bx_3966226736_242659_905587df90578eb4342842ad8de05a16" data-entity="item">
                                    <meta itemprop="name" content="Гипсокартон Ветонит (Гипрок) Аква Оптима 2000 х 1200 х 12,5мм кромка PRO ">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="Ветонит (Гипрок)/Vetonit (Gyproc)">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00060228</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=242659" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Гипсокартон Ветонит (Гипрок) Аква Оптима 2000 х 1200 х 12,5мм кромка PRO " data-img="/upload/iblock/704/z0xha41qeo096w1duaouan1m6efobe5t.jpg" data-url="/shop/gipsokarton_giprok_akva_optima_2000_kh_1200_kh_12_5mm_kromka_pro_/" id="compareid_242659" onclick="compare_tov(242659);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="242659">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/gipsokarton_giprok_akva_optima_2000_kh_1200_kh_12_5mm_kromka_pro_/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/704/z0xha41qeo096w1duaouan1m6efobe5t.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-1.png" alt="" class="product-card-new__pic">







                                            <span class="product-card-new__label new">Новинка</span>







                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 160 шт</span>
                                            </div>
                                        </div>



                                        <a href="/shop/gipsokarton_giprok_akva_optima_2000_kh_1200_kh_12_5mm_kromka_pro_/" class="product-card-new__title" itemprop="url">Гипсокартон Ветонит (Гипрок) Аква Оптима 2000 х 1200 х 12,5мм кромка PRO </a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_242659" id="bx_3966226736_242659_905587df90578eb4342842ad8de05a16_price">501 руб.</span>

                                                            <!--meta itemprop="price" content="501 руб."-->
                                                            <meta itemprop="price" content="501 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_242659_905587df90578eb4342842ad8de05a16_quantity" name="quantity" value="1" step="1" min="1" max1="160" data-basket_btn_id="bx_3966226736_242659_905587df90578eb4342842ad8de05a16_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_242659_905587df90578eb4342842ad8de05a16_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="242659" id="bx_3966226736_242659_905587df90578eb4342842ad8de05a16_buy_link" data-product-id="242659" data-product-price="501">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_242659_905587df90578eb4342842ad8de05a16 = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'242659','NAME':'Гипсокартон Ветонит (Гипрок) Аква Оптима 2000 х 1200 х 12,5мм кромка PRO ','DETAIL_PAGE_URL':'/shop/gipsokarton_giprok_akva_optima_2000_kh_1200_kh_12_5mm_kromka_pro_/','PICT':{'ID':'2376130','SRC':'/upload/iblock/638/p2bu4cnomecbt0qcuet5wjmrvv4byjn9.jpg','WIDTH':'1000','HEIGHT':'1000'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'160','STEP_QUANTITY':'1','QUANTITY_FLOAT':true,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'501','UNROUND_PRICE':'501','BASE_PRICE':'501','PRICE':'501','ID':'329058','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'501 руб.','RATIO_BASE_PRICE':'501','PRINT_RATIO_BASE_PRICE':'501 руб.','PRINT_PRICE':'501 руб.','RATIO_PRICE':'501','PRINT_RATIO_PRICE':'501 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':{'16885':{'ID':'16885','RATIO':'1','IS_DEFAULT':'Y','PRODUCT_ID':'242659'}},'ITEM_MEASURE_RATIO_SELECTED':'16885','MORE_PHOTO':[{'ID':'2376130','SRC':'/upload/iblock/638/p2bu4cnomecbt0qcuet5wjmrvv4byjn9.jpg','WIDTH':'1000','HEIGHT':'1000'},{'ID':'2376131','SRC':'/upload/iblock/a9e/uloss4vrz9ra09q3tanu79iww551bq72.jpg','WIDTH':'1000','HEIGHT':'1000'}],'MORE_PHOTO_COUNT':'2'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16','PICT_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_secondpict','PICT_SLIDER_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_pict_slider','QUANTITY_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_quantity','QUANTITY_UP_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_quant_down','PRICE_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_price','PRICE_OLD_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_price_old','PRICE_TOTAL_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_price_total','BUY_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_buy_link','BASKET_PROP_DIV':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_not_avail','COMPARE_LINK_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_compare_link','SUBSCRIBE_ID':'bx_3966226736_242659_905587df90578eb4342842ad8de05a16_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_242659_905587df90578eb4342842ad8de05a16)
                                        {
                                            window.obbx_3966226736_242659_905587df90578eb4342842ad8de05a16.setCompared('');

                                        }
                                    }));
                                </script>*/?>
                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new" id="bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644" data-entity="item">
                                    <meta itemprop="name" content="Гипсокартон КНАУФ Аквамарин повышенной влагостойкости 2500 х 1200 х 12,5мм кромка ПЛУК">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="KNAUF / КНАУФ">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00055271</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=236291" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Гипсокартон КНАУФ Аквамарин повышенной влагостойкости 2500 х 1200 х 12,5мм кромка ПЛУК" data-img="/upload/iblock/6d5/1udq6ncrkq9n8brff99adrt8xndjp7ho.jpg" data-url="/shop/gipsokarton_knauf_akvamarin_povyshennoy_vlagostoykosti_2500_kh_1200_kh_12_5mm_kromka_pluk/" id="compareid_236291" onclick="compare_tov(236291);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="236291">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/gipsokarton_knauf_akvamarin_povyshennoy_vlagostoykosti_2500_kh_1200_kh_12_5mm_kromka_pluk/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/6d5/1udq6ncrkq9n8brff99adrt8xndjp7ho.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-2.png" alt="" class="product-card-new__pic">

                                            <span class="product-card-new__label action-label">АКЦИЯ</span>






                                            <span class="product-card-new__label new">Новинка</span>







                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 151 шт</span>
                                            </div>
                                        </div>



                                        <a href="/shop/gipsokarton_knauf_akvamarin_povyshennoy_vlagostoykosti_2500_kh_1200_kh_12_5mm_kromka_pluk/" class="product-card-new__title" itemprop="url">Гипсокартон КНАУФ Аквамарин повышенной влагостойкости 2500 х 1200 х 12,5мм кромка ПЛУК</a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_236291" id="bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_price">992 руб.</span>

                                                            <!--meta itemprop="price" content="992 руб."-->
                                                            <meta itemprop="price" content="992 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_quantity" name="quantity" value="1" step="1" min="1" max1="151" data-basket_btn_id="bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="236291" id="bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_buy_link" data-product-id="236291" data-product-price="992">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644 = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'236291','NAME':'Гипсокартон КНАУФ Аквамарин повышенной влагостойкости 2500 х 1200 х 12,5мм кромка ПЛУК','DETAIL_PAGE_URL':'/shop/gipsokarton_knauf_akvamarin_povyshennoy_vlagostoykosti_2500_kh_1200_kh_12_5mm_kromka_pluk/','PICT':{'ID':'2444851','SRC':'/upload/iblock/fc8/jn2wopgpzf9kygwefr6dlfp8d4p8yzk7.jpg','WIDTH':'800','HEIGHT':'600'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'151','STEP_QUANTITY':'1','QUANTITY_FLOAT':true,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'992','UNROUND_PRICE':'992','BASE_PRICE':'992','PRICE':'992','ID':'298141','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'992 руб.','RATIO_BASE_PRICE':'992','PRINT_RATIO_BASE_PRICE':'992 руб.','PRINT_PRICE':'992 руб.','RATIO_PRICE':'992','PRINT_RATIO_PRICE':'992 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':{'16886':{'ID':'16886','RATIO':'1','IS_DEFAULT':'Y','PRODUCT_ID':'236291'}},'ITEM_MEASURE_RATIO_SELECTED':'16886','MORE_PHOTO':[{'ID':'2444851','SRC':'/upload/iblock/fc8/jn2wopgpzf9kygwefr6dlfp8d4p8yzk7.jpg','WIDTH':'800','HEIGHT':'600'},{'ID':'2444852','SRC':'/upload/iblock/d50/7sa12i1yqdf3ceusktm6vl1zvsdvd7ij.jpg','WIDTH':'800','HEIGHT':'600'},{'ID':'2444853','SRC':'/upload/iblock/86a/znwlgn8vxnvb4hcnxn1ew408mewcj9gh.jpg','WIDTH':'800','HEIGHT':'514'},{'ID':'2444854','SRC':'/upload/iblock/687/07wkh2figs7abctu59ks85kxtutxtex7.jpg','WIDTH':'1400','HEIGHT':'900'}],'MORE_PHOTO_COUNT':'4'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644','PICT_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_secondpict','PICT_SLIDER_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_pict_slider','QUANTITY_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_quantity','QUANTITY_UP_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_quant_down','PRICE_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_price','PRICE_OLD_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_price_old','PRICE_TOTAL_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_price_total','BUY_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_buy_link','BASKET_PROP_DIV':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_not_avail','COMPARE_LINK_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_compare_link','SUBSCRIBE_ID':'bx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644)
                                        {
                                            window.obbx_3966226736_236291_de8224b4f7bd52cd619e48f9536ed644.setCompared('');

                                        }
                                    }));
                                </script>*/?>
                            </div>
                            <div class="products__item" data-entity="items-row">


                                <div class="product-card-new" id="bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e" data-entity="item">
                                    <meta itemprop="name" content="Анкер-клин КНАУФ 6х40мм 100шт/упак">
                                    <meta itemprop="description" content="">
                                    <meta itemprop="brand" content="KNAUF / КНАУФ">

                                    <div class="product-card-new__header">
                                        <span class="product-card-new__code">Код: 00-00050300</span>

                                        <div class="product-card-compare__edit-btns">
                                            <div class="product-card-compare__edit-btn-item">

                                                <a href="?action=ADD_TO_COMPARE_LIST&amp;id=242611" class="product-card-compare__compare-btn " data-entity="compare-title" data-name="Анкер-клин КНАУФ 6х40мм 100шт/упак" data-img="/upload/iblock/ad5/qkfd9yz0niikjx3easp1c8ifborb4fue.jpg" data-url="/shop/anker_klin_knauf_6kh40mm_100sht_upak/" id="compareid_242611" onclick="compare_tov(242611);">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M10.9095 0.00010853L19.9301 0V2H10.9095V16H16V18H4V16H9.09136V2H0.0698596V0H9.09136L10.9095 0.00010853ZM3.63682 3.343L6.20773 6.172C6.71626 6.73142 7.06258 7.44415 7.20287 8.22007C7.34316 8.99599 7.27114 9.80024 6.99591 10.5311C6.72068 11.262 6.25459 11.8867 5.6566 12.3262C5.05861 12.7658 4.35556 13.0004 3.63636 13.0004C2.91717 13.0004 2.21412 12.7658 1.61613 12.3262C1.01814 11.8867 0.552054 11.262 0.276821 10.5311C0.00158802 9.80024 -0.0704351 8.99599 0.0698596 8.22007C0.210154 7.44415 0.556466 6.73142 1.065 6.172L3.63682 3.343ZM16.3641 3.343L18.935 6.172C19.4435 6.73142 19.7898 7.44415 19.9301 8.22007C20.0704 8.99599 19.9984 9.80024 19.7232 10.5311C19.4479 11.262 18.9819 11.8867 18.3839 12.3262C17.7859 12.7658 17.0828 13.0004 16.3636 13.0004C15.6444 13.0004 14.9414 12.7658 14.3434 12.3262C13.7454 11.8867 13.2793 11.262 13.0041 10.5311C12.7289 9.80024 12.6568 8.99599 12.7971 8.22007C12.9374 7.44415 13.2837 6.73142 13.7923 6.172L16.3641 3.343ZM3.63682 6.172L2.35136 7.586C2.09703 7.86568 1.92381 8.22205 1.85361 8.61002C1.78341 8.998 1.81939 9.40017 1.95699 9.76565C2.09458 10.1311 2.32762 10.4435 2.62663 10.6633C2.92564 10.8831 3.27719 11.0004 3.63682 11.0004C3.99645 11.0004 4.34799 10.8831 4.647 10.6633C4.94601 10.4435 5.17905 10.1311 5.31665 9.76565C5.45425 9.40017 5.49022 8.998 5.42002 8.61002C5.34983 8.22205 5.17661 7.86568 4.92227 7.586L3.63682 6.172ZM16.3641 6.172L15.0786 7.586C14.8243 7.86568 14.6511 8.22205 14.5809 8.61002C14.5107 8.998 14.5467 9.40017 14.6843 9.76565C14.8219 10.1311 15.0549 10.4435 15.3539 10.6633C15.6529 10.8831 16.0045 11.0004 16.3641 11.0004C16.7237 11.0004 17.0753 10.8831 17.3743 10.6633C17.6733 10.4435 17.9063 10.1311 18.0439 9.76565C18.1815 9.40017 18.2175 8.998 18.1473 8.61002C18.0771 8.22205 17.9039 7.86568 17.6495 7.586L16.3641 6.172Z" fill="#0F0F0F"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="product-card-new__edit-btn-item">
                                                <button class="btn-reset product-card-new__favourite	favourite" data-id="242611">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                                                        <path d="M4 1V16L10 12.6129L16 16V1H4Z" fill="transparent" stroke="black" stroke-width="2"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-card-new__main product-card__main">
                                        <!--a href="/shop/anker_klin_knauf_6kh40mm_100sht_upak/"-->
                                        <div class="product-card-new__pic-wrap">
                                            <!--img src="/upload/iblock/ad5/qkfd9yz0niikjx3easp1c8ifborb4fue.jpg" alt="" class="product-card-new__pic"-->
                                            <img src="img/test-cpi-3.png" alt="" class="product-card-new__pic">







                                            <span class="product-card-new__label new">Новинка</span>








                                            <div class="product-card-new__rating">
                                                <i class="product-card-new__star"></i>
                                                <span class="product-card-new__grade">0</span>
                                            </div>
                                        </div>
                                        <!--/a-->


                                        <div class="product-card-new__availability-wrap">
                                            <div class="product-card-new__availability product-card-new__availability--ok">
                                                <span class="product-card-new__availability-icon"></span>
                                                <span class="product-card-new__availability-text">В наличии: 47 упак</span>
                                            </div>
                                        </div>



                                        <a href="/shop/anker_klin_knauf_6kh40mm_100sht_upak/" class="product-card-new__title" itemprop="url">Анкер-клин КНАУФ 6х40мм 100шт/упак</a>


                                        <div class="product-card-new__characteristics">
                                                                <p>Грузоподъемность: 2000 кг</p>
                                                                <p>Высота подъёма: 80-200 мм</p>
                                                            </div>
                                                            <div class="product-card-new__price-wrap js-tabs-goods">

                                            <div class="product-card-new__nav-block">
                                                <div class="product-card-new__nav-item">
                                                    <button class="btn-reset product-card-new__nav-btn js-tabs-goods-btn js-tabs-goods-btn--active" data-tabs-link="variable1">Цена</button>
                                                </div>
                                            </div>

                                            <div class="product-card-new__tabs-info-wrap qwqwqw">
                                                <div class="product-card-new__tabs-info js-tabs-goods-info1 js-tabs-goods-info--open" data-tabs-id="variable1">
                                                    <ul class="list-reset product-card-new__price">
                                                        <li class="product-card-new__price-option">

                                                            <!--span class="product-card-new__price-value">112 ₽</span-->
                                                            <span class="product-card-new__price-value base_242611" id="bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_price">858 руб.</span>

                                                            <!--meta itemprop="price" content="858 руб."-->
                                                            <meta itemprop="price" content="858 руб.">
                                                            <meta itemprop="priceCurrency" content="RUB">
                                                            <meta itemprop="url" content="">
                                                            <link itemprop="availability" href="http://schema.org/InStock">


                                                        </li>
                                                    </ul>

                                                    <form class="product-card__order product-card-new__order_1 card-form">
                                                        <input type="hidden" name="code" value="">
                                                        <div class="card-form__field js-amount-block">


                                                            <input type="number" class="card-form__input js-amount product_amount" id="bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_quantity" name="quantity" value="1" step="1" min="1" max1="47" data-basket_btn_id="bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_basket_actions">
                                                            <div class="card-form__count-btns">
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-increase">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.21094 11.4766L7.21094 7.21094L11.4766 7.21094C11.9031 7.21094 12.1875 6.92656 12.1875 6.5C12.1875 6.07344 11.9031 5.78906 11.4766 5.78906L7.21094 5.78906L7.21094 1.52344C7.21094 1.09687 6.92656 0.8125 6.5 0.8125C6.07344 0.8125 5.78906 1.09687 5.78906 1.52344L5.78906 5.78906L1.52344 5.78906C1.09687 5.78906 0.8125 6.07344 0.8125 6.5C0.8125 6.92656 1.09687 7.21094 1.52344 7.21094L5.78906 7.21094L5.78906 11.4766C5.78906 11.9031 6.07344 12.1875 6.5 12.1875C6.92656 12.1875 7.21094 11.9031 7.21094 11.4766Z" fill="#1F2D3D"></path>
                                                                    </svg>
                                                                    <span>больше</span>
                                                                </button>
                                                                <button type="button" class="btn-reset card-form__count-btn js-amount-btn js-amount-btn-reduce">
                                                                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect x="12.1875" y="7.3125" width="11.375" height="1.625" rx="0.8125" transform="rotate(-180 12.1875 7.3125)" fill="#1F2D3D"></rect>
                                                                    </svg>
                                                                    <span>меньше</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-form__btn" id="bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_basket_actions">
                                                            <a href="javascript:void(0)" class="btn btn--card-form btn--gray btn_add_basket  product-card-new__btn qqq" data-btn_code="242611" id="bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_buy_link" data-product-id="242611" data-product-price="858">

									<span class="product-card-new__btn-icon">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M14.545 11c.75 0 1.41-.41 1.749-1.03l3.579-6.49a.996.996 0 00-.87-1.48H4.208l-.94-2H0v2h2l3.598 7.59-1.35 2.44c-.73 1.34.23 2.97 1.75 2.97h11.995v-2H5.998l1.1-2h7.447zM5.158 4h12.146l-2.76 5H7.528L5.158 4zm.84 12c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 1.999-.9 1.999-2-.9-2-2-2zm9.996 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" fill="#fff"></path>
										</svg>
									</span>
                                                                В корзину
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


									<?/* скрипт из разметки
                                    <script>
                                        var obbx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e = new JCCatalogItem({'PRODUCT_TYPE':'1','SHOW_QUANTITY':true,'SHOW_ADD_BASKET_BTN':false,'SHOW_BUY_BTN':true,'SHOW_ABSENT':true,'SHOW_OLD_PRICE':true,'ADD_TO_BASKET_ACTION':'ADD','SHOW_CLOSE_POPUP':false,'SHOW_DISCOUNT_PERCENT':false,'DISPLAY_COMPARE':true,'BIG_DATA':false,'TEMPLATE_THEME':'blue','VIEW_MODE':'CARD','USE_SUBSCRIBE':true,'PRODUCT':{'ID':'242611','NAME':'Анкер-клин КНАУФ 6х40мм 100шт/упак','DETAIL_PAGE_URL':'/shop/anker_klin_knauf_6kh40mm_100sht_upak/','PICT':{'ID':'2375483','SRC':'/upload/iblock/c51/w60qs7z2c7oxg40yl6rtdjif2hld9grb.jpg','WIDTH':'800','HEIGHT':'600'},'CAN_BUY':true,'CHECK_QUANTITY':false,'MAX_QUANTITY':'47','STEP_QUANTITY':'1','QUANTITY_FLOAT':false,'ITEM_PRICE_MODE':'S','ITEM_PRICES':[{'UNROUND_BASE_PRICE':'858','UNROUND_PRICE':'858','BASE_PRICE':'858','PRICE':'858','ID':'328637','PRICE_TYPE_ID':'1','CURRENCY':'RUB','DISCOUNT':'0','PERCENT':'0','QUANTITY_FROM':'','QUANTITY_TO':'','QUANTITY_HASH':'ZERO-INF','MEASURE_RATIO_ID':'','PRINT_BASE_PRICE':'858 руб.','RATIO_BASE_PRICE':'858','PRINT_RATIO_BASE_PRICE':'858 руб.','PRINT_PRICE':'858 руб.','RATIO_PRICE':'858','PRINT_RATIO_PRICE':'858 руб.','PRINT_DISCOUNT':'0 руб.','RATIO_DISCOUNT':'0','PRINT_RATIO_DISCOUNT':'0 руб.','MIN_QUANTITY':'1'}],'ITEM_PRICE_SELECTED':'0','ITEM_QUANTITY_RANGES':{'ZERO-INF':{'HASH':'ZERO-INF','QUANTITY_FROM':'','QUANTITY_TO':'','SORT_FROM':'0','SORT_TO':'INF'}},'ITEM_QUANTITY_RANGE_SELECTED':'ZERO-INF','ITEM_MEASURE_RATIOS':[{'ID':'0','RATIO':'1','IS_DEFAULT':'Y'}],'ITEM_MEASURE_RATIO_SELECTED':'0','MORE_PHOTO':[{'ID':'2375483','SRC':'/upload/iblock/c51/w60qs7z2c7oxg40yl6rtdjif2hld9grb.jpg','WIDTH':'800','HEIGHT':'600'},{'ID':'2375484','SRC':'/upload/iblock/39b/rvr5hkn076jugs19guvzzasznokkcv80.jpg','WIDTH':'800','HEIGHT':'600'}],'MORE_PHOTO_COUNT':'2'},'BASKET':{'ADD_PROPS':true,'QUANTITY':'quantity','PROPS':'prop','EMPTY_PROPS':true,'BASKET_URL':'/basket/','ADD_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD2BASKET&id=#ID#','BUY_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=BUY&id=#ID#'},'VISUAL':{'ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e','PICT_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_secondpict','PICT_SLIDER_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_pict_slider','QUANTITY_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_quantity','QUANTITY_UP_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_quant_up','QUANTITY_DOWN_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_quant_down','PRICE_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_price','PRICE_OLD_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_price_old','PRICE_TOTAL_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_price_total','BUY_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_buy_link','BASKET_PROP_DIV':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_basket_prop','BASKET_ACTIONS_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_basket_actions','NOT_AVAILABLE_MESS':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_not_avail','COMPARE_LINK_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_compare_link','SUBSCRIBE_ID':'bx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e_subscribe'},'COMPARE':{'COMPARE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=ADD_TO_COMPARE_LIST&id=#ID#','COMPARE_DELETE_URL_TEMPLATE':'/shop/stroitelnye-materialy/filter/price-base-from-3-to-24000/apply/?is_catalog_ajax=Y&new=Y&action=DELETE_FROM_COMPARE_LIST&id=#ID#','COMPARE_PATH':'/shop/compare.php?action=#ACTION_CODE#'},'PRODUCT_DISPLAY_MODE':'Y','USE_ENHANCED_ECOMMERCE':'Y','DATA_LAYER_NAME':'dataLayer','BRAND_PROPERTY':'','IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED':false});
                                    </script>*/?>
                                </div>
								<?/* скрипт из разметки
                                <script>
                                    BX.ready(BX.defer(function(){
                                        if (!!window.obbx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e)
                                        {
                                            window.obbx_3966226736_242611_bba1b7f7802c6bb351319fcd6fe1262e.setCompared('');

                                        }
                                    }));
                                </script>*/?>
                            </div>
                            <!-- items-container -->
                        </div>

                        <div class="cp-content__products-item products__footer">
                            <div data-pagination-num="1">
                                <!-- pagination-container -->
								<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/pagination.php"); ?>
                                <!-- pagination-container -->
                            </div>
                            <div class="products__btn-more">
                                <div class="btn-more btn-more--large" data-use="show-more-1">
                                    Показать ещё        </div>
                            </div>
                        </div>
						<?/* скрипт из разметки
                        <script>
                            BX.message({
                                BTN_MESSAGE_BASKET_REDIRECT: 'Перейти в корзину',
                                BASKET_URL: '/basket/',
                                ADD_TO_BASKET_OK: 'Товар добавлен в корзину',
                                TITLE_ERROR: 'Ошибка',
                                TITLE_BASKET_PROPS: 'Свойства товара, добавляемые в корзину',
                                TITLE_SUCCESSFUL: 'Товар добавлен в корзину',
                                BASKET_UNKNOWN_ERROR: 'Неизвестная ошибка при добавлении товара в корзину',
                                BTN_MESSAGE_SEND_PROPS: 'Выбрать',
                                BTN_MESSAGE_CLOSE: 'Закрыть',
                                BTN_MESSAGE_CLOSE_POPUP: 'Продолжить покупки',
                                COMPARE_MESSAGE_OK: 'Товар добавлен в список сравнения',
                                COMPARE_UNKNOWN_ERROR: 'При добавлении товара в список сравнения произошла ошибка',
                                COMPARE_TITLE: 'Сравнение товаров',
                                PRICE_TOTAL_PREFIX: 'на сумму',
                                RELATIVE_QUANTITY_MANY: 'много',
                                RELATIVE_QUANTITY_FEW: 'мало',
                                BTN_MESSAGE_COMPARE_REDIRECT: 'Перейти в список сравнения',
                                BTN_MESSAGE_LAZY_LOAD: 'Показать ещё',
                                BTN_MESSAGE_LAZY_LOAD_WAITER: 'Загрузка',
                                SITE_ID: 's1'
                            });
                            var obbx_3966226736_1 = new JCCatalogSectionComponent({
                                siteId: 's1',
                                componentPath: '/bitrix/components/bitrix/catalog.section',
                                navParams: {'NavPageCount':'1','NavPageNomer':'1','NavNum':'1'},
                                deferredLoad: false, // enable it for deferred load
                                initiallyShowHeader: '1',
                                bigData: {'enabled':false},
                                lazyLoad: !!'',
                                loadOnScroll: !!'',
                                template: '.default.c916219c53fe3b83649a4df01f1e324dce5fe45d248f6237a33a097e4d15fcbb',
                                ajaxId: '',
                                parameters: 'YToxMTg6e3M6MTE6IklCTE9DS19UWVBFIjtzOjc6ImNhdGFsb2ciO3M6OToiSUJMT0NLX0lEIjtzOjI6IjE4IjtzOjE4OiJFTEVNRU5UX1NPUlRfRklFTEQiO3M6MTc6IlBST1BFUlRZX1RPX09SREVSIjtzOjE4OiJFTEVNRU5UX1NPUlRfT1JERVIiO3M6MzoiQVNDIjtzOjE5OiJFTEVNRU5UX1NPUlRfRklFTEQyIjtzOjIxOiJQUk9QRVJUWV9QXzFDX2I3Yzc2MTUiO3M6MTk6IkVMRU1FTlRfU09SVF9PUkRFUjIiO3M6NDoiREVTQyI7czoxMzoiUFJPUEVSVFlfQ09ERSI7YToyOntpOjA7czo1OiJTSEFSRSI7aToxO3M6MDoiIjt9czoyMDoiUFJPUEVSVFlfQ09ERV9NT0JJTEUiO2E6MDp7fXM6MTM6Ik1FVEFfS0VZV09SRFMiO3M6MToiLSI7czoxNjoiTUVUQV9ERVNDUklQVElPTiI7czoxOiItIjtzOjEzOiJCUk9XU0VSX1RJVExFIjtzOjE6Ii0iO3M6MTc6IlNFVF9MQVNUX01PRElGSUVEIjtzOjE6Ik4iO3M6MTk6IklOQ0xVREVfU1VCU0VDVElPTlMiO3M6MToiWSI7czoxMDoiQkFTS0VUX1VSTCI7czo4OiIvYmFza2V0LyI7czoxNToiQUNUSU9OX1ZBUklBQkxFIjtzOjY6ImFjdGlvbiI7czoxOToiUFJPRFVDVF9JRF9WQVJJQUJMRSI7czoyOiJpZCI7czoxOToiU0VDVElPTl9JRF9WQVJJQUJMRSI7czoxMDoiU0VDVElPTl9JRCI7czoyNToiUFJPRFVDVF9RVUFOVElUWV9WQVJJQUJMRSI7czowOiIiO3M6MjI6IlBST0RVQ1RfUFJPUFNfVkFSSUFCTEUiO3M6NDoicHJvcCI7czoxMToiRklMVEVSX05BTUUiO3M6MTY6ImFyckZpbHRlckNhdGFsb2ciO3M6MTA6IkNBQ0hFX1RZUEUiO3M6MToiQSI7czoxMDoiQ0FDSEVfVElNRSI7czo0OiIzNjAwIjtzOjEyOiJDQUNIRV9GSUxURVIiO3M6MToiWSI7czoxMjoiQ0FDSEVfR1JPVVBTIjtzOjE6IlkiO3M6OToiU0VUX1RJVExFIjtzOjE6IlkiO3M6MTE6Ik1FU1NBR0VfNDA0IjtzOjA6IiI7czoxNDoiU0VUX1NUQVRVU180MDQiO3M6MToiWSI7czo4OiJTSE9XXzQwNCI7czoxOiJZIjtzOjg6IkZJTEVfNDA0IjtzOjE1OiJwYWdlcy9pbmRleC5waHAiO3M6MTU6IkRJU1BMQVlfQ09NUEFSRSI7czoxOiJZIjtzOjE4OiJQQUdFX0VMRU1FTlRfQ09VTlQiO3M6MjoiNDAiO3M6MTg6IkxJTkVfRUxFTUVOVF9DT1VOVCI7czoxOiI0IjtzOjEwOiJQUklDRV9DT0RFIjthOjI6e2k6MDtzOjQ6IkJBU0UiO2k6MTtzOjY6IlJFVEFJTCI7fXM6MTU6IlVTRV9QUklDRV9DT1VOVCI7czoxOiJOIjtzOjE2OiJTSE9XX1BSSUNFX0NPVU5UIjtzOjE6IjEiO3M6MTc6IlBSSUNFX1ZBVF9JTkNMVURFIjtzOjE6IlkiO3M6MjA6IlVTRV9QUk9EVUNUX1FVQU5USVRZIjtzOjE6IlkiO3M6MjQ6IkFERF9QUk9QRVJUSUVTX1RPX0JBU0tFVCI7czoxOiJZIjtzOjI2OiJQQVJUSUFMX1BST0RVQ1RfUFJPUEVSVElFUyI7czoxOiJZIjtzOjE4OiJQUk9EVUNUX1BST1BFUlRJRVMiO2E6MDp7fXM6MTc6IkRJU1BMQVlfVE9QX1BBR0VSIjtzOjE6IlkiO3M6MjA6IkRJU1BMQVlfQk9UVE9NX1BBR0VSIjtzOjE6IlkiO3M6MTE6IlBBR0VSX1RJVExFIjtzOjEyOiLQotC+0LLQsNGA0YsiO3M6MTc6IlBBR0VSX1NIT1dfQUxXQVlTIjtzOjE6Ik4iO3M6MTQ6IlBBR0VSX1RFTVBMQVRFIjtzOjg6Ii5kZWZhdWx0IjtzOjIwOiJQQUdFUl9ERVNDX05VTUJFUklORyI7czoxOiJOIjtzOjMxOiJQQUdFUl9ERVNDX05VTUJFUklOR19DQUNIRV9USU1FIjtzOjU6IjM2MDAwIjtzOjE0OiJQQUdFUl9TSE9XX0FMTCI7czoxOiJOIjtzOjIyOiJQQUdFUl9CQVNFX0xJTktfRU5BQkxFIjtzOjE6Ik4iO3M6MTU6IlBBR0VSX0JBU0VfTElOSyI7czowOiIiO3M6MTc6IlBBR0VSX1BBUkFNU19OQU1FIjtzOjA6IiI7czo5OiJMQVpZX0xPQUQiO3M6MToiWSI7czoxODoiTUVTU19CVE5fTEFaWV9MT0FEIjtzOjIzOiLQn9C+0LrQsNC30LDRgtGMINC10YnRkSI7czoxNDoiTE9BRF9PTl9TQ1JPTEwiO3M6MToiTiI7czoyMjoiT0ZGRVJTX0NBUlRfUFJPUEVSVElFUyI7YTowOnt9czoxNzoiT0ZGRVJTX0ZJRUxEX0NPREUiO2E6Mjp7aTowO3M6MDoiIjtpOjE7czowOiIiO31zOjIwOiJPRkZFUlNfUFJPUEVSVFlfQ09ERSI7YToyOntpOjA7czowOiIiO2k6MTtzOjA6IiI7fXM6MTc6Ik9GRkVSU19TT1JUX0ZJRUxEIjtzOjQ6InNvcnQiO3M6MTc6Ik9GRkVSU19TT1JUX09SREVSIjtzOjM6ImFzYyI7czoxODoiT0ZGRVJTX1NPUlRfRklFTEQyIjtzOjI6ImlkIjtzOjE4OiJPRkZFUlNfU09SVF9PUkRFUjIiO3M6NDoiZGVzYyI7czoxMjoiT0ZGRVJTX0xJTUlUIjtzOjE6IjAiO3M6MTA6IlNFQ1RJT05fSUQiO3M6NDoiMTI3MSI7czoxMjoiU0VDVElPTl9DT0RFIjtzOjIxOiJzdHJvaXRlbG55ZS1tYXRlcmlhbHkiO3M6MTE6IlNFQ1RJT05fVVJMIjtzOjI2OiIvc2hvcC8jU0VDVElPTl9DT0RFX1BBVEgjLyI7czoxMDoiREVUQUlMX1VSTCI7czoyMToiL3Nob3AvI0VMRU1FTlRfQ09ERSMvIjtzOjI0OiJVU0VfTUFJTl9FTEVNRU5UX1NFQ1RJT04iO3M6MToiTiI7czoxNjoiQ09OVkVSVF9DVVJSRU5DWSI7czoxOiJOIjtzOjExOiJDVVJSRU5DWV9JRCI7czowOiIiO3M6MTg6IkhJREVfTk9UX0FWQUlMQUJMRSI7czoxOiJZIjtzOjI1OiJISURFX05PVF9BVkFJTEFCTEVfT0ZGRVJTIjtzOjE6Ik4iO3M6MTA6IkxBQkVMX1BST1AiO2E6MDp7fXM6MTc6IkxBQkVMX1BST1BfTU9CSUxFIjtzOjA6IiI7czoxOToiTEFCRUxfUFJPUF9QT1NJVElPTiI7czo4OiJ0b3AtbGVmdCI7czoxMzoiQUREX1BJQ1RfUFJPUCI7czo3OiJQSUNUVVJFIjtzOjIwOiJQUk9EVUNUX0RJU1BMQVlfTU9ERSI7czoxOiJZIjtzOjIwOiJQUk9EVUNUX0JMT0NLU19PUkRFUiI7czo1NDoicHJpY2UscHJvcHMsc2t1LHF1YW50aXR5TGltaXQscXVhbnRpdHksYnV0dG9ucyxjb21wYXJlIjtzOjIwOiJQUk9EVUNUX1JPV19WQVJJQU5UUyI7czozMzE6Ilt7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfSx7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfSx7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfSx7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfSx7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfSx7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfSx7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfSx7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfSx7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfSx7J1ZBUklBTlQnOiczJywnQklHX0RBVEEnOmZhbHNlfV0iO3M6MTU6IkVOTEFSR0VfUFJPRFVDVCI7czo2OiJTVFJJQ1QiO3M6MTI6IkVOTEFSR0VfUFJPUCI7czowOiIiO3M6MTE6IlNIT1dfU0xJREVSIjtzOjE6IlkiO3M6MTU6IlNMSURFUl9JTlRFUlZBTCI7czo0OiIzMDAwIjtzOjE1OiJTTElERVJfUFJPR1JFU1MiO3M6MToiTiI7czoxOToiT0ZGRVJfQUREX1BJQ1RfUFJPUCI7czoxOiItIjtzOjE2OiJPRkZFUl9UUkVFX1BST1BTIjthOjA6e31zOjIwOiJQUk9EVUNUX1NVQlNDUklQVElPTiI7czoxOiJZIjtzOjIxOiJTSE9XX0RJU0NPVU5UX1BFUkNFTlQiO3M6MToiTiI7czoyNToiRElTQ09VTlRfUEVSQ0VOVF9QT1NJVElPTiI7czowOiIiO3M6MTQ6IlNIT1dfT0xEX1BSSUNFIjtzOjE6IlkiO3M6MTc6IlNIT1dfTUFYX1FVQU5USVRZIjtzOjE6Ik4iO3M6MjI6Ik1FU1NfU0hPV19NQVhfUVVBTlRJVFkiO3M6MDoiIjtzOjI0OiJSRUxBVElWRV9RVUFOVElUWV9GQUNUT1IiO3M6MDoiIjtzOjI3OiJNRVNTX1JFTEFUSVZFX1FVQU5USVRZX01BTlkiO3M6MDoiIjtzOjI2OiJNRVNTX1JFTEFUSVZFX1FVQU5USVRZX0ZFVyI7czowOiIiO3M6MTI6Ik1FU1NfQlROX0JVWSI7czoxMjoi0JrRg9C/0LjRgtGMIjtzOjIyOiJNRVNTX0JUTl9BRERfVE9fQkFTS0VUIjtzOjE3OiLQkiDQutC+0YDQt9C40L3RgyI7czoxODoiTUVTU19CVE5fU1VCU0NSSUJFIjtzOjIyOiLQn9C+0LTQv9C40YHQsNGC0YzRgdGPIjtzOjE1OiJNRVNTX0JUTl9ERVRBSUwiO3M6MTg6ItCf0L7QtNGA0L7QsdC90LXQtSI7czoxODoiTUVTU19OT1RfQVZBSUxBQkxFIjtzOjI0OiLQndC10YIg0LIg0L3QsNC70LjRh9C40LgiO3M6MTY6Ik1FU1NfQlROX0NPTVBBUkUiO3M6MTg6ItCh0YDQsNCy0L3QtdC90LjQtSI7czoyMjoiVVNFX0VOSEFOQ0VEX0VDT01NRVJDRSI7czoxOiJZIjtzOjE1OiJEQVRBX0xBWUVSX05BTUUiO3M6OToiZGF0YUxheWVyIjtzOjE0OiJCUkFORF9QUk9QRVJUWSI7czoxOiItIjtzOjE0OiJURU1QTEFURV9USEVNRSI7czo0OiJibHVlIjtzOjE4OiJBRERfU0VDVElPTlNfQ0hBSU4iO3M6MToiTiI7czoyMDoiQUREX1RPX0JBU0tFVF9BQ1RJT04iO3M6MzoiQUREIjtzOjE2OiJTSE9XX0NMT1NFX1BPUFVQIjtzOjE6Ik4iO3M6MTI6IkNPTVBBUkVfUEFUSCI7czozODoiL3Nob3AvY29tcGFyZS5waHA/YWN0aW9uPSNBQ1RJT05fQ09ERSMiO3M6MTI6IkNPTVBBUkVfTkFNRSI7czowOiIiO3M6MTY6IlVTRV9DT01QQVJFX0xJU1QiO3M6MToiWSI7czoxNjoiQkFDS0dST1VORF9JTUFHRSI7czoxOiItIjtzOjE1OiJDT01QQVRJQkxFX01PREUiO3M6MToiWSI7czoyODoiRElTQUJMRV9JTklUX0pTX0lOX0NPTVBPTkVOVCI7czoxOiJOIjtzOjE3OiJDVVJSRU5UX0JBU0VfUEFHRSI7czo5MjoiL3Nob3Avc3Ryb2l0ZWxueWUtbWF0ZXJpYWx5L2ZpbHRlci9wcmljZS1iYXNlLWZyb20tMy10by0yNDAwMC9hcHBseS8/aXNfY2F0YWxvZ19hamF4PVkmbmV3PVkiO3M6MTE6IlBBUkVOVF9OQU1FIjtzOjE0OiJiaXRyaXg6Y2F0YWxvZyI7czoyMDoiUEFSRU5UX1RFTVBMQVRFX05BTUUiO3M6NzoiY2F0YWxvZyI7czoyMDoiUEFSRU5UX1RFTVBMQVRFX1BBR0UiO3M6Nzoic2VjdGlvbiI7czoxMzoiR0xPQkFMX0ZJTFRFUiI7YTozOntzOjE2OiI+Q0FUQUxPR19QUklDRV8xIjtpOjA7czoxNzoiPjxDQVRBTE9HX1BSSUNFXzEiO2E6Mjp7aTowO3M6MToiMyI7aToxO3M6NToiMjQwMDAiO31pOjA7YToyOntzOjEzOiIhUFJPUEVSVFlfTkVXIjtiOjA7czo1OiJMT0dJQyI7czoyOiJPUiI7fX19.dd9786b63170b98b2c361a78f4d13e4bb1299940e51415d088e0f72258643028',
                                container: 'container-1'
                            });
                        </script>*/?>
                        <!-- component-end -->
						<?/* скрипт из разметки
                        <script>
                            BX.Currency.setCurrencies([{'CURRENCY':'BYN','FORMAT':{'FORMAT_STRING':'# руб.','DEC_POINT':'.','THOUSANDS_SEP':' ','DECIMALS':2,'THOUSANDS_VARIANT':'S','HIDE_ZERO':'Y'}},{'CURRENCY':'EUR','FORMAT':{'FORMAT_STRING':'&euro;#','DEC_POINT':'.','THOUSANDS_SEP':',','DECIMALS':2,'THOUSANDS_VARIANT':'C','HIDE_ZERO':'Y'}},{'CURRENCY':'RUB','FORMAT':{'FORMAT_STRING':'# руб.','DEC_POINT':'.','THOUSANDS_SEP':' ','DECIMALS':2,'THOUSANDS_VARIANT':'S','HIDE_ZERO':'Y'}},{'CURRENCY':'UAH','FORMAT':{'FORMAT_STRING':'# грн.','DEC_POINT':'.','THOUSANDS_SEP':' ','DECIMALS':2,'THOUSANDS_VARIANT':'S','HIDE_ZERO':'Y'}},{'CURRENCY':'USD','FORMAT':{'FORMAT_STRING':'$#','DEC_POINT':'.','THOUSANDS_SEP':',','DECIMALS':2,'THOUSANDS_VARIANT':'C','HIDE_ZERO':'Y'}}]);
                        </script>*/?>
						<?/* скрипт из разметки
                        <script>
                            BX('catalog_total').innerHTML = '12';
                        </script>*/?>
                    </div>
                </div>

                <div class="cp-content__item">
                    <div class="cp-content__info">В зависимости от назначения, условий строительства и эксплуатации зданий и сооружений подбираются соответствующие строительные материалы, которые обладают определёнными качествами и защитными свойствами от воздействия на них различной внешней среды. Учитывая эти особенности, любой строительный материал должен обладать определёнными строительно-техническими свойствами. Например, материал для наружных стен зданий должен обладать наименьшей теплопроводностью при достаточной прочности, чтобы защищать помещение от потерь тепла; материал сооружения гидромелиоративного назначения — водонепроницаемостью и стойкостью к попеременному увлажнению и высыханию; материал для покрытия дорог (асфальт, бетон) должен иметь достаточную прочность и малую истираемость, чтобы выдержать нагрузки от транспорта.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="light-bgc block">
        <div class="container">
            <section class="brands-promo">
            <div class="inner brands-promo__inner">
                <div class="brands-promo__row row">
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_orion.png" alt="Петромикс" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Петромикс</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_ozon.png" alt="Fiberon" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Fiberon</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_dyadyavanya.png" alt="Sormat " class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Sormat </div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_orion.png" alt="МАТЕРИК" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">МАТЕРИК</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_ozon.png" alt="Сибртех" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Сибртех</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_dyadyavanya.png" alt="Момент" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Момент</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_orion.png" alt="ЕвроАэроБетон" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">ЕвроАэроБетон</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_ozon.png" alt="ЛСР" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">ЛСР</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_dyadyavanya.png" alt="Основит" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Основит</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_orion.png" alt="Реал" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Реал</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_ozon.png" alt="Крепс" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Крепс</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_dyadyavanya.png" alt="Стенофон" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Стенофон</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_orion.png" alt="Пеноплэкс" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Пеноплэкс</div>
                        </a>
                    </div>
                    <div class="brands-promo__col col">
                        <a href="#" class="brands-promo__item">
                            <div class="brands-promo__picture-wrap"><img src="img/partner_ozon.png" alt="Евроцемент" class="brands-promo__picture"></div>
                            <div class="brands-promo__name">Евроцемент</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>

    <div class="light-bgc block">
        <div class="container">
            <section class="useful">
                <div class="useful__inner inner js-tabs">
                    <div class="block-header block-header--align-end">
                        <div class="block-header__main">
                            <h2 class="h2 block-header__title">Полезное</h2>
                        </div>
                        <div class="block-header__btn-more">
                            <a href="/articles/" class="btn-more btn-more--large">Смотреть все</a>
                        </div>
                    </div>

                    <div class="useful__content js-tabs-info js-tabs-info--open" data-tabs-id="all">
                        <div class="useful__list">
                            <div class="useful__item">
                                <div class="article-card">
                                    <a href="/articles/stenovye-materialy-izdeliya-iz-betona/-kirpich-vozvodim-dom/" class="article-card__visual">
                                        <img src="img/test-cai-1.png" alt="" class="article-card__pic">
                                    </a>
                                    <div class="article-card__content">
                                        <strong class="article-card__title">
                                            <a href="/articles/stenovye-materialy-izdeliya-iz-betona/-kirpich-vozvodim-dom/">  Кирпич: возводим дом</a>
                                        </strong>
                                        <div class="article-card__text">
                                            <p>При строительстве домов вне зависимости от типа климата кирпич остается  самым востребованным материалом. Перед возведением дома из кирпича  необходимо провести исследования на местности с целью определения типа  грунта, места расположения уровня грунтовых вод.</p>
                                        </div>
                                        <a href="/articles/stenovye-materialy-izdeliya-iz-betona/-kirpich-vozvodim-dom/" class="article-card__more">Читать</a>
                                    </div>
                                </div>
                            </div>
                            <div class="useful__item">
                                <div class="article-card">
                                    <a href="/articles/lakokrasochnye-materialy/-kraska-dlya-naruzhnykh-rabot-zashchita-fasada-/" class="article-card__visual">
                                        <img src="img/test-cai-2.png" alt="" class="article-card__pic">
                                    </a>
                                    <div class="article-card__content">
                                        <strong class="article-card__title">
                                            <a href="/articles/lakokrasochnye-materialy/-kraska-dlya-naruzhnykh-rabot-zashchita-fasada-/">  Краска для наружных работ: защита фасада </a>
                                        </strong>
                                        <div class="article-card__text">
                                            <p>Фасадная краска часто определяет не только внешний вид здания, но и его  устойчивость к воздействиям атмосферных явлений, механическим  повреждениям. Качество краски для наружных работ строгое следование  рекомендациям по ее использованию позволяют продлить срок службы фасада  дома.</p>
                                        </div>
                                        <a href="/articles/lakokrasochnye-materialy/-kraska-dlya-naruzhnykh-rabot-zashchita-fasada-/" class="article-card__more">Читать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products__mobile-btn">
                        <a href="/articles/" class="btn-more">Смотреть все</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>