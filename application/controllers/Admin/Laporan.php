<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Pegawai_Model', 'pegawai');
        $this->load->model('Cuti_Model', 'cuti');
        $this->load->model('Absensi_model');
        $this->load->model('Jadwal_absensi_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'halaman cetak laporan';
        $this->load->view("admin/header", $data);
        $this->load->view('admin/laporan/vw_laporan_absensi', $data);
        $this->load->view('admin/footer', $data);

    }
    public function cetak()
    {
        $data['judul'] = 'halaman cetak laporan';

        $data['absen_'] = $this->Absensi_model->getByIdj_();

        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $awal = (string) $tahun . '-' . $bulan . '-01';
        $akhir = (string) $tahun . '-' . $bulan . '-30';
        $data['waktu'] = $bulan . '-' . $tahun;
        $data['absen'] = $this->Absensi_model->get_users_by_date($awal, $akhir);
        // var_dump($data['absen']);
        // die;   
        $this->load->library('pdf3');
        $this->pdf3->setPaper('A4', 'potrait');
        $this->pdf3->set_option('isRemoteEnabled', true);

        $this->pdf3->load_view('admin/laporan/cetak', $data);

    }
}