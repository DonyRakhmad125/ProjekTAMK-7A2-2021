<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komorbid extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->database();
		$this->load->model('Komorbid_model');
		$this->load->library('form_validation');
	}

	public function index() {

		$data['komorbid'] = $this->Komorbid_model->joinTbpdd()->result(); 

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/komorbid/data_komorbid', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) {
		$this->Komorbid_model->hapusDataKomorbid($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Komorbid');
	}

	public function tambah() {
		$data['penduduk'] = $this->Komorbid_model->lihatDataPenduduk();

		// echo '$penduduk["nama"]','<br>';

		// var_dump($data);
		// die;
			
		$this->form_validation->set_rules('pend', 'Penduduk', 'required');
		$this->form_validation->set_rules('tgl_komor', 'Tgl_komor', '');
		$this->form_validation->set_rules('gejala', 'Gejala', 'required');
		$this->form_validation->set_rules('resiko', 'Resiko', 'required');
		$this->form_validation->set_rules('tgl_indi', 'Tgl_indi', '');
		$this->form_validation->set_rules('covid', 'Covid', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/komorbid/tambah_komorbid', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Komorbid_model->tambahDataKomorbid();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Komorbid');
		}
	}

	public function ubah($id) {
		$data['komorbid'] = $this->Komorbid_model->getKomorbidById($id);
		// $data['percobaan'] = $this->Komorbid_model->joinTbpdd1($id); 

		// var_dump($data);
		// echo "<br>";
		// var_dump($data_penduduk);
		// die;
			
		$this->form_validation->set_rules('pend', 'Penduduk', 'required');
		$this->form_validation->set_rules('tgl_komor', 'Tgl_komor', '');
		$this->form_validation->set_rules('gejala', 'Gejala', 'required');
		$this->form_validation->set_rules('resiko', 'Resiko', 'required');
		$this->form_validation->set_rules('tgl_indi', 'Tgl_indi', '');
		$this->form_validation->set_rules('covid', 'Covid', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/komorbid/ubah_komorbid', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Komorbid_model->ubahDataKomorbid();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('Komorbid');
		}
	}

	public function olahKomorbid() {

		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		// var_dump($data);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_komorbid');
			$this->load->view('templates/footer');

		} else {

			$data['bulan'] = $this->input->post('bulan', true);
			$data['tahun'] = $this->input->post('tahun', true);

			$this->load->view('report/laporan_komorbid', $data);
		}
	}

	public function olahCovid() {

		$this->form_validation->set_rules('bulan', 'Bulan', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');

		// var_dump($data);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_covid');
			$this->load->view('templates/footer');

		} else {

			$data['bulan'] = $this->input->post('bulan', true);
			$data['tahun'] = $this->input->post('tahun', true);

			$this->load->view('report/laporan_covid', $data);
		}
	}
}