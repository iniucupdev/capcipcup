<?php
class Visimisi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_visimisi');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_visimisi->get_all_visimisi();      
		
        
        $this->data['breadcrumb']  = 'Data visimisi ';
            
        $this->data['main_view']   = 'admin/v_visimisi';
            
        $this->load->view('admintemplate/admintemplate',$this->data);
	}

	function simpan_visimisi(){
		$judul=strip_tags($this->input->post('xjudul'));
		$visi=strip_tags($this->input->post('xvisi'));
		$misi=strip_tags($this->input->post('xmisi'));
		$this->m_visimisi->simpan_visimisi($judul,$visi,$misi);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/visimisi');
	}

	function update_visimisi(){
		$kode=strip_tags($this->input->post('kode'));
		$judul=strip_tags($this->input->post('xjudul'));
		$visi=strip_tags($this->input->post('xvisi'));
		$misi=strip_tags($this->input->post('xmisi'));
		$this->m_visimisi->update_visimisi($kode,$judul,$visi,$misi);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/visimisi');
	}
	function hapus_visimisi(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_visimisi->hapus_visimisi($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/visimisi');
	}

}