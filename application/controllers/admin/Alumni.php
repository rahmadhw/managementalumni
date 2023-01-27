<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model("AllAlumni");
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
		$data["getstatus"] = $this->SiswaModel->ambilgetstatus();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/formeditalumni", $data);
		$this->load->view("templates/footer");
	}

	public function proseseditalumni()
	{
		
		$arr = array(
			"idalumni"			=> $this->input->post("idalumni", TRUE),
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


		$this->SiswaModel->proseseditalumni($arr);
		$this->session->set_flashdata("flash", "diedit");
		redirect(base_url('admin/alumni'));
	}

	public function showalumni()
	{
		$data["all"] = $this->AllAlumni->getAll();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/showalumniall", $data);
		$this->load->view("templates/footer");
	}

	public function formalumniall()
	{
		$data['ambil'] = $this->AllAlumni->getJenisKelamin("jeniskelamin"); 
		$data["all"] = $this->AllAlumni->gettahun("tahun");
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/formalumniall", $data);
		$this->load->view("templates/footer");
	}

	public function prosespenambahanallalumni()
	{
		$this->form_validation->set_rules("namaalumni", "Nama Alumni", "required");
		$this->form_validation->set_rules("jurusanalumni", "Jurusan Alumni", "required");
		$this->form_validation->set_rules("alamat", "Alamat", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("templates/header");
			$this->load->view("templates/sidebar");
			$this->load->view("admin/formalumniall");
			$this->load->view("templates/footer");
		}
		else
		{


			$datas = array(

				"idtahun"			=> $this->input->post("idtahun", TRUE),
				"namaalumni"		=> $this->input->post("namaalumni", TRUE),
				"jurusanalumni"		=> $this->input->post("jurusanalumni", TRUE),
				"idjeniskelamin"	=> $this->input->post("idjeniskelamin", TRUE),
				"alamat"			=> $this->input->post("alamat", TRUE),
			);

			$cek = $this->AllAlumni->insertAllAlumni($datas);
			if ( $cek > 0)
			{
				$this->session->set_flashdata("flash", "berhasil di tambahkan");
				redirect(base_url('admin/alumni/showalumni'));
			}else {
				$this->session->set_flashdata("flash", "gagal di tambahkan");
				redirect(base_url('admin/alumni/showalumni'));
			}
		}
	}

	public function formeditallalumni()
	{
		$data['jeniskelamin'] = $this->AllAlumni->getJenisKelamin("jeniskelamin"); 
		$data["tahun"] = $this->AllAlumni->gettahun("tahun");
		$data['ambil'] = $this->AllAlumni->ambildataallalumni();
		// $data['edit'] = $this->SiswaModel->getformedit();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/formeditallalumni", $data);
		$this->load->view("templates/footer");
	}

	public function proseseditallalumni()
	{
		$this->AllAlumni->proseseditallalumni();
		$this->session->set_flashdata("flash", "berhasil di edit");
		redirect(base_url('admin/alumni/showalumni'));
	}

	public function proseshapusdataallalumni()
	{
		$this->AllAlumni->proseshapusdataallalumni();
		$this->session->set_flashdata("flash", "berhasil di hapus");
		redirect(base_url('admin/alumni/showalumni'));
	}

}
