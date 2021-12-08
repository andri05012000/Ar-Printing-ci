<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller {
 
        function __construct(){
                        parent::__construct();		
                        $this->load->model('admin/m_produk');
                        $this->load->helper('url');
        }

        public function index(){ 
        if($this->session->userdata('akses')=='1'){
            $data['query'] = $this->m_produk->tampil_data();
            $data['ms_produk'] = $this->m_produk->tampil_data();

                $this->load->view('headerAdmin', $data);
                $this->load->view('master/v_produk', $data);
                $this->load->view('footer', $data);

         }else{
            echo "Halaman tidak ditemukan";
            
         }
     }
        
        public function add(){
                $id_produk = $this->input->post('id_produk');

                if(empty($id_produk)) {
                        $this->m_produk->tambah_data();
 
                }else {
                        $this->m_produk->ubah_data($id_produk);
        		}
        }

        public function delete(){
                $id_produk = $this->input->post('id_produk1');
                $this->m_produk->hapus_data($id_produk);
        }
}

?>