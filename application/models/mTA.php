<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mTA extends CI_Model {
 
 public function __construct()
 {
   parent::__construct();
   //Do your magic here
 }
 
 public function getTA()
 {
     $result = $this->db->get('tb_ta');
     return $result;
 }

 public function getDetailTA($id)
{
    $this->db->where('id_TA', $id);
    $result = $this->db->get('tb_ta')->result_array();
    return $result[0];
}

 public function tambahTA()
 {
  $insert =  array('id_TA' =>$this->input->POST('id_TA') , 
  'judulTA' =>$this->input->POST('judulTA'),'tugasakhir' =>$this->input->POST('tugasakhir'),
  'suratpuaspembimbing' =>$this->input->POST('suratpuaspembimbing'),
  'suratkesediaanpembimbing2' =>$this->input->POST('suratkesediaanpembimbing2'),
  'statusregistrasi' =>$this->input->POST('statusregistrasi'),
  'modelTA' =>$this->input->POST('modelTA'), 'nim' =>$this->input->POST('nim'));
  $result = $this->db->insert('tb_ta', $insert);
  return $result;
    
 }
    
 public function editTA()
{
  $edit =  array('id_TA' =>$this->input->POST('id_TA') , 
  'judulTA' =>$this->input->POST('judulTA'),'tugasakhir' =>$this->input->POST('tugasakhir'),
  'suratpuaspembimbing' =>$this->input->POST('suratpuaspembimbing'),
  'suratkesediaanpembimbing2' =>$this->input->POST('suratkesediaanpembimbing2'),
  'statusregistrasi' =>$this->input->POST('statusregistrasi'),
  'modelTA' =>$this->input->POST('modelTA'), 'nim' =>$this->input->POST('nim'));
  $this->db->where('id_TA', $this->input->post('id_TA'));
  $result = $this->db->update('tb_ta', $edit);
  return $result;
}

public function deleteTA($id)
{
    $this->db->where('id_TA', $id);
    $result=$this->db->delete('tb_ta');
    return $result;
}

}

/* End of file ModelName.php */

?>