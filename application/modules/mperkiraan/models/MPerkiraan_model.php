<?php 
/**
 * 
 */
class MPerkiraan_model extends MY_Model
{

	public function readAllPerkiraan()
	{
		return $this->db->select('A.no_acc, A.nama_acc, A.acc_induk, B.company_name, A.level, C.currency, C.init')
						->join('tb_company B', 'A.id_company = B.id_company')
						->join('tb_currency C', 'A.id_currency = C.id_currency')
						->order_by('acc_induk', 'asc')
						->get('tb_perkiraan A')->result();

	}
	
	public function insertPerkiraan($data) {
		return $this->db->insert('tb_perkiraan', $data);
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
	
	public function getLevel1() {
		$query = $this->db->distinct()
						  ->select('no_acc, nama_acc, level, jenis_perkiraan')
						  ->where('level' , '1')
						  ->order_by('no_acc', 'asc')
						  ->get('tb_perkiraan')->result();
		return $query;
	}

	public function getLevel2($noAcc) {
		$query = $this->db->distinct()
						  ->select('no_acc, nama_acc, level, jenis_perkiraan')
						  ->where('level' , '2')
						  ->where('acc_induk', $noAcc)
						  ->order_by('no_acc', 'asc')
						  ->get('tb_perkiraan')->result();
		return $query;
	}

	public function getLevel3($noAcc) {
		$query = $this->db->distinct()
						  ->select('no_acc, nama_acc, level, jenis_perkiraan')
						  ->where('level' , '3')
						  ->where('acc_induk', $noAcc)
						  ->order_by('no_acc', 'asc')
						  ->get('tb_perkiraan')->result();
		return $query;
	}

	public function getLevel4($noAcc) {
		$query = $this->db->distinct()
						  ->select('no_acc, nama_acc, level, jenis_perkiraan')
						  ->where('level' , '4')
						  ->where('acc_induk', $noAcc)
						  ->order_by('no_acc', 'asc')
						  ->get('tb_perkiraan')->result();
		return $query;
	}

	public function getLevel5($noAcc) {
		$query = $this->db->distinct()
						  ->select('no_acc, nama_acc, level, jenis_perkiraan')
						  ->where('level' , '5')
						  ->where('acc_induk', $noAcc)
						  ->order_by('no_acc', 'asc')
						  ->get('tb_perkiraan')->result();
		return $query;
	}
}