<?php 
/**
 * 
 */
class Company extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Company_model', 'company');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Company",
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
		$table = $this->company->readAllCompany(); 
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
		// $this->_data['kodeSuplier'] = "SUP-" . date("ymdhis");

		if ($_POST) {
			$data = array(
						'currency' => $_POST['currency'],
						'init' => $_POST['init'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			// print_r($_POST);
			$this->currency->insertCurrency($data);
			redirect('currency','refresh');
		}
	}

	public function edit() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";

		$filter = array( 'id_currency' => $_POST['id_currency']);
		$data = array('currency' => $_POST['currency'],
					  'init' => $_POST['init']);
		$this->currency->updateCurrency($filter, (object) $data);
		redirect('currency','refresh');
	}

	public function delete($id) 
	{
		$this->currency->delete(array('id_currency' => $id));

		redirect('currency');
	}

	public function detail($id)
	{
		$where = "id_currency = $id";
		$currencyData = $this->currency->get_where($where)->row();

		echo json_encode($currencyData);
	}

}