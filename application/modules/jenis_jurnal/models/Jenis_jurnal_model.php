<?php 
/**
 * 
 */
class Jenis_jurnal_model extends MY_Model
{

	public function readAllJenisJurnal()
	{
		return $this->db->order_by('id_jenis_jurnal', 'asc')
						->get('tb_jenis_jurnal')
						->result();

	}
	
	public function insertJenisJurnal($data) {
		return $this->db->insert('tb_jenis_jurnal', $data);
	}

	public function updateJenisJurnal($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_jenis_jurnal', $data);
		return $query;
	}
	

}