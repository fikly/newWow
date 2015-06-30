<form action="<?php echo base_url() ?>admin/user_forgot_pass_process" method="post"  class="form-horizontal" role="form">
    <div class="form-signin" style="padding-top: 50px;">
        <h2 class="form-signin-heading imgnya">
            Forgot Password
        </h2>
        <!--    <label for="LoginForm_username" class="sr-only">Email address</label>-->
        <!--        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">-->
        <input name="email" type="text" class="form-control input-sm"  placeholder="Email" value="<?php echo set_value('email') ?>"/>
        <!--    <label for="LoginForm_password" class="sr-only">Password</label>-->
        <!--    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">-->
        <input name="password" type="password" class="form-control input-sm" style="margin-bottom: 0" placeholder="New Password"  value=""/>
        <input name="con_password" type="password" class="form-control input-sm" placeholder="Confirm Password"  value=""/>
        <div class="rowchek">
            <!--        <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember Me
                        </label>
                    </div>-->
            <div class="forgot" style="padding-top:0px;padding-bottom: 5px;"><a href="<?php echo base_url('login ') ?>">Login ?</a></div>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
        <?php
        if ($this->session->flashdata('message')) {
            ?>
            <div class="alert alert-dismissable alert-danger"style="float: left;width: 100%;padding: 10px;">
                <button type="button" class="close" style="right: -3px;" data-dismiss="alert">×</button>
                <?= $this->session->flashdata('message'); ?>
            </div>
        <?php } ?>
        <?php
        if (validation_errors()) {
            $display = 'display:block';
        } else {
            $display = 'display:none';
        }
        ?>
        <div class="alert alert-danger" style="float: left;width: 100%;padding: 10px;<?php echo $display ?>">
            <?php echo form_error('email'); ?>
            <?php echo form_error('password'); ?>
            <?php echo form_error('con_password'); ?>

        </div>
    </div>

    <!--    <div class="footerlogin">
            <p><span style="color: #999999">Fast Moving Consumer Goods V.1.0 developed by</span><a href="http://totalit.co.id">Total Solusi Teknologi</a></p>
        </div>-->
</form>