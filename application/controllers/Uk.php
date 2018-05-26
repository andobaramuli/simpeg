<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class Uk extends CI_Controller
{
	function __construct()
  {
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_uk');
	}

	public function index()
	{
		$data['unitkerja'] = $this->m_uk->getUnitKerja();
		$this->layout->dressing("uk/uk",$data);
	}

	public function adduk()
	{
		if($this->input->post()){
			$this->form_validation->set_rules('unitkerja','Nama Unit Kerja','trim|required');

			$post = $this->input->post();

			if ($this->form_validation->run() == TRUE) {
				$unitkerja = $this->input->post('unitkerja');
				$data = array(
					'unitname'		=> $unitkerja,
				);
				$result = $this->m_general->insertData('unitkerja', $data);

				if($result === TRUE){
					redirect('uk/index', 'refresh');
				}else{
					$this->layout->dressing('uk/ukinput', NULL);
				}
			}else{
				$this->layout->dressing('uk/ukinput', NULL);
			}
		}else{
			$this->layout->dressing("uk/ukinput",NULL);
		}
	}
}
