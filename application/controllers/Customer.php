<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

        public function index()
        {
                if (isset($_GET['id'])) {
                        $idCustomer = $_GET['id'] | null;
                        $customer = [
                                'customer' => $this->CustomerModel->select($idCustomer)
                        ];
                        $this->load->view('layouts/header');
                        $this->load->view('layouts/navbar');
                        $this->load->view('update-customer', $customer);
                        $this->load->view('layouts/footer');
                } else {
                        $this->load->view('layouts/header');
                        $this->load->view('layouts/navbar');
                        $this->load->view('create-customer');
                        $this->load->view('layouts/footer');
                }
        }

        public function list($is_active = 1)
        {
                $data = [
                        'customers' => $this->CustomerModel->list($is_active),
                        'active' => $is_active
                ];
                //print_r($result);
                //print_r($data);
                $this->load->view('layouts/header');
                $this->load->view('layouts/navbar');
                $this->load->view('customers', $data);
                $this->load->view('layouts/footer');
        }

        public function save()
        {
                var_dump($_POST);
                $customerId = $this->input->post('customerId');
                $customerName = $this->input->post('customerName');
                $customerAddress = $this->input->post('customerAddress');
                $customerMobile = $this->input->post('customerMobile');
                $customerEmail = $this->input->post('customerEmail');
                $customerPassword = $this->input->post('customerPassword');
                $customerIdentification = $this->input->post('customerIdentification');

                $customer = [
                        'customer_name' => $customerName,
                        'customer_address' => $customerAddress,
                        'customer_mobile' => $customerMobile,
                        'customer_identification' => $customerIdentification,
                        'customer_email' => $customerEmail,
                        'customer_password' => $customerPassword
                ];

                $save = null;
                if ($customerId > 0) {
                        $customer['id_customer'] = $customerId;
                        $save = $this->CustomerModel->update($customer);
                } else {
                        $save = $this->CustomerModel->insert($customer);
                }

                if ($save) {
                        redirect("customer?id=$customerId");
                } else {
                        echo 'Error al guardarse los registros.';
                }
        }

        public function edit()
        {
                $id = $_GET['id'];

                $customer = $this->CustomerModel->select($id);

                $data = [
                        'customer' => $customer,
                ];

                $this->load->view('layouts/header');
                $this->load->view('layouts/navbar');
                $this->load->view('update-customer', $data);
                $this->load->view('layouts/footer');
        }

        public function delete()
        {
                $id = $_GET['id'];
                $is_done = $this->CustomerModel->delete($id);

                if ($is_done) {
                        redirect('customer/list');
                } else {
                        echo "Se presentó un error al eliminar el cliente";
                }
        }

        public function delete_permanent()
        {
                $id = $_GET['id'];
                $is_done = $this->CustomerModel->delete_permanent($id);

                if ($is_done) {
                        redirect('customer/list');
                } else {
                        echo "Se presentó un error al eliminar permanentemente el artículo";
                }
        }

        public function inactives()
        {
                $this->list(0);
        }


        public function restore()
        {
                $id = $_GET['id'];
                $is_done = $this->CustomerModel->restore($id);

                if ($is_done) {
                        redirect('customer/inactives');
                } else {
                        echo "Se presentó un error al restaurar el cliente";
                }
        }
}
