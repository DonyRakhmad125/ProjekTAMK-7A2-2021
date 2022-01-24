<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->library('form_validation'); 
	}

	public function index() {

		// set rules
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		// validasi data login
		if ($this->form_validation->run() == false) {
			// $data['title'] = 'Simdes - Login';
			$this->load->view('auth/auth_header');
			$this->load->view('auth/login');
			$this->load->view('auth/auth_footer');
		} else {
			$this->_login();
		}
	}

	// method login
	private function _login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// lakukan query
		$user = $this->db->get_where('user', ['username' => $username])->row_array(); // pakai query CI, yang tabel mana, email sama dengan input email, dan dibuat satu baris
		
		// var_dump($user);
		// die; // untuk mematikan agar script tidak berjalan semuanya 

		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				// cek passwor apakah sama antara di input dan pada tabel
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'email' => $user['email']
					];
					$this->session->set_userdata($data);
					redirect('admin');
				} else {
					// jika passwordnya salah
					$this->session->set_flashdata('flash', 'Password salah!');
					// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>'); // bikin session flashdata sebelum di ridirect menunjukkan error password salah, penambahan nama dan pesannya menggunakan bootstrap
					redirect('auth');
				}

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>'); // bikin session flashdata sebelum di ridirect menunjukkan error email belum aktif, penambahan nama dan pesannya menggunakan bootstrap
				redirect('auth');
			}

		} else {
			$this->session->set_flashdata('flash', 'User tidak terdaftar!');
			// $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>'); // bikin session flashdata sebelum di ridirect menunjukkan error login, penambahan nama dan pesannya menggunakan bootstrap
			redirect('auth');
		}
	}

	// fungsi logout masih menggunakan url
	public function logout() {
		$this->session->unset_userdata('username'); // membersihkan session
		$this->session->unset_userdata('email');
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>'); // pesan logout
		redirect('auth'); // selelai ke halaman login
	}
}