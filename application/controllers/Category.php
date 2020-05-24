<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

        public function index()
        {
                $nameCategory = $this->input->post('nameCategory');
                $descriptionCategory = $this->input->post('descriptionCategory');

                $category = [
                        'category_name' => $nameCategory,
                        'category_address' => $descriptionCategory
                ];

                $this->CategoryModel->insert($category);
                $this->load->view('layouts/header');
                $this->load->view('layouts/navbar');
                $this->load->view('category');
                $this->load->view('layouts/footer');
        }

        public function list()
        {
                $list = [
                        'categories' => $this->CategoryModel->list()
                ];
                //print_r($result);
                //print_r($data);
                $this->load->view('layouts/header');
                $this->load->view('layouts/navbar');
                $this->load->view('category', $list);
                $this->load->view('layouts/footer');
        }
}
