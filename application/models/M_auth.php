<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author Ando Baramuli
 *
 **/

class M_auth extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function verifyLogin($username, $password)
	{
		$query = $this->db->get_where('pengguna', array('namapengguna' => $username));
		$data = $query->row();
		$result = array();

		if(count($data) > 0)
		{
			if(md5(trim($password)) == $data->katakunci)
			{
				$result['valid'] = true;
				$result['kode'] = $data->kode;
				if ($data->kodeperan == 3) {
					$q2 = $this->db->get_where('pegawai', array('kode' => $data->kodepegawai));
					$d2 = $q2->row();
					$result['namapengguna'] = $d2->namalengkap;
				} else {
					$result['namapengguna'] = $data->namapengguna;
				}
				$result['kodepegawai'] = $data->kodepegawai;
				$result['kodeperan'] = $data->kodeperan;
			}
			else
			{
				$result['valid'] = false;
			}
			return $result;
		}
		else
		{
			$result['valid'] = false;
			return $result;
		}
	}
}
