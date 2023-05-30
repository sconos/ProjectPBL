<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mUProposal extends CI_Model {
 
 public function __construct()
 {
   parent::__construct();
   //Do your magic here
 }
 
 public function getUjianProposal()
 {
     $result = $this->db->get('tb_ujianproposal');
     return $result;
 }

 public function getDetailUjianProposal($id)
{
    $this->db->where('kodeujian', $id);
    $result = $this->db->get('tb_ujianproposal')->result_array();
    return $result[0];
}

 public function tambahUjianProposal()
 {
   $insert =  array('kodeujian' =>$this->input->POST('kodeujian') , 
   'waktu' =>$this->input->POST('waktu'),'tempat' =>$this->input->POST('tempat'),
   'beritaacara' =>$this->input->POST('beritaacara'),
   'id_proposal' =>$this->input->POST('id_proposal'));
   $result = $this->db->insert('tb_ujianproposal', $insert);
   return $result;
    
 }
    
 public function editUjianProposal()
{
    $edit = array('kodeujian' =>$this->input->POST('kodeujian') , 
    'waktu' =>$this->input->POST('waktu'),'tempat' =>$this->input->POST('tempat'),
    'beritaacara' =>$this->input->POST('beritaacara'),
    'id_proposal' =>$this->input->POST('id_proposal'));
    $this->db->where('kodeujian', $this->input->post('kodeujian'));
    $result = $this->db->update('tb_ujianproposal', $edit);
    return $result;
}

public function deleteUjianProposal($id)
{
    $this->db->where('kodeujian', $id);
    $result=$this->db->delete('tb_ujianproposal');
    return $result;
}

}

/* End of file ModelName.php */

?>