<?php 
/**
 * 
 */
class Karyawan_model extends MY_Model
{

	public function readAllKaryawan()
	{
		return $this->db->select('A.id_employee, A.employee_name, B.department_name, C.position')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_position C', 'A.id_position = C.id_position')
						->get('tb_karyawan A')
						->result();
	}
	
	public function insertKaryawan($data) 
	{
		return $this->db->insert('tb_karyawan', $data);
	}

	public function updateKaryawan($data, $idEmployee) {
		return $this->db->where('id_employee', $idEmployee)
				    	->update('tb_karyawan', $data);
		
	}

	public function getKaryawan($idEmployee)
	{
		return $this->db->select('A.id_employee, A.employee_name, A.place_of_birth, A.date_of_birth, A.gender, 
								  A.religion, A.marital_status, A.last_education, A.citizenship, A.nik, 
								  A.npwp, A.ptkp, A.address, A.postal_code, A.phone_number, A.home_phone_number,
								  A.email, A.join_date, A.id_department, B.department_name, A.id_position, C.position,
								  A.out_date')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_position C', 'A.id_position = C.id_position')
						->where('A.id_employee', $idEmployee)
						->get('tb_karyawan A')
						->row();
	}

	public function getDepartment($idCompany) 
	{
		return $this->db->where('id_company', $idCompany)
						->get('tb_department')
						->result();
	}

	public function getPosition($idCompany) 
	{
		return $this->db->where('id_company', $idCompany)
						->get('tb_position')
						->result();
	}

}