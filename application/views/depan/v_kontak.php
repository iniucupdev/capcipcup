<style type="text/css">input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: -5px;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
}

.styled-input {
    float: left;
    width: 293px;
    margin: 1rem 0;
    position: relative;
    border-radius: 4px;
}

@media only screen and (max-width: 768px){
    .styled-input {
        width:100%;
    }
}

.styled-input label {
    color: #999;
    padding: 1.3rem 30px 1rem 30px;
    position: absolute;
    top: 10px;
    left: 0;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    pointer-events: none;
}

.styled-input.wide { 
    width: 650px;
    max-width: 100%;
}

input,
textarea {
    padding: 30px;
    border: 0;
    width: 100%;
    font-size: 1rem;
    background-color: #2d2d2d;
    color: white;
    border-radius: 4px;
}

input:focus,
textarea:focus { outline: 0; }

input:focus ~ span,
textarea:focus ~ span {
    width: 100%;
    -webkit-transition: all 0.075s ease;
    transition: all 0.075s ease;
}

textarea {
    width: 100%;
    min-height: 15em;
}

.input-container {
    width: 650px;
    max-width: 100%;
    margin: 20px auto 25px auto;
}

.submit-btn {
    float: right;
    padding: 7px 35px;
    border-radius: 60px;
    display: inline-block;
    background-color: #4b8cfb;
    color: white;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
              0 2px 10px 0 rgba(0,0,0,0.07);
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;
}

.submit-btn:hover {
    transform: translateY(1px);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
              0 1px 1px 0 rgba(0,0,0,0.09);
}

@media (max-width: 768px) {
    .submit-btn {
        width:100%;
        float: none;
        text-align:center;
    }
}

input[type=checkbox] + label {
  color: #ccc;
  font-style: italic;
} 

input[type=checkbox]:checked + label {
  color: #f00;
  font-style: normal;
}</style>

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">kontak Kami</h1>
                    <a href="" class="h5 text-white">Beranda</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Kontak Kami</a>
                </div>
            </div>
        </div>

<section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    
                                        
                    
                    <div class="row">
                   
                         <div class="col-xl-3 col-md-6 col-lg-3">
                       
                            <?php foreach ($kontakkami->result() as $row) : ?>
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
                         <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="background-color: grey; width: 38px; height: 38px;" href="<?php echo $row->kontakkami_twiter;?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="background-color: grey; width: 38px; height: 38px;" href="<?php echo $row->kontakkami_facebook;?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="background-color: grey; width: 38px; height: 38px;" href="<?php echo $row->kontakkami_instagram;?>"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="background-color: grey; width: 38px; height: 38px;" href="<?php echo $row->kontakkami_youtube;?>"><i class="fab fa-youtube"></i></a>
                </div>
                        </div>
                    
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        
                            <iframe src="<?php echo $row->kontakkami_map;?>" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                       
                    </div>
                      
                   
            
                 <?php endforeach;?>
                    </div>
                    
    
                </div>
    
    
                
            </div>
        </section><section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Pesan</h3>
                                <form action="<?php echo site_url('contact/kirim_pesan');?>" method="post">
                                    <div class="row ">
            <div class="form-group">
                                        <input type="text" placeholder="Name" name="xnama" required>
                                    </div>&nbsp;
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="email"  placeholder="Email" name="xemail" required>
                                    </div>&nbsp;
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text"  placeholder="Phone" name="xphone" required>
                                    </div>&nbsp;
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Message"  name="xmessage" required rows="5"></textarea>
                                    </div>&nbsp;
                                    <!-- // end .form-group -->
                                    <button type="submit" class="btn btn-default btn-submit" style="background-color: grey;">SUBMIT</button>
                                    <div><?php echo $this->session->flashdata('msg');?></div>
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center">OR</p>
                </div>
            </div>
        </div>
    </section>