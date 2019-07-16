<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_lomba');
		$this->load->model('Users');
		$this->load->model('Pendaftaran');
		$this->load->model('Admin');
		$this->load->helper('form');
	    $this->load->library('form_validation');
		
	}

	/**
	 * Default method
	 */
	public function index()
	{	
		
	}

	/**
	 * form register 
	 * @return void
	 */
	public function register()
	{
	    $this->form_validation->set_error_delimiters('<div  class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button></div>');
	    $this->form_validation->set_rules('nama_tim', 'Nama tim', 'required');
	    $this->form_validation->set_rules('nama_captain', 'Nama captain', 'required');
	    
	    $this->form_validation->set_rules('kategori_lomba', 'Kategori lomba', 'required');
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
	    $this->form_validation->set_rules('no_telp', 'No Telpon', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Konfirmasi password', 'required|matches[password]');
	   	$this->form_validation->set_message('required', '{field} tidak boleh kosong');
	   	$this->form_validation->set_message('matches', 'Password tidak sama');
    	if ($this->input->post('kategori_lomba', true) != 1) {
    		$this->form_validation->set_rules('judul_aplikasi', 'Judul aplikasi', 'required');
    	}

	    if ($this->form_validation->run() == FALSE){
            $data['kategori_lomba'] = $this->Kategori_lomba->get();
			return view('auth.register', $data);
	    }else{

            $nama_tim = $this->input->post('nama_tim', true);
            $anggota1 = $this->input->post('anggota1', true);
            $anggota1 = $this->input->post('anggota1', true);
            $anggota2 = $this->input->post('anggota2', true);
            $kategori_lomba = $this->input->post('kategori_lomba', true);
            $judul_aplikasi = $this->input->post('judul_aplikasi', true);
            
            $nama = $this->input->post('nama_captain', true);
            $no_telp = $this->input->post('no_telp', true);
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            
            $user = array(
		            	'nama' => $nama,
		            	'email' => $email,
		            	'password' => $password_hash,
	            	);

			$user_id = $this->Users->insert($user);

            $pendaftaran = array(
			            	'user_id' =>  $user_id,
			            	'nama_tim' => $nama_tim,
			            	'anggota_1' => $anggota1,
			            	'anggota_2' => $anggota2,
			            	'kategori_id' => $kategori_lomba,
			            	'judul_aplikasi' => $judul_aplikasi,
			            	'no_telp' => $no_telp
			            );
			$pendaftaran = $this->Pendaftaran->insert($pendaftaran); 

			if ($pendaftaran) {
				$data = array(
							'id' => $pendaftaran,
			    			'nama' => $nama, 
			    			'email' => $email,
			    			'logged_in' => 'user', 
			    		);
				$this->session->set_userdata($data);
				redirect(base_url('user/dashboard'));
			}else{
				$data['error'] = "Registrasi error silahkan kontak panitia lebih lanjut";
	    		$this->session->set_flashdata($data);
				redirect(base_url('registrasi'));
			}
	    }
	}

	/**
	 * [login description]
	 * @return [type] [description]
	 */
	public function login()
	{
	    $this->form_validation->set_error_delimiters('<div  class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button></div>');

	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('password', 'Password', 'required');

	    if ($this->form_validation->run() == FALSE){
	    	return view('auth.login');
	    }else{
	    	$email = $this->input->post('email', true);
	    	$password = $this->input->post('password', true);
	    	$password_hash = password_hash($password, PASSWORD_DEFAULT);
	    	$user = $this->Users->getUserLogin($email);

	    	if (password_verify($password, $user->password)) {

	    		$data = array(
							'id' => $user->id,
			    			'nama' => $user->nama, 
			    			'email' => $user->email,
			    			'logged_in' => 'user', 
			    		);
	    		$this->session->set_userdata($data);
	    		redirect(base_url('/user/dashboard'));
	    	}else{
	    		$data['error'] = "User not found";
	    		$this->session->set_flashdata($data);
	    		redirect(base_url('/login'));

	    	}
	    }
	}

	/**
	 * [login_admin description]
	 * @return [type] [description]
	 */
	public function login_admin()
	{
		$this->form_validation->set_error_delimiters('<div  class="alert alert-warning alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button></div>');

	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('password', 'Password', 'required');

	    if ($this->form_validation->run() == FALSE){
	    	return view('auth.login-admin');
	    }else{
	    	$email = $this->input->post('email', true);
	    	$password = $this->input->post('password', true);
	    	$password_hash = password_hash($password, PASSWORD_DEFAULT);
	    	$user = $this->Admin->getUserLogin($email);

	    	if (password_verify($password, $user->password)) {

	    		$data = array(
							'id' => $user->id,
			    			'email' => $user->email,
			    			'logged_in' => 'admin', 
			    		);
	    		$this->session->set_userdata($data);
	    		redirect(base_url('/admin/dashboard'));
	    	}else{
	    		$data['error'] = "User not found";
	    		$this->session->set_flashdata($data);
	    		redirect(base_url('/ict-login'));

	    	}
	    }
	}
	
	/**
	 * [insert_admin description]
	 * @return [type] [description]
	 */
	public function store_admin()
	{
		$insert_account = $this->Admin->insert();
		redirect(base_url('ict-login'));
	}

	/**
	 * destroy all session
	 * @return void
	 */
	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}
	
}
