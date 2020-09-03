<?php

class Provider_c extends CI_Controller
{
    public function index()
    {
        $this->load->model('provider_m');
        $data['provider'] = $this->provider_m->get_all_provider('provider');
        $data['info'] = 'Provider';
        $this->load->view('template/asset_header_datatabel');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/provider/provider', $data);
        $this->load->view('template/asset_footer_datatabel');
    }
}