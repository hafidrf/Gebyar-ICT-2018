<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	/**
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		if (! $this->session->userdata('logged_in') == 'admin'){
			redirect(base_url('ict-login'));
		}
		$this->load->model('Users');
		$this->load->model('pendaftaran');
		$this->load->model('Pembayaran');
		$this->load->model('proposal');
	}

	/**
	 * Default method
	 */
	public function index()
	{	
		$data['pendaftaran'] = $this->Users->getDataPendaftar();
		return view('admins.index', $data);
	}


	public function dataPembayaran()
	{
		$data['pembayaran'] = $this->Users->getDataPembayaran();
		return view('admins.data-pembayaran', $data);
	}

	public function konfirmasiPembayaran($id)
	{
		$konfirmasi = $this->Pembayaran->konfirmasiPembayaran($id);
		if ($konfirmasi) {
			$this->session->set_flashdata( array(
					'btn' => 'success',
					'message' => 'Pembayaran telah terkonfirmasi', 
				));	
		}else{
			$this->session->set_flashdata( array(
					'btn' => 'danger',
					'message' => 'Error something wrong', 
				));	
		}

		redirect(base_url('admin/data-pembayaran'));
	}

	public function batalKonfirmasiPembayaran($id)
	{
		$batal_konfirmasi = $this->Pembayaran->batalKonfirmasiPembayaran($id);
		if ($batal_konfirmasi){
			$this->session->set_flashdata( array(
					'btn' => 'success',
					'message' => 'Konfirmasi telah dibatalkan', 
				));
		}else{
			$this->session->set_flashdata( array(
					'btn' => 'danger',
					'message' => 'Error something wrong', 
				));	
		}
		redirect(base_url('admin/data-pembayaran'));
	}

	public function dataProposal()
	{
		$data['proposal'] = $this->proposal->get();
		return view('admins.data-proposal', $data);
	}

	public function dataVideo()
	{
		$data['video'] = $this->pendaftaran->getDataLink();
		return view('admins.data-video', $data);
	}
}
