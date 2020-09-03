<?php

class Program_c extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('program_m');
    }
    public function show_dialog()
    {
        $client = $_POST['client_id'];   
        $data['programs'] = $this->program_m->get_program('program', $client);

        $this->load->view('program/dialog_program', $data);
    }
}