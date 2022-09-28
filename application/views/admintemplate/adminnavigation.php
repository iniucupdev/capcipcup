<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'admin/dashboard'?>">
        <div class="sidebar-brand-icon rotate-n-15">
         <!-- <i class="fas fa-laugh-wink"></i>-->
        </div>
        <div class="sidebar-brand-text mx-3">BKSDA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/dashboard'?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
    
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/apegawai'?>">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Data Pegawai</span></a>
      </li>
    
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/agenda'?>">
          <i class="fas fa-fw fa-envelope-open"></i>
          <span>Data Agenda</span></a>
      </li>
    
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/pengumuman'?>">
          <i class="fas fa-fw fa-volume-up"></i>
          <span>Data Pengumuman</span></a>
      </li>
    
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/files'?>">
          <i class="fas fa-fw fa-download"></i>
          <span>Data Publikasi</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/baner'?>">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Data baner </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/slide'?>">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Data slide </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/inbox'?>">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Inbox</span><span class="pull-right-container">
              <small class="label pull-right bg-green">(<?php echo $jum_pesan;?>)</small>
            </span></a>
      </li>
      
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/video'?>">
          <i class="fas fa-fw fa-download"></i>
          <span>Data Video</span></a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/pengguna'?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data User</span></a>
      </li>
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetilu" aria-expanded="true" aria-controls="collapsetilu">
          <i class="fas fa-fw fa-cog"></i>
          <span>Profil</span>
        </a>
        <div id="collapsetilu" class="collapse" aria-labelledby="headingtilu" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">            
            <a class="collapse-item" href="<?php echo base_url().'admin/tentangkami'?>">Tentang Kami</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/kontakkami'?>">Kontak Kami</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/visimisi'?>">Visi misi</a>
            
          </div>
        </div>
      </li>
      <!-- Divider -->
            
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiji" aria-expanded="true" aria-controls="collapseSiji">
          <i class="fas fa-fw fa-cog"></i>
          <span>Berita</span>
        </a>
        <div id="collapseSiji" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">            
            <a class="collapse-item" href="<?php echo base_url().'admin/tulisan'?>">Daftar Berita</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/tulisan/add_tulisan'?>">Pos Berita</a>
              <a class="collapse-item" href="<?php echo base_url().'admin/kategori'?>">Kategori Berita</a>
          </div>
        </div>
      </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Album Galeri</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">            
            <a class="collapse-item" href="<?php echo base_url().'admin/album'?>">Kategori Galeri</a>
            <a class="collapse-item" href="<?php echo base_url().'admin/galeri'?>">Foto Galeri</a>
          </div>
        </div>
      </li>

           
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-power-off"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>