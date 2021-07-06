<?php 
/**
 * 
 */
class Anggaran extends MX_Controller 
{

	public $_company = "";

	public $_data = array(
		'title' => "Anggaran",
		'css' => "",
		'js' => "",
		'content' => ""
	);
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Anggaran_model', 'anggaran');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}

		$this->_company = $this->session->userdata('company');
	}

	public function index() 
	{
		// $this->_data['css'] = "layout-part/index-css";
		// $this->_data['js'] = "layout-part/index-js";
		// $this->_data['content'] = "index";

		// $table = $this->operational->readAllOperational();

		// if ($table) {
		// 	$this->_data['table_data'] = $table;
		// }

		// $this->load->view('layout', $this->_data);

		redirect('anggaran/add', 'refresh');
	}

	public function add() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "add";
		$this->_data['ppuVerified'] = $this->anggaran->getVerifiedPPU();
		$this->_data['dataAcc'] = $this->anggaran->getAccount();
		$this->_data['noAnggaran'] = 'MK'. date("yhmids");

		if ($_POST) {
			
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function edit($noBukti) 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "edit";
		$this->_data['ppuVerified'] = $this->anggaran->getVerifiedPPU();
		$this->_data['dataAcc'] = $this->anggaran->getAccount();

		if ($_POST) {
			
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function delete($id) 
	{
		$this->pelabuhan->delete(array('id_pelabuhan' => $id));

		redirect('pelabuhan');
	}

	public function getDataAccount() {

		$dataAccountBank = $this->anggaran->getDetailAccount($_POST['noAcc'], $_POST['namaAcc']);
		echo json_encode($dataAccountBank);
	}

}