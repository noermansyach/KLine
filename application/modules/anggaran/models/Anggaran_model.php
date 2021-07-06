<?php 
/**
 * 
 */
class Anggaran_model extends MY_Model
{

	public function readAllOperational()
	{
		return $this->db->select('A.no_bukti, A.no_ppu, B.department_name, A.status as jenis_transaksi, A.created_time, C.nama_principal as 
								  dibayar_kepada')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_principal C', 'A.id_principal = C.id_principal')
						->where('A.id_kunjungan !=' , null)
						->where('A.id_kunjungan !=', '')
						->order_by('A.no_ppu')
						->get('tb_transaksi A')
						->result();
	}
	
	public function insertOperational($data) 
	{
		return $this->db->insert('tb_transaksi', $data);
	}

	public function updateOperational($data, $noBukti) {
		return $this->db->where('no_bukti', $noBukti)
				    	->update('tb_transaksi', $data);
		
	}

	public function getAccount() {
		return $this->db->select('A.no_acc, A.nama_acc, A.init_kas_bank, A.no_rek, B.init as curr')
						->join('tb_currency B', 'A.id_currency = B.id_currency')
						->where('A.level', '6')
						->where("A.jenis_jurnal = 'KAS' or A.jenis_jurnal = 'BANK'")
						->get('tb_perkiraan A')
						->result();
	}

	public function getDetailAccount($noPPU, $namaAcc) {
		return $this->db->select('A.init_kas_bank, A.no_rek, B.init as curr, A.saldo_min')
						->join('tb_currency B', 'A.id_currency = B.id_currency')
						->where("A.no_acc = '".$noPPU."' and A.nama_acc = '".$namaAcc."'")
						->get('tb_perkiraan A')
						->row();
	}

	public function getVerifiedPPU() {
		return $this->db->select('A.*, B.created_time as tgl_dibuat, C.department_name, D.nama_principal')
						->join('tb_transaksi B', 'A.no_bukti = B.no_bukti')
						->join('tb_department C', 'B.id_department = C.id_department')
						->join('tb_principal D', 'B.id_principal = D.id_principal')
						->order_by('B.created_time', 'asc')
						->get('tb_verifikasi_ppu A')
						->result();
	}

}