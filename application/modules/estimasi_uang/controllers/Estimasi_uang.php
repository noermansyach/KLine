<?php 
/**
 * 
 */
class Estimasi_uang extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Estimasi_uang_model', 'estimasiUang');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Estimasi Uang",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		// $this->_data['css'] = "layout-part/index-css";
		// $this->_data['js'] = "layout-part/index-js";
		// $this->_data['content'] = "index";

		// // get table data parameter (where = array(), orderby = "[string]")
		// $table = $this->estimasiUang->readAllKunjungan(); 
		// if ($table) {
		// 	$this->_data['table_data'] = $table;
		// }

		// $this->load->view('layout', $this->_data);
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "add";
		$this->_data['idTransKunjungan'] = "TR" . date("yhmids");
		$this->_data['tglTransaksi'] = date('d/m/Y');

		if ($_POST) {
			// $date=date_create($_POST['ta']);
			// $tglBerangkat = date_format($date,"Y-m-d");

			// $date=date_create($_POST['td']);
			// $tglTiba = date_format($date,"Y-m-d");
			// $data = array(
			// 				'id_transaksi' => $_POST['idTransaksi'],
			// 				'id_company' => $this->session->userdata('company'),
			// 				'tgl_transaksi' => date('Y-m-d'),
			// 				'id_kapal' => $_POST['selectMV'],
			// 				'id_pelabuhan' => $_POST['selectPort'],
			// 				'voyage' => $_POST['voyage'],
			// 				'tgl_berangkat' => $tglBerangkat,
			// 				'tgl_tiba' => $tglTiba,
			// 				'no_acc' => $_POST['selectAcc'],
			// 				'is_close' => "OPEN",
			// 				'is_bayar' => "NO",
			// 				'is_batal' => "NO",
			// 				'created_time' => date('Y-m-d H:i:s'),
			// 				'created_by' => $this->session->userdata('nama'),
			// 				'updated_time' => date('Y-m-d H:i:s'),
			// 				'updated_by' => $this->session->userdata('nama')
			// 		);
			// // print_r($data);
			// $this->kunjungan->insertKunjungan($data);
			// redirect('kunjungan');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function add() 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "add";
		$idTransKunjungan = "TR" . date("yhmids");
		$this->_data['idTransKunjungan'] = $idTransKunjungan;
		$this->_data['tglTransaksi'] = date('d/m/Y');
		$this->_data['dataMv'] = $this->kapal->readAllKapal();
		$this->_data['dataPort'] = $this->pelabuhan->readAllPelabuhan();
		$this->_data['dataAcc'] = $this->kunjungan->getAccLevelSix();

		if ($_POST) {
			$date=date_create($_POST['ta']);
			$tglBerangkat = date_format($date,"Y-m-d");

			$date=date_create($_POST['td']);
			$tglTiba = date_format($date,"Y-m-d");
			$data = array(
							'id_transaksi' => $_POST['idTransaksi'],
							'id_company' => $this->session->userdata('company'),
							'tgl_transaksi' => date('Y-m-d'),
							'id_kapal' => $_POST['selectMV'],
							'id_pelabuhan' => $_POST['selectPort'],
							'voyage' => $_POST['voyage'],
							'tgl_berangkat' => $tglBerangkat,
							'tgl_tiba' => $tglTiba,
							'no_acc' => $_POST['selectAcc'],
							'is_close' => "OPEN",
							'is_bayar' => "NO",
							'is_batal' => "NO",
							'created_time' => date('Y-m-d H:i:s'),
							'created_by' => $this->session->userdata('nama'),
							'updated_time' => date('Y-m-d H:i:s'),
							'updated_by' => $this->session->userdata('nama')
					);
			// print_r($data);
			$this->kunjungan->insertKunjungan($data);
			redirect('kunjungan');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function edit($idTransaksi) 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "edit";
		$this->_data['dataKunjungan'] = $this->kunjungan->getDataTransaksi($idTransaksi);
		$this->_data['dataMv'] = $this->kapal->readAllKapal();
		$this->_data['dataPort'] = $this->pelabuhan->readAllPelabuhan();
		$this->_data['dataAcc'] = $this->kunjungan->getAccLevelSix();

		if ($_POST) {
			$date=date_create($_POST['ta']);
			$tglBerangkat = date_format($date,"Y-m-d");

			$date=date_create($_POST['td']);
			$tglTiba = date_format($date,"Y-m-d");
			$data = array(
							'id_company' => $this->session->userdata('company'),
							'id_kapal' => $_POST['selectMV'],
							'id_pelabuhan' => $_POST['selectPort'],
							'voyage' => $_POST['voyage'],
							'tgl_berangkat' => $tglBerangkat,
							'tgl_tiba' => $tglTiba,
							'no_acc' => $_POST['selectAcc'],
							'is_close' => $_POST['isClose'],
							'is_bayar' => "NO",
							'is_batal' => "NO",
							'created_time' => date('Y-m-d H:i:s'),
							'created_by' => $this->session->userdata('nama'),
							'updated_time' => date('Y-m-d H:i:s'),
							'updated_by' => $this->session->userdata('nama')
					);
			// print_r($data);
			$this->kunjungan->updateKunjungan($data, $idTransaksi);
			redirect('kunjungan');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function delete($id) 
	{
		$this->pelabuhan->delete(array('id_pelabuhan' => $id));

		redirect('pelabuhan');
	}

	public function detail($id)
	{
		$where = "id_pelabuhan = '" . $id ."'";
		$pelabuhanData = $this->pelabuhan->get_where($where)->row();
		echo json_encode($pelabuhanData);
	}

}