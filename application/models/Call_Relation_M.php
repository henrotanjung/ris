<?php

class Call_relation_m extends CI_Model
{
    public function get_call_relation($table_name, $limit, $start, $keyword)
    {
        // echo $keyword;
        // die;
        $this->db->like('name', $keyword);
        $this->db->limit($limit, $start);
        return $this->db->get($table_name)->result();
    }

    public function count_all_c_relation($table_name)
    {
        return $this->db->get($table_name)->num_rows();
    }

    public function save($table_name, $data)
    {
        $this->db->insert($table_name, $data);
    }

    public function edit($table_name,$id)
    {
        $this->db->like('id', $id);
        return $this->db->get($table_name)->result();
    }
    public function update($table_name, $id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($table_name, $data);
    }
    public function hapus($table_name, $where)
    {
        $this->db->where($where);
        $this->db->delete($table_name);
    }

    public function detail($table_name, $id)
    {
        $this->db->where('id', $id);
        return $this->db->get($table_name)->result();
    }
}
