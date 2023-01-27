<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijazah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("IjazahModel");
	}

	public function index()
	{
		$data["ijazah"] = $this->IjazahModel->getijazah();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/ijazah", $data);
		$this->load->view("templates/footer");
	}

	public function showtambahijazah(){
		$data["alumni"] = $this->SiswaModel->getALumni();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/showtambahijazah", $data);
		$this->load->view("templates/footer");
	}

	public function tambahpengambilanijazah(){
		
		$idalumni 		   = $this->input->post("idalumni");
		$statuspengambilan = $this->input->post("statuspengambilan");
		$this->db->select("*");
		$this->db->from("tblijazah");
		$this->db->where("idalumni", $idalumni);
		$cek= $this->db->get()->result_array();
		$idalumnicek = $cek[0]["idalumni"];
		if ($idalumni === $idalumnicek) {
			$this->session->set_flashdata("flash", "gagal");
			redirect(base_url("admin/ijazah"));
		}else {
			$arr = array(
				'idalumni' 			=> $idalumni ,
				"statuspengambilan" => $statuspengambilan,
			);
			$this->IjazahModel->insertTambahAlumnijazah($arr);
			$this->session->set_flashdata("flash", "berhasil");
			redirect(base_url("admin/ijazah"));
		}
	}

	public function formeditijazah()
	{

		$data['editijazah'] = $this->IjazahModel->getidijazah("tblijazah")[0];
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/formeditijazah', $data);
		$this->load->view('templates/footer');
	}

	public function proseseditijazah(){
		$this->IjazahModel->proseseditijazah();
	}

	
}
