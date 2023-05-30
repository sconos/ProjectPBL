<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mUjianTA extends CI_Model {
 
 public function __construct()
 {
   parent::__construct();
   //Do your magic here
 }
 
 public function getUjianTA()
 {
     $result = $this->db->get('tb_ujianta');
     return $result;
 }

 public function getDetailUjianTA($id)
{
    $this->db->where('kodeujian', $id);
    $result = $this->db->get('tb_ujianta')->result_array();
    return $result[0];
}

 public function tambahUjianTA()
 {
   $insert =  array('kodeujian' =>$this->input->POST('kodeujian') , 
   'waktu' =>$this->input->POST('waktu'),'tempat' =>$this->input->POST('tempat'),
   'urlberitaacara' =>$this->input->POST('urlberitaacara'),
   'jenisujian' =>$this->input->POST('jenisujian'),
   'id_TA' =>$this->input->POST('id_TA'));
   $result = $this->db->insert('tb_ujianta', $insert);
   return $result;
    
 }
    
 public function editUjianTA()
{
    $edit = array('kodeujian' =>$this->input->POST('kodeujian') , 
    'waktu' =>$this->input->POST('waktu'),'tempat' =>$this->input->POST('tempat'),
    'urlberitaacara' =>$this->input->POST('urlberitaacara'),
    'jenisujian' =>$this->input->POST('jenisujian'),
    'id_TA' =>$this->input->POST('id_TA'));
    $this->db->where('kodeujian', $this->input->post('kodeujian'));
    $result = $this->db->update('tb_ujianta', $edit);
    return $result;
}

public function deleteUjianTA($id)
{
    $this->db->where('kodeujian', $id);
    $result=$this->db->delete('tb_ujianta');
    return $result;
}

}

/* End of file ModelName.php */

?>