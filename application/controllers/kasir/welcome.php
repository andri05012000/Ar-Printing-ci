<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		public function index()
	{
		if($this->session->userdata('akses')=='2'){
			
			$this->load->view('headerKasir');
			$this->load->view('v_berandaKasir');
			$this->load->view('footer');
		}else{
			echo "Halaman tidak ditemukan";
		}
	}
}
