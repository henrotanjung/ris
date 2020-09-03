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
                        <table id="client_table" class="stripe row-border order-column" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Full Name</th>
                                    <th>Abbreviation Name</th>
                                    <th>Accounting Name</th>
                                    <th>Address</th>
                                    <th>Postal</th>
                                    <th>City</th>
                                    <th>Phone</th>
                                    <th>Other Phone</th>
                                    <th>Fax</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th>Created By</th>
                                    <th>Create Date</th>
                                    <th>Edited By</th>
                                    <th>Edit Date</th>
                                    <th>Effective Date</th>
                                    <th>Expiry Date</th>
                                    <th>Bank</th>
                                    <th>Location</th>
                                    <th>Account No.</th>
                                    <th>Currency</th>
                                    <th>On Behalf of</th>
                                    <th>Status</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($client as $row) {
                                    $no++;
                                    ?>
                                    <tr>
                                        <td><?php echo anchor(base_url() . "client_c/index/" . $row->id, '<i class="fa fa-search-plus fa-sm"></i>');
                                                ?>
                                        </td>
                                        <td><?php echo $row->id; ?></td>
                                        <td><?php echo $row->full_name; ?></td>
                                        <td><?php echo $row->abbreviation_name; ?></td>
                                        <td><?php echo 'accounting name'; ?></td>
                                        <td><?php echo $row->address; ?></td>
                                        <td><?php echo $row->postal; ?></td>
                                        <td><?php echo $row->city; ?></td>
                                        <td><?php echo $row->phone; ?></td>
                                        <td><?php echo $row->other_phone; ?></td>
                                        <td><?php echo $row->fax; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->website; ?></td>
                                        <td><?php echo $row->created_by; ?></td>
                                        <td><?php echo $row->create_date; ?></td>
                                        <td><?php echo $row->edited_by; ?></td>
                                        <td><?php echo $row->edit_date; ?></td>
                                        <td><?php echo $row->effective_date; ?></td>
                                        <td><?php echo $row->expiry_date; ?></td>
                                        <td><?php echo $row->bank; ?></td>
                                        <td><?php echo $row->location; ?></td>
                                        <td><?php echo $row->account_no; ?></td>
                                        <td><?php echo $row->currency; ?></td>
                                        <td><?php echo $row->on_behalf_of; ?></td>
                                        <td><?php echo $row->status; ?></td>
                                        <td><?php echo $row->type; ?></td>

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