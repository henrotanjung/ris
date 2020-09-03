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

    <section class="content">
        <div class="card-header float-right">
            <?php echo anchor(base_url() . "product_c/index", '<div class="btn btn-danger btn-sm">
                        <i>&times;</i>
                      </div>'); ?>
        </div>
        <div class="clearfix"></div>
        <div class="card rounded float-left" style="width: 10rem;">
            <img src="<?php echo base_url() ?>upload/<?php echo $product[0]->photo; ?>" class="card-img-top" alt="NO IMAGE">
        </div>
        <table class="table">
            <tr>
                <th>Nama</th>
                <td><?php echo $product[0]->nama; ?></td>
            </tr>
            <tr>
                <th>Uom</th>
                <td><?php echo $product[0]->uom; ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td><?php echo $product[0]->harga; ?></td>
            </tr>
            <tr>
                <th>Jumlah Tersedia</th>
                <td><?php echo $product[0]->qty; ?></td>
            </tr>
        </table>
    </section>



    <!-- Main content -->
</div>