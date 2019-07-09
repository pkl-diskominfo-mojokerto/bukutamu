<?php 

	class User extends CI_Controller {
		 
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}



		public function index()
		{
			/* $this->load->view('user/head');
			 $this->load->view('user/search');
			 $this->load->view('user/index');*/
			
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
			$this->form_validation->set_rules('instansi', 'Instansi', 'required');
			$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');

 		 
			if( $this->form_validation->run() != FALSE ){	
			echo "<script>alert('berhasil');</script>";
			 
			} else {
				$this->load->view('user/head');
				$this->load->view('user/search');
				$this->load->view('user/index');

			}
			// $this->load->view('admin/_partials/navbar');
			// $this->load->view('admin/_partials/sidebar');
			// $this->load->view('admin/_partials/js');
			

		
		}
	}




 ?>