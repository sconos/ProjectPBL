<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cBimbingan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mBimbingan');
    }
    
    //function untuk menampilkan halaman bimbingan utama
    public function indexBimbingan()
    {
        $data['bimbingan'] = $this->mBimbingan->getBimbingan();
        $this->load->view('bimbingan/hlm_Bimbingan', $data);
        
    }

    //function untuk menampilkan halaman tambah bimbingan
    public function tambah()
    {
        $this->load->view('bimbingan/tambah_bimbingan');
        
    }

    //function untuk mengirimkan data dari view ke model untuk dikirim ke database
    public function tambahData()
    {
        $this->mBimbingan->tambahBimbingan();
        redirect('cBimbingan/indexBimbingan');
    }

    //function untuk menampilkan halaman edit
    public function ubah($id)
    {
        $data['bimbingan'] = $this->mBimbingan->getDetailBimbingan($id);
        $this->load->view('bimbingan/edit_bimbingan', $data);
        
    }

    //function untuk mengirimkan data terbaru dari view ke model untuk dikirim ke database
    public function edit()
    {
        $this->mBimbingan->editBimbingan();
        redirect('cBimbingan/indexbimbingan');
    }

    //function untuk menghapus data bimbingan
    public function delete($id)
    {
        $this->mBimbingan->deleteBimbingan($id);
        redirect('cBimbingan/indexbimbingan');
    }

}

/* End of file Controllername.php */

?>