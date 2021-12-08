<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller {
    function __construct() {
		parent::__construct();		
		$this->load->model('kasir/m_transaksi');		
		$this->load->model('kasir/m_detailTransaksi');		
		$this->load->model('kasir/m_produk');	
		$this->load->model('kasir/m_Laporan');
		$this->load->helper('url');
    }
    
    public function index() {
		if($this->session->userdata('akses')=='2'){
			$this->load->view('headerKasir');
			$this->load->view('laporan/v_penjualanKasir');
			$this->load->view('footer');
		}else{
			echo "Halaman tidak ditemukan";
		}
	}

	public function Laporan(){
			if($this->session->userdata('akses')=='2'){
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
