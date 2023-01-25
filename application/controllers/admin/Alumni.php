<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
	}

	public function index()
	{
		$data["alumni"] = $this->SiswaModel->getALumni();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/alumni", $data);
		$this->load->view("templates/footer");
	}

	public function detailalumni(){
		$idalumni = $_GET['id'];
		$data['detail'] = $this->SiswaModel->getdetail($idalumni);
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/detailalumni", $data);
		$this->load->view("templates/footer");
	}

	public function formeditalumni()
	{
		$data['status'] = $this->SiswaModel->getstatus("status");
		$data['edit'] = $this->SiswaModel->getformedit();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/formeditalumni", $data);
		$this->load->view("templates/footer");
	}

	public function proseseditalumni()
	{
		
		$arr = array(
			"idstatus"			=> $this->input->post("idstatus", TRUE),
			"namaalumni"		=> $this->input->post("namaalumni", TRUE),
			"jurusan"			=> $this->input->post("jurusan", TRUE),
			"alamat"			=> $this->input->post("alamat", TRUE),
			"nomortelepon"		=> $this->input->post("nomortelepon", TRUE),
			"tahunmasuk"		=> $this->input->post("tahunmasuk", TRUE),
			"tahuntamat"		=> $this->input->post("tahuntamat", TRUE),
			"hobi"				=> $this->input->post("hobi", TRUE),
			"programkeahlian"	=> $this->input->post("programkeahlian", TRUE)
		);


		$this->SiswaModel->proseseditalumni("alumni", $arr);
		$this->session->set_flashdata("flash", "diedit");
		redirect(base_url('admin/alumni'));
	}

}
