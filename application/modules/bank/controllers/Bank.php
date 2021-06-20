<?php 
/**
 * 
 */
class Bank extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Bank_model', 'bank');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Bank",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";


		$table = $this->bank->readAllBank(); 
		if ($table) {
			$this->_data['table_data'] = $table;
		}

		$this->load->view('layout', $this->_data);
	}

	public function add() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";

		if ($_POST) {
			$data = array(
						'nama_bank' => $_POST['nama_bank'],
						'initial' => $_POST['initial'],
						'no_rek' => $_POST['no_rek'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			$this->bank->insertBank($data);
			redirect('bank','refresh');
		}
	}

	public function edit() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";

		$filter = array( 'id_bank' => $_POST['id_bank']);
		$data = array('nama_bank' => $_POST['nama_bank'],
					  'initial' => $_POST['initial'],
					  'no_rek' => $_POST['no_rek'],
					);
		$this->bank->updateBank($filter, (object) $data);
		redirect('bank','refresh');
	}

	public function delete($id) 
	{
		$this->bank->delete(array('id_bank' => $id));

		redirect('bank');
	}

	public function detail($id)
	{
		$where = "id_bank = $id";
		$bankData = $this->bank->get_where($where)->row();

		echo json_encode($bankData);
	}
}