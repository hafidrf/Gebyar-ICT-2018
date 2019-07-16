<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_model
{
	private $table = 'pendaftaran';

	/**
	 * get all data
	 * @return Obj
	 */
	public function get()
	{
		$query = $this->db->get($this->table);
		return $query->result();
	}


	public function getById($id)
	{
		$this->db->where('user_id',$id);
		$query = $this->db->get($this->table);
		return $query->row();
	}

	/**
	 * [insert batch]
	 * @param  array $data 
	 * @return affected rows 
	 */
	public function insert($data)
	{
		$query = $this->db->insert($this->table, $data);
		return $this->db->insert_id();
		
	}

	public function updateLink($id, $link)
	{
		$this->db->where('user_id', $id);
		$this->db->set('link_video', $link);
		$this->db->update($this->table);
		return $this->db->affected_rows();
	}

	public function getDataLink()
	{
		$this->db->select('pendaftaran.*, kategori_lomba.nama_kategori');
		$this->db->where('link_video is NOT NULL', NULL, FALSE);
	  	$this->db->from($this->table);
		$this->db->join('kategori_lomba', 'pendaftaran.kategori_id = kategori_lomba.id');
		$query = $this->db->get();
		return $query->result();
	}

}