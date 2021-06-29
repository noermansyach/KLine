<?php 
/**
 * 
 */
class Position_model extends MY_Model
{

	public function readAllPosition($idCompany) 
	{
		return $this->db->where('id_company', $idCompany)
						->get('tb_position')
						->result();
	}
	
	public function insertPosition($data) 
	{
		return $this->db->insert('tb_position', $data);
	}

	public function updatePosition($idPosition, $data) {
		$query = $this->db->where('id_position', $idPosition)
						  ->update('tb_position', $data);
		return $query;
	}

	public function getPosition($idPosition)
	{
		return $this->db->where('id_position', $idPosition)
						->get('tb_position')
						->row();
	}

}