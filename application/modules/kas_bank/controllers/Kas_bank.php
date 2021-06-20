<?php 
/**
 * 
 */
class Kas_bank extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kas_bank_model', 'kasBank');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Kas Bank",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";


		$table = $this->kasBank->readAllBank(); 
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
						'kas_bank' => $_POST['nama_kas_bank'],
						'init_kas_bank' => $_POST['init_kas_bank'],
						'no_rekening' => $_POST['no_rekening'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			$this->kasBank->insertKasBank($data);
			redirect('kas_bank','refresh');
		}
	}

	public function edit() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";

		$filter = array( 'id_kas_bank' => $_POST['id_kas_bank']);
		$data = array('kas_bank' => $_POST['nama_kas_bank'],
					  'init_kas_bank' => $_POST['init_kas_bank'],
					  'no_rekening' => $_POST['no_rekening'],
					);
		$this->kasBank->updateKasBank($filter, (object) $data);
		redirect('kas_bank','refresh');
	}

	public function delete($id) 
	{
		$this->kasBank->delete(array('id_kas_bank' => $id));

		redirect('kas_bank');
	}

	public function detail($id)
	{
		$where = "id_kas_bank = $id";
		$kasBankData = $this->kasBank->get_where($where)->row();

		echo json_encode($kasBankData);
	}
}