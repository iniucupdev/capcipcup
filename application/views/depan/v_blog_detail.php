
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
 
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Berita Detail</h1>
                    <a href="" class="h5 text-white">Beranda</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Berita Detail</a>
                </div>
            </div>
        </div>
<!--============================= BLOG =============================-->
<section class="blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-img_block">
                    <img class="img-fluid w-100 rounded mb-5" src="<?php echo base_url().'assets/images/'.$image?>" alt="">
                    
                    <div class="blog-date">
                        <span><?php echo $tanggal;?></span>
                    </div>
                </div>
                <div class="blog-tiltle_block">
                    <h4><a href="<?php echo site_url('artikel/'.$slug);?>"><?php echo $title;?></a></h4>
                    <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $author;?></span> </a>  |   <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $kategori;?></span></a></h6>
                    <?php echo $blog;?>
                </div>

                <div class="blog-tiltle_block">

                    <div class="blog-icons">
                        <div class="blog-share_block">
                          <div class="pull-left"><h5>Bagikan Ke:</h5></div>
                          <div class="sharePopup"></div>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs blogpost-tab-wrap" role="tablist">
                        <li class="nav-item blogpost-nav-tab">
                            <a class="nav-link active" data-toggle="tab" href="#comments" role="tab">Komentar</a>
                        </li>
                        <li class="nav-item blogpost-nav-tab">
                            <a class="nav-link" data-toggle="tab" href="#write-comment" role="tab">Tinggalkan Komentar</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <?php echo $this->session->flashdata('msg');?>
                    <div class="blogpost-tabs">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="comments" role="tabpanel">
                              <?php
                                  $colors = array(
                                      '#ff9e67',
                                      '#10bdff',
                                      '#14b5c7',
                                      '#f98182',
                                      '#8f9ce2',
                                      '#ee2b33',
                                      '#d4ec15',
                                      '#613021',
                                  );
                                  foreach ($show_komentar->result() as $row) :
                                  shuffle($colors);
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="blodpost-tab-img" style="background-color:<?php echo reset($colors);?>;width: 65px;height: 65px;border-radius:50px 50px 50px 50px;">
                                                    <center><h2 style="padding-top:20%;color:#fff;"><?php echo substr($row->komentar_nama,0,1);?></h2></center>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="blogpost-tab-description">
                                                    <h6><?php echo $row->komentar_nama;?></h6><small><em><?php echo date("d M Y H:i", strtotime($row->komentar_tanggal));?></em></small>
                                                    <p><?php echo $row->komentar_isi;?></p>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <?php
                                                $komentar_id=$row->komentar_id;
                                                $query=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='1' AND komentar_parent='$komentar_id' ORDER BY komentar_id ASC");
                                                foreach ($query->result() as $res) :
                                        shuffle($colors);
                                            ?>
                                  <div class="row">
                                      <div class="col-md-12 offset-md-1">
                                          <div class="row">
                                              <div class="col-md-2">
                                                <div class="blodpost-tab-img" style="background-color:<?php echo reset($colors);?>;width: 65px;height: 65px;border-radius:50px 50px 50px 50px;">
                                                    <center><h2 style="padding-top:20%;color:#fff;"><?php echo substr($res->komentar_nama,0,1);?></h2></center>
                                                </div>
                                              </div>
                                              <div class="col-md-9">
                                                  <div class="blogpost-tab-description">
                                                      <h6><?php echo $res->komentar_nama;?></h6><small><em><?php echo date("d M Y H:i", strtotime($res->komentar_tanggal));?></em></small>
                                                      <p><?php echo $res->komentar_isi;?></p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php endforeach;?>
                                <?php endforeach;?>
                            </div>
                            <div class="tab-pane" id="write-comment" role="tabpanel">
                                <form action="<?php echo site_url('blog/komentar');?>" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                                            </div>
                                            <!-- // end .form-group -->
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                            </div>
                                            <!-- // end .form-group -->
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>Komentar Anda</label>
                                                <textarea class="form-control" name="komentar" rows="6" required> </textarea>
                                            </div>
                                            <!-- // end .form-group -->
                                        </div>
                                        <div class="col-12">
                                            <input type="hidden" name="id" value="<?php echo $id;?>" required>
                                            <button type="submit" class="btn btn-warning" />Kirim Komentar</button>
                                        </div>
                                        <!-- // end .col-12 -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
              <aside class="single_sidebar_widget search_widget">
                            
                            
                                
                            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                                <form action="<?php echo site_url('blog/search');?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" name="keyword" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                    </div>
                            
                        </aside>
                   
               <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori Berita</h4>
                            <ul class="list cat-list">
                                
                                <?php foreach ($category->result() as $row) : ?>
                      <li><a href="<?php echo site_url('blog/kategori/'.str_replace(" ","-",$row->kategori_nama));?>" class="d-flex"><?php echo $row->kategori_nama;?></a></li>
                    <?php endforeach;?>
                                
                                
                            </ul>
                        </aside>
                <div class="blog-featured_post">
                    <h3>Populer</h3>
                  <?php foreach ($populer->result() as $row) :?>
                            <div class="media post_item">
                                

                                <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                           
                            <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"><?php echo limit_words($row->tulisan_judul,3).'...';?>
                            </a>
                        </div>
                            </div>
                            <?php endforeach;?>
                </div>

            </div>
        </div>
    </div>
</section>

