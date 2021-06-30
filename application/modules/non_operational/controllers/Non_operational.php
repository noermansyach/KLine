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
			$dataPrincipal = array(
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
			$this->nonOperational->insertNonOperational($dataPrincipal);
			redirect('non_operational','refresh');
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
		$pdf->Output($filename,'F');
		redirect('non_operational','refresh');
	}	

}