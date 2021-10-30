<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('login');
        }
        $this->load->model('kabupaten_m');
    }
    
    public function index()
    {
        
    }
    
    public function add()
    {
        $data = [
            'nama_kabupaten'=>$this->input->post('nama_kabupaten',true)
        ];
        $this->kabupaten_m->tambahBaru($data);
        $this->session->set_flashdata('success','Anda berhasil menambahkan data Kabupaten');
        redirect('menu/kabupaten');
    }

    public function hapus($id){
        $del = $this->kabupaten_m->hapusData($id);
        if($del){
            $this->session->set_flashdata('success','Anda berhasil menghapus data Kabupaten');
        }else{
            $this->session->set_flashdata('error','Maaf, data gagal dihapus, data terikat dengan data lainnya !');
        }
        redirect('menu/kabupaten');
    }
}

/* End of file Kabupaten.php */