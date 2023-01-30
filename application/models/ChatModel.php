<?php 


class ChatModel extends CI_Model {
	public function getChat()
	{
		$id = $this->session->userdata('idakun');
		$where	= "(((akunid = '$_GET["id"] AND akunid_2 = '$id') OR (akunid_2 = '$_GET['id'] AND akunid = '$_GET["id"]')))";
		$where2	= "(((akunid = '$_GET["id"]' AND akunid_2 = '$id') OR (akunid_2 = '$_GET['id']' AND akunid = '$id')) AND akunid > '$id')";
		if($where) $this->db->where($where);
		$this->db->order_by("created_at","ASC");
		$cek1 = $this->db->get("chat");
		$cek2 = return $this->db->where($where)->order_by("message","DESC")->limit(1)->get("chat")->row_array();
		var_dump($cek1);
		var_dump($cek2);

	}

	public function tampilchatwhereid(){
		$id = $_GET['id'];
		$this->db->select('*');
		$this->db->from('chat');
		$this->db->where("akunid", $id);
		$cek = $this->db->get()->result_array();
		return $cek;
	}


	public function tampilchatwhereid2(){
		$idtujuan = $_GET['id'];
		$id = $this->session->userdata('idakun');
		$this->db->select('*');
		$this->db->from('chat');
		$this->db->join('akun', 'akun.idakun = chat.akunid');
		$this->db->where("akunid", $idtujuan);
		// $this->db->where("akunid", $idtujuan);
		$cek = $this->db->get()->result_array();
		return $cek;
	}


	
}