<?php  

class Kategori_lomba extends CI_Model {

	private $table = 'kategori_lomba';

	/**
	 * get all data
	 * @return Obj
	 */
	public function get()
	{
		$query = $this->db->get($this->table);
		return $query->result();
	}

}
