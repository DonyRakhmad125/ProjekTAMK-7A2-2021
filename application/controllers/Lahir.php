<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lahir extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->database();
		$this->load->model('Lahir_model');
		$this->load->library('form_validation');
	}

	public function index() {

		$data['lahir'] = $this->Lahir_model->joinTbpdd()->result(); 

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/lahir/data_lahir', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) {
		$this->Lahir_model->hapusDataLahir($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Lahir');
	}

	public function tambah() {
		// dibawah memakai variable penduduk karena mengambil penduduk untuk data nama, nik, kk untuk ibu bayi
		$data['penduduk'] = $this->Lahir_model->lihatDataPenduduk();
		// jadi diatas hanya untuk mengambil id_pend yang nanti diletakkan di form sebagai value karena data menggunakan join

		// echo '$penduduk["nama"]','<br>';

		// var_dump($data);
		// die;
			
		$this->form_validation->set_rules('nama_bayi', 'Nama_bayi', 'required');
		$this->form_validation->set_rules('tempat_lhr', 'Tempat_lhr', 'required');
		$this->form_validation->set_rules('tgl_lhr', 'Tgl_lhr', 'required');
		$this->form_validation->set_rules('jekel', 'Jekel', 'required');
		$this->form_validation->set_rules('pend', 'Pend', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/lahir/tambah_lahir', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Lahir_model->tambahDataLahir();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Lahir');
		}
	}

	public function ubah($id) {
		$data['lahir'] = $this->Lahir_model->getLahirById($id);

		// echo '$penduduk["nama"]','<br>';

		// var_dump($data_penduduk);
		// die;
			
		$this->form_validation->set_rules('nama_bayi', 'Nama_bayi', 'required');
		$this->form_validation->set_rules('tempat_lhr', 'Tempat_lhr', 'required');
		$this->form_validation->set_rules('tgl_lhr', 'Tgl_lhr', 'required');
		$this->form_validation->set_rules('jekel', 'Jekel', 'required');
		$this->form_validation->set_rules('pend', 'Pend', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/lahir/ubah_lahir', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Lahir_model->ubahDataLahir();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('Lahir');
		}
	}

	public function olahLahir() {
		$data['lahir'] = $this->Lahir_model->getAllLahir();
		// var_dump($data);

		$this->form_validation->set_rules('id', 'Id', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_lahir', $data);
			$this->load->view('templates/footer');

		} else {

			// $this->Lahir_model->ubahDataLahir();
			// $this->session->set_flashdata('flash', 'Diperbarui');
			// redirect('Lahir');

			$id_lahir = $this->input->post('id', true);
			$data['lahir'] = $this->Lahir_model->getLahirById($id_lahir);

			// var_dump($data);


			// $this->load->view('templates/header');
			// $this->load->view('templates/navbar');
			// $this->load->view('templates/sidebar');
			$this->load->view('report/cetak_lahir', $data);
			// $this->load->view('templates/footer');
		}
	}
}