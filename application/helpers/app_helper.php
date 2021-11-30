<?php 
function delMask( $str ) {
    return (int)implode('',explode('.',$str));
}
function kodeTrx(){
    
    $ci =& get_instance();
    $ci->db->select('RIGHT(kode,3) as maxKode', FALSE);
    $ci->db->where('tgl',date('Y-m-d')); 
    $ci->db->order_by('kode','DESC');    
    $ci->db->limit(1);    
    $query = $ci->db->get('transaksi'); 
    //cek dulu apakah ada sudah ada kode di tabel.    
    if($query->num_rows() <> 0){      
        //cek kode jika telah tersedia    
        $data = $query->row();      
        $kode = intval($data->maxKode) + 1; 
    }
    else{      
        $kode = 1;  //cek jika kode belum terdapat pada table
    }
    $tgl=date('dmY'); 
    $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
    $kodetampil = "TRX".$tgl.$batas;  //format kode
    return $kodetampil;
}
function noAntrian(){
    
    $ci =& get_instance();
    // $ci->db->select_max('antrian');
    $ci->db->select('RIGHT(antrian,3) as maxAntrian', FALSE);
    $ci->db->where('tgl',date('Y-m-d')); 
    $ci->db->order_by('antrian','DESC');     
    $query = $ci->db->get('transaksi');  
    if($query->num_rows() <> 0){      
        //cek kode jika telah tersedia    
        $data = $query->row();  
        // var_dump($data);die;    
        $kode = intval($data->maxAntrian) + 1; 
    }
    else{      
        $kode = 1;  //cek jika kode belum terdapat pada table
    }
    $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
    $kodetampil = "A".$batas;  //format kode
    return $kodetampil;
}
function list_kabupaten(){
    
    $ci =& get_instance();
    return $ci->db->order_by('nama_kabupaten','ASC')
                ->get('kabupaten')->result_array();
    
}
function list_kategori(){
    
    $ci =& get_instance();
    return $ci->db->order_by('nama_kategori','ASC')
                ->get('kategori')->result_array();
    
}
function list_jenis_usaha(){
    
    $ci =& get_instance();
    return $ci->db->order_by('idjenis_usaha','DESC')
                ->get('jenis_usaha')->result_array();
    
}
function namaKabupaten($id){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('kabupaten',['idkabupaten'=>$id])->row();
    return $data->nama_kabupaten;
    
}
function namaKategori($id){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('kategori',['idkategori'=>$id])->row();
    return $data->nama_kategori;
    
}
function cek_berkas_pendidikan_status($idberkas,$idproposal){
    $ci =& get_instance();
    $data = $ci->db->get_where('proposal_pendidikan_berkas',['berkas_id'=>$idberkas,'proposal_pendidikan_id'=>$idproposal])->num_rows();
    if($data!=0){
        return true;
    }
    return false;
}
function cek_berkas_umum_status($idberkas,$idproposal){
    $ci =& get_instance();
    $data = $ci->db->get_where('proposal_umum_berkas',['berkas_id'=>$idberkas,'proposal_umum_id'=>$idproposal])->num_rows();
    if($data!=0){
        return true;
    }
    return false;
}
function berkas_pendidikan($idberkas,$idproposal){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('proposal_pendidikan_berkas',['berkas_id'=>$idberkas,'proposal_pendidikan_id'=>$idproposal])->row();
    return $data;
    
}
function berkas_umum($idberkas,$idproposal){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('proposal_umum_berkas',['berkas_id'=>$idberkas,'proposal_umum_id'=>$idproposal])->row();
    return $data;
    
}
function namaProPendidikan($id){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('proposal_pendidikan',['idproposal_pendidikan'=>$id])->row();
    return $data->nama_lengkap;
    
}
function namaProUmum($id){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('proposal_umum',['idproposal_umum'=>$id])->row();
    return $data->nama;
    
}
function total($tb){
    
    $ci =& get_instance();
    return $ci->db->get($tb)->num_rows();
    
    
}