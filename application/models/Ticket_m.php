<?php

class Ticket_m extends CI_Model
{
    public function insert_data($table_name, $data)
    {
        $this->db->insert($table_name, $data);
    }
    public function get_all_ticket($table_name)
    {
        return $this->db->get($table_name)->result();
    }
    
    public function autocomplete_program($table_name, $term)
    {
        $this->db->like('name', $term);
        return $this->db->get($table_name)->result();
    }

    public function autocomplete_s_category($table_name, $term)
    {
        $this->db->like('name', $term);
        return $this->db->get($table_name)->result();
    }

    public function detail($table_name, $id)
    {
        $this->db->where('id', $id);
        return $this->db->get($table_name)->result();
    }

}