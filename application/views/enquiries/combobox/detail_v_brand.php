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
            <?php echo anchor(base_url() . "vehicle_brand_c/index", '<div class="btn btn-danger btn-sm">
                        <i>&times;</i>
                      </div>'); ?>
        </div>
        <div class="clearfix"></div>
        <table class="table">
            <tr>
                <th>No</th>
                <td><?php echo $v_brand[0]->id; ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?php echo $v_brand[0]->name; ?></td>
            </tr>
        </table>
    </section>



    <!-- Main content -->
</div>