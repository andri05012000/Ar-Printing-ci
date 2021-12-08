<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <h4 class="m-t-0 header-title"><b>DATA TRANSAKSI</b></h4>
                        <!-- Full width modal -->
                        <div style="text-align: right; margin-bottom: 10px;">
                            <a href='#' class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal" onClick="ResetInput()" class="col-sm-6 col-md-4 col-lg-3">
                                <i class="ti-plus"></i></a>
                        </div>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pelanggan</th>
                                    <th>Tanggal</th>
                                    <th>Bayar</th>
                                    <th>Total</th>
                                    <th>Kembali</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $no = 1;
                                    foreach($transaksi->result() as $u){ 
                                        echo"<tr>
                                        <td>".$no."</td>
                                        <td>".$u->pelanggan."</td>
                                        <td>".$u->tanggal."</td>
                                        <td>".$u->bayar."</td>
                                        <td>".$u->total."</td>
                                        <td>".$u->kembali."</td>
                                        <td>
                                            <a href='".base_url('kasir/DetailTransaksiControllerkasir?id='.$u->id_transaksi)."' class='on-default edit-row btn btn-primary' ><i class='fa fa-search'></i></a>
                                            <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInput1( '".$u->id_transaksi."')\"><i class ='fa fa-trash'></i></a>
                                        </td>
                                    </tr>";
                                    $no++;
                                    } 
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- container -->
       
 
    <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Data Transaksi</h4>
            </div>

        <form action="<?php echo base_url('kasir/TransaksiControllerkasir/add');?>" method="post" class="form-horizontal" role="form">
                    <div class="modal-body">                                   
                        <div class="form-group">
                             <input type="hidden" id="id_transaksi" name="id_transaksi">
                                <label class="col-md-3 control-label">Nama Pelanggan</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="pelanggan" name="pelanggan" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal </label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" placeholder="mm/dd/yy" id="tanggal" name="tanggal" required>
                                <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                            </div>
                        </div>
                    </div> 
                   
                    <div class="hidden">                                   
                        <div class="form-group">
                                <label class="col-md-3 control-label">User</label>
                            <div class="col-md-9">
                                <select type="text" class="form-control" id="id_user" name="id_user" data-style="btn-white">
                                    <option value="1">Super Admin</option>
                                    <option value="2">Admin</option>
                                </select>
                            </div>
                        </div>
                    </div>                       
            

            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
            </div>
            <form action="<?php echo base_url(). 'kasir/TransaksiControllerkasir/delete'; ?>" method="post" class="form-horizontal" role="form">
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus?</p>
                    <div>
                        <input type="hidden" id="id_transaksi1" name="id_transaksi1">
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
    function SetInput(id_transaksi, pelanggan, tanggal){
        document.getElementById('id_transaksi').value = id_transaksi;
        document.getElementById('pelanggan').value = pelanggan;
        document.getElementById('tanggal').value = tanggal;
       
    }

    function SetInput1(id_transaksi){
        document.getElementById('id_transaksi1').value = id_transaksi;
    }

    function ResetInput(id_transaksi, pelanggan, tanggal){
        document.getElementById('id_transaksi').value = "";
        document.getElementById('pelanggan').value = "";
        document.getElementById('tanggal').value = "";
 
    }
</script>