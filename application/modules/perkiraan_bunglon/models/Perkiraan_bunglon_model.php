<?php 
/**
 * 
 */
class Perkiraan_bunglon_model extends MY_Model
{

	public function readAllPerkiraanBunglon()
	{


		return $this->db->select('A.no_acc_bunglon, A.no_acc, A.nama_acc, A.acc_induk, B.company_name, A.level, C.currency, C.init')
						->join('tb_company B', 'A.id_company = B.id_company')
						->join('tb_currency C', 'A.id_currency = C.id_currency')
						->order_by('acc_induk', 'asc')
						->get('tb_perkiraan_bunglon A')->result();

	}

	public function insertPerkiraanBunglon($data) {
		return $this->db->insert('tb_perkiraan_bunglon', $data);
	}

	public function updateKasBank($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_kas_bank', $data);
		return $query;
	}

	public function deletePerkiraan($noAcc) 
	{
		$query = $this->db->where('no_acc', $noAcc)
						  ->delete('tb_perkiraan');
	}
}