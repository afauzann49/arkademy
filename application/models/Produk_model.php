<?php

class Produk_model extends CI_model
{
    public function getAllProduk()
    {
        return $this->db->get('produk')->result_array();
    }

    public function tambah()
    {
        $produk = [
            'nama_produk' => $this->input->post('nama_produk', true),
            'keterangan' => $this->input->post('keterangan', true),
            'harga' => $this->input->post('harga', true),
            'jumlah' => $this->input->post('jumlah', true),
        ];

        $this->db->insert('produk', $produk);
    }

    public function hapusDataProduk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produk');
    }

    public function getProdukById($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row_array();
    }

    public function ubah()
    {
        $produk = [
            'nama_produk' => $this->input->post('nama_produk', true),
            'keterangan' => $this->input->post('keterangan', true),
            'harga' => $this->input->post('harga', true),
            'jumlah' => $this->input->post('jumlah', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('produk', $produk);
    }
}
