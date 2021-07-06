<?php 
/**
 * 
 */
class Transaksi_model extends MY_Model
{

	public function readAllOperational()
	{
		return $this->db->select('A.no_transaksi, A.no_ppu, B.department_name, A.tipe_transaksi as jenis_transaksi, A.created_time, C.nama_principal as 
								  dibayar_kepada, A.acknowledge_by, A.approved_by, D.company_name')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_principal C', 'A.id_principal = C.id_principal')
						->join('tb_company D', 'A.id_company = D.id_company')
						->order_by('A.no_ppu')
						->get('tb_transaksi_fix A')
						->result();
	}
	
	public function insertTransaksi($data) 
	{
		return $this->db->insert('tb_transaksi_fix', $data);
	}

	public function updateTransaksi($data, $noBukti) {
		return $this->db->where('no_transaksi', $noBukti)
				    	->update('tb_transaksi_fix', $data);
		
	}

	public function saveQrCode($data, $noBukti) {
		return $this->db->where('no_transaksi', $noBukti)
				    	->update('tb_transaksi_fix', $data);
	}

	public function getBarCodeData($noBukti) 
	{
		return $this->db->where('no_transaksi', $noBukti)
						->get('tb_transaksi_fix')
						->row();
	}

	public function getDepartment($idCompany)
	{
		return $this->db->where('id_company', $idCompany)
						->order_by('id_department', 'asc')
						->get('tb_department')
						->result();
	}

	public function getLastPpuNumber($noPpu)
	{
		return $this->db->select('no_ppu')
						->like('no_ppu', $noPpu)
						->order_by('no_ppu', 'desc')
						->limit(1)
						->get('tb_transaksi_fix');
	}

	public function getPrincipal()
	{
		return $this->db->select('*')
						->order_by('id_principal', 'asc')
						->get('tb_principal')
						->result();
	}

	public function getDataPPUdua($noTransaksi) {
		// select E.id_kunjungan, E.voyage, E.tgl_berangkat, E.tgl_tiba, F.nama_pelabuhan, G.nama_kapal,A.* from tb_transaksi_fix A
		// join tb_company B on A.id_company = B.id_company
		// join tb_department C on A.id_department = C.id_department
		// join tb_principal D on A.id_principal = D.id_principal
		// left join tb_kunjungan E on A.id_kunjungan = E.id_kunjungan
		// left join tb_pelabuhan F on E.id_pelabuhan = F.id_pelabuhan
		// left join tb_kapal G on E.id_kapal = G.id_kapal
		// A.no_transaksi = ''
		return $this->db->select('E.id_kunjungan as id_vesel, E.voyage, E.tgl_berangkat, E.tgl_tiba, F.nama_pelabuhan, G.nama_kapal,A.*, C.department_name,
								  D.nama_principal, B.company_name, Z.employee_name')
						->join('tb_company B', 'A.id_company = B.id_company')
						->join('tb_department C', 'A.id_department = C.id_department')
						->join('tb_principal D', 'A.id_principal = D.id_principal')
						->join('tb_karyawan Z', 'A.updated_by = Z.id_employee')
						->join('tb_kunjungan E', 'A.id_kunjungan = E.id_kunjungan','left')
						->join('tb_pelabuhan F', 'E.id_pelabuhan = F.id_pelabuhan','left')
						->join('tb_kapal G', 'E.id_kapal = G.id_kapal','left')
						->where('A.no_transaksi', $noTransaksi)
						->get('tb_transaksi_fix A')
						->row();
	}

	public function getDataPPU($noBukti)
	{
		return $this->db->select('A.no_transaksi, A.no_ppu, B.id_department, B.department_name, A.status as jenis_transaksi, A.created_time, 
								  C.nama_principal as dibayar_kepada, C.id_principal, A.jumlah, A.terbilang, A.ket_1, A.ket_2, A.ket_3, A.created_by, D.id_employee as acknowledgeBy,
								  F.id_kunjungan, G.nama_kapal, F.voyage, F.tgl_berangkat as eta, F.tgl_tiba as etd, H.nama_pelabuhan, A.no_acc_bank, A.no_rekening')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_principal C', 'A.id_principal = C.id_principal')
						->join('tb_karyawan D', 'A.acknowledge_by = D.id_employee')
						// ->join('tb_karyawan E', 'A.approved_by = E.id_employee')
						->join('tb_kunjungan F', 'A.id_kunjungan = F.id_kunjungan')
						->join('tb_kapal G', 'F.id_kapal = G.id_kapal')
						->join('tb_pelabuhan H', 'F.id_pelabuhan = H.id_pelabuhan')
						->where('A.no_transaksi', $noBukti)
						->order_by('A.no_ppu')
						->get('tb_transaksi_fix A')
						->row();
	}

	public function getVesel() {
		// nanti ini dikasih parameter apabila sudah ada vesel yang telah terdaftar di ppu
		$kunjunganTB =  $this->db->select('A.*, B.nama_kapal')
								 ->join('tb_kapal B', 'A.id_kapal = B.id_kapal')
								 ->join('tb_transaksi_fix C', 'A.id_kunjungan = C.id_kunjungan', 'left')
								 ->where('C.id_kunjungan', null)
								 ->get('tb_kunjungan A')
							     ->result();
		return $kunjunganTB;
	}

	public function getVeselEdit($idVesel) {
		$kunjunganTB =  $this->db->select('A.*, B.nama_kapal')
								 ->join('tb_kapal B', 'A.id_kapal = B.id_kapal')
								 ->join('tb_transaksi_fix C', 'A.id_kunjungan = C.id_kunjungan', 'left')
								 ->where('C.id_kunjungan', null)
								 ->or_where('C.id_kunjungan', $idVesel)
								 ->get('tb_kunjungan A')
							     ->result();
		return $kunjunganTB;	
	}

	public function getVeselById($idKunjungan) {
		return $this->db->select('A.*, B.nama_pelabuhan, C.nama_kapal')
						->join('tb_pelabuhan B', 'A.id_pelabuhan = B.id_pelabuhan')
						->join('tb_kapal C', 'A.id_kapal = C.id_kapal')
						->where('A.id_kunjungan', $idKunjungan)
						->get('tb_kunjungan A')
						->row();
	}

	public function getAcknowledgeList() {
		return $this->db->where('id_department', '8')
						->where('id_position' , '9')
						->get('tb_karyawan')
						->result();
	}

	public function getApprovedList() {
		return $this->db->where('id_department', '8')
						->where('id_position' , '4')
						->get('tb_karyawan')
						->result();
	}

	public function getAccBankPerkiraan() {
		return $this->db->select('A.no_acc, A.nama_acc, A.init_kas_bank, B.currency, B.init, A.no_rek')
						->join('tb_currency B', 'A.id_currency = B.id_currency')
						->where('A.jenis_jurnal', 'BANK')
						->where('A.level', '6')
						->get('tb_perkiraan A')
						->result();
	}

	public function getNoRek($noAcc, $namaAcc, $initBank) {
		return $this->db->select('no_rek')
						->where('no_acc', $noAcc)
						->where('nama_acc', $namaAcc)
						->where('init_kas_bank', $initBank)
						->get('tb_perkiraan')
						->row();
	}

}