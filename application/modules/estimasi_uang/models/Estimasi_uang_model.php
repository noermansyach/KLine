<?php 
/**
 * 
 */
class Estimasi_uang_model extends MY_Model
{

	public function readAllEstimasi($status){
		return $this->db->select('A.id_transaksi, A.tgl_berangkat, A.tgl_tiba, C.nama_kapal, D.nama_pelabuhan, A.voyage, A.is_close')
						->join('tb_company B', 'A.id_company = B.id_company')
						->join('tb_kapal C', 'A.id_kapal = C.id_kapal')
						->join('tb_pelabuhan D', 'A.id_pelabuhan = D.id_pelabuhan')
						->get('tb_kunjungan A')
						->result();

	}
	
	public function insertKunjungan($data) {
		return $this->db->insert('tb_kunjungan', $data);
	}

	public function updateKunjungan($data, $idTransaksi) {
		$query = $this->db->where('id_transaksi', $idTransaksi)
						  ->update('tb_kunjungan', $data);
		return $query;
	}

	public function getDataTransaksi($idTransaksi) 
	{
		return $this->db->where('id_transaksi', $idTransaksi)
						->get('tb_kunjungan')
						->row();
	}

	public function getAccLevelSix() {
		return $this->db->select('no_acc, nama_acc')
						->where('level', '6')
						->order_by('no_acc', 'asc')
						->get('tb_perkiraan')
						->result();
	}

}