<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalAbsensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Jadwal_absensi_model');
        $this->load->model('Absensi_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Jadwal Absensi";
        $data['jadwal_absensi'] = $this->Jadwal_absensi_model->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/jadwal_absensi/vw_jadwal_absensi', $data);
        $this->load->view('admin/footer');

    }
    public function add()
    {
        $data['judul'] = "Halaman Tambah Jadwal Absensis";

        $this->form_validation->set_rules('tgl_jadwal', 'tanggal jadwal absensi', 'required', [
            'required' => 'Tanggal Wajib Diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/jadwal_absensi/vw_tambah_jadwal_absensi', $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'tanggal' => $this->input->post('tgl_jadwal'),
            ];
            $this->Jadwal_absensi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jadwal Absensi Berhasil Ditambahkan</div>');
            redirect('Admin/JadwalAbsensi');
        }
    }
    public function edit($id)
    {
        // var_dump($id);
        // die();
        $data['judul'] = "Halaman Ubah jadwal";
        $data['jadwal'] = $this->Jadwal_absensi_model->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('tgl_jadwal', 'tanggal jadwal absensi', 'required', [
            'required' => 'Tanggal Wajib Diisi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/jadwal_absensi/vw_edit_jadwal_absensi', $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'tanggal' => $this->input->post('tgl_jadwal'),
            ];

            $this->Jadwal_absensi_model->update(['id_jadwal_absensi' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jadwal Absensi Berhasil Di Update</div>');
            redirect('Admin/JadwalAbsensi');
        }
    }
    public function hapus($id)
    {
        $absen = $this->Absensi_model->getByIdj2($id);
        if ($absen != null) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"><i sclass="icon fas fa-check-circle"></i>Data tidak dapat dihapus (sudah berelasi)!</div>');
            redirect('Admin/JadwalAbsensi');

        } else {
            $this->Jadwal_absensi_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i>Data Berhasil di hapus!</div>');
            redirect('Admin/JadwalAbsensi');



        }

        // $this->Jadwal_absensi_model->delete($id);
        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jadwal Absensi Berhasil Di Hapus</div>');

    }

}