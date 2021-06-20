<?php 
/**
 * 
 */
class MPerkiraan_model extends MY_Model
{

	public function readAllBank()
	{
		return $this->db->order_by('id_kas_bank', 'asc')
						->get('tb_kas_bank')
						->result();

	}
	
	public function insertKasBank($data) {
		return $this->db->insert('tb_kas_bank', $data);
	}

	public function updateKasBank($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_kas_bank', $data);
		return $query;
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