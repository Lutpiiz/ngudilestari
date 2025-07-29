<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Manggota');
    }

    public function index() {
        $data['anggota'] = $this->Manggota->index();

        $this->load->view('header');
        $this->load->view('anggota', $data);
        $this->load->view('footer');
    }
}