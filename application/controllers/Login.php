<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		 $this->load->view('users/login');
	}


	public function proseslogin()
	{
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$arr = array(
			'username' 	=> $username,
		);

		$idakun = $this->SiswaModel->getidakun($arr);
		foreach ($idakun as $id) {
			$dapatid = $id['idakun'];
			$level = $id['level'];
			$pass = $id['password'];
			$namapengguna = $id['namapengguna'];
		}

		$cek = $this->SiswaModel->proseslogin($arr)->num_rows();

		if ($cek > 0) {
			if (password_verify($password, $pass)) {
				$datasession = array(
					'idakun' 		=> $dapatid,
					'username'		=> $username,
					'namapengguna'	=> $namapengguna,
					'level'			=> $level,
					'logged_in'     => TRUE
				);

				$this->session->set_flashdata('flashlogin', 'login');
				$this->session->set_userdata($datasession);
				redirect(base_url('dashbord'));
			}else {
				return FALSE;
			}
		}else {
			echo "gagal";
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();
    	redirect('/');
	}
	
}
