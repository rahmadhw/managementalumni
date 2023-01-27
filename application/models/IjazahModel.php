<?php 

class IjazahModel extends CI_Model
{

   public function getijazah(){
      $this->db->select('*');
      $this->db->from('tblijazah');
      $this->db->join('alumni', 'alumni.idalumni = tblijazah.idalumni');
      return $this->db->get()->result_array();
   }


   public function insertTambahAlumnijazah($data) {
      return $this->db->insert("tblijazah", $data);
   }

   public function getidijazah($data)
   {
   	$idijazah = $_GET['id'];
   	$this->db->select("*");
   	$this->db->from("tblijazah");
   	$this->db->where("idijazah", $idijazah);
   	return $this->db->get()->result_array();
   	// echo "<pre>";

   	// print_r($cek);

   	// echo "</pre>";
   }

   public function proseseditijazah()
   {
   	$data = [
   		"idijazah"					=> $this->input->post('idijazah'),
   		"statuspengambilan"			=> $this->input->post('statuspengambilan') 
   	];

   	$this->db->where('idijazah', $this->input->post('idijazah'));
   	$this->db->update('tblijazah', $data);
   	$msg = "Success";
   	echo json_encode($msg);
   }
}