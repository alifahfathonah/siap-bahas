<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas_m extends CI_Model {
    
    private $table = 'berkas';

    private $id = 'idberkas';

    public function getAll(){ 
        return $this->db->order_by($this->id,'DESC')
                        ->get($this->table)->result_array();
    }

    public function getBerkasByKode($kd){ 
        return $this->db->order_by($this->id,'DESC')
                        ->get_where($this->table,['kode_berkas'=>$kd])->result_array();
    }

    public function tambahBaru($data){
        $this->db->insert($this->table,$data);
    }

    public function hapusData($id){
        return $this->db->delete($this->table,[$this->id=>$id]);
    }

}

/* End of file Berkas_m.php */