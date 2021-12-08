<?php
class m_detailTransaksi extends CI_Model {

    function tampil_data($id_transaksi) {
        return $this->db->query("SELECT * FROM ms_produk, transaksi, detail 
            WHERE ms_produk.id_produk=detail.id_produk AND 
            transaksi.id_transaksi=detail.id_transaksi AND 
            transaksi.id_transaksi='".$id_transaksi."'");

    }
   
    function tambah_data() {
        $data = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_produk' => $this->input->post('id_produk'),
            'harga' => $this->input->post('harga'),
            'jumlah' => $this->input->post('jumlah'),
            'sub_total' => $this->input->post('sub_total')
        );

        $this->db->insert('detail',$data);
        $this->set_total($data['id_transaksi']);

        redirect('../kasir/DetailTransaksiControllerkasir?id='.$data['id_transaksi']);
    }

    function set_total($id_transaksi){
        $query = $this->db->query("SELECT SUM(sub_total) AS total FROM detail 
            WHERE id_transaksi='".$id_transaksi."'");

        foreach($query->result() as $row) {
            $data = array(
                'total' => $row->total               
            );

        }
        $this->db->where(array('id_transaksi'=> $id_transaksi));
        $this->db->update('transaksi', $data);
    }
   
    function hapus_data($id_detail, $id_transaksi){
        
        $this->db->where(array('id_detail' => $id_detail));
        $this->db->delete('detail');
        redirect('../kasir/DetailTransaksiControllerkasir?id='.$id_transaksi.'');
    }
}