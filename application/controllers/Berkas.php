<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('login');
        }
        $this->load->model('berkas_m');
    }
    
    public function index()
    {
        
    }
    
    public function add()
    {
        $data = [
            'kode_berkas'=>$this->input->post('kode_berkas',true),
            'nama_berkas'=>$this->input->post('nama_berkas',true),
            'keterangan'=>$this->input->post('keterangan',true)
        ];
        $this->berkas_m->tambahBaru($data);
        $this->session->set_flashdata('success','Anda berhasil menambahkan data Berkas');
        redirect('menu/berkas');
    }

    public function hapus($id){
        $del = $this->berkas_m->hapusData($id);
        if($del){
            $this->session->set_flashdata('success','Anda berhasil menghapus data Berkas');
        }else{
            $this->session->set_flashdata('error','Maaf, data gagal dihapus, data terikat dengan data lainnya !');
        }
        redirect('menu/berkas');
    }
}

/* End of file Berkas.php */