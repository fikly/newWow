<section class="content-header">
    <h1>
        Client Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-group"></i> Client</a></li>
        <li class="active">Logo Client List</li>
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
                        <li class="active"><a href=""> Logo Client List</a></li>
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
                            <a href="<?php echo base_url() ?>admin/logo/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add New Logo Client</a>
                            <h3 class="panel-title"><i class="fa fa-list"></i> Logo Client List</h3>
                        </div>
                        <div class="panel-body table-responsive fortable">
                            <table id="tableProduct" class="dataTable table table-striped table-hover  ">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:5%">No</th>
                                        <th>Client</th>
                                        <th style="text-align:center;width: 8%">Logo</th>
                                        <th style="text-align:center;width: 15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    if (!empty($modelLogo)) {
                                        foreach ($modelLogo as $logo) {
                                            $no++;
                                            ?>
                                            <tr>
                                                <td style="text-align: center"><?php echo $no ?></td>
                                                <td><?php echo $logo->client ?></td>
                                                <td><img src="<?php echo base_url() ?>./images/client/logo/risize/<?php echo $logo->logo ?>" style="width: 100%;height: 30%"></td>
                                                <td style="text-align: center">
                                                    <a href="<?php echo base_url('admin/logo/edit/' . $logo->id_logo) ?>" data-original-title="Ubah Data" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo base_url('admin/logo/edit_image/' . $logo->id_logo) ?>" data-original-title="Ubah Data" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-picture"></i></a>
                                                    <span style="cursor: pointer" onclick="deletenya('<?php echo $logo->id_logo ?>')" data-original-title="Hapus" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></span>
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
            document.location.href = '<?php echo base_url('admin/logo/delete') ?>/' + id;
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