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
            <h3 class="card-title"><strong>Product</strong></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-3 float-left">
                <a class="btn btn-primary btn-sm" data-toggle="collapse" href="<?php echo base_url(); ?>product_c/tambah_product" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Tambah
                </a>
                <a class="btn btn-info btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Edit
                </a>
                <a class="btn btn-danger btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Delete
                </a>
              </div>
              <div class="col-md-6">
                <div>
                  <?php echo form_open(base_url() . "product_c/search"); ?>
                  <select name="cariberdasarkan">
                    <option value="">Cari Berdasarkan</option>
                    <option value="nama">Nama</option>
                    <option value="harga">Harga</option>
                    <option value="qty">Jumlah</option>
                  </select>
                  <input type="text" name="yangdicari" id="" />
                  <input type="submit" value="Cari" />
                  <?php echo form_close(); ?>
                </div>
              </div>
              <div class="float-right">
                <?php echo $this->pagination->create_links(); ?>
              </div>
            </div>
            <?php echo anchor(base_url() . 'product_c/excel', '<div class="btn btn-success btn-sm mt-1">
                        Export Excel
                      </div>'); ?>
            <?php echo anchor(base_url() . 'product_c/import', '<div class="btn btn-success btn-sm mt-1">
                        Import
                      </div>'); ?>

            <table id="example2" class="table table-hover">
              <thead>
                <tr class="row">
                  <th class="col-1">No</th>
                  <th class="col-3">Nama</th>
                  <th class="col-1">Uom</th>
                  <th class="col-2">Harga</th>
                  <th class="col-2">Jumlah Tersedia</th>
                  <th class="col-3">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $no = 1;
                foreach ($products as $product) {
                  ?>
                  <tr class="row">
                    <td class="col-1"><?php echo ++$start; ?></td>
                    <td class="col-3"><?php echo $product->nama; ?></td>
                    <td class="col-1"><?php echo $product->uom; ?></td>
                    <td class="col-2"><?php echo $product->harga; ?></td>
                    <td class="col-2"><?php echo $product->qty; ?></td>
                    <td class="col-1"><?php echo anchor(base_url() . "product_c/detail/" . $product->id, '<div class="btn btn-success btn-sm">
                        <i class="fa fa-search-plus"></i>
                      </div>'); ?>
                    </td>
                    <td class="col-1" onclick="javascript: return confirm('Yakin ingin menghapus data?') "><?php echo anchor(base_url() . "product_c/hapus/" . $product->id, '<div class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                      </div>'); ?> </td>
                    <td class="col-1"><?php echo anchor(base_url() . "product_c/edit/" . $product->id, '<div class="btn btn-danger btn-sm">
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