<?php

class Product_c extends CI_Controller
{
    public function index()
    {
        #PAGINATION
        #load library
        $this->load->library('pagination');

        #set config untuk di parsing ke library pagination
        $config['base_url'] = base_url() . "product_c/index/";
        $config['total_rows'] = $this->product_m->countAllProducts('product');
        $config['per_page'] = 3;

        #stilyng
        include_once APPPATH . 'views/template/pagination.php';
        #initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        ###END PAGINATION
        $data['products'] = $this->product_m->getData('product', $config['per_page'], $data['start'])->result();
        $data['info'] = 'Data Products';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('product/product', $data);
        $this->load->view('template/footer');
    }

    public function getDatas()
    {
        // $this->load->model('product_m');
        $data['products'] = $this->product_m->getData('product')->result();
        $data['info'] = 'Data Products';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('product/product', $data);
        $this->load->view('template/footer');
    }

    public function tambah_product()
    {
        $data['info'] = 'Tambah Product';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/header');
        $this->load->view('product/tambah_product', $data);
        $this->load->view('template/footer');
    }

    public function do_upload()
    {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
        }
    }

    public function simpan()
    {
        $nama = $this->input->post('nama');
        $uom = $this->input->post('uom');
        $harga = $this->input->post('harga');
        $qty = $this->input->post('qty');
        $photo = $_FILES['photo']['name'];

        if ($photo == '') { } else {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'jpg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('photo')) {
                echo "Upload Gagal";
                die();
            } else {
                $this->upload->data('file_name');
            }
        }
        $datas = array(
            'nama' => $nama,
            'uom' => $uom,
            'harga' => $harga,
            'qty' => $qty,
            'photo' => $photo
        );
        $this->product_m->simpan($datas, 'product');
        redirect(base_url() . "product_c/index");
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->product_m->hapus($where, 'product');
        redirect(base_url() . "product_c/index");
    }

    public function edit($id)
    {
        $datas['product'] = $this->product_m->edit_data('product', $id)->result();
        $datas['info'] = 'Edit Product';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('product/edit_product', $datas);
        $this->load->view('template/footer');
    }



    public function simpan_edit()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $uom = $this->input->post('uom');
        $harga = $this->input->post('harga');
        $qty = $this->input->post('qty');

        $data = array(
            'id' => $id,
            'nama' => $nama,
            'uom' => $uom,
            'harga' => $harga,
            'qty' => $qty,
        );
        $this->product_m->edit('product', $data);
        redirect(base_url() . "product_c/index");
    }

    public function detail($id)
    {
        $datas['product'] = $this->product_m->detail('product', $id)->result();
        $datas['info'] = 'Detail Product';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('product/detail_product', $datas);
        $this->load->view('template/footer');
    }

    public function search()
    {
        #PAGINATION
        #load library
        $this->load->library('pagination');

        #set config untuk di parsing ke library pagination
        $config['base_url'] = base_url() . "product_c/index/";
        $config['total_rows'] = $this->product_m->countAllProducts('product');
        $config['per_page'] = 3;

        include_once APPPATH . 'views/template/pagination.php';

        #initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['cariberdasarkan'] = $this->input->post('cariberdasarkan');
        $data['yangdicari'] = $this->input->post('yangdicari');
        $data['products'] = $this->product_m->cari('product', $config['per_page'], $data['start'], $data['cariberdasarkan'], $data['yangdicari'])->result();
        $data['info'] = 'Data Products';
        $data['jumlah'] = count($data['products']);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('product/product', $data);
        $this->load->view('template/footer');
    }

    public function excel()
    {
        $data['product'] = $this->product_m->getAllData('product')->result();

        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();
        $object->getProperties()->setCreator('Henro');
        $object->getProperties()->setLastModifiedBy('Henro');
        $object->getProperties()->setTitle('Product');

        $object->setActiveSheetIndex(0);
        $object->getActiveSheet()->setCellValue('A1', 'No');
        $object->getActiveSheet()->setCellValue('B1', 'Nama');
        $object->getActiveSheet()->setCellValue('C1', 'Quantity');
        $object->getActiveSheet()->setCellValue('D1', 'Jumlah');

        $baris = 2;
        $no = 1;
        foreach ($data['product'] as $product) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $product->nama);
            $object->getActiveSheet()->setCellValue('C' . $baris, $product->qty);
            $object->getActiveSheet()->setCellValue('D' . $baris, $product->harga);
            $baris++;
        }

        $filename = "Data_Product" . '.xlsx';
        $object->getActiveSheet()->setTitle('Data Products');

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . $filename . '"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');

        $writer->save('php://output');
        exit;
    }

    public function import()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php';
        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('D:/srcupload/product.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        $data = array();

        $numrow = 1;
        foreach ($sheet as $row) {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Kita push (add) array data ke variabel data
                array_push($data, array(
                    'nama' => $row['A'], // Insert data nis dari kolom A di excel
                    'uom' => $row['B'], // Insert data nama dari kolom B di excel
                    'qty' => $row['C'], // Insert data jenis kelamin dari kolom C di excel
                    'harga' => $row['D'], // Insert data alamat dari kolom D di excel
                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }
        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
        $this->product_m->insert_multiple($data);
        // redirect(base_url(). 'product_c/index');
    }
}
