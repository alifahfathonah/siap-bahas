<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten_m extends CI_Model {
    
    private $table = 'kabupaten';

    private $id = 'idkabupaten';

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

/* End of file Kabupaten_m.php */