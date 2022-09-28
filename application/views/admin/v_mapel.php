
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
              <a href="#" class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Kategori</a>
            </div>
                
                <br>
                
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
          					<th>#</th>
          					<th>Kategori</th>
          					<th>Keterangan</th>
                            <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $event_id=$i['id_event'];
          					   $nama_event=$i['nama_event'];
          					   $keterangan_event=$i['keterangan_event'];

                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $nama_event;?></td>
        				  <td><?php echo $keterangan_event;?></td>
                  
                    <td style="text-align:right;">
                      
                      <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $event_id;?>">
                        <span class="icon text-white-50">
                          <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="text">Edit</span>
                      </a>
                      
                      <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $event_id;?>">
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
                        <h4 class="modal-title" id="myModalLabel">Tambah Kategor</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/event/simpan_event'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Kategori</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="namaevent" class="form-control" id="inputUserName" placeholder="Nama Kategori" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Keterangan</label>
                                        <div class="col-sm-7">

                                          <textarea class="form-control" name="keterangan"></textarea>
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
                $event_id=$i['id_event'];
                $nama_event=$i['nama_event'];
                $keterangan_event=$i['keterangan_event'];
            ?>

    
        <div class="modal fade" id="ModalEdit<?php echo $event_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit event</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/event/update_event'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $event_id;?>"/>
                                  <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Judul</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="namaevent" class="form-control" value="<?php echo $nama_event;?>" placeholder="Nama event" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Album</label>
                                        <textarea class="form-control" name="keterangan"><?php echo $keterangan_event;?></textarea>
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
                $event_id=$i['id_event'];
                $nama_event=$i['nama_event'];
                $keterangan_event=$i['keterangan_event'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $event_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus event</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/event/hapus_event'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $event_id;?>"/>
                            <p>Apakah Anda yakin mau menghapus Posting <b><?php echo $nama_event;?></b> ?</p>

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