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
            <?php echo anchor(base_url() . "dealer_group_c/index", '<div class="btn btn-danger btn-sm">
                        <i>&times;</i>
                      </div>'); ?>
        </div>
        <div class="clearfix"></div>
        <table class="table">
            <tr>
                <th>No</th>
                <td><?php echo $d_group[0]->id; ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?php echo $d_group[0]->name; ?></td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td width="100px">Dealer Code</td>
                <td width="140px">Dealer Name</td>
                <td width="140px">Accounting Name</td>
                <td >Address</td>
                <td width="130px">City</td>
                <td width="140px">Kecamatan</td>
                <td width="140px">Kelurahan</td>
                <td width="100px">Phone</td>
            </tr>
            <?php foreach ($dealers as $dealer) { ?>
            <tr>
                <td><input style="width: 100px;" type="text" value="<?php echo $dealer->dealer_group; ?>" disabled></td>
                <td><input style='width: 140px;' type="text" value="<?php echo $dealer->name; ?>" disabled></td>
                <td><input style='width: 140px;' type="text" value="<?php echo $dealer->accounting_name; ?>" disabled></td>
                <td><input type="text" value="<?php echo $dealer->address; ?>" disabled></td>
                <td><input style='width: 130px;' type="text" value="<?php echo $dealer->city; ?>" disabled></td>
                <td><input style='width: 140px;' type="text" value="<?php echo $dealer->kecamatan; ?>" disabled></td>
                <td><input style='width: 140px;' type="text" value="<?php echo $dealer->kelurahan; ?>" disabled></td>
                <td><input style='width: 100px;' type="text" value="<?php echo $dealer->phone; ?>" disabled></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </section>
    <section>

    </section>

    <!-- Main content -->
</div>