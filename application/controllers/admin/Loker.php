<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
	}

	public function index()
	{
		$data["loker"] = $this->SiswaModel->getLoker();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/loker", $data);
		$this->load->view("templates/footer");
	}

	public function formtambahloker()
	{
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/formtambahloker");
		$this->load->view("templates/footer");
	}

	public function prosespenambahanloker()
	{
		$this->form_validation->set_rules("namaperusaan", "Nama Perusahaan", "required");
		$this->form_validation->set_rules("posisi", "Posisi", "required");
		$this->form_validation->set_rules("keterangan", "keterangan", "required");
		$this->form_validation->set_rules("waktubataspelamaran", "Waktu Batas Pelamaran", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("templates/header");
			$this->load->view("templates/sidebar");
			$this->load->view("admin/formtambahloker");
			$this->load->view("templates/footer");
		}
		else
		{
			$namaperusaan 			= $this->input->post("namaperusaan");
			$posisi 				= $this->input->post("posisi");
			$keterangan		= $this->input->post("keterangan");
			$waktubataspelamaran	= $this->input->post("waktubataspelamaran");

			$arr = array(
				'namaperusaan'			=> $namaperusaan,
				'posisi'				=> $posisi,
				'keterangan'	=> $keterangan,
				'waktubataspelamaran'	=> $waktubataspelamaran
			);



			$this->SiswaModel->prosesTambahLoker($arr);
			$this->session->set_flashdata("flash", "ditambahkan");
			redirect(base_url('admin/loker'));
		}
	}

	public function hapusdataloker(){
		$this->SiswaModel->hapusdataloker();
		$this->session->set_flashdata("flash", "dihapus");
		redirect(base_url('admin/loker'));
	}
}
