<?php 
/**
 * 
 */
class Currency_model extends MY_Model
{

	public function readAllCurrency(){
		return $this->db->get('tb_currency')->result();
	}
	
	public function insertCurrency($data) {
		return $this->db->insert('tb_currency', $data);
	}

	public function updateCurrency($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_currency', $data);
		return $query;
	}

}