<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Virtual extends CI_Controller {

	public function index()
	{
		$data['data_title'] = "Career Information";
		$this->load->view('themes/v_job', $data);
	}
	
	public function tour()
	{
		$data['data_title'] = "Career Information";
		$data['data_url'] = "https://app.lapentor.com/sphere/expo-1651220231?scene=626b9f6e72bec16a333e4545";
		$this->load->view('themes/v_iframe', $data);
	}

}
