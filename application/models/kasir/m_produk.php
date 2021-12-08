<?php 
 
class m_produk extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('ms_produk');

    }
}