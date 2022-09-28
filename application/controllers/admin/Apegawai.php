<?php
class Apegawai extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pegawai');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_pegawai->get_all_pegawai();
        
        $this->data['breadcrumb']  = 'Data Pegawai';
            
        $this->data['main_view']   = 'admin/v_pegawai';
            
        $this->load->view('admintemplate/admintemplate',$this->data);
        
		
        
	}
	
	function simpan_pegawai(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$event=strip_tags($this->input->post('xevent'));

							$this->m_pegawai->simpan_pegawai($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$event,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/apegawai');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/apegawai');
	                }
	                 
	            }else{
	            	$nip=strip_tags($this->input->post('xnip'));
					$nama=strip_tags($this->input->post('xnama'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
					$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
					$event=strip_tags($this->input->post('xevent'));

					$this->m_pegawai->simpan_pegawai_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$event);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/apegawai');
				}
				
	}
	
	function update_pegawai(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$event=strip_tags($this->input->post('xevent'));

							$this->m_pegawai->update_pegawai($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$event,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/apegawai');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/apegawai');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$event=strip_tags($this->input->post('xevent'));
							$this->m_pegawai->update_pegawai_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$event);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/apegawai');
	            } 

	}

	function hapus_pegawai(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_pegawai->hapus_pegawai($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/apegawai');
	}

}