<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengajuanCuti extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in2();
        $this->load->model('Pegawai_Model', 'pegawai');
        $this->load->model('Cuti_Model', 'cuti');

    }

    public function index()
    {

    }

    public function verifikasi_terima($id)
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
			$this->cuti->update(['id_cuti' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Kelulusan siswa berhasil di ubah!</div>');
			redirect('admin/cuti/terima');
		}
	}
    public function verifikasi_tolak($id)
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
            $this->cuti->update(['id_cuti' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Kelulusan siswa berhasil di ubah!</div>');
            redirect('admin/cuti/tolak');
        }
    }
    public function verifikasi_belum($id)
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
            $this->cuti->update(['id_cuti' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Kelulusan siswa berhasil di ubah!</div>');
            redirect('admin/cuti/belum_diverifikasi');
        }
    }


}