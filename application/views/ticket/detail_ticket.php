<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1><?php echo $info ?></h1>
        </div>
        <div class="col-sm-12">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?php echo $info ?></li>
          </ol>
        </div>
        <a href="<?php echo base_url(); ?>ticket_c/edit_ticket">
          <i class="fas fa-edit ml-3 mt-3"></i>
        </a>
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

            <!-- /.card-header -->
            <div class="card-body">
              <div class="card card-info">
                <!-- /.card-header -->
                <!-- form start -->

                <div class="col-lg-12">
                  <div class="card card-primary card-outline">
                    <div class="card-header bg-card-header">
                      <h5 class="m-0" style="color: white;">Ticket Status</h5>
                    </div>
                    <div class="col-sm-12">
                      <div class="card-body">
                        <table class="table table-sm">
                          <tr style="height: 20px;">
                            <td style="width: 30%; ">Tickets Number</td>
                            <td><?php echo $tickets[0]->ticket_number; ?></td>
                          </tr>
                          <tr style="height: 20px;">
                            <td>Tickets Status</td>
                            <td><?php echo $tickets[0]->status; ?></td>
                          </tr>
                          <tr style="height: 20px;">
                            <td>Case Ref</td>
                            <td><?php echo $tickets[0]->case_ref; ?></td>
                          </tr>
                          <tr style="height: 20px;">
                            <td>Link</td>
                            <td><?php echo $tickets[0]->link; ?></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card card-primary card-outline">
                    <div class="card-header bg-card-header">
                      <h5 class="m-0">Tickets Information</h5>
                    </div>
                    <div class="col-sm-12">
                      <div class="card-body">
                        <table class="table table-sm">
                          <tr>
                            <td style="width: 30%; ">Client</td>
                            <td><?php echo $tickets[0]->client; ?></td>
                          </tr>
                          <tr>
                            <td>Program</td>
                            <td><?php echo $tickets[0]->program; ?></td>
                          </tr>
                          <tr>
                            <td>Source Category</td>
                            <td><?php echo $tickets[0]->category; ?></td>
                          </tr>
                          <tr>
                            <td>Type of Inquiry</td>
                            <td><?php echo $tickets[0]->inquiry; ?></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card card-primary card-outline">
                    <div class="card-header bg-card-header">
                      <h5 class="m-0">Call Information</h5>
                    </div>
                    <div class="col-sm-12">
                      <div class="card-body">
                        <table class="table">
                          <tr>
                            <td></td>
                            <td>Caller Name</td>
                            <td>Caller Phone</td>
                            <td>Caller Relation</td>
                          </tr>
                          <tr>
                            <td>Caller Information 1</td>
                            <td><?php echo $tickets[0]->caller_name_1; ?></td>
                            <td><?php echo $tickets[0]->caller_telp_1; ?></td>
                            <td><?php echo $tickets[0]->caller_relation_1; ?></td>
                          </tr>
                          <tr>
                            <td>Caller Information 2</td>
                            <td><?php echo $tickets[0]->caller_name_2; ?></td>
                            <td><?php echo $tickets[0]->caller_telp_2; ?></td>
                            <td><?php echo $tickets[0]->caller_relation_2; ?></td>
                          </tr>
                          <tr>
                            <td>Caller Information 3</td>
                            <td><?php echo $tickets[0]->caller_name_3; ?></td>
                            <td><?php echo $tickets[0]->caller_telp_2; ?></td>
                            <td><?php echo $tickets[0]->caller_relation_3; ?></td>
                          </tr>
                          <tr>
                            <td>Caller Address</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card card-primary card-outline">
                    <div class="card-header bg-card-header">
                      <h5 class="m-0">Member Information</h5>
                    </div>
                    <div class="col-sm-12">
                      <div class="card-body">
                        <table class="table table-sm">
                          <tr>
                            <td style="width: 30%; ">Declare Member</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Member</td>
                            <td><?php echo $tickets[0]->caller_name_1; ?></td>
                          </tr>
                          <tr>
                            <td>Chasis No</td>
                            <td><?php echo $tickets[0]->caller_name_2; ?></td>
                          </tr>
                          <tr>
                            <td>Other Chasis No</td>
                            <td><?php echo $tickets[0]->caller_name_3; ?></td>
                          </tr>
                          <tr>
                            <td>Member Name</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                          <tr>
                            <td>Member Program</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                          <tr>
                            <td>Policy No</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                          <tr>
                            <td>Policy Effective Date</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                          <tr>
                            <td>Policy Expiry Date</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                          <tr>
                            <td>Vehicle No</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                          <tr>
                            <td>Vehicle Color</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                          <tr>
                            <td>Vehicle Brand</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                          <tr>
                            <td>Vehicle Type</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                          <tr>
                            <td>Vehicle Model</td>
                            <td><?php echo $tickets[0]->address; ?></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="card card-primary card-outline">
                    <div class="card-header bg-card-header">
                      <h5 class="m-0">Trial Information</h5>
                    </div>
                    <div class="col-sm-12">
                      <div class="card-body">
                        <table class="table table-sm">
                          <tbody>
                            <tr>
                              <td style="width: 30%; " scope="row">Created By</td>
                              <td><?php echo $tickets[0]->client; ?></td>
                            </tr>
                            <tr>
                              <td>Created Date</td>
                              <td><?php echo $tickets[0]->program; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="badan">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="programModal" tabindex="-1" role="dialog" aria-labelledby="programModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="programModalTitle">Program</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="form_dialog">
            <div class="modal-body" id="dynamic-content">

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="button" id="select_program" class="btn btn-primary" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="container modal-content" style="overflow-y: auto;">
          <div class="modal-header">
            <h5 class="modal-titlememberTitle">Member</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="form_dialogr">
            <div class="modal-body" id="dynamic-content-member">

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="button" id="select_member" class="btn btn-primary" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>



<script type="text/javascript">
  $(function() {
    $("#datepicker_effetive_date").datepicker({
      autoclose: true,
      todayHighlight: true
    }).datepicker('update', new Date());
    $("#datepicker_expiry_date").datepicker({
      autoclose: true,
      todayHighlight: true
    }).datepicker('update', new Date());
  });

  $(document).ready(function() {
    $("#program").autocomplete({
      source: "<?php echo base_url() . ('ticket_c/autocomplete_program') ?>"
    });
    $("#s_category").change(function() {
      var id = $(this).val();
      $.ajax({
        url: "<?php echo base_url() . ('ticket_c/autocomplete_get_enquiry') ?>",
        method: "POST",
        data: {
          id: id
        },
        async: true,
        dataType: 'json',
        success: function(data) {
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            html += '<option value=' + data[i].name + '>' + data[i].name + '</option>';
          }
          $('#inquiry').html(html);
        }
      });

    });

    $("#search_program").click(function() {
      var client_id = $("#client").val();
      $('#dynamic-content').html(''); // leave it blank before ajax call

      $.ajax({
          url: "<?php echo base_url() . ('program_c/show_dialog'); ?>",
          method: 'POST',
          data: 'client_id=' + client_id,
          dataType: 'html'
        })
        .done(function(data) {
          try {
            $('#dynamic-content').html('');
            $('#dynamic-content').html(data); // load response 
          } catch (err) {
            alert(err.message);
          }
        })
        .fail(function() {
          $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          // $('#modal-loader').hide();
        });
    });
    //ketika klik button select di dialog box
    $("#select_program").click(function() {
      var result = $('#dlg_program:checked');
      if (result.length > 0) {
        $("#program").val(result.val());
      }
      $('#programModal').modal('toggle');

      return true;
    })

    $("#client").change(function() {
      var client_id = $("#client").val();
      $.ajax({
        url: "<?php echo base_url() . 'ticket_c/get_declare_member' ?>",
        method: "POST",
        data: 'client_id=' + client_id,
        success: function(data) {
          console.log(data);
          if (data == 1) {
            $("#d_member").val(1);
          } else {
            $("#d_member").val(0);
          }
        }
      })
    })

    // ketika klik icon search di field
    $("#search_member").click(function() {
      var client_id = $("#client").val();
      $.ajax({
          url: "<?php echo base_url() . 'member_c/show_dialog_member' ?>",
          method: "POST",
          data: 'client_id=' + client_id,
          dataType: 'html',

        })
        .done(function(data) {
          try {
            $('#dynamic-content-member').html('');
            $('#dynamic-content-member').html(data); // load response 
          } catch (err) {
            alert(err.message);
          }
        })
    })
    // ketika klick button select button di dialog box member
    $("#select_member").click(function() {
      var member = $("#dlg_member:checked");
      $("#member").val(member.val());
      $("#memberModal").modal('toggle')
    })

    $('#d_member').change(function() {
      var member = $(this).val();
      if ($(this).val() == "1") {
        console.log(1);
        $("#member_fieldset").attr("disabled", "disabled")
      } else {
        console.log(123);
      }
    });

  });
</script>