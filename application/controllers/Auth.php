<?php

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Calon_model', 'calon_model');
		
	}
	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('Pegawai/Home');
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('vw_login');
		} else {
			$this->login();
		}
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$calon = $this->db->get_where('pegawai', ['username' => $username])->row_array();
		if ($calon) {
			if (password_verify($password, $calon['password'])) {
				$data = [
					'nama_pegawai' => $calon['nama_pegawai'],
					'username' => $calon['username'],
					'id_pegawai' => $calon['id_pegawai'],
					'level' => $calon['level'],
				];
				$this->session->set_userdata($data);
				
					redirect('Pegawai/Home');
				
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Belum Tedaftar! </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id_pegawai');
		$this->session->unset_userdata('nama_pegawai');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout! </div>');
		redirect('auth');
	}

}