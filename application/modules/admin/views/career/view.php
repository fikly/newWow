<section class="content-header">
    <h1>
        Career Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-group"></i> Career</a></li>
        <li class="active">Career List</li>
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
                        <li class="active"><a href=""> Career List</a></li>
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
                            <a href="<?php echo base_url() ?>admin/career/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i> Add New Career</a>
                            <h3 class="panel-title"><i class="fa fa-list"></i> Career List</h3>
                        </div>
                        <div class="panel-body table-responsive fortable">
                            <table id="tableProduct" class="dataTable table table-striped table-hover  ">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:5%">No</th>
                                        <th>Position</th>
                                        <th style="text-align:center;width: 8%">Description</th>
                                        <th style="text-align:center;width: 15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    if ($modelCareer->num_rows() > 0) {
                                        foreach ($modelCareer->result() as $career) {
                                            $no++;
                                            ?>
                                            <tr>
                                                <td style="text-align: center"><?php echo $no ?></td>
                                                <td><?php echo $career->posisi ?></td>
                                                <td><?php echo $career->description ?></td>
                                                <td style="text-align: center">
                                                    <a href="<?php echo base_url('admin/career/edit/' . $career->id_career) ?>" data-original-title="Ubah Data" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                    <span style="cursor: pointer" onclick="deletenya('<?php echo $career->id_career ?>')" data-original-title="Hapus" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></span>
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
            document.location.href = '<?php echo base_url('admin/career/delete') ?>/' + id;
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