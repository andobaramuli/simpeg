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
		$this->db->join('tmtlokasikerja tl', 'p.kode = tl.kodepegawai', 'left');
		$this->db->join('unitkerja uk', 'tl.kodeunitkerja = uk.kode');
		$this->db->join('tmtpangkat tp', 'p.kode = tp.kodepegawai', 'left');
		$this->db->join('tmtjabatan tj', 'p.kode = tj.kodepegawai', 'left');
		$this->db->where('tl.aktif', '1');
		$this->db->where('tp.aktif', '1');
		$this->db->where('tj.aktif', '1');
		$this->db->order_by('kode', "asc");
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getPegawaiDetail($id)
	{
		$this->db->select('p.*, uk.unitkerja, suk.subunitkerja, ssuk.subsubunitkerja, sp.statuspegawai, jp.jenispegawai, kp.kedudukanpegawai, tl.kode as kodetmtlokasikerja, tl.kodeunitkerja, tl.kodesubunitkerja, tl.kodesubsubunitkerja, tl.tmtlokasikerja, pkt.namapangkat, tp.kode as kodetmtpangkat, tp.kodepangkat, tp.tmtpangkat, tj.kode as kodetmtjabatan, tj.jabatan, tj.tugasjabatan, tj.tmtjabatan');
		$this->db->from('pegawai p');
		$this->db->join('statuspegawai sp', 'p.kodestatuspegawai = sp.kode');
		$this->db->join('jenispegawai jp', 'p.kodejenispegawai = jp.kode');
		$this->db->join('kedudukanpegawai kp', 'p.kodekedudukanpegawai = kp.kode');
		$this->db->join('tmtlokasikerja tl', 'p.kode = tl.kodepegawai');
		$this->db->join('unitkerja uk', 'tl.kodeunitkerja = uk.kode');
		$this->db->join('subunitkerja suk','tl.kodesubunitkerja = suk.kode');
		$this->db->join('subsubunitkerja ssuk', 'tl.kodesubsubunitkerja = ssuk.kode');
		$this->db->join('tmtpangkat tp', 'p.kode = tp.kodepegawai');
		$this->db->join('pangkat pkt', 'tp.kodepangkat = pkt.kode');
		$this->db->join('tmtjabatan tj', 'p.kode = tj.kodepegawai');
		$this->db->where('tl.aktif', '1');
		$this->db->where('tp.aktif', '1');
		$this->db->where('tj.aktif', '1');
		$this->db->where('p.kode', (int)$id);

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
