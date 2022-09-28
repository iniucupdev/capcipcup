
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Publikasi</h1>
                    <a href="" class="h5 text-white">Beranda</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Publikasi</a>
                </div>
            </div>
        </div>
<div class="recent_event_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">PUBLIKASI</h3>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    
                    
                   
                    
                 <div class="table-responsive">
                <table class="table table-striped" id="display">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Files</th>
                      <th>Tanggal</th>
                                            <th style="text-align:right;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach ($data->result() as $row):
                    ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row->file_judul;?></td>
                      <td><?php echo $row->tanggal;?></td>
                     
                      <td style="text-align:right;"><a href="<?php echo site_url('download/get_file/'.$row->file_id);?>" class="btn btn-info">Download</a></td>
                     <td style="text-align:right;"><a href="<?php echo site_url('assets/files/'.$row->file_data);?>" class="btn btn-info">Preview</a></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>             
               
                </div>
                
            </div>
        </div>
    </div>

