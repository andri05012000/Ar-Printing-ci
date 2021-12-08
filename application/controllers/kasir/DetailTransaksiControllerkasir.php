<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailTransaksiControllerkasir extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('kasir/m_transaksi');
		$this->load->model('kasir/m_produk');
		$this->load->model('kasir/m_detailTransaksi');
		$this->load->helper('url');

		
	}

	public function index() {

		$data['id_transaksi'] = $this->input->get('id');
		$data['query'] = $this->m_detailTransaksi->tampil_data($data['id_transaksi']);

		$this->load->view('headerAdmin', $data);
		$this->load->view('transaksi/detailTransaksiKasir', $data);
		$this->load->view('footer', $data);
		
	}


	public function add(){
		$this->m_detailTransaksi->tambah_data();
	}

	public function delete(){
		$id_detail = $this->input->post('id_detail1');
		$id_transaksi = $this->input->post('id_transaksi');
		$this->m_detailTransaksi->hapus_data($id_detail, $id_transaksi);
	}
}
?>