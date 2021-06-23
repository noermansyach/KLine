<?php 
/**
 * 
 */
class Kunjungan_model extends MY_Model
{

	public function readAllKunjungan(){
		return $this->db->get('tb_kunjungan')->result();
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