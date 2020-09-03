<?php

class Product_m extends CI_Model
{
    public function simpan($datas, $table_name)
    {
        $this->db->insert($table_name, $datas);
    }

    public function getAllData($table_name)
    {
        return $this->db->get($table_name);
    }
    public function getData($table_name, $limit, $start)
    {
        return $this->db->get($table_name, $limit, $start);
    }

    public function edit_data($table_name, $id)
    {
        return $this->db->get_where($table_name, array('id' => $id));
    }

    public function detail($table_name, $id) {
        return $this->db->get_where($table_name, array('id' => $id));
    }

    public function edit($table_name, $data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update($table_name, $data);
    }

    public function hapus($where, $table_name)
    {
        $this->db->where($where);
        $this->db->delete($table_name);
    }

    public function cari($table_name, $limit, $start, $berdasarkan, $yangdicari)
    {
        $this->db->from($table_name,$limit, $start);
        switch ($berdasarkan) {
            case "":
                $this->db->like('nama', $yangdicari);
                $this->db->or_like('qty', $yangdicari);
                break;
            case "harga":
                $this->db->where($berdasarkan, $yangdicari);
            case "qty":
                $this->db->where($berdasarkan, $yangdicari);
            default:
                $this->db->like($berdasarkan, $yangdicari);
        }
        return $this->db->get();
        // return $this->db->get_where($table_name, array('nama' => $yangdicari));
    }

    public function countAllProducts($table_name){
        return $this->db->get($table_name)->num_rows();
    }

    public function insert_multiple($data){
        $this->db->insert_batch('product', $data);
    }
}
