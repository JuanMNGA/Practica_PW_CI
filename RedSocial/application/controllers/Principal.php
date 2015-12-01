<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('navegacion');
		$this->load->view('pan_izquierdo');
		$this->load->view('pan_central');
		$this->load->view('pan_derecho');
	}
	
	public function loadp1()
	{
		$this->load->view('navegacion');
		$this->load->view('principal');
	}
	
	public function loadp2()
	{
		$this->load->view('navegacion');
		$this->load->view('principal2');
	}

}
