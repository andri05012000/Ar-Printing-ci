<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiControllerkasir extends CI_Controller {
	function __construct() {
		parent::__construct();		
		$this->load->model('kasir/m_transaksi');
		$this->load->helper('url');

    }

	public function index() {
		if($this->session->userdata('akses')=='2'){
            $data['query'] = $this->m_transaksi->tampil_data();

			$data['transaksi'] = $this->m_transaksi->tampil_data();
			
			$this->load->view('headerAdmin', $data);
			$this->load->view('transaksi/v_transaksiKasir', $data);
			$this->load->view('footer', $data);

         }else{
            echo "Halaman tidak ditemukan";
         }
	}

	public function add() {
		$id_transaksi = $this->input->post('id_transaksi');

		if(empty($id_transaksi)) $this->m_transaksi->tambah_data();
	}

	public function delete() {
		$id_transaksi = $this->input->post('id_transaksi1');
		
		$this->m_transaksi->hapus_data($id_transaksi);
	}

	public function updateHarga() {
		$id_transaksi = $this->input->post('id_transaksi');

		if(empty($id_transaksi)){
		 $this->index();
		}else{
		 $this->m_transaksi->ubah_harga($id_transaksi);
	}
	}
}
