<?php 
/**
 * 
 */
class User extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "User",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";

		$table = $this->user->readAllUser();

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
		$this->_data['companyList'] = $this->user->getCompanyList();
		$this->_data['levelList'] = $this->user->getLevel();

		if ($_POST) {
			$dataUser = array(
				'id_user' => date("dmyhsi") . rand(1, 100),
				'username' => trim(strtoupper($_POST['userName'])),
				'password' => md5('123456'),
				'is_active' => $_POST['isActive'],
				'id_department' => $_POST['departemenCode'],
				'id_position' => $_POST['positionCode'],
				'id_company' => $_POST['selectCompany'],
				'id_employee' => $_POST['selectEmployee'], 
				'id_level' => $_POST['selectLevel'],
				'created_time' => date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('nama'),
				'updated_time' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->userdata('nama')
			);
			$this->user->insertUser($dataUser);
			redirect('user','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function edit($idUser) 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "edit";
		$this->_data['userData'] = $this->user->getUser($idUser);
		$this->_data['companyList'] = $this->user->getCompanyList();
		$this->_data['levelList'] = $this->user->getLevel();

		if ($_POST) {
			$dataUser = array(
				'is_active' => $_POST['isActive'],
				'id_level' => $_POST['selectLevel'],
				'created_time' => date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('nama'),
				'updated_time' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->userdata('nama')
			);
			$this->user->updateUser($dataUser, $_POST['idUser']);
			redirect('user','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function delete($id) 
	{
		$this->pelabuhan->delete(array('id_pelabuhan' => $id));

		redirect('pelabuhan');
	}

	public function getEmployee($idCompany)
	{	
		$listEmployee = $this->user->getEmployeeList($idCompany);
		echo json_encode($listEmployee);
	}

	public function getEmployeeDepartmentPosition($idEmployee)
	{
		$dataDepartmentPosition = $this->user->getDepartmentPosition($idEmployee);
		echo json_encode($dataDepartmentPosition);
	}

	public function detail($id)
	{
		$where = "id_pelabuhan = '" . $id ."'";
		$pelabuhanData = $this->pelabuhan->get_where($where)->row();
		echo json_encode($pelabuhanData);
	}

}