<?php 
/**
 * 
 */
class Perkiraan extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perkiraan_model', 'perkiraan');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Perkiraan",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";

		$table = $this->perkiraan->readAllPerkiraan(); 
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
						'position' => $_POST['position'],
						'init' => $_POST['init'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			// print_r($_POST);
			$this->position->insertPosition($data);
			redirect('position','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function edit() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";

		$filter = array( 'id_position' => $_POST['id_position']);
		$data = array('position' => $_POST['position'],
					  'init' => $_POST['init']);
		$this->position->updatePosition($filter, (object) $data);
		redirect('position','refresh');
	}

	public function delete($id) 
	{
		$this->position->delete(array('id_position' => $id));

		redirect('position');
	}

	public function detail($id)
	{
		$where = "id_position = $id";
		$positionData = $this->position->get_where($where)->row();

		echo json_encode($positionData);
	}

}