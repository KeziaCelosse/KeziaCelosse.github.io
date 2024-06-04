<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->session->set_userdata('show', true); 
	}

	public function index()
	{
		//-- check userlogin status
		if(!$this->session->userdata('isUserLoggedIn')){ 
	            redirect(''); 
        } 

		//-- dashboard blank
		//$this->load->view('dashboard/v_default');
		
		//-- dashboard
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_content');
		$this->load->view('home/v_home_footer');
	}
}
