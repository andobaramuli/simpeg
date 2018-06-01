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
		$this->load->model('m_general');
		$this->load->model('m_biodata');
		$this->load->model('m_uk');
		$this->load->model('m_suk');
		$this->load->model('m_ssuk');
	}

	public function index()
	{
		$this->layout->dressing("biodata/biodata",NULL);
	}

	public function addbiodata()
	{
		if($this->input->post()){
			$this->form_validation->set_rules('subsubunitkerja','Nama Sub Sub Unit Kerja','trim|required');

			$post = $this->input->post();

			if ($this->form_validation->run() == TRUE) {
				$subsubunitkerja = $this->input->post('subsubunitkerja');
				$subunitkerjaid = $this->input->post('subunitkerja');
				$data = array(
					'subsubunitkerja'		=> $subsubunitkerja,
					'subunitkerjaid'		=> $subunitkerjaid
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
			$data['uk'] = $this->m_uk->getUnitKerja();
			$this->layout->dressing("biodata/biodatainput",$data);
		}
	}

	public function getsuk(){
		$data = $this->input->post();

		$suk = $this->m_biodata->getSubUnitKerja($data['ukid']);
		echo json_encode($suk);
	}

	public function getssuk(){
		$data = $this->input->post();

		$ssuk = $this->m_biodata->getSubSubUnitKerja($data['sukid']);
		echo json_encode($ssuk);
	}


}
