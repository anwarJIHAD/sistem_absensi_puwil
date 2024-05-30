<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Cuti_Model', 'cuti');
        
        $this->load->library('form_validation');

    }


    public function index()
    {

        // $data['user'] = $this->db->get_where('calonsiswa', ['id_siswa' => $this->session->userdata('id_siswa')])->row_array();

        $data['cuti'] = $this->cuti->get2($this->session->userdata('id_pegawai'));
		$data['cuti'] = $this->cuti->get();

        $this->load->view('pegawai/header', $data);
        $data['judul'] = "Pengajuan Cuti";
        $this->load->view('pegawai/cuti/vw_cuti', $data);
        $this->load->view('pegawai/footer', $data);
    }

    public function add()
    {
        $data['judul'] = "Halaman Pengajuan Cuti";

        $this->form_validation->set_rules('tgl_mulai_cuti', 'Tanggal Mulai Cuti', 'required', [
            'required' => 'Jenis Kelamin Calon Siswa Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("pegawai/header", $data);
            $this->load->view("pegawai/cuti/vw_tambah", $data);
            $this->load->view('pegawai/footer', $data);
        } else {
            $data = [
                'tgl_mulai_cuti' => $this->input->post('tgl_mulai_cuti'),
                'tgl_selesai_cuti' => $this->input->post('tgl_selesai_cuti'),
                'jml_hari_cuti' => $this->input->post('jml_hari_cuti'),
                'alasan_cuti' => $this->input->post('alasan_cuti'),
                'id_pegawai' => $this->session->userdata('id_pegawai'),

            ];
            $this->cuti->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Cuti Berhasil Di Tambahkan</div>');
            redirect('Pegawai/Cuti');
        }
    }
    public function edit($id)
    {
        // var_dump($id);
        // die();
        $data['judul'] = "Halaman Ubah";
        $data['cuti'] = $this->cuti->getById($id);
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('tgl_mulai_cuti', 'Tanggal Mulai Cuti', 'required', [
            'required' => 'Tanggal Mulai Cuti Wajib di isi'
        ]);

        //$this->form_validation->set_rules('gambar',  'Gambar', 'required', [
        //'required' => 'Gambar Wajib di isi'
        //]);

        if ($this->form_validation->run() == false) {
            $this->load->view("pegawai/header", $data);
            $this->load->view("pegawai/cuti/vw_ubah", $data);
            $this->load->view('pegawai/footer', $data);
        } else {
            $data = [
                'tgl_mulai_cuti' => $this->input->post('tgl_mulai_cuti'),
                'tgl_selesai_cuti' => $this->input->post('tgl_selesai_cuti'),
                'jml_hari_cuti' => $this->input->post('jml_hari_cuti'),
                'alasan_cuti' => $this->input->post('alasan_cuti'),
                'id_pegawai' => $this->session->userdata('id_pegawai'),

            ];

            $this->cuti->update(['id_cuti' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengajuan Cuti Berhasil Diubah!</div>');
            redirect('Pegawai/Cuti');
        }
    }
}