<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CalonSiswa_Model extends CI_Model
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
    
    public function get2()
    {
        $this->db->select('c.*, d.pas_foto as foto, p.alamat as alamat,p.status');
        $this->db->from('calonsiswa c');
        $this->db->join('dokumen d','d.id_siswa = c.id_siswa','left');
        $this->db->join('pendaftaran p','p.id_siswa = c.id_siswa','left');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get3()
    {
        $this->db->select('c.*, pb.gambar as bukti, pb.nominal,pb.status, p.alamat as alamat');
        $this->db->from('calonsiswa c');
        $this->db->join('pembayaran pb', 'pb.id_siswa = c.id_siswa', 'left');
        $this->db->join('pendaftaran p', 'p.id_siswa = c.id_siswa', 'left');
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
        $this->db->where('id_siswa', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
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
        $this->db->delete($this->table,);
        return $this->db->affected_rows();
    }
    public function jml_siswa(){
        $this->db->select('*');
        $this->db->from('calonsiswa');
        return $this->db->get()->num_rows();

    }

    public function get_terima()
    {
        $query = 'SELECT * FROM calonsiswa c, dokumen d, pendaftaran p where c.id_siswa = p.id_siswa and p.status = "Lulus" GROUP BY p.id_siswa';
        return $this->db->query($query)->result_array();
    }

    public function get_tolak()
    {
        $query = 'SELECT * FROM calonsiswa c, dokumen d, pendaftaran p where c.id_siswa = p.id_siswa and p.status = "Tidak Lulus" GROUP BY p.id_siswa';
        return $this->db->query($query)->result_array();
    }

    public function get_verifikasi()
    {
        $query = 'SELECT * FROM calonsiswa c, dokumen d, pendaftaran p where c.id_siswa = p.id_siswa and p.status = "Belum Diverifikasi" GROUP BY p.id_siswa';
        return $this->db->query($query)->result_array();
    }

    public function get_status_id($id)
    {
        $query = 'SELECT status from pendaftaran where id_siswa = "'.$id.'"';
        return $this->db->query($query)->result();
    }

    public function get_bayar_id($id)
    {
        $query = 'SELECT status from pembayaran where id_siswa = "' . $id . '"';
        return $this->db->query($query)->result();
    }


    public function cetak()
    {
        $id = $this->session->userdata('id_siswa');
        $this->db->select('c.*, p.alamat as alamat,p.status as status');
        $this->db->from('calonsiswa c');
        $this->db->join('pendaftaran p', 'p.id_siswa = c.id_siswa');
        $this->db->where('c.id_siswa', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    

}