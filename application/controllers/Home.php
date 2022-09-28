<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_slide');
		$this->load->model('m_pengumuman');
		$this->load->model('m_kontakkami');
		$this->load->model('m_agenda');
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
}
	function index()
	{
		$this->data['populer']=$this->db->query("SELECT * FROM tbl_tulisan ORDER BY tulisan_views DESC LIMIT 1");
		 $this->data['kontakkami']=$this->m_kontakkami->get_kontakkami_home();
			$this->data['berita']=$this->m_tulisan->get_berita_home();
			$this->data['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
			$this->data['agenda']=$this->m_agenda->get_agenda_home();
		$this->data['main_view'] = 'depan/v_home';
		$this->data['slide']=$this->m_slide->get_slide_home();
		$this->data['slidekedua']=$this->m_slide->get_slide_homekedua();
		$this->load->view('template/template', $this->data);
	}
}
