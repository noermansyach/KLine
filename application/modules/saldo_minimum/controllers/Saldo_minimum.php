<?php 
/**
 * 
 */
class Saldo_minimum extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Saldo_minimum_model', 'saldoMinimum');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Saldo Minimum",
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
		$table = $this->saldoMinimum->readAllMinimum(); 
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

		$filter = array( 'no_acc' => $_POST['noAcc']);
		$data = array('saldo_min' => $_POST['saldoMinimum']);
		$this->saldoMinimum->updateMinimum($filter, $data);
		redirect('saldo_minimum','refresh');
	}

	public function delete($id) 
	{
		$this->saldo->delete(array('id_currency' => $id));

		redirect('currency');
	}

	public function detail($id)
	{
		$where = "no_acc = $id";
		$saldoMinimumData = $this->saldoMinimum->getAccSaldoMinimum($id)->row();

		echo json_encode($saldoMinimumData);
	}

}