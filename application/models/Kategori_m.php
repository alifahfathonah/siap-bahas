<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {
    
    private $table = 'kategori';

    private $id = 'idkategori';

    public function getAll(){ 
        return $this->db->order_by($this->id,'DESC')
                        ->get($this->table)->result_array();
    }

    public function tambahBaru($data){
        $this->db->insert($this->table,$data);
    }

    public function hapusData($id){
        return $this->db->delete($this->table,[$this->id=>$id]);
    }

}

/* End of file Kategori_m.php */