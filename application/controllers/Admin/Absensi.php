<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Absensi_model');

        $this->load->model('Jadwal_absensi_model');
        $this->load->model('Pegawai_Model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Absensi";
        $data['absen'] = $this->Jadwal_absensi_model->get();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/absen/vw_absen', $data);
        $this->load->view('admin/footer');

    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Data Absensi";
        $data['absen'] = $this->Absensi_model->getByIdj($id);


        if ($data['absen'] != null) {
            $data['jadwal'] = $data['absen'][0]['tanggal'];
        } else {
            $data['jadwal'] = 0;
        }

        $data['id_jadwal'] = $id;
        $this->load->view('admin/header', $data);
        $this->load->view('admin/absen/vw_detail', $data);
        $this->load->view('admin/footer');

    }
    public function add($id_jadwal)
    {
        $data['judul'] = "Halaman Tambah absensi";
        $data['id_jadwal'] = $id_jadwal;
        $data['pegawai'] = $this->Pegawai_Model->get();
        // var_dump($data['pegawai']);
        // die;
        $this->form_validation->set_rules('nama_pegawai', 'nama pegawai harus di inputkan', 'required', [
            'required' => 'Nama Pegawai Wajib Di Inputkan'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/absen/vw_tambah_absen', $data);
            $this->load->view('admin/footer');
        } else {
            $pagi = $this->input->post('absen_pagi');
            $siang = $this->input->post('absen_siang');
            $sore = $this->input->post('absen_sore');
            date_default_timezone_set('Asia/Jakarta');


            if ($pagi == NULL) {
                $pagi = 'off';
            } else {
                $pagi = date('h:i:s a');
            }
            if ($siang == NULL) {
                $siang = 'off';
            } else {
                $siang = date('h:i:s a');
            }
            if ($sore == NULL) {
                $sore = 'off';
            } else {
                $sore = date('h:i:s a');
            }
            $data = [
                'id_pegawai' => $this->input->post('nama_pegawai'),
                'id_jadwal_absensi' => $this->input->post('id_jadwal'),
                'absen_pagi' => $pagi,
                'absen_siang' => $siang,
                'absen_sore' => $sore,


            ];

            $this->Absensi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Absensi Berhasil Ditambahkan</div>');
            redirect('Admin/Absensi/detail/' . $id_jadwal);
        }
    }
    public function edit($id)
    {
        $data['judul'] = 'halaman edit data absensi';
        $data['absen'] = $this->Absensi_model->getbya($id);
        $data['pegawai'] = $this->Pegawai_Model->get();
        // var_dump($data['absen']['nama_pegawai']);
        // die;
        $this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'required', [
            'required' => 'Nama Pegawai Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/absen/vw_edit_absen', $data);
            $this->load->view('admin/footer');
        } else {
            $pagi = $this->input->post('absen_pagi');
            $siang = $this->input->post('absen_siang');
            $sore = $this->input->post('absen_sore');
            date_default_timezone_set('Asia/Jakarta');


            if ($pagi == NULL) {
                $pagi = 'off';
            } else {
                $pagi = date('h:i:s a');
            }
            if ($siang == NULL) {
                $siang = 'off';
            } else {
                $siang = date('h:i:s a');
            }
            if ($sore == NULL) {
                $sore = 'off';
            } else {
                $sore = date('h:i:s a');
            }
            $data = [
                'id_pegawai' => (int) $this->input->post('nama_pegawai'),
                'id_jadwal_absensi' => (int) $this->input->post('id_jadwal'),
                'absen_pagi' => $pagi,
                'absen_siang' => $siang,
                'absen_sore' => $sore,
                'lokasi1' => 'di inputkan admin',
                'lokasi2' => 'di inputkan admin',
                'lokasi3' => 'di inputkan admin',

            ];

            $id_jadwal = (int) $this->input->post('id_jadwal');
            $id_ = (int) $id;
            // var_dump($data);
            // die;
            if ($this->Absensi_model->update(['id_absen' => $id_], $data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Absensi Berhasil di edit! </div>');
                redirect('Admin/Absensi/detail/' . $id_jadwal);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Absensi gagal di edit! </div>');
                redirect('Admin/Absensi/detail/' . $id_jadwal);
            }

        }
    }
    public function hapus($id)
    {
        $data = $this->Absensi_model->getbya($id);
        $id_jadwal = (int) $data['id_jadwal_absensi'];

        $this->Absensi_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Absensi Berhasil Di Hapus</div>');
        redirect('Admin/Absensi/detail/' . $id_jadwal);
    }

}