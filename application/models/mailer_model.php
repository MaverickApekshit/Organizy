<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailer_model extends CI_Model
{
	public function form_mailer()
	{
		$to_address = "apekshit33@gmail.com";

		if ($this->input->post('to'))
		{
			$to_address = $this->input->post('to');
		}

		$from_address = $this->input->post('email');
		$sender_name = $this->input->post('name');
		$email_subject = $this->input->post('subject');
		$email_message = $this->input->post('message');

		$this->load->library('Email');
		$this->email->set_newline("\r\n");
		$this->email->from($from_address,$sender_name);
		$this->email->to($to_address);
		$this->email->subject($email_subject);
		$this->email->message($email_message);
		$this->email->send();
		
		//echo $this->email->print_debugger();

		return "true";
	} 
}