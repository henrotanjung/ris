<?php

class Dealer_group_m extends CI_Model
{
    public function get_d_group($table_name)
    { 
        return $this->db->get($table_name)->result();
    }
    public function insert($table_name, $data)
    {
        $this->db->insert($table_name, $data);
    }

    public function detail_obselect($table_name, $id)
    {
        $this->db->select("$table_name.id as d_g_id, $table_name.name as d_g_name, dealer.*");
        $this->db->from($table_name.", dealer");
        $this->db->where("$table_name.id", $id);
        $this->db->where("dealer.dealer_group", $id);
        return $this->db->get()->result();
    }
    public function detail($table_name, $id)
    {
        $this->db->where('id', $id);
        return $this->db->get($table_name)->result();
    }
    public function get_last_d_group($table_name)
    {
        $this->db->select('max(id) as id');
        return $this->db->get($table_name)->result();
    }
}
