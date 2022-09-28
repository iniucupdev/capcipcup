<?php
class Publikasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_files');
		$this->load->helper('download');
		$this->load->model('m_kontakkami');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function get_file(){
		$id=$this->uri->segment(3);
		$get_db=$this->m_files->get_file_byid($id);
		$q=$get_db->row_array();
		$file=$q['file_data'];
		$path='./assets/files/'.$file;
		$data = file_get_contents($path);
		$name = $file;
		force_download($name, $data);
	}
	function index(){
        
        $this->data['main_view']   = 'depan/v_publikasi';
        $this->data['kontakkami']=$this->m_kontakkami->get_kontakkami_home();
		$this->data['data']=$this->m_files->get_all_files();
        $this->data['title']  = 'Peraturan';
		$this->load->view('template/template',$this->data);
        
	}

	
	

}
