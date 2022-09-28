<?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?><div class="popular_program_area">
        <div class="container">
           
            
            <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Daftar Pegawai</p>
                    <h2>Halmahera Timur</h2>
                </div>
                <div class="row"><?php foreach ($data->result() as $row) : ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img" height="250px">
                                <a href="<?php echo site_url('pegawai/dtlp/'.$row->pegawai_id);?>">
                                    <img src="<?php echo base_url().'assets/images/'.$row->pegawai_photo;?>" alt="<?php echo $row->pegawai_nama;?>"></a>
                            </div>
                            <div class="team-text">
                               <a href="<?php echo site_url('pegawai/dtlp/'.$row->pegawai_id);?>"><h2><?php echo $row->pegawai_nama;?></h2></a> 
                                <p><?php echo $row->pegawai_event;?></p>
                                <!-- <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                        <?php endforeach;?>
                    
                </div><?php echo $page;?>
            </div>
        </div>
        <!-- Team End -->

            
        </div>
    </div>