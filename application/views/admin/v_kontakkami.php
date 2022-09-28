
<div id="content">

        
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          

        </nav>
        
<div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
            </div>
            <div class="card-body">
                
            <div class="box-header">
              <a href="" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah kontak</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
					          <th style="width:70px;">#</th>
                    <th>Jalan</th>
                    <th>No hp</th>
                    <th>Email</th>
                    
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    
				<?php
					$no=0;
  					foreach ($data->result_array() as $i) :
  					   $no++;
                       $id=$i['kontakkami_id'];
                       $jl=$i['kontakkami_jl'];
                       $hp=$i['kontakkami_hp'];
                       $email=$i['kontakkami_email'];
                       

                    ?>
                <tr>
                  
                  <td><?php echo $id;?></td>
                  <td><?php echo $jl;?></td>
                  <td><?php echo $hp;?></td>
                  <td><?php echo $email;?></td>
                  <td style="text-align:right;">
                      
                      <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      
                      <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Hapus</span>
                      </a>
                      
                        
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
                
                
                  
              </div>
            </div>
          </div>

        </div>
   

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah kontak</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/kontakkami/simpan_kontakkami'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jalan</label>
                                <div class="col-sm-7">
                                  <input type="text" name="xjl" class="form-control" id="inputUserName" placeholder="Jl" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">No Hp</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xhp" placeholder="Deskripsi ..." required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link map</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xmap" placeholder="map" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link twiter</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xtwiter" placeholder="twiter" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link facebook</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xfacebook" placeholder="facebook" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link youtube</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xyoutube" placeholder="Deskripsi ..." required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link instagram</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xinstagram" placeholder="instagram" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">email</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xemail" placeholder="email" required></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

		<?php foreach ($data->result_array() as $i) :
                
                       $id=$i['kontakkami_id'];
                       $jl=$i['kontakkami_jl'];
                       $hp=$i['kontakkami_hp'];
                       $email=$i['kontakkami_email'];
                       $map=$i['kontakkami_map'];
                       $twiter=$i['kontakkami_twiter'];
                       $facebook=$i['kontakkami_facebook'];
                       $youtube=$i['kontakkami_youtube'];
                       $instagram=$i['kontakkami_instagram'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Kontak</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/kontakkami/update_kontakkami'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jalan</label>
                                <div class="col-sm-7">
                                    <input type="hidden" name="kode" value="<?php echo $id;?>">
                                  <input type="text" name="xjl" class="form-control" id="inputUserName" value="<?php echo $jl;?>" placeholder="Jl" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">No Hp</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xhp" placeholder="Deskripsi ..." required><?php echo $hp;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link map</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xmap" placeholder="map" required><?php echo $map;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link twiter</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xtwiter" placeholder="twiter" required><?php echo $twiter;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link facebook</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xfacebook" placeholder="facebook" required><?php echo $facebook;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link youtube</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xyoutube" placeholder="Deskripsi ..." required><?php echo $youtube;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Link instagram</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xinstagram" placeholder="instagram" required><?php echo $instagram;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">email</label>
                                <div class="col-sm-7">
                                  <textarea class="form-control" rows="3" name="xemail" placeholder="email" required><?php echo $email;?></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>

	<?php foreach ($data->result_array() as $i) :
               
                       $id=$i['kontakkami_id'];
                       $jl=$i['kontakkami_jl'];
                       $hp=$i['kontakkami_hp'];
                       $email=$i['kontakkami_email'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus kontakkami</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/kontakkami/hapus_kontakkami'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus kontakkami <b><?php echo $email;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
