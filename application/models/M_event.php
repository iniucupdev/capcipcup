<?php
class M_event extends CI_Model{

	function get_all_event(){
		$hsl=$this->db->query("SELECT * FROM tbl_event ORDER BY id_event DESC");
		return $hsl;
	}
    
	function simpan_event($event,$keterangan){
		$hsl=$this->db->query("insert into tbl_event(nama_event,keterangan_event) values ('$event','$keterangan')");
		return $hsl;
	}
    
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}
	function update_event($kode,$event,$keterangan){
		$hsl=$this->db->query("update tbl_event set nama_event='$event',keterangan_event='$keterangan' where id_event='$kode'");
		return $hsl;
	}
	function update_album_tanpa_img($album_id,$album_nama,$user_id,$user_nama){
		$hsl=$this->db->query("update tbl_album set album_nama='$album_nama',album_pengguna_id='$user_id',album_author='$user_nama' where album_id='$album_id'");
		return $hsl;
	}
	function hapus_event($kode){
		$hsl=$this->db->query("delete from tbl_event where id_event='$kode'");
		return $hsl;
	}
	

}