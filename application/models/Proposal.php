<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Proposal extends CI_model
{
    private $table = 'proposal';

    public function insert($data)
    {
    	$this->db->insert($this->table, $data);
    	return $this->db->affected_rows();
    }

    public function getProposal($id)
    {
    	$this->db->where('user_id', $id);
    	return $this->db->get($this->table)->row();
    }

    public function get()
    {
        $this->db->select('pendaftaran.nama_tim, pendaftaran.judul_aplikasi, proposal.id, proposal.proposal');
        $this->db->from('proposal');
        $this->db->join('pendaftaran', 'proposal.user_id = pendaftaran.user_id');
        return $this->db->get()->result();
    }
}