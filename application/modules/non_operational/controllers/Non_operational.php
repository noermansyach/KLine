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
		$this->_data['css'] = "layout-part/index-css";
		$this->_data['js'] = "layout-part/index-js";
		$this->_data['content'] = "index";

		$table = $this->nonOperational->readAllNonOPerational();

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
		$this->_data['noBukti'] = date("ymdhsi") . rand(1, 100);
		$this->_data['principalList'] = $this->nonOperational->getPrincipal();
		$this->_data['departementList'] = $this->nonOperational->getDepartment($this->_company);
		$this->_data['tanggalBuat'] = date('d-m-Y');

		if ($_POST) {
			$dataPPU = array(
				'no_bukti' => $_POST['noBukti'],
				'status' => $_POST['receivePayment'],
				'id_department' => $_POST['selectDepartment'],
				'no_ppu' => $_POST['noPPU'],
				'id_principal' => $_POST['selectPrincipal'],
				'jumlah' => $_POST['jumlah'],
				'terbilang' => $_POST['terbilang'],
				'ket_1' => $_POST['ketSatu'], 
				'ket_2' => $_POST['ketDua'],
				'ket_3' => $_POST['ketTiga'],
				'requested_by' => $this->session->userdata('nama'),
				'created_time' => date('Y-m-d H:i:s'),
				'created_by' => $this->session->userdata('nama'),
				'updated_time' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->userdata('nama')
			);
			$this->nonOperational->insertNonOperational($dataPPU);
			redirect('non_operational','refresh');
		} else {
			$this->load->view('layout', $this->_data);
		}
	}

	public function edit($noBukti) 
	{
		$this->_data['css'] = "layout-part/form-css";
		$this->_data['js'] = "layout-part/form-js";
		$this->_data['content'] = "edit";
		$this->_data['noBukti'] = date("ymdhsi") . rand(1, 100);
		$this->_data['dataPPU'] = $this->nonOperational->getDataPPU($noBukti);
		$this->_data['principalList'] = $this->nonOperational->getPrincipal();
		$this->_data['departementList'] = $this->nonOperational->getDepartment($this->_company);
		$this->_data['tanggalBuat'] = date('d-m-Y');

		if ($_POST) {
			$dataPPU = array(
				'status' => $_POST['receivePayment'],
				'id_department' => $_POST['selectDepartment'],
				'no_ppu' => $_POST['noPPU'],
				'id_principal' => $_POST['selectPrincipal'],
				'jumlah' => $_POST['jumlah'],
				'terbilang' => $_POST['terbilang'],
				'ket_1' => $_POST['ketSatu'], 
				'ket_2' => $_POST['ketDua'],
				'ket_3' => $_POST['ketTiga'],
				'requested_by' => $this->session->userdata('nama'),
				'updated_time' => date('Y-m-d H:i:s'),
				'updated_by' => $this->session->userdata('nama')
			);
			$this->nonOperational->updateNonOperational($dataPPU, $noBukti);
			redirect('non_operational','refresh');
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

	public function viewBarcode($noBukti) 
	{
		$dataNonOpr = $this->nonOperational->getBarCodeData($noBukti);
		echo json_encode($dataNonOpr);
	}

	public function generateReportPPU($noBukti) 
	{
		$dataPdf = $this->nonOperational->getDataPPU($noBukti);

		$pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();

        $pdf->SetAutoPageBreak(true, 0.5);
        // Logo
    	$pdf->Image(base_url('assets/images/KARANA.png'),10,6,15);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Times','B',14);
        // mencetak string 
        $pdf->Cell(110,7,'PERMOHONAN PERMINTAAN UANG',0,0,'R');
        $pdf->ln();
        $pdf->SetFont('Helvetica','B',9);

        for ($i=0; $i < 7; $i++) { 
        	$pdf->Cell(20,5,'',0,0);
        }

        $pdf->Cell(20,5,'NO. PPU ',0,0, 'L');
        $pdf->Cell(30,5,': '. $dataPdf->no_ppu,0,0);
        $pdf->ln();
        for ($i=0; $i < 7; $i++) { 
        	$pdf->Cell(20,5,'',0,0);
        }
        $pdf->Cell(20,5,'DATE',0,0, 'L');
        $pdf->Cell(30,5,': '. date('d-m-Y', strtotime($dataPdf->created_time)),0,0);

        $pdf->SetFont('Helvetica','B',8);
        $pdf->Ln(10);
        $pdf->cell(35,7,'DARI DEPARTEMEN',0,0);
        $pdf->cell(90,7,': '. $dataPdf->department_name,0,0);
        $pdf->Ln();
        $pdf->cell(35,7,'DIBAYAR KEPADA',0,0);
        $pdf->cell(90,7,': ' . $dataPdf->dibayar_kepada,0,0);
        $pdf->Ln();
        $pdf->cell(35,7,'JUMLAH',0,0);
        $pdf->cell(90,7,': ' . $dataPdf->jumlah,0,0);
        $pdf->Ln();
        $pdf->cell(35,7,'TERBILANG',0,0);
        $pdf->cell(90,7,': '. $dataPdf->terbilang,0,0);
        $pdf->Ln();
        $pdf->cell(35,7,'UNTUK',0,0);
        $pdf->cell(130,7,': 1. '. $dataPdf->ket_1,0,0);
        $pdf->Ln();
        $pdf->cell(35,7,'',0,0);
        $pdf->cell(130,7,'  2. '. $dataPdf->ket_2,0,0);
        $pdf->Ln();
        $pdf->cell(35,7,'',0,0);
        $pdf->cell(130,7,'  3. '. $dataPdf->ket_3,0,0);

        for ($i=0; $i < 2; $i++) { 
        	$pdf->Ln();
        	$pdf->Cell(20,5,'',0,0);
        	
        }
        $pdf->Ln();
		for ($i=0; $i < 4; $i++) { 
        	$pdf->Cell(20,5,'',0,0);
        }        
        $pdf->Cell(25, 5, 'Cabang,', 0, 0, 'R');
       	$pdf->Cell(35, 5, '.....................................................', 0, 0);

       	$pdf->Ln();
       	$pdf->Ln();
       	$pdf->Cell(50,5,'APPROVED BY',0,0,'C');
       	$pdf->Cell(50,5,'ACKNOWLEDGE BY',0,0,'C');
       	$pdf->Cell(50,5,'REQUESTED BY',0,0,'C');
       	for ($i=0; $i < 5; $i++) { 
        	$pdf->Ln();
        	$pdf->Cell(20,5,'',0,0);
        }
        $pdf->Ln();
        $pdf->Cell(50,5,'________________________',0,0,'C');
       	// $pdf->Cell(50,5,'________________________',0,0,'C');
       	$pdf->Cell(50,5,$dataPdf->created_by,0,0,'C');
       	$pdf->Cell(50,5,'________________________',0,0,'C');
        
       	$filename= 'report/ppu/' . $dataPdf->no_bukti .'.pdf';

        // Generate Qr Code
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './report/ppu/'; //string, the default is application/cache/
        $config['errorlog']     = './report/ppu/'; //string, the default is application/logs/
        $config['imagedir']     = './report/ppu/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        $image_name=$dataPdf->no_bukti.'.png'; //buat name dari qr code sesuai dengan nim
        $params['data'] = base_url($filename); //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
        // End Generate

        $filename= 'report/ppu/' . $dataPdf->no_bukti .'.pdf';
		$pdf->Output($filename,'F');

		$saveToDb = 'report/ppu/' . $dataPdf->no_bukti . '.png';
		$qrSave = array(
				'qr_code_add' => base_url($saveToDb),
				'link_report' => base_url($filename)
		);

		$this->nonOperational->saveQrCode($qrSave, $dataPdf->no_bukti);

		redirect('non_operational','refresh');
	}	

}