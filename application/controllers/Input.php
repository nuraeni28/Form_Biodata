<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends MY_Controller {
	public function __construct(){ 
		parent::__construct();	
		$this->load->model('m_biodata');
	}

	function index(){
		//$sql = "select * from tb_hobby";
		//$res = $sql;
		//$res = $this->db->query($sql)->result()
		$this->load->view('mahasiswa/v_tambah_data');
	}

	function simpan_data(){
		$this->m_biodata->tambah();
		redirect('Biodata');
		
	}
}
