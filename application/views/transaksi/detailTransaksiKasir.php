

<!-- Page-Title -->
<div class="content-page">
    <div class="content">
<?php
$ms_produk = $this->m_produk->tampil_data();
echo "<script> var ms_produk = ".json_encode($ms_produk->result()).";</script>";
?>
<script type="text/javascript">
    function SetsubTotal(){
        var sub_total = ( $('#jumlah').val() * $('#harga').val());
        $('#sub_total').val(sub_total);
    }
    function SethargaBarang(){
        var id_produk = $('#id_produk').val();
       for (var i = 0; i < ms_produk.length; i++) {
           if(id_produk == ms_produk[i]['id_produk']){
            $('#harga').val(ms_produk[i]['harga']);
           }
       }
       SetsubTotal();
    }

  
    function Bayar(){
        var kembali = ( $('#bayar').val() - $('#total').val());
        $('#kembali').val(kembali);
    }
</script>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
        <h4 class="m-t-0 header-title m-b-30"><b>Data Penjualan</b></h4>
        <form action="<?php echo base_url(). 'kasir/DetailTransaksiControllerkasir/add'; ?>" method="post" class="form-horizontal" role="form">
            <div class="col-md-6">
        
                    <div class="form-group">
                        <input type="hidden" id="id_transaksi" name="id_transaksi"  value="<?php echo $id_transaksi; ?>">
                        <label  class="col-sm-3 control-label">Nama Produk</label>
                            <div class="col-sm-9">
                        <select class="form-control selectpicker" data-live-search="true"  data-style="btn-white" onchange="SethargaBarang()" id="id_produk" name="id_produk"   required>
                            <option value=""></option>
                            <?php
                            $x = $this->m_produk->tampil_data();
                            foreach($x->result() as $row) {
                                echo "<option value='".$row->id_produk."'>".$row->nama_produk."</option>";
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Jumlah Barang</label>
                        <div class="col-sm-9">
                          <input type="number" min="1" class="form-control" onchange ="SetsubTotal()" id="jumlah" name="jumlah" placeholder="Jumlah Barang">
                        </div>
                    </div>
                    
               
            </div>
            <div class="col-md-3">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">Harga</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="harga" name="harga" placeholder="" readonly="">
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-3 control-label">Subtotal</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control"  id="sub_total" name="sub_total" placeholder="" readonly="">
                         </div>
                    </div>
                   
                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-9">
                          <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    

<div class="card-box table-responsive">
            <table id="" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>      
                    <th>Harga</th> 
                   <th>Subtotal</th>
                    <th>Aksi</th>
                    
                </tr>
                </thead>


        <tbody>
                <?php
                $no = 1;
                foreach($query->result() as $row) {
                    echo"<tr>
                    <td>".$no."</td>
                    <td>".$row->nama_produk."</td>
                    <td>".$row->jumlah."</td>
                    <td>".$row->harga."</td>
                    <td>".$row->sub_total."</td>
                    <td>
                    <a href='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=
                    \"SetInputs(
                    '".$row->id_detail."'
                    )\"><i class ='fa fa-trash'></i></a>
                    </td>
                </tr>";$no++;
                }
                ?>
                </tbody>
            <tfoot>
            <tr>
                <th colspan="4">Total Harga</th>
                <?php
                $sum = 0;
                foreach($query->result_array() as $row){
                    $sum += str_replace(",", "", $row['sub_total']);
                }
                $total = number_format($sum, 0, ',', '.');
                echo "<th colspan='2'>".$total."</th>";
                ?>
            </tr>
            </tfoot>
        </table>
        <div class="form-group m-b-0">
            <div style="text-align: right; margin-right: 150px;">
            <a href="#" class="on-default edit-row btn btn-inverse" data-toggle="modal" data-target="#cetak-modal" onclick="SetInput(<?php echo $sum; ?>)">Selesai</a>
            </div>
        </div>       
    </div>
</div>
                  
                    
               
<!-- end row -->

<div id="cetak-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Detail Transaksi</h4>
            </div>


        <form action="<?php echo base_url(). 'kasir/TransaksiControllerkasir/updateHarga'; ?>" method="post" class="form-horizontal" role="form"> 
            <div class="modal-body">                             
                <div class="form-group">
                    <input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $id_transaksi; ?>">
                    <label class="col-md-3 control-label">Total Biaya</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="total" name="total" placeholder="" readonly="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Bayar</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="bayar" name="bayar" placeholder="" onchange="Bayar()" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Kembalian</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="kembali" readonly="" placeholder="" name="kembali"  required>
                    </div>
                </div>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
</div>
<!-- end row -->



<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <form action="<?php echo base_url(). 'kasir/DetailTransaksiControllerkasir/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="id_detail1" name="id_detail1">
                                                                <input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo $id_transaksi; ?>">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-success waves-effect waves-light">Ya</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->            

<script type="text/javascript">
    function SetInput(total){
        document.getElementById('total').value = total;
    }

    function SetInputs(id_detail){
        document.getElementById('id_detail1').value = id_detail;
    }
    



</script>
