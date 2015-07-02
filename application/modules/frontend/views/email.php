<div id="page-wrap" style="padding: 0px;margin: 0px;min-height: 0px;">
    <div id="contact-area">
        <form action="<?php echo base_url() ?>frontend/main/postemail" target="prc_box" method="post" id="form-contact" autocomplete="off" role="form" class="form-horizontal">

            <div class="form-group">
                <label for="Name" class="col-md-2">Name</label>
                <div class="col-md-10">
                    <input type="text" name="reg_name" id="Name" />
                </div>
            </div>

            <div class="form-group">
                <label for="City" class="col-md-2">City</label>
                <div class="col-md-10">
                    <input type="text" name="reg_city" id="City" />
                </div>
            </div>

            <div class="form-group">
                <label for="Email" class="col-md-2">Email</label>
                <div class="col-md-10">
                    <input type="email" name="reg_mail" id="Email" />
                </div>
            </div>

            <div class="form-group">
                <label for="Message" class="col-md-2">Message</label>
                <div class="col-md-10">
                    <textarea name="reg_message" rows="20" cols="20" id="Message"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12" style="text-align: right">
                    <button id="contactsubmit" class="btn btn-default" data-loading-text="Sending...">Send</button>
                </div>
            </div>
        </form>

        <div style="clear: both;"></div>
    </div>
</div>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
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


