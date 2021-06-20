<?php 
/**
 * 
 */
class Akun_bunglon extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Akun_bunglon_model', 'akunBunglon');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Akun Bunglon",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";


		$table = $this->akunBunglon->readAllAkunBunglon(); 
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
						'jenis_jurnal' => $_POST['jenis_jurnal'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			$this->jenisJurnal->insertJenisJurnal($data);
			redirect('jenis_jurnal','refresh');
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
		$this->jenisJurnal->delete(array('id_jenis_jurnal' => $id));

		redirect('jenis_jurnal');
	}

	public function detail($id)
	{
		$where = "id_kas_bank = $id";
		$kasBankData = $this->kasBank->get_where($where)->row();

		echo json_encode($kasBankData);
	}
}