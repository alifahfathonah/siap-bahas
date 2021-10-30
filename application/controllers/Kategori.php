<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('login');
        }
        $this->load->model('kategori_m');
    }
    
    public function index()
    {
        
    }
    
    public function add()
    {
        $data = [
            'kode_kategori'=>$this->input->post('kode_kategori',true),
            'nama_kategori'=>$this->input->post('nama_kategori',true)
        ];
        $this->kategori_m->tambahBaru($data);
        $this->session->set_flashdata('success','Anda berhasil menambahkan data Kategori');
        redirect('menu/kategori');
    }

    public function hapus($id){
        $del = $this->kategori_m->hapusData($id);
        if($del){
            $this->session->set_flashdata('success','Anda berhasil menghapus data Kategori');
        }else{
            $this->session->set_flashdata('error','Maaf, data gagal dihapus, data terikat dengan data lainnya !');
        }
        redirect('menu/kategori');
    }
}

/* End of file Kategori.php */