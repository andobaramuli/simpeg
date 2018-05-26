<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * File: Dashboard.php
 * Functional: Dashboard Controller
 * Created Date: July 2017
 *
 * @author Ando Baramuli
 *
 **/

class Dashboard extends CI_Controller
{
	function __construct()
  {
		parent::__construct();
		$this->load->model('m_dashboard');
	}

	public function index()
	{
		$this->layout->dressing("dashboard/dashboard",NULL);
	}
}
