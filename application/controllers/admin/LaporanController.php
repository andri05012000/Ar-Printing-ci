<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller {
    function __construct() {
		parent::__construct();		
		$this->load->model('admin/m_transaksi');		
		$this->load->model('admin/m_detailTransaksi');		
		$this->load->model('admin/m_produk');		
		$this->load->model('admin/m_user');		
		$this->load->model('admin/m_Laporan');
		$this->load->helper('url');
    }
    
    public function index() {
		if($this->session->userdata('akses')=='1'){
			$this->load->view('headerAdmin');
			$this->load->view('laporan/v_penjualan');
			$this->load->view('footer');
		}else{
			echo "Halaman tidak ditemukan";
		}
	}

	public function Laporan(){
			if($this->session->userdata('akses')=='1'){
            $data['query'] = $this->m_Laporan->tampil_data();
            $this->load->library('pdf');
				$this->pdf->setPaper('A4', 'potrait');
				$this->pdf->filename = "laporan-ARprinting.pdf";
				$this->pdf->load_view('laporan/Laporanpdf', $data);
			}else{
				echo "Halaman tidak ditemukan";
			}

        
    }
}
