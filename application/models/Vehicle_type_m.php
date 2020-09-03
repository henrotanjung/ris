<?php

class Vehicle_type_m extends CI_Model
{
    public function get_all_data($table_name, $limit, $start, $keyword = null)
    {
        if ($keyword) {
            $query = $this->db->select('vehicle_type.*, vehicle_brand.name as vb_name')
                ->join('vehicle_brand', 'vehicle_type.brand = vehicle_brand.id', 'left')
                ->like('vehicle_type.name', $keyword)
                ->limit($limit, $start)
                ->get('vehicle_type')
                ->result();
        } else {

            $query = $this->db->select('vehicle_type.*, vehicle_brand.name as vb_name')
                ->join('vehicle_brand', 'vehicle_type.brand = vehicle_brand.id', 'left')
                ->limit($limit, $start)
                ->get('vehicle_type')
                ->result();
        }
        return $query;
    }

    public function get_data($table_name, $id)
    {
        $this->db->select('v_t.*, v_b.name as vb_name');
        $this->db->from("$table_name as v_t");
        $this->db->join('vehicle_brand as v_b', "v_t.brand = v_b.id", 'left');
        $this->db->where('v_t.id', $id);
        return $this->db->get()->result();
    }

    public function count_all_type($table_name, $data = '')
    {
        if ($data == '') {
            return $this->db->get($table_name)->num_rows();
        } else {
            $cariberdasarkan = $data['cariberdasarkan'];
            $yangdicari = $data['yangdicari'];
            echo $yangdicari;
            echo '<br />';
            switch ($cariberdasarkan) {
                case "name":
                    $this->db->like('name', $yangdicari);
                    return $this->db->get($table_name)->num_rows();
            }
        }
    }

    public function count_all_type_a($table_name, $limit = '', $start = '', $data = '')
    {
        if ($data == '') {
            return $this->db->get($table_name)->num_rows();
        } else {
            $cariberdasarkan = $data['cariberdasarkan'];
            $yangdicari = $data['yangdicari'];
            echo $yangdicari;
            echo '<br />';
            switch ($cariberdasarkan) {
                case "name":
                    $this->db->like('name', $yangdicari);
                    return $this->db->get($table_name)->num_rows();
            }
        }
    }

    public function insert_data($table_name, $data)
    {
        $this->db->insert($table_name, $data);
    }

    public function delete($table_name, $id)
    {
        $this->db->delete($table_name, array('id' => $id));
    }
    public function edit($table_name, $id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($table_name, $data);
    }
    public function autocomplete_brand_id($table_name, $param)
    {
        $this->db->like('name', $param);
        return $this->db->get($table_name)->result();
    }

    public function search($table_Name, $limit, $start, $param)
    {

        // $this->db->from($table_Name);
        $cariberdasarkan = $param['cariberdasarkan'];
        $yangdicari = $param['yangdicari'];
        echo $yangdicari;
        switch ($cariberdasarkan) {
            case "":
                $query = $this->db->select('vt.*, vehicle_brand.name as vb_name')
                    ->join('vehicle_brand', 'vt.brand = vehicle_brand.id', 'left')
                    ->like('vt.name', $param['yangdicari'])
                    ->limit($limit, $start)
                    ->get('vehicle_type as vt')
                    ->result();
                break;

            case "name":
                $query = $this->db->select('vt.*, vb.name as vb_name')
                    ->join('vehicle_brand as vb', 'vt.brand = vb.id', 'left')
                    ->like('vt.name', $yangdicari)
                    ->limit($limit, $start)
                    ->get('vehicle_type as vt')
                    ->result();

                break;
                // return $query;
        }

        return $query;
    }
}
