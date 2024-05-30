<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_Model extends CI_Model
{
    public $table = 'pegawai';
    public $id = 'pegawai.id_pegawai';
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
    public function get2()
    {
        $this->db->select('p.*, c.tgl_mulai_cuti,c.tgl_selesai_cuti,c.jml_hari_cuti,c.alasan_cuti,c.status');
        $this->db->from('pegawai p');
        $this->db->join('cuti c', 'c.id_pegawai = p.id_pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function getPegawaiId($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_pegawai', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_pegawai', $id);
        $query = $this->db->get();
        return $query->row_array();
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
    public function get_terima()
    {
        $query = 'SELECT * FROM pegawai p, cuti c where p.id_pegawai = c.id_pegawai and c.status = "Diterima" GROUP BY c.id_pegawai';
        return $this->db->query($query)->result_array();
    }

    public function get_tolak()
    {
        $query = 'SELECT * FROM pegawai p, cuti c where p.id_pegawai = c.id_pegawai and c.status = "Ditolak" GROUP BY c.id_pegawai';
        return $this->db->query($query)->result_array();
    }

    public function get_verifikasi()
    {
        $query = 'SELECT * FROM pegawai p, cuti c where p.id_pegawai = c.id_pegawai and c.status = "Belum Diverifikasi" GROUP BY c.id_pegawai';
        return $this->db->query($query)->result_array();
    }

    public function get_status_id($id)
    {
        $query = 'SELECT status from pendaftaran where id_siswa = "' . $id . '"';
        return $this->db->query($query)->result();
    }

}