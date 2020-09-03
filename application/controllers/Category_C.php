<?php

class Category_C extends CI_Controller
{
    public function index()
    {
        $data['category'] = $this->category_m->get_data('category');
        $data['info'] = "Category";
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('category/category', $data);
        $this->load->view('template/footer');
    }
}