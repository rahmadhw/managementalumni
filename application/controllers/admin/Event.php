<?php

class Event extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("EventModel");
	}

	public function index()
	{
		$data["event"] = $this->EventModel->getAll("event");
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/event", $data);
		$this->load->view("templates/footer");
	}

	public function getdetail()
	{
		$data["event"] = $this->EventModel->getdetailevent()[0];
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("admin/detailevent", $data);
		$this->load->view("templates/footer");
	}

	public function prosestambahevent()
	{
		$this->EventModel->prosestambahevent();
	}

	public function hapusevent()
	{
		$this->EventModel->proseshapusevent();
		$this->session->set_flashdata("flash", "berhasil di hapus");
		redirect(base_url('admin/event'));
	}

	public function formeditevent()
	{
		$data["formvalue"] = $this->EventModel->getValueformevent()[0];
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/formeditevent', $data);
		$this->load->view('templates/footer');

	}

	public function proseseventedit()
	{
		$this->EventModel->proseseventedit();
	}
}