<?php  
class LoginController extends CI_Controller{

		function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('url');
		$this->load->library('session');
	}

	function index(){

		if($this->session->userdata('akses')=='1'){
			redirect('admin/welcome');
		}elseif($this->session->userdata('akses')=='2'){
			redirect('kasir/welcome');
		}else{
		$this->load->view('v_login');
		}
	}

	function auth(){
        $this->m_login->auth();
    }

    function logout(){
        $this->session->sess_destroy();
         redirect(site_url('LoginController'));
    }
}
