<?php

class Calon_model extends CI_Model
{
	private $_table = "pegawai";
	const SESSION_KEY = 'id_pengguna';

	public function rules()
	{
		return [
			[
				'field' => 'username',
				'label' => 'Username or Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$query = $this->db->get($this->_table);
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!password_verify($password, $user->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata(['id_pengguna' => $user->id_pegawai, 'nama_pengguna' => $user->nama_lengkap]);


		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id_pegawai' => $user_id]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	

	public function read_by_username($username){
		// $query = "SELECT * FROM `pengguna` WHERE username = '".$username."'";
		$this->db->where('username', $username);
		$this->db->get($this->_table);
		return $this->db->last_query();
		// die();
	}

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
        $this->db->where('id_pegawai', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

	public function getsiswabyid($id)
	{
		$query = 'select * from pendaftaran where id_pegawai = "'.$id.'"';		
		return $this->db->query($query)->result();
	}
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->_table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

}