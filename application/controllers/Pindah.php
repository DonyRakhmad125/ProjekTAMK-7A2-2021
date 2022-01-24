<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pindah extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->database();
		$this->load->model('Pindah_model');
		$this->load->library('form_validation');
	}

	public function index() {

		// $data['pindah'] = $this->Pindah_model->getAllPindah();

		// $data['anggota'] = $this->Pindah_model->getAllPindah()->result(); 
		$data['pindah'] = $this->Pindah_model->joinTbpdd()->result(); 
		// $data['join_anggota_simpanan'] = $this->anggota_model->data_join2table()->result(); 
		// $this->load->view('anggota/anggotaview',$data);

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('data/pindah/data_pindah', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id) {
		$this->Pindah_model->hapusDataPindah($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Pindah');
	}

	public function tambah() {
		$data['penduduk'] = $this->Pindah_model->lihatDataPenduduk();

		// echo '$penduduk["nama"]','<br>';

		// var_dump($data);
		// die;
			
		$this->form_validation->set_rules('pend', 'Penduduk', 'required');
		$this->form_validation->set_rules('tgl_pindah', 'Tgl_pindah', 'required');
		// $this->form_validation->set_rules('pindah', 'Pindah', 'required');
		$this->form_validation->set_rules('kec_pindah', 'Kec_pindah', 'required');
		$this->form_validation->set_rules('alasan', 'Alasan', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/pindah/tambah_pindah', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Pindah_model->tambahDataPindah();
			$this->Pindah_model->updateDataPenduduk();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Pindah');
		}
	}

	public function ubah($id) {
		$data['pindah'] = $this->Pindah_model->getPindahById($id);

		// echo '$penduduk["nama"]','<br>';

		// var_dump($data_penduduk);
		// die;
			
		$this->form_validation->set_rules('pend', 'Penduduk', 'required');
		$this->form_validation->set_rules('tgl_pindah', 'Tgl_pindah', 'required');
		$this->form_validation->set_rules('kec_pindah', 'Kec_pindah', 'required');
		$this->form_validation->set_rules('alasan', 'Alasan', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('data/pindah/ubah_pindah', $data);
			$this->load->view('templates/footer');
		
		} else {

			$this->Pindah_model->ubahDataPindah();
			// $this->Pindah_model->updateDataPenduduk();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('Pindah');
		}
	}

	public function olahPindah() {
		$data['pindah'] = $this->Pindah_model->getAllPindah();
		// var_dump($data);

		$this->form_validation->set_rules('id', 'Id', 'required');

		// var_dump($data);

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebar');
			$this->load->view('surat/suket_pindah', $data);
			$this->load->view('templates/footer');

		} else {

			// $this->Lahir_model->ubahDataLahir();
			// $this->session->set_flashdata('flash', 'Diperbarui');
			// redirect('Lahir');

			$pindah = $this->input->post('id', true);
			$data['pindah'] = $this->Pindah_model->getPindahById($pindah);

			// var_dump($data);


			// $this->load->view('templates/header');
			// $this->load->view('templates/navbar');
			// $this->load->view('templates/sidebar');
			$this->load->view('report/cetak_pindah', $data);
			// $this->load->view('templates/footer');
		}
	}
}