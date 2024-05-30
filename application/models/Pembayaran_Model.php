<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_Model extends CI_Model
{
    public $table = 'pembayaran';
    public $id = 'pembayaran.id_bayar';
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
    public function get2($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_siswa', $id);
        $query = $this->db->get();
        return $query->result();
    }
    public function getPembayaranId($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_siswa', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_bayar', $id);
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
    public function jml_lunas()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->where('status', 'lunas');
        return $this->db->get()->num_rows();

    }
    public function deleteBy($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}