<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jayapura");
        if(!$this->session->userdata('username')){
            redirect('login');
        }
        $this->load->model('user_m');
        $this->load->model('kabupaten_m');
        $this->load->model('kategori_m');
        $this->load->model('berkas_m');
        $this->load->model('proposal_m');
    }
    
    public function index()
    {
        $data['mDashboard'] = true;
        $data['content'] = 'dashboard';
        $this->load->view('index',$data);
    }

    public function kabupaten()
    {
        $data['mKabupaten'] = true;
        $data['kabupaten'] = $this->kabupaten_m->getAll();
        $data['content'] = 'v_kabupaten';
        $this->load->view('index',$data);
    }

    public function kategori()
    {
        $data['mKategori'] = true;
        $data['kategori'] = $this->kategori_m->getAll();
        $data['content'] = 'v_kategori';
        $this->load->view('index',$data);
    }

    public function berkas()
    {
        $data['mBerkas'] = true;
        $data['berkas'] = $this->berkas_m->getAll();
        $data['content'] = 'v_berkas';
        $this->load->view('index',$data);
    }

    public function proposal_pendidikan()
    {
        $data['mProposalPend'] = true;
        $data['all_data'] = $this->proposal_m->getAllPendidikan();
        $data['content'] = 'v_proposal_pendidikan';
        $this->load->view('index',$data);
    }

    public function proposal_umum()
    {
        $data['mProposalUmum'] = true;
        $data['all_data'] = $this->proposal_m->getAllUmum();
        $data['content'] = 'v_proposal_umum';
        $this->load->view('index',$data);
    }

    public function pengguna()
    {
        $data['mPengguna'] = true;
        $data['pengguna'] = $this->user_m->getAll();
        $data['content'] = 'v_pengguna';
        $this->load->view('index',$data);
    }

    public function ubah_password(){
        
        $table = 'pengguna';
        $id = 'idpengguna';

        $data = [ 
            'password'=>password_hash($this->input->post('password',true),PASSWORD_DEFAULT)
        ];
        $this->db->update($table,$data,[$id=>$this->input->post('id',true)]);
        $this->session->set_flashdata('success','Anda berhasil mengubah password');
        echo '<script>javascript:history.back()</script>';
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file Menu.php */