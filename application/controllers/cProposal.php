<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cProposal extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mProposal');
    }
    
    //function untuk menampilkan halaman proposal utama
    public function indexProposal()
    {
        $data['proposal'] = $this->mProposal->getProposal();
        $this->load->view('proposal/hlm_Proposal', $data);
        
    }

    //function untuk menampilkan halaman tambah proposal
    public function tambah()
    {
        $this->load->view('proposal/tambah_proposal');
        
    }

    //function untuk mengirimkan data dari view ke model untuk dikirim ke database
    public function tambahData()
    {
        $this->mProposal->tambahProposal();
        redirect('cProposal/indexProposal');
    }

    //function untuk menampilkan halaman edit
    public function ubah($id)
    {
        $data['proposal'] = $this->mProposal->getDetailProposal($id);
        $this->load->view('proposal/edit_proposal', $data);
        
    }

    //function untuk mengirimkan data terbaru dari view ke model untuk dikirim ke database
    public function edit()
    {
        $this->mProposal->editProposal();
        redirect('cProposal/indexProposal');
    }

    //function untuk menghapus data proposal
    public function delete($id)
    {
        $this->mProposal->deleteProposal($id);
        redirect('cProposal/indexProposal');
    }

}

/* End of file Controllername.php */

?>