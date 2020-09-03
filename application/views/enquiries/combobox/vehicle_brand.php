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
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>vehicle_brand_c/add_vehic_brand" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Tambah
                                </a>
                                <a class="btn btn-info btn-sm" hidden href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" hidden href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Delete
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <?php echo form_open(base_url() . "vehicle_brand_c/index"); ?>
                                    <input type="text" name="keyword" placeholder="Search..." autocomplete="off" autofocus />
                                    <input type="submit" value="Cari" name="submit" />
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                            <div class="float-right">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>

                        <table id="example2" class="table table-hover">
                            <thead>
                                <tr class="row">
                                    <th class="col-1">ID</th>
                                    <th class="col-6">Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($vehicle_brands as $v_brand) {
                                    ?>
                                    <tr class="row">
                                        <td class="col-1"><?php echo $v_brand->id ?></td>
                                        <td class="col-6"><?php echo $v_brand->name; ?></td>
                                        <td><?php echo anchor(base_url() . "vehicle_brand_c/detail/" . $v_brand->id, '<div class="btn btn-success btn-sm m-1">
                        <i class="fa fa-search-plus"></i>
                      </div>');
                                                echo anchor(base_url() . "vehicle_brand_c/hapus/" . $v_brand->id, '<div class="btn btn-danger btn-sm m-1">
                      <i class="fa fa-trash"></i>
                    </div>', 'onclick="message()"');
                                                echo anchor(base_url() . "vehicle_brand_c/edit/" . $v_brand->id, '<div class="btn btn-danger btn-sm m-1">
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
    function message()
    {
        alert('Yakin ingin menghapus?')
    }
</script>