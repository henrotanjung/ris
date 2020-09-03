<?php

class Category_m extends CI_Model
{
    public function get_all_data($table_name)
    {
        return $this->db->get($table_name)->result();
    }
    public function get_data($table_name, $id)
    {
        $this->db->where('id', $id);
        return $this->db->get($table_name)->result();
        
    }
}