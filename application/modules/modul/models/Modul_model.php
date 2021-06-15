<?php 
/**
 * 
 */
class Modul_model extends MY_Model
{
	
	public function read() {
		$query = $this->db->get('tb_modul');
		return $query->result();
	}

}