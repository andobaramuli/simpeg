<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class Pengguna extends CI_Controller
{
	function __construct()
  {
		parent::__construct();
		$this->load->model('m_general');
		$this->load->model('m_pengguna');

		if(!$this->session){
			redirect('auth/logout');
		}
	}

	public function index()
	{
		$data['pengguna'] = $this->m_pengguna->getPengguna();
		$this->layout->dressing("pengguna/pengguna",$data);
	}

	public function addbiodata()
	{
		if($this->input->post()){
			$this->form_validation->set_rules('unitkerja','UNIT KERJA','trim|required');
			$this->form_validation->set_rules('subunitkerja','SUBUNIT KERJA','trim|required');
			$this->form_validation->set_rules('subsubunitkerja','SUB SUBUNIT KERJA','trim|required');
			$this->form_validation->set_rules('tmtlokasikerja','TERHITUNG MULAI TANGGAL','trim|required');
			$this->form_validation->set_rules('nip','NO. INDUK PEGAWAI','trim|required');
			$this->form_validation->set_rules('nama','NAMA','trim|required');
			$this->form_validation->set_rules('tempatlahir','TEMPAT LAHIR','trim|required');
			$this->form_validation->set_rules('tanggallahir','TANGGAL LAHIR','trim|required');
			$this->form_validation->set_rules('jeniskelamin','JENIS KELAMIN','trim|required');
			$this->form_validation->set_rules('golongandarah','GOLONGAN DARAH','trim|required');
			$this->form_validation->set_rules('statusnikah','STATUS PERNIKAHAN','trim|required');
			$this->form_validation->set_rules('agama','AGAMA','trim|required');
			$this->form_validation->set_rules('statuspegawai','STATUS PEGAWAI','trim|required');
			$this->form_validation->set_rules('jeniskepegawaian','JENIS KEPEGAWAIAN','trim|required');
			$this->form_validation->set_rules('kedudukanpegawai','KEDUDUKAN PEGAWAI','trim|required');
			$this->form_validation->set_rules('alamat','ALAMAT RUMAH','trim|required');
			$this->form_validation->set_rules('karpeg','NO. KARTU PEGAWAI','trim|required');
			$this->form_validation->set_rules('askes','NO. KARTU ASKES','trim|required');
			$this->form_validation->set_rules('taspen','KARTU TASPEN','trim|required');
			$this->form_validation->set_rules('kariskarsu','NO. KARTU ISTRI / KARTU SUAMI','trim|required');
			$this->form_validation->set_rules('npwp','N P W P','trim|required');
			$this->form_validation->set_rules('nik','NO. INDUK KEPENDUDUKAN','trim|required');
			$this->form_validation->set_rules('pangkat','NAMA PANGKAT','trim|required');
			$this->form_validation->set_rules('tmtpangkat','TERHITUNG MULAI TANGGAL','trim|required');
			$this->form_validation->set_rules('jabatan','JABATAN','trim|required');
			$this->form_validation->set_rules('tugasunitkerja','TUGAS DALAM UNIT KERJA','trim|required');
			$this->form_validation->set_rules('tmtjabatan','TERHITUNG MULAI TANGGAL','trim|required');

			$post = $this->input->post();

			if ($this->form_validation->run() == TRUE) {
				$userdata = $this->session->userdata;

				$datapegawai = array(
					'nik'										=> $post['nik'],
					'nip'										=> $post['nip'],
					'namalengkap'						=> $post['nama'],
					'tempatlahir'						=> $post['tempatlahir'],
					'tanggallahir'					=> date_format(date_create($post['tanggallahir']),'Y-m-d'),
					'jeniskelamin'					=> $post['jeniskelamin'],
					'golongandarah'					=> $post['golongandarah'],
					'statusnikah'						=> $post['statusnikah'],
					'agama'									=> $post['agama'],
					'kodestatuspegawai'			=> (int)$post['statuspegawai'],
					'kodejenispegawai'			=> (int)$post['jeniskepegawaian'],
					'kodekedudukanpegawai'	=> (int)$post['kedudukanpegawai'],
					'alamat'								=> $post['alamat'],
					'nokarpeg'							=> $post['karpeg'],
					'noaskes'								=> $post['askes'],
					'notaspen'							=> $post['taspen'],
					'nokariskarsu'					=> $post['kariskarsu'],
					'npwp'									=> $post['npwp'],
					'dibuatpada'						=> date('Y-m-d H:i:s'),
					'dibuatoleh'						=> (int)$userdata['kodepengguna'],
				);

				$kodepegawai = $this->m_general->insertDataReturnLastId('pegawai', $datapegawai);

				if(!empty($kodepegawai)){
					$datapengguna = array(
						'namapengguna'					=> $post['nip'],
						'katakunci'							=> md5(trim(date_format(date_create($post['tanggallahir']),'Ymd'))),
						'kodepegawai'						=> (int)$kodepegawai,
						'kodeperan'							=> 3,
						'dibuatpada'						=> date('Y-m-d H:i:s'),
						'dibuatoleh'						=> (int)$userdata['kodepengguna'],
					);
					$resultpengguna = $this->m_general->insertData('pengguna', $datapengguna);

					$datalokasikerja = array(
						'kodepegawai'						=> (int)$kodepegawai,
						'kodeunitkerja'					=> (int)$post['unitkerja'],
						'kodesubunitkerja'			=> (int)$post['subunitkerja'],
						'kodesubsubunitkerja'		=> (int)$post['subsubunitkerja'],
						'tmtlokasikerja'				=> date_format(date_create($post['tmtlokasikerja']),'Y-m-d'),
						'dibuatpada'						=> date('Y-m-d H:i:s'),
						'dibuatoleh'						=> (int)$userdata['kodepengguna'],
					);
					$resultloker = $this->m_general->insertData('tmtlokasikerja', $datalokasikerja);

					$datapangkat = array(
						'kodepegawai'						=> (int)$kodepegawai,
						'kodepangkat'						=> (int)$post['pangkat'],
						'tmtpangkat'						=> date_format(date_create($post['tmtpangkat']),'Y-m-d'),
						'dibuatpada'						=> date('Y-m-d H:i:s'),
						'dibuatoleh'						=> (int)$userdata['kodepengguna'],
					);
					$resultpangkat = $this->m_general->insertData('tmtpangkat', $datapangkat);

					$datajabatan = array(
						'kodepegawai'						=> (int)$kodepegawai,
						'jabatan'								=> $post['jabatan'],
						'tugasjabatan'					=> $post['tugasunitkerja'],
						'tmtjabatan'						=> date_format(date_create($post['tmtjabatan']),'Y-m-d'),
						'dibuatpada'						=> date('Y-m-d H:i:s'),
						'dibuatoleh'						=> (int)$userdata['kodepengguna'],
					);
					$resultjabatan = $this->m_general->insertData('tmtjabatan', $datajabatan);
				}else{
					$data['uk'] = $this->m_uk->getUnitKerja();
					$data['pangkat'] = $this->m_biodata->getPangkatGolongan();
					$data['stapeg'] = $this->m_biodata->getStatusPegawai();
					$data['jenpeg'] = $this->m_biodata->getJenisPegawai();
					$data['dukpeg'] = $this->m_biodata->getKedudukanPegawai();
					$this->layout->dressing("biodata/biodatainput",$data);
				}

				if($resultpengguna === TRUE && $resultloker === TRUE && $resultpangkat === TRUE && $resultjabatan === TRUE){
					redirect('biodata/index', 'refresh');
				}else{
					$data['uk'] = $this->m_uk->getUnitKerja();
					$data['pangkat'] = $this->m_biodata->getPangkatGolongan();
					$data['stapeg'] = $this->m_biodata->getStatusPegawai();
					$data['jenpeg'] = $this->m_biodata->getJenisPegawai();
					$data['dukpeg'] = $this->m_biodata->getKedudukanPegawai();
					$this->layout->dressing("biodata/biodatainput",$data);
				}
			}else{
				$data['uk'] = $this->m_uk->getUnitKerja();
				$data['pangkat'] = $this->m_biodata->getPangkatGolongan();
				$data['stapeg'] = $this->m_biodata->getStatusPegawai();
				$data['jenpeg'] = $this->m_biodata->getJenisPegawai();
				$data['dukpeg'] = $this->m_biodata->getKedudukanPegawai();
				$this->layout->dressing("biodata/biodatainput",$data);
			}
		}else{
			$data['uk'] = $this->m_uk->getUnitKerja();
			$data['pangkat'] = $this->m_biodata->getPangkatGolongan();
			$data['stapeg'] = $this->m_biodata->getStatusPegawai();
			$data['jenpeg'] = $this->m_biodata->getJenisPegawai();
			$data['dukpeg'] = $this->m_biodata->getKedudukanPegawai();
			$this->layout->dressing("biodata/biodatainput",$data);
		}
	}
}
