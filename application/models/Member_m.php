<?php 

class Member_m extends CI_Model
{
    public function get_all_member($table_name)
    {
        $this->db->limit(1000);
        return $this->db->get($table_name)->result();
    }

    public function get_member($table_name, $client)
    {
        $this->db->where('client', $client);
        return $this->db->get($table_name)->result();
    }
}