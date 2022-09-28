<?php
class M_tentangkami extends CI_Model{

	function get_all_tentangkami(){
		$hsl=$this->db->query("SELECT tentangkami_id,tentangkami_judul,tentangkami_deskripsi,DATE_FORMAT(tentangkami_tanggal,'%d/%m/%Y') AS tanggal,tentangkami_author FROM tbl_tentangkami ORDER BY tentangkami_id DESC");
		return $hsl;
	}
	function simpan_tentangkami($judul,$deskripsi){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_tentangkami(tentangkami_judul,tentangkami_deskripsi,tentangkami_author) VALUES ('$judul','$deskripsi','$author')");
		return $hsl;
	}
	function update_tentangkami($kode,$judul,$deskripsi){
		$author=$this->session->userdata('nama');
		$hsl=$this->db->query("UPDATE tbl_tentangkami SET tentangkami_judul='$judul',tentangkami_deskripsi='$deskripsi',tentangkami_author='$author' where tentangkami_id='$kode'");
		return $hsl;
	}
	function hapus_tentangkami($kode){
		$hsl=$this->db->query("DELETE FROM tbl_tentangkami WHERE tentangkami_id='$kode'");
		return $hsl;
	}

	//Front-end
	function get_tentangkami_home(){
		$hsl=$this->db->query("SELECT tentangkami_id,tentangkami_judul,tentangkami_deskripsi,DATE_FORMAT(tentangkami_tanggal,'%d/%m/%Y') AS tanggal,tentangkami_author FROM tbl_tentangkami ORDER BY tentangkami_id DESC limit 3");
		return $hsl;
	}

	function tentangkami(){
		$hsl=$this->db->query("SELECT tentangkami_id,tentangkami_judul,tentangkami_deskripsi,DATE_FORMAT(tentangkami_tanggal,'%d/%m/%Y') AS tanggal,tentangkami_author FROM tbl_tentangkami ORDER BY tentangkami_id DESC");
		return $hsl;
	}
	function tentangkami_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tentangkami_id,tentangkami_judul,tentangkami_deskripsi,tentangkami_tanggal,DATE_FORMAT(tentangkami_tanggal,'%d/%m/%Y') AS tanggal,tentangkami_author FROM tbl_tentangkami ORDER BY tentangkami_id DESC limit $offset,$limit");
		return $hsl;
	}


}
