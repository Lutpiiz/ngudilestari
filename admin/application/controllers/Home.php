<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_admin')) {
            redirect('/', 'refresh');
        }
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
}