<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	//require 'openid.php';
	class Login_model extends CI_Model 
	{
		/*public function __construct()
		{
			$this->load->database();
		}*/
		public function index()
		{
			require_once 'openid.php';
			$openid = new LightOpenID("organizy.ap01.aws.af.cm");
			if($openid->mode)
			{
				if($openid->mode == 'cancel')
				{
					header("Location: http://organizy.ap01.aws.af.cm/");
				}
				elseif($openid->validate())
				{
					$data = $openid->getAttributes();
					$email = $data['contact/email'];
					$first = $data['namePerson/first'];
					$last = $data['namePerson/last'];

					$newdata = array('email' => $email,);
					$this->session->set_userdata($newdata);
					/*$this->db->where(array('email'=>$email));
					$this->db->select('email');
					$q = $this->db->get('profile');
					if($q->num_rows() > 0)
					{
						header("Location: http://organizy.ap01.aws.af.cm/index.php/profile");
					}
					else
					{
						$this->load->helper('url');
						$data = array(
										'email' => $email,
										'first' => $first,
										'last' => $last,
									  );
						//echo "Identity : $openid->identity <br />";
						$this->db->insert('profile', $data);
						header("Location: http://organizy.ap01.aws.af.cm/index.php/start/profile");
					}*/
					header("Location: http://organizy.ap01.aws.af.cm/index.php/profile");	
				}
				else
				{
					$data['title'] = 'not_logged_in';
					$this->load->view('templates/header', $data);
					$this->load->view('templates/navbar', $data);
					$this->load->view('pages/error', $data);
					$this->load->view('templates/end_body_scripts', $data);
				}
			}
			else
			{
				$data['title'] = 'please_login';
				$this->load->view('templates/header', $data);
				$this->load->view('templates/navbar', $data);
				$this->load->view('pages/error', $data);
				$this->load->view('templates/end_body_scripts', $data);
			}
		}

		public function logout()
		{
			session_start();
			session_destroy(); 
		}

		/*	public function show_profile()
					{
						$this->db->where(array('email'=>$email));
						$this->db->select('email','name','last');
						$x = $this->db->get('profile');
						if($x->num_rows() > 0)
							{
								foreach ($x->result() as $row)
									{
										$data[] = $row;
									}
								return $data;
							}
					} */
	}

