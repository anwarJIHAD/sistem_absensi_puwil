<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Pegawai_Model', 'pegawai');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data Pegawai";
        $data['pegawai'] = $this->pegawai->getPegawaiId($this->session->userdata('id_pegawai'));
        $this->load->view('pegawai/header');
        $this->load->view('pegawai/pegawai/vw_pegawai', $data);
        $this->load->view('pegawai/footer');

    }
    function edit($id)
    {
        $data['judul'] = "Halaman Ubah";
        $data['pegawai'] = $this->pegawai->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required', [
            'required' => 'Nama Pegawai Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]',
            [
                'min_length' => 'Password Terlalu Pendek',
                'required' => 'password Pengguna Wajib di isi'
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->load->view("pegawai/header", $data);
            $this->load->view("pegawai/pegawai/vw_ubah", $data);
            $this->load->view('pegawai/footer', $data);
        } else {
            $data = [
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'jabatan' => $this->input->post('jabatan'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'id_pegawai' => $this->session->userdata('id_pegawai'),

            ];
            $this->pegawai->update(['id_pegawai' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pegawai Berhasil Diubah!</div>');
            redirect('Pegawai/Pegawai');
        }
    }

}