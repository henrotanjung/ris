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

                <?php echo form_open_multipart(base_url() . 'ticket_c/insert_data') ?>
                <div class="col-lg-12">
                  <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h5 class="m-0">Status</h5>
                    </div>
                    <div class="col-sm-12">
                      <div class="card-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-2">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" value="pending" name="ticket_status" checked>
                                <label class="form-check-label">Pending</label>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" value="proced_to_case" name="ticket_status">
                                <label class="form-check-label">Proceed to Case</label>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-check mr-2">
                                <input class="form-check-input" type="radio" value="cancel" name="ticket_status">
                                <label class="form-check-label">Cancel</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">

                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-tinformation" role="tab" aria-controls="nav-tinformation" aria-selected="true">Ticket Information</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-c-information" role="tab" aria-controls="nav-c-information" aria-selected="false">Call Information</a>
                        <a class="nav-item nav-link" id="nav-m-information-tab" data-toggle="tab" href="#nav-m-information" role="tab" aria-controls="nav-m-information" aria-selected="false">Member Information</a>
                        <a class="nav-item nav-link" id="nav-trial-information-tab" data-toggle="tab" href="#nav-trial-information" role="tab" aria-controls="nav-trial-information" aria-selected="false">Trial Information</a>
                      </div>

                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-tinformation" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card-body">
                          <div class="row">
                            <div class="col col-sm-3"><label>Client</label></div>
                            <div class="col-sm-4">
                              <div class="form-group">
                                <select class="form-control" name="client" id="client">
                                  <?php
                                  $datas = $this->client_m->autocomplete_client('client');
                                  foreach ($datas as $data) {
                                    ?>
                                    echo "<option value="<?php echo $data->id; ?>"><?php echo $data->full_name; ?></option>"
                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col col-sm-3"><label>Program</label></div>
                            <div class="col-sm-4">
                              <div class="input-group mb-3">
                                <input type="text" name="program" id="program" value="" class="form-control">
                                <div class="input-group-append">
                                  <span class="input-group-text"><i data-toggle="modal" data-target="#programModal" class="fas fa-search-plus" id="search_program"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col col-sm-3"><label>Source Category</label></div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <select id="s_category" class="form-control">
                                  <option>Please Select</option>
                                  <?php
                                  $datas = $this->category_m->get_all_data('category');
                                  foreach ($datas as $data) {
                                    ?>
                                    echo "<option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>";
                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col col-sm-3"><label>Type of Inquiry</label></div>
                            <div class="col-sm-3">
                              <div class="form-group">
                                <select id="inquiry" class="form-control">

                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col col-sm-3"><label>Detail</label></div>
                            <div class="col col-sm-6">
                              <!-- textarea -->
                              <div class="form-group">
                                <textarea class="form-control" rows="3" name="detail" id="detail" placeholder="Enter ..."></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-c-information" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="card">
                          <div class="col-sm-12">
                            <div class="card-body">
                              <div class="form-group">
                                <div class="row justify-content-md-center mb-4">
                                  <div class="col col-lg-3">
                                  </div>
                                  <div class="col col-lg-3">
                                    Caller Name
                                  </div>
                                  <div class="col col-lg-3">
                                    Caller Phone
                                  </div>
                                  <div class="col col-lg-3">
                                    Caller Relation
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <label>Caller Information 1</label>
                                  </div>
                                  <div class="col col-lg-3">
                                    <div class="form-group">
                                      <input type="text" name="call_name_1" id="call_name_1" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col col-lg-3">
                                    <div class="form-group">
                                      <input type="text" name="call_phone_1" id="call_phone_1" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col col-lg-3">
                                    <div class="form-group">
                                      <input type="text" name="call_relation_1" id="call_relation_1" class="form-control">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col col-sm-3">
                                    <label>Caller Information 2</label>
                                  </div>
                                  <div class="col col-lg-3">
                                    <div class="form-group">
                                      <input type="text" name="call_name_2" id="call_name_2" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col col-lg-3">
                                    <div class="form-group">
                                      <input type="text" name="call_phone_2" id="call_phone_2" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col col-lg-3">
                                    <div class="form-group">
                                      <input type="text" name="call_relation_2" id="call_relation_2" class="form-control">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <label>Caller Information 3</label>
                                  </div>
                                  <div class="col col-lg-3">
                                    <div class="form-group">
                                      <input type="text" name="call_name_3" id="call_name_3" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col col-lg-3">
                                    <div class="form-group">
                                      <input type="text" name="call_phone_3" id="call_phone_3" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col col-lg-3">
                                    <div class="form-group">
                                      <input type="text" name="call_relation_3" id="call_relation_3" class="form-control">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-3"><label>Caller Address</label></div>
                                  <div class="col-sm-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                      <textarea name="call_address" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-m-information" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="card">
                          <div class="col-sm-12">
                            <div class="card-body">
                              <div class="form-group">
                                <div class="row">
                                  <div class="col col-sm-3"><label>Declare Member</label></div>
                                  <div class="col-sm-3">
                                    <div class="form-group">
                                      <select class="form-control" id="d_member" name="d_member">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col col-sm-3"><label>Member</label></div>
                                  <div class="col col-lg-5">
                                    <div class="input-group mb-3">
                                      <input type="text" id="member" name="member" class="form-control">
                                      <div class="input-group-append">
                                        <span class="input-group-text"><i id="search_member" data-toggle="modal" data-target="#memberModal" class="fas fa-search-plus"></i></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- #########
                                #####fieldset to disable
                                ######### -->
                                <fieldset id="member_fieldset">
                                  <div class="row ">
                                    <div class="col col-lg-3">
                                      <label>Chasis No</label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <input type="text" name="chais_no" id="chais_no" class="form-control" placeholder="Enter ...">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row ">
                                    <div class="col col-lg-3">
                                      <label>Other Chasis No</label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <input type="text" name="o_chais_no" id="o_chais_no" class="form-control" placeholder="Enter ...">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row ">
                                    <div class="col col-lg-3">
                                      <label>Member Name</label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <input type="text" name="member_name" id="member_name" class="form-control" placeholder="Enter ...">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row ">
                                    <div class="col col-lg-3">
                                      <label>Member Program</label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <input type="text" name="member_program" id="member_program" class="form-control" placeholder="Enter ...">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row ">
                                    <div class="col col-lg-3">
                                      <label>Policy No</label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <input type="text" name="policy_no" id="policy_no" class="form-control" placeholder="Enter ...">
                                      </div>
                                    </div>
                                    <!-- date  -->

                                  </div>

                                  <div class="row">
                                    <div class="col col-lg-3">
                                      <label>Policy Effective Date </label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <div id="datepicker_effetive_date" class="input-group date" data-date-format="mm-dd-yyyy">
                                          <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                          </span>
                                          <input class="form-control" name="policy_effetive_date" id="policy_effetive_date" type="text" readonly />
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col col-lg-3">
                                      <label>Policy Expiry Date</label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <div id="datepicker_expiry_date" class="input-group date" data-date-format="mm-dd-yyyy">
                                          <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                          </span>
                                          <input class="form-control" name="policy_expiry_date" id="policy_expiry_date" type="text" readonly />
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row ">
                                    <div class="col col-lg-3">
                                      <label>Vehicle No</label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <input type="text" name="vehicle_no" id="vehicle_no" class="form-control" placeholder="Enter ...">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row ">
                                    <div class="col col-lg-3">
                                      <label>Vehicle Color</label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <input type="text" name="vehicle_color" id="vehicle_color" class="form-control" placeholder="Enter ...">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col col-sm-3"><label>Vehicle Brand</label></div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <select class="form-control" name="vehicle_brand" id="vehicle_brand">
                                          <option>Please Select</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col col-sm-3"><label>Vehicle Type</label></div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <select class="form-control" name="vehicle_type" id="vehicle_type">
                                          <option>Please Select</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row ">
                                    <div class="col col-lg-3">
                                      <label>Vehicle Model</label>
                                    </div>
                                    <div class="col col-lg-5">
                                      <div class="form-group">
                                        <input type="text" class="form-control" name="vehicle_model" id="vehicle_model" placeholder="Enter ...">
                                      </div>
                                    </div>
                                  </div>
                                  <fieldset>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="nav-trial-information" role="tabpanel" aria-labelledby="nav-trial-information-tab">
                        <div class="card card-primary card-outline">
                          <div class="col-sm-12">
                            <div class="card-body">
                              <div class="form-group">

                                <div class="row ">
                                  <div class="col col-lg-3">
                                    <label>Created By</label>
                                  </div>
                                  <div class="col col-lg-5">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Enter ...">
                                    </div>
                                  </div>
                                </div>

                                <div class="row ">
                                  <div class="col col-lg-3">
                                    <label>Created Date</label>
                                  </div>
                                  <div class="col col-lg-5">
                                    <div class="form-group">
                                      <input type="text" class="form-control" name="created_date" id="created_date" placeholder="Enter ...">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>

                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
                <?php echo form_close(); ?>
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