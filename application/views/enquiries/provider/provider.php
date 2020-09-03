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
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row mb-1">
                            <div class="col-md-3 float-left">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>client_c/add_client" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Tambah
                                </a>
                                <a class="btn btn-info btn-sm" hidden data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" hidden data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Delete
                                </a>
                            </div>
                        </div>
                        <table id="provider_table" class="stripe row-border order-column" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Status</th>
                                    <th>Provider Code</th>
                                    <th>Full Name</th>
                                    <th>Accounting Name</th>
                                    <th>Client</th>
                                    <th>Rating</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>24 Hours</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($provider as $row) {
                                    $no++;
                                    // $hours = $row->24_hours;
                                    $row = (array) $row;
                                    ?>
                                    <tr>
                                        <td><?php echo anchor(base_url() . "client_c/index/" . $row['id'], '<i class="fa fa-search-plus fa-sm"></i>');
                                                ?>
                                        </td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['provider_code']; ?></td>
                                        <td><?php echo $row['full_name']; ?></td>
                                        <td><?php echo $row['accounting_name']; ?></td>
                                        <td><?php echo $row['client']; ?></td>
                                        <td><?php echo $row['rating']; ?></td>
                                        <td><?php echo $row['city']; ?></td>
                                        <td><?php echo $row['country']; ?></td>
                                        <td><?php echo $row['24_hours']; ?></td>
                                        <td><?php echo $row['type']; ?></td>
                                    
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
        var table = $('#provider_table').DataTable({
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            fixedColumns: {
                heightMatch: 'none'
            }
        });
    });
</script>