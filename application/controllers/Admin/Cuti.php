<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Pegawai_Model', 'pegawai');
        $this->load->model('Cuti_Model', 'cuti');
        $this->load->library('form_validation');
    }

    // public function index()
    // {
    //     $data['judul'] = "Halaman Data Cuti Pegawai";
    //     $data['pegawai'] = $this->pegawai->get2();
    //     $this->load->view('admin/header', $data);
    //     $this->load->view('admin/cuti/vw_cuti', $data);
    //     $this->load->view('admin/footer');

    // }
    public function terima()
    {
        $data['judul'] = "Halaman Data Pengajuan Cuti Diterima";
        $data['pegawai'] = $this->pegawai->get_terima();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/cuti/vw_terima', $data);
        $this->load->view('admin/footer');
    }

    public function tolak()
    {
        $data['judul'] = "Halaman Data Pengajuan Cuti Ditolak";
        $data['pegawai'] = $this->pegawai->get_tolak();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/cuti/vw_tolak', $data);
        $this->load->view('admin/footer');
    }

    public function belum_diverifikasi()
    {
        $data['judul'] = "Halaman Data Pengajuan Cuti Belum Diverifikasi";
        $data['pegawai'] = $this->pegawai->get_verifikasi();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/cuti/vw_belumdiverifikasi', $data);
        $this->load->view('admin/footer');
    }
    public function hapus($id)
    {
        $this->cuti->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data Cuti Berhasil dihapus!</div>');
        redirect('Admin/Home');
    }
    public function verifikasi($id)
    {

        $data['judul'] = "Halaman Ubah Status";
        $data['pegawai'] = $this->pegawai->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/header", $data);
            $this->load->view("admin/cuti/vw_ubah", $data);
            $this->load->view('admin/footer', $data);
        } else {
            $data = [

                'status' => $this->input->post('status'),
                // 'id_siswa' => $this->session->userdata('id_siswa'),

            ];
            // var_dump($id);die();
            $this->cuti->update(['id_pegawai' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Cuti Pegawai berhasil di ubah!</div>');
            redirect('admin/home');
        }
    }
}