<?php 
/**
 * 
 */
class Kunjungan_model extends MY_Model
{

	public function readAllKunjungan(){
		return $this->db->select('A.id_transaksi, A.tgl_berangkat, A.tgl_tiba, C.nama_kapal, D.nama_pelabuhan, A.voyage, A.is_close')
						->join('tb_company B', 'A.id_company = B.id_company')
						->join('tb_kapal C', 'A.id_kapal = C.id_kapal')
						->join('tb_pelabuhan D', 'A.id_pelabuhan = D.id_pelabuhan')
						->join('tb_currency E', 'A.id_currency = E.id_currency')
						->get('tb_kunjungan A')
						->result();

	}
	
	public function insertPelabuhan($data) {
		return $this->db->insert('tb_pelabuhan', $data);
	}

	public function updatePelabuhan($filter, $data) {
		$query = $this->db->where($filter)
						  ->update('tb_pelabuhan', $data);
		return $query;
	}

	public function getAccLevelSix() {
		return $this->db->select('no_acc, nama_acc')
						->where('level', '6')
						->order_by('no_acc', 'asc')
						->get('tb_perkiraan')
						->result();
	}

}