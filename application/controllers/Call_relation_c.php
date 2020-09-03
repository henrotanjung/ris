<?php

class Call_relation_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('call_relation_m');
    }
    public function index()
    {
        if ($this->input->post('submit')) {
            $data['keyword_cr'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword_cr', $data['keyword_cr']);
        } else {
            $data['keyword_cr'] = $this->session->userdata('keyword_cr');
        }
        foreach ($this->session->userdata as $key => $session) {
            if ($key != 'keyword_vb') {
                unset($_SESSION[$key]);
            }
        }
        ### Pagination
        ### Setting config
        $config['base_url'] = base_url() . 'call_relation_c/index';
        $this->db->like('name', $data['keyword_cr']);
        $this->db->from('call_relation');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 5;

        ### Styling
        include_once APPPATH . 'views/template/pagination.php';
        ###initializing
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['call_relation'] = $this->call_relation_m->get_call_relation('call_relation', $config['per_page'], $data['start'], $data['keyword_cr']);
        $data['info'] = 'Call Relation';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/call_relation', $data);
        $this->load->view('template/footer');
    }

    public function add_c_relation()
    {
        $data['info'] = 'Add Call Relation';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/add_c_relation', $data);
        $this->load->view('template/footer');
    }

    public function insert_data()
    {
        $name = $this->input->post('name');
        $data = array(
            'name' => $name
        );
        $this->call_relation_m->save('call_relation', $data);
        redirect(base_url() . 'call_relation_c/index');
    }

    public function edit($id)
    {
        $data['c_relation'] = $this->call_relation_m->edit('call_relation', $id);
        $data['info'] = 'Edit Call Relation';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/edit_c_relation', $data);
        $this->load->view('template/footer');
    }

    public function simpan_edit()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $data = array(
            'name' => $name
        );
        $this->call_relation_m->update('call_relation', $id, $data);
        redirect(base_url() . 'call_relation_c/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->call_relation_m->hapus('call_relation', $where);
        redirect(base_url() . 'call_relation_c/index');
    }

    public function detail($id)
    {
        $data['d_c_relation'] = $this->call_relation_m->detail('call_relation', $id);
        $data['info'] = 'Detail Call Relation';
        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('enquiries/combobox/detail_c_relation');
        $this->load->view('template/header');
    }
}
