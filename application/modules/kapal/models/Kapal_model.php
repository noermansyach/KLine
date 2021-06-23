<?php 
/**
 * 
 */
class Kapal_model extends MY_Model
{

	public function readAllKapal(){
		return $this->db->get('tb_kapal')->result();
	}
	
	public function insertKapal($data) {
		return $this->db->insert('tb_kapal', $data);
	}

	public function updateKapal($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_kapal', $data);
		return $query;
	}

}