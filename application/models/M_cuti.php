<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class M_cuti extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getPegawaiCuti()
	{
		$this->db->select('pc.*, p.namalengkap, uk.unitkerja');
		$this->db->from('pegawaicuti pc');
		$this->db->join('pegawai p','pc.kodepegawai=p.kode');
		$this->db->join('tmtlokasikerja tl','p.kode=tl.kodepegawai');
		$this->db->join('unitkerja uk','tl.kodeunitkerja=uk.kode');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getJenisCuti()
	{
		$this->db->select('kode, jeniscuti');
		$this->db->from('jeniscuti');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getPegawai($id)
	{
		$this->db->select('kodeunitkerja, kodesubunitkerja, kodesubsubunitkerja');
		$this->db->from('tmtlokasikerja');
		$this->db->where('kodepegawai',(int)$id);
		$tmtlokasikerja = $this->db->get()->result_array();

		if($tmtlokasikerja[0]['kodeunitkerja'] != '0' && $tmtlokasikerja[0]['kodesubunitkerja'] != '0' && $tmtlokasikerja[0]['kodesubsubunitkerja'] != '0'){
			$this->db->select('p.nip, p.namalengkap, p.jeniskelamin, sp.statuspegawai, uk.unitkerja, suk.subunitkerja, ssuk.subsubunitkerja, pk.namapangkat, tj.jabatan');
			$this->db->from('pegawai p');
			$this->db->join('statuspegawai sp', 'p.kodestatuspegawai = sp.kode');
			$this->db->join('tmtlokasikerja tl', 'p.kode = tl.kodepegawai');
			$this->db->join('unitkerja uk', 'tl.kodeunitkerja = uk.kode');
			$this->db->join('subunitkerja suk', 'tl.kodesubunitkerja = suk.kode');
			$this->db->join('subsubunitkerja ssuk', 'tl.kodesubsubunitkerja = ssuk.kode');
			$this->db->join('tmtpangkat tp', 'p.kode = tp.kodepegawai');
			$this->db->join('pangkat pk', 'tp.kodepangkat = pk.kode');
			$this->db->join('tmtjabatan tj', 'p.kode = tj.kodepegawai');
			$this->db->where('p.kode', (int)$id);
			$query = $this->db->get();
			$result = $query->result();
		}elseif($tmtlokasikerja[0]['kodeunitkerja'] != '0' && $tmtlokasikerja[0]['kodesubunitkerja'] != '0'){
			$this->db->select('p.nip, p.namalengkap, p.jeniskelamin, sp.statuspegawai, uk.unitkerja, suk.subunitkerja, "" subsubunitkerja, pk.namapangkat, tj.jabatan');
			$this->db->from('pegawai p');
			$this->db->join('statuspegawai sp', 'p.kodestatuspegawai = sp.kode');
			$this->db->join('tmtlokasikerja tl', 'p.kode = tl.kodepegawai');
			$this->db->join('unitkerja uk', 'tl.kodeunitkerja = uk.kode');
			$this->db->join('subunitkerja suk', 'tl.kodesubunitkerja = suk.kode');
			$this->db->join('tmtpangkat tp', 'p.kode = tp.kodepegawai');
			$this->db->join('pangkat pk', 'tp.kodepangkat = pk.kode');
			$this->db->join('tmtjabatan tj', 'p.kode = tj.kodepegawai');
			$this->db->where('p.kode', (int)$id);
			$query = $this->db->get();
			$result = $query->result();
		}elseif($tmtlokasikerja[0]['kodeunitkerja'] != '0'){
			$this->db->select('p.nip, p.namalengkap, p.jeniskelamin, sp.statuspegawai, uk.unitkerja, "" subunitkerja, "" subsubunitkerja, pk.namapangkat, tj.jabatan');
			$this->db->from('pegawai p');
			$this->db->join('statuspegawai sp', 'p.kodestatuspegawai = sp.kode');
			$this->db->join('tmtlokasikerja tl', 'p.kode = tl.kodepegawai');
			$this->db->join('unitkerja uk', 'tl.kodeunitkerja = uk.kode');
			$this->db->join('tmtpangkat tp', 'p.kode = tp.kodepegawai');
			$this->db->join('pangkat pk', 'tp.kodepangkat = pk.kode');
			$this->db->join('tmtjabatan tj', 'p.kode = tj.kodepegawai');
			$this->db->where('p.kode', (int)$id);
			$query = $this->db->get();
			$result = $query->result();
		}

		return $result;
	}

}
