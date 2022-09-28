<?php
class event extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_event');
	}


	function index(){
        
		$this->data['data']=$this->m_event->get_all_event();
        
        $this->data['breadcrumb']  = 'Data event';
            
        $this->data['main_view']   = 'admin/v_event';
            
        $this->load->view('admintemplate/admintemplate',$this->data);
        
	}

	function simpan_event(){
        
		$event=strip_tags($this->input->post('namaevent'));
        
        $keterangan=strip_tags($this->input->post('keterangan'));
        
		$this->m_event->simpan_event($event,$keterangan);
        
		echo $this->session->set_flashdata('msg','success');
        
		redirect('admin/event');
        
	}

	function update_event(){
        
		$kode=strip_tags($this->input->post('kode'));
		$event=strip_tags($this->input->post('namaevent'));
        $keterangan=strip_tags($this->input->post('keterangan'));
		$this->m_event->update_event($kode,$event,$keterangan);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/event');
        
	}
    
	function hapus_event(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_event->hapus_event($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/event');
	}

}
