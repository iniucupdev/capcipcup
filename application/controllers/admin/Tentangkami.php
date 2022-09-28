<?php
class Tentangkami extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_tentangkami');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_tentangkami->get_all_tentangkami();      
		
        
        $this->data['breadcrumb']  = 'Data Tentang Kami';
            
        $this->data['main_view']   = 'admin/v_tentangkami';
            
        $this->load->view('admintemplate/admintemplate',$this->data);
	}

	function simpan_tentangkami(){
		$judul=strip_tags($this->input->post('xjudul'));
		$deskripsi=$this->input->post('xdeskripsi');
		$this->m_tentangkami->simpan_tentangkami($judul,$deskripsi);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/tentangkami');
	}

	function update_tentangkami(){
		$kode=strip_tags($this->input->post('kode'));
		$judul=strip_tags($this->input->post('xjudul'));
		$deskripsi=$this->input->post('xdeskripsi');
		$this->m_tentangkami->update_tentangkami($kode,$judul,$deskripsi);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/tentangkami');
	}
	function hapus_tentangkami(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_tentangkami->hapus_tentangkami($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tentangkami');
	}

}