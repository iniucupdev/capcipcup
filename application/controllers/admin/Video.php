<?php
class Video extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_video');
		$this->load->model('m_kelas');
		$this->load->model('m_event');
		$this->load->library('upload');
	}


	function index(){
		
		$this->data['data']=$this->m_video->get_all_video();
        
        $this->data['kelas']=$this->m_kelas->get_all_kelas();
        
        $this->data['event']=$this->m_event->get_all_event();    
		
        
        $this->data['breadcrumb']  = 'Data Video';
            
        $this->data['main_view']   = 'admin/v_video';
            
        $this->load->view('admintemplate/admintemplate',$this->data);
        
	}
	
	function simpan_video(){
				
        $event=strip_tags($this->input->post('event'));
        
        $kelas=strip_tags($this->input->post('kelas'));
        
        $source=strip_tags($this->input->post('source'));
        
        $nama=strip_tags($this->input->post('nama'));
        
        $keterangan=strip_tags($this->input->post('keterangan'));
        
		$this->m_video->simpan_video($event,$kelas,$source,$nama,$keterangan);
        
		echo $this->session->set_flashdata('msg','success');
        
		redirect('admin/video');
				
	}
	
	function update_video(){
				
	    $event=strip_tags($this->input->post('event'));
		$kelas=strip_tags($this->input->post('kelas'));
        $source=strip_tags($this->input->post('source'));
        $nama=strip_tags($this->input->post('nama'));
        $keterangan=strip_tags($this->input->post('keterangan'));
        $kode=strip_tags($this->input->post('kode'));
		$this->m_video->update_video($kode,$event,$source,$kelas,$nama,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/video');

	}

	function hapus_video(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_video->hapus_video($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/video');
	}

}