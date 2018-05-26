<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class M_suk extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getSubUnitKerja()
	{
		$this->db->select('suk.id, suk.subunitkerja, uk.unitname');
		$this->db->from('subunitkerja suk');
		$this->db->join('unitkerja uk','suk.unitkerjaid=uk.id');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

}
