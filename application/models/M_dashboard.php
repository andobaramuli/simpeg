<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class M_dashboard extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getTotalPegawai()
	{
		$this->db->from('pegawai');
		$query = $this->db->get();
		$rowcount = $query->num_rows();

		return $rowcount;
	}

	public function getTotalUnitKerja()
	{
		$this->db->from('unitkerja');
		$query = $this->db->get();
		$rowcount = $query->num_rows();

		return $rowcount;
	}

	public function getTotalSubunitKerja()
	{
		$this->db->from('subunitkerja');
		$query = $this->db->get();
		$rowcount = $query->num_rows();

		return $rowcount;
	}

	public function getTotalSubsubunitKerja()
	{
		$this->db->from('subsubunitkerja');
		$query = $this->db->get();
		$rowcount = $query->num_rows();

		return $rowcount;
	}

}
