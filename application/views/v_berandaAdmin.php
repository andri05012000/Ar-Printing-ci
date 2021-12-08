<?php
// https://www.malasngoding.com
 
// menghubungkan dengan koneksi database
include 'koneksi.php';
 
// mengambil data barang
$data_barang = mysqli_query($koneksi,"SELECT * FROM ms_user");
 
// menghitung data barang
$jumlah_barang = mysqli_num_rows($data_barang);
?>
<!-- Page-Title -->

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
                            <h1> WELCOME ADMIN : <?php echo $this->session->userdata('username'); ?> </h1>
                            <p>Jumlah data barang : <b><?php echo $jumlah_barang; ?></b></p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
