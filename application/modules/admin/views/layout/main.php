<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>css_admin/DT_bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_DIR; ?>css_admin/jquery.dataTables.css" />

        <link rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>css_admin/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>css_admin/bootstrap/css/custom.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>css_admin/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_DIR; ?>css_admin/dist/css/skins/_all-skins.min.css">


        <script src="<?php echo INCLUDE_DIR; ?>js_admin/jquery.js"></script>
        <script src="<?php echo INCLUDE_DIR; ?>js_admin/jquery.dataTables.js"></script>

        <title>WOW</title>
        <link rel="shortcut icon" href="<?php echo FAVICON_ADMIN; ?>" type="image/x-icon">
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>W</b>OW</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b> WOW</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(); ?>images/user/<?php echo $jk ?>.png" class="user-image" alt="User Image"/>
                                    <span class="hidden-xs"><?php echo $nameuser; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo INCLUDE_DIR; ?>wow/img/logo.png" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $nameuser; ?>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?php echo base_url('logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>images/user/<?php echo $jk ?>.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $nameuser; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo base_url(); ?>welcome">
                                <i class="fa fa-dashboard"></i> <span> Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cog"></i><span> Master</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/client/view"><i class="fa fa-circle-o"></i> Client</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/career/view"><i class="fa fa-circle-o"></i> Career</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/user/list_view"><i class="fa fa-circle-o"></i> User Management</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span>Client</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/logo/view"><i class="fa fa-circle-o"></i> Logo</a></li>
                                <li><a href="<?php echo base_url(); ?>admin/content/view"><i class="fa fa-circle-o"></i> Content</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                <?php $this->load->view($content); ?>

            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    Copyright &copy 2015
                </div>
                <strong>&nbsp;</strong>&nbsp;
            </footer>
        </div><!-- ./wrapper -->

        <script src="<?php echo INCLUDE_DIR; ?>js_admin/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo INCLUDE_DIR; ?>js_admin/dist/js/app.min.js"></script>
</html>
