<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MovementValueModel extends CI_Model
{

    public function insert($movementValue)
    {
        $this->db->insert("movement_value", $movementValue);
    }

    public function list()
    {
        $response = $this->db->query("SELECT * FROM movement_value")->result();
        return $response;
    }
}
