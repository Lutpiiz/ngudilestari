<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgaleri extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return $this->db->get("galeri")->result_array();
    }
}