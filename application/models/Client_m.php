<?php

class Client_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db_ints = $this->load->database('int_sys_local', TRUE);
    }
    // from diffrent databaase
    public function get_all_client($table_name)
    {
        return $this->db_ints->get($table_name)->result();
    }
    public function get_all($table_name)
    {
        return $this->db->get($table_name)->result();
    }

    public function autocomplete($table_name, $term)
    {
        $this->db_ints = $this->load->database('int_sys_local', TRUE);
        $this->db_ints->like('full_name', $term);
        $this->db_ints->where_in('type', array(18, 20, 21, 22));
        $this->db_ints->or_where('id', 8);
        return $this->db_ints->get($table_name)->result();
    }
    // from diffrent databaase
    public function autocomplete_client($table_name)
    {
        $this->db_ints = $this->load->database('int_sys_local', TRUE);
        $this->db_ints->where_in('type', array(18, 20, 21, 22));
        $this->db_ints->or_where('id', 8);
        return $this->db_ints->get($table_name)->result();
    }

    public function autocomplete_client_obselect($table_name)
    {
        return $this->db->get($table_name)->result();
    }

    public function get_declare_member($table_name, $client)
    {
        $this->db_ints = $this->load->database('int_sys_local', TRUE);
        $this->db_ints->where('id', $client);
        return $this->db_ints->get($table_name)->result();
    }
}