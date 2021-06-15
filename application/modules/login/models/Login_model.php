<?php 

/**
 * 
 */
class Login_model extends MY_Model
{
	
	public $_tb_user = "tb_user";

	public function cek_login($where)
	{			
		return $this->db->get_where($this->_tb_user, $where);
	}

	public function get_data_user($where)
	{
		return $this->db->get($this->_tb_user. ' A')->row();
	}

}