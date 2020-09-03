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
                                <form class="form-horizontal" action="<?php echo base_url(); ?>product_c/simpan_edit" method="POST">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" hidden name="id" id="id" value="<?php echo $product[0]->id; ?>">
                                                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $product[0]->nama; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="uom" class="col-sm-2 col-form-label">Uom</label>
                                            <div class="col-sm-2">
                                                <select name="uom" id="uom" class="form-control">
                                                    <option value="<?php echo $product[0]->uom;?>">Kg</option>
                                                    <option value="<?php echo $product[0]->uom;?>">Pcs</option>
                                                    <option value="<?php echo $product[0]->uom;?>">M</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $product[0]->harga; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="qty" class="col-sm-2 col-form-label">Qty</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" name="qty" id="qty" value="<?php echo $product[0]->qty; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>