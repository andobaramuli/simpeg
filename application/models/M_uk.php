<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class M_uk extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getUnitKerja()
	{
		$this->db->select('kode, unitkerja');
		$this->db->from('unitkerja');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}


}
