<?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>

    
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner"><?php foreach ($slide->result() as $row) : ?>
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo base_url().'assets/images/'.$row->slide_photo;?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Dharma Wanita Persatuan</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php echo $row->slide_judul;?></h1>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <?php foreach ($slidekedua->result() as $row) : ?>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url().'assets/images/'.$row->slide_photo;?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Dharma Wanita Persatuan</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php echo $row->slide_judul;?></h1>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


   

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Dharma Wanita Persatuan</h5>
                        <h1 class="mb-0">Tentang Kami</h1>
                    </div>
                    <p class="mb-4">Dharma Wanita adalah sebuah organisasi yang beranggotakan istri Pegawai Negeri Sipil (PNS). Dharma Wanita ditetapkan pada tanggal 7 Desember 1999 pada sebuah rapat nasional. Tujuan utama dari pendirian Dharma Wanita adalah meningkatkan kualitas sumber daya anggota keluarga PNS untuk mencapai kesejahteraan nasional.</p>
                   
                    
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="<?php echo base_url();?>assets/assets/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Dharma Wanita Persatuan</h5>
                <h1 class="mb-0">BERITA</h1>
            </div>
            <div class="row g-5"><?php  foreach ($berita->result() as $row) :?>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                          <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                            <img class="img-fluid" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" alt="<?php echo $row->tulisan_judul;?>" style="width: 100%;"></a>
                            
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="<?php echo site_url('blog/kategori/'.str_replace(" ","-",$row->tulisan_kategori_nama));?>"><?php echo $row->tulisan_kategori_nama;?></a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Haltimkab</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $row->tanggal;?></small>
                            </div>
                            <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                                <h4><?php echo $row->tulisan_judul;?></h4>
                            </a>
                            <p><?php echo limit_words($row->tulisan_isi,10).'...';?></p>
                            <a class="text-uppercase" href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Vendor Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="<?php echo base_url();?>assets/assets/img/vendor-1.jpg" alt="">
                    <img src="<?php echo base_url();?>assets/assets/img/vendor-2.jpg" alt="">
                    <img src="<?php echo base_url();?>assets/assets/img/vendor-3.jpg" alt="">
                    <img src="<?php echo base_url();?>assets/assets/img/vendor-4.jpg" alt="">
                    <img src="<?php echo base_url();?>assets/assets/img/vendor-5.jpg" alt="">
                    <img src="<?php echo base_url();?>assets/assets/img/vendor-6.jpg" alt="">
                    <img src="<?php echo base_url();?>assets/assets/img/vendor-7.jpg" alt="">
                    <img src="<?php echo base_url();?>assets/assets/img/vendor-8.jpg" alt="">
                    <img src="<?php echo base_url();?>assets/assets/img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Vendor End -->



    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Dharma Wanita Persatuan</h5>
                <h1 class="mb-0">Pengumuman</h1>
            </div>
            <div class="row g-5"><?php foreach ($pengumuman->result() as $row) :?>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3"><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></h4>
                        <p class="m-0"><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo site_url('pengumuman');?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
                
               
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Dharma Wanita Persatuan</h5>
                <h1 class="mb-0">Agenda</h1>
            </div>
            <div class="row g-5"><?php foreach ($agenda->result() as $row):?>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <span><?php echo date("d", strtotime($row->agenda_tanggal));?></span>
                            <p><?php echo date("M. y", strtotime($row->agenda_tanggal));?></p>
                        </div>
                        <h4 class="mb-3"><a href="<?php echo site_url('agenda');?>">
                                <h4><?php echo $row->agenda_nama;?></h4>
                             </a>
                        <p class="m-0"><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                        <a class="btn btn-lg btn-primary rounded" href="<?php echo site_url('pengumuman');?>">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
                
               
            </div>
        </div>
    </div>
    <!-- Service End -->
