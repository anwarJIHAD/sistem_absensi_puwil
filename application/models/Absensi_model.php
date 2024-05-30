<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Absensi_model extends CI_Model
{
    public $table = 'absen';
    public $id = 'absen.id_absen';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_absen', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getById1($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_pegawai', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function getbya($id)
    {
        $this->db->select('j.*,a.*,p.nama_pegawai');

        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->join('pegawai p', 'a.id_pegawai = p.id_pegawai', 'inner');
        $this->db->where('a.id_absen', $id);
        $query = $this->db->get();
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->row_array();
        }
        return $data;
    }
    public function getByIdj($id)
    {
        $this->db->select('j.*,a.*,p.nama_pegawai');

        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->join('pegawai p', 'a.id_pegawai = p.id_pegawai', 'inner');
        $this->db->where('a.id_jadwal_absensi', $id)
        ;

        $query = $this->db->get();
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    public function getByIdj1($id)
    {
        $this->db->select('j.*,a.*,p.nama_pegawai');

        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->join('pegawai p', 'a.id_pegawai = p.id_pegawai', 'inner');
        $this->db->where('a.id_pegawai', $id)
        ;

        $query = $this->db->get();
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    public function getByIdj2($id)
    {
        $this->db->select('j.*,a.*,p.nama_pegawai');

        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->join('pegawai p', 'a.id_pegawai = p.id_pegawai', 'inner');
        $this->db->where('a.id_jadwal_absensi', $id);

        $query = $this->db->get();
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    public function getByIdj_()
    {
        $this->db->select('j.*,a.*,p.nama_pegawai');

        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->join('pegawai p', 'a.id_pegawai = p.id_pegawai', 'inner');

        $query = $this->db->get();
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    public function getByIdja($id, $ida)
    {
        $this->db->select('j.*,a.*,p.nama_pegawai');

        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->join('pegawai p', 'a.id_pegawai = p.id_pegawai', 'inner');
        $this->db->where('a.id_jadwal_absensi', $id)
        ;
        $this->db->where('a.id_pegawai', $ida);

        $query = $this->db->get();
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function hadir_pagi($year, $month)
    {
        $this->db->select('j.*,a.*');
        $start_date = date('Y-m-01', strtotime($year . '-' . $month . '-01'));
        $end_date = date('Y-m-t', strtotime($year . '-' . $month . '-01'));
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);
        $this->db->where('a.absen_pagi !=', '');
        $this->db->where('a.absen_pagi !=', 'off');

        return $this->db->count_all_results();
    }

    public function hadir_siang($year, $month)
    {
        $this->db->select('j.*,a.*');
        $start_date = date('Y-m-01', strtotime($year . '-' . $month . '-01'));
        $end_date = date('Y-m-t', strtotime($year . '-' . $month . '-01'));
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);    
        $this->db->where('a.absen_siang !=', '');
        $this->db->where('a.absen_siang !=', 'off');

        return $this->db->count_all_results();
    }

    public function hadir_sore($year, $month)
    {
        $this->db->select('j.*,a.*');
        $start_date = date('Y-m-01', strtotime($year . '-' . $month . '-01'));
        $end_date = date('Y-m-t', strtotime($year . '-' . $month . '-01'));
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);
        $this->db->where('a.absen_sore !=', '');
        $this->db->where('a.absen_sore !=', 'off');

        return $this->db->count_all_results();
    }
    public function alfa_pagi1($year, $month)
    {
        $this->db->select('j.*,a.*');
        $start_date = date('Y-m-01', strtotime($year . '-' . $month . '-01'));
        $end_date = date('Y-m-t', strtotime($year . '-' . $month . '-01'));
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);
        $this->db->where('a.absen_pagi', '');
        // $this->db->or_where_in('a.absen_pagi', 'off');
        return $this->db->count_all_results();
    }
    public function alfa_siang1($year, $month)
    {
        $this->db->select('j.*,a.*');
        $start_date = date('Y-m-01', strtotime($year . '-' . $month . '-01'));
        $end_date = date('Y-m-t', strtotime($year . '-' . $month . '-01'));
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);
        $this->db->where('a.absen_siang', '');
        // $this->db->or_where_in('a.absen_siang', 'off');
        return $this->db->count_all_results();
    }
    public function alfa_sore1($year, $month)
    {
        $this->db->select('j.*,a.*');
        $start_date = date('Y-m-01', strtotime($year . '-' . $month . '-01'));
        $end_date = date('Y-m-t', strtotime($year . '-' . $month . '-01'));
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);
        $this->db->where('a.absen_sore', '');
        // $this->db->or_where_in('a.absen_sore', 'off');
        return $this->db->count_all_results();
    }

    public function alfa_pagi2($year, $month)
    {
        $this->db->select('j.*,a.*');
        $start_date = date('Y-m-01', strtotime($year . '-' . $month . '-01'));
        $end_date = date('Y-m-t', strtotime($year . '-' . $month . '-01'));
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);
        // $this->db->where('a.absen_pagi', '');
        $this->db->where('a.absen_pagi', 'off');
        return $this->db->count_all_results();
    }
    public function alfa_siang2($year, $month)
    {
        $this->db->select('j.*,a.*');
        $start_date = date('Y-m-01', strtotime($year . '-' . $month . '-01'));
        $end_date = date('Y-m-t', strtotime($year . '-' . $month . '-01'));
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);
        // $this->db->where('a.absen_siang', '');
        $this->db->where('a.absen_siang', 'off');
        return $this->db->count_all_results();
    }
    public function alfa_sore2($year, $month)
    {
        $this->db->select('j.*,a.*');
        $start_date = date('Y-m-01', strtotime($year . '-' . $month . '-01'));
        $end_date = date('Y-m-t', strtotime($year . '-' . $month . '-01'));
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);
        // $this->db->where('a.absen_sore', '');
        $this->db->where('a.absen_sore', 'off');
        return $this->db->count_all_results();
    }
    public function get_users_by_date($start_date, $end_date)
    {
        $start_date = date('Y-m-d', strtotime($start_date));
        $end_date = date('Y-m-d', strtotime($end_date));

        $this->db->select('j.*,a.*,p.nama_pegawai');
        $this->db->from('absen a');
        $this->db->join('jadwal_absensi j', 'a.id_jadwal_absensi = j.id_jadwal_absensi', 'inner');
        $this->db->join('pegawai p', 'a.id_pegawai = p.id_pegawai', 'inner');

        $this->db->where('j.tanggal >=', $start_date);
        $this->db->where('j.tanggal <=', $end_date);

        $query = $this->db->get();
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
}