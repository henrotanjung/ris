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
        <div class="clearfix"><h4><strong>Dealer Group</strong></h4></div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <tr>
                <td><?php echo $d_group[0]->id; ?></td>
                <td><?php echo $d_group[0]->name; ?></td>
            </tr>
        </table>
        <h4><strong>Dealer</strong></h4>
        <table id="dealer_table">
            <thead>
                <tr>
                    <td width="60px">Code</td>
                    <td width="130px">Name</td>
                    <td width="120px">Acc Name</td>
                    <td width="120px">Address</td>
                    <td width="110px">City</td>
                    <td width="110px">Kecamatan</td>
                    <td width="120px">Kelurahan</td>
                    <td width="100px">Phone</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dealers as $dealer) { ?>
                    <tr>
                        <td><input style="width: 60px;" type="text" value="<?php echo $dealer->dealer_group; ?>" disabled></td>
                        <td><input style='width: 130px;' type="text" value="<?php echo $dealer->name; ?>" disabled></td>
                        <td><input style='width: 120px;' type="text" value="<?php echo $dealer->accounting_name; ?>" disabled></td>
                        <td><input style='width: 120px;' type="text" value="<?php echo $dealer->address; ?>" disabled></td>
                        <td><input style='width: 110px;' type="text" value="<?php echo $dealer->city; ?>" disabled></td>
                        <td><input style='width: 110px;' type="text" value="<?php echo $dealer->kecamatan; ?>" disabled></td>
                        <td><input style='width: 120px;' type="text" value="<?php echo $dealer->kelurahan; ?>" disabled></td>
                        <td><input style='width: 100px;' type="text" value="<?php echo $dealer->phone; ?>" disabled></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <section>

    </section>

    <!-- Main content -->
</div>
<script>
    $(document).ready(function() {

        $('#dealer_table').DataTable({
            "searching": false
        });
    });
</script>