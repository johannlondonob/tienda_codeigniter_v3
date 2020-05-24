<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MovementModel extends CI_Model
{

    public function insert($movement)
    {
        $this->db->insert("movement", $movement);
    }

    public function list()
    {
        $response = $this->db->query("SELECT * FROM movement")->result();
        return $response;
    }
}
