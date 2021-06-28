<?php 
/**
 * 
 */
class Karyawan extends MX_Controller 
{

	public $_idCompany = "";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_model', 'karyawan');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
		$this->_idCompany = $this->session->userdata('company');
	}

	public $_data = array(
		'title' => "Karyawan",
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
		$table = $this->karyawan->readAllKaryawan(); 
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
		$this->_data['idKaryawan'] = date("ymdhis");
		$this->_data['departmentData'] = $this->karyawan->getDepartment($this->_idCompany);
		$this->_data['positionData'] = $this->karyawan->getPosition($this->_idCompany);

		if ($_POST) {
			$resignDate = '';
			if ($_POST['status'] == "resign") {
				$resignDate = $_POST['tanggalKeluar'];
			}
			$dataKaryawan = array(
				'id_employee' => $_POST['idKaryawan'],
				'employee_name' => $_POST['namaKaryawan'],
				'place_of_birth' => $_POST['tempatLahir'],
				'date_of_birth' => $_POST['tanggalLahir'],
				'gender' => $_POST['gender'],
				'religion' => $_POST['selectReligion'],
				'marital_status' => $_POST['maritalStatus'], 
				'last_education' => $_POST['pendidikanTerakhir'],
				'citizenship' => $_POST['kewarganegaraan'],
				'nik' => $_POST['nik'], 
				'address' => $_POST['alamat'],
				'postal_code' => $_POST['kodePos'],
				'phone_number' => $_POST['nomorHp'],
				'home_phone_number' => $_POST['nomorTelpRumah'],
				'email' => $_POST['email'],
				'npwp' => $_POST['npwp'],
				'ptkp' => $_POST['ptkp'],
				'join_date' => $_POST['tanggalMasuk'],
				'out_date' => $resignDate,
				'id_position' => $_POST['selectPosition'],
				'id_department' => $_POST['selectDepartemen'],
				'id_company' => $this->_idCompany,
				'created_time' => date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('nama'),
				'updated_time' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->userdata('nama')
			);
			$this->karyawan->insertKaryawan($dataKaryawan);
			redirect('karyawan','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function edit($idEmployee) 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "Edit";
		$this->_data['employeeData'] = $this->karyawan->getKaryawan($idEmployee);
		$this->_data['departmentData'] = $this->karyawan->getDepartment($this->_idCompany);
		$this->_data['positionData'] = $this->karyawan->getPosition($this->_idCompany);

		if ($_POST) {
			$resignDate = '';
			if ($_POST['status'] == "resign") {
				$resignDate = $_POST['tanggalKeluar'];
			}
			$dataKaryawan = array(
				'employee_name' => $_POST['namaKaryawan'],
				'place_of_birth' => $_POST['tempatLahir'],
				'date_of_birth' => $_POST['tanggalLahir'],
				'gender' => $_POST['gender'],
				'religion' => $_POST['selectReligion'],
				'marital_status' => $_POST['maritalStatus'], 
				'last_education' => $_POST['pendidikanTerakhir'],
				'citizenship' => $_POST['kewarganegaraan'],
				'nik' => $_POST['nik'], 
				'address' => $_POST['alamat'],
				'postal_code' => $_POST['kodePos'],
				'phone_number' => $_POST['nomorHp'],
				'home_phone_number' => $_POST['nomorTelpRumah'],
				'email' => $_POST['email'],
				'npwp' => $_POST['npwp'],
				'ptkp' => $_POST['ptkp'],
				'join_date' => $_POST['tanggalMasuk'],
				'out_date' => $resignDate,
				'id_position' => $_POST['selectPosition'],
				'id_department' => $_POST['selectDepartemen'],
				'id_company' => $this->_idCompany,
				'created_time' => date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('nama'),
				'updated_time' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->userdata('nama')
			);
			$this->karyawan->updateKaryawan($dataKaryawan, $_POST['idKaryawan']);
			redirect('karyawan','refresh');
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