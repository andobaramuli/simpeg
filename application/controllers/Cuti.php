<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class Cuti extends CI_Controller
{
	function __construct()
  {
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_cuti');

		if(!$this->session){
			redirect('auth/logout');
		}
	}

	public function index()
	{
		$data['cuti'] = $this->m_cuti->getPegawaiCuti();
		$this->layout->dressing("cuti/cuti",$data);
	}

	public function addcuti()
	{
		if($this->input->post()){
			$this->form_validation->set_rules('jeniscuti','Jenis Cuti','trim|required');
			$this->form_validation->set_rules('mulaicuti','Mulai Cuti','trim|required');
			$this->form_validation->set_rules('akhircuti','Akhir Cuti','trim|required');
			$this->form_validation->set_rules('kodepegawai','Kode Pengawai','trim|required');

			$post = $this->input->post();

			if ($this->form_validation->run() == TRUE) {
				$userdata = $this->session->userdata;

				$datacuti = array(
					'kodepegawai'				=> (int)$post['kodepegawai'],
					'kodecuti'					=> (int)$post['jeniscuti'],
					'mulaicuti'					=> date_format(date_create($post['mulaicuti']),'Y-m-d'),
					'akhircuti'					=> date_format(date_create($post['akhircuti']),'Y-m-d'),
					'pengajuan'					=> '1',
					'dibuatpada'				=> date('Y-m-d H:i:s'),
					'dibuatoleh'				=> (int)$userdata['kodepengguna'],
				);

				$pegawaicuti = $this->m_general->insertData('pegawaicuti', $datacuti);

				if($pegawaicuti === TRUE){
					redirect('cuti/index', 'refresh');
				}else{
					$data['jc'] = $this->m_cuti->getJenisCuti();
					$data['detail'] = $this->m_cuti->getPegawai($this->session->userdata['kodepegawai']);
					$this->layout->dressing("cuti/cutiinput",$data);
				}

			}else{
				$data['jc'] = $this->m_cuti->getJenisCuti();
				$data['detail'] = $this->m_cuti->getPegawai($this->session->userdata['kodepegawai']);
				$this->layout->dressing("cuti/cutiinput",$data);
			}
		}else{
			$data['jc'] = $this->m_cuti->getJenisCuti();
			$data['detail'] = $this->m_cuti->getPegawai($this->session->userdata['kodepegawai']);
			$this->layout->dressing("cuti/cutiinput",$data);
		}
	}

}
