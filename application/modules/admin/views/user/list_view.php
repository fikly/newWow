<section class="content-header">
    <h1>
        User Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-group"></i> User</a></li>
        <li class="active">User List</li>
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
                        <li class="active"><a href=""> User List</a></li>
                    </ul>
                </div>
            </div>

            <div class="box-body">
                <div class="form-group" style="margin-top: 10px;">
                    <?php
                    if ($this->session->flashdata('message')) {
                        ?>
                        <div class="alert alert-dismissable alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <a href="<?php echo base_url() ?>admin/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add New User</a>
                            <h3 class="panel-title"><i class="fa fa-list"></i> User List</h3>
                        </div>
                        <div class="panel-body table-responsive fortable">
                            <table id="tableProduct" class="dataTable table table-striped table-hover  ">
                                <thead>
                                    <tr>
                                        <th class="wNo">No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th class="wAction">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    if ($modelUser->num_rows() > 0) {
                                        foreach ($modelUser->result() as $user) {
                                            $no++;
                                            ?>

                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $user->name ?></td>
                                                <td><?php echo $user->jk ?></td>
                                                <td class="wAction">
                                                    <?php //if($username == $user->username){?>
                                                    <a href="<?php echo base_url('admin/user/edit/' . $user->user_id) ?>" data-original-title="Ubah Data" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                    <span style="cursor: pointer" onclick="deletenya('<?php echo $user->user_id ?>')" data-original-title="Hapus" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></span>


                                                    <?php //}?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div>
    </div>

</section>
<script>
    function deletenya(id) {
        if (confirm("Are you sure you delete this data ?") == true) {
            document.location.href = '<?php echo base_url('admin/user/delete') ?>/' + id;
        }
    }
    ;

    $(function () {
        $('#tableProduct').dataTable({
            searching: true,
            ordering: false,
            paginate: true,
            info: false

        });
    });
</script>