    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <footer class="footer container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="footer_top">
            <div class="container">
                
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 style="color: white;">
                                Tentang Kami
                            </h3>
                            <img width="150" src="<?php echo base_url('');?>styles/images/logohalmah.png" class="rounded" >
                        </div>
                    </div><?php foreach ($kontakkami->result() as $row) : ?>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 style="color: white;">
                                Peta
                            </h3>
                            <iframe src="<?php echo $row->kontakkami_map;?>" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                   
                   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 style="color: white;">
                                Kontak Kami
                            </h3>
                            
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                
                                <p><?php echo $row->kontakkami_jl;?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                
                                <p><?php echo $row->kontakkami_hp;?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                
                                <p><?php echo $row->kontakkami_email;?></p>
                            </div>
                        </div>
                        </div>
                    </div> <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php echo $row->kontakkami_twiter;?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php echo $row->kontakkami_facebook;?>"><i class="fab fa-facebook-f"></i></a>
                    
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php echo $row->kontakkami_instagram;?>"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="<?php echo $row->kontakkami_youtube;?>"><i class="fab fa-youtube"></i></a>
                </div><?php endforeach;?>
                </div>
            </div>
        </div>
       
    </footer>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="<?php echo base_url();?>" target="_blank">HALMAHERA TIMUR</a> </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url();?>assets/assets/js/main.js"></script>