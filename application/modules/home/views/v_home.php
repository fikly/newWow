<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title><?php echo BASE_TITLE; ?></title>
        <link rel="shortcut icon" href="<?php echo FAVICON; ?>" type="image/x-icon">
            <?php $this->load->view("inc_head"); ?>
    </head>

    <body>


        <?php $this->load->view($content); ?>


        <!--footer-->
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
        <?php $this->load->view("inc_foot"); ?>
        <!-- JQuery Form -->
        <script src="<?php echo INCLUDE_DIR; ?>js/forms.AJAX.form.js"></script>
        <script src="<?php echo INCLUDE_DIR; ?>js/forms.AJAX.formFunction.js"></script>
        <!-- JQuery Validate -->
        <script src="<?php echo INCLUDE_DIR; ?>js/JQuery.validate.min.js"></script>
        <script src="<?php echo INCLUDE_DIR; ?>js/forms.validate.js"></script>

    </body>

</html>