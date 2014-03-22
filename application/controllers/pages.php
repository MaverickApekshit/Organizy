<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		//form handlers
		$this->load->helper('form');
		$this->load->library('form_validation');

	}

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter of page title
		$this->load->helper('url'); //form helper
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/end_body_scripts', $data);
	}
}