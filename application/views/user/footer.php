<footer>
    <div class="copyright">
        <p>&copy <?php echo date('Y') ?>, ЗАО «Могилевский комбинат силикатных изделий»</p>
    </div>
    <div class="done-by">
        <p>Разработка сайта:</p>
        <p class="company-name">Altex</p>
    </div>
</footer>
<div id="pop-up-wrapper">
    <div class="popup-bg-color"></div>
    <div class="popup" id="pop-up-contacts">
        <div class="popup-close">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 25"><defs><style>.cls-1{}.cls-2{}</style></defs><title>close</title><g class="cls-1"><rect class="cls-2" x="-3" y="10.5" width="32" height="4" transform="translate(-5.03 12.85) rotate(-45)"/><rect class="cls-2" x="11" y="-3.5" width="4" height="32" transform="translate(-5.03 12.85) rotate(-45)"/></g></svg>
        </div>
        <h2>Телефоны</h2>
        <ul>
            <li>
                <p>Приемная:</p>
                <p>+375 (222) 72-22-38 (факс)</p>
            </li>
            <li>
                <p>Фирменный магазин:</p>
                <p>+375 (222) 72-22-14</p>
            </li>
            <li>
                <p>Отдел маркетинга и сбыта:</p>
                <p>+375 (222) 72-22-52,</p>
                <p>+375 (222) 72-22-59,</p>
                <p>+375 (222) 72-22-52 (факс)</p>
            </li>
            <li>
                <p>Финансовый отдел:</p>
                <p>+375 (222) 72-22-41 (факс)</p>
            </li>
            <li>
                <p>Отдел материально-технического снабжения:</p>
                <p>+375 (222) 72-22-32 (факс)</p>
            </li>
        </ul>
        <div class="popup-contacts-links"><a class="leave-app-link" href="#">Оставить заявку</a><a href="#">Перейти в контакты</a></div>
    </div>
    <div class="popup" id="pop-up-city">
        <div class="popup-close">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 25"><defs><style>.cls-1{}.cls-2{}</style></defs><title>close</title><g class="cls-1"><rect class="cls-2" x="-3" y="10.5" width="32" height="4" transform="translate(-5.03 12.85) rotate(-45)"/><rect class="cls-2" x="11" y="-3.5" width="4" height="32" transform="translate(-5.03 12.85) rotate(-45)"/></g></svg>
        </div>
        <h2>Выберите город</h2>
        <ul>
            <?php
            $cities = City::load_cities();
            foreach ($cities AS $city){ ?>
                <li><a href="#" class="city_choise"><?php echo $city['name'] ?></a></li>
            <?php } ?>
        </ul>
        <div class="notion">
            <p>Не нашли свой город — </p>
            <div class="notion-link-wrap"><a href="#">свяжитесь с нашим отделом продаж.</a></div>
        </div>
    </div>
    <div class="popup" id="pop-up-leave-app">
        <div class="popup-close">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 25"><defs><style>.cls-1{}.cls-2{}</style></defs><title>close</title><g class="cls-1"><rect class="cls-2" x="-3" y="10.5" width="32" height="4" transform="translate(-5.03 12.85) rotate(-45)"/><rect class="cls-2" x="11" y="-3.5" width="4" height="32" transform="translate(-5.03 12.85) rotate(-45)"/></g></svg>
        </div>
        <h2>Оставить заявку</h2>
        <form action="">
            <div class="leave-app-name">
                <label for="leave-app-name">Ваше имя</label>
                <input id="leave-app-name" type="text" placeholder="Имя"/>
            </div>
            <div class="leave-app-email">
                <label for="leave-app-email">E-mail</label>
                <input id="leave-app-email" type="email" placeholder="Для связи с Вами"/>
            </div>
            <div class="leave-app-phone">
                <label for="leave-app-phone">Телефон</label>
                <input id="leave-app-phone" type="text" placeholder="Для связи с Вами"/>
            </div>
            <div class="leave-app-comment">
                <label for="leave-app-comment">Комментарий</label>
                <textarea id="leave-app-comment" placeholder="Ваш комментарий"></textarea>
            </div>
            <input type="submit" value="Отправить"/>
        </form>
    </div>
    <div class="popup" id="pop-up-leave-app2">
        <div class="popup-close">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 25"><defs><style>.cls-1{}.cls-2{}</style></defs><title>close</title><g class="cls-1"><rect class="cls-2" x="-3" y="10.5" width="32" height="4" transform="translate(-5.03 12.85) rotate(-45)"/><rect class="cls-2" x="11" y="-3.5" width="4" height="32" transform="translate(-5.03 12.85) rotate(-45)"/></g></svg>
        </div>
        <h2>Оставить заявку</h2>
        <form action="">
            <div class="leave-app-name">
                <label for="leave-app-name">Ваше имя</label>
                <input id="leave-app-name" type="text" placeholder="Имя"/>
            </div>
            <div class="leave-app-resident">
                <label for="leave-app-resident"></label>
                <select name="resident" id="leave-app-resident">
                    <option value="RU">Российской Федерации</option>
                    <option value="BLR">Республики Беларусь</option>
                    <option value="KZ">Казахстана</option>
                    <option value="UKR">Украины</option>
                </select>
            </div>
            <div class="leave-app-email">
                <label for="leave-app-email">E-mail</label>
                <input id="leave-app-email" type="email" placeholder="Для связи с Вами"/>
            </div>
            <div class="leave-app-phone">
                <label for="leave-app-phone">Телефон</label>
                <input id="leave-app-phone" type="text" placeholder="Для связи с Вами"/>
            </div>
            <input type="submit" value="Отправить"/>
        </form>
    </div>
    <div class="popup" id="pop-up-basket">
        <div class="popup-close">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 25"><defs><style>.cls-1{}.cls-2{}</style></defs><title>close</title><g class="cls-1"><rect class="cls-2" x="-3" y="10.5" width="32" height="4" transform="translate(-5.03 12.85) rotate(-45)"/><rect class="cls-2" x="11" y="-3.5" width="4" height="32" transform="translate(-5.03 12.85) rotate(-45)"/></g></svg>
        </div>
        <h2>Корзина</h2>
        <div class="basket-table">
            <table>
                <tr class="caption">
                    <td>
                        <p>Наименование</p>
                    </td>
                    <td>
                        <p>Количество</p>
                    </td>
                    <td>
                        <p>Отгрузка</p>
                    </td>
                    <td>
                        <p>Предварительная цена</p>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="headline">
                            <p>Стеновые блоки из ячеистого бетона первой категории</p>
                        </div>
                        <p>Плотность бетона: D600;</p>
                        <p>Длина: 588;</p>
                        <p>Ширина: 100;</p>
                        <p>Высота: 200;</p>
                    </td>
                    <td>
                        <input type="text"/>
                        <p>м3</p>
                    </td>
                    <td>
                        <p>40 (поддоны)</p>
                    </td>
                    <td class="headline">
                        <p>505 000 р.</p>
                    </td>
                    <td><a href="#">+</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="headline">
                            <p>Стеновые блоки из ячеистого бетона третьей категории</p>
                        </div>
                        <p>Плотность бетона: D600;</p>
                        <p>Длина: 588;</p>
                        <p>Ширина: 100;</p>
                        <p>Высота: 200;</p>
                    </td>
                    <td>
                        <input type="text"/>
                        <p>м3</p>
                    </td>
                    <td>
                        <p>20 (шт)</p>
                    </td>
                    <td class="headline">
                        <p>505 000 р.</p>
                    </td>
                    <td><a href="#">+</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="headline">
                            <p>Пазогребневые блоки первой категории</p>
                        </div>
                        <p>Плотность бетона: D600;</p>
                        <p>Ширина: 100;</p>
                        <p>Высота: 200;</p>
                    </td>
                    <td>
                        <input type="text"/>
                        <p>м3</p>
                    </td>
                    <td>
                        <p>40 (поддоны)</p>
                    </td>
                    <td class="headline">
                        <p>505 000 р.</p>
                    </td>
                    <td><a href="#">+</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="headline">
                            <p>Перегородочные блоки первой категории</p>
                        </div>
                        <p>Плотность бетона: D600;</p>
                        <p>Длина: 588;</p>
                        <p>Ширина: 120;</p>
                        <p>Высота: 200;</p>
                    </td>
                    <td>
                        <input type="text"/>
                        <p>м3</p>
                    </td>
                    <td>
                        <p>40 (поддоны)</p>
                    </td>
                    <td class="headline">
                        <p>505 000 р.</p>
                    </td>
                    <td><a href="#">+</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="headline">
                            <p>Перегородочные блоки третьей категории</p>
                        </div>
                        <p>Плотность бетона: D600;</p>
                        <p>Длина: 588;</p>
                        <p>Ширина: 100;</p>
                        <p>Высота: 200;</p>
                    </td>
                    <td>
                        <input type="text"/>
                        <p>м3</p>
                    </td>
                    <td>
                        <p>20 (шт)</p>
                    </td>
                    <td class="headline">
                        <p>505 000 р.</p>
                    </td>
                    <td><a href="#">+</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="headline">
                            <p>Перемычка</p>
                        </div>
                        <p>Длина: 1500;</p>
                        <p>Ширина: 200;</p>
                        <p>Высота: 250;</p>
                        <p>Нагрузка: до 2 (не несущая);</p>
                    </td>
                    <td>
                        <input type="text"/>
                        <p>м3</p>
                    </td>
                    <td>
                        <p>3 (шт)</p>
                    </td>
                    <td class="headline">
                        <p>505 000 р.</p>
                    </td>
                    <td><a href="#">+</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="headline">
                            <p>Кирпич силикатный</p>
                        </div>
                        <p>Лицевой (11-х пустотный);</p>
                        <p>Длина: 250;</p>
                        <p>Ширина: 120;</p>
                        <p>Высота: 88;</p>
                    </td>
                    <td>
                        <input type="text"/>
                        <p>м3</p>
                    </td>
                    <td>
                        <p>40 (поддоны)</p>
                    </td>
                    <td class="headline">
                        <p>505 000 р.</p>
                    </td>
                    <td><a href="#">+</a></td>
                </tr>
                <tr>
                    <td>
                        <div class="headline">
                            <p>Сухие смеси</p>
                        </div>
                        <p>К21/2(с противоморозной добавкой)</p>
                    </td>
                    <td>
                        <input type="text"/>
                        <p>шт</p>
                    </td>
                    <td>
                        <p>3 (шт)</p>
                    </td>
                    <td class="headline">
                        <p>505 000 р.</p>
                    </td>
                    <td><a href="#">+</a></td>
                </tr>
            </table>
        </div>
        <div class="notion">
            <p>Цена указана для города: <span>Москва</span>. </p>
            <div class="notion-link-wrap"><a class="open-city" href="#">Выбрать другой город</a></div>
        </div>
        <div class="make-request">
            <button>Оформить заявку</button>
        </div>
    </div>
</div>
</body>
</html>