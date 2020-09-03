<?php

class Inquiry_m extends CI_Model{
    
    public function get_data($table_name, $category)
    {
        $this->db->where('category', $category);
        return $this->db->get($table_name)->result();
    }
}