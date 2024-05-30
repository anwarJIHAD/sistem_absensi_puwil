<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Cuti_Model', 'cuti');
    }

    // ... ada kode lain di sini ...
    public function index()
    {
		$id = $this->session->userdata('id_pegawai');
        $this->load->view('pegawai/header');
        $this->load->view('pegawai/index');
        $this->load->view('pegawai/footer');
    }
}