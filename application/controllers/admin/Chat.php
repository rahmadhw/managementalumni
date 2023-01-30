<?php 


class Chat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ChatModel');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('viewchat');
		$this->load->view('templates/footer');
	}
	public function viewchat()
	{
		$data = $this->db->get_where('akun', array('level' => 'Alumni'))->result_array();
		echo json_encode($data);
	}

	public function proseschat()
	{
		$data['datachat'] = $this->ChatModel->getChat();
		// $data['viewchat3'] = $this->ChatModel->selectMessageAdmin();
		$this->load->view("templates/header");
		$this->load->view("templates/sidebar");
		$this->load->view("tampilpesan", $data);
		$this->load->view("templates/footer");
	}
}
