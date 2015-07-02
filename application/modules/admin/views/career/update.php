<section class="content-header">
    <h1>
        Career Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-group"></i> Career</a></li>
        <li class="active">Update Career</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li></li>
                        <li></li>
                        <li class=""><a href="<?php echo base_url(); ?>admin/career/view"> Career List</a></li>
                        <li class="active"><a href=""> Update Career</a></li>
                    </ul>
                </div>
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="form-group" style="margin-top: 10px;">
                    <?php
                    if ($this->session->flashdata('message')) {
                        ?>
                        <div class="alert alert-dismissable alert-success"style="width:97.5%">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-list"></i> Update Career</h3>
                        </div>
                        <?php
                        $this->load->view("admin/career/_form", array(
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>