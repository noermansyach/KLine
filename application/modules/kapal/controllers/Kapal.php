<?php 
/**
 * 
 */
class Kapal extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kapal_model', 'kapal');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Kapal",
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
		$table = $this->kapal->readAllKapal(); 
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
			$idKapal = "KPL". date("yhmids");
			$data = array(
						'id_kapal' => $idKapal,
						'nama_kapal' => $_POST['namaKapal'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			// print_r($_POST);
			$this->kapal->insertKapal($data);
			redirect('kapal','refresh');
		}
	}

	public function edit() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";

		$filter = array( 'id_kapal' => $_POST['idKapal']);
		$data = array('nama_kapal' => $_POST['namaKapal']);
		$this->kapal->updateKapal($filter, (object) $data);
		redirect('kapal','refresh');
	}

	public function delete($id) 
	{
		$this->kapal->delete(array('id_kapal' => $id));

		redirect('kapal');
	}

	public function detail($id)
	{
		$where = "id_kapal = '" . $id ."'";
		$kapalData = $this->kapal->get_where($where)->row();
		echo json_encode($kapalData);
	}

}