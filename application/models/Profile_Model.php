<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profile_Model extends CI_Model
{
    public $table = 'calonsiswa';
    public $id = 'calonsiswa.id_siswa';
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
     public function getSiswaId($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_siswa', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_siswa',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function update($data, $where)
    {
        $this->db->update($this->table, $data, array('id_siswa' => $where));

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
}