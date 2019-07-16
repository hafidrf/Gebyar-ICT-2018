<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
	{
		parent::__construct();
		if (! $this->session->userdata('logged_in') == 'user'){
			redirect(base_url('login'));
		}
		$this->load->model('users');
		$this->load->model('pembayaran');
		$this->load->model('proposal');
		$this->load->model('pendaftaran');
		
	}
	
	/**
	 * Default method
	 */
	public function index()
	{	
		$data = $this->users->getFullPendaftaran($this->session->id);
		
		if ($data === null) {
			$data = $this->users->getPendaftaran($this->session->id);
		}

		return view('users.index', array('data' => $data));
	}

	/**
	 * Show page upload pembayaran.
	 * 
	 */
	
	public function pagePembayaran()
	{
		$csrf = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$pembayaran = $this->pembayaran->getStatusPembayaran($this->session->id);
		return view('users.pembayaran', array(
			'csrf' => $csrf,
			'pembayaran' => $pembayaran
		));
	}

	/**
	 * Submit konfirmasi pembayaran.
	 */
	public function submitPembayaran()
	{
		$file = "pembayaran_" . $this->session->id . "_" . time();
		$flash_error = null;
		$flash_sukses = null;

		$config = array(
			'upload_path' => "./uploads/pembayaran/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => false,
			'max_size' => "2048000", // 2 MB(2048 Kb),
			'file_name' => $file,
		);

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('pembayaran')) {
			$flash_error = $this->session->set_flashdata('error', $this->upload->display_errors());
		} else {
			// upload
			$file = $this->upload->data();
			$file = $file['orig_name'];
			$data = array(
				'user_id' => $this->session->id,
				'bukti_transfer' => $file,
				'status' => 0
			);
			
			$this->pembayaran->insert($data);
			$this->session->set_flashdata('sukses', '<p>Bukti pembayaran berhasil diupload, silahkan tunggu konfirmasi admin.</p>');
		}

		return redirect(base_url('user/konfirmasi-pembayaran'));
	}

	/**
	 * Submit konfirmasi pembayaran.
	 */
	public function submitProposal()
	{
		$file = "proposal_" . $this->session->id . "_" . time();
		$flash_error = null;
		$flash_sukses = null;

		$config = array(
			'upload_path' => "./uploads/proposal/",
			'allowed_types' => "doc|docx|pdf",
			'overwrite' => false,
			'file_name' => $file,
		);

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('pembayaran')) {
			$flash_error = $this->session->set_flashdata('error', $this->upload->display_errors());
		} else {
			// upload
			$file = $this->upload->data();
			$file = $file['orig_name'];
			$data = array(
				'user_id' => $this->session->id,
				'proposal' => $file,
			
			);
			
			$this->proposal->insert($data);
			$this->session->set_flashdata('sukses', '<p>Bukti pembayaran berhasil diupload, silahkan tunggu konfirmasi admin.</p>');
		}

		return redirect(base_url('user/unggah-proposal'));
	}

	/**
	 * [unggahProposal description]
	 * @return [type] [description]
	 */
	public function unggahProposal()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->pendaftaran->getById($id);
		$data['proposal'] = $this->proposal->getProposal($id);
		$this->load->helper('form');
		$id = $this->session->userdata('id');
		$status_pembayaran = $this->pembayaran->getStatusPembayaran($id);
		if ($status_pembayaran) {
			if ($status_pembayaran->status == '0' ) {
				$data['status'] = 'unconfirmed';

			}else{
				$data['status'] = 'confirmed';
			}
		}else{
			$data['status'] = 'not-yet-paid';
		}
		
		
		return view('users.upload-proposal', $data);
	}

	public function unggahVideo()
	{
		$id = $this->session->userdata('id');
		$data['user'] = $this->pendaftaran->getById($id);
		$this->load->helper('form');
		return view('users.upload-video', $data);
	}

	public function submitVideo()
	{
		$id = $this->session->userdata('id');
		$link = $this->input->post('link_video', true);
		$this->pendaftaran->updateLink($id, $link);
		redirect(base_url('user/unggah-video'));
	}

	public function hubungiPanitia()
	{
		return view('users.hubungi-panitia');
	}
	
}
