<div class="top-bread">
    <ul>
        <li><a href="#">Главная</a></li>
        <li><a href="#">Перемычки армированные из ячеистого бетона</a></li>
    </ul>
</div>
<section id="product">
    <div class="content">
        <div class="product-img">
            <div class="price-label">
                <div class="price-label-border"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/price.svg" alt=""/></div>
                <p><span>35.00 </span>руб/шт</p>
            </div><img src="<?php echo base_url(); ?>application/resources/user_resources/image/peremichka.jpg" alt=""/>
            <div class="notation"><a href="#">Скачать полный прайс-лист продукции</a></div>
        </div>
        <div class="product-info">
            <h2>Перемычки армированные из ячеистого бетона</h2>
            <p>Перемычки из автоклавного газобетона предназначены для перекрытия проемов в наружных и внутренних стенах из мелких ячеистобетонных блоков жилых и общественных зданий.
                <form action="<?php echo base_url() ?>user/add_to_cart" method="POST">
                    <div class="radio">
                        <div class="caption">
            <p>Нагрузка, кН/м</p>
        </div>
        <input id="perem-pression" name="pression" type="checkbox" value="2"/>
        <p>5</p>
        <label for="perem-pression"></label>
        <p>2</p>
    </div>
    <div class="range density-range">
        <div class="range-labels">
            <div class="caption">
                <p>Длина, мм</p>
            </div>
            <ul class="wrapper">
                <li>
                    <p>1100</p>
                </li>
                <li>
                    <p>1300</p>
                </li>
                <li>
                    <p>1500</p>
                </li>
                <li>
                    <p>1750</p>
                </li>
                <li>
                    <p>2000</p>
                </li>
                <li>
                    <p>2250</p>
                </li>
                <li>
                    <p>2500</p>
                </li>
            </ul>
        </div>
        <input class="density" name='density' type="range" min="0" max="99" step="1" value="D500"/>
        <div class="range-min">
            <p>Наименьшая</p>
        </div>
        <div class="range-max">
            <p>Наибольшая</p>
        </div>
    </div>
    <div class="range width-range">
        <div class="caption">
            <p>Ширина</p>
        </div>
        <div class="range-labels">
            <ul class="wrapper">
                <li>
                    <p>75</p>
                </li>
                <li>
                    <p>100</p>
                </li>
                <li>
                    <p>120</p>
                </li>
                <li>
                    <p>125</p>
                </li>
                <li>
                    <p>150</p>
                </li>
                <li>
                    <p>170</p>
                </li>
            </ul>
        </div>
        <input class="width" name="width" type="range" min="0" max="99" step="1" value="170"/>
        <div class="range-min">
            <p>Наименьшая</p>
        </div>
        <div class="range-max">
            <p>Наибольшая</p>
        </div>
    </div>
    <div class="radio">
        <div class="caption">
            <p>Высота, мм</p>
        </div>
        <p>250</p>
    </div><a class="add-to-app-btn" href="#">Добавить к заявке</a>
    </form>
    </p>
    </div>
    </div>
</section>
<section id="product-tech-char">
    <div class="content">
        <div class="wrapper">
            <div class="center-content">
                <h2>Техническик характеристики</h2>
                <div class="product-advantages"></div>
                <div class="headline">
                    <p>Область применения:</p>
                </div>
                <p>Применяются в несущих и самонесущих стенах здания до пяти этажей включительно, но не более 15 м, в ненесущих – без ограничения этажности.</p>
            </div>
            <div class="right-sidebar">
                <div class="download-instr"><a href="#">Скачать инструкцию к товару</a></div>
            </div>
        </div>
        <div class="char-table" id="peremichka-table">
            <div class="shadow-wrapper">
                <table class="peremichka-table">
                    <tr>
                        <td class="caption" colspan="2">
                            <div id="mark-table-left"></div>
                            <p>Показатель</p>
                        </td>
                        <td class="top-row" colspan="7">
                            <table>
                                <tr>
                                    <td class="head" colspan="7">
                                        <p>Значение показателя</p>
                                    </td>
                                </tr>
                                <tr class="headline">
                                    <td>
                                        <p>Перемычка брусковая ненесущая</p>
                                    </td>
                                    <td>
                                        <p>Перемычка брусковая несущая</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="size-row">
                        <td class="caption" colspan="2">
                            <p>Размеры, мм</p>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="length-row">
                        <td class="caption" colspan="2">
                            <p>длина</p>
                        </td>
                        <td>
                            <p>1100; 1300; 1500; 1750; 2250; 2500</p>
                        </td>
                        <td>
                            <p>1100; 1300; 1500; 1750; 2250; 2500</p>
                        </td>
                    </tr>
                    <tr class="width-row">
                        <td class="caption" colspan="2">
                            <p>ширина</p>
                        </td>
                        <td>
                            <p>100; 150; 200; 250</p>
                        </td>
                        <td>
                            <p>100; 150; 200; 250</p>
                        </td>
                    </tr>
                    <tr class="height-row">
                        <td class="caption" colspan="2">
                            <p>высота</p>
                        </td>
                        <td>
                            <p>250</p>
                        </td>
                        <td>
                            <p>250</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Расчетная нагрузка, кН/м</p>
                        </td>
                        <td>
                            <p>до 2</p>
                        </td>
                        <td>
                            <p>до 15</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Класс бетона по прочности</p>
                        </td>
                        <td>
                            <p>В3,5</p>
                        </td>
                        <td>
                            <p>В3,5</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Прочность бетона на сжатие, МПа, не менее</p>
                        </td>
                        <td>
                            <p>3,78</p>
                        </td>
                        <td>
                            <p>3,78</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Марка бетона по средней плотности</p>
                        </td>
                        <td>
                            <p>D700</p>
                        </td>
                        <td>
                            <p>D700</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Плотность бетона, кг/м3</p>
                        </td>
                        <td>
                            <p>650–749</p>
                        </td>
                        <td>
                            <p>650–749</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Марка по морозостойкости</p>
                        </td>
                        <td>
                            <p>F35</p>
                        </td>
                        <td>
                            <p>F35</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Отпускная влажность бетона, %, не более</p>
                        </td>
                        <td>
                            <p>25</p>
                        </td>
                        <td>
                            <p>25</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Масса перемычки, кг</p>
                        </td>
                        <td>
                            <p>24,7–140,5</p>
                        </td>
                        <td>
                            <p>38,2–145,7</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Коэффициент теплопроводности в сухом состоянии, Вт/(м·ºС)</p>
                        </td>
                        <td>
                            <p>0,18</p>
                        </td>
                        <td>
                            <p>0,18</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Усадка, мм/м, не более</p>
                        </td>
                        <td>
                            <p>0,5</p>
                        </td>
                        <td>
                            <p>0,5</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>УЭАЕР, Бк/кг, не более</p>
                        </td>
                        <td>
                            <p>370</p>
                        </td>
                        <td>
                            <p>370</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Предел огнестойкости</p>
                        </td>
                        <td>
                            <p>RE90</p>
                        </td>
                        <td>
                            <p>RE90</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="center-content">
            <div class="notation">
                <p>- масса брусковых перемычек указана с учетом средней влажности 25% и веса арматурных изделий.</p>
            </div>
            <div class="primechanie">
                <div class="caption">
                    <p>Примечание:</p>
                </div>
                <p>Знак на торцевой грани перемычки указывает ее проектное положение. Глубина опирания несущих перемычек – не менее 250 мм, ненесущих – не менее 150 мм.</p>
            </div>
            <div class="pack">
                <div class="caption">
                    <p>Упаковка:</p>
                </div>
                <p>Деревянные поддоны типа ПВ2-1, ПВ2-2 (европоддон) с жесткой фиксацией металлической или полипропиленовой лентой.</p>
            </div>
            <div class="example">
                <div class="caption">
                    <p>Пример условного обозначения: 2ПБ 225–15–3,5 700 СТБ 1332–2002</p>
                </div>
                <p>Расшифровка маркировки</p>
                <ul>
                    <li>
                        <p>первая цифра - цифровое обозначение типоразмера перемычки:</p>
                        <p>1-й типоразмер (В*Н) - 100*250;</p>
                        <p>2-й типоразмер (В*Н) - 150*250;</p>
                        <p>3-й типоразмер (В*Н) - 200*250;</p>
                        <p>4-й типоразмер (В*Н) - 250*250;</p>
                    </li>
                    <li>
                        <p><span>ПБ </span>- буквенное обозначение типа перемычки - ПЕРЕМЫЧКА БРУСКОВАЯ;</p>
                    </li>
                    <li>
                        <p><span>2 </span>- ненесущая (полезная нагрузка без учета собственного веса до 2 кН/м);</p>
                    </li>
                    <li>
                        <p><span>15 </span>- несущая (полезная нагрузка без учета собственного веса до 15 кН/м);</p>
                    </li>
                    <li>
                        <p><span>3,5  </span>- цифровое обозначение класса ячеистого бетона по прочности на сжатие - В3,5;</p>
                    </li>
                    <li>
                        <p><span>700  </span>- марка по средней плотности ячеистого бетона - D700;</p>
                    </li>
                </ul>
                <p>Пример условного обозначения: 2ПБ 225–15–3,5 700 СТБ 1332–2002</p>
            </div>
            <div class="quality">
                <div class="caption">
                    <p>Качество</p>
                </div>
                <p>Качество продукции подтверждено сертификатами соответствия. На предприятии внедрена система менеджмента качества в соответствии с требованиями стандарта СТБ ISO 9001:2009.</p><img src="<?php echo base_url(); ?>application/resources/user_resources/image/gost-icons.png" alt=""/>
            </div>
        </div>
    </div>
</section>
<section id="product-features">
    <div class="content">
        <ul class="wrapper">
            <li>
                <div class="caption">
                    <p>Доставляем авто и ж/д транспортом</p>
                </div>
                <div class="notation"><a href="#">Подробней о доставке</a></div>
            </li>
            <li>
                <div class="caption">
                    <p>Упаковываем во влагозащитную пленку</p>
                </div>
                <div class="notation"><a href="#">Подробней об упаковке</a></div>
            </li>
            <li>
                <div class="caption">
                    <p>Качество подтверждено сертификатами</p>
                </div>
                <div class="notation"><a href="#">Смотреть сертификаты</a></div>
            </li>
        </ul>
    </div>
</section>
<section id="blocks-features">
    <div class="content">
        <h2>Особенности наших блоков</h2>
        <ul>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product1.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Точность размеров</p>
                    </div>
                    <p>Высокая геометрическая точность создает идеальное соотношение размеров перемычек и стен, что значительно упрощает монтаж</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product5.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Энергосбережение</p>
                    </div>
                    <p>Благодаря ячеистой структуре наши перемычки не создают мостиков холода, в отличии от перемычек из железобетонна.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product3.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Прочность</p>
                    </div>
                    <p>Высокие прочностные характеристики позволяют выдерживать нагрузки до 15 кН/м</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product4.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Легкий вес</p>
                    </div>
                    <p>Перемычки монтируются в ручную и не требуются специальные подъёмные механизмы, что снижает трудозатраты и скорость строительства.</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section id="buy-with">
    <div class="content">
        <div class="sec-logo">
            <p>+</p>
        </div>
        <h2>С перемычками покупают</h2>
        <div class="items">
            <ul>
                <li><a href="#">
                        <div class="item-text">
                            <p>Перемычки</p>
                        </div>
                        <div class="item-image"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/products-blocks.jpg" alt=""/></div></a></li>
                <li><a href="#">
                        <div class="item-text">
                            <p>Сухие смеси</p>
                        </div>
                        <div class="item-image"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/products-bricks.jpg" alt=""/></div></a></li>
            </ul>
        </div>
    </div>
</section>