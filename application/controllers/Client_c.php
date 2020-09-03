<?php

class Client_C extends CI_Controller
{
    public function index()
    {
        $data['client'] = $this->client_m->get_all('client');
        $data['info'] = 'Client';
        $this->load->view('template/asset_header_datatabel');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/client/client', $data);
        $this->load->view('template/asset_footer_datatabel');
    }

    public function add_client()
    {
        $data['info'] = 'Add Client';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/client/add_client', $data);
        $this->load->view('template/footer');
    }

}