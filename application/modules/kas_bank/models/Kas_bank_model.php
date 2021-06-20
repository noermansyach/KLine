<?php 
/**
 * 
 */
class Kas_bank_model extends MY_Model
{

	public function readAllBank()
	{
		return $this->db->order_by('id_kas_bank', 'asc')
						->get('tb_kas_bank')
						->result();

	}
	
	public function insertKasBank($data) {
		return $this->db->insert('tb_kas_bank', $data);
	}

	public function updateKasBank($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_kas_bank', $data);
		return $query;
	}
	

}