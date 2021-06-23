<?php 
/**
 * 
 */
class Kunjungan extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kunjungan_model', 'kunjungan');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Kunjungan Kapal",
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
		$table = $this->kunjungan->readAllKunjungan(); 
		if ($table) {
			$this->_data['table_data'] = $table;
		}

		$this->load->view('layout', $this->_data);
	}

	public function add() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "add";
		// $this->_data['kodeSuplier'] = "SUP-" . date("ymdhis");

		if ($_POST) {
			$idPelabuhan = "PLB". date("yhmids");
			$data = array(
						'id_pelabuhan' => $idPelabuhan,
						'nama_pelabuhan' => $_POST['namaPelabuhan'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			// print_r($_POST);
			$this->pelabuhan->insertPelabuhan($data);
			redirect('pelabuhan','refresh');
		}
	}

	public function edit() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";

		$filter = array( 'id_pelabuhan' => $_POST['idPelabuhan']);
		$data = array('nama_pelabuhan' => $_POST['nama_pelabuhan']);
		$this->pelabuhan->updatePelabuhan($filter, (object) $data);
		redirect('pelabuhan','refresh');
	}

	public function delete($id) 
	{
		$this->pelabuhan->delete(array('id_pelabuhan' => $id));

		redirect('pelabuhan');
	}

	public function detail($id)
	{
		$where = "id_pelabuhan = '" . $id ."'";
		$pelabuhanData = $this->pelabuhan->get_where($where)->row();
		echo json_encode($pelabuhanData);
	}

}