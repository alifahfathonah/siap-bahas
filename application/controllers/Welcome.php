<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jayapura");
		$this->load->model('proposal_m');
		// $this->load->model('kabupaten_m');
		$this->load->model('kategori_m');
	}
	
	public function index()
	{
		$data['content'] = 'v_home';
		// $data['kabupaten'] = $this->kabupaten_m->getAll();
		$data['kategori'] = $this->kategori_m->getAll();
		$this->load->view('website',$data);
	}

	public function information()
	{
		$data['content'] = 'v_informasi';
		$this->load->view('website',$data);
	}

	public function view($id){
		$id = decrypt_url($id);
		// $data['data_by_kabupaten'] = $this->datamaster_m->getDataByJenisUsaha($id);
		$data['content'] = 'v_data_by_kabupaten';
		$this->load->view('website',$data);
	}


}