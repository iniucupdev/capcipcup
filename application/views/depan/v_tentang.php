<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Tentang Kami</h1>
                    <a href="" class="h5 text-white">Beranda</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Tentang Kami</a>
                </div>
            </div>
        </div>

<div class="event_details_area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_event d-flex align-items-center">
                        <div class="thumb">
                            
                            
                        </div><?php foreach($tentangkami->result() as $row):?>
                        <div class="event_details_info">
                            <div class="event_info">
                                <a href="#">
                                    &nbsp;<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->tentangkami_judul;?></h4>
                                 </a>
                                <p><span> <i class="flaticon-clock"></i>&nbsp;&nbsp; 10:30 pm</span> <span> <i class="flaticon-calendar"></i>  2022 </span> <span> <i class="flaticon-placeholder"></i> Halmahera Timur</span> </p>
                            </div>
                            <p style="text-indent:50px; text-align:justify;"><?php echo $row->tentangkami_deskripsi;?></p>
<br><br>


                            
                        </div><?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>