<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class Nominatif extends CI_Controller
{
	function __construct()
  {
		parent::__construct();
		$this->load->model('m_nominatif');
		$this->load->model('m_uk');

		if(empty($this->session)){
			redirect('auth/logout');
		}
	}

	public function index()
	{
		$data['uk'] = $this->m_uk->getUnitKerja();
		$this->layout->dressing("nominatif/nominatif",$data);
	}

	public function getsuk(){
		$data = $this->input->post();
		$suk = $this->m_nominatif->getSubUnitKerja($data['ukid']);
		echo json_encode($suk);
	}

	public function getssuk(){
		$data = $this->input->post();
		$ssuk = $this->m_nominatif->getSubSubUnitKerja($data['sukid']);
		echo json_encode($ssuk);
	}

	public function getnominatif()
	{
		$data['data'] = array();
		$post = $this->input->post();

		$uk = (int)$post['uk'];
		$suk = (int)$post['suk'];
		$ssuk = (int)$post['ssuk'];

		$nominatif = $this->m_nominatif->getNominatif($uk, $suk, $ssuk);

		if(!empty($nominatif)){
			$i=1;
			foreach ($nominatif as $key => $value) {
				array_push($data['data'],array(
					'i'           => $i++,
					'kode'        => $value->kode,
					'namalengkap' => $value->namalengkap,
					'jabatan'    	=> $value->jabatan,
				));
			}
		}

		echo json_encode($data);
	}
}
