<?php
if ($detail) {
    $id = (set_value('id_content')) ? set_value('id_content') : $detail->id_content;
    $video_content = (set_value('video_content')) ? set_value('video_content') : $detail->video_content;
    $img_content = (set_value('img_content')) ? set_value('img_content') : $detail->img_content;
    $id_client = (set_value('id_client')) ? set_value('id_client') : $detail->id_client;
    $form = 'admin/content/update_image';
    $disable = 'disabled';
} else {
    $id = (set_value('id_content')) ? set_value('id_content') : '';
    $video_content = (set_value('video_content')) ? set_value('video_content') : '';
    $img_content = (set_value('img_content')) ? set_value('img_content') : '';
    $id_client = (set_value('id_client')) ? set_value('id_client') : '';
    $form = 'admin/content/create';
    $disable = '';
}
?>
<div class="panel-body">
    <form action="<?php echo base_url() ?><?php echo $form ?>" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

        <div class="form-group <?php echo (form_error('id_client')) ? 'has-error' : '' ?>" style="display: none">
            <label class="col-sm-2 control-label">Client</label>
            <div class="col-sm-3">
                <input name="id_content" type="hidden" value="<?php echo $id ?>">
                <?php echo form_dropdown('id_client', $getClient, $id_client, "class='form-control input-sm' id='product'"); ?>
            </div>
        </div

        <div class="form-group <?php echo (form_error('img_content')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Image Content</label>
            <div class="col-sm-3">
                <input name="img_content" type="file" class="form-control input-sm"  value="<?php echo $img_content ?>">
            </div>
            <div class=" col-sm-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
</div>
