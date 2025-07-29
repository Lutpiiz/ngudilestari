<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Mgaleri');
    }

    public function index() {
        $data['galeri'] = $this->Mgaleri->index();

        $this->load->view('header');
        $this->load->view('galeri', $data);
        $this->load->view('footer');
    }
}