<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MovementValue extends CI_Controller
{

        public function index()
        {
                $customerName = $this->input->post('customerName');
                $customerAddress = $this->input->post('customerAddress');
                $customerMobile = $this->input->post('customerMobile');
                $customerIdentification = $this->input->post('customerIdentification');

                $customer = [
                        'customer_name' => $customerName,
                        'customer_address' => $customerAddress,
                        'customer_mobile' => $customerMobile,
                        'customer_identification' => $customerIdentification
                ];

                $this->MovementValueModel->insert($customer);
                $this->load->view('layouts/header');
                $this->load->view('layouts/navbar');
                $this->load->view('customer');
                $this->load->view('layouts/footer');
        }

        public function list()
        {
                $list = [
                        'customers' => $this->MovementValueModel->list()
                ];
                //print_r($result);
                //print_r($data);
                $this->load->view('layouts/header');
                $this->load->view('layouts/navbar');
                $this->load->view('customer', $list);
                $this->load->view('layouts/footer');
        }
}
