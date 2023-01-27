<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		 $this->load->view('users/registrasi');
	}

	public function registrasi()
	{

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('namapengguna', 'Nama Pengguna', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
		  $this->load->view('users/registrasi');	
		}
		else {
			
			$this->SiswaModel->registrasi();
			
		}
	}
}
