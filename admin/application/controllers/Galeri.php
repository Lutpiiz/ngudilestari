<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mgaleri');
    }

    public function index()
    {
        $data['galeri'] = $this->Mgaleri->index();

        $this->load->view('header');
        $this->load->view('galeri', $data);
        $this->load->view('footer');
    }

    public function tambah()
    {
        $this->load->view('header');
        $this->load->view('tambah_galeri');
        $this->load->view('footer');
    }

    public function tambahkan()
    {
        $input = $this->input->post();
        $this->Mgaleri->tambah($input);
        $this->session->set_flashdata('pesan_sukses', 'Data galeri berhasil ditambahkan!');
        redirect('galeri', 'refresh');
    }

    public function edit($id_galeri)
    {
        $data['galeri'] = $this->Mgaleri->detail($id_galeri);


        $this->load->view('header');
        $this->load->view('edit_galeri', $data);
        $this->load->view('footer');
    }

    public function simpan()
    {
        $input = $this->input->post();
        $id_galeri = $this->input->post('id_galeri');

        $this->Mgaleri->edit($input, $id_galeri);
        $this->session->set_flashdata('pesan_sukses', 'Data galeri telah diubah');
        redirect('galeri', 'refresh');
    }

    public function hapus($id_galeri)
    {
        $this->Mgaleri->hapus($id_galeri);
        $this->session->set_flashdata('pesan_sukses', 'Data galeri berhasil dihapus!');
        redirect('galeri', 'refresh');
    }
}
