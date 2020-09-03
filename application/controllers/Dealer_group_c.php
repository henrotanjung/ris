<?php

class Dealer_group_c extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dealer_group_m');
    }
    public function index()
    {
        $data['d_groups'] = $this->dealer_group_m->get_d_group('dealer_group');
        $data['info'] = 'Dealer Group';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/dealer_group', $data);
        $this->load->view('template/footer');
    }

    public function add_d_group()
    {
        $data['info'] = 'Add Dealer Group';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/add_dealer_group', $data);
        $this->load->view('template/footer');
    }
    public function insert_data()
    {
        $last_group_id = $this->dealer_group_m->get_last_d_group('dealer_group');
        $next_group_id = $last_group_id[0]->id + 1;
        $name = $this->input->post('name');
        $d_group = array(
            'name' => $name
        );
        $this->db->trans_start();
        $this->dealer_group_m->insert('dealer_group', $d_group);

        $dealer_code = $this->input->post('dealer_code');
        $dealer_name = $this->input->post('dealer_name');
        $acc_name = $this->input->post('acc_name');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $kecamatan = $this->input->post('kecamatan');
        $kelurahan = $this->input->post('kelurahan');
        $phone = $this->input->post('phone');
        

        $dealer_datas = array();
        foreach ($dealer_code as $key => $value)
        {
            $data = array(
                'dealer_code' => $value,
                'dealer_group' => $next_group_id,
                'name' => $dealer_name[$key],
                'accounting_name' => $acc_name[$key],
                'address' => $address[$key],
                'city' => $city[$key],
                'kecamatan' => $kecamatan[$key],
                'kelurahan' => $kelurahan[$key],
                'phone' => $phone[$key]
            );
            array_push($dealer_datas, $data);
        }
        
        $this->load->model('dealer_m');
        $this->dealer_m->save_batch('dealer', $dealer_datas);
        $this->db->trans_complete();
        redirect(base_url() .'dealer_group_c/index');
    }

    public function detail($id)
    {
        $this->load->model('dealer_m');
        $data['d_group'] = $this->dealer_group_m->detail('dealer_group', $id);
        $data['dealers'] = $this->dealer_m->get_dealer('dealer', $id);
        $data['info'] = 'Detail Dealer Group';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/detail_d_group', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $this->load->model('dealer_m');
        $data['d_group'] = $this->dealer_group_m->detail('dealer_group', $id);
        $data['dealers'] = $this->dealer_m->get_dealer('dealer', $id);
        $data['info'] = 'Edit Dealer Group';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('enquiries/combobox/edit_d_group', $data);
        $this->load->view('template/footer');
    }
}