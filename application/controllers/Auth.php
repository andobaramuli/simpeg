<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * File: Auth.php
 * Functional: Authentication Controller
 * Created Date: July 2017
 *
 * @author Ando Baramuli
 *
 **/

class Auth extends CI_Controller {
	function __construct()
  {
		parent::__construct();
		$this->load->model('m_auth');
	}

	public function index()
	{
		if ($this->session->userdata('user_username')) {

		} else {
			redirect('auth/login', 'refresh');
		}
	}

	public function login()
	{
    if($this->input->post())
    {
      $username 	= $this->input->post('username');
  		$password 	= $this->input->post('password');

  		if(empty($username) || empty($password))
      {
  			redirect(base_url());
  		}
      else
      {
  			$result = $this->m_auth->verify_login($username, $password);
        if ($result['valid'])
        {
  				// $userdata = array(
  				// 	'sessionid' => 'simpeg',
  				// 	'loggedin'  => true,
  				// 	'userid'    => $result[],
  				// 	'staffid'   => $result[],
  				// 	'username'  => $result[],
  				// 	'userrole'  => $result[],
  				// );
  				// $this->session->set_userdata($userdata);
					redirect('dashboard/index');
  			}
        else
        {
  				redirect(base_url());
  			}
  		}
    }else{
      $this->load->view('auth/login');
    }

	}

	public function logout()
	{
		redirect(base_url());
	}

	public function notfound($value='')
	{
		$this->userId = $this->session->userdata('user_id');

		if (empty($this->userId)) {
			redirect(base_url());
		} else {
			$data['url_back'] = base_url() . $this->session->userdata('default_page');
			$this->layouts->dressing('errors/html/error_404', $data);
		}
	}
}
