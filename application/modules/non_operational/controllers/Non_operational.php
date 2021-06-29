<?php 
/**
 * 
 */
class Non_operational extends MX_Controller 
{

	public $_company = "";

	public $_data = array(
		'title' => "Non-Operasional",
		'css' => "",
		'js' => "",
		'content' => ""
	);
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Non_operational_model', 'nonOperational');
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

		// $table = $this->principal->readAllPrincipal();

		// if ($table) {
		// 	$this->_data['table_data'] = $table;
		// }

		// $this->load->view('layout', $this->_data);
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "add";
		$this->_data['noBukti'] = date("ymdhsi") . rand(1, 100);
		$this->_data['principalList'] = $this->nonOperational->getPrincipal();
		$this->_data['departementList'] = $this->nonOperational->getDepartment($this->_company);
		$this->_data['tanggalBuat'] = date('d-m-Y');

		if ($_POST) {
			// $dataPrincipal = array(
			// 	'id_principal' => $_POST['idPrincipal'],
			// 	'nama_principal' => $_POST['namaPrincipal'],
			// 	'inisial_nama' => $_POST['initPrincipal'],
			// 	'is_dk_note' => $_POST['dkNote'],
			// 	'alamat' => $_POST['alamatSatu'],
			// 	'alamat_kedua' => $_POST['alamatDua'],
			// 	'kode_pos' => $_POST['kodePos'], 
			// 	'iso_code' => $_POST['selectCountry'],
			// 	'kode_area_telp_satu' => $_POST['areaTelpSatu'],
			// 	'telepon_satu' => $_POST['teleponSatu'], 
			// 	'kode_area_telp_dua' => $_POST['areaTelpDua'],
			// 	'telepon_dua' => $_POST['teleponDua'],
			// 	'kode_area_fax' => $_POST['areaFax'],
			// 	'fax' => $_POST['fax'],
			// 	'contact_person' => $_POST['contactPerson'],
			// 	'no_acc' => $_POST['selectAccount'],
			// 	'created_time' => date('Y-m-d H:i:s'),
			// 	'created_by' => $this->session->userdata('nama'),
			// 	'updated_time' => date('Y-m-d H:i:s'),
			// 	'updated_by' => $this->session->userdata('nama')
			// );
			// $this->principal->insertPrincipal($dataPrincipal);
			// redirect('principal','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function add() 
	{
		
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "add";
		$this->_data['noBukti'] = date("ymdhsi") . rand(1, 100);

		if ($_POST) {
			$dataPrincipal = array(
				'id_principal' => $_POST['idPrincipal'],
				'nama_principal' => $_POST['namaPrincipal'],
				'inisial_nama' => $_POST['initPrincipal'],
				'is_dk_note' => $_POST['dkNote'],
				'alamat' => $_POST['alamatSatu'],
				'alamat_kedua' => $_POST['alamatDua'],
				'kode_pos' => $_POST['kodePos'], 
				'iso_code' => $_POST['selectCountry'],
				'kode_area_telp_satu' => $_POST['areaTelpSatu'],
				'telepon_satu' => $_POST['teleponSatu'], 
				'kode_area_telp_dua' => $_POST['areaTelpDua'],
				'telepon_dua' => $_POST['teleponDua'],
				'kode_area_fax' => $_POST['areaFax'],
				'fax' => $_POST['fax'],
				'contact_person' => $_POST['contactPerson'],
				'no_acc' => $_POST['selectAccount'],
				'created_time' => date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('nama'),
				'updated_time' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->userdata('nama')
			);
			$this->principal->insertPrincipal($dataPrincipal);
			redirect('principal','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function edit($idPrincipal) 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "edit";
		$this->_data['principalData'] = $this->principal->getPrincipal($idPrincipal);
		$this->_data['countryData'] = $this->principal->getCountry();
		$this->_data['dataAccount'] = $this->principal->getAccount();
		$this->_data['tanggalBuat'] = date('d-m-Y');

		if ($_POST) {
			$dataPrincipal = array(
				'nama_principal' => $_POST['namaPrincipal'],
				'inisial_nama' => $_POST['initPrincipal'],
				'is_dk_note' => $_POST['dkNote'],
				'alamat' => $_POST['alamatSatu'],
				'alamat_kedua' => $_POST['alamatDua'],
				'kode_pos' => $_POST['kodePos'], 
				'iso_code' => $_POST['selectCountry'],
				'kode_area_telp_satu' => $_POST['areaTelpSatu'],
				'telepon_satu' => $_POST['teleponSatu'], 
				'kode_area_telp_dua' => $_POST['areaTelpDua'],
				'telepon_dua' => $_POST['teleponDua'],
				'kode_area_fax' => $_POST['areaFax'],
				'fax' => $_POST['fax'],
				'contact_person' => $_POST['contactPerson'],
				'no_acc' => $_POST['selectAccount'],
				'created_time' => date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('nama'),
				'updated_time' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->userdata('nama')
			);
			$this->principal->updatePrincipal($dataPrincipal, $_POST['idPrincipal']);
			redirect('principal','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function delete($id) 
	{
		$this->pelabuhan->delete(array('id_pelabuhan' => $id));

		redirect('pelabuhan');
	}

	public function generatePpuNumber($noPPU) {
		$noPPU = str_replace("-", "/", $noPPU);
		$lastPpuNumber = $this->nonOperational->getLastPpuNumber($noPPU);
		
		if ($lastPpuNumber->num_rows() != 0) {
			$ppuArray = explode("/", $lastPpuNumber->row()->no_ppu);
			$numberAutomatic = (int) $ppuArray[4];
			$numberAutomatic++;

			if ($numberAutomatic <= 9) {
				$numberAutomatic = "000" . $numberAutomatic;
			} elseif ($numberAutomatic > 9 && $numberAutomatic <= 99) {
				$numberAutomatic = "00" . $numberAutomatic;
			} elseif ($numberAutomatic > 99 && $numberAutomatic <= 999) {
				$numberAutomatic = "0" . $numberAutomatic;
			}
			$noPPU = $noPPU . "" . $numberAutomatic;
		} else {
			$noPPU = $noPPU . "0001";
		}

		$noPPU = str_replace("/", "-", $noPPU);
		echo json_encode($noPPU);
	}

	

}