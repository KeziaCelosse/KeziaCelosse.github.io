<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class World extends CI_Controller {

	public function index()
	{
		$data['data_title'] = "World";
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');		
	}

	public function room()
	{
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');		
		$this->load->view('world/v_world_room');
	}

	public function gallery()
	{
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');		
		$this->load->view('world/v_world_gallery');
	}

}
