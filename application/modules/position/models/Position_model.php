<?php 
/**
 * 
 */
class Position_model extends MY_Model
{

	public function readAllPosition(){
		return $this->db->get('tb_position')->result();
	}
	
	public function insertPosition($data) {
		return $this->db->insert('tb_position', $data);
	}

	public function updatePosition($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_position', $data);
		return $query;
	}

}