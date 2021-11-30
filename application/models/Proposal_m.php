<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal_m extends CI_Model {

    private $tablePend = 'proposal_pendidikan';
    private $tableUmum = 'proposal_umum';

    private $idPend = 'idproposal_pendidikan';
    private $idUmum = 'idproposal_umum';

    public function getAllPendidikan(){ 
        return $this->db->select('x.*,x1.*,x2.*')
                        ->join('kabupaten x1','x1.idkabupaten=x.kabupaten_id')
                        ->join('kategori x2','x2.idkategori=x.kategori_id')
                        ->order_by('x.idproposal_pendidikan','DESC')
                        ->get($this->tablePend.' x')->result_array();
    }

    public function getAllUmum(){ 
        return $this->db->select('x.*,x1.*,x2.*')
                        ->join('kabupaten x1','x1.idkabupaten=x.kabupaten_id')
                        ->join('kategori x2','x2.idkategori=x.kategori_id')
                        ->order_by('x.idproposal_umum','DESC')
                        ->get($this->tableUmum.' x')->result_array();
    }

    public function getByIdPend($id){
        return $this->db->select('x.*,x1.*,x2.*')
                        ->join('kabupaten x1','x1.idkabupaten=x.kabupaten_id')
                        ->join('kategori x2','x2.idkategori=x.kategori_id')
                        ->where($this->idPend,$id)
                        ->get($this->tablePend.' x')->row_array();
    }

    public function getByIdUmum($id){
        return $this->db->select('x.*,x1.*,x2.*')
                        ->join('kabupaten x1','x1.idkabupaten=x.kabupaten_id')
                        ->join('kategori x2','x2.idkategori=x.kategori_id')
                        ->where($this->idUmum,$id)
                        ->get($this->tableUmum.' x')->row_array();
    }

    public function getProPendidikanByKategori($id){
        return $this->db->select('x.*,x1.*,x2.*')
                        ->join('kategori x1','x1.idkategori=x.kategori_id')
                        ->join('kabupaten x2','x2.idkabupaten=x.kabupaten_id')
                        ->where('x.kategori_id',$id)
                        ->get($this->tablePend.' x')->result_array();
    }

    public function getProUmumByKategori($id){
        return $this->db->select('x.*,x1.*,x2.*')
                        ->join('kategori x1','x1.idkategori=x.kategori_id')
                        ->join('kabupaten x2','x2.idkabupaten=x.kabupaten_id')
                        ->where('x.kategori_id',$id)
                        ->get($this->tableUmum.' x')->result_array();
    }

    public function tambahBerkasPend($data){
        $this->db->insert('proposal_pendidikan_berkas',$data);
    }

    public function tambahBerkasUmum($data){
        $this->db->insert('proposal_umum_berkas',$data);
    }

    public function tambahDataPend($data){
        $this->db->insert($this->tablePend,$data);
    }

    public function tambahDataUmum($data){
        $this->db->insert($this->tableUmum,$data);
    }

    public function editDataPend($data,$id){
        $this->db->update($this->tablePend,$data,[$this->idPend=>$id]);
    }

    public function editDataUmum($data,$id){
        $this->db->update($this->tableUmum,$data,[$this->idUmum=>$id]);
    }

    public function hapusDataPend($id){
        $this->db->delete($this->tablePend,[$this->idPend=>$id]);
    }

    public function hapusDataUmum($id){
        $this->db->delete($this->tableUmum,[$this->idUmum=>$id]);
    }

}

/* End of file Proposal_m.php */