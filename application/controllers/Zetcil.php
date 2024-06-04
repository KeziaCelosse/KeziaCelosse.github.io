<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Zetcil extends CI_Controller
{

	public function index()
	{
		$data['data_title'] = $this->config->item('website_title');
		$data['data_url'] = "https://app.lapentor.com/sphere/expo-1651220231?scene=626b9f6e72bec16a333e4545";

		//-- Zetcil coder default
		//$this->load->view('themes/v_default', $data);
		//$this->load->view('themes/v_main', $data);

		//-- HTML5 Landing Page Template
		//$this->load->view('themes/v_apps', $data);
		$this->load->view('themes/v_polo', $data);
		//$this->load->view('themes/v_learn', $data);
		//$this->load->view('themes/v_iframe', $data);
		//$this->load->view('themes/v_dimension', $data);
		//$this->load->view('themes/v_multipurpose', $data);
	}
}
