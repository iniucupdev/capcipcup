

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="<?php echo base_url();?>" class="navbar-brand p-0">
               <h4> <img src="<?php echo base_url('');?>styles/images/logohalmah.png"  alt="" class="" style="width: 14%;"></h4>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?php echo base_url('');?>" class="nav-item nav-link active">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo base_url('tentang');?>" class="dropdown-item">Tentang DWP</a>
                            <a href="<?php echo base_url('visimisi');?>" class="dropdown-item">Visi-misi</a>
                            <a href="<?php echo base_url('kontak');?>" class="dropdown-item">Kontak Kami</a>
                        </div>
                    </div>
                 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Berita</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo base_url('agenda');?>" class="dropdown-item">Agenda</a>
                            <a href="<?php echo base_url('blog');?>" class="dropdown-item">Blog</a>
                            <a href="<?php echo base_url('pengumuman');?>" class="dropdown-item">Pengumuman</a>
                        </div>
                    </div>

                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dokumentasi</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?php echo base_url('galeri');?>" class="dropdown-item">Galeri</a>
                            <a href="<?php echo base_url('video');?>" class="dropdown-item">Video</a>
                            
                        </div>
                    </div>

                    
                    <a href="<?php echo base_url('publikasi');?>" class="nav-item nav-link">Publikasi</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                
            </div>
        </nav>
