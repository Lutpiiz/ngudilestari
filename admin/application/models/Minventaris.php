<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minventaris extends CI_Model {

    public function __construct() {
        parent::__construct(); // ini penting!
    }

    function index() {
        $this->db->order_by('id_inventaris', 'DESC');
        $q = $this->db->get("inventaris");
        $d = $q->result_array();

        return $d;
    }

    public function tambah($input) {
        $this->db->insert('inventaris', $input);
    }
}
