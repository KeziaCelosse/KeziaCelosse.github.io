<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scene extends CI_Controller {

	public function index()
	{
		$data['data_title'] = "Career Information";
		$this->load->view('home/v_home_header');
		$this->load->view('home/v_home_footer');		
		$this->load->view('scene/v_scene_content');
	}

}
