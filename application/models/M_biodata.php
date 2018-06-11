<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class M_biodata extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getPegawai()
	{
		$this->db->select('p.kode, p.namalengkap, uk.unitkerja, tj.jabatan');
		$this->db->from('pegawai p');
		$this->db->join('tmtlokasikerja tl', 'p.kode = tl.kodepegawai');
		$this->db->join('unitkerja uk', 'tl.kodeunitkerja = uk.kode');
		$this->db->join('tmtjabatan tj', 'p.kode = tj.kodepegawai');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getSubUnitKerja($id)
	{
		$this->db->select('kode, subunitkerja');
		$this->db->from('subunitkerja');
		$this->db->where('kodeunitkerja = ',$id);
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getSubSubUnitKerja($id)
	{
		$this->db->select('kode, subsubunitkerja');
		$this->db->from('subsubunitkerja');
		$this->db->where('kodesubunitkerja = ',$id);
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getPangkatGolongan()
	{
		$this->db->select('kode, namapangkat');
		$this->db->from('pangkat');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getStatusPegawai()
	{
		$this->db->select('kode, statuspegawai');
		$this->db->from('statuspegawai');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getJenisPegawai()
	{
		$this->db->select('kode, jenispegawai');
		$this->db->from('jenispegawai');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getKedudukanPegawai()
	{
		$this->db->select('kode, kedudukanpegawai');
		$this->db->from('kedudukanpegawai');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

}
