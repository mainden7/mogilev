<aside>
    <div class="logo">
        <a href="/"><img src="<?php echo isset($data['main_settings']['logo']) ? '/application/resources/user_resources/image/'.$data['main_settings']['logo'] : '/application/resources/user_resources/image/logo.svg' ?>" alt=""/>
            <div class="logo-text">
                <p>«Могилевский комбинат силикатных изделий»</p>
            </div>
        </a>
    </div>
    <div class="small-menu">
        <div></div>
    </div>
    <ul class="small-sidebar-extra">
        <li class="small-city"><a class="open-city" href="#"></a></li>
        <li class="small-shopping-cart">
            <div class="number-of">1</div><a class="open-basket" href="#"></a>
        </li>
        <li class="phone"><a class="open-contacts" href="#"></a></li>
    </ul>
    <div class="sidebar-content">
        <nav>
            <ul class="main-nav nav">
                <?php foreach ($data['categories'] AS $category){ ?>
                    <li>
                        <a href="<?php echo base_url().'user/category/'.$category['id']; ?>"><?php echo trim($category['name']) ?>
                            <?php if(!empty($category['sub_categories'])){ ?>
                                <div class="nav-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.62 14.41"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;opacity:.2;}</style></defs><title>nav-arrow-right</title><g id="Слой_2" data-name="Слой 2"><g id="Layer_1" data-name="Layer 1"><polyline class="cls-1" points="0.71 0.71 7.21 7.21 0.71 13.71"/></g></g></svg>
                                </div>
                            <?php } ?>
                        </a>
                        <?php if(!empty($category['sub_categories'])){ ?>
                            <div class="second-lvl-menu">
                                <div class="second-lvl-bg"></div>
                                <ul>
                                    <?php foreach ($category['sub_categories'] AS $sub_category){ ?>
                                        <li><a href="<?php echo base_url() ?>user/product/<?php echo $sub_category['id'] ?>"><?php echo $sub_category['name'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <nav>
            <ul class="second-nav nav">
                <li><a href="#">О комбинате
                        <div class="nav-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.62 14.41"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;opacity:.2;}</style></defs><title>nav-arrow-right</title><g id="Слой_2" data-name="Слой 2"><g id="Layer_1" data-name="Layer 1"><polyline class="cls-1" points="0.71 0.71 7.21 7.21 0.71 13.71"/></g></g></svg></div></a>
                    <div class="second-lvl-menu">
                        <div class="second-lvl-bg"></div>
                        <ul>
                            <li><a href="/user/about">О комбинате</a></li>
                            <li><a href="/user/history">История</a></li>
                            <li><a href="/user/news_article">Новости</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Производство
                        <div class="nav-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.62 14.41"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;opacity:.2;}</style></defs><title>nav-arrow-right</title><g id="Слой_2" data-name="Слой 2"><g id="Layer_1" data-name="Layer 1"><polyline class="cls-1" points="0.71 0.71 7.21 7.21 0.71 13.71"/></g></g></svg></div></a>
                    <div class="second-lvl-menu">
                        <div class="second-lvl-bg"></div>
                        <ul>
                            <li><a href="/user/production/1">Производство ячеистых блоков</a></li>
                            <li><a href="/user/production/2">Производство сухих смесей</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Услуги
                        <div class="nav-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.62 14.41"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;opacity:.2;}</style></defs><title>nav-arrow-right</title><g id="Слой_2" data-name="Слой 2"><g id="Layer_1" data-name="Layer 1"><polyline class="cls-1" points="0.71 0.71 7.21 7.21 0.71 13.71"/></g></g></svg></div></a>
                    <div class="second-lvl-menu">
                        <div class="second-lvl-bg"></div>
                        <ul>
                            <li><a href="delivery.html">Доставка</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Информация
                        <div class="nav-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.62 14.41"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;opacity:.2;}</style></defs><title>nav-arrow-right</title><g id="Слой_2" data-name="Слой 2"><g id="Layer_1" data-name="Layer 1"><polyline class="cls-1" points="0.71 0.71 7.21 7.21 0.71 13.71"/></g></g></svg></div></a>
                    <div class="second-lvl-menu">
                        <div class="second-lvl-bg"></div>
                        <ul>
                            <li><a href="catalog.html">Каталог</a></li>
                            <li><a href="prices.html">Цены</a></li>
                            <li><a href="/user/how_to_order">Как заказать</a></li>
                            <li><a href="/user/how_to_pay">Как оплатить</a></li>
                            <li><a href="/user/docs">Документация</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/user/contacts">Контакты</a></li>
            </ul>
        </nav>
        <ul class="sidebar-extra">
            <li class="city"><a class="open-city user-city" href="#">Санкт-Петербург</a></li>
            <li class="shopping-cart">
                <div class="number-of">1</div><a class="open-basket" href="#">Корзина: 25 060 р.</a>
            </li>
            <li class="phone"><a class="open-contacts" href="#">+375 (222) 72-22-52</a></li>
        </ul>
    </div>
</aside>
