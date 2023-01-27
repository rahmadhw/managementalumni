<?php 

class LokerModel extends CI_Model
{

   public function getLoker()
   {
    return $this->db->get("loker")->result_array();
   }

   public function prosesTambahLoker($data)
   {
      return $this->db->insert("loker", $data);
   }

   public function hapusdataloker()
   {
    
    $this->db->where("idloker", $_GET['idloker']);
    $this->db->delete("loker");
   }

   public function getdatafromedit()
   {
   	$idloker = $_GET['idloker'];
   	$cek = $this->db->get_where("loker", array("idloker" => $idloker))->result_array();
   	
   	return $cek;
   }

   public function proseseditloker()
   {
   		$datas = [
   			"idloker"				=> $this->input->post("idloker"),
   			"namaperusaan"			=> $this->input->post("namaperusaan"),
   			"posisi"				=> $this->input->post("posisi"),
   			"keterangan"			=> $this->input->post("keterangan"),
   			"waktubataspelamaran"	=> $this->input->post("waktubataspelamaran")
   		];

   		$this->db->where('idloker', $this->input->post("idloker"));
      	$this->db->update('loker', $datas);
   }
}