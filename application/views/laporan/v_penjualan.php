

<!-- Page-Title -->
<div class="content-page">
<div class="content">
<div class="row">
            <div class="col-sm-9">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Laporan Penjualan</b></h4>

                    <br>
                    <form action="<?php echo base_url('admin/LaporanController/Laporan');?>" target="_blank" method="post" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-4">Date Range</label>
                        <div class="col-sm-8">
                            <div class="input-daterange input-group" id="tanggal">
                                <input type="date" class="form-control" value="<?php echo date('d-m-Y'); ?>" name="start" />
                                <span class="input-group-addon bg-custom b-0 text-white">to</span>
                                <input type="date" class="form-control" value="<?php echo date('d-m-Y'); ?>" name="end" />
                            </div>
                        </div>
                    </div>
                                            

                    <div class="float-right">
                        <button type="submit" class="btn btn-success btn-sm">Tampilkan Laporan</button>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->