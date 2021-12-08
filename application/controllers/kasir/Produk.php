<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
 
        function __construct(){
                        parent::__construct();		
                        $this->load->model('kasir/m_produk');
                        $this->load->helper('url');
        }

        public function index(){ 
        if($this->session->userdata('akses')=='2'){
            $data['query'] = $this->m_produk->tampil_data();

         $data['ms_produk'] = $this->m_produk->tampil_data();

                $this->load->view('headerAdmin', $data);
                $this->load->view('master/v_produk_kasir', $data);
                $this->load->view('footer', $data);

         }else{
            echo "Halaman tidak ditemukan";
            
         }
     }
}

?>