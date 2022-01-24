<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendatang extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->database();
		$this->load->model('Pendatang_model');
		$this->load->library('form_validation');
	}

	public function index() {

		$data['pendatang'] = $this->Pendatang_model->joinTbpdd()->result(); 

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/pendatang/data_pendatang', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) {
		$this->Pendatang_model->hapusDataPendatang($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Pendatang');
	}

	public function tambah() {
		$data['penduduk'] = $this->Pendatang_model->lihatDataPenduduk();

		// echo '$penduduk["nama"]','<br>';

		// var_dump($data);
		// die;
			
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('nama_datang', 'Nama_datang', 'required');
		$this->form_validation->set_rules('jekel', 'Jekel', 'required');
		$this->form_validation->set_rules('tgl_datang', 'Tgl_datang', 'required');
		$this->form_validation->set_rules('rt', 'Rt', 'required');
		$this->form_validation->set_rules('rw', 'Rw', 'required');
		$this->form_validation->set_rules('pelapor', 'Pelapor', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/pendatang/tambah_pendatang', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Pendatang_model->tambahDataPendatang();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Pendatang');
		}
	}

	public function ubah($id) {
		$data['datang'] = $this->Pendatang_model->getPendatangById($id);

		// echo '$penduduk["nama"]','<br>';

		// var_dump($data_penduduk);
		// die;
			
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('nama_datang', 'Nama_datang', 'required');
		$this->form_validation->set_rules('jekel', 'Jekel', 'required');
		$this->form_validation->set_rules('tgl_datang', 'Tgl_datang', 'required');
		$this->form_validation->set_rules('rt', 'Rt', 'required');
		$this->form_validation->set_rules('rw', 'Rw', 'required');
		$this->form_validation->set_rules('pelapor', 'Pelapor', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/pendatang/ubah_pendatang', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Pendatang_model->UbahDataPendatang();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('Pendatang');
		}
	}

	public function olahPendatang() {
		$data['datang'] = $this->Pendatang_model->getAllPendatang();
		// var_dump($data);

		$this->form_validation->set_rules('id', 'Id', 'required');

		// var_dump($data);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_datang', $data);
			$this->load->view('templates/footer');

		} else {

			// $this->Lahir_model->ubahDataLahir();
			// $this->session->set_flashdata('flash', 'Diperbarui');
			// redirect('Lahir');

			$datang = $this->input->post('id', true);
			$data['datang'] = $this->Pendatang_model->getPendatangById($datang);

			// var_dump($data);


			// $this->load->view('templates/header');
			// $this->load->view('templates/navbar');
			// $this->load->view('templates/sidebar');
			$this->load->view('report/cetak_datang', $data);
			// $this->load->view('templates/footer');
		}
	}
}