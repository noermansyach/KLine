<?php 
/**
 * 
 */
class Operational extends MX_Controller 
{

	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Principal_model', 'principal');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Principal",
		'css' => "",
		'js' => "",
		'content' => ""
	);

	public function index() 
	{
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";

		$table = $this->principal->readAllPrincipal();

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
		$this->_data['idPrincipal'] = date("dmhsi") . rand(1, 100);
		$this->_data['countryData'] = $this->principal->getCountry();
		$this->_data['dataAccount'] = $this->principal->getAccount();

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

	public function detail($id)
	{
		$where = "id_pelabuhan = '" . $id ."'";
		$pelabuhanData = $this->pelabuhan->get_where($where)->row();
		echo json_encode($pelabuhanData);
	}

}