<?php 

class AllAlumni extends CI_Model 
{
	public function getAll()
	{
		$this->db->select("*");
		$this->db->from("tbalumni");
		$this->db->join("tahun", "tahun.idtahun=tbalumni.idtahun");
		$this->db->join("jeniskelamin", "jeniskelamin.idjeniskelamin=tbalumni.idjeniskelamin");
		$cek = $this->db->get()->result_array();
		return $cek;
	}

	public function gettahun($table)
	{
		return $this->db->get($table)->result_array();
	}

	public function getJenisKelamin($table)
	{
		return $this->db->get($table)->result_array();
	}

	public function insertAllAlumni($datas)
	{
		$this->db->insert("tbalumni", $datas);
		return $this->db->affected_rows();
	}

	public function ambildataallalumni()
	{
		$id = $_GET['id'];
		$this->db->select("*");
		$this->db->from("tbalumni");
		$this->db->join("tahun", "tahun.idtahun=tbalumni.idtahun");
		$this->db->join("jeniskelamin", "jeniskelamin.idjeniskelamin=tbalumni.idjeniskelamin");
		$this->db->where('idtbalumni', $id);
		$cek = $this->db->get()->result_array();
		return $cek;
	}

	public function proseseditallalumni()
	{
		$datas = array(
			"idtbalumni"		=> $this->input->post("idtbalumni"),
			"idtahun"			=> $this->input->post("idtahun"),
			"namaalumni"		=> $this->input->post("namaalumni"),
			"jurusanalumni"		=> $this->input->post("jurusanalumni"),
			"idjeniskelamin"	=> $this->input->post("idjeniskelamin"),
			"alamat"			=> $this->input->post("alamat")
		);

	  $this->db->where('idtbalumni', $this->input->post("idtbalumni"));
      $cek = $this->db->update('tbalumni', $datas);
      return $cek;
	}

	public function proseshapusdataallalumni()
	{
		$id = $_GET['id'];
		$this->db->where('idtbalumni', $id);
		$this->db->delete('tbalumni');
	}
}