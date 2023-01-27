<?php

class SiswaModel extends CI_Model {

   public function registrasi(){
      $username = $this->input->post("username");
      $password = $this->input->post("password");
      $password2 = $this->input->post("password2");
      $namapengguna = $this->input->post("namapengguna");
      $level = "Alumni";

      if ($password !== $password2) {
        return FALSE;
      }else {
        $passwordbaru = password_hash($this->input->post("password"), PASSWORD_DEFAULT);
      }


      $data = [

          'username'    => $username,
          'password'    => $passwordbaru,
          'namapengguna'  => $namapengguna,
          'level'     => $level,

      ];
      
      $this->db->insert("akun", $data);
      $msg = "ok";
      echo json_encode($msg);
   }

   public function getidakun($data){
    return $this->db->get_where('akun', $data)->result_array();
   }

   public function proseslogin($data){
     return $this->db->get_where('akun', $data);
   }

   public function insertDatapendaftaranalumni(){
          $idakun = $this->session->userdata('idakun');
          $idstatus = $this->input->post("idstatus");
          $namaalumni = $this->input->post("namaalumni");
          $jurusan = $this->input->post("jurusan");
          $alamat = $this->input->post("alamat");
          $nomortelepon = $this->input->post("nomortelepon");
          $tahunmasuk = $this->input->post("tahunmasuk");
          $tahuntamat = $this->input->post("tahuntamat");
          $hobi = $this->input->post("hobi");
          $programkeahlian = $this->input->post("programkeahlian");


          $arr = array(
            "idakun"            => $idakun,
            "idstatus"          => $idstatus,
            "namaalumni"        => $namaalumni,
            "jurusan"           => $jurusan,
            "alamat"            => $alamat,
            "nomortelepon"      => $nomortelepon,
            "tahunmasuk"        => $tahunmasuk,
            "tahuntamat"        => $tahuntamat,
            "hobi"              => $hobi,
            "programkeahlian"   => $programkeahlian,
          );

      $this->db->select("*");
      $this->db->from("alumni");
      $this->db->where("idakun", $idakun);
      $cek = $this->db->get()->result_array();
      // var_dump($cek[0]['idakun']);die();

      if ($cek[0]['idakun'] == $idakun)
      {
        $this->session->set_flashdata("flash", "gagal");
        redirect(base_url("dashbord"));
      }else {
        $this->db->insert("alumni", $arr);
        $this->session->set_flashdata("flash", "berhasil");
        redirect(base_url("dashbord"));
      }
      
   }

   public function getALumni(){
    return $this->db->get("alumni")->result_array();
   }

   public function getdetail($data) {
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->join('akun', 'akun.idakun = alumni.idakun');
    $this->db->join("status", "status.idstatus = alumni.idstatus");
    $this->db->where('idalumni', $data);
    return $this->db->get()->result_array();

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

   public function ambilgetstatus()
   {
    return $this->db->get("status")->result_array();
   }

   public function proseseditalumni($data)
   {
      $this->db->where('idalumni', $this->input->post("idalumni"));
      $this->db->update('alumni', $data);
   }


}