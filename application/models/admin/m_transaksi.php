<?php 
 
class m_transaksi extends CI_Model{
	function tampil_data() {
		return $this->db->get('transaksi');
    }
    
    function tambah_data() {
		$data = array(
			'id_transaksi' => $this->input->post('id_transaksi'),
			'id_user' => $this->input->post('id_user'),
			'pelanggan' => $this->input->post('pelanggan'),
			'tanggal' => date('Y-m-d 00:00:00', strtotime($this->input->post('tanggal'))),
			);
        $this->db->insert('transaksi', $data);
		redirect('../admin/TransaksiController');
    }

    function hapus_data($id_transaksi) {
		$this->db->where(array('id_transaksi' => $id_transaksi));
        $this->db->delete(array('detail', 'transaksi'));
		redirect('../admin/TransaksiController');
	}

	function ubah_harga($id_transaksi) {
		$data = array(
			'bayar' => $this->input->post('bayar'),
			'total' => $this->input->post('total'),
			'kembali' => $this->input->post('kembali'),
			);
		$this->db->where(array('id_transaksi' => $id_transaksi));
        $this->db->update('transaksi', $data);
		redirect('../admin/TransaksiController');
	}
	
}