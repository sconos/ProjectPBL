<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mBimbingan extends CI_Model {
 
 public function __construct()
 {
   parent::__construct();
   //Do your magic here
 }
 
 public function getBimbingan()
 {
     $result = $this->db->get('tb_bimbingan');
     return $result;
 }

 public function getDetailBimbingan($id)
{
    $this->db->where('id_bimbingan', $id);
    $result = $this->db->get('tb_bimbingan')->result_array();
    return $result[0];
}

 public function tambahBimbingan()
 {
   $insert =  array('id_pembimbing' =>$this->input->POST('id_pembimbing') , 
   'pembahasan' =>$this->input->POST('pembahasan'),'tanggal' =>$this->input->POST('tanggal'),
   'statusbimbingan' =>$this->input->POST('statusbimbingan'),'id_bimbingan' =>$this->input->POST('id_bimbingan'));
   $result = $this->db->insert('tb_bimbingan', $insert);
   return $result;
    
 }
    
 public function editBimbingan()
{
    $edit = array('id_pembimbing' =>$this->input->POST('id_pembimbing') , 
    'pembahasan' =>$this->input->POST('pembahasan'),'tanggal' =>$this->input->POST('tanggal'),
    'statusbimbingan' =>$this->input->POST('statusbimbingan'),'id_bimbingan' =>$this->input->POST('id_bimbingan'));
    $this->db->where('id_bimbingan', $this->input->post('id_bimbingan'));
    $result = $this->db->update('tb_bimbingan', $edit);
    return $result;
}

public function deleteBimbingan($id)
{
    $this->db->where('id_bimbingan', $id);
    $result=$this->db->delete('tb_bimbingan');
    return $result;
}

}

/* End of file ModelName.php */

?>