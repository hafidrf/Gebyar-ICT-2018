<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_model
{
	private $table = 'admin';

	/**
	 * get all data
	 * @return Obj
	 */
	public function get()
	{
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function insert()
	{
		$this->db->where('email', 'ict-admin@ict2018.uin-malang.ac.id');
		$account = $this->db->get($this->table)->row();

		if (! $account){
			$data = array(
						'email' => 'ict-admin@ict2018.uin-malang.ac.id',
						'password' =>  password_hash('ict2018gakdipasswordkok', PASSWORD_DEFAULT),
					);
			$this->db->insert($this->table, $data);
			return true;
		}else{
			return false;
		}	
	}

	/**
	 * [getUserLogin description]
	 * @param  string $email 
	 * @return Obj
	 */
	public function getUserLogin($email)
	{
		$this->db->where('email', $email);
		return $this->db->get($this->table)->row();

	}
}