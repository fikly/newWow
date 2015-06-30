<?php
if ($detail) {
    $id = (set_value('id_logo')) ? set_value('id_logo') : $detail->id_logo;
    $logo = (set_value('logo')) ? set_value('logo') : $detail->logo;
    $id_client = (set_value('id_client')) ? set_value('id_client') : $detail->id_client;
    $form = 'admin/logo/update';
    $disable = 'disabled';
} else {
    $id = (set_value('id_logo')) ? set_value('id_logo') : '';
    $logo = (set_value('logo')) ? set_value('logo') : '';
    $id_client = (set_value('id_client')) ? set_value('id_client') : '';
    $form = 'admin/logo/create';
    $disable = '';
}
?>
<div class="panel-body">
    <form action="<?php echo base_url() ?><?php echo $form ?>" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">            

        <div class="form-group <?php echo (form_error('id_client')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Client</label>
            <div class="col-sm-3">
                <input name="id_logo" type="hidden" value="<?php echo $id ?>">
                <?php echo form_dropdown('id_client', $getClient, $id_client, "class='form-control input-sm' id='product' "); ?>
            </div>
        </div>

        <?php if (empty($id)) { ?>
            <div class="form-group <?php echo (form_error('logo')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">Filename</label>
                <div class="col-sm-3">
                    <input name="logo" type="file" class="form-control input-sm"  value="<?php echo $logo ?>">
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