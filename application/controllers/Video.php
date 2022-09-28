<?php
class Video extends CI_Controller{
    
	function __construct(){
		parent::__construct();
		$this->load->model('m_video');
		$this->load->helper('download');
		$this->load->model('m_pengunjung');
		$this->load->model('m_kontakkami');
		$this->m_pengunjung->count_visitor();
	}
    
	function index(){
        
        $this->data['main_view']   = 'depan/v_video';
        $this->data['gede']=$this->m_video->get_video_home();
		$this->data['data']=$this->m_video->get_all_video();
        $this->data['kontakkami']=$this->m_kontakkami->get_kontakkami_home();
		$this->load->view('template/template',$this->data);
        
	}

	function lihat(){
        
		$kode=$this->uri->segment(3);
        $this->data['kontakkami']=$this->m_kontakkami->get_kontakkami_home();
		$this->data['data']=$this->m_video->get_video_by_kode($kode);
        
        $this->data['title']  = 'Video';
            
        $this->data['main_view']   = 'depan/v_detail_video';
            $this->data['title']  = 'Video';
        $this->load->view('template/template',$this->data);
        
	}

}
