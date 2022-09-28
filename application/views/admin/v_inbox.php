<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>


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
                
          
                
                <br>
                
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
               <tr>
                    <th style="width:70px;">#Tanggal</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php
          $no=0;
            foreach ($data->result_array() as $i) :
               $no++;
                       $inbox_id=$i['inbox_id'];
                       $inbox_nama=$i['inbox_nama'];
                       $inbox_email=$i['inbox_email'];
                       $inbox_msg=$i['inbox_pesan'];
                       $tanggal=$i['tanggal'];

                    ?>
                <tr>
                  <td><?php echo $tanggal;?></td>
                  <td><?php echo $inbox_nama;?></td>
                  <td><?php echo $inbox_email;?></td>
                  <td><?php echo $inbox_msg;?></td>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $inbox_id;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
        <?php endforeach;?>
                </tbody>
              </table>
                
                
                  
              </div>
            </div>
          </div>

        </div>



  <?php foreach ($data->result_array() as $i) :
               $inbox_id=$i['inbox_id'];
                       $inbox_nama=$i['inbox_nama'];
                       $inbox_email=$i['inbox_email'];
                       $inbox_msg=$i['inbox_pesan'];
                       $tanggal=$i['tanggal'];
            ?>
  <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo$inbox_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Inbox</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/inbox/hapus_inbox'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
              <input type="hidden" name="kode" value="<?php echo $inbox_id;?>"/>
                            <p>Apakah Anda yakin mau menghapus Nama Pengirim inbox<b>&nbsp;<?php echo $inbox_nama;?></b> ?</p>

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
