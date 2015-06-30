<?php
if ($detail) {
    $id = (set_value('user_id')) ? set_value('user_id') : $detail->user_id;
    $username = (set_value('username')) ? set_value('username') : $detail->username;
    $password = (set_value('password')) ? set_value('password') : $detail->password;
    $confirmpassword = (set_value('con_password')) ? set_value('con_password') : '';
    $name = (set_value('name')) ? set_value('name') : $detail->name;
    $email = (set_value('email')) ? set_value('email') : $detail->email;
    $jk = (set_value('jk')) ? set_value('jk') : $detail->jk;
    $form = 'admin/user/update';
    $disable = 'disabled';
} else {
    $id = (set_value('user_id')) ? set_value('user_id') : '';
    $username = (set_value('username')) ? set_value('username') : '';
    $password = (set_value('password')) ? set_value('password') : '';
    $confirmpassword = (set_value('con_password')) ? set_value('con_password') : '';
    $name = (set_value('name')) ? set_value('name') : '';
    $email = (set_value('email')) ? set_value('email') : '';
    $jk = (set_value('jk')) ? set_value('jk') : '';
    $form = 'admin/create';
    $disable = '';
}
?>
<div class="panel-body">
    <form action="<?php echo base_url() ?><?php echo $form ?>" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

        <div class="form-group <?php echo (form_error('username')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-3">
                <input name="user_id" type="hidden" value="<?php echo $id ?>">
                <?php if (!empty($id)) { ?>
                    <input name="username" type="text" class="form-control input-sm" readonly placeholder="Username" value="<?php echo $username ?>"/>
                <?php } else { ?>
                    <input name="username" autocomplete="off" type="text" class="form-control input-sm" placeholder="Username" value="<?php echo $username ?>"/>
                <?php } ?>
            </div>
        </div>


        <div class="form-group <?php echo (form_error('password')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-3">
                <input name="password" type="password" class="form-control input-sm" placeholder="Password"/>
            </div>
        </div>

        <div class="form-group <?php echo (form_error('con_password')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-3">
                <input name="con_password" type="password" class="form-control input-sm" placeholder="Confirm Password"  value="<?php echo $confirmpassword ?>"/>
            </div>
        </div>

        <div class="form-group <?php echo (form_error('name')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-3">
                <input name="name" autocomplete="off" class="form-control input-sm"  placeholder="Name" value="<?php echo $name ?>"/>
            </div>
        </div>
        <div class="form-group <?php echo (form_error('email')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-3">
                <?php if (!empty($id)) { ?>
                    <input name="email" autocomplete="off" class="form-control input-sm" readonly placeholder="Email" value="<?php echo $email ?>"/>
                <?php } else { ?>
                    <input name="email" autocomplete="off" class="form-control input-sm"  placeholder="Email" value="<?php echo $email ?>"/>
                <?php } ?>
            </div>
        </div>

        <div class="form-group <?php echo (form_error('jk')) ? 'has-error' : '' ?>">
            <label class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-3">
                <select name="jk" class="form-control input-sm">
                    <?php if ($detail) { ?>

                        <option value="L"<?php if ($jk == "L") echo" selected=\"selected\""; ?>>Laki-Laki</option>

                        <option value="P"<?php if ($jk == "P") echo" selected=\"selected\""; ?>>Perempuan</option>
                    <?php } else {
                        ?>
                        <option value="L" selected="selected">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    <?php } ?>


                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2"></div>
            <div class=" col-sm-3">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="<?php echo base_url('admin/list_view') ?>" class="btn btn-warning">Back</a>
            </div>
        </div>
    </form>
</div>
