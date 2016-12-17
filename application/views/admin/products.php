<script src="<?php echo base_url(); ?>/application/resources/user_resources/js/lib/summernote/summernote.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>/application/resources/user_resources/css/lib/summernote/summernote.css"/>
<div id="addProduct" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- modal content start -->
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h3 class="modal-title text-center">Добавить продукт</h3>
            </div>
            <form class="form-horizontal mt25 ml50" action="/admin_panel/products" method="POST"
                  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Категории</label>
                        <select name='category' class="selectpicker">
                            <?php foreach ($data['categories'] as $category) { ?>
                                <option><?php echo $category['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group sub_category">
                        <label>Под категория</label>
                        <select name='block_category' class="selectpicker">
                            <option value="Стеновые блоки">Стеновые блоки</option>
                            <option value="Перегородочные блоки">Перегородочные блоки</option>
                            <option value="Пазогребневые блоки">Пазогребневые блоки</option>
                            <option value="Брусовые перемычки">Брусовые перемычки</option>
                        </select>

                    </div>
                    <div class="form-group option_category">
                        <div class="radio">
                            <input type="radio" name="option_category" id="radio-1" value="1" checked>
                            <label for="radio-1">1 категория </label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="option_category" id="radio-2" value="2">
                            <label for="radio-2">2 категория </label>
                        </div>
                    </div>
                    <div class="form-group name_product">
                        <label for="name" class="control-label">Название продукта</label>
                        <input type="text" class='form-control' name="name" value="" placeholder="имя">
                    </div>
                    <div class="form-group">
                        <a href="" class="show-city dropdown-toggle">Цена</i></a>
                    </div>
                    <div class="form-group hidden city-list">
                        <div class="row">
                            <?php foreach ($data['cities'] as $city) { ?>
                                <div class='form-group col-md-4'>
                                    <label for="name" class="control-label"><?php echo $city['name'] ?></label>
                                    <input type="text" class='form-control' name='<?php echo $city['name'] ?>' value=""
                                           placeholder="цена">
                                </div>
                            <?php } ?>
                        </div>
                    </div>


                    <div class="form-group" style="width: 400px">
                        <label for="name" class="control-label">Размеры (длина, ширина, высота через символ "|")</label>
                        <input type="text" class='form-control' name="size" value="" placeholder="200|100|50">
                    </div>
                    <div class="form-group" style="width: 200px">
                        <label for="name" class="control-label opt1">Кол-во на поддоне</label>
                        <input type="text" class='form-control' name="on_pallet_amount" value="" placeholder="">
                    </div>
                    <div class="form-group" style="width: 200px">
                        <label for="name" class="control-labelq opt2">Кол-во поддонов на машине</label>
                        <input type="text" class='form-control' name="pallet_amount" value="" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Описание</label>
                        <div class="summernote-theme-1">
                            <textarea class="summernote" name='description'></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Рекомендовать к блокам?</label>
                        <div class="checkbox-toggle">
                            <input type="checkbox" id="check-toggle-1" name="recommended">
                            <label for="check-toggle-1"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Изображение</label>
                        <input type="file" class='form-control' name="img" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>"
                           name="<?php echo $csrf_token_name; ?>">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-rounded btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
        <!-- modal content end -->

    </div>
</div>
<div class="page-content">
    <div class="container-fluid">
        <button class='btn btn-inline btn-primary-outline' data-toggle='modal' data-target='#addProduct'>Добавить
            продукт
        </button>
        <section class="box-typical">

            <header class="box-typical-header">
                <div class="tbl-row">
                    <div class="tbl-cell tbl-cell-title">
                        <h3>Список продуктов</h3>
                    </div>
                </div>
            </header>
            <div class="box-typical-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Имя</th>
                            <?php
                                $cities = City::load_cities();
                                foreach ($cities AS $city){ ?>
                                    <th><?php echo $city['name'] ?></th>

                            <?php } ?>
                            <th class="table-icon-cell" style="width: 40px;"></th>
                            <th class="table-icon-cell" style="width: 40px;"></th>
                            <th class="table-icon-cell" style="width: 40px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach ($data['products'] AS $product) { ?>
                            <form action="<?php echo base_url() ?>admin_panel/edit_product_prices" method="post">
                                <input type='hidden' name="id" value="<?php echo $product['id'] ?>" />
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td style="text-transform: lowercase">

                                           <?php echo strtolower($product['name']); ?>

                                    </td>
                                    <?php foreach ($cities AS $city){
                                        $price = Product::load_price($product['id'], $city['name']);
                                        $price = number_format($price['price'], 2, '.', ',');
                                        ?>
                                        <td><input class='form-control' type="text" name="<?php echo $city['name'] ?>" value="<?php echo $price ?>"></td>
                                    <?php } ?>
                                    <td class="table-icon-cell"><button type="submit" class="btn btn-success">Сохранить</button></td>
                                    <td class="table-icon-cell"><a href="<?php echo base_url() ?>admin_panel/edit_products/<?php echo $product['id'] ?>" class="btn btn-success">Редак.</a></td>
                                    <td class="table-icon-cell">
                                        <a href="<?php echo base_url(); ?>admin_panel/delete_product/<?php echo $product['id']; ?>"
                                           onclick="return window.confirm('Вы уверены?')"><i
                                                class="font-icon font-icon-trash"></i></a>
                                    </td>

                                </tr>
                                <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
                            </form>
                            <?php
                            $i++;
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div><!--.box-typical-body-->
        </section><!--.box-typical-->

    </div><!--.container-fluid-->
</div><!--.page-content-->
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 150
        });
        $('.selectpicker').selectpicker({
            style: 'btn-info',
            size: 4
        });

    });


</script>