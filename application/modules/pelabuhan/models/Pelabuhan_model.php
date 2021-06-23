<?php 
/**
 * 
 */
class Pelabuhan_model extends MY_Model
{

	public function readAllPelabuhan(){
		return $this->db->get('tb_pelabuhan')->result();
	}
	
	public function insertPelabuhan($data) {
		return $this->db->insert('tb_pelabuhan', $data);
	}

	public function updatePelabuhan($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_pelabuhan', $data);
		return $query;
	}

}