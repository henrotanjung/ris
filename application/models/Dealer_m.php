<?php

class Dealer_m extends CI_Model
{ 
    public function save_batch($table_name, $datas)
    {
        $this->db->insert_batch($table_name, $datas);
    }
    public function get_dealer($table_name, $id)
    {
        $this->db->where('dealer_group', $id);
        return $this->db->get($table_name)->result();
    }
}
