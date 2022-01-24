<?php

class Pendatang_model extends CI_Model {

	public function joinTbpdd(){
		$this->db->select('*');
		$this->db->from('tb_pdd');
		$this->db->join('tb_datang','tb_datang.pelapor = tb_pdd.id_pend');      
		$query = $this->db->get();
		return $query;
	}

	public function hapusDataPendatang($id) {
		$this->db->delete('tb_datang', ['id_datang' => $id]);
	}

	public function lihatDataPenduduk(){
		// $query = $this->db->get_where('tb_pdd', ['status' => 'Ada']);
		// return $query;

		$data = $this->db->query("SELECT id_pend,nama,nik from tb_pdd where status='Ada'");
		return $data->result_array();
	}

	public function tambahDataPendatang() {
		$data = [
			"nik" => $this->input->post('nik', true),
			"nama_datang" => $this->input->post('nama_datang', true),
			"jekel" => $this->input->post('jekel', true),
			"tgl_datang" => $this->input->post('tgl_datang', true),
			"rt" => $this->input->post('rt', true),
			"rw" => $this->input->post('rw', true),
			"pelapor" => $this->input->post('pelapor', true)
		];

		$this->db->insert('tb_datang', $data);
	}

	public function getPendatangById($id) {
		return $this->db->get_where('tb_datang', ['id_datang' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function ubahDataPendatang() {
		$data = [
			"nik" => $this->input->post('nik', true),
			"nama_datang" => $this->input->post('nama_datang', true),
			"jekel" => $this->input->post('jekel', true),
			"tgl_datang" => $this->input->post('tgl_datang', true),
			"rt" => $this->input->post('rt', true),
			"rw" => $this->input->post('rw', true),
			"pelapor" => $this->input->post('pelapor', true)
		];

		$this->db->where('id_datang', $this->input->post('id'));
		$this->db->update('tb_datang', $data);
	}

	public function getAllPendatang() {
		return $this->db->get('tb_datang')->result_array();
	}
}