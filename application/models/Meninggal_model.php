<?php

class Meninggal_model extends CI_Model {

	public function joinTbpdd(){
		$this->db->select('*');
		$this->db->from('tb_pdd');
		$this->db->join('tb_mendu','tb_mendu.id_pdd = tb_pdd.id_pend');      
		$query = $this->db->get();
		return $query;
	}

	public function hapusDataMeninggal($id) {
		$this->db->delete('tb_mendu', ['id_mendu' => $id]);
	}

	public function lihatDataPenduduk(){
		// $query = $this->db->get_where('tb_pdd', ['status' => 'Ada']);
		// return $query;

		$data = $this->db->query("SELECT id_pend,nama,nik,rt,rw,no_kk from tb_pdd where status='Ada'");
		return $data->result_array();
	}

	public function tambahDataMeninggal() {
		$data = [
			"id_pdd" => $this->input->post('pend', true),
			"tgl_mendu" => $this->input->post('tgl_mendu', true),
			"sebab" => $this->input->post('sebab', true)
		];

		$this->db->insert('tb_mendu', $data);
	}

	public function getMeninggalById($id) {
		return $this->db->get_where('tb_mendu', ['id_mendu' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function updateDataPenduduk() {
		// $data = array(
	 //        'status' => 'Meninggal'
		// );
		// $this->db->replace('table', $data);

		// var_dump($pend);
		// $sql_ubah = $this->db->query("UPDATE tb_pdd SET status='Meninggal' WHERE id_pend=$pend");

		// $this->db->where('emp_no', $id);
	 //    $this->db->update($table_name, array('title' => $title));
	 //    return true;

		$data = [
			"id_pdd" => $this->input->post('pend', true)
		];

		$this->db->set('status', 'Meninggal');
		$this->db->where('id_pend', $data['id_pdd']);
		$this->db->update('tb_pdd');
	}


	public function UbahDataMeninggal() {
		$data = [
			"id_pdd" => $this->input->post('pend', true),
			"tgl_mendu" => $this->input->post('tgl_mendu', true),
			"sebab" => $this->input->post('sebab', true)
		];

		$this->db->where('id_mendu', $this->input->post('id'));
		$this->db->update('tb_mendu', $data);
	}

	public function getAllMeninggal() {
		return $this->db->get('tb_mendu')->result_array();
	}

}
