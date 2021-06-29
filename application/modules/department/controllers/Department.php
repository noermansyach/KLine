<?php 
/**
 * 
 */
class Department extends MX_Controller 
{
	
	public $_company = "";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Department_model', 'department');
		$this->load->model('company/Company_model', 'company');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
		$this->_company = $this->session->userdata('company');
	}

	public $_data = array(
		'title' => "Department",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";


		$table = $this->department->readAllDepartment($this->_company); 
		$this->_data['dataCompany'] = $this->company->readAllCompany();
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

		if ($_POST) {
			$data = array(
						'id_company' => $this->_company,
						'department_name' => $_POST['currency'],
						'init' => $_POST['init'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			$this->department->insertDepartment($data);
			redirect('department','refresh');
		}
	}

	public function edit() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";

		if ($_POST) {
			$filter = array( 'id_department' => $_POST['id_department']);
			$data = array(
							'department_name' => $_POST['department_name'],
						  	'init' => $_POST['init']
						);
			$this->department->updateDepartment($_POST['departmentId'], $data);
			redirect('department','refresh');	
		}
	}

	public function delete($id) 
	{
		$this->department->delete(array('id_department' => $id));

		redirect('department');
	}

	public function detail($id)
	{
		// $where = "id_department = $id";
		$departmentData = $this->department->getDepartment($id);
		echo json_encode($departmentData);
	}
}