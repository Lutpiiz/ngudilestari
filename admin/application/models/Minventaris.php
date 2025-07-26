<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minventaris extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->db->order_by('id_inventaris', 'DESC');
        $q = $this->db->get("inventaris");
        $d = $q->result_array();

        return $d;
    }

    function detail($id_inventaris) {
        $this->db->where('id_inventaris', $id_inventaris);
        return $this->db->get('inventaris')->row_array();
    }
    
    public function tambah($input) {
        $this->db->insert('inventaris', $input);
    }
    
    public function hapus($id_inventaris) {
        $this->db->where('id_inventaris', $id_inventaris);
        $this->db->delete('inventaris');
    }
    
    public function edit($input, $id_inventaris) {
    
        $this->db->where('id_inventaris', $id_inventaris);
        $this->db->update('inventaris', $input);
    }
}
