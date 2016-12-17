<script src="<?php echo base_url(); ?>application/resources/admin_resources/js/lib/summernote/summernote.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>application/resources/admin_resources/css/lib/summernote/summernote.css"/>
<div class="page-content">
    <div class="container-fluid" style="background: #fff">
        <h2 class="modal-title text-center" style="padding-top: 40px">Редактировать продукт</h2>

        <form class="form-horizontal mt25 ml50" action="<?php echo base_url(); ?>admin_panel/edit_article" method="POST"   enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="name" class="control-label">Заголовок</label>
                    <input type="text" class='form-control' name="name" value="<?php echo $data['article']['title'] ?>" placeholder="название">
                </div>
                <div class="form-group">
                    <label>Предисловие</label>
                    <div class="summernote-theme-1">
                        <textarea class="summernote" name='caption'><?php echo $data['article']['caption'] ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Содержание</label>
                    <div class="summernote-theme-1">
                        <textarea class="summernote" name='content'><?php echo $data['article']['content'] ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Изображение</label>
                    <input type="file" class='form-control' name="img" value="">
                    <input type="hidden" class='form-control' name="old_img" value="<?php echo $data['article']['image'] ?>">
                </div>
                <div class="form-group option_category">
                    <div class="radio">
                        <input type="radio" name="status" id="radio-<?php echo $data['article']['id'] ?>-1" value="1" <?php echo $data['article']['active'] == 1 ? 'checked': '' ?>>
                        <label for="radio-<?php echo $data['article']['id'] ?>-1">Активно </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="status" id="radio-<?php echo $data['article']['id'] ?>-2" value="0" <?php echo $data['article']['active'] == 0 ? 'checked': '' ?>>
                        <label for="radio-<?php echo $data['article']['id'] ?>-2">Не активно </label>
                    </div>
                </div>
                <div class="form-group">

                    <input type="checkbox" name='on_main' value="1" <?php echo $data['article']['on_main'] == 1 ? 'checked' : '' ?>>На главную<br>

                    <input type="checkbox" name='post' value="1" <?php echo $data['article']['post'] == 1 ? 'checked' : '' ?>> Опубликовать<br>
                </div>
            </div>
            <div class="modal-footer">
                <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
                <input id="" type="hidden" value="<?php echo $data['article']['id']; ?>" name="id">
                <button type="submit"  class="btn btn-rounded btn-primary">Сохранить</button>
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
