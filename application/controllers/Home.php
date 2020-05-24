<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

        public function index()
        {
                $this->load->view('layouts/header');
                $this->load->view('layouts/navbar');
                $this->load->view('home');
                $this->load->view('layouts/footer');
        }
}
