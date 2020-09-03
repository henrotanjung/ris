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
                        <div class="row">
                            <div class="col-md-3 float-left">
                                <a class="btn btn-primary btn-sm" data-toggle="collapse" href="<?php echo base_url(); ?>call_relation_c/add_c_relation" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Tambah
                                </a>
                                <a class="btn btn-info btn-sm" hidden data-toggle="collapse" href="<?php echo base_url(); ?>call_relation_c/edit_c_relation" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" hidden data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Delete
                                </a>
                            </div>
                            <div class="col-md-5">
                                <div>
                                    <?php echo form_open(base_url() . "call_relation_c/index"); ?>
                                    <input type="text" name="keyword" placeholder="Search..." autocomplete="off" autofocus />
                                    <input type="submit" value="Cari" name="submit" />
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                            <div class="float-right">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>

                        <table id="example2" class="table table-hover mt-3">
                            <thead>
                                <tr class="row">
                                    <th class="col-1">ID</th>
                                    <th class="col-5">Relation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($call_relation as $c_relation) {
                                    $no++;
                                    ?>
                                    <tr class="row">
                                        <td class="col-1"><?php echo $c_relation->id; ?></td>
                                        <td class="col-5"><?php echo $c_relation->name; ?></td>
                                        <td><?php echo anchor(base_url() . "call_relation_c/detail/" . $c_relation->id, '<div class="btn btn-success btn-sm m-1">
                        <i class="fa fa-search-plus"></i>
                      </div>');
                                                                echo anchor(base_url() . "call_relation_c/hapus/" . $c_relation->id, '<div class="btn btn-danger btn-sm m-1">
                      <i class="fa fa-trash"></i>
                    </div>', 'onclick="message()"');
                                                                echo anchor(base_url() . "call_relation_c/edit/" . $c_relation->id, '<div class="btn btn-danger btn-sm m-1">
                    <i class="fa fa-edit"></i>
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
    function message() {
        alert('Yakin ingin menghapus?')
    }
</script>