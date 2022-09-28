<?php
class Slide extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_slide');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_slide->get_all_slide();
        
        $this->data['breadcrumb']  = 'Data slide';
            
        $this->data['main_view']   = 'admin/v_slide';
            
        $this->load->view('admintemplate/admintemplate',$this->data);
        
		
        
	}
	
	function simpan_slide(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //heading yang terupload nantinya

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
	                        $config['quality']= '100%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));
						

							$this->m_slide->simpan_slide($judul,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/slide');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/slide');
	                }
	                 
	            }else{
	            	$judul=strip_tags($this->input->post('xjudul'));
					

					$this->m_slide->simpan_slide_tanpa_img($judul);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/slide');
				}
				
	}
	
	function update_slide(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|jfif'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //heading yang terupload nantinya

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
	                        $config['quality']= '100%';
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
							$judul=strip_tags($this->input->post('xjudul'));
							

							$this->m_slide->update_slide($kode,$judul,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/slide');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/slide');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$judul=strip_tags($this->input->post('xjudul'));
							
							
							$this->m_slide->update_slide_tanpa_img($kode,$judul);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/slide');
	            } 

	}

	function hapus_slide(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_slide->hapus_slide($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/slide');
	}

}