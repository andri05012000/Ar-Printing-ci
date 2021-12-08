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
                        <h4 class="m-t-0 header-title"><b>DATA PRODUK</b></h4>
                        <!-- Full width modal -->
                        <div style="text-align: right; margin-bottom: 10px;">
                            <a href='#' class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal" onClick="ResetInput()" class="col-sm-6 col-md-4 col-lg-3">
                                <p>TAMBAH</p></a>
                        </div>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Harga (Rp.)</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $no = 1;
                                    foreach($ms_produk->result() as $u){ 
                                        echo"<tr>
                                        <td>".$no."</td>
                                        <td>".$u->nama_produk."</td>
                                        <td>".$u->satuan."</td>
                                        <td>".$u->harga."</td>
                                        <td>
                                            
                                            <a href ='#' class='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$u->id_produk."','".$u->nama_produk."','".$u->satuan."','".$u->harga."')\" class='col-sm-6 col-md-4 col-lg-3'>
                                            <i class='ti-pencil'></i></a>
                                           
                                          
                                            <a href='#' class='on-default default-row btn btn-danger' data-toggle='modal' data-target='#delete-modal' onClick=\"setInput1('".$u->id_produk."','".$u->nama_produk."','".$u->satuan."','".$u->harga."')\" class='col-sm-6 col-md-4 col-lg-3'>
                                            <i class='ti-trash'></i></a>
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
                        <h4 class="modal-title">DATA PRODUK</h4>
                        <form action="<?php echo base_url('admin/ProdukController/add'); ?>" method="post">
                    </div>
                    <div class="modal-body">
                        <div class="row">
                        	<div class="col-md-12">
                        		<div class="form-group">
			                        <input type="hidden" id="id_produk" name="id_produk">
			                        <label for="field-3" class="control-label">Nama Produk</label>
                            		<input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                        		</div>
                        	</div>
                        </div>	
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Satuan</label>
                                    <select class="form-control" id="satuan" name="satuan" data-style="btn-white">
		                                <option value="Lembar">Lembar</option>
		                                <option value="Buah">Buah</option>
		                                
		                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Harga Produk</label>
                                    <input type="text" class="form-control" id="harga" name="harga" required >
                                </div>
                            </div>
                        </div>	
                        <div class="hidden">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">User</label>
                                    <select type="hidden" class="form-control" id="id_user" name="id_user" data-style="btn-white" >
                                    	<option value="1">Super Admin</option>
		                                <option value="2">Admin</option>
		                            </select>
                                </div>
                            </div>
                        </div>	

                        
                        <td>
                        <div class="model-footer">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                    <button type="submit" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Batal</button>
                               </div>
                                </td>
                                </td>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="custom-width-modalLabel">DATA PRODUK</h4>
                        <form action="<?php echo base_url('admin/ProdukController/delete'); ?>" method="post" class="form-horizontal" role="form">
                    </div>
                    <div class="modal-body">
                        <h4>Konfirmasi</h4>
                        <p>Apakah anda yakin ingin menghapus data ini ?</p>
                        <div class="form-group">
                             <input type="hidden" id="id_produk1" name="id_produk1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light">Ya</button>
                    </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal--->



	                <script type="text/javascript">
	                function SetInput(id_produk, nama_produk, satuan, harga) {
	                    document.getElementById('id_produk').value = id_produk;
	                    document.getElementById('nama_produk').value = nama_produk;
	                    document.getElementById('satuan').value = satuan;
	                    document.getElementById('harga').value = harga;
	                }
	                function setInput1(id_produk, nama_produk, satuan, harga) {
	                    document.getElementById('id_produk1').value = id_produk;
	                    document.getElementById('nama_produk1').value = nama_produk;
	                    document.getElementById('satuan1').value = satuan;
	                    document.getElementById('harga1').value = harga;
	                }
	                function ResetInput(id_produk, nama_produk, satuan, harga) {
	                    document.getElementById('id_produk').value = "";
	                    document.getElementById('nama_produk').value = "";
	                    document.getElementById('satuan').value = "";
	                    document.getElementById('harga').value = "";
	                }

	               
	                </script>
	                