<div class="top-bread">
    <ul>
        <li><a href="#">Главная</a></li>
        <li><a href="#">Блоки ячеистые</a></li>
        <li><a href="#">Блоки из ячеистого бетона стеновые первой категории</a></li>
    </ul>
</div>
<section id="product">
    <div class="content">
        <div class="product-img">
            <div class="price-label">
                <div class="price-label-border"><img src="<?php echo base_url() ?>application/resources/user_resources/image/price.svg" alt=""/></div>
                <p><span>35.00 </span>руб/шт</p>
            </div><img src="<?php echo base_url() ?>application/resources/user_resources/image/brick.jpg" alt=""/>
            <div class="notation"><a href="#">Скачать полный прайс-лист продукции</a></div>
        </div>
        <div class="product-info">
            <h2><?php echo $data['product']['name'] ?></h2>
            <p><?php echo $data['product']['description'] ?></p>
                <form action="<?php echo base_url() ?>user/add_to_cart" method="POST">
                    <div class="radio brick-type">
                        <div class="caption">
            <p>Тип</p>
        </div>
        <input id="brick-type" name='type' type="checkbox" value="11"/>
        <p>Рядовой (2-х пустотный)</p>
        <label for="brick-type"></label>
        <p>Лицевой (11-х пустотный)</p>
    </div>
    <div class="radio brick-height">
        <div class="caption">
            <p>Высота, мм</p>
        </div>
        <input id="bricck-height" name="height" type="checkbox" value="2"/>
        <p>88</p>
        <label for="brick-height"></label>
        <p>138</p>
    </div>
    <div class="range">
        <div class="range-labels">
            <div class="caption">
                <p>Длина, мм</p>
            </div>
            <p>250</p>
        </div>
    </div>
    <div class="range">
        <div class="caption">
            <p>Ширина, мм</p>
        </div>
        <p>120</p>
    </div>
    <div class="radio">
        <div class="caption">
            <p>Цвет</p>
        </div>
        <div class="colors">
            <label for="color-white" class="white active"></label>
            <input type="radio" name="color" value="white" id="color-white">
            <label for="color-yellow" class="yellow"></label>
            <input type="radio" name="color" value="yellow" id="color-yellow">
            <label for="color-red" class="red"></label>
            <input type="radio" name="color" value="red" id="color-red">
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
        <div class="char-table" id="brick-table">
            <div class="shadow-wrapper">
                <table class="brick-table">
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
                                        <p>Кирпич лицевой 11-ти пустотный (высота 138)</p>
                                    </td>
                                    <td>
                                        <p>Кирпич лицевой 11-ти пустотный (высота 88)</p>
                                    </td>
                                    <td>
                                        <p>Кирпич рядовой 2-х пустотный (высота 88)</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Размеры, мм</p>
                        </td>
                        <td>
                            <p>250×120×138</p>
                        </td>
                        <td>
                            <p>250×120*88</p>
                        </td>
                        <td>
                            <p>250×120*88</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Марка по прочности</p>
                        </td>
                        <td>
                            <p>150, 200</p>
                        </td>
                        <td>
                            <p>150, 200, 250</p>
                        </td>
                        <td>
                            <p>150, 200, 250</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Предел прочности при сжатии, МПа, не менее</p>
                        </td>
                        <td>
                            <p>15,0; 20,0</p>
                        </td>
                        <td>
                            <p>15,0; 20,0; 25,0</p>
                        </td>
                        <td>
                            <p>15,0; 20,0; 25,0</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Предел прочности при изгибе,МПа, не менее</p>
                        </td>
                        <td>
                            <p>1,5; 1,8</p>
                        </td>
                        <td>
                            <p>1,8; 2,0</p>
                        </td>
                        <td>
                            <p>1,8; 2,0</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Марка по морозостойкости</p>
                        </td>
                        <td>
                            <p>F35, F50</p>
                        </td>
                        <td>
                            <p>F35, F50</p>
                        </td>
                        <td>
                            <p>F35, F50</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Водопоглощение, %, не менее</p>
                        </td>
                        <td>
                            <p>6</p>
                        </td>
                        <td>
                            <p>6</p>
                        </td>
                        <td>
                            <p>6</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Масса (в сухом состоянии), кг, не более</p>
                        </td>
                        <td>
                            <p>6,0</p>
                        </td>
                        <td>
                            <p>4,3</p>
                        </td>
                        <td>
                            <p>4,3</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Влажность, %</p>
                        </td>
                        <td>
                            <p>3–5</p>
                        </td>
                        <td>
                            <p>3–5</p>
                        </td>
                        <td>
                            <p>3–5</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Пустотность, %</p>
                        </td>
                        <td>
                            <p>22–24</p>
                        </td>
                        <td>
                            <p>18–20</p>
                        </td>
                        <td>
                            <p>18</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Коэффициент теплопроводности, Вт/(м•ºС) (фрагмент бесшовной кладки)</p>
                        </td>
                        <td>
                            <p>0,691</p>
                        </td>
                        <td>
                            <p>0,698</p>
                        </td>
                        <td>
                            <p>0,856</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Средняя плотность, кг/м3</p>
                        </td>
                        <td>
                            <p>1450</p>
                        </td>
                        <td>
                            <p>1450</p>
                        </td>
                        <td>
                            <p>1630</p>
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
                        <td>
                            <p>370</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="caption" colspan="2">
                            <p>Группа горючести по ГОСТ 30244</p>
                        </td>
                        <td colspan="3">
                            <p>НГ (негорючие)</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="center-content">
            <div class="example">
                <div class="caption">
                    <p>Пример условного обозначения: СУЛ–250/50 СТБ 1228–2000</p>
                </div>
                <p>Расшифровка маркировки</p>
                <ul>
                    <li>
                        <p><span>СУЛ </span>- буквенное обозначение продукции – КИРПИЧ СИЛИКАТНЫЙ ЛИЦЕВОЙ/РЯДОВОЙ/УТОЛЩЕННЫЙ;</p>
                    </li>
                    <li>
                        <p><span>250 </span>марка по прочности;</p>
                    </li>
                    <li>
                        <p><span>50 </span>- марка по морозостойкости – F50;</p>
                    </li>
                    <li>
                        <p><span>СТБ 1228–2000 </span>- обозначение стандарта, по которому выпускается продукция</p>
                    </li>
                </ul>
                <p>Пример условного обозначения: 2ПБ 225–15–3,5 700 СТБ 1332–2002</p>
            </div>
            <div class="quality">
                <div class="caption">
                    <p>Качество</p>
                </div>
                <p>Качество продукции подтверждено сертификатами соответствия.</p>
                <p>На предприятии внедрена система менеджмента качества в соответствии с требованиями стандарта СТБ ISO</p><img src="<?php echo base_url() ?>application/resources/user_resources/image/gost-icons.png" alt=""/>
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
        <h2>Особенности наших кирпичей</h2>
        <ul>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product1.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Точность размеров</p>
                    </div>
                    <p>Предельные отклонения наших изделий от номинальных размеров и геометрической формы не превышают 1 мм.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product2.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Звукоизоляция</p>
                    </div>
                    <p>Большие габариты, небольшая масса и простота монтажа, позволяют ускорить процесс застройки.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product3.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Прочноть</p>
                    </div>
                    <p>М200–М250</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product14.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>ОГНЕ- и МОРОЗОСТОЙКОСТЬ</p>
                    </div>
                    <p>F50</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product5.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Энергосбережение</p>
                    </div>
                    <p>Низкая теплопроводность, поддерживает комфортную температуру в помещении, и снижает затраты на дополнительную теплоизоляцию</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url() ?>application/resources/user_resources/image/product12.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Экологичность</p>
                    </div>
                    <p>Экологическая чистота позволяет использовать изделие не только для наружных, но и для внутренних работ.</p>
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
        <h2>С кирпичем покупают</h2>
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