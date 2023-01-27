<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftaralumni extends CI_Controller {

	public function __construct()

	{
		parent::__construct();
		$this->load->library("form_validation");
	}

	public function index()

	{
		$data["ambil"] = $this->SiswaModel->getstatus("status");
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("users/daftaralumni", $data);
		$this->load->view("templates/footer");
	}

	public function prosespendaftaran()

	{

		$this->form_validation->set_rules("namaalumni", "Nama Alumni", "required");
		$this->form_validation->set_rules("jurusan", "Jurusan", "required");
		$this->form_validation->set_rules("alamat", "Alamat", "required");
		$this->form_validation->set_rules("nomortelepon", "Nomor Telepon", "required");
		$this->form_validation->set_rules("tahunmasuk", "Tahun masuk", "required");
		$this->form_validation->set_rules("tahuntamat", "Tahun Tamat", "required");
		$this->form_validation->set_rules("hobi", "Hobi", "required");
		$this->form_validation->set_rules("programkeahlian", "Program Keahlian", "required");

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("templates/header");
			$this->load->view("templates/sidebar");
			$this->load->view("users/daftaralumni");
			$this->load->view("templates/footer");
		}
		else 
		{

			$this->SiswaModel->insertDatapendaftaranalumni();
			

		}
	}
}
