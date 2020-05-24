<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CustomerModel extends CI_Model
{

    public function insert($customer)
    {
        return $this->db->insert("customer", $customer);
    }

    public function update($customer)
    {
        $this->db->where('id_customer', $customer['id_customer']);
        return $this->db->update('customer', $customer);
    }

    public function list($is_active)
    {
        $response = $this->db->query("SELECT * FROM customer WHERE is_active = $is_active")->result();
        return $response;
    }

    public function authenticate($email, $password)
    {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('is_active', 1);
        $this->db->where('customer_email', $email);
        $this->db->where('customer_password', $password);

        $ok = $this->db->get()->result();

        return ($ok > 0) ? $ok : false;
    }

    public function select($id)
    {
        return $this->db->query("SELECT * FROM customer c WHERE c.id_customer = $id")->result();
    }

    public function delete($id)
    {
        return $this->db->query("UPDATE customer SET is_active = '0' WHERE id_customer = $id");
    }


    public function restore($id)
    {
        return $this->db->query("UPDATE customer SET is_active = '1' WHERE id_customer = $id");
    }

    public function delete_permanent($id)
    {
        return $this->db->query("DELETE FROM customer WHERE id_customer = $id");
    }
}
