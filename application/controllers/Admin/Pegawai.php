<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Pegawai_Model', 'pegawai');
        $this->load->model('Absensi_model');
        $this->load->model('Cuti_Model');

        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Pegawai";
        $data['pegawai'] = $this->pegawai->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/pegawai/vw_pegawai', $data);
        $this->load->view('admin/footer');

    }
    public function add()
    {
        $data['judul'] = "Halaman Tambah Pegawai";

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
            $this->load->view("admin/header", $data);
            $this->load->view("admin/pegawai/vw_tambah", $data);
            $this->load->view('admin/footer', $data);
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
            $this->pegawai->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pegawai Berhasil Di Tambahkan</div>');
            redirect('Admin/Pegawai');
        }
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


            ];
            $this->pegawai->update(['id_pegawai' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pegawai Berhasil Diubah!</div>');
            redirect('Admin/Pegawai');
        }
    }
    public function detail($id)
    {

        $data['judul'] = "Halaman Detail Siswa";
        $data['calonsiswa'] = $this->calonsiswa->getSiswaId($id);
        $data['pendaftaran'] = $this->pendaftaran->getSiswaId($id);
        $data['orangtua'] = $this->orangtua->getOrtuId($id);
        $data['periodik'] = $this->periodik->getPeriodikId($id);
        $data['dokumen'] = $this->dokumen->getDokumenId($id);
        $data['pembayaran'] = $this->pembayaran->getPembayaranId($id);
        $this->load->view('admin/header');
        $this->load->view('admin/siswa/vw_detail_siswa', $data);
        $this->load->view('admin/footer');

    }
    public function hapus($id)
    {
        $absen = $this->Absensi_model->getById1($id);
        $cuti = $this->Cuti_Model->get2($id);
        if ($absen != null || $cuti != null) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"><i sclass="icon fas fa-check-circle"></i>Data tidak dapat dihapus (sudah berelasi)!</div>');
            redirect('Admin/pegawai');

        } else {
            $this->pegawai->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i>Data Berhasil di hapus!</div>');
            redirect('Admin/pegawai');


        }
        // var_dump($cuti);
        // die;
        // $a = $this->Pegawai_Model->delete($id);

        // $error = $this->db->error();

        // if ($this->Pegawai_Model->delete($id)) {
        //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data tidak dapat dihapus (sudah berelasi)!</div>');
        // } else {
        // }
    }

}