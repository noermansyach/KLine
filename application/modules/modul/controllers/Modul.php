<?php 
/**
 * 
 */
class Modul extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Modul_model', 'mModul');
	}

	public $_data = array(
		'title' => "Modul",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";

		// get table data parameter (where = array(), orderby = "[string]")
		// $table = $this->mModul->get_all("", "updated_at DESC"); 
		$table = $this->mModul->read();
		if ($table) {
			$this->_data['table_data'] = $table;
		} else {
			$this->_data['table_data'] = "Tidak ada data untuk ditampilkan";
		}

		$this->load->view('layout', $this->_data);
	}

	public function add() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "add";
		$this->_data['kodeSuplier'] = "SUP-" . date("ymdhis");

		if ($_POST) {
			$insert_suplier = $this->input->post(null, true);
			$dataSuplier = array(
								'kd_suplier' => $_POST['kd_suplier'],
								'nama_suplier' => $_POST['nama_suplier'],
								'alamat' => $_POST['alamat'],
								'telp' => $_POST['telp'],
								'status' => 1
			);
			$this->suplier->insert($dataSuplier);
			redirect('suplier','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function edit($id) 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "edit";
		$this->_data['kodeSuplier'] = $id;

		if ($_POST) {
			$where = "kd_suplier = '" . $id . "'";
			$data = array(
					'nama_suplier' => $_POST['nama_suplier'],
					'alamat' => $_POST['alamat'],
					'telp' => $_POST['telp']
			);
			$produk = $this->suplier->update($where, $data);
		} else { 
			$where = "kd_suplier = '" . $id . "'";
			$this->_data['dataSuplier'] = $this->suplier->get_where($where)->row();
			$this->load->view('layout', $this->_data);
		}
	}

	public function delete($id) 
	{
		$where = "kd_suplier = '". $id ."'";
		$data = array(
						'status' => 0 
					);
		$suplier = $this->suplier->update($where, $data);
		redirect('suplier','refresh');
	}

	public function detail($id)
	{
		$where = "id_suplier = $id";
		$suplier_profil = $this->suplier->get_where($where)->row();

		echo json_encode($suplier_profil);
	}

}