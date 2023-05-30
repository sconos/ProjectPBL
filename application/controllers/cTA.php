<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cTA extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mTA');
    }
    
    //function untuk menampilkan halaman ujian proposal utama
    public function indexTA()
    {
        $data['TA'] = $this->mTA->getTA();
        $this->load->view('TA/hlm_TA', $data);
        
    }

    //function untuk menampilkan halaman tambah ujian proposal
    public function tambah()
    {
        $this->load->view('TA/tambah_TA');
        
    }

    //function untuk mengirimkan data dari view ke model untuk dikirim ke database
    public function tambahData()
    {
        $this->mTA->tambahTA();
        redirect('cTA/indexTA');
    }

    //function untuk menampilkan halaman edit
    public function ubah($id)
    {
        $data['TA'] = $this->mTA->getDetailTA($id);
        $this->load->view('TA/edit_TA', $data);
        
    }

    //function untuk mengirimkan data terbaru dari view ke model untuk dikirim ke database
    public function edit()
    {
        $this->mTA->editTA();
        redirect('cTA/indexTA');
    }

    //function untuk menghapus data ujian proposal
    public function delete($id)
    {
        $this->mTA->deleteTA($id);
        redirect('cTA/indexTA');
    }

}

/* End of file Controllername.php */

?>