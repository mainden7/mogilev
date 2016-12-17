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
                <div class="price-label-border"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/price.svg" alt=""/></div>
                <p><span>35.00 </span>руб/шт</p>
            </div><img src="<?php echo base_url(); ?>application/resources/user_resources/image/kley.jpg" alt=""/>
            <div class="notation"><a href="#">Скачать полный прайс-лист продукции</a></div>
        </div>
        <div class="product-info">
            <h2><?php echo $data['product']['name'] ?></h2>
            <p><?php echo htmlspecialchars_decode($data['product']['description']) ?></p>
                <form action="<?php echo base_url() ?>user/add_to_cart" method="POST">
                    <div class="radio kley-sostav">
                        <div class="caption">
            <p>Клеевой состав</p>
        </div>
        <input id="brick-type" name="type" type="checkbox" value="11"/>
        <p>К21/1</p>
        <label for="brick-type"></label>
        <p>К21/2(с противоморозной добавкой)</p>
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
                <p>Клеевой состав расфасован в мешки по 25 кг. На поддоне 1м×1,2м – 1000 кг (40 мешков). Срок клеевая смесь предназначена для кладки блоков из ячеистого бетона со строго выдержанными геометрическими размерами и формой (допуск по размерам ±1–2 мм). Свойства материала позволяют укладывать блоки с небольшой толщиной шва (2–3 мм), получить однородную с точки зрения теплоизоляции стену и предотвратить ее промерзание через швы.</p>
                <p>Клеевой состав подходит также для укладки керамзитобетонных блоков и других штучных стеновых материалов, устранения дефектов (неровности, выбоины, сколы) в них. Используется как внутри, так и снаружи зданий.</p>
            </div>
            <div class="right-sidebar">
                <div class="download-instr"><a href="#">Скачать инструкцию к товару</a></div>
            </div>
        </div>
        <div class="char-table">
            <table class="kley-table">
                <tr>
                    <td class="caption" colspan="2">
                        <p>Показатель</p>
                    </td>
                    <td class="top-row">
                        <table>
                            <tr>
                                <td class="head">
                                    <p>Характеристики</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Основа</p>
                    </td>
                    <td>
                        <p>Смесь цемента с минеральными наполнителями и полимерными модификаторами</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Цвет</p>
                    </td>
                    <td>
                        <p>серый</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Максимальная фракция, мм</p>
                    </td>
                    <td>
                        <p>0,63</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Влажность, %, не более</p>
                    </td>
                    <td>
                        <p>0,3</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Насыпная плотность, кг/м³</p>
                    </td>
                    <td>
                        <p>1500...1600</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Средняя плотность раствора, кг/м³</p>
                    </td>
                    <td>
                        <p>1600...1700</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Работоспособность после смешивания с водой, мин</p>
                    </td>
                    <td>
                        <p>90...120 (РСС 21/1)</p>
                        <p>30 (РСС 21/2)</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Срок конца схватывания, ч, не более</p>
                    </td>
                    <td>
                        <p>24</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Температура проведения работ, °С</p>
                    </td>
                    <td>
                        <p>+5...+25 (РСС 21/1)</p>
                        <p>–10...+5 (РСС 21/2)</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Толщина шва, мм</p>
                    </td>
                    <td>
                        <p>2...3</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Водоудерживающая способность, %</p>
                    </td>
                    <td>
                        <p>≥ 99</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Марка по консистенции</p>
                    </td>
                    <td>
                        <p>К2</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Консистенция по диаметру расплыва конуса, см</p>
                    </td>
                    <td>
                        <p>14…18</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Группа по сохраняемости консистенции</p>
                    </td>
                    <td>
                        <p>St-4</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Время сохранения марки по консистенции, мин, не менее</p>
                    </td>
                    <td>
                        <p>90</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Марка по прочности</p>
                    </td>
                    <td>
                        <p>М100</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Прочность на сжатие в возрасте 28 суток, МПа, не менее</p>
                    </td>
                    <td>
                        <p>10</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Марка по адгезии</p>
                    </td>
                    <td>
                        <p>А0,8</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Прочность сцепления с бетонным основанием в возрасте 28 суток, МПа, не менее</p>
                    </td>
                    <td>
                        <p>0,8</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Марка по морозостойкости</p>
                    </td>
                    <td>
                        <p>F75</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Морозостойкость, циклов, не менее</p>
                    </td>
                    <td>
                        <p>75</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Открытое время, мин, не менее</p>
                    </td>
                    <td>
                        <p>10</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Время корректировки, мин, не менее</p>
                    </td>
                    <td>
                        <p>5</p>
                    </td>
                </tr>
                <tr>
                    <td class="caption" colspan="2">
                        <p>Ориентировочный расход смеси, кг/м²/мм</p>
                    </td>
                    <td>
                        <p>1,6...1,8 (около 25 кг на 1м³ блоков)</p>
                    </td>
                </tr>
            </table>
        </div>
        <div class="note">
            <p>Указанные параметры действительны при температуре воздуха 20°С и относительной влажности 60%.</p>
            <p>В реальных условиях строительства возможны отклонения в зависимости от методов работы и температурно-влажностных характеристик.</p>
        </div>
        <div class="center-content">
            <div class="pack">
                <div class="caption">
                    <p>Упаковка, хранение и транспортирование:</p>
                </div>
                <p>Клеевой состав расфасован в мешки по 25 кг. На поддоне 1м×1,2м – 1000 кг (40 мешков). Срок хранения в фирменной неповрежденной упаковке в сухом помещении при температуре от +5 до +25°С – 12 месяцев от даты изготовления. При транспортировании в открытом транспорте защищать от попадания атмосферных осадков.</p>
            </div>
            <div class="nb-slides">
                <ul>
                    <li>
                        <div class="caption">
                            <p>Подготовка поверхности</p>
                        </div>
                        <div class="nb-text">
                            <p>Все поверхности, на которые наносится клеевой состав, должны иметь температуру от +5 до +25°С. Основание должно быть ровным, прочным, чистым, не содержать грязи, пыли, наледи, масляных пятен, краски, частиц, способных ухудшить адгезию клеевого состава к основанию. Осыпающиеся и непрочные участки поверхности необходимо удалить. Поверхность блоков перед нанесением клеевого состава следует увлажнить небольшим количеством воды.</p>
                        </div>
                    </li>
                    <li>
                        <div class="caption">
                            <p>Подготовка клеевого состава</p>
                        </div>
                        <div class="nb-text">
                            <p>Все поверхности, на которые наносится клеевой состав, должны иметь температуру от +5 до +25°С. Основание должно быть ровным, прочным, чистым, не содержать грязи, пыли, наледи, масляных пятен, краски, частиц, способных ухудшить адгезию клеевого состава к основанию. Осыпающиеся и непрочные участки поверхности необходимо удалить. Поверхность блоков перед нанесением клеевого состава следует увлажнить небольшим количеством воды.</p>
                        </div>
                    </li>
                    <li>
                        <div class="caption">
                            <p>Выполнение работ</p>
                        </div>
                        <div class="nb-text">
                            <p>Все поверхности, на которые наносится клеевой состав, должны иметь температуру от +5 до +25°С. Основание должно быть ровным, прочным, чистым, не содержать грязи, пыли, наледи, масляных пятен, краски, частиц, способных ухудшить адгезию клеевого состава к основанию. Осыпающиеся и непрочные участки поверхности необходимо удалить. Поверхность блоков перед нанесением клеевого состава следует увлажнить небольшим количеством воды.</p>
                        </div>
                    </li>
                    <li>
                        <div class="caption">
                            <p>Предосторожности</p>
                        </div>
                        <div class="nb-text">
                            <p>Все поверхности, на которые наносится клеевой состав, должны иметь температуру от +5 до +25°С. Основание должно быть ровным, прочным, чистым, не содержать грязи, пыли, наледи, масляных пятен, краски, частиц, способных ухудшить адгезию клеевого состава к основанию. Осыпающиеся и непрочные участки поверхности необходимо удалить. Поверхность блоков перед нанесением клеевого состава следует увлажнить небольшим количеством воды.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="kley-winter-descr">
                <div class="caption">
                    <p>КЛЕЕВОЙ СОСТАВ ДЛЯ КЛАДКИ БЛОКОВ ИЗ ЯЧЕИСТОГО БЕТОНА ЗИМНИЙ К21/2 (С ПРОТИВОМОРОЗНОЙ ДОБАВКОЙ)</p>
                </div>
                <p>В зимних условиях, при температуре воздуха ниже +5°С, необходимо использовать зимние клеевые составы, в которые добавлены специальные противоморозные добавки. Предназначены для использования в зимних условиях до минус 10°С. Мешки с такими смесями отмечены специальной маркировкой.</p>
            </div>
            <div class="extra-instr">
                <div class="caption">
                    <p>Дополнительные инструкции по использованию:</p>
                </div>
                <p>Кроме указанного в инструкции, при использовании зимнего клеевого состава следует также принимать во внимание следующее:</p>
                <ul>
                    <li>
                        <p>хранить мешки со смесями в отапливаемом помещении;</p>
                    </li>
                    <li>
                        <p>использовать теплую воду (макс. 60°С) и смешивать клеевой состав в теплом помещении;</p>
                    </li>
                    <li>
                        <p>температура готовой смеси должна превышать +10°С;</p>
                    </li>
                    <li>
                        <p>до и после использования держать используемый инструмент в теплой воде, изолировать  посуду, использованную для приготовления клеевого состава и по возможности защищать рабочее место от ветра;</p>
                    </li>
                    <li>
                        <p>время использования подогретой смеси составляет 30 минут;</p>
                    </li>
                    <li>
                        <p>используемые в кладке блоки не должны быть замерзшими, заснеженными или мокрыми;</p>
                    </li>
                    <li>
                        <p>блоки желательно предварительно подогреть хотя бы до температуры +1°С.</p>
                    </li>
                </ul>
            </div>
            <div class="warning">
                <div class="caption">
                    <p>ВНИМАНИЕ!</p>
                </div>
                <p>Приведенная информация определяет область применения материала и способ проведения работ, но при этом не может заменить соответствующей подготовки исполнителя работ. Следует руководствоваться действующими нормативами в строительстве. Изготовитель не несет ответственность за неправильное использование материала, а также за применение его в целях и условиях, не предусмотренных инструкцией.</p>
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
        <h2>Особенности наших смесей</h2>
        <ul>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product7.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Прочность сцепления</p>
                    </div>
                    <p>Наши смеси обладают высокой прочностью сцепления с блоками из ячеистого бетона.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product8.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Экономичность</p>
                    </div>
                    <p>Возможность выполнения кладки                          с минимальной толщиной шва;</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product9.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Водостойкость</p>
                    </div>
                    <p>Автоклавная обработка придает блокам высокую прочность, что обеспечивает долговечность и устойчивость к сильным морозам и перепадам температур .</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product10.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Морозостойкость</p>
                    </div>
                    <p>Снижает трудозатраты и скорость строительства. Легкость позволяет снизить нагрузку на фундамент и каркас здания.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product11.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Простота использования</p>
                    </div>
                    <p>С сухими смесями могут работать как профессионалы, так и рядовые любители, никогда ранее не осуществлявшие ремонтные работы.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product12.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Экологичность</p>
                    </div>
                    <p>Экологическая чистота позволяет использовать смеси не только для наружных, но и для внутренних работ.</p>
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
        <h2>Со смесями покупают</h2>
        <div class="items">
            <ul>
                <li><a href="#">
                        <div class="item-text">
                            <p>Стеновые блоки</p>
                        </div>
                        <div class="item-image"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/products-blocks.jpg" alt=""/></div></a></li>
                <li><a href="#">
                        <div class="item-text">
                            <p>Перемычки</p>
                        </div>
                        <div class="item-image"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/peremichka.jpg" alt=""/></div></a></li>
            </ul>
        </div>
    </div>
</section>