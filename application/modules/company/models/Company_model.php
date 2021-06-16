<?php 
/**
 * 
 */
class Company_model extends MY_Model
{

	public function readAllCompany(){
		return $this->db->where('id_company != ', '1')
						->order_by('id_company', 'asc')
					    ->get('tb_company')->result();
	}
	
	public function insertCompany($data) {
		return $this->db->insert('tb_company', $data);
	}

	public function updateCompany($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_company', $data);
		return $query;
	}

}