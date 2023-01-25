<?php

class SiswaModel extends CI_Model {

   public function registrasi($data){
      $this->db->insert("akun", $data);
   }

   public function getidakun($data){
    return $this->db->get_where('akun', $data)->result_array();
   }

   public function proseslogin($data){
     return $this->db->get_where('akun', $data);
   }

   public function insertDatapendaftaranalumni($data){
    $this->db->insert("alumni", $data);
   }

   public function getALumni(){
    return $this->db->get("alumni")->result_array();
   }

   public function getdetail($data) {
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->join('akun', 'akun.idakun = alumni.idakun');
    $this->db->join("status", "status.idstatus = akun.idakun");
    $this->db->where('idalumni', $data);
    return $this->db->get()->result_array();

   }

   public function getijazah(){
      $this->db->select('*');
      $this->db->from('tblijazah');
      $this->db->join('alumni', 'alumni.idalumni = tblijazah.idalumni');
      return $this->db->get()->result_array();
   }

   public function insertTambahAlumni($data) {
      return $this->db->insert("tblijazah", $data);
   }

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

   public function getstatus($status)
   {

    return $this->db->get($status)->result_array();

   }

   public function getformedit()
   {
    $id = $_GET['id'];
    $this->db->select("*");
    $this->db->from("alumni");
    $this->db->join("status", "status.idstatus = alumni.idstatus");
    $this->db->where('idalumni', $id);
    return $this->db->get()->result_array();
   }

   public function proseseditalumni($table, $arr)
   {
    $this->db->insert($table, $arr);
   }


}