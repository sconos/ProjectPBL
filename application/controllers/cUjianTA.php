<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cUjianTA extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mUjianTA');
    }
    
    //function untuk menampilkan halaman ujian proposal utama
    public function indexUjianTA()
    {
        $data['ujianTA'] = $this->mUjianTA->getUjianTA();
        $this->load->view('ujianTA/hlm_ujianTA', $data);
        
    }

    //function untuk menampilkan halaman tambah ujian proposal
    public function tambah()
    {
        $this->load->view('ujianTA/tambah_ujianTA');
        
    }

    //function untuk mengirimkan data dari view ke model untuk dikirim ke database
    public function tambahData()
    {
        $this->mUjianTA->tambahUjianTA();
        redirect('cUjianTA/indexUjianTA');
    }

    //function untuk menampilkan halaman edit
    public function ubah($id)
    {
        $data['ujianTA'] = $this->mUjianTA->getDetailUjianTA($id);
        $this->load->view('ujianTA/edit_ujianTA', $data);
        
    }

    //function untuk mengirimkan data terbaru dari view ke model untuk dikirim ke database
    public function edit()
    {
        $this->mUjianTA->editUjianTA();
        redirect('cUjianTA/indexUjianTA');
    }

    //function untuk menghapus data ujian proposal
    public function delete($id)
    {
        $this->mUjianTA->deleteUjianTA($id);
        redirect('cUjianTA/indexUjianTA');
    }

}

/* End of file Controllername.php */

?>