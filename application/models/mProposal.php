<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mProposal extends CI_Model {
 
 public function __construct()
 {
   parent::__construct();
   //Do your magic here
 }
 
 public function getProposal()
 {
     $result = $this->db->get('tb_proposal');
     return $result;
 }

 public function getDetailProposal($id)
{
    $this->db->where('id_proposal', $id);
    $result = $this->db->get('tb_proposal')->result_array();
    return $result[0];
}
 
 public function tambahProposal()
 {
    $id=$this->input->POST('id_proposal');
    $judulProposal=$this->input->POST('judulproposal');
    $statusRegistrasi=$this->input->POST('statusregistrasi');
    $modelProposal=$this->input->POST('modelproposal');
    $nim=$this->input->POST('nim');

    $proposal = uploadProposal();
    if (!$proposal) {
      return false;
    }
    $surat = uploadSurat();
    if (!$surat) {
      return false;
    }

   $insert =  array(
    'id_proposal' =>$id, 
   'judulproposal' =>$judulProposal,
   'proposal' =>$proposal,
   'suratkesediaanpembimbing1' =>$surat,
   'statusregistrasi' =>$statusRegistrasi,
   'modelproposal'=>$modelProposal, 
   'nim' =>$nim);
   $result = $this->db->insert('tb_proposal', $insert);
   return $result;
    
 }
    
 public function editProposal()
{
    $edit = array('id_proposal' =>$this->input->POST('id_proposal') , 
    'judulproposal' =>$this->input->POST('judulproposal'),'proposal' =>$this->input->POST('proposal'),
    'suratkesediaanpembimbing1' =>$this->input->POST('suratkesediaanpembimbing1'),
    'statusregistrasi' =>$this->input->POST('statusregistrasi'),
    'modelproposal' =>$this->input->POST('modelproposal'), 'nim' =>$this->input->POST('nim'));
    $this->db->where('id_proposal', $this->input->post('id_proposal'));
    $result = $this->db->update('tb_proposal', $edit);
    return $result;
}

public function deleteProposal($id)
{
    $this->db->where('id_proposal', $id);
    $result=$this->db->delete('tb_proposal');
    return $result;
}

}


function uploadProposal()
 {
  $namaFile = $_FILES['proposal']['name'];
  $ukuranFile = $_FILES['proposal']['size'];
  $error = $_FILES['proposal']['error'];
  $tempName = $_FILES['proposal']['tmp_name'];
  
  //cek apakah ada file yang diupload
  if ($error==4) {
    echo"<script>
            alert('Pilih File Terlebih Dahulu');
         </script>";
      return false;
  }

  //cek apakah yang diupload adalah file yang yang diijinkan
  $ekstensiValid =['jpeg','jpg','png','pdf'];
  $ekstensiFile = explode('.', $namaFile);
  $ekstensiFile = strtolower(end($ekstensiFile));
  if (!in_array($ekstensiFile, $ekstensiValid)) {
    echo"<script>
            alert('File yang Anda Upload Tidak Diijinkan');
         </script>";
      return false;
  }

  //cek jika ukurannya terlalu besar
  if($ukuranFile > 10000000){
    echo"<script>
            alert('File yang Anda Upload Terlalu Besar');
         </script>";
      return false;
  }

  //lolos pengecekan, gambar siap diupload
  move_uploaded_file($tempName, 'assets/file/' . $namaFile);

  return $namaFile;
 }

 function uploadSurat()
 {
  $namaFile = $_FILES['suratkesediaanpembimbing1']['name'];
  $ukuranFile = $_FILES['suratkesediaanpembimbing1']['size'];
  $error = $_FILES['suratkesediaanpembimbing1']['error'];
  $tempName = $_FILES['suratkesediaanpembimbing1']['tmp_name'];
  
  //cek apakah ada file yang diupload
  if ($error==4) {
    echo"<script>
            alert('Pilih File Terlebih Dahulu');
         </script>";
      return false;
  }

  //cek apakah yang diupload adalah file yang yang diijinkan
  $ekstensiValid =['jpeg','jpg','png','pdf'];
  $ekstensiFile = explode('.', $namaFile);
  $ekstensiFile = strtolower(end($ekstensiFile));
  if (!in_array($ekstensiFile, $ekstensiValid)) {
    echo"<script>
            alert('File yang Anda Upload Tidak Diijinkan');
         </script>";
      return false;
  }

  //cek jika ukurannya terlalu besar
  if($ukuranFile > 10000000){
    echo"<script>
            alert('File yang Anda Upload Terlalu Besar');
         </script>";
      return false;
  }

  //lolos pengecekan, gambar siap diupload
  move_uploaded_file($tempName, 'assets/file/' . $namaFile);

  return $namaFile;
 }
/* End of file ModelName.php */

?>