<?php

class PintuMasuk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model', 'Auth_Model');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('Admin/Home');
        }

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('vw_pintumasuk');
        } else {
            $this->login();
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pengguna = $this->db->get_where('pengguna', ['username' => $username])->row_array();
        if ($pengguna) {
            if (password_verify($password, $pengguna['password'])) {
                $data = [
                    'nama_pengguna' => $pengguna['nama_pengguna'],
                    'username' => $pengguna['username'],
                    'id_pengguna' => $pengguna['id_pengguna'],
                    'level' => $pengguna['level'],
                ];
                $this->session->set_userdata($data);
                if($pengguna['level']=='admin'){
                    redirect('Admin/Home');
                }else if ($pengguna['level'] == 'kadis') {
                    redirect('Kadis/Home');
                }

                // redirect('PanitiaPSB/Home');

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('pintumasuk');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Belum Tedaftar! </div>');
            redirect('pintumasuk');
        }
    }

    // public function login()
    // {
    // 	$username = $this->input->post('username');
    // 	$password = $this->input->post('password');

    // 	$user = $this->auth_model->read_by_username($username);

    // 	if ($user) {

    // 		if (password_verify($password, $user->password)) {

    // 			$session = [
    // 				'id_pengguna' => $user->id_pengguna,
    // 				'nama_pengguna' => $user->nama_pengguna,
    // 				'username' => $user->username,
    // 				'hp_pengguna' => $user->hp_pengguna
    // 			];
    // 			$this->session->set_userdata($session);
    // 			redirect('Admin/Home');

    // 		} else {
    // 			$this->session->set_flashdata('error', 'Wrong password!');
    // 			redirect('');

    // 		}
    // 	} else {
    // 		$this->session->set_flashdata('error', 'Wrong username!');
    // 		redirect('');
    // 		var_dump($user);
    // 		die();
    // 	}
    // }

    public function logout()
    {
        $this->session->unset_userdata('id_pengguna');
        $this->session->unset_userdata('nama_pengguna');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout! </div>');
        redirect('PintuMasuk');
    }

}