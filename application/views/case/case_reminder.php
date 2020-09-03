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
                  <th>Case</th>
                  <th>Case Status</th>
                  <th>Category</th>
                  <th>Spoken To</th>
                  <th>Spoken To Debt</th>
                  <th>Contact Type</th>
                  <th>Sequence</th>
                  <th>Content</th>
                  <th>Provider</th>
                  <th>Created By</th>
                  <th>Create Date</th>
                </tr>
              </thead>
              <tbody>
                
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

    //datatables
    $('#client_table').DataTable({

      "processing": true,
      "serverSide": true,
      "order": [],
      "sScrollY": true,

      "ajax": {
        "url": "<?php echo site_url('case_reminder_c/case_reminder') ?>",
        "type": "POST"
      },


      "columnDefs": [{
        "targets": [0],
        "orderable": false,
      }, ],

    });

  });
</script>