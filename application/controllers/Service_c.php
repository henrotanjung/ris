<?php

class Service_C extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('service_m');
    }

    public function index()
    {
        ### check search
        if ($this->input->post('submit'))
        {
            $data['keyword_ser'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword_ser', $data['keyword_ser']);
        } else {
            $data['keyword_ser'] = $this->session->userdata('keyword_ser');
        }
        ### Set setting untuk di parsing ke config pagination
        $config['base_url'] = base_url() .'service_c/index';
        $this->db->like('name', $data['keyword_ser']);
        $this->db->from('service');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 10;
        #stilyng
        include_once APPPATH . 'views/template/pagination.php';
        ### initializing
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        
        $data['service'] = $this->service_m->get_data('service', $config['per_page'], $data['start'], $data['keyword_ser']);
        $data['info'] = 'Service';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/service', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['service'] = $this->service_m->get_detail('service', $id);
        $data['info'] = 'Detail';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/detail_service', $data);
        $this->load->view('template/footer');
    }

    public function add_service()
    {
        $data['info'] = 'Add Service';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/add_service', $data);
        $this->load->view('template/footer');
    }

    public function insert_data()
    {
        $name = $this->input->post('name');
        $data = array(
            'name' => $name
        );
        $this->service_m->save('service', $data);
        redirect(base_url() .'service_c/index');
    }

    public function edit($id)
    {
        $data['service'] = $this->service_m->edit_service('service', $id);
        $data['info'] = 'Edit Service';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/edit_service', $data);
        $this->load->view('template/footer');
    }

    public function simpan_edit()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $data = array(
            'name' => $name
        );
        $this->service_m->update('service', $id, $data);
        redirect(base_url() .'service_c/index');
    }

    public function duplicate($id)
    {
        $datas = $this->service_m->get_duplicate('service', $id);
        $data = (array) $datas[0];
        unset($data['id']);
        $this->service_m->save('service', $data);
        redirect(base_url() .'service_c/index');
    }

    public function hapus($id)
    {
        $this->service_m->hapus('service', $id);
        redirect(base_url() .'service_c/index');
    }
}
