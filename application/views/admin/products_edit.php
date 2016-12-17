<script src="<?php echo base_url(); ?>/application/resources/admin_resources/js/lib/summernote/summernote.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>/application/resources/admin_resources/css/lib/summernote/summernote.css"/>
<div class="page-content">
    <div class="container-fluid" style="background: #fff">
                <h2 class="modal-title text-center" style="padding-top: 40px">Редактировать продукт</h2>

            <form class="form-horizontal mt25 ml50" action="/admin_panel/edit_product"
                  method="POST" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group name_product">
                        <label for="name" class="control-label">Имя продукта</label>
                        <input type="text" class='form-control' name="name"
                               value="<?php echo $data['product']['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Описание</label>
                        <div class="summernote-theme-1">
                                                        <textarea class="summernote"
                                                                  name='description'><?php echo $data['product']['description']; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label">Изображение</label>
                        <input type="file" class='form-control' name="img" value="">
                        <input type='hidden' name='old_img'
                               value='<?php echo $data['product']['image']; ?>'>
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
                    <input type='hidden' name='id' value="<?php echo $data['product']['id'] ?>">
                    <button type="button" class="btn btn-rounded btn-default"
                            data-dismiss="modal">Закрыть
                    </button>
                    <button type="submit" class="btn btn-rounded btn-primary">Сохранить
                    </button>
                </div>
            </form>
        </div>
    </div>
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
