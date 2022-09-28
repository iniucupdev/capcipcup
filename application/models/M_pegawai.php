<?php 
class M_pegawai extends CI_Model{

	function get_all_pegawai(){
		$hsl=$this->db->query("SELECT * FROM tbl_pegawai");
		return $hsl;
	}

	function simpan_pegawai($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabatan,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_pegawai (pegawai_nip,pegawai_nama,pegawai_jenkel,pegawai_tmp_lahir,pegawai_tgl_lahir,pegawai_jabatan,pegawai_photo) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$jabatan','$photo')");
		return $hsl;
	}
	function simpan_pegawai_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabatan){
		$hsl=$this->db->query("INSERT INTO tbl_pegawai (pegawai_nip,pegawai_nama,pegawai_jenkel,pegawai_tmp_lahir,pegawai_tgl_lahir,pegawai_jabatan) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$jabatan')");
		return $hsl;
	}

	function update_pegawai($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabatan,$photo){
		$hsl=$this->db->query("UPDATE tbl_pegawai SET pegawai_nip='$nip',pegawai_nama='$nama',pegawai_jenkel='$jenkel',pegawai_tmp_lahir='$tmp_lahir',pegawai_tgl_lahir='$tgl_lahir',pegawai_jabatan='$jabatan',pegawai_photo='$photo' WHERE pegawai_id='$kode'");
		return $hsl;
	}
	function update_pegawai_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabatan){
		$hsl=$this->db->query("UPDATE tbl_pegawai SET pegawai_nip='$nip',pegawai_nama='$nama',pegawai_jenkel='$jenkel',pegawai_tmp_lahir='$tmp_lahir',pegawai_tgl_lahir='$tgl_lahir',pegawai_jabatan='$jabatan' WHERE pegawai_id='$kode'");
		return $hsl;
	}
	function hapus_pegawai($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pegawai WHERE pegawai_id='$kode'");
		return $hsl;
	}

	//front-end
	function pegawai(){
		$hsl=$this->db->query("SELECT * FROM tbl_pegawai");
		return $hsl;
	}
	function pegawai_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_pegawai limit $offset,$limit");
		return $hsl;
	}
	function get_pegawai_home(){
		$hsl=$this->db->query("SELECT pegawai_nip,pegawai_nama,pegawai_jenkel,pegawai_photo,pegawai_jabatan,pegawai_id FROM tbl_pegawai ORDER BY pegawai_id DESC limit 3");
		return $hsl;
	}
	function get_pegawai_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_pegawai where pegawai_id='$kode'");
		return $hsl;
	}
}