<?php 
/**
 * 
 */
class Department_model extends MY_Model
{

	public function readAllDepartment($idCompany)
	{
		return $this->db->select('B.company_name, B.init as init_company, A.*')
						->join('tb_company B', 'A.id_company = B.id_company')
						->where('A.id_company', $idCompany)
						->order_by('A.id_company asc')
						->get('tb_department A')
						->result();
	}
	
	public function insertDepartment($data) {
		return $this->db->insert('tb_department', $data);
	}

	public function updateDepartment($idDepartment, $data) {
		$query = $this->db->where('id_department', $idDepartment)
						  ->update('tb_department', $data);
		return $query;
	}

	public function getDepartment($id_department) {
		return $this->db->select('A.*')
						->where('A.id_department', $id_department)
						->get('tb_department A')
						->row();
	}

}