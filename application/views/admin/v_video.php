
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
              <a href="#" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Video</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
          					<th>#</th>
                    <th>Judul</th>
          					<th>Kategori</th>
          					<th>Event</th>
                            <th>Kode</th>
                            <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $id_video=$i['id_video'];
                    $judul_video=$i['judul_video'];
          					   $kode_video=$i['kode_video'];
          					   $nama_event=$i['nama_event'];
          					   $kategorii_nama=$i['kategorii_nama'];

                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                    <td><?php echo $judul_video;?></td>
                    <td><?php echo $kategorii_nama;?></td>
                    <td><?php echo $nama_event;?></td>
                    <td><?php echo $kode_video;?></td>
                  <td>
                      
                      <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $id_video;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      
                      <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $id_video;?>">
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
                        <h4 class="modal-title" id="myModalLabel">Add Video</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/video/simpan_video'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nama Video</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                    </div>
                        
                        <div class="form-group">
                                        <label class="col-sm-4 control-label">Deskripsi Video</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" name="keterangan"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="kelas" style="width: 100%;" required>
                                                    <option value="">-Pilih-</option>
                                              <?php
                                              $no=0;
                                              foreach ($kelas->result_array() as $a) :
                                                 $no++;
                                                           $id_kelas=$a['kategorii_id'];
                                                           $nama_kelas=$a['kategorii_nama'];

                                                        ?>
                                                    <option value="<?php echo $id_kelas;?>"><?php echo $nama_kelas;?></option>
                                              <?php endforeach;?>
                                          </select>
                                        </div>
                                    </div>
                        
                        <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Event</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="event" style="width: 100%;" required>
                                                    <option value="">-Pilih-</option>
                                              <?php
                                              $no=0;
                                              foreach ($event->result_array() as $a) :
                                                 $no++;
                                                           $id_event=$a['id_event'];
                                                           $nama_event=$a['nama_event'];

                                                        ?>
                                                    <option value="<?php echo $id_event;?>"><?php echo $nama_event;?></option>
                                              <?php endforeach;?>
                                          </select>
                                        </div>
                                    </div>
                        
                        <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kode Video</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="source" class="form-control" required>
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

  <!--Modal Edit Album-->
  <?php foreach ($data->result_array() as $i) :
              $id_video=$i['id_video'];
          					   $kode_video=$i['kode_video'];
    $judul=$i['judul_video'];
    $deskripsi=$i['deskripsi_video'];
                                $id_eventku=$i['id_event'];
                                $kategorii_idku=$i['kategorii_id'];
          					   $nama_event=$i['nama_event'];
          					   $kategorii_nama=$i['kategorii_nama'];
            ?>

        <div class="modal fade" id="ModalEdit<?php echo $id_video;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Video</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/video/update_video'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id_video;?>"/>
                         <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Judul Video</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="nama" value="<?php echo $judul;?>" class="form-control" required>
                                        </div>
                                    </div>
                        
                        <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Deskripsi Video</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" name="keterangan"><?php echo $deskripsi;?></textarea>
                                        </div>
                                    </div>       
                         <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="kelas" required>
                                                    <option value="">-Pilih-</option>
                                              <?php
                                              foreach ($kelas->result_array() as $a) {
                                                           $kategorii_id=$a['kategorii_id'];
                                                           $kategorii_namaku=$a['kategorii_nama'];
                                                           if($kategorii_idku==$kategorii_id)
                                                              echo "<option value='$kategorii_id' selected>$kategorii_namaku</option>";
                                                           else
                                                              echo "<option value='$kategorii_id'>$kategorii_namaku</option>";
                                                        }?>
                                          </select>
                                        </div>
                                    </div>         

                                    
                        <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Event</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="event" required>
                                                    <option value="">-Pilih-</option>
                                              <?php
                                              foreach ($event->result_array() as $a) {
                                                           $event_idku=$a['id_event'];
                                                           $nama_eventku=$a['nama_event'];
                                                           if($id_eventku==$event_idku)
                                                              echo "<option value='$event_idku' selected>$nama_eventku</option>";
                                                           else
                                                              echo "<option value='$event_idku'>$nama_eventku</option>";
                                                        }?>
                                          </select>
                                        </div>
                                    </div> 
                        
                        
                        <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kode Video</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="source" class="form-control" value="<?php echo $kode_video;?>" id="inputUserName" placeholder="Judul" required>
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
  <?php endforeach;?>
	<!--Modal Edit Album-->

	<?php foreach ($data->result_array() as $i) :
              $id_video=$i['id_video'];
          					   $kode_video=$i['kode_video'];
          					   $nama_event=$i['nama_event'];
          					   $kategorii_nama=$i['kategorii_nama'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id_video;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Video</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/video/hapus_video'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $id_video;?>"/>
                     
                            <p>Apakah Anda yakin mau menghapus Video Kategori <b><?php echo $kategorii_nama;?></b> Event <b><?php echo $nama_event;?></b> ?</p>

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