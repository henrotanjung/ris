<?php

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $info; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $info; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><strong><?php echo $info; ?></strong></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row mb-2" >
                            <div class="col-md-3 float-left mt-1">
                                <a class="btn btn-primary btn-sm" data-toggle="collapse" href="<?php echo base_url(); ?>dealer_group_c/add_d_group" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Tambah
                                </a>
                                <a class="btn btn-info btn-sm" hidden data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" hidden data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Delete
                                </a>
                            </div>
                            <div class="float-right">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>

                        <table id="d_group_table" class="table table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Problem</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($d_groups as $d_group) {
                                    $no++;
                                    ?>
                                    <tr>
                                        <td><?php echo $d_group->id; ?></td>
                                        <td><?php echo $d_group->name; ?></td>
                                        <td><?php echo anchor(base_url() . "dealer_group_c/detail/" . $d_group->id, '<div class="btn btn-success btn-sm">
                        <i class="fa fa-search-plus"></i>
                      </div>'); ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<script>
    $(document).ready(function() {
        $('#d_group_table').DataTable();
    });
</script>