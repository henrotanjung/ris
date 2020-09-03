<?php 

class Program_m extends CI_Model
{
    
    public function get_program($table_name, $client)
    {
        $this->db->where('client', $client);
        return $this->db->get($table_name)->result();
    }
}