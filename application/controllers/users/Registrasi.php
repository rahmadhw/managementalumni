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
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$password2 = $this->input->post("password2");
			$namapengguna = $this->input->post("namapengguna");
			$level = "Alumni";

			if ($password !== $password2) {
				return FALSE;
			}else {
				$passwordbaru = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
			}

			$data = [

				'username' 		=> $username,
				'password'		=> $passwordbaru,
				'namapengguna'	=> $namapengguna,
				'level'			=> $level,

			];


			$this->SiswaModel->registrasi($data);
			// $this->session->set_flashdata('flashlogin', 'berhasil');
			redirect(base_url('login'));
		}
	}
}
