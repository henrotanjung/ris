<?php

class Vehicle_brand_c extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('vehicle_brand_m');
    }
    public function index()
    {
        // $this->load->model('vehicle_brand_m');
        $this->load->library('pagination');
        if ($this->input->post('submit')) {
            $data['keyword_vb'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword_vb', $data['keyword_vb']);
        } else {
            $data['keyword_vb'] = $this->session->userdata('keyword');
        }
        foreach ($this->session->userdata as $key => $session) {
            if ($key != 'keyword_vb') {
                unset($_SESSION[$key]);
            }
        }

        #set config untuk di parsing ke library pagination
        $config['base_url'] = base_url() . "vehicle_brand_c/index/";
        $this->db->like('name', $data['keyword_vb']);
        $this->db->from('vehicle_brand');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 5;

        #stilyng
        include_once APPPATH . 'views/template/pagination.php';
        #initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        
        $data['vehicle_brands'] = $this->vehicle_brand_m->get_data('vehicle_brand', $config['per_page'], $data['start'], $data['keyword_vb']);
        $data['info'] = 'Vehicle Brand';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/vehicle_brand', $data);
        $this->load->view('template/footer');
    }

    public function add_vehic_brand()
    {
        $data['info'] = 'Add Vehicle Brand';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/add_v_brand', $data);
        $this->load->view('template/footer');
    }

    public function insert_data()
    {
        $name = $this->input->post('nama');
        $data = array (
            'name' => $name
        );
        $this->vehicle_brand_m->save('vehicle_brand',$data);
        redirect(base_url() . "vehicle_brand_c/index");
    }

    public function detail($id)
    {
        $data['v_brand'] = $this->vehicle_brand_m->detail('vehicle_brand', $id);
        $data['info'] = 'Detail Vehicle Brand';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/detail_v_brand', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['v_brand'] = $this->vehicle_brand_m->get_Spesific_edit_data('vehicle_brand', $id);
        $data['info'] = 'Edit Vehicle Brand';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/edit_v_brand', $data);
        $this->load->view('template/footer');
    }

    public function simpan_edit() {
        $id = $this->input->post('id');
        $name = $this->input->post('nama');
        $data = array(
            'name' => $name
        );
        $this->vehicle_brand_m->update('vehicle_brand', $id, $data);
        redirect(base_url() .'vehicle_brand_c/index');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->vehicle_brand_m->hapus($where, 'vehicle_brand');
        redirect(base_url() . "vehicle_brand_c/index");
    }
    public function search()
    {
        $this->load->library('pagination');        

        #set config untuk di parsing ke library pagination
        $config['base_url'] = base_url() . "vehicle_type_c/index/";
        $config['total_rows'] = $this->vehicle_brand_m->count_all_brand('vehicle_type');
        $config['per_page'] = 15;

        #stilyng
        include_once APPPATH . 'views/template/pagination.php';
        #initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['cariberdasarkan'] = $this->input->post('cariberdasarkan');
        $data['yangdicari'] = $this->input->post('yangdicari');   

        $data['vehicle_brands'] = $this->vehicle_brand_m->search('vehicle_brand',$config['per_page'], $data['start'], $data);
        $data['info'] = 'Vehicle Brand';        
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/vehicle_brand', $data);
        $this->load->view('template/header');

    }
}
