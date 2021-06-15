<?php 
/**
 * 
 */
class Perkiraan_model extends MY_Model
{

	public function readAllPerkiraan(){
		return $this->db->select('A.no_acc, A.nama_acc, A.acc_induk, B.init as init_company, A.level, A.is_jurnal, C.init as init_curr, 		
								A.kategori, A.is_budget, A.is_disb')
					  	->join('tb_company B', 'A.id_company = B.id_company', 'inner')
					  	->join('tb_currency C', 'A.id_currency = C.id_currency', 'left')
					  	->get('tb_perkiraan A')->result();
	}
	
	public function insertPerkiraan($data) {
		return $this->db->insert('tb_position', $data);
	}

	public function updatePosition($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_position', $data);
		return $query;
	}

}