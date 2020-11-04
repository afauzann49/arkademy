<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data produk';
        $data['barang'] = $this->Produk_model->getAllProduk();
        $this->load->view('templates/header', $data);
        $this->load->view('produk/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah data';
        $this->form_validation->set_rules('nama_produk', 'Nama produk', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('produk/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Produk_model->tambah();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('produk/index');
        }
    }

    public function hapus($id)
    {
        $this->Produk_model->hapusDataProduk($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('produk/');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah data';
        $data['produk'] = $this->Produk_model->getProdukById($id);

        $this->form_validation->set_rules('nama_produk', 'Nama produk', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('produk/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Produk_model->ubah();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('produk/');
        }
    }
}
