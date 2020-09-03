<?php

class Problem_C extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('problem_m');
    }
    public function index()
    {
        if ($this->input->post('submit')) {
            $data['keyword_prob'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword_prob', $data['keyword_prob']);
        } else {
            $data['keyword_prob'] = $this->session->userdata('userdata');
        }
        ###Pagination
        #set config
        $config['base_url'] = base_url() . 'problem_c/index';
        $this->db->like('name', $data['keyword_prob']);
        $this->db->from('problem');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 5;

        #stilyng
        include_once APPPATH . 'views/template/pagination.php';
        #initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['problems'] = $this->problem_m->get_problem('problem', $config['per_page'], $data['start'], $data['keyword_prob']);
        $data['info'] = 'Problem';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/problem', $data);
        $this->load->view('template/footer');
    }

    public function add_problem()
    {
        $data['info'] = 'Add Problem';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/add_problem', $data);
        $this->load->view('template/footer');
    }

    public function insert_data()
    {
        $name = $this->input->post('name');
        $data = array(
            'name' => $name
        );
        $this->problem_m->save('problem', $data);
        redirect(base_url() . 'problem_c/index');
    }

    public function detail($id)
    {
        $data['problem'] = $this->problem_m->get_detail('problem', $id);
        $data['info'] = 'Detail';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/detail_problem', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $data['problem'] = $this->problem_m->get_edit('problem', $id);
        $data['info'] = 'Edit Detail';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/edit_problem', $data);
        $this->load->view('template/footer');
    }

    public function simpan_edit()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $data = array(
            'name' => $name
        );
        $this->problem_m->update('problem', $id, $data);
        redirect(base_url() . 'problem_c/index');
    }
}
