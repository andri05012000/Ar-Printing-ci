<?php 
 
class m_produk extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('ms_produk');

    }
    
    function tambah_data() {

		$data = array(
			'id_user' => $this->input->post('id_user'),
		    'nama_produk' => $this->input->post('nama_produk'),
            'satuan' => $this->input->post('satuan'),
			'harga' => $this->input->post('harga')
			);
		$this->db->insert('ms_produk', $data);
		redirect('../admin/ProdukController');
    }
  
    function ubah_data ($id_produk) {
 
		$data = array(
		    'nama_produk' => $this->input->post('nama_produk'),
            'satuan' => $this->input->post('satuan'),
			'harga' => $this->input->post('harga')
			);

		$this->db->where(array('id_produk' => $id_produk ));
		$this->db->update('ms_produk', $data);
		redirect('../admin/ProdukController');
	}
	
	function hapus_data ($id_produk) {
		$this->db->where(array('id_produk' => $id_produk));
		$this->db->delete('ms_produk');
		redirect('../admin/ProdukController');
    }

}