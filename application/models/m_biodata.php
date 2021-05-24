<?php
class M_biodata extends CI_Model{

	public function __construct(){ 
		parent::__construct();
		$this->load->database();
		
	}
	
	public function ambil_data(){
		return $this->db->get('biodata')->result();
	}

	public function simpan_data($data){
		$this->db->insert('biodata', $data);
	}

	public function ambil_data_edit($id){
		$this->db->where('id_mahasiswa',$id);
		$query = $this->db->get('biodata');
		return $query->result();
	}
	public function update_data($data, $id_mahasiswa){
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->update('biodata',$data);
	
	}

	public function hapus_data($id){
		$this->db->where('id_mahasiswa',$id);
		$this->db->delete('biodata');

	}
	}
	
	
