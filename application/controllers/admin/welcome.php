<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('akses')=='1'){
			$this->load->view('headerAdmin');
			$this->load->view('v_berandaAdmin');
			$this->load->view('footer');
		}else{
			echo "Halaman tidak ditemukan";
		}
	}
}
