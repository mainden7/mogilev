<div class="top-bread">
    <ul>
        <li><a href="#">Главная </a></li>
        <li><a href="#">Блоки ячеистые</a></li>
        <li><a href="#">Блоки из ячеистого бетона стеновые первой категории</a></li>
    </ul>
</div>
<section id="product">
    <div class="content wrapper">
        <div class="product-img">
            <div class="price-label">
                <div class="price-label-border"><img src="<?php echo base_url() ?>application/resources/user_resources/image/price.svg" alt=""/></div>
                <p>от <span>3000 </span>р/м3</p>
            </div><img src="<?php echo base_url() ?>application/resources/user_resources/image/<?php echo $data['product']['image'] ?>" alt=""/>
            <div class="notation"><a href="#">Скачать полный прайс-лист продукции</a></div>
        </div>
        <div class="product-info">
            <h2><?php echo $data['product']['name'] ?></h2>
            <p><?php echo $data['product']['description'] ?></p>
                <form action="<?php echo base_url() ?>user/add_to_cart" method="POST">
                    <div class="range density-range">
                        <div class="caption">
            <p>Плотность бетона</p>
        </div>
        <div class="range-labels">
            <ul class="wrapper">
                <li>
                    <p>D400</p>
                </li>
                <li>
                    <p>D500</p>
                </li>
                <li>
                    <p>D600</p>
                </li>
            </ul>
        </div>
        <input id="density" name='density' type="range" min="0" max="99" step="1" value=""/>
        <div class="range-min">
            <p>Наименьшая</p>
        </div>
        <div class="range-max">
            <p>Наибольшая</p>
        </div>
    </div>
    <div class="select">
        <div class="caption">
            <p>Выберите размер (ДхШхВ)</p>
        </div>
        <div class="select-wrapper">
            <div class="select-arrow"></div>
            <select name="size">
                <option value="">191 х 291 х 592</option>
                <option value="">192 х 292 х 593</option>
            </select>
        </div>
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
                <div class="headline">
                    <p>Область применения:</p>
                </div>
                <p>Используется в строительстве для кладки несущих стен до пяти этажей или в каркасно-монолитных домах без ограничения этажности, а также для кладки внутренних стен и перегородок.  </p>
            </div>
            <div class="right-sidebar">
                <div class="download-instr"><a href="#">Скачать инструкцию к товару</a></div>
            </div>
        </div>
        <div class="char-table block-3-table">
            <div class="shadow-wrapper">
                <table>
                    <tr>
                        <td class="caption" colspan="2">
                            <div id="mark-table-left"></div>
                            <p>Показатель</p>
                        </td>
                        <td class="top-row" colspan="7">
                            <table>
                                <tr>
                                    <td class="head" colspan="7">
                                        <p>Значение показателя для марки по средней плотности</p>
                                    </td>
                                </tr>
                                <tr class="table-mark">
                                    <td class="custom">
                                        <p>D350</p>
                                    </td>
                                    <td>
                                        <p>D400</p>
                                    </td>
                                    <td class="custom">
                                        <p>D450</p>
                                    </td>
                                    <td>
                                        <p>D500</p>
                                    </td>
                                    <td class="custom">
                                        <p>D550</p>
                                    </td>
                                    <td>
                                        <p>D600</p>
                                    </td>
                                    <td class="custom">
                                        <p>D700</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Средняя плотность в сухом состоянии, кг/м3</p>
                        </td>
                        <td>
                            <p>326-375</p>
                        </td>
                        <td>
                            <p>376–425</p>
                        </td>
                        <td>
                            <p>426–475</p>
                        </td>
                        <td>
                            <p>476–525</p>
                        </td>
                        <td>
                            <p>526–575</p>
                        </td>
                        <td>
                            <p>576–625</p>
                        </td>
                        <td>
                            <p>676–725</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Класс бетона по прочности на сжатие</p>
                        </td>
                        <td>
                            <p>В 1,5</p>
                        </td>
                        <td>
                            <p>В1,5</p>
                            <p>В2,0</p>
                            <p>B2,5</p>
                        </td>
                        <td>
                            <p>В1,5</p>
                            <p>В2,0</p>
                        </td>
                        <td>
                            <p>В2,0</p>
                            <p>В2,5</p>
                            <p>B3,5</p>
                        </td>
                        <td>
                            <p>В2,5</p>
                        </td>
                        <td>
                            <p>В2,5</p>
                            <p>В3,5</p>
                        </td>
                        <td>
                            <p>В3,5</p>
                            <p>В5,0</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Прочность на сжатие, МПа, не менее</p>
                        </td>
                        <td>
                            <p>1,62</p>
                        </td>
                        <td>
                            <p>1,62</p>
                            <p>2,16</p>
                        </td>
                        <td>
                            <p>1,62</p>
                            <p>2,16</p>
                        </td>
                        <td>
                            <p>2,16</p>
                            <p>2,70</p>
                            <p>3,78</p>
                        </td>
                        <td>
                            <p>2,70</p>
                        </td>
                        <td>
                            <p>2,70</p>
                            <p>3,78</p>
                        </td>
                        <td>
                            <p>3,78</p>
                            <p>5,40</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Марка по морозостойкости</p>
                        </td>
                        <td>
                            <p>F25</p>
                        </td>
                        <td>
                            <p>F25</p>
                        </td>
                        <td>
                            <p>F25</p>
                            <p>F35</p>
                        </td>
                        <td>
                            <p>F25</p>
                            <p>F35</p>
                        </td>
                        <td>
                            <p>F35</p>
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
                            <p>Коэффициент теплопроводности в сухом состоянии, Вт/(м·ºС)</p>
                        </td>
                        <td>
                            <p>0,09</p>
                        </td>
                        <td>
                            <p>0,10</p>
                        </td>
                        <td>
                            <p>0,11</p>
                        </td>
                        <td>
                            <p>0,12</p>
                        </td>
                        <td>
                            <p>0,13</p>
                        </td>
                        <td>
                            <p>0,14</p>
                        </td>
                        <td>
                            <p>0,18</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Усадка, мм/м, не более</p>
                        </td>
                        <td colspan="7">
                            <p>0,5</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Отпускная влажность, % по массе, не более</p>
                        </td>
                        <td colspan="7">
                            <p>25</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>УЭАЕР, Бк/кг, не более</p>
                        </td>
                        <td colspan="7">
                            <p>370</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Отклонения от размеров, мм</p>
                        </td>
                        <td colspan="7">
                            <p>±1,0</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Группа горючести по ГОСТ 30244</p>
                        </td>
                        <td colspan="7">
                            <p>НГ (негорючие)</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="center-content">
            <div class="notation">
                <p>Под заказ</p>
            </div>
            <div class="nb">
                <div class="caption">
                    <p>Нестандартные размеры</p>
                </div>
                <p>По согласованию с заказчиком допускается изготовление изделий нестандартных размеров.</p>
            </div>
            <div class="pack">
                <div class="caption">
                    <p>Упаковка:</p>
                </div>
                <p>Навалом.</p>
            </div>
            <div class="example">
                <div class="caption">
                    <p>Пример условного обозначения: 191×291×592–2,5–550–35–3 СТБ 1117–98</p>
                </div>
                <p>Расшифровка маркировки</p>
                <ul>
                    <li>
                        <p><span>191×291×592 </span>- размер блока, мм (длина×ширина×высота);</p>
                    </li>
                    <li>
                        <p><span>2,5 </span>– класс по прочности на сжатие – В2,5;</p>
                    </li>
                    <li>
                        <p><span>550 </span>– марка по средней плотности ячеистого бетона – D500;</p>
                    </li>
                    <li>
                        <p><span>35 </span>– марка по морозостойкости – F35;</p>
                    </li>
                    <li>
                        <p><span>3 </span>– категория блока;</p>
                    </li>
                    <li>
                        <p><span>СТБ 1117–98 </span>– обозначение стандарта, по которому выпускается продукция.</p>
                    </li>
                </ul>
            </div>
            <div class="quality">
                <div class="caption">
                    <p>Качество</p>
                </div>
                <p>Качество продукции подтверждено сертификатами соответствия. На предприятии внедрена система менеджмента качества в соответствии с требованиями стандарта СТБ ISO 9001:2009.</p><img src="<?php echo base_url() ?>application/resources/user_resources/image/gost-icons.png" alt=""/>
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
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product1.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Точность размеров</p>
                    </div>
                    <p>Высокая геометрическая точность минимизирует потери тепла через кладочные швы и снижает расход клеевого раствора.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product2.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Экономичность</p>
                    </div>
                    <p>Большие габариты, небольшая масса и простота монтажа, позволяют ускорить процесс застройки.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product3.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Прочность</p>
                    </div>
                    <p>Автоклавная обработка придает блокам высокую прочность, что обеспечивает долговечность и устойчивость к сильным морозам и перепадам температур .</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product4.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Легкий вес</p>
                    </div>
                    <p>Снижает трудозатраты и скорость строительства. Легкость позволяет снизить нагрузку на фундамент и каркас здания.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product5.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Энергосбережение</p>
                    </div>
                    <p>Низкая теплопроводность, поддерживает комфортную температуру в помещении,           и снижает затраты на дополнительную теплоизоляцию</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product6.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Универсальность</p>
                    </div>
                    <p>Идеально подходят для строительства всех видов наружных и внутренних стен. Легко поддается механической обработке.</p>
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
        <h2>С блоками покупают</h2>
        <div class="items">
            <ul>
                <li><a href="#">
                        <div class="item-text">
                            <p>Перемычки</p>
                        </div>
                        <div class="item-image"><img src="<?php echo base_url() ?>application/resources/user_resources/image/products-blocks.jpg" alt=""/></div></a></li>
                <li><a href="#">
                        <div class="item-text">
                            <p>Сухие смеси</p>
                        </div>
                        <div class="item-image"><img src="<?php echo base_url() ?>application/resources/user_resources/image/products-bricks.jpg" alt=""/></div></a></li>
            </ul>
        </div>
    </div>
</section>