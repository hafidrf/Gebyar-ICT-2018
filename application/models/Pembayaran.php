<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_model
{
    private $table = 'pembayaran';

    /**
     * Insert pembayaran
     * @param array $data
     */
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    /**
     * get all data
     * @return Obj
     */
    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    /**
     * get status pembayaran by user_id
     */
    public function getStatusPembayaran($userId)
    {
        $this->db->select('status');
        $this->db->where('user_id', $userId);
        return $this->db->get($this->table)->row();
    }

    /**
     * [konfirmasiPembayaran description]
     * @return [type] [description]
     */
    public function konfirmasiPembayaran($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', 1);
        $this->db->update($this->table);
        return $this->db->affected_rows();
    }

    /**
     * [batalKonfirmasiPembayaran description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function batalKonfirmasiPembayaran($id)
    {
        $this->db->where('id', $id);
        $this->db->set('status', 0);
        $this->db->update($this->table);
        return $this->db->affected_rows();
    }
}