<div class="top-bread">
    <ul>
        <li><a href="#">Главная</a></li>
        <li><a href="#">Блоки ячеистые</a></li>
    </ul>
</div>
<section id="catalog">
    <div class="content">
        <h2>Блоки ячеистые</h2>
    </div>
    <div class="descr">
        <p>Блоки из ячеистого бетона стеновые (газосиликатные блоки) предназначены для кладки наружных, внутренних стен, стен подвалов и перегородок зданий.</p>
    </div>
    <div class="items">
        <ul>
            <?php foreach ($data['products'] AS $product){ ?>
                <li><a href="<?php echo base_url() ?>user/product/<?php echo $product['id'] ?>">
                        <div class="item-image"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/<?php echo $product['image'] ?>" alt=""/></div>
                        <div class="item-text">
                            <p><?php echo $product['name'] ?></p>
                        </div></a></li>
            <?php } ?>
<!--            <li><a href="#">-->
<!--                    <div class="item-image"><img src="--><?php //echo base_url(); ?><!--application/resources/user_resources/image/products-blocks.jpg" alt=""/></div>-->
<!--                    <div class="item-text">-->
<!--                        <p>Стеновые блоки первой категории</p>-->
<!--                    </div></a></li>-->
<!--            <li><a href="#">-->
<!--                    <div class="item-image"><img src="--><?php //echo base_url(); ?><!--application/resources/user_resources/image/products-blocks.jpg" alt=""/></div>-->
<!--                    <div class="item-text">-->
<!--                        <p>Стеновые блоки третьей категории</p>-->
<!--                    </div></a></li>-->
<!--            <li><a href="#">-->
<!--                    <div class="item-image"><img src="--><?php //echo base_url(); ?><!--application/resources/user_resources/image/block-paz.jpg" alt=""/></div>-->
<!--                    <div class="item-text">-->
<!--                        <p>Стеновые блоки с системой паз-гребень</p>-->
<!--                    </div></a></li>-->
<!--            <li><a href="#">-->
<!--                    <div class="item-image"><img src="--><?php //echo base_url(); ?><!--application/resources/user_resources/image/peregorod.png" alt=""/></div>-->
<!--                    <div class="item-text">-->
<!--                        <p>Перегородочные блоки первой/третьей категории</p>-->
<!--                    </div></a></li>-->
        </ul>
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
        <ul class="wrapper">
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product1.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Точность размеров</p>
                    </div>
                    <p>Высокая геометрическая точность минимизирует потери тепла через кладочные швы и снижает расход клеевого раствора.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product2.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Экономичность</p>
                    </div>
                    <p>Большие габариты, небольшая масса и простота монтажа, позволяют ускорить процесс застройки.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product3.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Прочность</p>
                    </div>
                    <p>Автоклавная обработка придает блокам высокую прочность, что обеспечивает долговечность и устойчивость к сильным морозам и перепадам температур.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product4.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Легкий вес</p>
                    </div>
                    <p>Снижает трудозатраты и скорость строительства. Легкость позволяет снизить нагрузку на фундамент и каркас здания.</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product5.svg" alt=""/></div>
                <div class="prod-features-text">
                    <div class="headline">
                        <p>Энергосбережение</p>
                    </div>
                    <p>Низкая теплопроводность, поддерживает комфортную температуру в помещении,           и снижает затраты на дополнительную теплоизоляцию</p>
                </div>
            </li>
            <li>
                <div class="prod-features-img"><img src="<?php echo base_url(); ?>application/resources/user_resources/image/product6.svg" alt=""/></div>
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