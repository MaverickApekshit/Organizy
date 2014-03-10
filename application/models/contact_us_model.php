<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us_model extends CI_Model
{
	public function form_mailer()
	{
		$this->load->library('Email');
		$this->email->set_newline("\r\n");
		$this->email->from($this->input->post('email'),$this->input->post('name'));
		$this->email->to('apekshit33@gmail.com');
		$this->email->bcc('duaanu601@gmail.com');
		$this->email->subject($this->input->post('subject'));
		$this->email->message($this->input->post('message'));
		$this->email->send();
		echo $this->email->print_debugger();
	} 
}