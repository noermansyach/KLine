<?php 
/**
 * 
 */
class Bank_model extends MY_Model
{

	public function readAllBank()
	{
		return $this->db->order_by('id_bank', 'asc')
						->get('tb_bank')
						->result();

	}
	
	public function insertBank($data) {
		return $this->db->insert('tb_bank', $data);
	}

	public function updateBank($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_bank', $data);
		return $query;
	}
	

}