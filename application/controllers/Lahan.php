<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mlahan');
    }

    public function index() {
        $data['lahan'] = $this->Mlahan->get_all();

        $this->load->view('header');
        $this->load->view('lahan', $data);
        $this->load->view('footer');
    }
}
