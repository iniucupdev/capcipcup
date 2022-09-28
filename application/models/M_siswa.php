<?php 
class M_siswa extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT tbl_rakyat.*,kategorii_nama FROM tbl_rakyat JOIN tbl_kategorii ON siswa_kategorii_id=kategorii_id");
		return $hsl;
	}

	function simpan_siswa($nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_rakyat (siswa_nis,siswa_nama,siswa_jenkel,siswa_kategorii_id,siswa_photo) VALUES ('$nis','$nama','$jenkel','$kelas','$photo')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("INSERT INTO tbl_rakyat (siswa_nis,siswa_nama,siswa_jenkel,siswa_kategorii_id) VALUES ('$nis','$nama','$jenkel','$kelas')");
		return $hsl;
	}

	function update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("UPDATE tbl_rakyat SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kategorii_id='$kelas',siswa_photo='$photo' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("UPDATE tbl_rakyat SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kategorii_id='$kelas' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_rakyat WHERE siswa_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT tbl_rakyat.*,kategorii_nama FROM tbl_rakyat JOIN tbl_kategorii ON siswa_kategorii_id=kategorii_id");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_rakyat.*,kategorii_nama FROM tbl_rakyat JOIN tbl_kategorii ON siswa_kategorii_id=kategorii_id limit $offset,$limit");
		return $hsl;
	}

}