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
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("users/daftaralumni");
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
		$this->form_validation->set_rules("statuspekerjaan", "Status Pekerjaan", "required");

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("templates/header");
			$this->load->view("templates/sidebar");
			$this->load->view("users/daftaralumni");
			$this->load->view("templates/footer");
		}
		else 
		{
			$idakun = $this->session->userdata('idakun');
			$namaalumni = $this->input->post("namaalumni");
			$jurusan = $this->input->post("jurusan");
			$alamat = $this->input->post("alamat");
			$nomortelepon = $this->input->post("nomortelepon");
			$tahunmasuk = $this->input->post("tahunmasuk");
			$tahuntamat = $this->input->post("tahuntamat");
			$hobi = $this->input->post("hobi");
			$programkeahlian = $this->input->post("programkeahlian");
			$statuspekerjaan = $this->input->post("statuspekerjaan");

			$arr = array(
				"idakun"			=> $idakun,
				"namaalumni"		=> $namaalumni,
				"jurusan"			=> $jurusan,
				"alamat"			=> $alamat,
				"nomortelepon"		=> $nomortelepon,
				"tahunmasuk"		=> $tahunmasuk,
				"tahuntamat"		=> $tahuntamat,
				"hobi"				=> $hobi,
				"programkeahlian"	=> $programkeahlian,
				"statuspekerjaan"	=> $statuspekerjaan,
			);

			$this->SiswaModel->insertDatapendaftaranalumni($arr);
			$this->session->set_flashdata("pendaftaransiswa", "berhasil");
			redirect(base_url("home"));

		}
	}
}
