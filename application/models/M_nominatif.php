<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class M_nominatif extends CI_Model
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

	public function getNominatif($uk = 0, $suk = 0, $ssuk = 0)
	{
		if ((int)$uk != 0 && (int)$suk != 0 && (int)$ssuk != 0) {
			$where = "tl.kodeunitkerja = $uk AND tl.kodesubunitkerja = $suk AND tl.kodesubsubunitkerja = $ssuk";
		} elseif ((int)$uk != 0 && (int)$suk != 0) {
			$where = "(tl.kodeunitkerja = $uk AND tl.kodesubunitkerja = $suk) OR tl.kodesubsubunitkerja = $ssuk";
		} elseif ((int)$uk != 0) {
			$where = "tl.kodeunitkerja = $uk OR tl.kodesubunitkerja = $suk OR tl.kodesubsubunitkerja = $ssuk";
		}

		$q = "
		SELECT
			p.kode,
			p.namalengkap,
			uk.unitkerja,
			suk.subunitkerja,
			ssuk.subsubunitkerja,
			tj.jabatan
		FROM pegawai p
			LEFT JOIN tmtlokasikerja tl ON p.kode = tl.kodepegawai
			JOIN unitkerja uk ON tl.kodeunitkerja = uk.kode
			JOIN subunitkerja suk ON tl.kodesubunitkerja = suk.kode
			JOIN subsubunitkerja ssuk ON tl.kodesubsubunitkerja = ssuk.kode
			LEFT JOIN tmtpangkat tp ON p.kode = tp.kodepegawai
			LEFT JOIN tmtjabatan tj ON p.kode = tj.kodepegawai
		WHERE tl.aktif = '1' AND tp.aktif = '1' AND tj.aktif = '1' AND ($where)
		ORDER BY kode ASC
		";

		$query = $this->db->query($q);
		$result = $query->result();

		return $result;
	}

}
