<?php

class Vehicle_brand_m extends CI_Model
{
    public function get_data($table_Name, $limit, $start, $keyword=null)
    { 
        if ($keyword) {
            $this->db->like('name', $keyword);
        }
        return $this->db->get($table_Name, $limit, $start)->result();
    }
    public function save($table_name, $data) {
        $this->db->insert($table_name, $data);
    }
    public function detail($table_Name, $id)
    {
        return $this->db->get_where($table_Name, array('id' => $id))->result();
    }
    public function get_Spesific_edit_data($table_Name, $id)
    {
        return $this->db->get($table_Name, array('id' => $id))->result();
    }
    public function update($table_Name, $id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($table_Name, $data);
    }
    public function hapus($where, $table_name)
    {
        $this->db->where($where);
        $this->db->delete($table_name);
    }

    public function search($table_Name, $limit, $start, $params) {
        $this->db->from($table_Name);
        $cariberdasarkan = $params['cariberdasarkan'];
        $yangdicari = $params['yangdicari'];        
        switch ($cariberdasarkan) {
            case "":
                $this->db->like('name', $yangdicari);
                break;
            
            default:
                $this->db->like($cariberdasarkan, $yangdicari);
                $this->db->limit($limit, $start);
        }

        return $this->db->get()->result();
    }

    public function count_all_brand($table_Name)
    {
        return $this->db->get($table_Name)->num_rows();
    }
}
