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
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>ticket_c/add_ticket" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                        <table id="client_table" class="stripe row-border order-column" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Ticket Status</th>
                                    <th>Ticket Number</th>
                                    <th>Caller Name 1</th>
                                    <th>Caller Phone 1</th>
                                    <th>Vehicle Merk</th>
                                    <th>Vehicle Model</th>
                                    <th>Client</th>
                                    <th>Source Category</th>
                                    <th>Type of Inquiry</th>
                                    <th>Create By</th>
                                    <th>Create Date</th>
                                    <th>Link</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($ticket as $row) {
                                    $no++;
                                    ?>
                                    <tr>
                                        <td><?php echo anchor(base_url() . "ticket_c/detail/" . $row->id, '<i class="fa fa-search-plus fa-sm"></i>');
                                                ?>
                                        </td>
                                        <?php
                                            if ($row->status == 1) {
                                                $status = 'Pending';
                                            } elseif ($row->status == 2) {
                                                $status = 'Process to Case';
                                            } else {
                                                $status = 'Cance';
                                            }
                                            ?>
                                        <td style="width: 10px"><?php echo $status; ?></td>
                                        <td><?php echo $row->ticket_number; ?></td>
                                        <td><?php echo $row->caller_name_1; ?></td>
                                        <td><?php echo $row->caller_telp_1; ?></td>
                                        <td><?php echo $row->vehicle_no; ?></td>
                                        <td><?php echo $row->vehicle_model; ?></td>
                                        <td><?php echo $row->client; ?></td>
                                        <td><?php echo $row->category; ?></td>
                                        <td><?php echo $row->inquiry; ?></td>
                                        <td><?php echo $row->created_by; ?></td>
                                        <td><?php echo $row->create_date; ?></td>
                                        <td><?php echo $row->link; ?></td>

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

<!-- <script>
    $(document).ready(function() {
        $('#client_table').DataTable({
            "scrollY": "200px",
            "scrollX": true,
            fixedColumns: {
                heightMatch: 'none'
            }
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script> -->
<script>
    $(document).ready(function() {
        var table = $('#client_table').DataTable({
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            fixedColumns: {
                heightMatch: 'none'
            }
        });
    });
</script>