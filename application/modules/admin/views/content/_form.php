<?php
if ($detail) {
    $id = (set_value('id_content')) ? set_value('id_content') : $detail->id_content;
    $video_content = (set_value('video_content')) ? set_value('video_content') : $detail->video_content;
    $img_content = (set_value('img_content')) ? set_value('img_content') : $detail->img_content;
    $id_client = (set_value('id_client')) ? set_value('id_client') : $detail->id_client;
    $form = 'admin/content/update';
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

        <div class="form-group <?php echo (form_error('id_client')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Client</label>
            <div class="col-sm-3">
                <input name="id_content" type="hidden" value="<?php echo $id ?>">
                <?php echo form_dropdown('id_client', $getClient, $id_client, "class='form-control input-sm' id='product' "); ?>
            </div>
        </div>

        <?php if (empty($id)) { ?>
            <div class="form-group <?= (form_error('content')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">Select Content</label>
                <div class="col-sm-5">
                    <?php if (empty($id)) { ?>
                        <input type="radio" name="content" value="1" onclick="imgContent()"/>
                        <label class="control-label">Image Content</label>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="content" value="0" onclick="videoContent()" />
                        <label class="control-label">Video Content</label>
                    <?php } elseif ($img_content == "") { ?>
                        <input type="radio" name="content" value="1" checked="checked"/>
                        <label class="control-label">Image Content</label>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="content" value="0" />
                        <label class="control-label">Video Content</label>
                    <?php } else { ?>
                        <input type="radio" name="content" value="1"/>
                        <label class="control-label">Image Content</label>
                        &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="content" value="0" checked="checked"/>
                        <label class="control-label">Video Content</label>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>


        <div class="form-group <?php echo (form_error('video_content')) ? 'has-error' : '' ?>" <?php if (empty($id)) { ?>id="video_content"<?php } ?>>
            <label class="col-sm-2 control-label">Video Embed</label>
            <div class="col-sm-3">
                <input name="video_content" placeholder="Ex : https://www.youtube.com/embed/IlEodG1ohEE" type="text" class="form-control input-sm kosong"  value="<?php echo $video_content ?>">
            </div>
        </div>


        <?php if (empty($id)) { ?>
            <div class="form-group <?php echo (form_error('img_content')) ? 'has-error' : '' ?>" id="img_content">
                <label class="col-sm-2 control-label">Image Content</label>
                <div class="col-sm-3">
                    <input name="img_content" type="file" class="form-control input-sm kosong"  value="<?php echo $img_content ?>">
                </div>
            </div>
        <?php } ?>

        <div class="form-group">
            <div class="col-sm-2"></div>
            <div class=" col-sm-3">
                <?php if (empty($id)) { ?>
                    <button type="submit" class="btn btn-success">Simpan</button>
                <?php } else { ?>
                    <button type="submit" class="btn btn-success">Update</button>
                <?php } ?>
            </div>
        </div>
    </form>
</div>
<script>
    $("#img_content").slideUp();
    $("#video_content").slideUp();
    function imgContent() {
        $("#img_content").slideDown();
        $("#video_content").slideUp();
        $('.kosong').val("");
    }
    function videoContent() {
        $("#img_content").slideUp();
        $("#video_content").slideDown();
        $('.kosong').val("");
    }
</script>