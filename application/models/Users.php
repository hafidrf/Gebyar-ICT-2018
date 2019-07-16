<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_model
{
	private $table = 'users';

	/**
	 * get all data
	 * @return Obj
	 */
	public function get()
	{
		$this->db->order_by('id', 'desc');
		$query = $this->db->get($this->table);
		return $query->result();
	}

	/**
	 * [insert batch]
	 * @param  array $data 
	 * @return affected rows 
	 */
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function getUserLogin($email)
	{
		$this->db->where('email', $email);
		return $this->db->get($this->table)->row();

	}

	public function getDataPendaftar()
	{
		$this->db->order_by('users.id', 'desc');
		$this->db->select(
			'users.email, users.nama, pendaftaran.no_telp, pendaftaran.nama_tim, pendaftaran.anggota_1, pendaftaran.anggota_2, pendaftaran.judul_aplikasi, kategori_lomba.nama_kategori'
		);
		$this->db->from('users');
		$this->db->join('pendaftaran', 'pendaftaran.user_id = users.id');
		$this->db->join('kategori_lomba', 'pendaftaran.kategori_id = kategori_lomba.id');
		return $this->db->get()->result();
	}
	
	public function getDataPembayaran()
	{
		$this->db->order_by('users.id', 'desc');
		$this->db->select(
			'pembayaran.bukti_transfer, pembayaran.status, users.email, users.nama, pendaftaran.*, kategori_lomba.nama_kategori, pembayaran.id AS id_pembayaran'
			);
		$this->db->from('pembayaran');
		$this->db->join('users', 'pembayaran.user_id = users.id');
		$this->db->join('pendaftaran', 'pembayaran.user_id = pendaftaran.user_id');
		$this->db->join('kategori_lomba', 'pendaftaran.kategori_id = kategori_lomba.id');
		return $this->db->get()->result();
	}

	public function getFullPendaftaran($user_id)
	{
		$query = $this->db->query('SELECT users.*, pendaftaran.*, kategori_lomba.nama_kategori, pembayaran.bukti_transfer, pembayaran.status FROM users INNER JOIN pendaftaran ON users.id = pendaftaran.user_id INNER JOIN kategori_lomba ON pendaftaran.kategori_id = kategori_lomba.id INNER JOIN pembayaran ON users.id = pembayaran.user_id WHERE users.id = ?', array($user_id));
		return $query->row();
	}

	public function getPendaftaran($user_id)
	{
		$query = $this->db->query('SELECT users.*, pendaftaran.*, kategori_lomba.nama_kategori FROM users INNER JOIN pendaftaran ON users.id = pendaftaran.user_id INNER JOIN kategori_lomba ON pendaftaran.kategori_id = kategori_lomba.id WHERE users.id = ?', array($user_id));
		return $query->row();
	}

}