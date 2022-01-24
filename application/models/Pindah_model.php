<?php

class Pindah_model extends CI_Model {
	public function getAllPindah() {
		/*
		// mengambil data dari tabel mahasiswa
		$query = $this->db->get('mahasiswa');

		// menampilkan object dalam berntuk array
		return $query->result_array();
		*/

		// bisa juga membuat method chaining/ berantai dari pada bikin seperti diatas, cara ini pada ci
		// ini dinamakan query builder
		// return $this->db->get('tb_pindah')->result_array();

		// $this->db->select('tb_pindah.*, tb_pdd.nama'); /**untuk memilih tabel user dan kolom jenis pada tabel gender */
  // 		$this->db->from('tb_pindah'); *untuk memilih tabel user untuk dihubungkan ke tabel gender 
  // 		$this->db->join('tb_pdd', 'tb_pdd.id_pend = tb_pindah.id_pdd'); /**untuk menggabungkan 2 tabel tadi */
  // 		$query = $this->db->get();
		// return $query->result();

		$this->db->select('*');
		$this->db->from('tb_pindah');   
		$query = $this->db->get();
		return $query;
	}

	public function joinTbpdd(){
		$this->db->select('*');
		$this->db->from('tb_pdd');
		$this->db->join('tb_pindah','tb_pindah.id_pdd = tb_pdd.id_pend');      
		$query = $this->db->get();
		return $query;
	}

	// function join2table(){
	// 	$this->db->select('*');
	// 	$this->db->from('simpanan');
	// 	$this->db->join('anggota','anggota.id_anggota = simpanan.id_anggota');      
	// 	$query = $this->db->get();
	// 	return $query;
	// }

	public function hapusDataPindah($id) {
		$this->db->delete('tb_pindah', ['id_pindah' => $id]);
	}

	public function lihatDataPenduduk(){
		// $query = $this->db->get_where('tb_pdd', ['status' => 'Ada']);
		// return $query;

		$data = $this->db->query("SELECT id_pend,nama,nik,rt,rw,no_kk from tb_pdd where status='Ada'");
		return $data->result_array();
	}

	public function tambahDataPindah() {
		$data = [
			"id_pdd" => $this->input->post('pend', true),
			"tgl_pindah" => $this->input->post('tgl_pindah', true),
			"kec_pindah" => $this->input->post('kec_pindah', true),
			"alasan" => $this->input->post('alasan', true)
		];

		$this->db->insert('tb_pindah', $data);
	}

	public function getPindahById($id) {
		return $this->db->get_where('tb_pindah', ['id_pindah' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function updateDataPenduduk() {
		// $data = array(
	 //        'status' => 'Pindah'
		// );
		// $this->db->replace('table', $data);

		// var_dump($pend);
		// $sql_ubah = $this->db->query("UPDATE tb_pdd SET status='Pindah' WHERE id_pend=$pend");

		// $this->db->where('emp_no', $id);
	 //    $this->db->update($table_name, array('title' => $title));
	 //    return true;

		$data = [
			"id_pdd" => $this->input->post('pend', true)
		];

		$this->db->set('status', 'Pindah');
		$this->db->where('id_pend', $data['id_pdd']);
		$this->db->update('tb_pdd');
	}

	public function ubahDataPindah() {
		$data = [
			"id_pdd" => $this->input->post('pend', true),
			"tgl_pindah" => $this->input->post('tgl_pindah', true),
			"kec_pindah" => $this->input->post('kec_pindah', true),
			"alasan" => $this->input->post('alasan', true)
		];

		$this->db->where('id_pindah', $this->input->post('id'));
		$this->db->update('tb_pindah', $data);
	}

	// public function joinTbpdd1($id){ 
	// 	$data = $this->db->query("SELECT * FROM 
	// 	tb_lahir join tb_pdd on id_pdd=id_pend WHERE id_lahir='".$id."'");
	// 	return $data->result_array();
	// }
}