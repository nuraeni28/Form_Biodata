<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends MY_Controller {
	public function __construct(){ 
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model("m_biodata");
	}
	public function index(){
		$this->load->model("m_biodata");
		$data['biodata'] = $this->m_biodata->ambil_data();
		$this->load->view('mahasiswa/v_tampil_data',$data);
	}

	public function tambah(){
		$this->load->view('mahasiswa/v_tambah_data');
	}

	public function simpan(){
		$name = $this->input->post('name');
		$nim = $this->input->post('nim');
		$major = $this->input->post('major');
		$dob = $this->input->post('dob');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
		$address = $this->input->post('address');

		$data = array(
			'Name' => $name,
			'NIM' => $nim,
			'Major' => $major,
			'Birth' => $dob,
			'Gender' => $gender,
			'Age' => $age,
			'Address' => $address
		);
		$this->m_biodata->simpan_data($data);
		redirect('biodata');

	
	}

	public function edit(){
		$id= $this->uri->segment(3);
		$data['data_edit'] = $this->m_biodata->ambil_data_edit($id);
		
		$this->load->view('mahasiswa/v_edit_data',$data);
	
	}

	public function simpan_edit(){
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$name = $this->input->post('name');
		$nim = $this->input->post('nim');
		$major = $this->input->post('major');
		$dob = $this->input->post('dob');
		$gender = $this->input->post('gender');
		$age = $this->input->post('age');
		$address = $this->input->post('address');


	$data = array(
		'Name' => $name,
		'NIM' => $nim,
		'Major' => $major,
		'Birth' => $dob,
		'Gender' => $gender,
		'Age' => $age,
		'Address' => $address
	);
	$this->m_biodata->update_data($data, $id_mahasiswa);
	$this->session->set_flashdata('Info', '<div class="alert alert-success" role="alert">
											Data Berhasil Diupdate!
 											 </div>');
	redirect('biodata');
}
	public function hapus(){
		$id= $this->uri->segment(3);
		$this->m_biodata->hapus_data($id);

		$this->session->set_flashdata('Info', '<div class="alert alert-danger" role="alert">
											Data Berhasil Dihapus!
 											 </div>');
		redirect('biodata');
		

	}



}