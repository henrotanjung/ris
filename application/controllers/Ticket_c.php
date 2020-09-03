<?php

class Ticket_C extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ticket_m');
    }

    public function index()
    {
        $data['ticket'] = $this->ticket_m->get_all_ticket('ticket');
        $status = ($data['ticket'][0]->status);
        if ($status == 1) {
            $data['ticket'][0]->status = 'Pending';
        } elseif ($status == '2') {
            $data['ticket'][0]->status = 'Process To case';
        }
        $data['info'] = 'Ticket';
        $this->load->view('template/asset_header_datatabel');
        $this->load->view('template/sidebar');
        $this->load->view('ticket/ticket', $data);
        $this->load->view('template/asset_footer_datatabel');
    }

    public function add_ticket()
    {
        $data['info'] = 'Add Ticket';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ticket/add_ticket', $data);
        $this->load->view('template/footer');
    }

    public function insert_data()
    {
        $status = $this->input->post('ticket_status');
        $client = $this->input->post('client');
        $program = $this->input->post('program');
        $category = $this->input->post('s_category');
        $inquiry = $this->input->post('inquiry');
        $event_detail = $this->input->post('detail');

        $caller_name_1 = $this->input->post('call_name_1');
        $caller_telp_1 = $this->input->post('call_phone_1');
        $caller_relation_1 = $this->input->post('call_relation_1');
        $caller_name_2 = $this->input->post('call_name_2');
        $caller_telp_2 = $this->input->post('call_phone_2');
        $caller_relation_2 = $this->input->post('call_relation_2');
        $caller_name_3 = $this->input->post('call_name_3');
        $caller_telp_3 = $this->input->post('call_phone_3');
        $caller_relation_3 = $this->input->post('call_relation_3');
        $caller_address = $this->input->post('call_address');

        $member_id = $this->input->post('d_member');
        $vehicle_chassis_no = $this->input->post('chais_no');
        $other_vehicle_chassis_no = $this->input->post('o_chais_no');
        $member_name = $this->input->post('member_name');
        $policy_effective_date = $this->input->post('policy_effetive_date');
        $policy_expiry_date = $this->input->post('policy_expiry_date');
        $vehicle_no = $this->input->post('vehicle_no');
        $vehicle_color = $this->input->post('vehicle_color');
        $vehicle_brand = $this->input->post('vehicle_brand');
        $vehicle_type = $this->input->post('vehicle_type');
        $vehicle_model = $this->input->post('vehicle_model');

        $created_by = $this->input->post('create_by');
        $create_date = $this->input->post('create_date');
        $data = compact(
            "status",
            "client",
            "program",
            "category",
            "inquiry",            
            "event_detail",

            "caller_name_1",
            "caller_telp_1",
            "caller_relation_1",
            "caller_name_2",
            "caller_telp_2",
            "caller_relation_2",
            "caller_name_3",
            "caller_telp_3",
            "caller_relation_3",

            "member_id",
            "vehicle_chassis_no",
            "other_vehicle_chassis_no",
            "member_name",
            "policy_effective_date",
            "policy_expiry_date",
            "vehicle_no",
            "vehicle_color",
            "vehicle_brand",
            "vehicle_type",
            "vehicle_model",

            "created_by",
            "create_date"
            );
        $this->ticket_m->insert_data('ticket', $data);
    }

    public function autocomplete()
    {
        $this->load->model('client_m');
        if (isset($_GET['term'])) {
            $data = $this->client_m->autocomplete('client', $_GET['term']);
            if (count($data) > 0) {
                foreach ($data as $row) {
                    $array_res[] = $row->id . '.' . $row->full_name;
                }
                echo json_encode($array_res);
            }
        };
    }

    public function autocomplete_program()
    {
        echo $this->input->post('dlg_program');
        if (isset($_GET['term'])) {
            $data = $this->ticket_m->autocomplete_program('program', $_GET['term']);
            if (count($data) > 0) {
                foreach ($data as $row) {
                    $array_res[] = $row->id . '.' . $row->name;
                }
                echo json_encode($array_res);
            }
        }
    }
    public function autocomplete_get_enquiry()
    {
        $id = $this->input->post('id', TRUE);
        $this->load->model('inquiry_m');
        $data = $this->inquiry_m->get_data('type_of_inquiry', $id);
        echo json_encode($data);
    }
    public function detail($id)
    {
        $data['tickets'] = $this->ticket_m->detail('ticket', $id);
        $data['info'] = 'Detail Ticket';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ticket/detail_ticket', $data);
        $this->load->view('template/footer');
    }

    public function edit_ticket($id)
    {
        $data['tickets'] = $this->ticket_m->edit_ticket('ticket', $id);
        $data['info'] = 'Edit Ticket';
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ticket/edit_ticket', $data);
        $this->load->view('template/footer');
    }

    public function get_declare_member()
    {
        $this->load->model('client_m');
        $client_id = $_POST['client_id'];
        $dec_member = $this->client_m->get_declare_member('client', $client_id);

        if ($dec_member[0]->declare == 1)
        {
            echo 1;
        } else {
            echo 0;
        }
    }
}
