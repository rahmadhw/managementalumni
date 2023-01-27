<?php 

/**
 * 
 */
class EventModel extends CI_Model
{
	public function getAll($table)
	{
		$cek = $this->db->get($table)->result_array();
		return $cek;
	}

	public function getdetailevent()
	{
		$id = $_GET['id'];
		$this->db->select("*");
		$this->db->from("event");
		$this->db->where("idevent", $id);
		return $this->db->get()->result_array();

	}

	public function prosestambahevent()
	{
		$data = [
			"namaevent"			=> $this->input->post("namaevent", TRUE),
			"keterangan"			=> $this->input->post("keterangan", TRUE),
			"tanggalevent"			=> $this->input->post("tanggalevent", TRUE)
		];

		$this->db->insert("event", $data);
		$msg = "Success";
		echo json_encode($msg);
	}

	public function proseshapusevent()
	{
		$idevent = $_GET['id'];
		$this->db->where('idevent', $idevent);
		$this->db->delete('event');
	}

	public function getValueformevent()
	{
		$idevent = $_GET['id'];
		$this->db->select("*");
		$this->db->from("event");
		$this->db->where("idevent", $idevent);
		return $this->db->get()->result_array();
	}

	public function proseseventedit()
	{
		$data = [

			"idevent"			=> $this->input->post("idevent"),
			"namaevent"			=> $this->input->post("namaevent"),
			"keterangan"		=> $this->input->post("keterangan"),
			"tanggalevent"		=> $this->input->post("tanggalevent")
		];

		$this->db->where("idevent", $this->input->post("idevent"));
		$this->db->update("event", $data);
		$msg = "Success";
		echo json_encode($msg);
	}
}