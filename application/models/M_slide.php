<?php 
class M_slide extends CI_Model{

	function get_all_slide(){
		$hsl=$this->db->query("SELECT * FROM tbl_slide");
		return $hsl;
	}

	function simpan_slide($judul,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_slide (slide_judul,slide_photo) VALUES ('$judul','$photo')");
		return $hsl;
	}
	function simpan_slide_tanpa_img($judul){
		$hsl=$this->db->query("INSERT INTO tbl_slide (slide_judul) VALUES ('$judul')");
		return $hsl;
	}

	function update_slide($kode,$judul,$photo){
		$hsl=$this->db->query("UPDATE tbl_slide SET slide_judul='$judul',slide_photo='$photo' WHERE slide_id='$kode'");
		return $hsl;
	}
	function update_slide_tanpa_img($kode,$judul){
		$hsl=$this->db->query("UPDATE tbl_slide SET slide_judul='$judul' WHERE slide_id='$kode'");
		return $hsl;
	}
	function hapus_slide($kode){
		$hsl=$this->db->query("DELETE FROM tbl_slide WHERE slide_id='$kode'");
		return $hsl;
	}

	//front-end
	function slide(){
		$hsl=$this->db->query("SELECT * FROM tbl_slide");
		return $hsl;
	}
	function slide_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_slide limit $offset,$limit");
		return $hsl;
	}
	function get_slide_home(){
		$hsl=$this->db->query("SELECT slide_judul,slide_photo,slide_id FROM tbl_slide ORDER BY slide_id ASC limit 1");
		return $hsl;
	}
	function get_slide_homekedua(){
		$hsl=$this->db->query("SELECT slide_judul,slide_photo,slide_id FROM tbl_slide ORDER BY slide_id DESC limit 3");
		return $hsl;
	}
	function get_slide_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_slide where slide_id='$kode'");
		return $hsl;
	}
}