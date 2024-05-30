<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','download'));
	}
	public function index()
	{
		$this->load->view('persyaratan/vw_dokumen');
	}

    public function proses_download()
    {
        force_download('assets/SURAT PERNYATAAN CALON PESERTA DIDIK BARU.pdf',NULL);
    }
}