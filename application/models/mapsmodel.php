<?php
class mapsmodel extends CI_Model
{
	function getDaerah()
	{

		/* return $this->db->query('SELECT * FROM tbl_daerah'); */
		return $this->db->query('SELECT tbl_daerah.nama_daerah, tbl_daerah.latitude, tbl_daerah.longitude, tbl_ketinggian.radius, tbl_ketinggian.ketinggian_air,tbl_posko.nama_posko, COUNT(tbl_korban.id_korban) AS jmlkorban FROM tbl_daerah LEFT JOIN tbl_ketinggian ON tbl_ketinggian.id_daerah=tbl_daerah.id_daerah LEFT JOIN tbl_posko ON tbl_posko.id_daerah=tbl_daerah.id_daerah LEFT JOIN tbl_korban ON tbl_korban.id_posko=tbl_posko.id_posko GROUP BY tbl_daerah.id_daerah, tbl_daerah.nama_daerah');
		
	}

	/* function posko_count($id_daerah_tabel_daerah)
	{
	$query = $this->db->where('id_daerah_tabel_posko', $id_daerah_tabel_daerah)->get('tabel_posko');
	return $query->num_rows();
	}

	SELECT tbl_daerah.nama_daerah, tbl_daerah.latitude, tbl_daerah.longitude, tbl_ketinggian.radius, tbl_ketinggian.ketinggian_air,tbl_posko.nama_posko, COUNT(tbl_korban.id_korban) AS jmlkorban 
	FROM tbl_daerah 
	LEFT JOIN tbl_ketinggian ON tbl_ketinggian.id_daerah=tbl_daerah.id_daerah 
	LEFT JOIN tbl_posko ON tbl_posko.id_daerah=tbl_daerah.id_daerah 
	LEFT JOIN tbl_korban ON tbl_korban.id_posko=tbl_posko.id_posko 
	GROUP BY tbl_daerah.id_daerah, tbl_daerah.nama_daerah 
	
	SELECT * FROM tbl_posko LEFT JOIN tbl_daerah ON tbl_posko.id_daerah = tbl_daerah.id_daerah


	SELECT COUNT(tbl_posko.id_posko) FROM tbl_posko, tbl_daerah WHERE tbl_posko.id_daerah=tbl_daerah.id_daerah GROUP BY tbl_posko.id_posko 


	*/

/* --------------------------------AMBIL DATA UNTUK HALAMAN UTAMA/INDEX---------------------------------------------*/


	function getDataPosko()
	{
		$ambildataposko = $this->db->query('SELECT tbl_posko.nama_posko, tbl_daerah.nama_daerah, COUNT(tbl_korban.id_korban) AS jmlkorban FROM tbl_posko LEFT JOIN tbl_daerah ON tbl_daerah.id_daerah=tbl_posko.id_daerah LEFT JOIN tbl_korban ON tbl_korban.id_posko=tbl_posko.id_posko GROUP BY tbl_posko.id_posko, tbl_posko.nama_posko');
		
		if ($ambildataposko->num_rows() > 0) {
			# code...
			foreach ($ambildataposko->result() as $data) {
				# code...
				$hasildataposko[] = $data;
			}
			return $hasildataposko;
		}
	}

	function getDataDaerah()
	{
		$ambildatadaerah = $this->db->query('SELECT tbl_daerah.nama_daerah, tbl_ketinggian.ketinggian_air, COUNT(tbl_posko.id_posko) AS jmlposko FROM tbl_daerah LEFT JOIN tbl_ketinggian ON tbl_ketinggian.id_daerah=tbl_daerah.id_daerah LEFT JOIN tbl_posko ON tbl_posko.id_daerah=tbl_daerah.id_daerah GROUP BY tbl_daerah.id_daerah, tbl_daerah.nama_daerah');

		
		if ($ambildatadaerah->num_rows() > 0) {
			# code...
			foreach ($ambildatadaerah->result() as $data) {
				# code...
				$hasildatadaerah[] = $data;
			}
			return $hasildatadaerah;
		}
	}

/* ---------------------------------------------------------------------------------------------------- */

	function getDataKomentar()
	{
		$ambilkomentar = $this->db->query('SELECT * FROM tbl_info WHERE tampilkan="iya"');

		
		if ($ambilkomentar->num_rows() > 0) {
			# code...
			foreach ($ambilkomentar->result() as $data) {
				# code...
				$hasilkomen[] = $data;
			}
			return $hasilkomen;
		}
	}

	function masukanKomentar()
	{
	  $nama_pemberi_info  = $this->input->post('nama');
      $alamat_pemberi_info     = $this->input->post('alamat');
      $informasi_masyarakat    = $this->input->post('info');
      $tanggal_info    = $this->input->post('tanggal');
      

      $data = array (
        'nama_pemberi_info' => $nama_pemberi_info,
        'alamat_pemberi_info'   => $alamat_pemberi_info,
        'informasi_masyarakat' => $informasi_masyarakat,
        'tanggal_info' => $tanggal_info
        );
      $this->db->insert('tbl_info',$data);
	}

/* --------------------------------AMBIL DATA ARRAY UNTUK JSON---------------------------------------------*/

	function getJDaerah()
	{
		static $query;
		
		$query = $this->db->query('SELECT tbl_daerah.nama_daerah, tbl_daerah.latitude, tbl_daerah.longitude, tbl_ketinggian.radius, tbl_ketinggian.ketinggian_air,tbl_posko.nama_posko, COUNT(tbl_posko.id_posko) AS jmlposko FROM tbl_daerah LEFT JOIN tbl_ketinggian ON tbl_ketinggian.id_daerah=tbl_daerah.id_daerah LEFT JOIN tbl_posko ON tbl_posko.id_daerah=tbl_daerah.id_daerah LEFT JOIN tbl_korban ON tbl_korban.id_posko=tbl_posko.id_posko GROUP BY tbl_daerah.id_daerah, tbl_daerah.nama_daerah');
		
		#If you don't want to use acrtive record then you can write your own querys aswell
		#example: $query = $this->db->query('SELECT id, name FROM people');
 
		if($query->num_rows() > 0) return $query->result();
		else return FALSE;
	}

	function getJPosko()
	{
		static $query;
		
		$query = $this->db->query('SELECT tbl_posko.nama_posko,tbl_posko.alamat_posko, tbl_daerah.nama_daerah, COUNT(tbl_korban.id_korban) AS jmlkorban FROM tbl_posko LEFT JOIN tbl_daerah ON tbl_daerah.id_daerah=tbl_posko.id_daerah LEFT JOIN tbl_korban ON tbl_korban.id_posko=tbl_posko.id_posko GROUP BY tbl_posko.id_posko, tbl_posko.nama_posko');
		
		#If you don't want to use acrtive record then you can write your own querys aswell
		#example: $query = $this->db->query('SELECT id, name FROM people');
 
		if($query->num_rows() > 0) return $query->result();
		else return FALSE;
	}

	function getJKorban()
	{
		static $query;
		
		$query = $this->db->query('SELECT tbl_korban.nama_lengkap,tbl_korban.alamat_korban, tbl_korban.no_hp, tbl_korban.foto, tbl_posko.nama_posko FROM tbl_korban LEFT JOIN tbl_posko ON tbl_korban.id_posko=tbl_posko.id_posko GROUP BY tbl_korban.id_korban, tbl_korban.nama_lengkap');
		
		#If you don't want to use acrtive record then you can write your own querys aswell
		#example: $query = $this->db->query('SELECT id, name FROM people');
 
		if($query->num_rows() > 0) return $query->result();
		else return FALSE;
	}

	function getJDonatur()
	{
		static $query;
		
		$query = $this->db->query('SELECT tbl_donatur.nama_donatur,tbl_donatur.alamat_donatur, tbl_donasi.jenis_donasi, tbl_donasi.keterangan, tbl_posko.nama_posko FROM tbl_donatur LEFT JOIN tbl_donasi ON tbl_donatur.id_donatur=tbl_donasi.id_donatur LEFT JOIN tbl_posko ON tbl_donasi.id_posko=tbl_posko.id_posko GROUP BY tbl_donatur.id_donatur, tbl_donatur.nama_donatur');
		
		#If you don't want to use acrtive record then you can write your own querys aswell
		#example: $query = $this->db->query('SELECT id, name FROM people');
 
		if($query->num_rows() > 0) return $query->result();
		else return FALSE;
	}

/*----------------------- GET CETAK DATA -----------------------------*/
	function data_cetak($limit='',$offset='')
	{
			$menus='';
			$nomor=$this->input->post('nomor');
			 
			$query=$this->db->query("SELECT tbl_daerah.nama_daerah, tbl_ketinggian.ketinggian_air, COUNT(tbl_posko.id_posko) AS jmlposko,COUNT(tbl_korban.id_korban) AS jmlkorban FROM tbl_daerah LEFT JOIN tbl_ketinggian ON tbl_ketinggian.id_daerah=tbl_daerah.id_daerah LEFT JOIN tbl_posko ON tbl_posko.id_daerah=tbl_daerah.id_daerah LEFT JOIN tbl_korban ON tbl_korban.id_posko=tbl_posko.id_posko GROUP BY tbl_daerah.id_daerah, tbl_daerah.nama_daerah");
			 if ($query->num_rows() > 0) {
				foreach ($query->result() as $data) {
					$menus[]=$data;
				}
				return $menus;
			}

	}
	
}