<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MpdfController extends CI_Controller {

	public function index()
	{
		$data = $this->load->view('mpdf_v');
	}

	public function printPDF()
	{
		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('hasilPrint', [], TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	}

}