<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jayapura");
        if(!$this->session->userdata('username')){
            redirect('login');
        }
        $this->load->model('berkas_m');
        $this->load->model('proposal_m');
    }

    public function pberkas($id)
    {
        $data['mProposalPend'] = true;
        $data['berkas'] = $this->berkas_m->getBerkasByKode('P');
        $data['content'] = 'upload_berkas';
        $this->load->view('index',$data);
    }
    // public function pberkas_add($id)
    // {
    //     $data['mProposalPend'] = true;
    //     $berkas = $this->berkas_m->getBerkasByKode('P');
    //     // var_dump($berkas);die;
    //     $proposal_id = $id;
    //     foreach($berkas as $row){
    //         $data = [
    //             'proposal_pendidikan_id'=>$proposal_id,
    //             'berkas_id'=>$row['idberkas'],
    //             'status'=>'Belum'
    //         ];
    //         $this->db->insert('proposal_pendidikan_berkas',$data);
    //     }
    //     $data['berkasby'] = $this->db->select('x.*,x1.*')
    //                                 ->join('berkas x1','x1.idberkas=x.berkas_id')
    //                                 ->where('proposal_pendidikan_id',$proposal_id)
    //                                 ->get('proposal_pendidikan_berkas x')->result_array();
    //     $data['content'] = 'upload_berkas2';
    //     $this->load->view('index',$data);
    // }
    
    public function uberkas($id)
    {
        $data['mProposalUmum'] = true;
        $data['berkas'] = $this->berkas_m->getBerkasByKode('U');
        $data['content'] = 'upload_berkas';
        $this->load->view('index',$data);
    }
    
    public function save_pend()
    {
        $id = $this->input->post('idproposal_pendidikan',true);
        if($id==''){
            $data = [
                'kabupaten_id'=>$this->input->post('kabupaten_id',true),
                'kategori_id'=>$this->input->post('kategori_id',true),
                'tanggal'=>date('Y-m-d'),
                'pengguna_id'=>$this->session->userdata('id'),
                'nama_lengkap'=>$this->input->post('nama_lengkap',true),
                'tmp_lahir'=>$this->input->post('tmp_lahir',true),
                'tgl_lahir'=>$this->input->post('tgl_lahir',true),
                'institusi'=>$this->input->post('institusi',true),
                'fakultas'=>$this->input->post('fakultas',true),
                'jurusan'=>$this->input->post('jurusan',true),
                'prodi'=>$this->input->post('prodi',true),
                'status'=>'Baru'
            ];
            $this->proposal_m->tambahDataPend($data);
            $this->session->set_flashdata('success','Anda berhasil menambahkan data Proposal Pendidikan');
        }else{
            $data = [
                'kabupaten_id'=>$this->input->post('kabupaten_id',true),
                'kategori_id'=>$this->input->post('kategori_id',true),
                'tanggal'=>date('Y-m-d'),
                'pengguna_id'=>$this->session->userdata('id'),
                'nama_lengkap'=>$this->input->post('nama_lengkap',true),
                'tmp_lahir'=>$this->input->post('tmp_lahir',true),
                'tgl_lahir'=>$this->input->post('tgl_lahir',true),
                'institusi'=>$this->input->post('institusi',true),
                'fakultas'=>$this->input->post('fakultas',true),
                'jurusan'=>$this->input->post('jurusan',true),
                'prodi'=>$this->input->post('prodi',true)
            ];
            $this->proposal_m->editDataPend($data,$id);
            $this->session->set_flashdata('success','Anda berhasil mengubah data Proposal Pendidikan');

        }
        redirect('menu/proposal_pendidikan');
    }
    
    public function save_umum()
    {
        $id = $this->input->post('idproposal_umum',true);
        if($id==''){
            $data = [
                'kabupaten_id'=>$this->input->post('kabupaten_id',true),
                'kategori_id'=>$this->input->post('kategori_id',true),
                'tanggal'=>date('Y-m-d'),
                'pengguna_id'=>$this->session->userdata('id'),
                'nama'=>$this->input->post('nama',true),
                'pemohon'=>$this->input->post('pemohon',true),
                'kegiatan'=>$this->input->post('kegiatan',true),
                'status'=>'Baru'
            ];
            $this->proposal_m->tambahDataUmum($data);
            $this->session->set_flashdata('success','Anda berhasil menambahkan data Proposal Umum');
        }else{
            $data = [
                'kabupaten_id'=>$this->input->post('kabupaten_id',true),
                'kategori_id'=>$this->input->post('kategori_id',true),
                'tanggal'=>date('Y-m-d'),
                'pengguna_id'=>$this->session->userdata('id'),
                'nama'=>$this->input->post('nama',true),
                'pemohon'=>$this->input->post('pemohon',true),
                'kegiatan'=>$this->input->post('kegiatan',true),
            ];
            $this->proposal_m->editDataUmum($data,$id);
            $this->session->set_flashdata('success','Anda berhasil mengubah data Proposal Umum');

        }
        redirect('menu/proposal_umum');
    }

    public function up_file(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpeg|jpg|png|pdf';
        $config['max_size']             = 1024;
        $config['encrypt_name']         = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file'))
        {
            $file = $this->upload->data();
            $proposal_id = $this->input->post('proposal_pendidikan_id');
            $data = [
                'proposal_pendidikan_id'=>$proposal_id,
                'berkas_id'=>$this->input->post('berkas_id'),
                'file'=>$file['file_name'],
                'status'=>'Sudah'
            ];
            $this->proposal_m->tambahBerkasPend($data);
            // if($edit){
            //     unlink('./uploads/'.$this->input->post('file_lama',true));
            // }
            $this->session->set_flashdata('success','Anda berhasil mengunggah File Berkas');
        }else{
            $this->session->set_flashdata('error',$this->upload->display_errors());
        }
        redirect('proposal/pberkas/'.$proposal_id);
    }
    
    public function up_file_izin(){
        
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpeg|jpg|png|pdf';
        $config['max_size']             = 2048;
        $config['encrypt_name']         = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_izin'))
        {
            $file = $this->upload->data();
            $data = [
                'file_izin'=>$file['file_name'],
            ];
            $edit = $this->proposal_m->editData($data,$this->input->post('iddata_usaha',true));
            if($edit){
                unlink('./uploads/'.$this->input->post('file_lama',true));
            }
            $this->session->set_flashdata('success','Anda berhasil menambahkan File Izin');
        }else{
            $this->session->set_flashdata('error',$this->upload->display_errors());
        }
        redirect('menu/data_master');
    }

    public function up_file_lokasi(){
        
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpeg|jpg|png|pdf';
        $config['max_size']             = 2048;
        $config['encrypt_name']         = true;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_lokasi'))
        {
            $file = $this->upload->data();
            $data = [
                'file_lokasi'=>$file['file_name'],
            ];
            $edit = $this->proposal_m->editData($data,$this->input->post('iddata_usaha',true));
            if($edit){
                unlink('./uploads/'.$this->input->post('file_lama',true));
            }
            $this->session->set_flashdata('success','Anda berhasil menambahkan File Lokasi');
        }else{
            $this->session->set_flashdata('error',$this->upload->display_errors());
        }
        redirect('menu/data_master');
    }

    public function view_pend(){
        $id = $this->input->post('id',true);
        $data = $this->proposal_m->getByIdPend($id);
        echo json_encode($data);
    }

    public function view_umum(){
        $id = $this->input->post('id',true);
        $data = $this->proposal_m->getByIdUmum($id);
        echo json_encode($data);
    }

    public function hapusPend($id){
        $this->proposal_m->hapusDataPend($id);
        $this->session->set_flashdata('success','Anda berhasil menghapus data Proposal Pendidikan');
        redirect('menu/data_master');
    }

    public function hapusUmum($id){
        $this->proposal_m->hapusDataUmum($id);
        $this->session->set_flashdata('success','Anda berhasil menghapus data Proposal Umum');
        redirect('menu/data_master');
    }

}

/* End of file Proposal.php */