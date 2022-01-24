<?php

class Lahir_model extends CI_Model {

	public function joinTbpdd(){
		$this->db->select('*');
		$this->db->from('tb_pdd');
		$this->db->join('tb_lahir','tb_lahir.id_pdd = tb_pdd.id_pend');      
		$query = $this->db->get();
		return $query;
	}

	public function hapusDataLahir($id) {
		$this->db->delete('tb_lahir', ['id_lahir' => $id]);
	}

	public function lihatDataPenduduk(){
		// $query = $this->db->get_where('tb_pdd', ['status' => 'Ada']);
		// return $query;

		$data = $this->db->query("SELECT id_pend,nama,nik,no_kk from tb_pdd where status='Ada'");
		return $data->result_array();
	}

	public function tambahDataLahir() {
		$data = [
			"nama_bayi" => $this->input->post('nama_bayi', true),
			"tempat_lhr" => $this->input->post('tempat_lhr', true),
			"tgl_lhr" => $this->input->post('tgl_lhr', true),
			"jekel" => $this->input->post('jekel', true),
			"id_pdd" => $this->input->post('pend', true)
		];

		$this->db->insert('tb_lahir', $data);
	}

	public function getLahirById($id) {
		return $this->db->get_where('tb_lahir', ['id_lahir' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function ubahDataLahir() {
		$data = [
			"nama_bayi" => $this->input->post('nama_bayi', true),
			"tempat_lhr" => $this->input->post('tempat_lhr', true),
			"tgl_lhr" => $this->input->post('tgl_lhr', true),
			"jekel" => $this->input->post('jekel', true),
			"id_pdd" => $this->input->post('pend', true)
		];

		$this->db->where('id_lahir', $this->input->post('id'));
		$this->db->update('tb_lahir', $data);
	}

	// public function joinTbpdd1($id){ 
	// 	$data = $this->db->query("SELECT * FROM 
	// 	tb_lahir join tb_pdd on id_pdd=id_pend WHERE id_lahir='".$id."'");
	// 	return $data->result_array();
	// }
	
	public function getAllLahir() {
		$query = $this->db->get('tb_lahir');
		return $query->result_array();
	}
}