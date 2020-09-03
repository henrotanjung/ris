<?php

class Case_c extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('case_m');
  }
  public function index()
  {
    // $data['case'] = $this->case_m->get_all_case('case');
    $data['info'] = 'Case';
    $this->load->view('template/asset_header_datatabel');
    $this->load->view('template/sidebar');
    $this->load->view('case/case', $data);
    $this->load->view('template/asset_footer_datatabel');
  }

  function get_case()
  {
    $list = $this->case_m->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $row) {
      $no++;
      if ($row->case_status == 1) {
        $status = 'Pending';
      } elseif ($row->case_status == 2) {
        $status = 'Process to Case';
      } else {
        $status = 'Cancel';
      } 
      $rows = array();  
      $link = anchor(base_url() . "ticket_c/detail/", "<i class='fa fa-search-plus fa-sm'></i>" . $row->id);
      $i = "<i class='fa fa-search-plus fa-sm'></i>";
      $rows[] = "<a href='ticket_c/detail/$row->id'>$i</a>";
      $rows[] = $row->case_ref;
      $rows[] = $row->ticket_number;
      $rows[] = $status;
      // $rows[] = $row->client;
      // $rows[] = $row->program;
      // $rows[] = $row->category;
      // $rows[] = $row->inquiry;
      // $rows[] = $row->caller_name_1;
      // $rows[] = $row->vehicle_chassis_no;
      // $rows[] = $row->other_vehicle_chassis_no;
      // $rows[] = $row->member_name;
      // $rows[] = $row->policy_no;
      // $rows[] = $row->vehicle_brand;
      // $rows[] = $row->vehicle_type;
      // $rows[] = $row->leads_status_incoming;
      // $rows[] = $row->leads_status;
      // $rows[] = $row->service_carrier_tow;
      // $rows[] = $row->service_battery_service;
      // $rows[] = $row->service_change_tyre;

      $data[] = $rows;
    }

    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->case_m->count_all(),
      "recordsFiltered" => $this->case_m->count_filtered(),
      "data" => $data,
    );
    //output dalam format JSON
    echo json_encode($output);
  }
}
