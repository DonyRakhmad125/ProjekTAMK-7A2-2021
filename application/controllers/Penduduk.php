<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->database();
		$this->load->model('Penduduk_model');
		$this->load->library('form_validation');
	}

	public function index() {

		$data['penduduk'] = $this->Penduduk_model->getAllPenduduk();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/penduduk/data_penduduk', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) {
		$this->Penduduk_model->hapusDataPenduduk($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Penduduk');
	}

	public function detail($id) {

		$data['penduduk'] = $this->Penduduk_model->getPendudukById($id);

		// var_dump($data);
		// die;
		
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/penduduk/detail_penduduk', $data);
		$this->load->view('templates/footer');
	}

	public function tambah() {
			
		$this->form_validation->set_rules('no_kk', 'No_kk', 'required');
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tempat_lh', 'Tempat_lh', 'required');
		$this->form_validation->set_rules('tgl_lh', 'Tgl_lh', 'required');
		$this->form_validation->set_rules('hubungan', 'Hubungan', 'required');
		$this->form_validation->set_rules('jekel', 'Jekel', 'required');
		$this->form_validation->set_rules('desa', 'Desa', 'required');
		$this->form_validation->set_rules('rt', 'Rt', 'required');
		$this->form_validation->set_rules('rw', 'Rw', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('kawin', 'Kawin', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/penduduk/tambah_penduduk');
			$this->load->view('templates/footer');
		
		} else {

			$this->Penduduk_model->tambahDataPenduduk();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Penduduk');
		}

		// $this->Penduduk_model->tambahDataPenduduk();
		// $this->session->set_flashdata('flash', 'Ditambahkan');
		// redirect('Penduduk');

	}

	public function ubah($id) {
		$data['penduduk'] = $this->Penduduk_model->getPendudukById($id);
		
		$this->form_validation->set_rules('no_kk', 'No_kk', 'required');
		$this->form_validation->set_rules('nik', 'Nik', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('tempat_lh', 'Tempat_lh', 'required');
		$this->form_validation->set_rules('tgl_lh', 'Tgl_lh', 'required');
		$this->form_validation->set_rules('hubungan', 'Hubungan', 'required');
		$this->form_validation->set_rules('jekel', 'Jekel', 'required');
		$this->form_validation->set_rules('desa', 'Desa', 'required');
		$this->form_validation->set_rules('rt', 'Rt', 'required');
		$this->form_validation->set_rules('rw', 'Rw', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('kawin', 'Kawin', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');

		// var_dump($data);
		// die;

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/penduduk/ubah_penduduk', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Penduduk_model->ubahDataPenduduk();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('Penduduk');
		}

	}

	public function olahPenduduk() {
		$data['penduduk'] = $this->Penduduk_model->getAllPenduduk();
		// var_dump($data);

		$this->form_validation->set_rules('id', 'Id', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_domisili', $data);
			$this->load->view('templates/footer');

		} else {

			// $this->Lahir_model->ubahDataLahir();
			// $this->session->set_flashdata('flash', 'Diperbarui');
			// redirect('Lahir');

			$pend = $this->input->post('id', true);
			$data['penduduk'] = $this->Penduduk_model->getPendudukById($pend);

			// var_dump($data);


			// $this->load->view('templates/header');
			// $this->load->view('templates/navbar');
			// $this->load->view('templates/sidebar');
			$this->load->view('report/cetak_domisili', $data);
			// $this->load->view('templates/footer');
		}
	}

}