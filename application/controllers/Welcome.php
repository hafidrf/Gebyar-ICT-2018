<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * 
	 */
	public function __cunstruct()
	{
		parent::__cunstruct();
		$this->load->helper('download');
		$this->load->helper('url');
		$this->load->library('encrypt');
		
	}
	/**
	 * Default method
	 */
	public function index()
	{	
		return view('welcome');
	}

	public function cdc()
	{
		return view('cdc');
	}

	public function cinema()
	{
		return view('cinema');
	}
	
	public function mikrodrone()
	{
		return view('mikrodrone');
	}
	
}
