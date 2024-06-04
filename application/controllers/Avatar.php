<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avatar extends CI_Controller {

	public function index()
	{
		$data['data_title'] = "Avatar";
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');		
	}

	public function create()
	{
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');		
		$this->load->view('avatar/v_avatar_create');
	}

	public function model()
	{
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');		
		$this->load->view('avatar/v_avatar_model');
	}

	public function sticker()
	{
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');		
		$this->load->view('avatar/v_avatar_sticker');
	}

	public function download()
	{
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');		
		$this->load->view('avatar/v_avatar_download');
	}
	
	public function get(){ 
		echo $_COOKIE['avatar'];
	}

}
