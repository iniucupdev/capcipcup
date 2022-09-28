<?php 
class M_kontakkami extends CI_Model{

	function get_all_kontakkami(){
		$hsl=$this->db->query("SELECT * FROM tbl_kontakkami");
		return $hsl;
	}

	function simpan_kontakkami($jl,$hp,$map,$twiter,$facebook,$youtube,$instagram,$email){
		$hsl=$this->db->query("INSERT INTO tbl_kontakkami (kontakkami_jl,kontakkami_hp,kontakkami_map,kontakkami_twiter,kontakkami_facebook,kontakkami_youtube,kontakkami_instagram,kontakkami_email) VALUES ('$jl','$hp','$map','$twiter','$facebook','$youtube','$instagram','$email')");
		return $hsl;
	}
	function simpan_kontakkami_tanpa_img($jl,$hp,$map,$twiter,$facebook,$youtube){
		$hsl=$this->db->query("INSERT INTO tbl_kontakkami (kontakkami_jl,kontakkami_hp,kontakkami_map,kontakkami_twiter,kontakkami_facebook,kontakkami_youtube,kontakkami_instagram,kontakkami_email) VALUES ('$jl','$hp','$map','$twiter','$facebook','$youtube')");
		return $hsl;
	}

	function update_kontakkami($kode,$jl,$hp,$map,$twiter,$facebook,$youtube,$instagram,$email){
		$hsl=$this->db->query("UPDATE tbl_kontakkami SET kontakkami_jl='$jl',kontakkami_hp='$hp',kontakkami_map='$map',kontakkami_twiter='$twiter',kontakkami_facebook='$facebook',kontakkami_youtube='$youtube',kontakkami_instagram='$instagram',kontakkami_email='$email' WHERE kontakkami_id='$kode'");
		return $hsl;
	}
	function update_kontakkami_tanpa_img($kode,$jl,$hp,$map,$twiter,$facebook,$youtube){
		$hsl=$this->db->query("UPDATE tbl_kontakkami SET kontakkami_jl='$jl',kontakkami_hp='$hp',kontakkami_map='$map',kontakkami_twiter='$twiter',kontakkami_facebook='$facebook',kontakkami_youtube='$youtube',kontakkami_email,='$email' WHERE kontakkami_id='$kode'");
		return $hsl;
	}
	function hapus_kontakkami($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kontakkami WHERE kontakkami_id='$kode'");
		return $hsl;
	}

	//front-end
	function kontakkami(){
		$hsl=$this->db->query("SELECT * FROM tbl_kontakkami");
		return $hsl;
	}
	function kontakkami_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_kontakkami limit $offset,$limit");
		return $hsl;
	}
	function get_kontakkami_home(){
		$hsl=$this->db->query("SELECT kontakkami_jl,kontakkami_hp,kontakkami_map,kontakkami_id,kontakkami_twiter,kontakkami_youtube,kontakkami_instagram,kontakkami_email,kontakkami_facebook FROM tbl_kontakkami ORDER BY kontakkami_id DESC limit 3");
		return $hsl;
	}
	function get_kontakkami_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_kontakkami where kontakkami_id='$kode'");
		return $hsl;
	}
}