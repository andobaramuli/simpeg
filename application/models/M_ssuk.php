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
		$this->db->select('ssuk.kode, ssuk.subsubunitkerja, suk.subunitkerja, uk.unitkerja');
		$this->db->from('subsubunitkerja ssuk');
		$this->db->join('subunitkerja suk','ssuk.kodesubunitkerja=suk.kode');
		$this->db->join('unitkerja uk','suk.kodeunitkerja=uk.kode');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

}
