<?php 
/**
 * 
 */
class Non_operational_model extends MY_Model
{

	public function readAllNonOPerational()
	{
		return $this->db->select('A.no_bukti, A.no_ppu, B.department_name, A.status as jenis_transaksi, A.created_time, C.nama_principal as 
								  dibayar_kepada')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_principal C', 'A.id_principal = C.id_principal')
						->order_by('A.no_ppu')
						->get('tb_non_operational A')
						->result();
	}
	
	public function insertNonOperational($data) 
	{
		return $this->db->insert('tb_non_operational', $data);
	}

	public function updatePrincipal($data, $idPrincipal) {
		return $this->db->where('id_principal', $idPrincipal)
				    	->update('tb_principal', $data);
		
	}

	public function saveQrCode($data, $noBukti) {
		return $this->db->where('no_bukti', $noBukti)
				    	->update('tb_non_operational', $data);
	}

	public function getBarCodeData($noBukti) 
	{
		return $this->db->where('no_bukti', $noBukti)
						->get('tb_non_operational')
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
						->get('tb_non_operational');
	}

	public function getPrincipal()
	{
		return $this->db->select('*')
						->order_by('id_principal', 'asc')
						->get('tb_principal')
						->result();
	}

	public function getDataPPU($noBukti)
	{
		return $this->db->select('A.no_bukti, A.no_ppu, B.department_name, A.status as jenis_transaksi, A.created_time, C.nama_principal as 
								  dibayar_kepada, A.jumlah, A.terbilang, A.ket_1, A.ket_2, A.ket_3, A.created_by')
						->join('tb_department B', 'A.id_department = B.id_department')
						->join('tb_principal C', 'A.id_principal = C.id_principal')
						->where('A.no_bukti', $noBukti)
						->order_by('A.no_ppu')
						->get('tb_non_operational A')
						->row();
	}

}