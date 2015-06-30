<form action="<?php echo base_url(); ?>user_signin" method="post"  class="form-horizontal" role="form">

    <div class="panel panel-default" style="width:35%;margin-left:32%">
        <div class="panel-heading">
            <strong> Sign in to continue</strong>
        </div>
        <div class="form-signin">
            <?php if ($this->session->flashdata('message')) { ?>
                <div class="alert alert-dismissable alert-danger"style="float: left;width: 100%;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
            <?php } ?>

            <input name="username" type="text" class="form-control input-sm" autocomplete="off"  placeholder="Username" value="<?php echo set_value('username'); ?>"/>
            <input name="password" type="password" class="form-control input-sm" placeholder="Password"  value=""/>

            <div class="rowchek">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember Me
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>




            <?php
            if (validation_errors()) {
                $display = 'display:block';
            } else {
                $display = 'display:none';
            }
            ?>

            <div class="alert alert-danger" style="float: left;width: 100%;padding: 10px;<?php echo $display ?>">
                <?php echo form_error('username'); ?>
                <?php echo form_error('password'); ?>
            </div>
        </div>
    </div>

    <div class="footerlogin">

    </div>
</form>