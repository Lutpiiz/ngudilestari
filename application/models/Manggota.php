<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manggota extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return $this->db->get("anggota")->result_array();
    }
}