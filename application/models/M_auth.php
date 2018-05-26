<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * File: M_auth.php
 * Functional: Authentication model
 * Created Date: July 2017
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

	public function verify_login($username, $password)
	{
		$query = $this->db->get_where('user', array('username' => $username));
		$data = $query->row();
		$result = array();

		if(count($data) > 0)
		{
			if(md5(trim($password)) == $data->password)
			{
				$result['valid'] = true;
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

	public function set_logout_status($user_id)
	{
		$this->db->trans_start();

		$data = array(
	        'is_login' => 0
		);

		$this->db->where('user_id', $user_id);
		$this->db->update('adm_users', $data);
		$this->db->trans_complete();

		return $this->db->trans_status();
	}
}
