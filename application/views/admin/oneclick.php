<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h3>Главные настройки</h3>
                    </div>
                </div>
            </div>
        </header>

        <div class="box-typical box-typical-padding">

            <form method="post" action="/admin_panel/oneclick" enctype='multipart/form-data'>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Спец цена (Стен. 1кат. Блоки)</label>
                    <div class="col-sm-2">
                        <p class="form-control-static"><input type="text" name="block_price_1" class="form-control" autocomplete="off" value="<?php echo $data['oneclick']['block_price_1'] ?>"></p>
                    </div>
                    <label class="col-sm-2 form-control-label">Спец цена (Стен. 2кат. Блоки)</label>
                    <div class="col-sm-2">
                        <p class="form-control-static"><input type="text" name="block_price_2" class="form-control" autocomplete="off" value="<?php echo $data['oneclick']['block_price_2'] ?>"></p>
                    </div>
                    <label class="col-sm-2 form-control-label">Спец цена (Пазогреб.)</label>
                    <div class="col-sm-2">
                        <p class="form-control-static"><input type="text" name="block_price_3" class="form-control" autocomplete="off" value="<?php echo $data['oneclick']['block_price_3'] ?>"></p>
                    </div>
                    <label class="col-sm-2 form-control-label">Спец цена (Брусковые)</label>
                    <div class="col-sm-2">
                        <p class="form-control-static"><input type="text" name="block_price_4" class="form-control" autocomplete="off" value="<?php echo $data['oneclick']['block_price_4'] ?>"></p>
                    </div>
                    <label class="col-sm-2 form-control-label">Спец цена (Перегордки 1кат.)</label>
                    <div class="col-sm-2">
                        <p class="form-control-static"><input type="text" name="block_price_5" class="form-control" autocomplete="off" value="<?php echo $data['oneclick']['block_price_5'] ?>"></p>
                    </div>
                    <label class="col-sm-2 form-control-label">Спец цена (Перегордки 2кат. )</label>
                    <div class="col-sm-2">
                        <p class="form-control-static"><input type="text" name="block_price_6" class="form-control" autocomplete="off" value="<?php echo $data['oneclick']['block_price_6'] ?>"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Спец цена 1 клик (Плиты)</label>
                    <div class="col-sm-2">
                        <p class="form-control-static"><input type="text" name="one_slabs" class="form-control" autocomplete="off" value="<?php echo $data['oneclick']['slab_price'] ?>"></p>
                    </div>
                </div>

                <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
                <input class="btn btn-success" name="action" type="submit" value="Сохранить">
            </form>

        </div><!--.box-typical-->
    </div><!--.container-fluid-->
</div><!--.page-content-->