<?php

class Problem_m extends CI_Model
{
    public function get_problem($tabale_name, $limit, $start, $keyword)
    {
        $this->db->like('name', $keyword);
        $this->db->limit($limit, $start);
        return $this->db->get($tabale_name)->result();
    }

    public function save($tabale_name, $data)
    {
        $this->db->insert($tabale_name, $data);
    }

    public function get_detail($tabale_name,$id)
    {
        $this->db->where('id', $id);
        return $this->db->get($tabale_name)->result();
    }

    public function get_edit($tabale_name, $id)
    {
        $this->db->where('id', $id);
        return $this->db->get($tabale_name)->result();
    }

    public function update($table_name, $id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($table_name, $data);
    }
}