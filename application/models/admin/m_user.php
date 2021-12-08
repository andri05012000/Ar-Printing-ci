<?php 
 
class m_user extends CI_Model{
	function tampil_data(){
		return $this->db->get('ms_user');
    }
    
    function tambah_data() {
        
		$data = array(
			'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password')),
			'level' => $this->input->post('level'),
			'status_user' => $this->input->post('status_user')
			);
		$this->db->insert('ms_user', $data);
		redirect('../admin/UserController');
    }
  
    function ubah_data ($id_user) {
    	$data = array(
			'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password')),
			'level' => $this->input->post('level'),
			'status_user' => $this->input->post('status_user')
			);
		$this->db->where(array('id_user' => $id_user));
		$this->db->update('ms_user', $data);
		redirect('../admin/UserController');
	}
	
	function hapus_data ($id_user) {
		$this->db->where(array('id_user' => $id_user));
		$this->db->delete('ms_user');
		redirect('../admin/UserController');
    }

}