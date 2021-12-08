<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

        function __construct(){
                        parent::__construct();		
                        $this->load->model('admin/m_user');
                        $this->load->helper('url');

        
        }

        public function index(){     
        	if($this->session->userdata('akses')=='1'){
            $data['query'] = $this->m_user->tampil_data();
    
                $data['ms_user'] = $this->m_user->tampil_data();

                $this->load->view('headerAdmin', $data);
                $this->load->view('master/v_user', $data);
                $this->load->view('footer', $data);
            }else{
            echo "Halaman tidak ditemukan";
        }
         }

        public function add(){
                $id_user = $this->input->post('id_user');

                if(empty($id_user)) 
                        $this->m_user->tambah_data();

                else 
                        $this->m_user->ubah_data($id_user);
        }
        

        public function delete(){
                $id_user = $this->input->post('id_user1');
                $this->m_user->hapus_data($id_user);
        }
}

?>