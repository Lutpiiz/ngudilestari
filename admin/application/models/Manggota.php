<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manggota extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return $this->db->get("anggota")->result_array();
    }

    function detail($id_anggota) {
        $this->db->where('id_anggota', $id_anggota);
        return $this->db->get('anggota')->row_array();
    }

    public function tambah($input) {
        $config['upload_path'] = $this->config->item("anggota");
		$config['allowed_types'] = 'jpeg|jpg|png|gif';

		$this->load->library('upload', $config);
		$upload = $this->upload->do_upload('foto_anggota');

		if ($upload) {
			$input['foto_anggota'] = $this->upload->data('file_name');
		}

        $this->db->insert('anggota', $input);
    }

    public function hapus($id_anggota) {
        $this->db->where('id_anggota', $id_anggota);
        $this->db->delete('anggota');
    }
    
    public function edit($input, $id_anggota) {
    
        $this->db->where('id_anggota', $id_anggota);
        $this->db->update('anggota', $input);
    }
}