<?php 
 
class M_Laporan extends CI_Model{
    function tampil_data() {
    
    $tanggalAwal = date('Y-m-d 00:00:00', strtotime($this->input->post('start')));
    $tanggalAkhir = date('Y-m-d 00:00:00', strtotime($this->input->post('end')));
    $this->db->select('*');
    $this->db->where('tanggal >=', $tanggalAwal);
    $this->db->where('tanggal <=', $tanggalAkhir);
    $this->db->from('transaksi');
    $query=$this->db->get();
    return $query;
    }
}