<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mailer_model'); //load modal
		$this->load->helper('form'); //library for dealing with forms
		$this->load->library('form_validation'); //library for dealing with form validation
	}

	public function validator()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('subject','Subject','required');
		$this->form_validation->set_rules('message','Message','required');
		if($this->form_validation->run()===FALSE)
		{
			$data['title'] = ucfirst('contact_us'); // Capitalize the first letter
			$this->load->helper('url');
			$this->load->view('templates/header', $data);
			$this->load->view('pages/contact_us', $data);
			$this->load->view('templates/footer', $data);
			$this->load->view('templates/end_body_scripts', $data);
		}
		else
		{
							
			$this->mailer_model->form_mailer();
		}
	}
}