<?php
class kelola extends CI_Controller{
	function __construct()
	{
  	parent::__construct();
		$this->load->model('madmin');
		$this->load->helper(array('form', 'url'));
		
	}

	public function index()
	{
		# code...
		redirect(site_url().'administrator');
	}

/* DAERAH BANJIR */

	public function DataDaerah()
	{
		$session = $this->session->userdata('isLogin');
    
		if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      	{
	      		$getData = $this->db->get('tbl_daerah');
				$a = $getData->num_rows();
				$config['base_url'] = site_url().'kelola/DataDaerah/'; //set the base url for pagination
				$config['total_rows'] = $a; //total rows
				$config['per_page'] = '3'; //the number of per page for pagination
				$config['uri_segment'] = 3; //see from base_url. 3 for this case
				$config['first_link'] = '<i class="icon-first"></i>';
				$config['last_link'] = '<i class="icon-last"></i>';
				$config['next_link'] = '<i class="icon-next"></i>';
				$config['prev_link'] = '<i class="icon-previous"></i>';
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$this->pagination->initialize($config); //initialize pagination

				$data['hasildatadaerah'] = $this->madmin->getDataDaerah($config['per_page'],$this->uri->segment(3));
      			$this->load->view('templates/headernomaps');
     			$this->load->view('kelola/vkeloladaerah', $data);
     			$this->load->view('templates/footer');
			}
	}

	public function editDataDaerah($id_daerah)
	{
		$session = $this->session->userdata('isLogin');
    
		if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      	{
				if($_POST==NULL)
				{
			        $data['tampildaerah'] = $this->madmin->pilihdaerah($id_daerah);
			        $this->load->view('templates/headernomaps');
			        $this->load->view('edit/veditdaerah',$data);
			        $this->load->view('templates/footer');
			    }
			      else
			      {
			        $this->madmin->updatedaerah($id_daerah);
			        redirect(site_url().'kelola/DataDaerah');
			      }
			}
	}

	public function hapusdaerah($id_daerah)
	  {
	    $this->db->delete('tbl_daerah', array('id_daerah' => $id_daerah));
	    redirect(site_url().'kelola/DataDaerah');
	  }

	public function caridaerah() 
    {
       $data['hasildatadaerah']=$this->madmin->caridaerah();

       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['hasildatadaerah']==null) 
       {
          echo " <script>
                alert('Tidak Di Temukan: Cek kata atau Kalimat!');
                history.go(-1);
              </script>";    
       }
          else 
            {
              $this->load->view('templates/headernomaps');
     		  $this->load->view('kelola/vkeloladaerah', $data);
     		  $this->load->view('templates/footer'); 
     		}
  }

/* DONATUR BANJIR */

	public function DataDonatur()
	{
		$session = $this->session->userdata('isLogin');
    
		if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      	{
				echo "test";
			}
	}


/* KORBAN BANJIR */

	public function DataKorban()
	{
		$session = $this->session->userdata('isLogin');
    
		if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      	{
				echo "test";
			}
	}

/* POSKO BANJIR */

	public function DataPosko()
	{
		$session = $this->session->userdata('isLogin');
    
		if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      	{
				echo "test";
			}
	}

/* BARANG DONASI BANJIR */

	public function DataDonasi()
	{
		$session = $this->session->userdata('isLogin');
    
		if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      	{
				echo "test";
			}
	}

/* KOMENTAR INFO BANJIR */

	public function DataKomentar()
	{
		$session = $this->session->userdata('isLogin');
    
		if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      	{
				echo "test";
			}
	}

/* PETUGAS BANJIR */

	public function DataPetugas()
	{
		$session = $this->session->userdata('isLogin');
    
		if($session == FALSE)
	      {
	        redirect(site_url().'administrator/login_form');
	      }else
	      	{
				echo "test";
			}
	}
}
