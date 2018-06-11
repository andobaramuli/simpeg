<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class Ssuk extends CI_Controller
{
	function __construct()
  {
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_uk');
		$this->load->model('m_suk');
		$this->load->model('m_ssuk');

		if(!$this->session){
			redirect('auth/logout');
		}
	}

	public function index()
	{
		$data['ssuk'] = $this->m_ssuk->getSubSubUnitKerja();
		$this->layout->dressing("ssuk/ssuk",$data);
	}

	public function addssuk()
	{
		if($this->input->post()){
			$this->form_validation->set_rules('subsubunitkerja','Nama Sub Sub Unit Kerja','trim|required');

			$post = $this->input->post();

			if ($this->form_validation->run() == TRUE) {
				$subsubunitkerja = $this->input->post('subsubunitkerja');
				$kodesubunitkerja = $this->input->post('subunitkerja');
				$data = array(
					'subsubunitkerja'		=> $subsubunitkerja,
					'kodesubunitkerja'	=> $kodesubunitkerja
				);
				$result = $this->m_general->insertData('subsubunitkerja', $data);

				if($result === TRUE){
					redirect('ssuk/index', 'refresh');
				}else{
					$data['suk'] = $this->m_suk->getSubUnitKerja();
					$this->layout->dressing("ssuk/ssukinput",$data);
				}
			}else{
				$data['suk'] = $this->m_suk->getSubUnitKerja();
				$this->layout->dressing("ssuk/ssukinput",$data);
			}
		}else{
			$data['suk'] = $this->m_suk->getSubUnitKerja();
			$this->layout->dressing("ssuk/ssukinput",$data);
		}
	}
}
