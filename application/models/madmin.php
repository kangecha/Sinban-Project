<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class madmin extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  
  public function ambilPengguna($username, $password)
  {
    $this->db->select('*');
    $this->db->from('administrator');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $query = $this->db->get();
    
    return $query->num_rows();
  }
  
  
  public function dataPengguna($username)
  {
   $this->db->select('username');
   $this->db->where('username', $username);
   $query = $this->db->get('administrator');
   
   return $query->row();
  }
  
  
  public function ambildata()
  {
    $ambildata = $this->db->get('artikel');
    if ($ambildata->num_rows()>0)
    {
      foreach ($ambildata->result() as $data) {
        $hasilinfo [] = $data;
      }
      return $hasilinfo;
    }
  }

  public function caridata()
  {
    $c = $this->input->POST ('cari');
    $this->db->like('judul', $c);
    $query = $this->db->get ('artikel');
    return $query->result(); 
   }

/*-------------- FUNGSI TAMBAH DATA -----------------*/

  public function tambahDataDaerah()
  {
      $nama_daerah  = $this->input->post('namadaerah');
      $latitude     = $this->input->post('latitude');
      $longitude    = $this->input->post('longitude');

      $data = array (
        'nama_daerah' => $nama_daerah,
        'latitude'   => $latitude,
        'longitude' => $longitude
        );
      $this->db->insert('tbl_daerah',$data);

  }

  public function tambahDataPosko()
  {
      $nama_posko   = $this->input->post('nama_posko');
      $alamat_posko = $this->input->post('alamat_posko');
      $id_daerah    = $this->input->post('id_daerah');

      $data = array (
        'nama_posko' => $nama_posko,
        'alamat_posko'   => $alamat_posko,
        'id_daerah' => $id_daerah
        );
      $this->db->insert('tbl_posko',$data);

  }

  public function tambahDataKorban($foto)
  {
      
      $nama_lengkap   = $this->input->post('nama_lengkap');
      $alamat_korban = $this->input->post('alamat_korban');
      $no_hp    = $this->input->post('no_hp');
      $id_posko    = $this->input->post('id_posko');

      $data = array (
        'nama_lengkap' => $nama_lengkap,
        'alamat_korban'   => $alamat_korban,
        'no_hp' => $no_hp,
        'foto' => $foto,
        'id_posko' => $id_posko,
        );
      
      $this->db->insert('tbl_korban',$data);

  }

  public function tambahDataKetinggian()
  {
      $ketinggian_air   = $this->input->post('ketinggian_air');
      $radius = $this->input->post('radius');
      $tanggal_update = $this->input->post('tanggal_update');
      $id_daerah    = $this->input->post('id_daerah');

      $data = array (
        'ketinggian_air' => $ketinggian_air,
        'radius'   => $radius,
        'tanggal_update'   => $tanggal_update,
        'id_daerah' => $id_daerah
        );
      $this->db->insert('tbl_ketinggian',$data);

  }

  public function tambahDataDonatur()
  {
      $nama_donatur   = $this->input->post('nama_donatur');
      $alamat_donatur = $this->input->post('alamat_donatur');
      
      $data = array (
        'nama_donatur' => $nama_donatur,
        'alamat_donatur'   => $alamat_donatur
        );
      $this->db->insert('tbl_donatur',$data);

  }

  public function tambahDataDonasi()
  {
      $jenis_donasi   = $this->input->post('jenis_donasi');
      $keterangan = $this->input->post('keterangan');
      $id_donatur = $this->input->post('id_donatur');
      $id_posko    = $this->input->post('id_posko');

      $data = array (
        'jenis_donasi' => $jenis_donasi,
        'keterangan'   => $keterangan,
        'id_donatur'   => $id_donatur,
        'id_posko' => $id_posko
        );
      $this->db->insert('tbl_donasi',$data);

  }



/* --------------END OF FUNGSI TAMBAH-------- Coded by Raessa Fathul Alim --------- */

/*--------------------- EDIT PASSWORD----------------*/

  public function editpass()
  {
      $password = md5($this->input->post('password'));
      $data = array (
        'password' => $password
        );
      $this->db->update('administrator',$data);
  }

/* GET DATA BANJIR PER-PAGE*/

  function getDataDaerah($perPage,$uri)
  {
    $ambildatadaerah = $this->db->get('tbl_daerah',$perPage,$uri);

    
    if ($ambildatadaerah->num_rows() > 0) {
      # code...
      foreach ($ambildatadaerah->result() as $data) {
        # code...
        $hasildatadaerah[] = $data;
      }
      return $hasildatadaerah;
    }
  }

  function getDataDaerahNoPage()
  {
    $ambildatadaerah = $this->db->get('tbl_daerah');

    
    if ($ambildatadaerah->num_rows() > 0) {
      # code...
      foreach ($ambildatadaerah->result() as $data) {
        # code...
        $hasildatadaerah[] = $data;
      }
      return $hasildatadaerah;
    }
  }

  function getDataDonatur()
  {
    $ambildatadonatur = $this->db->get('tbl_donatur');

    
    if ($ambildatadonatur->num_rows() > 0) {
      # code...
      foreach ($ambildatadonatur->result() as $data) {
        # code...
        $hasildatadonatur[] = $data;
      }
      return $hasildatadonatur;
    }
  }

  function getDataPosko()
  {
    $ambildataposko = $this->db->get('tbl_posko');

    
    if ($ambildataposko->num_rows() > 0) {
      # code...
      foreach ($ambildataposko->result() as $data) {
        # code...
        $hasildataposko[] = $data;
      }
      return $hasildataposko;
    }
  }

  /*-------------------- PILIH ID -----------------------------*/
  
  public function pilihdaerah($id_daerah)
  {
    return $this->db->get_where('tbl_daerah', array('id_daerah' => $id_daerah))->row();
  }

  /*--------------------- UPDATE DATA -------------------------*/

  public function updatedaerah($id_daerah)
  {
      $namadaerah = $this->input->post('namadaerah');
      $latitude   = $this->input->post('latitude');
      $longitude = $this->input->post('longitude');
      
      $data = array (
        'nama_daerah' => $namadaerah,
        'latitude'   => $latitude,
        'longitude' => $longitude
        );
      $this->db->where('id_daerah', $id_daerah);
      $this->db->update('tbl_daerah',$data);
  }

  /* PENCARIAN DATA*/

  public function caridaerah()
  {
    $c = $this->input->POST ('cari');
    $this->db->like('nama_daerah', $c);
    $query = $this->db->get('tbl_daerah');
    return $query->result(); 
  }

}