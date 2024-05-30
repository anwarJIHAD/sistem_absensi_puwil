<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prestasi_Model extends CI_Model
{
    public $table = 'prestasi';
    public $id = 'prestasi.id_prestasi';
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
        $this->db->where('id_prestasi',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function update($data, $where)
    {
        $this->db->update($this->table, $data, array ('id_prestasi' => $where));
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