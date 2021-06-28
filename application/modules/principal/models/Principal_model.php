<?php 
/**
 * 
 */
class Principal_model extends MY_Model
{

	public function readAllPrincipal()
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

	public function getPrincipal($idPrincipal)
	{
		return $this->db->select('*')
						->where('id_principal', $idPrincipal)
						->get('tb_principal')
						->row();
	}

	public function getCountry()
	{
		return $this->db->get('tb_country')->result();
	}

	public function getAccount()
	{
		return $this->db->where('level', '6')
						->get('tb_perkiraan')
						->result();
	}

}