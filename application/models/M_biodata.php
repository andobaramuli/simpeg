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

	public function getSubUnitKerja($id)
	{
		$this->db->select('id, subunitkerja');
		$this->db->from('subunitkerja');
		$this->db->where('unitkerjaid = ',$id);
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function getSubSubUnitKerja($id)
	{
		$this->db->select('id, subsubunitkerja');
		$this->db->from('subsubunitkerja');
		$this->db->where('subunitkerjaid = ',$id);
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

}
