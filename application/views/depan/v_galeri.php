<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Galeri</h1>
                    <a href="" class="h5 text-white">Beranda</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Galeri</a>
                </div>
            </div>
        </div>
<div class="recent_event_area ">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-lg-10">                   
                    
                    <div class="section-top-border">
				
                        
				<div class="row gallery-item">
                    
                    
            
                    
                    <?php foreach ($all_galeri->result() as $row) : ?>
					<div class="col-md-4">
                        <div id="portfolio">
                                        <div class="portfolio-item">
                                            <a href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" class="portfolio-popup">
                                                <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="your image" class="img-fluid" id="gambar">                                            
                                                <div class="portfolio-overlay">
                                                    <div class="portfolio-info">
                                                        <h2><?php echo $row->galeri_judul;?></h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                    </div>
                    <?php endforeach;?>
					
				</div>
			</div>
                    
                    
                </div>
                
                
            </div>
        </div>
    </div>
   <!-- BOOTSTRAP 4-->
       
        <!-- MAGNIFIC POPUP-->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
        <!-- DATATABLES BS 4-->
        

        <!-- jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <!-- DATATABLES BS 4-->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- BOOTSTRAP 4-->
        
        <!-- MAGNIFIC POPUP-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
        
        <style>
            #portfolio {
              background: #fff;
              padding: 30px 0;
            }
            #portfolio .portfolio-overlay {
              position: absolute;
              top: 0;
              right: 0;
              bottom: 0;
              left: 0;
              width: 100%;
              height: 100%;
              opacity: 1;
              transition: all ease-in-out 0.4s;
            }
            #portfolio .portfolio-item {
              overflow: hidden;
              position: relative;
              padding: 0;
              vertical-align: middle;
              text-align: center;
            }
            #portfolio .portfolio-item h2 {
              color: #ffffff;
              font-size: 24px;
              margin: 0;
              text-transform: capitalize;
              font-weight: 700;
            }
            #portfolio .portfolio-item img {
              transition: all ease-in-out 0.4s;
              width: 100%;
            }
            #portfolio .portfolio-item:hover img {
              -webkit-transform: scale(1.1);
              transform: scale(1.1);
            }
            #portfolio .portfolio-item:hover .portfolio-overlay {
              opacity: 1;
              background: rgba(0, 0, 0, 0.7);
            }
            #portfolio .portfolio-info {
              position: absolute;
              top: 50%;
              left: 50%;
              -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
            }
            #gambar{
                height:300px;
            }
        </style>

        <script type="text/javascript">
            // memanggil plugin magnific popup
            $('.portfolio-popup').magnificPopup({
                type: 'image',
                removalDelay: 300,
                mainClass: 'mfp-fade',
                gallery: {
                enabled: true
                },
                zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function (openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
                }
            });
            // memanggil datatable membuat callback datatable pada magnific popup agar gambar 
            // yang di munculkan sesuai pada saat pindah paginasi dari 1 ke 2 
            // dan seterusnya
            $(document).ready(function() {
                var table = $('#example').dataTable({
                "fnDrawCallback": function () {
                    $('.portfolio-popup').magnificPopup({
                    type: 'image',
                    removalDelay: 300,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300,
                        easing: 'ease-in-out',
                        opener: function (openerElement) {
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                        }
                    }
                    });
                    }
                });
            });

        </script>