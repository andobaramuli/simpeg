<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
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

		if(!$this->session){
			redirect('auth/logout');
		}
	}

	public function index()
	{
		$data['totalpegawai'] = $this->m_dashboard->getTotalPegawai();
		$data['totaluk'] = $this->m_dashboard->getTotalUnitKerja();
		$data['totalsuk'] = $this->m_dashboard->getTotalSubunitKerja();
		$data['totalssuk'] = $this->m_dashboard->getTotalSubsubunitKerja();
		$this->layout->dressing("dashboard/dashboard",$data);
	}
}
