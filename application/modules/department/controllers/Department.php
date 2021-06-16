<?php 
/**
 * 
 */
class Department extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Department_model', 'department');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
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

		$table = $this->department->readAllDepartment(); 
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

		$filter = array( 'id_department' => $_POST['id_department']);
		$data = array('department_name' => $_POST['department_name'],
					  'init' => $_POST['init']);
		$this->department->updateDepartment($filter, (object) $data);
		redirect('department','refresh');
	}

	public function delete($id) 
	{
		$this->department->delete(array('id_department' => $id));

		redirect('department');
	}

	public function detail($id)
	{
		$where = "id_department = $id";
		$departmentData = $this->department->get_where($where)->row();

		echo json_encode($departmentData);
	}

}