<?php
class Pegawai extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pegawai');
		$this->load->model('m_pengunjung');
		$this->load->model('m_kontakkami');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
        
		$jum=$this->m_pegawai->pegawai();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=8;
        $config['base_url'] = base_url() . 'pegawai/index/';
            $config['total_rows'] = $jum->num_rows();
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
						//Tambahan untuk styling
	          $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
	          $config['full_tag_close']   = '</ul></nav></div>';
	          $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['num_tag_close']    = '</span></li>';
	          $config['cur_tag_open']     = '<li class="page-item"><span class="page-link">';
	          $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	          $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
	          $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['prev_tagl_close']  = '</span>Next</li>';
	          $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	          $config['first_tagl_close'] = '</span></li>';
	          $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	          $config['last_tagl_close']  = '</span></li>';

            $config['first_link'] = 'Awal';
            $config['last_link'] = 'Akhir';
            $config['next_link'] = 'Next >>';
            $config['prev_link'] = '<< Prev';
            $this->pagination->initialize($config);
        $this->data['kontakkami']=$this->m_kontakkami->get_kontakkami_home();
            $this->data['page'] =$this->pagination->create_links();
            $this->data['data']=$this->m_pegawai->pegawai_perpage($offset,$limit);
            $this->data['main_view']   = 'depan/v_pegawai';
            $this->data['title']  = 'Pegawai';
            $this->load->view('template/template',$this->data);
	}
	function dtlp($kode){
		$kode=$this->uri->segment(3);
        $query = $this->db->get_where('tbl_pegawai', array('pegawai_id' => $kode));
		
        if($query->num_rows() > 0){
		 	$row=$query->row_array();
		 	$kode=$row['pegawai_id'];
		 	$this->data['data']=$this->m_pegawai->get_pegawai_by_kode($kode);
			
		
        $this->data['title']=$row['pegawai_event'];
      
            $this->data['kontakkami']=$this->m_kontakkami->get_kontakkami_home();
        $this->data['main_view']   = 'depan/v_detai_pegawai';
        $this->load->view('template/template',$this->data);
        }
	}
}
