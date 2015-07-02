<?php
if ($detail) {
    $id = (set_value('id_career')) ? set_value('id_career') : $detail->id_career;
    $posisi = (set_value('posisi')) ? set_value('posisi') : $detail->posisi;
    $description = (set_value('description')) ? set_value('description') : $detail->description;
    $form = 'admin/career/update';
    $disable = 'disabled';
} else {
    $id = (set_value('id_career')) ? set_value('id_career') : '';
    $posisi = (set_value('posisi')) ? set_value('posisi') : '';
    $description = (set_value('description')) ? set_value('description') : '';
    $form = 'admin/career/create';
    $disable = 'disabled';
}
?>
<script type="text/javascript" src="<?php echo base_url(); ?>ckeditorstandard/ckeditor.js"></script>
<div class="panel-body">
    <form action="<?php echo base_url() ?><?php echo $form ?>" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

        <input type="hidden" name="id_career" value="<?php echo $id ?>">

        <div class="form-group <?php echo (form_error('posisi')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Position</label>
            <div class="col-sm-5">
                <input type="text" name="posisi" class="form-control input-sm" value="<?php echo $posisi ?>">
            </div>
        </div>

        <div class="form-group <?php echo (form_error('description')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" style="resize: none" class="form-control txt-area ckeditor"  placeholder="Text Content"><?php echo $description ?></textarea>
            </div>
        </div>

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