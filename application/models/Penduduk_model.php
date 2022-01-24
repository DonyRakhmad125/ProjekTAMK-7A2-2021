<?php

class Penduduk_model extends CI_Model {
	public function getAllPenduduk() {
		/*
		// mengambil data dari tabel mahasiswa
		$query = $this->db->get('mahasiswa');

		// menampilkan object dalam berntuk array
		return $query->result_array();
		*/

		// bisa juga membuat method chaining/ berantai dari pada bikin seperti diatas, cara ini pada ci
		// ini dinamakan query builder
		return $this->db->get('tb_pdd')->result_array();
	}

	public function hapusDataPenduduk($id) {
		// $this->db->where('id', $id); // bisa diganti dengan menambahkan ", ['id' => $id]"
		$this->db->delete('tb_pdd', ['id_pend' => $id]);
	}

	public function getPendudukById($id) {
		return $this->db->get_where('tb_pdd', ['id_pend' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function tambahDataPenduduk() {
		$data = [
			"no_kk" => $this->input->post('no_kk', true),
			"nik" => $this->input->post('nik', true),
			"nama" => $this->input->post('nama', true),
			"tempat_lh" => $this->input->post('tempat_lh', true),
			"tgl_lh" => $this->input->post('tgl_lh', true),
			"hubungan" => $this->input->post('hubungan', true),
			"jekel" => $this->input->post('jekel', true),
			"desa" => $this->input->post('desa', true),
			"rt" => $this->input->post('rt', true),
			"rw" => $this->input->post('rw', true),
			"agama" => $this->input->post('agama', true),
			"kawin" => $this->input->post('kawin', true),
			"pekerjaan" => $this->input->post('pekerjaan', true),
			"status" => "Ada"
		];

		$this->db->insert('tb_pdd', $data);
	}

	public function ubahDataPenduduk() {
		$data = [
			"no_kk" => $this->input->post('no_kk', true),
			"nik" => $this->input->post('nik', true),
			"nama" => $this->input->post('nama', true),
			"tempat_lh" => $this->input->post('tempat_lh', true),
			"tgl_lh" => $this->input->post('tgl_lh', true),
			"hubungan" => $this->input->post('hubungan', true),
			"jekel" => $this->input->post('jekel', true),
			"desa" => $this->input->post('desa', true),
			"rt" => $this->input->post('rt', true),
			"rw" => $this->input->post('rw', true),
			"agama" => $this->input->post('agama', true),
			"kawin" => $this->input->post('kawin', true),
			"pekerjaan" => $this->input->post('pekerjaan', true)
		];

		$this->db->where('id_pend', $this->input->post('id'));
		$this->db->update('tb_pdd', $data);
	}

}