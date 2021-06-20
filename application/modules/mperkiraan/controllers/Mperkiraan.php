<?php 
/**
 * 
 */
class Mperkiraan extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MPerkiraan_model', 'mperkiraan');
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
		
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "add";

		$this->_data['dataLevel'] = $this->mperkiraan->getLevel1();

		if ($_POST) {
			// $data = array(
			// 			'position' => $_POST['position'],
			// 			'init' => $_POST['init'],
			// 			'created_time' => date('Y-m-d H:i:s'),
			// 			'created_by' => $this->session->userdata('nama'),
			// 			'updated_time' => date('Y-m-d H:i:s'),
			// 			'updated_by' => $this->session->userdata('nama')
			// 		);
			// // print_r($_POST);
			// $this->position->insertPosition($data);
			// redirect('position','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
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

	public function getAccLevel2($noAcc)
	{
		$dataAccLevel2 = $this->mperkiraan->getLevel2($noAcc);
		echo json_encode($dataAccLevel2);
	}

	public function getAccLevel3($noAcc)
	{
		$dataAccLevel3 = $this->mperkiraan->getLevel3($noAcc);
		echo json_encode($dataAccLevel3);
	}

	public function getAccLevel4($noAcc)
	{
		$dataAccLevel4 = $this->mperkiraan->getLevel4($noAcc);
		echo json_encode($dataAccLevel4);
	}

	public function getAccLevel5($noAcc)
	{
		$dataAccLevel5 = $this->mperkiraan->getLevel5($noAcc);
		echo json_encode($dataAccLevel5);
	}	
}