<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $info ?></h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $info ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $info ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Horizontal Form</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <?php echo form_open_multipart('product_c/simpan') ?>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="uom" class="col-sm-2 col-form-label">Uom</label>
                                        <div class="col-sm-2">
                                            <select name="uom" id="uom" class="form-control">
                                                <option>Kg</option>
                                                <option>Pcs</option>
                                                <option>M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="qty" class="col-sm-2 col-form-label">Qty</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="qty" id="qty" placeholder="Qty">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="photo" id="photo">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                                </div>
                                <!-- /.card-footer -->
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>