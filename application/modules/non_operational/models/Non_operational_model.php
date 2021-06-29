<?php 
/**
 * 
 */
class Non_operational_model extends MY_Model
{

	public function readAllNonOPerational()
	{
		return $this->db->select('B.nama_acc, A.*')
						->join('tb_perkiraan B', 'A.no_acc = B.no_acc')
						->get('tb_principal A')
						->result();
	}
	
	public function insertPrincipal($data) 
	{
		return $this->db->insert('tb_principal', $data);
	}

	public function updatePrincipal($data, $idPrincipal) {
		return $this->db->where('id_principal', $idPrincipal)
				    	->update('tb_principal', $data);
		
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

}