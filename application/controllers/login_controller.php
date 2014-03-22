<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('login_model'); 
		require_once 'openid.php'; //library for social login

	}

	public function index()
	{
		//social login
		$openid = new LightOpenID("organizy.ap01.aws.af.cm");
		$openid->identity = 'https://www.google.com/accounts/o8/id';
		
		//request for permission
		$openid->required = array(
									'namePerson/first',
									'namePerson/last',
									'contact/email',
								  );

		$auth_url = $openid->authUrl();
		header("Location: $auth_url"); //redirect to google login page

		$this->login_model->index(); //call login_model
	}
}