<?php

class Komorbid_model extends CI_Model {

	public function joinTbpdd(){
		$this->db->select('*');
		$this->db->from('tb_pdd');
		$this->db->join('tb_komorbid','tb_komorbid.id_pdd = tb_pdd.id_pend');      
		$query = $this->db->get();
		return $query;
	}

	public function hapusDataKomorbid($id) {
		$this->db->delete('tb_komorbid', ['id_komorbid' => $id]);
	}

	public function lihatDataPenduduk(){
		// $query = $this->db->get_where('tb_pdd', ['status' => 'Ada']);
		// return $query;

		$data = $this->db->query("SELECT id_pend,nama,nik,no_kk,rt,rw from tb_pdd where status='Ada'");
		return $data->result_array();
	}

	public function tambahDataKomorbid() {
		// var_dump($this->input->post('tgl_indi', true));
		// die;
		if ($this->input->post('gejala', true) == "DIABETES" || $this->input->post('gejala', true) == "DBD" || $this->input->post('gejala', true) == "TEKANAN DARAH TINGGI" || $this->input->post('gejala', true) == "PERNYAKIT JANTUNG" || $this->input->post('gejala', true) == "MASALAH PADA PARU-PARU") {
			$st_komor = "YA";
		} else {
			$st_komor = "TIDAK";
		}

		// var_dump($st_komor);
		// die;

		if ($this->input->post('tgl_komor', true) == "" && $this->input->post('tgl_indi', true) == "" ) {
			$data = [
				"id_pdd" => $this->input->post('pend', true),
				"tgl_komor" => null,
				"komorbid" => $st_komor,
				"gejala" => $this->input->post('gejala', true),
				"resiko" => $this->input->post('resiko', true),
				"tgl_indi" => null,
				"covid" => $this->input->post('covid', true)
			];

			// var_dump($data);
			// die;

			$this->db->insert('tb_komorbid', $data);
		} elseif ($this->input->post('tgl_komor', true) != "" && $this->input->post('tgl_indi', true) == "" ) {
			$data = [
				"id_pdd" => $this->input->post('pend', true),
				"tgl_komor" => $this->input->post('tgl_komor', true),
				"komorbid" => $st_komor,
				"gejala" => $this->input->post('gejala', true),
				"resiko" => $this->input->post('resiko', true),
				"tgl_indi" => null,
				"covid" => $this->input->post('covid', true)
			];

			// var_dump($data);
			// die;

			$this->db->insert('tb_komorbid', $data);
		} elseif ($this->input->post('tgl_komor', true) == "" && $this->input->post('tgl_indi', true) != "" ) {
			$data = [
				"id_pdd" => $this->input->post('pend', true),
				"tgl_komor" => null,
				"komorbid" => $st_komor,
				"gejala" => $this->input->post('gejala', true),
				"resiko" => $this->input->post('resiko', true),
				"tgl_indi" => $this->input->post('tgl_indi', true),
				"covid" => $this->input->post('covid', true)
			];

			// var_dump($data);
			// die;

			$this->db->insert('tb_komorbid', $data);
		} elseif ($this->input->post('tgl_komor', true) != "" && $this->input->post('tgl_indi', true) != "" ) {
			$data = [
				"id_pdd" => $this->input->post('pend', true),
				"tgl_komor" => $this->input->post('tgl_komor', true),
				"komorbid" => $st_komor,
				"gejala" => $this->input->post('gejala', true),
				"resiko" => $this->input->post('resiko', true),
				"tgl_indi" => $this->input->post('tgl_indi', true),
				"covid" => $this->input->post('covid', true)
			];

			// var_dump($data);
			// die;

			$this->db->insert('tb_komorbid', $data);
		}
	}

	public function getKomorbidById($id) {
		return $this->db->get_where('tb_komorbid', ['id_komorbid' => $id])->row_array(); // jik hanya row() tanpa array maka akan menghasilkan object
	}

	public function ubahDataKomorbid() {
		// if ($this->input->post('tgl_indi', true) == "0000-00-00") {
		// 	$tgl_indi = "";
		// }

		// $data = [
		// 	"id_pdd" => $this->input->post('pend', true),
		// 	"tgl_komor" => $this->input->post('tgl_komor', true),
		// 	"gejala" => $this->input->post('gejala', true),
		// 	"resiko" => $this->input->post('resiko', true),
		// 	"tgl_indi" => $this->input->post('tgl_indi', true),
		// 	"covid" => $this->input->post('covid', true)
		// ];

		// $this->db->where('id_komorbid', $this->input->post('id'));
		// $this->db->update('tb_komorbid', $data);

		if ($this->input->post('gejala', true) == "DIABETES" || $this->input->post('gejala', true) == "DBD" || $this->input->post('gejala', true) == "TEKANAN DARAH TINGGI" || $this->input->post('gejala', true) == "PERNYAKIT JANTUNG" || $this->input->post('gejala', true) == "MASALAH PADA PARU-PARU") {
			$st_komor = "YA";
		} else {
			$st_komor = "TIDAK";
		}

		// var_dump($st_komor);
		// die;

		if ($this->input->post('tgl_komor', true) == "" && $this->input->post('tgl_indi', true) == "" ) {
			$data = [
				"id_pdd" => $this->input->post('pend', true),
				"tgl_komor" => null,
				"komorbid" => $st_komor,
				"gejala" => $this->input->post('gejala', true),
				"resiko" => $this->input->post('resiko', true),
				"tgl_indi" => null,
				"covid" => $this->input->post('covid', true)
			];

			// var_dump($data);
			// die;

		$this->db->where('id_komorbid', $this->input->post('id'));
		$this->db->update('tb_komorbid', $data);
		} elseif ($this->input->post('tgl_komor', true) != "" && $this->input->post('tgl_indi', true) == "" ) {
			$data = [
				"id_pdd" => $this->input->post('pend', true),
				"tgl_komor" => $this->input->post('tgl_komor', true),
				"komorbid" => $st_komor,
				"gejala" => $this->input->post('gejala', true),
				"resiko" => $this->input->post('resiko', true),
				"tgl_indi" => null,
				"covid" => $this->input->post('covid', true)
			];

			// var_dump($data);
			// die;

		$this->db->where('id_komorbid', $this->input->post('id'));
		$this->db->update('tb_komorbid', $data);
		} elseif ($this->input->post('tgl_komor', true) == "" && $this->input->post('tgl_indi', true) != "" ) {
			$data = [
				"id_pdd" => $this->input->post('pend', true),
				"tgl_komor" => null,
				"komorbid" => $st_komor,
				"gejala" => $this->input->post('gejala', true),
				"resiko" => $this->input->post('resiko', true),
				"tgl_indi" => $this->input->post('tgl_indi', true),
				"covid" => $this->input->post('covid', true)
			];

			// var_dump($data);
			// die;

		$this->db->where('id_komorbid', $this->input->post('id'));
		$this->db->update('tb_komorbid', $data);
		} elseif ($this->input->post('tgl_komor', true) != "" && $this->input->post('tgl_indi', true) != "" ) {
			$data = [
				"id_pdd" => $this->input->post('pend', true),
				"tgl_komor" => $this->input->post('tgl_komor', true),
				"komorbid" => $st_komor,
				"gejala" => $this->input->post('gejala', true),
				"resiko" => $this->input->post('resiko', true),
				"tgl_indi" => $this->input->post('tgl_indi', true),
				"covid" => $this->input->post('covid', true)
			];

			// var_dump($data);
			// die;

		$this->db->where('id_komorbid', $this->input->post('id'));
		$this->db->update('tb_komorbid', $data);
		}
	}

	public function joinTbpdd1($id){  
		// echo $id;
		// $query = $this->db->get_where('tb_pdd', ['id_pend' => $id]);
		// $data = $this->db->query("SELECT id_pend,nama,nik,no_kk from tb_pdd where id_pend='".$id."'")->result();
		// $query = $this->db->get_where('tb_pdd', array('id_pend' => $id))->row_array();
		// return $query;

		// $q = $this->db->join('tb_komorbid','tb_komorbid.id_pdd = tb_pdd.id_pend')->get_where('tb_pdd', array('id_pend' => $id));
		// return $q;

		$data = $this->db->query("SELECT id_pdd,gejala,resiko,covid FROM 
		tb_komorbid join tb_pdd on id_pdd=id_pend WHERE id_komorbid='".$id."'");
		return $data->result_array();

	}
}