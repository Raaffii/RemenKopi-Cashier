<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
    }

    public function index()
    {
        $this->template->load('pegawai/template', 'pegawai/V_pegawai');
    }

    public function vendor()
    {
        $data['data_produk'] = $this->M_pegawai->vendor();
        $this->template->load('pegawai/template', 'pegawai/V_vendor', $data);
    }

    public function kasir()
    {
        $data['data_produk'] = $this->M_pegawai->vendor();
        $data['data_kasir'] = $this->M_pegawai->tampilkasir();
        $this->template->load('pegawai/template', 'pegawai/V_kasir', $data);
    }

    public function inputkasir($id)
    {
        $this->M_pegawai->inputkasir($id);
        redirect('pegawai/kasir');
    }
    public function konfirmasipembayaran()
    {
        $id = $this->input->post('id');
        $this->M_pegawai->ubahstatus($id);
    }

    public function hapustransaksi($id)
    {
        $this->db->where('id_transaksi', $id);
        $this->db->delete('tb_transaksi');
        redirect('pegawai/kasir');
    }

    public function laporanpenjualan()
    {
        $data['data_transaksi'] = $this->M_pegawai->data_transaksi();
        $this->template->load('pegawai/template', 'pegawai/V_laporan_penjualan', $data);
    }
}
