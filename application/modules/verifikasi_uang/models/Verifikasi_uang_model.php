<?php 
/**
 * 
 */
class Verifikasi_uang_model extends MY_Model
{

	public function readAllListVerifikasi(){
		return $this->db->select('A.*, B.nama_principal')
						->join('tb_principal B', 'A.id_principal = B.id_principal')
						->where('A.approved_by !=', null)
						->or_where('A.approved_by !=', '')
						->order_by('updated_time', 'asc')
						->get('tb_transaksi A')
						->result();

	}
	
	public function insertVerifikasi($data) {
		return $this->db->insert('tb_verifikasi_ppu', $data);
	}

	public function updatePPU($data, $idTransaksi) {
		$query = $this->db->where('no_bukti', $idTransaksi)
						  ->update('tb_transaksi', $data);
		return $query;
	}

	public function getDataTransaksi($idTransaksi) 
	{
		return $this->db->select('A.*, B.department_name, D.nama_principal, C.no_acc, C.nama_acc, C.init_kas_bank, F.init as currency, E.*')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_perkiraan C', 'A.no_acc_bank = C.no_acc')
						->join('tb_currency F', 'C.id_currency = F.id_currency')
						->join('tb_principal D', 'A.id_principal = D.id_principal')
						->join('tb_kunjungan E', 'A.id_kunjungan = E.id_kunjungan')
						->where('C.no_rek = A.no_rekening')
						->where('A.no_bukti', $idTransaksi)
						->get('tb_transaksi A')
						->row();
	}

	public function getAccountContra($noAcc, $namaAcc) {
		return $this->db->select('B.init as currency, A.*')
						->join('tb_currency B', 'A.id_currency = B.id_currency')
						->where('A.level', '6')
						->where("A.jenis_jurnal = 'KAS' or A.jenis_jurnal = 'BANK'")
						->where("A.no_acc != '".$noAcc."' and A.nama_acc != '".$namaAcc."'" )
						->get('tb_perkiraan A')
						->result();
	}

	public function getTransaksiVerified($noBukti) {
		return $this->db->select('A.*, B.department_name, C.nama_principal')
						->where('A.no_bukti', $noBukti)
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_principal C', 'A.id_principal = C.id_principal')
						->get('tb_verifikasi_ppu A')
						->row();
	}

}