<?php 
/**
 * 
 */
class Perkiraan_bunglon extends MX_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perkiraan_bunglon_model', 'perkiraan');
		$this->load->model('company/Company_model', 'company');
		$this->load->model('currency/Currency_model', 'currency');
		$this->load->model('bank/Bank_model', 'bank');
		if($this->session->userdata('status') != 'isLogin') {
			redirect('login','refresh');
		}
	}

	public $_data = array(
		'title' => "Akun Perkiraan",
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
		$table = $this->perkiraan->readAllPerkiraanBunglon(); 
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
		$this->_data['dataLevel'] = $this->mperkiraan->getLevel1();
		$this->_data['companyData'] = $this->company->readAllCompany();
		$this->_data['currencyData'] = $this->currency->readAllCurrency();
		$this->_data['bankData'] = $this->bank->readAllBank();

		if ($_POST) {
			$level = $_POST['level'];
			$accInduk = $noAcc = $namaAcc = "";
			switch ($level) {
				case '2':
					$accInduk = $_POST['selectAccLevel1'];
					$noAcc = $_POST['noAcc2'];
					$namaAcc = $_POST['namaAcc2'];
					break;
				case '3':
					$accInduk = $_POST['selectAccLevel2'];
					$noAcc = $_POST['noAcc3'];
					$namaAcc = $_POST['namaAcc3'];
					break;
				case '4':
					$accInduk = $_POST['selectAccLevel3'];
					$noAcc = $_POST['noAcc4'];
					$namaAcc = $_POST['namaAcc4'];
					break;
				case '5':
					$accInduk = $_POST['selectAccLevel4'];
					$noAcc = $_POST['noAcc5'];
					$namaAcc = $_POST['namaAcc5'];
					break;
				case '6':
					$accInduk = $_POST['selectAccLevel5'];
					$noAcc = $_POST['noAcc6'];
					$namaAcc = $_POST['namaAcc6'];
					break;
				
				default:
					$noAcc = $_POST['noAcc1'];
					$namaAcc = $_POST['namaAcc1'];
					break;
			}

			$data = array(
						'no_acc' => $noAcc,
						'nama_acc' => $namaAcc,
						'acc_induk' => $accInduk,
						'level' => $level,
						'jenis_perkiraan' => $_POST['selectJenisPerkiraan'],
						'is_jurnal' => $_POST['isJurnal'],
						'jenis_jurnal' => $_POST['selectJenisJurnal'],
						'laporan_gl' => $_POST['laporanGl'],
						'id_company' => $_POST['selectCompany'],
						'id_bank' => $_POST['selectBank'],
						'id_currency' => $_POST['selectCurrency'],
						'init_kas_bank' => $_POST ['initKas'],
						'is_budget' => $_POST['initKas'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
			$this->mperkiraan->insertPerkiraan($data);

			
			if ($level == '6') {
				if (($_POST['selectJenisPerkiraan'] == 'AKTIVA') || ($_POST['selectJenisPerkiraan'] == 'PASSIVA')) {
					$noAccBunglon =  str_split($noAcc);
					$jenisPerkiraan = '';
					$fixNoAccBunglon = '';
					if ($_POST['selectJenisPerkiraan'] == 'AKTIVA') {
						$jenisPerkiraan = 'PASSIVABY';
						$noAccBunglon[0] = '6';
						$fixNoAccBunglon = implode('', $noAccBunglon);
					} else if ($_POST['selectJenisPerkiraan'] == 'PASSIVA') {
						$jenisPerkiraan = 'AKTIVABY';
						$noAccBunglon[0] = '5';
						$fixNoAccBunglon = implode('', $noAccBunglon);
					}
					
					$data = array(
						'no_acc_bunglon' => $fixNoAccBunglon,
						'no_acc' => $noAcc,
						'nama_acc' => $namaAcc,
						'acc_induk' => $accInduk,
						'level' => $level,
						'jenis_perkiraan' => $jenisPerkiraan,
						'is_jurnal' => $_POST['isJurnal'],
						'jenis_jurnal' => $_POST['selectJenisJurnal'],
						'laporan_gl' => $_POST['laporanGl'],
						'id_company' => $_POST['selectCompany'],
						'id_bank' => $_POST['selectBank'],
						'id_currency' => $_POST['selectCurrency'],
						'init_kas_bank' => $_POST ['initKas'],
						'is_budget' => $_POST['initKas'],
						'created_time' => date('Y-m-d H:i:s'),
						'created_by' => $this->session->userdata('nama'),
						'updated_time' => date('Y-m-d H:i:s'),
						'updated_by' => $this->session->userdata('nama')
					);
					$this->mperkiraan->insertPerkiraanBunglon($data);
				}
			}
			
			redirect('perkiraan_bunglon','refresh');
		} else {
			$this->load->view('layout', $this->_data);
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

	public function delete($noAcc) 
	{
		$this->mperkiraan->deletePerkiraan($noAcc);
		redirect('mperkiraan');
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