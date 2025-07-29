<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgaleri extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return $this->db->get("galeri")->result_array();
    }

    function detail($id_galeri) {
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get('galeri')->row_array();
    }

    public function tambah($input) {
        $config['upload_path'] = $this->config->item("program");
		$config['allowed_types'] = 'jpeg|jpg|png|gif';

		$this->load->library('upload', $config);
		$upload = $this->upload->do_upload('foto_kegiatan');

		if ($upload) {
			$input['foto_kegiatan'] = $this->upload->data('file_name');
		}

        $this->db->insert('galeri', $input);
    }

    public function hapus($id_galeri) {
        $this->db->where('id_galeri', $id_galeri);
        $this->db->delete('galeri');
    }
    
    public function edit($input, $id_galeri) {
    
        $this->db->where('id_galeri', $id_galeri);
        $this->db->update('galeri', $input);
    }
}