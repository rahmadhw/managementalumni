<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
	}

	public function index()
	{
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/gallery");
		$this->load->view("templates/footer");
	}

	public function addGambar()
	{
		$this->form_validation->set_rules("gambar", "Gambar", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("templates/header");
			$this->load->view("templates/sidebar");
			$this->load->view("admin/gallery");
			$this->load->view("templates/footer");
		}
		else
		{
			$this->SiswaModel->addGambar();
			$this->session->set_flashdata("gambar", "berhasil");
			redirect(base_url("admin/gambar"));
		}
	}
}
