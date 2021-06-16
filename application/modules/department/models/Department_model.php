<?php 
/**
 * 
 */
class Department_model extends MY_Model
{

	public function readAllDepartment()
	{
		return $this->db->select('B.company_name, B.init as init_company, A.*')
						->join('tb_company B', 'A.id_company = B.id_company')
						->order_by('A.id_company asc')
						// ->order_by('B.id_department')
						->get('tb_department A')
						->result();
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