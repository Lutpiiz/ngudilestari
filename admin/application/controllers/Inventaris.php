<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventaris extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Minventaris');
    }

    public function index()
    {
        $data['inventaris'] = $this->Minventaris->index();

        $this->load->view('header');
        $this->load->view('inventaris', $data);
        $this->load->view('footer');
    }

    public function tambah()
    {
        $this->load->view('header');
        $this->load->view('tambah_inventaris');
        $this->load->view('footer');
    }

    public function tambahkan()
    {
        $input = $this->input->post();
        $this->Minventaris->tambah($input);
        $this->session->set_flashdata('pesan_sukses', 'Data inventaris berhasil ditambahkan!');
        redirect('inventaris', 'refresh');
    }

    public function edit($id_inventaris)
    {
        $data['inventaris'] = $this->Minventaris->detail($id_inventaris);


        $this->load->view('header');
        $this->load->view('edit_inventaris', $data);
        $this->load->view('footer');
    }

    public function simpan()
    {
        $input = $this->input->post();
        $id_inventaris = $this->input->post('id_inventaris');

        $this->Minventaris->edit($input, $id_inventaris);
        $this->session->set_flashdata('pesan_sukses', 'Data inventaris telah diubah');
        redirect('inventaris', 'refresh');
    }

    public function hapus($id_inventaris)
    {
        $this->Minventaris->hapus($id_inventaris);
        $this->session->set_flashdata('pesan_sukses', 'Data inventaris berhasil dihapus!');
        redirect('inventaris', 'refresh');
    }
}
