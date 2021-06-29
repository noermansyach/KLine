<?php 
/**
 * 
 */
class Position extends MX_Controller 
{
	public $_company = "";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Position_model', 'position');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
		$this->_company = $this->session->userdata('company');
	}

	public $_data = array(
		'title' => "Position",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";

		$table = $this->position->readAllPosition($this->_company); 
		if ($table) {
			$this->_data['tableData'] = $table;
		}

		$this->load->view('layout', $this->_data);
	}

	public function add() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "add";

		if ($_POST) {
			$data = array(
						'position' => $_POST['positionName'],
						'init' => $_POST['initName'],
						'id_company' => $this->_company,
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			$this->position->insertPosition($data);
			redirect('position','refresh');
		}
	}

	public function edit() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";

		if ($_POST) {
			$data = array(
							'position' 	=> $_POST['position'],
						  	'init' 		=> $_POST['init']
			);
			$this->position->updatePosition($_POST['positionId'], $data);
			redirect('position','refresh');
		}
	}

	public function delete($id) 
	{
		$this->position->delete(array('id_position' => $id));

		redirect('position');
	}

	public function detail($id)
	{
		$where = "id_position = $id";
		$positionData = $this->position->getPosition($id);
		echo json_encode($positionData);
	}

}