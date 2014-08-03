<?php
class maps extends CI_Controller
{
	function __construct()
	{
  		parent::__construct();
  		$this->load->model('mapsmodel');
		$this->load->library('googlemaps');
	 }

	public function index()
	{
		
		$result = $this->mapsmodel->getDaerah()->result();
		
		$config['center'] = '-6.2849775,106.970127';
		$config['zoom'] = '12';
		$config['cluster'] = TRUE;
		$this->googlemaps->initialize($config);

		foreach ($result as $kordinat) {
			# code...
			$lat = $kordinat->latitude;
			$long = $kordinat->longitude;
			$daerah = $kordinat->nama_daerah;
			$ketinggian = $kordinat->ketinggian_air;
			$radius = $kordinat->radius;
			$jmlkorban = $kordinat->jmlkorban;
			$posko = $kordinat->nama_posko;
			

			$marker = array();
			$marker['position'] = $lat.','.$long;
			$marker['infowindow_content'] = 'Informasi Banjir : <br> Daerah : '.$daerah.' <br> Ketinggian : '.$ketinggian.' cm <br> Korban : '.$jmlkorban.' orang <br> Posko Terdekat : '.$posko.' <br> Radius : '.$radius.' meter';
			$marker['icon'] = 'http://icons.iconarchive.com/icons/icons-land/vista-map-markers/48/Map-Marker-Bubble-Pink-icon.png';
			$this->googlemaps->add_marker($marker);

			$circle = array();
			$circle['center'] = $lat.','.$long;
			$circle['radius'] = $radius;
			$this->googlemaps->add_circle($circle);
			$config['trafficOverlay'] = TRUE;
			$this->googlemaps->initialize($config);
		}

		$data['hasildata'] = $this->mapsmodel->getDataPosko();
		$data['hasildaerah'] = $this->mapsmodel->getDataDaerah();
		$data['hasilkomen'] = $this->mapsmodel->getDataKomentar();

		$data['map'] = $this->googlemaps->create_map();


		$this->load->view('templates/header', $data);
		$this->load->view('viewmaps', $data);
		$this->load->view('templates/footer', $data);
	}

/* --------------------------FUNGSI CUACA------------------------------------------- */


	public function cuaca_indonesia()
	{
        // fetch data
        $response = $this->curl->simple_get($url = 'http://data.bmkg.go.id/cuaca_jabodetabek_1.xml');
 
        if (empty($response)) {
            show_error('Gagal akses ke :' . $url);
        }
 
        // ubah format dari xml ke array
        $cuaca = $this->format->factory($response, 'xml')->to_array();
 		$data = array('cuaca' => $cuaca);
        // load dan tampilkan dalam view
        $this->load->view('cuaca', $data);
    }

/* --------------------------AKHIR FUNGSI CUACA------------------------------------------- */

/* --------------------------FUNGSI LAINYA------------------------------------------- */

    public function komentar()
    {
    	if ($this->input->post('submit'))
		 {
		    $this->load->model('mapsmodel');
		    $this->mapsmodel->masukanKomentar();
		    redirect(site_url());
		 }

       	$this->load->view('vkomentar');

    }

    public function bantuan()
    {
    	$this->load->view('templates/headernomaps');
    	$this->load->view('vbantuan');
    	$this->load->view('templates/footer');
    }

/* --------------------------FUNGSI LAINYA-----------CODED BY RAESSA FATHUL ALIM-------------------------------- */

/*
FUNGSI MELIHAT DATA
*/

    public function lihatDaerah()
    {
    	$this->load->view('templates/headernomaps');
    	$this->load->view('vlihatdaerah');
    	$this->load->view('templates/footer');
    }

    public function lihatPosko()
    {
    	$this->load->view('templates/headernomaps');
    	$this->load->view('vlihatposko');
    	$this->load->view('templates/footer');
    }

    public function lihatDonatur()
    {
    	$this->load->view('templates/headernomaps');
    	$this->load->view('vlihatdonatur');
    	$this->load->view('templates/footer');
    }

    public function lihatKorban()
    {
    	$this->load->view('templates/headernomaps');
    	$this->load->view('vlihatkorban');
    	$this->load->view('templates/footer');
    }
/*
AKHIR FUNGSI MELIHAT DATA
*/

/* ------------------------------------------------------------------------------------- */

/*

JSON DATA

*/
    function jDataDaerah()
    {
    	$daerah = $this->mapsmodel->getJDaerah();
		header('Content-type: application/json');
		echo json_encode(array('aaData'=>$daerah));
	}

	function jDataPosko()
    {
    	$posko = $this->mapsmodel->getJPosko();
		header('Content-type: application/json');
		echo json_encode(array('aaData'=>$posko));
	}

	function jDataKorban()
    {
    	$korban = $this->mapsmodel->getJKorban();
		header('Content-type: application/json');
		echo json_encode(array('aaData'=>$korban));
	}

	function jDataDonatur()
    {
    	$donatur = $this->mapsmodel->getJDonatur();
		header('Content-type: application/json');
		echo json_encode(array('aaData'=>$donatur));
	}

/*

AKHIR DARI JSON DATA

*/

/* PRINT LAPORAN DATA */
	function printData()
	{
		$data['query']=$this->mapsmodel->data_cetak();
		$this->load->view('vcetak',$data);
	}	
/* END OF PRINT */
}