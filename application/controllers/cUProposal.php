<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cUProposal extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mUProposal');
    }
    
    //function untuk menampilkan halaman ujian proposal utama
    public function indexUProposal()
    {
        $data['ujianProposal'] = $this->mUProposal->getUjianProposal();
        $this->load->view('ujianproposal/hlm_ujianProposal', $data);
        
    }

    //function untuk menampilkan halaman tambah ujian proposal
    public function tambah()
    {
        $this->load->view('ujianproposal/tambah_ujianProposal');
        
    }

    //function untuk mengirimkan data dari view ke model untuk dikirim ke database
    public function tambahData()
    {
        $this->mUProposal->tambahUjianProposal();
        redirect('cUProposal/indexUProposal');
    }

    //function untuk menampilkan halaman edit
    public function ubah($id)
    {
        $data['ujianProposal'] = $this->mUProposal->getDetailUjianProposal($id);
        $this->load->view('ujianproposal/edit_ujianProposal', $data);
        
    }

    //function untuk mengirimkan data terbaru dari view ke model untuk dikirim ke database
    public function edit()
    {
        $this->mUProposal->editUjianProposal();
        redirect('cUProposal/indexUProposal');
    }

    //function untuk menghapus data ujian proposal
    public function delete($id)
    {
        $this->mUProposal->deleteUjianProposal($id);
        redirect('cUProposal/indexUProposal');
    }

}

/* End of file Controllername.php */

?>