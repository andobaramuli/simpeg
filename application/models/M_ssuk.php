<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class M_ssuk extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getSubSubUnitKerja()
	{
		$this->db->select('ssuk.id, ssuk.subsubunitkerja, suk.subunitkerja, uk.unitname');
		$this->db->from('subsubunitkerja ssuk');
		$this->db->join('subunitkerja suk','ssuk.subunitkerjaid=suk.id');
		$this->db->join('unitkerja uk','suk.unitkerjaid=uk.id');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

}
