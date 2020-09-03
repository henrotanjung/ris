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
                                    <div class="card">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-client-tab" data-toggle="tab" href="#nav-client" role="tab" aria-controls="nav-client" aria-selected="true">Client</a>
                                                <a class="nav-item nav-link" id="nav-trial-information-tab" data-toggle="tab" href="#nav-trial-information" role="tab" aria-controls="nav-trial-information" aria-selected="false">Trial Information</a>
                                            </div>

                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-client" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <div class="card">
                                                    <div class="col-sm-12">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col col-sm-3"><label>Id</label></div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Full Name</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" name="chais_no" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Abbreviation Name</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Accounting Name</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Address</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Postal</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>City</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>phone</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Other Phone</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Fax</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Email</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Website</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Effective Date</label>
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
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Expiry Date</label>
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
                                                                        <label>Bank</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Location</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Account No</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Currency</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>On Behalf of</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Status</label>
                                                                    </div>
                                                                    <div class="col col-lg-5">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" placeholder="Enter ...">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col col-lg-3">
                                                                        <label>Type</label>
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
                                            <div class="tab-pane fade" id="nav-trial-information" role="tabpanel" aria-labelledby="nav-trial-information-tab">
                                                <div class="card card-primary card-outline">
                                                    <div class="col-sm-12">
                                                        <div class="card-body">
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
                                                                    <label>Create Date</label>
                                                                </div>
                                                                <div class="col col-lg-5">
                                                                    <div class="form-group">
                                                                        <div id="datepicker_create_date" class="input-group date" data-date-format="mm-dd-yyyy">
                                                                            <span class="input-group-text">
                                                                                <i class="far fa-calendar-alt"></i>
                                                                            </span>
                                                                            <input class="form-control" type="text" />
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row ">
                                                                <div class="col col-lg-3">
                                                                    <label>Edited By</label>
                                                                </div>
                                                                <div class="col col-lg-5">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Enter ...">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row ">
                                                                <div class="col col-lg-3">
                                                                    <label>Edit Date</label>
                                                                </div>
                                                                <div class="col col-lg-5">
                                                                    <div class="form-group">
                                                                        <div id="datepicker_effetive_date" class="input-group date" data-date-format="mm-dd-yyyy">
                                                                            <span class="input-group-text">
                                                                                <i class="far fa-calendar-alt"></i>
                                                                            </span>
                                                                            <input class="form-control" type="text" />
                                                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i>
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
        $("#datepicker_create_date").datepicker({
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