<?php
class M_video extends CI_Model{

	function get_all_video(){
		$hsl=$this->db->query("
        SELECT * FROM tbl_video 
        join tbl_event on tbl_event.id_event=tbl_video.id_event 
        join tbl_kategorii on tbl_kategorii.kategorii_id=tbl_video.kategorii_id
        ORDER BY tbl_video.id_video DESC");
		return $hsl;
	}
	function simpan_video($event,$kelas,$source,$nama,$keterangan){
		$hsl=$this->db->query("insert into tbl_video(id_event,kategorii_id,kode_video,judul_video,deskripsi_video) values ('$event','$kelas','$source','$nama','$keterangan')");
		return $hsl;
	}
	
	function update_video($kode,$event,$source,$kelas,$nama,$keterangan){
		$hsl=$this->db->query("update tbl_video set id_event='$event',kategorii_id='$kelas',kode_video='$source',judul_video='$nama',deskripsi_video='$keterangan' where id_video='$kode'");
		return $hsl;
	}
	function update_galeri_tanpa_img($galeri_id,$judul,$album,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_galeri set galeri_judul='$judul',galeri_album_id='$album',galeri_pengguna_id='$user_id',galeri_author='$user_nama' where galeri_id='$galeri_id'");
		return $hsl;
	}
	function hapus_video($kode){
		$hsl=$this->db->query("delete from tbl_video where id_video='$kode'");
		return $hsl;
	}

	//Front-End
	function get_video_home(){
		$hsl=$this->db->query("SELECT * FROM tbl_video 
        join tbl_event on tbl_event.id_event=tbl_video.id_event 
        join tbl_kategorii on tbl_kategorii.kategorii_id=tbl_video.kategorii_id
        ORDER BY tbl_video.id_video DESC LIMIT 1");
		return $hsl;
	}

	function get_video_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_video where id_video='$kode'");
		return $hsl;
	}
	

}