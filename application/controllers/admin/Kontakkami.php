<?php
class Kontakkami extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kontakkami');
		$this->load->library('upload');
	}


	function index(){
        
		$this->data['data']=$this->m_kontakkami->get_all_kontakkami();      
		
        
        $this->data['breadcrumb']  = 'Data kontak kami';
            
        $this->data['main_view']   = 'admin/v_kontakkami';
            
        $this->load->view('admintemplate/admintemplate',$this->data);
	}

	function simpan_kontakkami(){
		$jl=strip_tags($this->input->post('xjl'));
		$hp=strip_tags($this->input->post('xhp'));
		$map=strip_tags($this->input->post('xmap'));
		$twiter=strip_tags($this->input->post('xtwiter'));
		$facebook=strip_tags($this->input->post('xfacebook'));
		$youtube=strip_tags($this->input->post('xyoutube'));
		$instagram=strip_tags($this->input->post('xinstagram'));
		$email=strip_tags($this->input->post('xemail'));
		
		$this->m_kontakkami->simpan_kontakkami($jl,$hp,$map,$twiter,$facebook,$youtube,$instagram,$email);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/kontakkami');
	}

	function update_kontakkami(){
		$kode=strip_tags($this->input->post('kode'));
		$jl=strip_tags($this->input->post('xjl'));
		$hp=strip_tags($this->input->post('xhp'));
		$map=strip_tags($this->input->post('xmap'));
		$twiter=strip_tags($this->input->post('xtwiter'));
		$facebook=strip_tags($this->input->post('xfacebook'));
		$youtube=strip_tags($this->input->post('xyoutube'));
		$instagram=strip_tags($this->input->post('xinstagram'));
		$email=strip_tags($this->input->post('xemail'));
		$this->m_kontakkami->update_kontakkami($kode,$jl,$hp,$map,$twiter,$facebook,$youtube,$instagram,$email);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/kontakkami');
	}
	function hapus_kontakkami(){
		$kode=strip_tags($this->input->post('kode'));
		$this->m_kontakkami->hapus_kontakkami($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kontakkami');
	}

}