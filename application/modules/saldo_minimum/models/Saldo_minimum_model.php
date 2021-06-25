<?php 
/**
 * 
 */
class Saldo_minimum_model extends MY_Model
{

	public function readAllMinimum(){
		return $this->db->where('level', '6')
						->get('tb_perkiraan')->result();
	}
	
	public function insertCurrency($data) {
		return $this->db->insert('tb_currency', $data);
	}

	public function updateMinimum($filter, $data) {
		$this->db->where($filter)
				 ->update('tb_perkiraan', $data);

		$this->db->where($filter)
				 ->update('tb_perkiraan_bunglon', $data);
	}

	public function getAccSaldoMinimum($noAcc) {
		return $this->db->where('level', '6')
						->where('no_acc', $noAcc)
						->get('tb_perkiraan');
	}

}