<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArticleModel extends CI_Model
{

    public function insert($article)
    {
        return $this->db->insert("article", $article);
    }

    public function update($article)
    {
        $this->db->where('id_item', $article['id_item']);
        return $this->db->update('article', $article);
    }

    public function list($is_active)
    {
        $response = $this->db->query("SELECT 
        a.id_item, a.item_name, a.item_description, a.item_value, a.is_active,
        c.name_category
        FROM article a 
        INNER JOIN category c ON a.id_category = c.id_category
        WHERE a.is_active = $is_active")->result();

        return $response;
    }

    public function select($id)
    {
        return $this->db->query("SELECT 
        a.id_item, a.item_name, a.item_description, a.item_value, 
        c.id_category, c.name_category 
        FROM article a 
        INNER JOIN category c ON a.id_category = c.id_category 
        WHERE a.id_item = $id")->result();
    }

    public function delete($id)
    {
        return $this->db->query("UPDATE article SET is_active = '0' WHERE id_item = $id");
    }

    public function restore($id)
    {
        return $this->db->query("UPDATE article SET is_active = '1' WHERE id_item = $id");
    }

    public function delete_permanent($id)
    {
        return $this->db->query("DELETE FROM article WHERE id_item = $id");
    }
}
