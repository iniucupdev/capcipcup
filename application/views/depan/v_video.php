

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Video</h1>
                    <a href="" class="h5 text-white">Beranda</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Video</a>
                </div>
            </div>
        </div>
<div class="recent_event_area ">
        <div class="container">
            
            <div class="row justify-content-center">
                              
                    
                  
        
                        
        
                    
                   
            
                    
                    <?php
                     
                      foreach ($gede->result() as $row):
                    ?>
         
                        <div class="popup-gallery">
                                            <a href="https://www.youtube.com/watch?v=<?php echo $row->kode_video;?>" class="video" title="<?php echo $row->judul_video;?>">
        <img  src="https://img.youtube.com/vi/<?php echo $row->kode_video;?>/hqdefault.jpg" alt="<?php echo $row->judul_video;?>" style="height: 450px; width: 100%" /> <p class="text-center"><?php echo $row->judul_video;?></p>
    </a>
</div>
                    
                    <?php endforeach;?>
          
       
    
                    
                    
              
                
                
            
        </div>
    </div>
   <!-- BOOTSTRAP 4-->
  <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
               
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s" >
              <?php
                     
                      foreach ($data->result() as $row):
                    ?>
                <div class="popup-gallery" style="margin-left: 7%">
                                            <a href="https://www.youtube.com/watch?v=<?php echo $row->kode_video;?>" class="video" title="<?php echo $row->judul_video;?>">
        <img  src="https://img.youtube.com/vi/<?php echo $row->kode_video;?>/hqdefault.jpg" alt="<?php echo $row->judul_video;?>" style="height: 250px;" /> <p class="text-center"><?php echo $row->judul_video;?></p>
    </a>
</div>
                
                 <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

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
            jQuery(document).ready(function($) {
            $('.portfolio-popup').magnificPopup({
                delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        /*titleSrc: function(item) {
          return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
        }*/
      },
      callbacks: {
        elementParse: function(item) {
     // the class name
     if(item.el.context.className == 'video-link') {
       item.type = 'iframe';
     } else {
       item.type = 'image';
     }
        }
      },
  });
});


$('.popup-gallery').magnificPopup({
  delegate: 'a',
  type: 'image',
  gallery: {
    enabled: true,
    navigateByImgClick: true,
    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
  },
  callbacks: {
    elementParse: function(item) {
      console.log(item.el[0].className);
      if(item.el[0].className == 'video') {
        item.type = 'iframe',
        item.iframe = {
           patterns: {
             youtube: {
               index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

               id: 'v=', // String that splits URL in a two parts, second part should be %id%
                // Or null - full URL will be returned
                // Or a function that should return %id%, for example:
                // id: function(url) { return 'parsed id'; } 

               src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
             },
             vimeo: {
               index: 'vimeo.com/',
               id: '/',
               src: '//player.vimeo.com/video/%id%?autoplay=1'
             },
             gmaps: {
               index: '//maps.google.',
               src: '%id%&output=embed'
             }
           }
        }
      } else {
         item.type = 'image',
         item.tLoading = 'Loading image #%curr%...',
         item.mainClass = 'mfp-img-mobile',
         item.image = {
           tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
         }
      }

    }
  }
});
        </script>