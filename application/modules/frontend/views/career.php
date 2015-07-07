<div class="box-career">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                foreach ($careerList->result() as $c) {
                    ?>
                    <div class="col-md-4 content-career">
                        <h2><?php echo $c->posisi ?></h2>
                        <p><?php echo $c->description ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-3 content-career border-left">
                <h2>Isi data diri anda</h2>
                <form action="<?php echo base_url() ?>frontend/main/postcareer" target="prc_box" method="post" id="form-contact" autocomplete="off" role="form" class="form-horizontal">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Position</h4>
                            <select name="position" class="form-control">
                                <option></option>
                                <?php
                                foreach ($careerList->result() as $cl) {
                                    ?>
                                    <option value="<?php echo $cl->posisi ?>"><?php echo $cl->posisi ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <h4>Name</h4>
                            <input type="text" name="reg_name" value="" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <h4>Email</h4>
                            <input type="email" name="reg_mail" value="" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <h4>Phone</h4>
                            <input type="text" name="reg_phone" value="" class="form-control">
                        </div>
                        <div class="pull-right">
                            <button id="contactsubmit" class="btn btn-danger" data-loading-text="Sending...">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 0px;">
            <div class="modal-body" id="postresult"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo INCLUDE_DIR; ?>wow/js/forms.AJAX.form.js"></script>
<script src="<?php echo INCLUDE_DIR; ?>wow/js/forms.AJAX.formFunction.js"></script>
<!-- JQuery Validate -->
<script src="<?php echo INCLUDE_DIR; ?>wow/js/JQuery.validate.min.js"></script>
<script src="<?php echo INCLUDE_DIR; ?>wow/js/forms.validate.js"></script>