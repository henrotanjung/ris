<?php

class Service_m extends CI_Model
{
    public function get_data($table_name, $limit, $start, $keyword)
    {
        $this->db->like('name', $keyword);
        $this->db->limit($limit, $start);
        return $this->db->get($table_name)->result();
    }

    public function get_detail($table_name, $id)
    {
        return $this->db->get_where($table_name, array('id' => $id))->result();
    }

    public function save($table_name, $data)
    {
        $this->db->insert($table_name, $data);
    }

    public function edit_service($table_name, $id)
    {
        return $this->db->get_where($table_name, array('id' => $id))->result();
    }

    public function update($table_name, $id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($table_name, $data);
    }

    public function get_duplicate($table_name, $id)
    {
        $this->db->where('id', $id);
        return $this->db->get($table_name)->result();
    }

    public function hapus($table_name, $id)
    {
        $this->db->where('id', $id);
        $this->db->delete($table_name);
    }
}