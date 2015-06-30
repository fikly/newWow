<?php
if ($detail) {
    $id = (set_value('id_client')) ? set_value('id_client') : $detail->id_client;
    $client = (set_value('client')) ? set_value('client') : $detail->client;
    $caption = (set_value('caption')) ? set_value('caption') : $detail->caption;
    $background = (set_value('background')) ? set_value('background') : $detail->background;
    $form = 'admin/client/update';
    $disable = 'disabled';
} else {
    $id = (set_value('id_client')) ? set_value('id_client') : '';
    $client = (set_value('client')) ? set_value('client') : '';
    $caption = (set_value('caption')) ? set_value('caption') : '';
    $background = (set_value('background')) ? set_value('background') : '';
    $form = 'admin/client/create';
    $disable = '';
}
?>
<div class="panel-body">
    <form action="<?php echo base_url() ?><?php echo $form ?>" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">            

        <div class="form-group <?php echo (form_error('client')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Client</label>
            <div class="col-sm-3">
                <input name="id_client" type="hidden" value="<?php echo $id ?>">
                <input name="client" autocomplete="off" type="text" class="form-control input-sm" placeholder="Client" value="<?php echo $client ?>"/>            
            </div>
        </div>


        <div class="form-group <?php echo (form_error('caption')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Caption</label>
            <div class="col-sm-3">
                <input name="caption" autocomplete="off" type="text" class="form-control input-sm" placeholder="Caption" value="<?php echo $caption ?>"/>  
            </div>
        </div>

        <?php if (empty($id)) { ?>
            <div class="form-group <?php echo (form_error('background')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">Filename</label>
                <div class="col-sm-3">
                    <input name="background" type="file" class="form-control input-sm"  value="<?php echo $background ?>">
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