<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('login');
        $this->load->view('layouts/footer');
    }

    public function autenticar()
    {
        $idCustomer = null;
        $customerEmail = $_POST['customerEmail'];
        $customerPassword = $_POST['customerPassword'];

        $is_ok = $this->CustomerModel->authenticate($customerEmail, $customerPassword);

        if (!$is_ok) {
            $this->load->view('layouts/header');
            $this->load->view('layouts/navbar');
            $this->load->view('login');
            $this->load->view('layouts/footer');
            return;
        }

        foreach ($is_ok as $column) {
            $idCustomer = $column->id_customer;
            $this->session->set_userdata('customerName', $column->customer_name);
            $this->session->set_userdata('customerIdentification', $column->customer_identification);
            $this->session->set_userdata('customerEmail', $column->customer_email);
            $this->session->set_userdata('customerMobile', $column->customer_mobile);
        }

        redirect("customer?id=$idCustomer");
        /*  $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('customer', [$idCustomer]);
        $this->load->view('layouts/footer'); */
    }

    public function close_session()
    {
        $this->session->unset_userdata(['customerName', 'customerIdentification', 'customerEmail', 'customerMobile', 'email']);
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('login');
        $this->load->view('layouts/footer');
    }
}
