<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
 	{
 		parent::__construct();


 		/* Standard Libraries */
 		$this->load->database();
 		$this->load->helper('url');
 		$this->load->model('Users_model');
 		$this->load->model('Dashboard_model');
 		$this->load->model('Menu_model');
 		$this->load->model('Simpeg_model');
		$this->load->model('Ion_auth_model');
 		/* ------------------ */

 		$this->load->library('grocery_CRUD');
		$this->load->library('ion_auth');
 	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function test()
	{
		$this->load->view('eis_duk_bkd_pdf');
	}

	public function createPdf()
	{
		$this->load->library('Pdf');
			$msg = $this->load->view('eis_duk_bkd_pdf', '', true);
	 $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
	 $pdf->SetTitle('Pdf Example');
	 $pdf->SetHeaderMargin(30);
	 $pdf->SetTopMargin(20);
	 $pdf->setFooterMargin(20);
	 $pdf->SetAutoPageBreak(true);
	 $pdf->SetAuthor('Author');
	 $pdf->SetDisplayMode('real', 'default');
	 $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
 $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 $pdf->SetFont('helvetica', '', 9);
 $pdf->setFontSubsetting(false);
 $pdf->AddPage();
 ob_start();
     // we can have any view part here like HTML, PHP etc
     $content = ob_get_contents();
 ob_end_clean();
 $pdf->writeHTML($msg, true, false, true, false, '');
 $pdf->Output('output.pdf', 'I');
	}

	public function createUser()
	{
		$phone=$this->input->get('phone');
		$name=$this->input->get('name');
		$instansi=$this->input->get('instansi');
		$nip=$this->input->get('nip');
		$name=$this->input->get('name');
		$pass=$this->input->get('pass');
			$data = array(
				'phone' => $phone,
				'first_name' => $name,
				'last_name' => '',
				'company' =>$instansi,
				'profile_pic' =>'placeholder.png',
				'nip' =>$nip
			);

$arr = explode(' ',trim($name));
	log_message('debug',$arr[0]);

	$arrayInsertinstansi = array();
	$arrayInsertGroup = array();
			$insertId=  $this->Ion_auth_model->register($nip, $pass, $nip.'@gmail.com', $data);
			$instansiId = $this->Simpeg_model->getIdInstansiByName($instansi);
				$arrayPush1 = array('users_id'=>$insertId,'instansi_id'=>$instansiId);
				$arrayPush2 = array('user_id'=>$insertId,'group_id'=>4);
				array_push($arrayInsertGroup,$arrayPush2);
				array_push($arrayInsertinstansi,$arrayPush1);
				$this->Users_model->insertUser_instansiBatch($arrayInsertinstansi);
					$this->Users_model->insertUser_groupsBatch($arrayInsertGroup);
					echo  $insertId;

	}
	function mypdf(){
		$this->load->helper('download');
		$pdfFilePath = "assets/".date("h_i_sa").".pdf";
		if (file_exists($pdfFilePath) == FALSE)

		{
			$dataEmail='';
			ini_set('memory_limit','32M'); // boost the memory limit if it's low ;)

			$this->load->library('pdf');

			$html = $this->load->view('eis_duk_bkd_pdf', $dataEmail, true); // render the view into HTML

			$pdf = $this->pdf->load();
			$pdf->AddPage('L', // L - landscape, P - portrait
			 '', '', '', '',
			 30, // margin_left
			 30, // margin right
			 30, // margin top
			 30, // margin bottom
			 18, // margin header
			 12); // ma
			$pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure ;)

			$pdf->WriteHTML($html); // write the HTML into the PDF

			$pdf->Output($pdfFilePath, 'F'); // save to file because we can

		}
		$pathAttachments =$pdfFilePath;
		force_download($pdfFilePath, NULL);


	}
}
