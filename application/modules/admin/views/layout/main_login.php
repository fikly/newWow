<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo INCLUDE_DIR; ?>css_admin/bootstrap/css/bootstrap.css" rel="stylesheet">
<!--        <link href="<?php //echo base_url();           ?>/css/custom.css" rel="stylesheet">-->
        <link href="<?php echo INCLUDE_DIR; ?>css_admin/siginstyle.css" rel="stylesheet">

        <script src="<?php echo INCLUDE_DIR; ?>js_admin/jquery.js"></script>
        <script src="<?php echo INCLUDE_DIR; ?>js_admin/jquery.dataTables.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo INCLUDE_DIR; ?>js_admin/bootstrap.js"></script>
        <title>Login Admin Wow</title>
        <link rel="shortcut icon" href="<?php echo FAVICON_ADMIN; ?>" type="image/x-icon">

    </head>
    <body>
        <div class="container">
            <?php $this->load->view($content); ?>
        </div>
    </body>
</html>
