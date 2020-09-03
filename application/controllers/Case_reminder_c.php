<?php

class Case_reminder_c extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('case_reminder_m');
  }
  public function index()
  {
    //   $data['case'] = $this->case_m->get_datatables('case_reminder');
    $data['info'] = 'Case Reminder';
    $this->load->view('template/asset_header_datatabel');
    $this->load->view('template/sidebar');
    $this->load->view('case/case_reminder', $data);
    $this->load->view('template/asset_footer_datatabel');
  }

  function case_reminder()
  {
    $list = $this->case_reminder_m->get_datatables();
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
      if ($row->category == 1) {
        $category = 'Inbound';
      } else {
        $category = 'Outbound';
       }
      $rows = array();
      $rows[] = $row->case;
      $rows[] = $status;
      $rows[] = $category;
      $rows[] = $row->spoken_to;
      $rows[] = $row->spoken_to_dept;
      $rows[] = $row->contact_type;
      $rows[] = $row->sequence;
      $rows[] = $row->content;
      $rows[] = $row->provider;
      $rows[] = $row->created_by;
      $rows[] = $row->create_date;

      $data[] = $rows;
    }

    $output = array(
      "draw" => $_POST['draw'],
      "recordsTotal" => $this->case_reminder_m->count_all(),
      "recordsFiltered" => $this->case_reminder_m->count_filtered(),
      "data" => $data,
    );
    //output dalam format JSON
    echo json_encode($output);
  }
}
