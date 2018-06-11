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
		$this->db->select('suk.kode, suk.subunitkerja, uk.unitkerja');
		$this->db->from('subunitkerja suk');
		$this->db->join('unitkerja uk','suk.kodeunitkerja=uk.kode');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

}
