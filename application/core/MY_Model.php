<?php 

/**
 * Ini adalah class core
 */
class My_Model extends CI_Model
{
	// Nama table database yang akan digunakan.
	protected $_tabel = '';

	// Jumlah data yang akan ditampilkan per halaman (paging)
	protected $_per_page = 0;

	// Offset untuk limit (paging)
	protected $_offset = 0;

	public function __construct()
	{
		parent::__construct();

		// Menebak nama tabel database berdasarkan nama model.
		if (!$this->_tabel) {
			$this->_tabel = 'tb_' . strtolower(str_replace('_model', '', get_class($this)));
		}
	}

	// Ambil beberapa record, menerima beberapa pola "where".
	// public function get_all()
	public function get_all($where, $order_by)
	{
		// cek apakah terdapat parameter
		if (is_array($where)) {
			$this->db->where($where);
		}

		// cek apakah terdapat sort
		if ($order_by != "") {
			$this->db->order_by($order_by);
		}
		
		return $this->db->get($this->_tabel)->result();
	}

	// Ambil 1 record menerima beberapa pola "where"
	public function get_where()
	{
		// Mendapatkan argumen yang akan dilewatkan ke fungsi
		$args = func_get_args();

		// $this->db->where('name', $name)
		// $this->db->where('name !=', $name);
		if (count($args) > 1) {
			$this->db->where($args[0], $args[1]);
		}
		// $this->db->where(3);
		elseif (count($args) == 1 && is_numeric($args[0])) {
			$this->db->where('id', $args[0]);
		}
		// $this->db->where(array('id' => $id, 'nama' => $nama));
		// $this->db->where("name='Joe' AND status='boss' or status='active'");
		else {
			$this->db->where($args[0]);
		}

		// Memastikan hanyak mengembalikan 1 record.
		$this->db->limit(1);

		// Mengembalikan hasil query.
		return $this->db->get($this->_tabel);
	}

	// Insert.
	public function insert($data)
	{
		$values = (object)$data;
		$values->created_at = $values->updated_at = date('Y-m-d H:i:s');
		$this->db->insert($this->_tabel, $values);
		return $this->db->insert_id();
	}


	// Update.
	public function update()
	{
		// Mendapatkan argumen yang dilewatkan ke fungsi ini.
		$args = func_get_args();

		// update('name', $name, $data);
		// update('name !=', $name, $data);
		if (count($args) > 2) {
			$this->db->where($args[0], $args[1]);
			$data = (object)$args[2];
		}
		// update(3, data)
		elseif (count($args) == 2 && is_numeric($args[0])) {
			$this->db->where('id', $args[0]);
			$data = (object)$args[1];
		}
		// update(array('id'=>$id, 'nama'=>$nama), $data)
		// update("name='Joe' AND status='boss' OR status='active'", $data)
		else {
			$this->db->where($args[0]);
			$data = (object)$args[1];
		}

		// // Pastikan hanya 1 record yang diupdate.
		$this->db->limit(1);

		// Set kolom updated_at
		// $data->updated_at = date('Y:m:d H:i:s');

		// update
		$values = (object)$data;
		$values->updated_at = date('Y-m-d H:i:s');
		$this->db->update($this->_tabel, $data);
	}

	// Hapus data berdasarkan id yang diberikan.
	public function delete($where)
	{
		$this->db->where($where)->limit(1)->delete($this->_tabel);
		
		if ($this->db->affected_rows() > 0) {
			return true;
		}

		return false;
	}
		
}