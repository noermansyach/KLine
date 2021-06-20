<?php 
/**
 * 
 */
class Akun_bunglon_model extends MY_Model
{

	public function readAllAkunBunglon()
	{
		return $this->db->order_by('no_acc', 'asc')
						->get('tb_akun_bunglon')
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