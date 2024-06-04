<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		
	}

	public function crud_output($output = null)
	{
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');
		$this->load->view('data/v_data.php',(array)$output);
	}

	public function index()
	{
		$this->crud_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function users()
	{
		
		//-- check userlogin status
		if(!$this->session->userdata('isUserLoggedIn')){ 
	            redirect(''); 
        } 
		try
		{
			//-- 1. Initialization
			$crud = new grocery_CRUD();

			$crud->set_language($this->config->item('languages'));
			$crud->set_theme($this->config->item('table_style'));

			//-- 2. Load Table
			$crud->set_table('users');
			$crud->set_subject('Data User');

			//-- 3. Render
			$output = $crud->render();
			$this->crud_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function leaderboard()
	{
		//-- check userlogin status
		if(!$this->session->userdata('isUserLoggedIn')){ 
	            redirect(''); 
        } 
		try
		{
			//-- 1. Initialization
			$crud = new grocery_CRUD();

			$crud->set_language($this->config->item('languages'));
			$crud->set_theme($this->config->item('table_style'));

			//-- 2. Load Table
			$crud->set_table('leaderboard');
			$crud->set_subject('Data Leaderboard');

			//-- 3. Render
			$output = $crud->render();
			$this->crud_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function progress()
	{
		//-- check userlogin status
		if(!$this->session->userdata('isUserLoggedIn')){ 
	            redirect(''); 
        } 
		try
		{
			//-- 1. Initialization
			$crud = new grocery_CRUD();

			$crud->set_language($this->config->item('languages'));
			$crud->set_theme($this->config->item('table_style'));

			//-- 2. Load Table
			$crud->set_table('progress');
			$crud->set_subject('Data Progress');

			//-- 3. Render
			$output = $crud->render();
			$this->crud_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}	
}
