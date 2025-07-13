<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller{

    public function index() {
        $this->load->view('header');
        $this->load->view('anggota');
        $this->load->view('footer');
    }
}