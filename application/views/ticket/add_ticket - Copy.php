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
            <a href="">
                <i class="fas fa-edit ml-3 mt-3"></i>
            </a>
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
                                        <div class="card-header">
                                            <h5 class="m-0">Ticket Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col col-sm-3"><label>Client</label></div>
                                                <!-- <div class="col-sm-4 mb-3">
                                                    <input type="text" class="form-control" name="client" id="client">
                                                </div> -->

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <select class="form-control" name="client" id="client">
                                                            <?php
                                                            $datas = $this->client_m->autocomplete_client('client');
                                                            foreach ($datas as $data) {
                                                                ?>
                                                                echo "<option><?php echo $data->full_name; ?></option>""
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
                                                        <input type="text" name="program" id="program" class="form-control">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fas fa-search-plus"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-sm-3"><label>Source Category</label></div>
                                                <!-- <div class="col-sm-4 mb-3">
                                                    <input type="text" class="form-control" name="s_category" id="s_category">
                                                </div> -->
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>option 1</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col col-sm-3"><label>Type of Inquiry</label></div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option>option 1</option>
                                                            <option>option 2</option>
                                                            <option>option 3</option>
                                                            <option>option 4</option>
                                                            <option>option 5</option>
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
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="m-0">Call Information</h5>
                                        </div>
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
                                                            Call Relation
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
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="m-0">Member Information</h5>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col col-sm-3"><label>Declare Member</label></div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option>option 1</option>
                                                                    <option>option 2</option>
                                                                    <option>option 3</option>
                                                                    <option>option 4</option>
                                                                    <option>option 5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-sm-3"><label>Member</label></div>
                                                        <div class="col col-lg-5">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fas fa-search-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col col-lg-3">
                                                            <label>Chasis No</label>
                                                        </div>
                                                        <div class="col col-lg-5">
                                                            <div class="form-group">
                                                                <input type="text" name="chais_no" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col col-lg-3">
                                                            <label>Other Chasis No</label>
                                                        </div>
                                                        <div class="col col-lg-5">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col col-lg-3">
                                                            <label>Member Name</label>
                                                        </div>
                                                        <div class="col col-lg-5">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col col-lg-3">
                                                            <label>Member Program</label>
                                                        </div>
                                                        <div class="col col-lg-5">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col col-lg-3">
                                                            <label>Policy No</label>
                                                        </div>
                                                        <div class="col col-lg-5">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Enter ...">
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
                                                                    <input class="form-control" type="text" readonly />
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
                                                                    <input class="form-control" type="text" readonly />
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
                                                                <input type="text" name="vehicle_no" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row ">
                                                        <div class="col col-lg-3">
                                                            <label>Vehicle Color</label>
                                                        </div>
                                                        <div class="col col-lg-5">
                                                            <div class="form-group">
                                                                <input type="text" name="vehicle_color" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col col-sm-3"><label>Vehicle Brand</label></div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option>option 1</option>
                                                                    <option>option 2</option>
                                                                    <option>option 3</option>
                                                                    <option>option 4</option>
                                                                    <option>option 5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col col-sm-3"><label>Vehicle Type</label></div>
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option>option 1</option>
                                                                    <option>option 2</option>
                                                                    <option>option 3</option>
                                                                    <option>option 4</option>
                                                                    <option>option 5</option>
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
                                                                <input type="text" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h5 class="m-0">Trial Information</h5>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="card-body">
                                                <div class="form-group">

                                                    <div class="row ">
                                                        <div class="col col-lg-3">
                                                            <label>Created By</label>
                                                        </div>
                                                        <div class="col col-lg-5">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Enter ...">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row ">
                                                        <div class="col col-lg-3">
                                                            <label>Created By</label>
                                                        </div>
                                                        <div class="col col-lg-5">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Enter ...">
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
                        </div>
                    </div>
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
        // $("#client").autocomplete({
        //     source: "<?php echo base_url() . ('ticket_c/autocomplete/'); ?>"
        // });
        $("#program").autocomplete({
            source: "<?php echo base_url() . ('ticket_c/autocomplete_program') ?>"
        });
        $("#s_category").autocomplete({
            source: "<?php echo base_url() . ('ticket_c/autocomplete_s_category') ?>"
        });
    });
</script>