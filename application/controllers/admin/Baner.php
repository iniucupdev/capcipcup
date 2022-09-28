<?php
class Baner extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_baner');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_baner->get_all_baner();
        
        $this->data['breadcrumb']  = 'Data baner';
            
        $this->data['main_view']   = 'admin/v_baner';
            
        $this->load->view('admintemplate/admintemplate',$this->data);
        
		
        
	}
	
	function simpan_baner(){
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
	                        $config['quality']= '60%';
	                        $config['width']= 3000;
	                        $config['height']= 1000;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));
							$heading=strip_tags($this->input->post('xheading'));
							$isi=strip_tags($this->input->post('xisi'));
							

							$this->m_baner->simpan_baner($judul,$heading,$isi,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/baner');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/baner');
	                }
	                 
	            }else{
	            	$judul=strip_tags($this->input->post('xjudul'));
					$heading=strip_tags($this->input->post('xheading'));
					$isi=strip_tags($this->input->post('xisi'));
					

					$this->m_baner->simpan_baner_tanpa_img($judul,$heading,$isi);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/baner');
				}
				
	}
	
	function update_baner(){
				
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
	                        $config['quality']= '60%';
	                        $config['width']= 3000;
	                        $config['height']= 1000;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
							$judul=strip_tags($this->input->post('xjudul'));
							$heading=strip_tags($this->input->post('xheading'));
							$isi=strip_tags($this->input->post('xisi'));
							

							$this->m_baner->update_baner($kode,$judul,$heading,$isi,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/baner');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/baner');
	                }
	                
	            }else{
							$kode=$this->input->post('kode');
							$judul=strip_tags($this->input->post('xjudul'));
							$heading=strip_tags($this->input->post('xheading'));
							$isi=strip_tags($this->input->post('xisi'));
							
							$this->m_baner->update_baner_tanpa_img($kode,$judul,$heading,$isi);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/baner');
	            } 

	}

	function hapus_baner(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_baner->hapus_baner($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/baner');
	}

}