<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in2();

		$this->load->model('Auth_Model', 'calon');
		$this->load->model('Pegawai_Model');
		$this->load->model('Absensi_model');

	}

	public function index()
	{
		$data = $this->db->get('pegawai');
		$data1['jumlah_pegawai'] = $data->num_rows();
		$data = $this->db->get('jadwal_absensi');
		$data1['jadwal_absensi'] = $data->num_rows();
		$data = $this->db->get('cuti');
		$data1['cuti'] = $data->num_rows();
		$year = '2023'; // Tahun yang Anda tentukan
		$month_1 = '01';
		$month_2 = '02';
		$month_3 = '03';
		$month_4 = '04';
		$month_5 = '05';
		$month_6 = '06';
		$month_7 = '07';
		$month_8 = '08';
		$month_9 = '09';
		$month_10 = '10';
		$month_11 = '11';
		$month_12 = '12';

		#hadir 1
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_1);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_1);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_1);
		$data1['hadir_1'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 2
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_2);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_2);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_2);
		$data1['hadir_2'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 3
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_3);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_3);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_3);
		$data1['hadir_3'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 4
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_4);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_4);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_4);
		$data1['hadir_4'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 5
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_5);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_5);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_5);
		$data1['hadir_5'] = $hadir_pagi + $hadir_siang + $hadir_sore;


		#hadir 6
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_6);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_6);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_6);
		$data1['hadir_6'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 7
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_7);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_7);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_7);
		$data1['hadir_7'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 8
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_8);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_8);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_8);
		$data1['hadir_8'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 9
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_9);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_9);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_9);
		$data1['hadir_9'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 10
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_10);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_10);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_10);
		$data1['hadir_10'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 11
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_11);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_11);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_11);
		$data1['hadir_11'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		#hadir 12
		$hadir_pagi = $this->Absensi_model->hadir_pagi($year, $month_12);
		$hadir_siang = $this->Absensi_model->hadir_siang($year, $month_12);
		$hadir_sore = $this->Absensi_model->hadir_sore($year, $month_12);
		$data1['hadir_12'] = $hadir_pagi + $hadir_siang + $hadir_sore;

		// $data1['absen'] = $this->Absensi_model->get();

		#alfa1
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_1);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_1);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_1);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_1);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_1);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_1);
		$data1['alfa_1'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;
		// var_dump($data1['alfa_1']);
		// die;
		#alfa2
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_2);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_2);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_2);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_2);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_2);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_2);
		$data1['alfa_2'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa3
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_3);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_3);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_3);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_3);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_3);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_3);
		$data1['alfa_3'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa4
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_4);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_4);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_4);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_4);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_4);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_4);
		$data1['alfa_4'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa5
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_5);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_5);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_5);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_5);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_5);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_5);
		$data1['alfa_5'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa6
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_6);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_6);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_6);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_6);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_6);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_1);
		$data1['alfa_6'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa7
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_7);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_7);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_7);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_7);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_7);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_7);
		$data1['alfa_7'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa8
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_8);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_8);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_8);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_8);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_8);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_8);
		$data1['alfa_8'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa9
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_9);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_9);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_9);
		$$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_9);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_9);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_9);
		$data1['alfa_9'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa10
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_10);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_10);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_10);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_10);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_10);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_10);
		$data1['alfa_10'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa11
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_11);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_11);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_11);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_11);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_11);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_11);
		$data1['alfa_11'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;

		#alfa12
		$alfa_pagi1 = $this->Absensi_model->alfa_pagi1($year, $month_12);
		$alfa_siang1 = $this->Absensi_model->alfa_siang1($year, $month_12);
		$alfa_sore1 = $this->Absensi_model->alfa_sore1($year, $month_12);
		$alfa_pagi2 = $this->Absensi_model->alfa_pagi2($year, $month_12);
		$alfa_siang2 = $this->Absensi_model->alfa_siang2($year, $month_12);
		$alfa_sore2 = $this->Absensi_model->alfa_sore2($year, $month_12);
		$data1['alfa_12'] = $alfa_pagi1 + $alfa_siang1 + $alfa_sore1 + $alfa_pagi2 + $alfa_siang2 + $alfa_sore2;



		// var_dump($data1['jumlah_pegawai']);
		// die;
		$this->load->view('admin/header', $data1);
		$this->load->view('admin/index', $data1);
		$this->load->view('admin/footer', $data1);

	}


}