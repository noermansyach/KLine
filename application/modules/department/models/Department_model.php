<?php 
/**
 * 
 */
class Department_model extends MY_Model
{

	public function readAllDepartment(){
		$query = $this->db->where('id_department !=', '1')
						  ->get('tb_department')->result();
		return $query;
	}
	
	public function insertDepartment($data) {
		return $this->db->insert('tb_department', $data);
	}

	public function updateDepartment($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_department', $data);
		return $query;
	}

}