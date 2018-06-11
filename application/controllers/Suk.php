<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class Suk extends CI_Controller
{
	function __construct()
  {
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_uk');
		$this->load->model('m_suk');

		if(!$this->session){
			redirect('auth/logout');
		}
	}

	public function index()
	{
		$data['suk'] = $this->m_suk->getSubUnitKerja();
		$this->layout->dressing("suk/suk",$data);
	}

	public function addsuk()
	{
		if($this->input->post()){
			$this->form_validation->set_rules('subunitkerja','Nama Sub Unit Kerja','trim|required');

			$post = $this->input->post();

			if ($this->form_validation->run() == TRUE) {
				$subunitkerja = $this->input->post('subunitkerja');
				$kodeunitkerja = $this->input->post('unitkerja');
				$data = array(
					'subunitkerja'		=> $subunitkerja,
					'kodeunitkerja'		=> $kodeunitkerja
				);
				$result = $this->m_general->insertData('subunitkerja', $data);

				if($result === TRUE){
					redirect('suk/index', 'refresh');
				}else{
					$data['uk'] = $this->m_uk->getUnitKerja();
					$this->layout->dressing("suk/sukinput",$data);
				}
			}else{
				$data['uk'] = $this->m_uk->getUnitKerja();
				$this->layout->dressing("suk/sukinput",$data);
			}
		}else{
			$data['uk'] = $this->m_uk->getUnitKerja();
			$this->layout->dressing("suk/sukinput",$data);
		}
	}
}
