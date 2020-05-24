<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model
{

    public function insert($category)
    {
        $this->db->insert("category", $category);
    }

    public function list()
    {
        $response = $this->db->query("SELECT * FROM category")->result();
        return $response;
    }
}
