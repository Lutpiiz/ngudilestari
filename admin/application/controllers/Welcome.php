<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$input = $this->input->post();

		if ($input) {
			$this->load->model('Madmin');
			$output = $this->Madmin->login($input);

			if ($output=="ada") {
				$this->session->set_flashdata('pesan_sukses', 'Berhasil login');
				redirect('home', 'refresh');
			} else {
				$this->session->set_flashdata('pesan_gagal', 'Gagal login');
				redirect('/', 'refresh');
			}
		}

		$this->load->view('login');
	}
}
