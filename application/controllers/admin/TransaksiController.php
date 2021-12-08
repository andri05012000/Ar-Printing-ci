<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiController extends CI_Controller {
	function __construct() {
		parent::__construct();		
		$this->load->model('admin/m_transaksi');
		$this->load->model('admin/m_user');
		$this->load->helper('url');

    }

	public function index() {
		if($this->session->userdata('akses')=='1'){
            $data['query'] = $this->m_transaksi->tampil_data();

			$data['transaksi'] = $this->m_transaksi->tampil_data();
			
			$this->load->view('headerAdmin', $data);
			$this->load->view('transaksi/v_transaksi', $data);
			$this->load->view('footer', $data);

         }else{
         	echo "halaman tidak ada";
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
