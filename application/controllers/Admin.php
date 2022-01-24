<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		// jika user masuk ke url admin tanpa membawa session maka di kembalikan ke awal login
		
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		

		// diganti dengan membuat fungsi pengatasian dan daftarkan ke fungsi helper, dan masukkan ke autoload
		// is_logged_in();
	}
	
	public function index() {
		// $data['title'] = 'Dashboard';
		// $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); // mendapatkan data dari admin dengan email yang dibawa saat login
		// echo 'Selamat datang '.$data['user']['name']; // untuk cek tampilkan namanya

		$this->db->where('status =', 'Ada');
		$query = $this->db->get('tb_pdd');
		$data['penduduk'] = $query->num_rows();

		$this->db->where('komorbid =', 'YA');
		$query = $this->db->get('tb_komorbid');
		$data['komorbid'] = $query->num_rows();

		// $query = $this->db->get('tb_komorbid');
		// $data['komorbid'] = $query->num_rows();

		$this->db->where('jekel =', 'LAKI-LAKI');
		$query = $this->db->get('tb_pdd');
		$data['pend_laki'] = $query->num_rows();

		$this->db->where('jekel =', 'PEREMPUAN');
		$query = $this->db->get('tb_pdd');
		$data['pend_perempuan'] = $query->num_rows();

		$query = $this->db->get('tb_lahir');
		$data['kelahiran'] = $query->num_rows();

		$query = $this->db->get('tb_mendu');
		$data['meninggal'] = $query->num_rows();

		$query = $this->db->get('tb_pindah');
		$data['pindah'] = $query->num_rows();

		$query = $this->db->get('tb_datang');
		$data['pendatang'] = $query->num_rows();

		$this->db->where('covid =', 'YA');
		$query = $this->db->get('tb_komorbid');
		$data['covid'] = $query->num_rows();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
		// echo "wellcome admin";
	}

}
