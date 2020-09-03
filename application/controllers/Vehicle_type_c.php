<?php

class Vehicle_type_c extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('vehicle_type_m');
    }
    public function index()
    {
        #ambil data searching
        if ($this->input->post('submit')) {
            $data['keyword_vt'] = $this->input->post('keyword_vt');
            $this->session->set_userdata('keyword_vt', $data['keyword_vt']);
        }
        else {
            $data['keyword_vt'] = $this->session->userdata('keyword_vt');
        }
        foreach ($this->session->userdata as $key => $session) {
            if ($key != 'keyword_vt') {
                unset($_SESSION[$key]);
            }
        }
        #set config untuk di parsing ke library pagination
        $config['base_url'] = base_url() . "vehicle_type_c/index/";
        $this->db->like('name', $data['keyword_vt']);
        $this->db->from('vehicle_type');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 15;

        #stilyng
        include_once APPPATH . 'views/template/pagination.php';
        #initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['v_types'] = $this->vehicle_type_m->get_all_data('vehicle_type', $config['per_page'], $data['start'], $data['keyword_vt']);
        $data['info'] = 'Vehicle Type';
        // var_dump($data);
        // die;
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/vehicle_typelist', $data);
        $this->load->view('template/footer');
    }
    public function add_v_type()
    {
        $data['info'] = 'Add Vehicle Type';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/add_v_typelist', $data);
        $this->load->view('template/footer');
    }
    public function insert_data()
    {
        $name = $this->input->post('nama');
        $brand = $this->input->post('brand_id');
        $name = explode('.', $name);
        $name = $name[0];
        $brand = explode('.', $brand);
        $brand = $brand[0];
        $data = array(
            'name' => $name,
            'brand' => $brand
        );
        $this->vehicle_type_m->insert_data('vehicle_type', $data);
        redirect(base_url() . 'vehicle_type_c/index');
    }

    ### Memanggil view Edit
    public function edit($id)
    {
        $data['v_type'] = $this->vehicle_type_m->get_data('vehicle_type', $id);
        $data['info'] = 'Edit Vehicle Brand';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/edit_v_type', $data);
        $this->load->view('template/footer');
    }

    ### Menjalankan query edit
    public function simpan_edit()
    {
        $name = $this->input->post('nama');
        $brand = $this->input->post('brand_id');
        $name = explode('.', $name);
        $name = $name[0];
        $brand = explode('.', $brand);
        $brand = $brand[0];
        $id = $this->input->post('id');
        $data = array(
            'name' => $name,
            'brand' => $brand,
        );
        $this->vehicle_type_m->edit('vehicle_type', $id, $data);
        redirect(base_url() . 'vehicle_type_c/index');
    }

    public function detail($id)
    {
        $data['v_type'] = $this->vehicle_type_m->get_data('vehicle_type', $id);
        $data['info'] = 'Detail Vehicle Type';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/detail_v_type', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->vehicle_type_m->delete('vehicle_type', $id);
        redirect(base_url() . 'vehicle_type_c/index');
    }

    public function autocomplete_brand_id()
    {
        if (isset($_GET['term'])) {
            $res = $this->vehicle_type_m->autocomplete_brand_id('vehicle_brand', $_GET['term']);
            if (count($res) > 0) {
                foreach ($res as $row) {
                    $arr_res[] = $row->id . '.' . $row->name;
                }
                echo json_encode($arr_res);
            }
        }
    }

    public function search_omit()
    {
        $this->load->library('pagination');


        #stilyng
        include_once APPPATH . 'views/template/pagination.php';
        #initialize



        $data['cariberdasarkan'] = $this->input->post('cariberdasarkan');
        $data['yangdicari'] = $this->input->post('yangdicari');
        #set config untuk di parsing ke library pagination
        $config['base_url'] = base_url() . "vehicle_type_c/index/";
        $config['total_rows'] = $this->vehicle_type_m->count_all_type('vehicle_type', $data);
        $config['per_page'] = 15;
        echo $config['total_rows'];

        if ($config['total_rows'] < $config['per_page']) {
            $config['per_page'] = $config['total_rows'];
        }
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['v_types'] = $this->vehicle_type_m->search('vehicle_type', $config['per_page'], $data['start'], $data);
        $data['info'] = 'Vehicle Type';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/vehicle_typelist', $data);
        $this->load->view('template/header');
    }
}
