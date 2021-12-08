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
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Satuan</th>
                                    <th>Harga (Rp.)</th>
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
	                