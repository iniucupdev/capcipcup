<?php 
class M_baner extends CI_Model{

	function get_all_baner(){
		$hsl=$this->db->query("SELECT * FROM tbl_baner");
		return $hsl;
	}

	function simpan_baner($judul,$heading,$isi,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_baner (baner_judul,baner_heading,baner_isi,baner_photo) VALUES ('$judul','$heading','$isi','$photo')");
		return $hsl;
	}
	function simpan_baner_tanpa_img($judul,$heading,$isi){
		$hsl=$this->db->query("INSERT INTO tbl_baner (baner_judul,baner_heading,baner_isi) VALUES ('$judul','$heading','$isi')");
		return $hsl;
	}

	function update_baner($kode,$judul,$heading,$isi,$photo){
		$hsl=$this->db->query("UPDATE tbl_baner SET baner_judul='$judul',baner_heading='$heading',baner_isi='$isi',baner_photo='$photo' WHERE baner_id='$kode'");
		return $hsl;
	}
	function update_baner_tanpa_img($kode,$judul,$heading,$isi){
		$hsl=$this->db->query("UPDATE tbl_baner SET baner_judul='$judul',baner_heading='$heading',baner_isi='$isi' WHERE baner_id='$kode'");
		return $hsl;
	}
	function hapus_baner($kode){
		$hsl=$this->db->query("DELETE FROM tbl_baner WHERE baner_id='$kode'");
		return $hsl;
	}

	//front-end
	function baner(){
		$hsl=$this->db->query("SELECT * FROM tbl_baner");
		return $hsl;
	}
	function baner_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_baner limit $offset,$limit");
		return $hsl;
	}
	function get_baner_home(){
		$hsl=$this->db->query("SELECT baner_judul,baner_heading,baner_isi,baner_photo,baner_id FROM tbl_baner ORDER BY baner_id DESC limit 3");
		return $hsl;
	}
	function get_baner_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_baner where baner_id='$kode'");
		return $hsl;
	}
}