<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
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
		if ($this->session->userdata('namapengguna')) {

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
  			$result = $this->m_auth->verifyLogin($username, $password);

        if ($result['valid'])
        {
  				$userdata = array(
  					'login' 				=> true,
  					'kodepengguna'  => $result['kode'],
  					'namapengguna' 	=> $result['namapengguna'],
						'kodepegawai' 	=> $result['kodepegawai'],
						'kodeperan'		 	=> $result['kodeperan']
  				);
  				$this->session->set_userdata($userdata);
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
		$this->session->unset_userdata('userdata');
		$this->session->sess_destroy();
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
