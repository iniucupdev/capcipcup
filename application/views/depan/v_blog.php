<?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Berita</h1>
                    <a href="" class="h5 text-white">Beranda</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Berita</a>
                </div>
            </div>
        </div>

<section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        
                        
              <?php echo $this->session->flashdata('msg');?>                        
                        <?php foreach ($data->result() as $row) : ?>
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="<?php echo $row->tulisan_judul;?>">
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo $row->tanggal;?></h3>
                                    <p></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                                    <h2><?php echo $row->tulisan_judul;?></h2>
                                </a>
                                <?php echo limit_words($row->tulisan_isi,10).'...';?>
                                <ul class="blog-info-link">
                                    <li><a href="<?php echo site_url('blog/kategori/'.str_replace(" ","-",$row->tulisan_kategori_nama));?>" class="show"><i class="fa fa-user"></i> <?php echo $row->tulisan_kategori_nama;?></a></li>
                                    <li><small class="mr-2"><i class="fa fa-eye text-muted"></i>&nbsp;<?php echo $row->tulisan_views;?></small></li>
                                </ul>
                            </div>
                        </article>
                        <?php endforeach;?>
                        

                        

                        

                        
                        <nav class="blog-pagination justify-content-center d-flex">
                    <?php error_reporting(0); echo $page;?>
                </nav>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
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

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Postingan Populer</h3>
                            
                            
                      
                    
                            
                            <?php foreach ($populer->result() as $row) :?>
                            <div class="media post_item">
                                

                                <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                           
                            <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"><?php echo limit_words($row->tulisan_judul,3).'...';?>
                            </a>
                        </div>
                            </div>
                            <?php endforeach;?>
                            
                            
                        </aside>
                        


                        


                        
                    </div>
                </div>
            </div>
        </div>
    </section>