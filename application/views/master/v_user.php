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
                        <h4 class="m-t-0 header-title"><b>DATA USER</b></h4>
                        <!-- Full width modal -->
                        <div style="text-align: right; margin-bottom: 10px;">
                            <a href='#' class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal" onClick="ResetInput()" class="col-sm-6 col-md-4 col-lg-3">
                                <i class="ti-plus"></i></a>
                        </div>
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>level</th>
                                    <th>Status</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $no = 1;
                                    foreach($ms_user->result() as $u){ 
                                        echo"<tr>
                                        <td>".$no."</td>
                                        <td>".$u->username."</td>
                                        <td>".$u->level."</td>
                                        <td>".$u->status_user."</td>
                                        <td>
                                            
                                            <a href ='#' class='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$u->id_user."','".$u->username."','".$u->password."','".$u->level."','".$u->status_user."')\" class='col-sm-6 col-md-4 col-lg-3'>
                                            <i class='ti-pencil'></i></a>
                                           
                                          
                                            <a href='#' class='on-default default-row btn btn-danger' data-toggle='modal' data-target='#delete-modal' onClick=\"setInput1('".$u->id_user."','".$u->username."','".$u->password."','".$u->level."','".$u->status_user."')\" class='col-sm-6 col-md-4 col-lg-3'>
                                            <i class='glyphicon glyphicon-remove'></i></a>
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
                        <h4 class="modal-title">DATA USER</h4>
                        <form action="<?php echo base_url('admin/UserController/add'); ?>" method="post">
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">User Name</label>
                                    <input type="hidden" id="id_user" name="id_user">
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" required >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Level</label>
                                    <select class="form-control" id="level" name="level" data-style="btn-white">
		                                <option value="Admin">Admin</option>
		                                <option value="Kasir">ubah</option>   
		                            </select>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Status</label>
                                    <select class="form-control" id="status_user" name="status_user" data-style="btn-white">
		                                <option value="Aktif">Aktif </option>
		                                <option value="Tidak Aktif">Tidak Aktif</option>   
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
                        <h4 class="modal-title" id="custom-width-modalLabel">DATA USER</h4>
                        <form action="<?php echo base_url('admin/Usercontroller/delete'); ?>" method="post" class="form-horizontal" role="form">
                    </div>
                    <div class="modal-body">
                        <h4>Konfirmasi</h4>
                        <p>Apakah anda yakin ingin menghapus data ini ?</p>
                        <div class="form-group">
                             <input type="hidden" id="id_user1" name="id_user1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light">Ya</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
                
            </div>
            <!-- /.modal-dialog -->
        </div>
                    </div>
                    <!-- content -->

                <script type="text/javascript">
                function SetInput(id_user, username, password, level, status_user) {
                    document.getElementById('id_user').value = id_user;
                    document.getElementById('username').value = username;
                    document.getElementById('password').value = password;
                    document.getElementById('level').value = level;
                    document.getElementById('status_user').value = status_user;
                }
                function setInput1(id_user, username, password, level, status_user) {
                    document.getElementById('id_user1').value = id_user;
                    document.getElementById('username1').value = username;
                    document.getElementById('password1').value = password;
                    document.getElementById('level1').value = level;
                    document.getElementById('status_user1').value = status_user;
                }
                function ResetInput(id_user, username, password, level, status_user) {
                    document.getElementById('id_user').value = "";
                    document.getElementById('username').value = "";
                    document.getElementById('password').value = "";
                    document.getElementById('level').value = "";
                    document.getElementById('status_user').value = "";
                }

               
                </script>