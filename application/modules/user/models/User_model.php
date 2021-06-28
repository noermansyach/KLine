<?php 
/**
 * 
 */
class User_model extends MY_Model
{

	public function readAllUser()
	{
		return $this->db->select('A.id_user, A.username, B.level, A.is_active')
						->join('tb_level_user B', 'A.id_level = B.id_level')
						->where('id_user !=', '210613154321')
						->get('tb_user A')
						->result();
	}
	
	public function insertUser($data) 
	{
		return $this->db->insert('tb_user', $data);
	}

	public function updateUser($data, $idUser) {
		return $this->db->where('id_user', $idUser)
				    	->update('tb_user', $data);
		
	}

	public function getUser($idUser)
	{
		return $this->db->select('B.department_name, C.position, D.company_name, A.*')
						->where('A.id_user', $idUser)
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_position C', 'A.id_position = C.id_position')
						->join('tb_company D', 'A.id_company = D.id_company')
						->get('tb_user A')
						->row();
	}

	public function getCompanyList()
	{
		return $this->db->select('id_company, company_name, init')
						->where('id_company !=', '1')
						->get('tb_company')
						->result();
	}

	public function getEmployeeList($idCompany) 
	{
		return $this->db->select('A.id_employee, A.employee_name, B.id_department, B.department_name, C.id_position, C.position')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_position C', 'A.id_position = C.id_position')
						->where('A.id_company', $idCompany)
						->get('tb_karyawan A')
						->result();
	}

	public function getDepartmentPosition($idEmployee) 
	{
		return $this->db->select('A.id_employee, A.employee_name, B.id_department, B.department_name, C.id_position, C.position')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_position C', 'A.id_position = C.id_position')
						->where('A.id_employee', $idEmployee)
						->get('tb_karyawan A')
						->row();
	}

	public function getLevel()
	{
		return $this->db->where('id_level !=', '1')
						->order_by('id_level', 'asc')
						->get('tb_level_user')
						->result();
	}

}