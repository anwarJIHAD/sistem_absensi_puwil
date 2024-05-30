<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Cuti_Model', 'cuti');
        $this->load->model('Absensi_model');
        $this->load->model('Jadwal_absensi_model');
        $this->load->model('Pegawai_Model');
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('form_validation');

    }

    public function coba()
    {

        // $data['user'] = $this->db->get_where('calonsiswa', ['id_siswa' => $this->session->userdata('id_siswa')])->row_array();
        // $data['cuti'] = $this->cuti->get2($this->session->userdata('id_pegawai'));

        $data['cuti'] = $this->cuti->get();
        $data['judul'] = "Pengajuan Cuti";
        $this->load->view('pegawai/header', $data);

        $this->load->view('pegawai/cuti/vw_cuti', $data);
        $this->load->view('pegawai/footer', $data);

    }
    public function index()
    {
        $data['judul'] = "Halaman Jadwal Absensi";
        $data['jadwal_absensi'] = $this->Jadwal_absensi_model->get();
        $data['absen'] = $this->Jadwal_absensi_model->get();
        $this->load->view('pegawai/header', $data);
        $this->load->view('pegawai/absen/vw_absen', $data);
        $this->load->view('pegawai/footer');

    }
    public function detail($id)
    {
        $id_pegawai = (int) $this->session->userdata('id_pegawai');
        $data1 = [
            'id_jadwal_absensi' => (int) $id,
            'id_pegawai' => $id_pegawai,
        ];


        $data['judul'] = "Halaman Data Absensi";
        $data['data_absen'] = $this->Absensi_model->getByIdja($id, $id_pegawai);
        // var_dump($data['data_absen']);
        // die;

        if ($data['data_absen'] == NULL) {
            $this->Absensi_model->insert($data1);
        }
        $data['data_absen1'] = $this->Absensi_model->getByIdja($id, $id_pegawai);

        $data['absen'] = $this->Absensi_model->getByIdj($id);
        // var_dump($data['data_absen1']);
        // die;
        $data['jadwal'] = $data['absen'][0]['tanggal'];

        $data['id_jadwal'] = $id;
        $this->load->view('pegawai/header', $data);
        $this->load->view('pegawai/absen/vw_detail', $data);
        $this->load->view('pegawai/footer');

    }

    //mendapatkan lokasi terkini
    public function get_location()
    {
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $this->session->set_flashdata('lat', $latitude);
        $this->session->set_flashdata('long', $longitude);
    }
    public function hadir_pagi($id)
    {
        $lat = $this->session->flashdata('lat');
        $long = $this->session->flashdata('long');
        // var_dump($long);
        // die;
        $id_absen = (int) $id;
        $data1 = $this->Absensi_model->getbya($id);
        $currentHour = date('H');
        if ($currentHour < 9) {
            if ($currentHour > 7) {
                $data = [
                    'absen_pagi' => date('h:i:s a'),
                    'lokasipagi_long' => $long,
                    'lokasipagi_lang' => $lat,


                ];
                // var_dump($data);
                // die;
                if ($this->Absensi_model->Update(['id_absen' => $id_absen], $data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Absensi HADIRRR!! </div>');
                    redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi pagi sudah habis!!</div>');
                redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi pagi sudah habis!!</div>');
            redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
        }

    }
    public function alfa_pagi($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $id_absen = (int) $id;
        $data1 = $this->Absensi_model->getbya($id);
        $currentHour = date('H');
        if ($currentHour < 9) {
            if ($currentHour > 7) {
                $data = [
                    'absen_pagi' => 'off',

                ];
                // var_dump($data);
                // die;
                if ($this->Absensi_model->Update(['id_absen' => $id_absen], $data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda ALFAA!! </div>');
                    redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi pagi sudah habis!!</div>');
                redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi pagi sudah habis!!</div>');
            redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
        }

    }

    public function hadir_siang($id)
    {
        $lat = $this->session->flashdata('lat');
        $long = $this->session->flashdata('long');
        date_default_timezone_set('Asia/Jakarta');
        $id_absen = (int) $id;
        $data1 = $this->Absensi_model->getbya($id);
        $currentHour = date('H');
        if ($currentHour < 14) {
            if ($currentHour > 12) {
                $data = [
                    'absen_siang' => date('h:i:s a'),
                    'lokasisiang_long' => $long,
                    'lokasisiang_lang' => $lat,
                ];
                // var_dump($data);
                // die;
                if ($this->Absensi_model->Update(['id_absen' => $id_absen], $data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Absensi HADIRRR!! </div>');
                    redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi siang sudah habis!!</div>');
                redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
            }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi siang sudah habis!!</div>');
            redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
        }

    }
    public function alfa_siang($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $id_absen = (int) $id;
        $data1 = $this->Absensi_model->getbya($id);
        $currentHour = date('H');
        if ($currentHour < 14) {
            if ($currentHour > 12) {
                $data = [
                    'absen_siang' => 'off',
                ];
                // var_dump($data);
                // die;
                if ($this->Absensi_model->Update(['id_absen' => $id_absen], $data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Kamu Alfa </div>');
                    redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi siang sudah habis!!</div>');
                redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi siang sudah habis!!</div>');
            redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
        }

    }

    public function hadir_sore($id)
    {
        $lat = $this->session->flashdata('lat');
        $long = $this->session->flashdata('long');
        date_default_timezone_set('Asia/Jakarta');
        $id_absen = (int) $id;
        $data1 = $this->Absensi_model->getbya($id);
        $currentHour = date('H');
        if ($currentHour < 20) {
            if ($currentHour > 16) {
                $data = [
                    'absen_sore' => date('h:i:s a'),
                    'lokasisore_long' => $long,
                    'lokasisore_lang' => $lat,
                ];
                // var_dump($data);
                // die;
                if ($this->Absensi_model->Update(['id_absen' => $id_absen], $data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Absensi HADIRRR!! </div>');
                    redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi sore sudah habis!!</div>');
                redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
            }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi sore sudah habis!!</div>');
            redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
        }

    }
    public function alfa_sore($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $id_absen = (int) $id;
        $data1 = $this->Absensi_model->getbya($id);
        $currentHour = date('H');
        if ($currentHour < 20) {
            if ($currentHour > 16) {
                $data = [
                    'absen_sore' => 'off',
                ];
                // var_dump($data);
                // die;
                if ($this->Absensi_model->Update(['id_absen' => $id_absen], $data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Kamu Alfa </div>');
                    redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi sore sudah habis!!</div>');
                redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
            }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">sesi absensi sore sudah habis!!</div>');
            redirect('Pegawai/Absen/detail/' . $data1['id_jadwal_absensi']);
        }

    }
}