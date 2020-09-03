<?php

class Member_c extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('member_m');
    }
    public function index()
    {
        $this->load->model('member_m');
        $data['member'] = $this->member_m->get_all_member('member');
        $data['info'] = 'Member';
        $this->load->view('template/asset_header_datatabel');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/member/member', $data);
        $this->load->view('template/asset_footer_datatabel');
    }

    public function show_dialog_member()
    {
        $client = $_POST['client_id'];
        $data['members'] = $this->member_m->get_member('member', $client);
        // print_r ($data);
        $this->load->view('member/dialog_member', $data);
    }
}