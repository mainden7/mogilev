<section id="our-products">
    <div class="sec-number">
        <p>01</p>
    </div>
    <h2>Наша продукция</h2>
    <div class="items-wrapper">
        <div class="items">
            <ul>
                <?php foreach ($data['categories'] AS $category){ ?>
                <li><a href="<?php echo base_url() ?>user/category/<?php echo $category['id'] ?>">
                        <div class="item-text">
                            <p><?php echo $category['name'] ?></p>
                        </div>
                        <div class="item-image"><img src="<?php echo base_url() ?>application/resources/upload/img/categories/<?php echo $category['img'] ?>" alt=""/></div></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>