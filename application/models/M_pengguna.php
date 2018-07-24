<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class M_pengguna extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getPengguna()
	{
		$this->db->select('p1.kode, p2.namalengkap, p1.namapengguna, p3.peran, p1.dibuatpada');
		$this->db->from('pengguna p1');
		$this->db->join('pegawai p2', 'p1.kodepegawai = p2.kode', 'left');
		$this->db->join('peran p3', 'p1.kodeperan = p3.kode', 'left');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}
}
