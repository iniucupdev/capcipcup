<?php
class M_visimisi extends CI_Model{

	function get_all_visimisi(){
		$hsl=$this->db->query("SELECT visimisi_id,visimisi_judul,visimisi_visi,visimisi_misi,DATE_FORMAT(visimisi_tanggal,'%d/%m/%Y') AS tanggal,visimisi_author FROM tbl_visimisi ORDER BY visimisi_id DESC");
		return $hsl;
	}
	function simpan_visimisi($judul,$visi,$misi){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_visimisi(visimisi_judul,visimisi_visi,visimisi_misi,visimisi_author) VALUES ('$judul','$visi','$misi','$author')");
		return $hsl;
	}
	function update_visimisi($kode,$judul,$visi,$misi){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_visimisi SET visimisi_judul='$judul',visimisi_visi='$visi',visimisi_misi='$misi',visimisi_author='$author' where visimisi_id='$kode'");
		return $hsl;
	}
	function hapus_visimisi($kode){
		$hsl=$this->db->query("DELETE FROM tbl_visimisi WHERE visimisi_id='$kode'");
		return $hsl;
	}

	//Front-end
	function get_visimisi_home(){
		$hsl=$this->db->query("SELECT visimisi_id,visimisi_judul,visimisi_visi,visimisi_misi,DATE_FORMAT(visimisi_tanggal,'%d/%m/%Y') AS tanggal,visimisi_author FROM tbl_visimisi ORDER BY visimisi_id DESC limit 3");
		return $hsl;
	}

	function visimisi(){
		$hsl=$this->db->query("SELECT visimisi_id,visimisi_judul,visimisi_visi,visimisi_misi,DATE_FORMAT(visimisi_tanggal,'%d/%m/%Y') AS tanggal,visimisi_author FROM tbl_visimisi ORDER BY visimisi_id DESC");
		return $hsl;
	}
	function visimisi_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT visimisi_id,visimisi_judul,,visimisi_visi,visimisi_misi,visimisi_tanggal,DATE_FORMAT(visimisi_tanggal,'%d/%m/%Y') AS tanggal,visimisi_author FROM tbl_visimisi ORDER BY visimisi_id DESC limit $offset,$limit");
		return $hsl;
	}


}
