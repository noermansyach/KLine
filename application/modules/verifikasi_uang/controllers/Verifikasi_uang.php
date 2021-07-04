<?php 
/**
 * 
 */
class Verifikasi_uang extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Verifikasi_uang_model', 'verifikasi');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Verifikasi Uang",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";

		// get table data parameter (where = array(), orderby = "[string]")
		$table = $this->verifikasi->readAllListVerifikasi(); 
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
		

		if ($_POST) {
			// $date=date_create($_POST['ta']);
			// $tglBerangkat = date_format($date,"Y-m-d");

			// $date=date_create($_POST['td']);
			// $tglTiba = date_format($date,"Y-m-d");
			// $data = array(
			// 				'id_kunjungan' => $_POST['idTransaksi'],
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

	public function edit($idTransaksi) 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "edit";
		$this->_data['dataTransaksi'] = $this->verifikasi->getDataTransaksi($idTransaksi);

		$this->_data['dataAcc'] = $this->verifikasi->getAccountContra($this->_data['dataTransaksi']->no_acc, $this->_data['dataTransaksi']->nama_acc);

		if ($_POST) {
			$no = 1;
			$dataVerifikasi = array(
							'id_verifikasi' => date("hsiymd") . $no . rand(1, 100),
							'no_bukti' => $_POST['noBukti'],
							'no_ppu' => $_POST['noPPU'],
							'id_department' => $_POST['idDepartment'],
							'id_principal' => $_POST['idPrincipal'],
							'debitKredit' => $_POST['debitKredit'], 
							'status' => ($_POST['receivePayment'] == 'KELUAR') ? 'P' : 'R',
							'no_acc_contra' => $_POST['noAccContra'],
							'nama_acc_contra' => $_POST['namaAccContra'],
							'id_company' => $this->session->userdata('company'),
							'created_time' => date('Y-m-d H:i:s'),
							'created_by' => $this->session->userdata('nama'),
							'updated_time' => date('Y-m-d H:i:s'),
							'updated_by' => $this->session->userdata('nama')
					);
			$this->verifikasi->insertVerifikasi($dataVerifikasi, $idTransaksi);

			$dataOperational = array(
										'approved_by' => $this->session->userdata('employeeId')
									);
			$this->verifikasi->updatePPU($dataOperational, $idTransaksi);
			
			$urlBaru = 'verifikasi_uang/detail/'. $idTransaksi;
			redirect($urlBaru, 'refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function detail($idTransaksi)
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "detail";
		$this->_data['dataTransaksi'] = $this->verifikasi->getTransaksiVerified($idTransaksi);
		
		
		$this->load->view('layout', $this->_data);
		
	}

	public function delete($id) 
	{
		$this->pelabuhan->delete(array('id_pelabuhan' => $id));

		redirect('pelabuhan');
	}

	// public function detail($id)
	// {
	// 	$where = "id_pelabuhan = '" . $id ."'";
	// 	$pelabuhanData = $this->pelabuhan->get_where($where)->row();
	// 	echo json_encode($pelabuhanData);
	// }

}