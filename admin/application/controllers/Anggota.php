<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manggota');
    }

    public function index()
    {
        $data['anggota'] = $this->Manggota->index();

        $this->load->view('header');
        $this->load->view('anggota', $data);
        $this->load->view('footer');
    }

    public function tambah()
    {
        $this->load->view('header');
        $this->load->view('tambah_anggota');
        $this->load->view('footer');
    }

    public function tambahkan()
    {
        $input = $this->input->post();
        $this->Manggota->tambah($input);
        $this->session->set_flashdata('pesan_sukses', 'Data anggota berhasil ditambahkan!');
        redirect('anggota', 'refresh');
    }

    public function edit($id_anggota)
    {
        $data['anggota'] = $this->Manggota->detail($id_anggota);


        $this->load->view('header');
        $this->load->view('edit_anggota', $data);
        $this->load->view('footer');
    }

    public function simpan()
    {
        $input = $this->input->post();
        $id_anggota = $this->input->post('id_anggota');

        $this->Manggota->edit($input, $id_anggota);
        $this->session->set_flashdata('pesan_sukses', 'Data anggota telah diubah');
        redirect('anggota', 'refresh');
    }

    public function hapus($id_anggota)
    {
        $this->Manggota->hapus($id_anggota);
        $this->session->set_flashdata('pesan_sukses', 'Data anggota berhasil dihapus!');
        redirect('anggota', 'refresh');
    }
}
