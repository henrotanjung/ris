<?php

class Provider_m extends CI_Model
{
    public function get_all_provider($table_name)
    {
        return $this->db->get($table_name)->result();
    }
}