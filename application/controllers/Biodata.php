<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * File: Biodata.php
 * Functional: Biodata Controller
 * Created Date: July 2017
 *
 * @author Ando Baramuli
 *
 **/

class Biodata extends CI_Controller
{
	function __construct()
  {
		parent::__construct();
		$this->load->model('m_auth');
	}

	public function index()
	{
		$this->layout->dressing("biodata/biodata",NULL);
	}
}
