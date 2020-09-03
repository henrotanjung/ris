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

                                <?php echo form_open_multipart(base_url() . 'dealer_group_c/insert_data') ?>

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Dealer Group</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <button type="button" id="btn-tambah-form">Tambah Data Form</button>
                                <button type="button" id="btn-reset-form">Reset Form</button><br><br>
                                <table>
                                    <tr>
                                        <td>Dealer Code</td>
                                        <td>Dealer Name</td>
                                        <td>Accounting Name</td>
                                        <td>Address</td>
                                        <td>City</td>
                                        <td>Kecamatan</td>
                                        <td>Kelurahan</td>
                                        <td>Phone</td>
                                    </tr>
                                    <tr>
                                        <td><input style="width: 100px;" type="text" name="dealer_code[]" ></td>
                                        <td><input style='width: 140px;' type="text" name="dealer_name[]" ></td>
                                        <td><input style='width: 140px;' type="text" name="acc_name[]" ></td>
                                        <td><input type="text" name="address[]" ></td>
                                        <td><input style='width: 130px;' type="text" name="city[]" ></td>
                                        <td><input style='width: 140px;' type="text" name="kecamatan[]" ></td>
                                        <td><input style='width: 140px;' type="text" name="kelurahan[]" ></td>
                                        <td><input style='width: 100px;' type="text" name="phone[]" ></td>
                                    </tr>
                                </table>
                                <div id="insert-form"></div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <a  href="<?php echo base_url() ;?>dealer_group_c/index" type="submit" class="btn btn-default float-right">Cancel</a>
                                </div>
                                <!-- /.card-footer -->
                                <?php echo form_close(); ?>
                                <input type="hidden" id="jumlah-form" value="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<script>
    $(document).ready(function() { // Ketika halaman sudah diload dan siap
        $("#btn-tambah-form").click(function() { // Ketika tombol Tambah Data Form di klik
            var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
            var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

            // Kita akan menambahkan form dengan menggunakan append
            // pada sebuah tag div yg kita beri id insert-form
            $("#insert-form").append(
                "<table>" +
                "<tr>" +
                "<td><input style='width: 100px;' type='text' name='dealer_code[]' ></td>" +
                "<td><input style='width: 140px;' type='text' name='dealer_name[]' ></td>" +
                "<td><input style='width: 140px;' type='text' name='acc_name[]' ></td>" +
                "<td><input type='text' name='address[]' ></td>" +
                "<td><input style='width: 130px;' type='text' name='city[]' ></td>" +
                "<td><input style='width: 140px;' type='text' name='kecamatan[]' ></td>" +
                "<td><input style='width: 140px;' type='text' name='kelurahan[]' ></td>" +
                "<td><input style='width: 100px;' type='text' name='phone[]' ></td>" +
                "</tr>" +
                "</table>"
            );

            $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
        });
        $("#btn-reset-form").click(function() {
            $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
            $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
        });
    });
</script>