<?php
class administrator extends CI_Controller{
	function __construct()
	{
  		parent::__construct();
		$this->load->model('madmin');
		$this->load->helper(array('form', 'url'));
		
	}

/* CATATAN HAPUS LOAD.JS 
DAN MASUKAN VALIDATE FORM PADA TAMBAH BIAR TIDAK ADA DATA KOSONG

1. untuk content daerah,, coba pake API g-maps, dan kasih indikator warna untuk masing masing ketinggian air.. misal hijau : xx-xx kuning : xx:xx merah : xx-xx, agar lebih effisien dari segi database, dan sepertinya potensi aplikasi ini jika dikembangkan dapat digunakan untuk nasional, dan akan merumitkan jika harus input data daerah... 

bisa di review disini : https://developers.google.com/maps/

2. News Feed, pada bagian atas halaman utama, sebaiknya diletakkan diatas menu karena informasi merupakan hal penting dari kunci utama web ini (Penerapan ilmu interface)

3. "Semboyan No Pict Hoax", alangkah lengkapnya apabila ditambahkan Image Reel Di sisi halaman depan web ini.. (Jquery Reel Plugin)

4. Saat ini, banyak orang yang lebih praktis mengakses via mobile, dan sebagai developer memperhatikan hal tersebut, dengan menambahkan CSS untuk versi mobile nya.

5. Apabila hendak di akses oleh publik, coba tambahkan captcha di bagian login administrator, agar tidak disisipkan oleh autoscript atau curl dari host lain

mungkin sedikit masukan saja, mengingat sistem ini potensial untuk di kembangkan.

*/

	public function index()
	{
		$session = $this->session->userdata('isLogin');
    
	      if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      {
	        $this->load->view('templates/headernomaps');
			$this->load->view('vadmin');
			$this->load->view('templates/footer');
	      }
	}



	public function admin()
	{
		$session = $this->session->userdata('isLogin');
    
	      if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      {
	        redirect(site_url().'administrator');
	      }
	}

	public function editpassword()
	{
		$session = $this->session->userdata('isLogin');
    
	      if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      {
	      		if ($this->input->post('submit'))
				      {
				        $this->madmin->editpass();
				        redirect(site_url().'administrator/logout');
				      }
	      		
	       		$this->load->view('templates/headernomaps');
				$this->load->view('veditpassword');
				$this->load->view('templates/footer');
	      }
	}

	public function login_form()
		  {
		    $session = $this->session->userdata('isLogin');
		    
		      if($session == FALSE)
		      {

				    $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
				    $this->form_validation->set_rules('password', 'Password', 'required|md5|xss_clean');
				    $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
				    
				      if($this->form_validation->run()==FALSE)
				      {
				      	
				        $this->load->view('templates/headernomaps');
						$this->load->view('vlogin');
						$this->load->view('templates/footer');
				      }
				      else{

					       $username = $this->input->post('username');
					       $password = $this->input->post('password');
					       
					       $cek = $this->madmin->ambilPengguna($username, $password);
					        
					        if($cek <> 0)
					        {
					          $this->session->set_userdata('isLogin', TRUE);
					          $this->session->set_userdata('username',$username);
					         
					         redirect(site_url().'administrator');
					        }else
					        {
					         echo " <script>
							            alert('Gagal Login: Cek username dan password anda!');
							            history.go(-1);
							          </script>";        
					        }
				      }
		      }
		      else{
		        redirect(site_url().'administrator');
		      }  
		  }

		public function logout()
		  {
		   $this->session->sess_destroy();
			   
		   redirect(site_url().'administrator/login_form');
		  }
/* ------------- Tambah Data -------------------------------- */

		  public function tambahDaerah()
		  {
		  	$session = $this->session->userdata('isLogin');
    
		      if($session == FALSE)
		      {
		        redirect(site_url().'administrator/login_form');
		      }
		      else
		      	{
		      		if ($this->input->post('submit'))
				      {
				      	  	$this->load->model('madmin');
				        	$this->madmin->tambahDataDaerah();
				        	redirect(site_url().'kelola/DataDaerah');
				      }

		      		$this->load->view('templates/headernomaps');
		        	$this->load->view('vtambahdaerah');
		        	$this->load->view('templates/footer');
		      	}
		  }

		  public function tambahPosko()
		  {
		  	$session = $this->session->userdata('isLogin');
    
		      if($session == FALSE)
		      {
		        redirect(site_url().'administrator/login_form');
		      }
		      else
		      	{
		      		if ($this->input->post('submit'))
				      {
				        $this->load->model('madmin');
				        $this->madmin->tambahDataPosko();
				        
				        redirect(site_url().'kelola/DataPosko');
				      }
				    $data['hasildaerah'] = $this->madmin->getDataDaerahNoPage();
		      		$this->load->view('templates/headernomaps');
		        	$this->load->view('vtambahposko',$data);
		        	$this->load->view('templates/footer');
		      	}
		  }

		  public function tambahKorban()
		  {
		  	$session = $this->session->userdata('isLogin');
    
		      if($session == FALSE)
		      {
		        redirect(site_url().'administrator/login_form');
		      }
		      else
		      	{
		      		if ($this->input->post('submit'))
				      {

				      	$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']	= '1000';
						$config['max_width']  = '1980';
						$config['max_height']  = '1980';
						$config['overwrite'] = FALSE;

						if($_FILES['foto']['error'] !=4)
						{
							$this->load->library('upload',$config);
							if($this->upload->do_upload('foto'))
							{
								$rows = $this->upload->data();
								$foto = $rows['file_name'];
								$this->madmin->tambahDataKorban($foto);

								
								redirect(site_url().'kelola/DataKorban');
							}
							else{

								redirect(site_url().'administrator/tambahKorban');
							}
						}

				      }
				    $data['hasilposko'] = $this->madmin->getDataPosko();
		      		$this->load->view('templates/headernomaps');
		        	$this->load->view('vtambahkorban',$data);
		        	$this->load->view('templates/footer');
		      	}
		  }

		  public function tambahKetinggian()
		  {
		  	$session = $this->session->userdata('isLogin');
    
		      if($session == FALSE)
		      {
		        redirect(site_url().'administrator/login_form');
		      }
		      else
		      	{
		      		if ($this->input->post('submit'))
				      {
				        $this->load->model('madmin');
				        $this->madmin->tambahDataKetinggian();
				        
				        redirect(site_url().'kelola/DataKetinggian');
				      }
				    $data['hasildaerah'] = $this->madmin->getDataDaerah();
		      		$this->load->view('templates/headernomaps');
		        	$this->load->view('vtambahketinggian',$data);
		        	$this->load->view('templates/footer');
		      	}
		  }

		  public function tambahDonatur()
		  {
		  	$session = $this->session->userdata('isLogin');
    
		      if($session == FALSE)
		      {
		        redirect(site_url().'administrator/login_form');
		      }
		      else
		      	{
		      		if ($this->input->post('submit'))
				      {
				        $this->load->model('madmin');
				        $this->madmin->tambahDataDonatur();
				        
				        redirect(site_url().'kelola/DataDonatur');
				      }
				    
		      		$this->load->view('templates/headernomaps');
		        	$this->load->view('vtambahdonatur');
		        	$this->load->view('templates/footer');
		      	}
		  }

		  public function tambahDonasi()
		  {
		  	$session = $this->session->userdata('isLogin');
    
		      if($session == FALSE)
		      {
		        redirect(site_url().'administrator/login_form');
		      }
		      else
		      	{
		      		if ($this->input->post('submit'))
				      {
				        $this->load->model('madmin');
				        $this->madmin->tambahDataDonasi();
				        
				        redirect(site_url().'kelola/DataDonasi');
				      }
				    $data['hasilposko'] = $this->madmin->getDataPosko();
				    $data['hasildonatur'] = $this->madmin->getDataDonatur();
		      		$this->load->view('templates/headernomaps');
		        	$this->load->view('vtambahdonasi',$data);
		        	$this->load->view('templates/footer');
		      	}
		  }
/* ---------------------END OF TAMBAH DATA ----------Coded by Raessa Fathul Alim ----------------------------*/


}