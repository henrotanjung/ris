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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $info ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="card card-info">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" action="<?php echo base_url(); ?>vehicle_type_c/simpan_edit" method="POST">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" hidden name="id" id="id" value="<?php echo $v_type[0]->id; ?>">
                                                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $v_type[0]->name; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="brand_id" class="col-sm-2 col-form-label">Brand</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control disabled" name="brand_id" id="brand_id" value="<?php echo $v_type[0]->vb_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="submit" class="btn btn-default float-right">Cancel</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
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
    $(document).ready(function() {
        $("#brand_id").autocomplete({            
            source: "<?php echo base_url().'vehicle_type_c/autocomplete_brand_id/?'; ?>"
        });
    });
</script>