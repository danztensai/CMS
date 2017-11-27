<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Auth_Controller
{

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
	/* ------------------ */

	$this->load->library('grocery_CRUD');
	}

	public function testIs()
	{
		$userId = $this->ion_auth->get_user_id();
		$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$this->data['menu']=$this->Menu_model->menuMaster();

		log_message('INFO','User Id : '.$userId);


    	$this->render('dashboard/hhh');
	}

	public function testSigit()
	{
		$userId = $this->ion_auth->get_user_id();
		$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$this->data['menu']=$this->Menu_model->menuMaster();

		log_message('INFO','User Id : '.$userId);


    	$this->render('dashboard/test_sigit_view');
	}

	public function dataSiBro()
	{
		$userId = $this->ion_auth->get_user_id();
		$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$this->data['menu']=$this->Menu_model->menuMaster();

		log_message('INFO','User Id : '.$userId);


    	$this->render('dashboard/datasibucupu_view');
	}

	public function dataPegawaiTkk()
	{
		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$this->data['user']=$userLoggedin;
		//log_message('debug',print_r($userLoggedin,TRUE));
		$identitasSimpeg = $this->Simpeg_model->getIdentitasPegawai($userLoggedin->nip);
		$cpnspnsSimpeg = $this->Simpeg_model->getCPNSPNSInfoByNip($userLoggedin->nip);
		$pangkatTerakhir = $this->Simpeg_model->getPangkatAkhirByNip($userLoggedin->nip);
		//log_message('debug',print_r($cpnspnsSimpeg,TRUE));
		//log_message('debug',print_r($userLoggedin,TRUE));
		$agama =$this->Simpeg_model->getAgama();
		//log_message('debug',print_r($agama,TRUE));
		$relationShipSts = $this->Simpeg_model->getRelationStatus();
		//log_message('debug',print_r($relationShipSts,TRUE));
		$jenisPegawai = $this->Simpeg_model->getJenisPegawai();
		$statusPegawai = $this->Simpeg_model->getStatusPegawai();
		$kedudukanPegawai = $this->Simpeg_model->getKedudukanPegawai();
		$jenisPejabatMenetapkan = $this->Simpeg_model->getJenisPejabatMenetapkan();
		$jenisGolongan = $this->Simpeg_model->getJenisGolongan();
		$jenisSTLUD = $this->Simpeg_model->getStlud();
		$jenisNaikPangkat = $this->Simpeg_model->getJenisNaikPangkat();


		$this->data['identitas']=$identitasSimpeg;
		$this->data['cpnspns']=$cpnspnsSimpeg;
		$this->data['pangkatTerakhir']=$pangkatTerakhir;
		$this->data['kedudukanPegawai']=$kedudukanPegawai;
		$this->data['statusPegawai']=$statusPegawai;
		$this->data['jenisPegawai'] = $jenisPegawai;
		$this->data['pejabat'] = $jenisPejabatMenetapkan;
		$this->data['jenisGolongan']=$jenisGolongan;
		$this->data['jenisNaikPangkat']=$jenisNaikPangkat;
		$this->data['stlud']=$jenisSTLUD;


		$this->data['agama']=$agama;
		$this->data['relationShipSts'] = $relationShipSts;
		//log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		//log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$this->data['menu']=$this->Menu_model->menuMaster();

		//log_message('INFO','User Id : '.$userId);

			$this->render('dashboard/profile_pegawai_tkk_view');

	}

	public function dataPegawaiPensiun()
	{
		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$this->data['user']=$userLoggedin;
		//log_message('debug',print_r($userLoggedin,TRUE));
		$identitasSimpeg = $this->Simpeg_model->getIdentitasPegawai($userLoggedin->nip);
		$cpnspnsSimpeg = $this->Simpeg_model->getCPNSPNSInfoByNip($userLoggedin->nip);
		$pangkatTerakhir = $this->Simpeg_model->getPangkatAkhirByNip($userLoggedin->nip);
		$riwayatPangkat = $this->Simpeg_model->getRiwayatPangkat($userLoggedin->nip);
		//log_message('debug',print_r($cpnspnsSimpeg,TRUE));

		//log_message('debug',print_r($userLoggedin,TRUE));
		$agama =$this->Simpeg_model->getAgama();
		//log_message('debug',print_r($agama,TRUE));
		$relationShipSts = $this->Simpeg_model->getRelationStatus();
		//log_message('debug',print_r($relationShipSts,TRUE));
		$jenisPegawai = $this->Simpeg_model->getJenisPegawai();
		$statusPegawai = $this->Simpeg_model->getStatusPegawai();
		$kedudukanPegawai = $this->Simpeg_model->getKedudukanPegawai();
		$jenisPejabatMenetapkan = $this->Simpeg_model->getJenisPejabatMenetapkan();
		$jenisGolongan = $this->Simpeg_model->getJenisGolongan();
		$jenisSTLUD = $this->Simpeg_model->getStlud();
		$jenisNaikPangkat = $this->Simpeg_model->getJenisNaikPangkat();
		$gajiBerkalaPegawaiPensiun = $this->Simpeg_model->getGajiBerkalaPegawaiPensiun($userLoggedin->nip);
		$tempatPegawaiPensiun = $this->Simpeg_model->getTempatPegawaiPensiun($userLoggedin->nip);
		$riwayatPensiunKeluargaAyah = $this->Simpeg_model->getRiwayatPensiunKeluargaAyah($userLoggedin->nip);
		$riwayatPensiunKeluargaIbu = $this->Simpeg_model->getRiwayatPensiunKeluargaIbu($userLoggedin->nip);
		$riwayatPensiunKeluargaSuamiIstri = $this->Simpeg_model->getRiwayatPensiunKeluargaSuamiIstri($userLoggedin->nip);
		$riwayatPensiunKeluargaAnak = $this->Simpeg_model->getRiwayatPensiunKeluargaAnak($userLoggedin->nip);
		$riwayatJabatanPensiun = $this->Simpeg_model->getRiwayatJabatanPensiun($userLoggedin->nip);


		$this->data['riwayatPensiunKeluargaIbu']=$riwayatPensiunKeluargaIbu;
		$this->data['riwayatPensiunKeluargaAyah']=$riwayatPensiunKeluargaAyah;
		$this->data['riwayatPensiunKeluargaSuamiIstri']=$riwayatPensiunKeluargaSuamiIstri;
		$this->data['riwayatPensiunKeluargaAnak']=$riwayatPensiunKeluargaAnak;
		$this->data['gajiBerkalaPegawaiPensiun']=$gajiBerkalaPegawaiPensiun;
		$this->data['tempatPegawaiPensiun']=$tempatPegawaiPensiun;
		$this->data['riwayatJabatanPensiun']=$riwayatJabatanPensiun;
		$this->data['identitas']=$identitasSimpeg;
		$this->data['riwayatPangkat']=$riwayatPangkat;

		$this->data['cpnspns']=$cpnspnsSimpeg;
		$this->data['pangkatTerakhir']=$pangkatTerakhir;
		$this->data['kedudukanPegawai']=$kedudukanPegawai;
		$this->data['statusPegawai']=$statusPegawai;
		$this->data['jenisPegawai'] = $jenisPegawai;
		$this->data['pejabat'] = $jenisPejabatMenetapkan;
		$this->data['jenisGolongan']=$jenisGolongan;
		$this->data['jenisNaikPangkat']=$jenisNaikPangkat;
		$this->data['stlud']=$jenisSTLUD;


		$this->data['agama']=$agama;
		$this->data['relationShipSts'] = $relationShipSts;
		//log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		//log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$this->data['menu']=$this->Menu_model->menuMaster();

		//log_message('INFO','User Id : '.$userId);

			$this->render('dashboard/profile_pegawai_pensiun_view');

	}

	public function dataPegawaiPindahKeluar()
	{
		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$this->data['user']=$userLoggedin;
		//log_message('debug',print_r($userLoggedin,TRUE));
		$identitasSimpeg = $this->Simpeg_model->getIdentitasPegawai($userLoggedin->nip);
		$cpnspnsSimpeg = $this->Simpeg_model->getCPNSPNSInfoByNip($userLoggedin->nip);
		$pangkatTerakhir = $this->Simpeg_model->getPangkatAkhirByNip($userLoggedin->nip);
		//log_message('debug',print_r($cpnspnsSimpeg,TRUE));
		//log_message('debug',print_r($userLoggedin,TRUE));
		$agama =$this->Simpeg_model->getAgama();
		//log_message('debug',print_r($agama,TRUE));
		$relationShipSts = $this->Simpeg_model->getRelationStatus();
		//log_message('debug',print_r($relationShipSts,TRUE));
		$jenisPegawai = $this->Simpeg_model->getJenisPegawai();
		$statusPegawai = $this->Simpeg_model->getStatusPegawai();
		$kedudukanPegawai = $this->Simpeg_model->getKedudukanPegawai();
		$jenisPejabatMenetapkan = $this->Simpeg_model->getJenisPejabatMenetapkan();
		$jenisGolongan = $this->Simpeg_model->getJenisGolongan();
		$jenisSTLUD = $this->Simpeg_model->getStlud();
		$jenisNaikPangkat = $this->Simpeg_model->getJenisNaikPangkat();


		$this->data['identitas']=$identitasSimpeg;
		$this->data['cpnspns']=$cpnspnsSimpeg;
		$this->data['pangkatTerakhir']=$pangkatTerakhir;
		$this->data['kedudukanPegawai']=$kedudukanPegawai;
		$this->data['statusPegawai']=$statusPegawai;
		$this->data['jenisPegawai'] = $jenisPegawai;
		$this->data['pejabat'] = $jenisPejabatMenetapkan;
		$this->data['jenisGolongan']=$jenisGolongan;
		$this->data['jenisNaikPangkat']=$jenisNaikPangkat;
		$this->data['stlud']=$jenisSTLUD;


		$this->data['agama']=$agama;
		$this->data['relationShipSts'] = $relationShipSts;
		//log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		//log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$this->data['menu']=$this->Menu_model->menuMaster();

		//log_message('INFO','User Id : '.$userId);

			$this->render('dashboard/profile_pegawai_pindahKeluar_view');

	}

	public function dataPegawaiMeninggal()
	{
		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$this->data['user']=$userLoggedin;
		//log_message('debug',print_r($userLoggedin,TRUE));
		$identitasSimpeg = $this->Simpeg_model->getIdentitasPegawai($userLoggedin->nip);
		$cpnspnsSimpeg = $this->Simpeg_model->getCPNSPNSInfoByNip($userLoggedin->nip);
		$pangkatTerakhir = $this->Simpeg_model->getPangkatAkhirByNip($userLoggedin->nip);
		//log_message('debug',print_r($cpnspnsSimpeg,TRUE));
		//log_message('debug',print_r($userLoggedin,TRUE));
		$agama =$this->Simpeg_model->getAgama();
		//log_message('debug',print_r($agama,TRUE));
		$relationShipSts = $this->Simpeg_model->getRelationStatus();
		//log_message('debug',print_r($relationShipSts,TRUE));
		$jenisPegawai = $this->Simpeg_model->getJenisPegawai();
		$statusPegawai = $this->Simpeg_model->getStatusPegawai();
		$kedudukanPegawai = $this->Simpeg_model->getKedudukanPegawai();
		$jenisPejabatMenetapkan = $this->Simpeg_model->getJenisPejabatMenetapkan();
		$jenisGolongan = $this->Simpeg_model->getJenisGolongan();
		$jenisSTLUD = $this->Simpeg_model->getStlud();
		$jenisNaikPangkat = $this->Simpeg_model->getJenisNaikPangkat();


		$this->data['identitas']=$identitasSimpeg;
		$this->data['cpnspns']=$cpnspnsSimpeg;
		$this->data['pangkatTerakhir']=$pangkatTerakhir;
		$this->data['kedudukanPegawai']=$kedudukanPegawai;
		$this->data['statusPegawai']=$statusPegawai;
		$this->data['jenisPegawai'] = $jenisPegawai;
		$this->data['pejabat'] = $jenisPejabatMenetapkan;
		$this->data['jenisGolongan']=$jenisGolongan;
		$this->data['jenisNaikPangkat']=$jenisNaikPangkat;
		$this->data['stlud']=$jenisSTLUD;


		$this->data['agama']=$agama;
		$this->data['relationShipSts'] = $relationShipSts;
		//log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		//log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$this->data['menu']=$this->Menu_model->menuMaster();

		//log_message('INFO','User Id : '.$userId);

			$this->render('dashboard/profile_pegawai_meninggal_view');

	}

	function upload_foto() {


	        //upload file
	        $config['upload_path'] = 'assets/foto/';
	        $config['allowed_types'] = '*';
	        $config['max_filename'] = '255';
	        $config['encrypt_name'] = TRUE;
	        $config['max_size'] = '1024'; //1 MB
					$this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
												log_message('debug',print_r($error,TRUE));
                        // $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
												log_message('debug',print_r($data,TRUE));

                        // $this->load->view('upload_success', $data);
                }

					log_message('debug','Uploading Foto');

					$nipBaru = $this->input->post('nipBaru');
					log_message('debug','From Post Form '.$nipBaru);

					$json = $this->input->post('json');
					$jsonDecode = json_decode($json);

					$jsonDecode['FILE_BMP']=$data['upload_data']['raw_name'].$data['upload_data']['file_ext'];
					log_message('debug',print_r($jsonDecode,TRUE));
					$currentDataSimpeg = $this->Simpeg_model->getIdentitasPegawai($nipBaru);

					log_message('debug',print_r($currentDataSimpeg,TRUE));
					$jsonEncodeCurrentData = json_encode($currentDataSimpeg);

					$dataInsert['table']='datautama,cpnspns';
					$dataInsert['currentData']=$jsonEncodeCurrentData;
					$dataInsert['changedData']=$json;
					$this->Simpeg_model->insertData('dataconfirmation',$dataInsert);
	        // if (isset($_FILES['file']['name'])) {
	        //     if (0 < $_FILES['file']['error']) {
	        //         echo 'Error during file upload' . $_FILES['file']['error'];
	        //     } else {
	        //         if (file_exists('uploads/' . $_FILES['file']['name'])) {
	        //             echo 'File already exists : assets/foto/' . $_FILES['file']['name'];
	        //         } else {
	        //             $this->load->library('upload', $config);
	        //             if (!$this->upload->do_upload('file')) {
	        //                 echo $this->upload->display_errors();
	        //             } else {
	        //                 echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
	        //             }
	        //         }
	        //     }
	        // } else {
	        //     echo 'Please choose a file';
	        // }
	    }

	public function profilePegawai()
	{


		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$this->data['user']=$userLoggedin;
		//log_message('debug',print_r($userLoggedin,TRUE));
		$identitasSimpeg = $this->Simpeg_model->getIdentitasPegawai($userLoggedin->nip);
		$cpnspnsSimpeg = $this->Simpeg_model->getCPNSPNSInfoByNip($userLoggedin->nip);
		$pangkatTerakhir = $this->Simpeg_model->getPangkatAkhirByNip($userLoggedin->nip);
		$gajiBerkala = $this->Simpeg_model->getGajiBerkala($userLoggedin->nip);
		$tempatPegawai = $this->Simpeg_model->getTempatPegawai($userLoggedin->nip);
		$jabatanTerakhir = $this->Simpeg_model->getJabatanTerakhir($userLoggedin->nip);
		$riwayatPangkat = $this->Simpeg_model->getRiwayatPangkat($userLoggedin->nip);
		$riwayatJabatan = $this->Simpeg_model->getRiwayatJabatan($userLoggedin->nip);
		$riwayatJasa = $this->Simpeg_model->getRiwayatJasa($userLoggedin->nip);
		$riwayatDpp = $this->Simpeg_model->getRiwayatDPP($userLoggedin->nip);
		//log_message('debug',print_r($cpnspnsSimpeg,TRUE));
		//log_message('debug',print_r($userLoggedin,TRUE));
		$agama =$this->Simpeg_model->getAgama();
		//log_message('debug',print_r($agama,TRUE));
		$relationShipSts = $this->Simpeg_model->getRelationStatus();
		//log_message('debug',print_r($relationShipSts,TRUE));
		$jenisPegawai = $this->Simpeg_model->getJenisPegawai();
		$statusPegawai = $this->Simpeg_model->getStatusPegawai();
		$kedudukanPegawai = $this->Simpeg_model->getKedudukanPegawai();
		$jenisPejabatMenetapkan = $this->Simpeg_model->getJenisPejabatMenetapkan();
		$jenisGolongan = $this->Simpeg_model->getJenisGolongan();
		$jenisSTLUD = $this->Simpeg_model->getStlud();
		$jenisNaikPangkat = $this->Simpeg_model->getJenisNaikPangkat();
		log_message('debug','Isi Riwayat Jasa : '.count($riwayatJasa));

		$this->data['identitas']=$identitasSimpeg;
		$this->data['riwayatPangkat']=$riwayatPangkat;
		$this->data['riwayatJabatan']=$riwayatJabatan;
		$this->data['riwayatJasa']=$riwayatJasa;
		$this->data['riwayatDpp']=$riwayatDpp;

		$this->data['cpnspns']=$cpnspnsSimpeg;
		$this->data['pangkatTerakhir']=$pangkatTerakhir;
		$this->data['gaji']=$gajiBerkala;
		$this->data['tempat']=$tempatPegawai;
		$this->data['jabatanTerakhir']=$jabatanTerakhir;
		$this->data['kedudukanPegawai']=$kedudukanPegawai;
		$this->data['statusPegawai']=$statusPegawai;
		$this->data['jenisPegawai'] = $jenisPegawai;
		$this->data['pejabat'] = $jenisPejabatMenetapkan;
		$this->data['jenisGolongan']=$jenisGolongan;
		$this->data['jenisNaikPangkat']=$jenisNaikPangkat;
		$this->data['stlud']=$jenisSTLUD;


		$this->data['agama']=$agama;
		$this->data['relationShipSts'] = $relationShipSts;
		//log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		//log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$this->data['menu']=$this->Menu_model->menuMaster();

		//log_message('INFO','User Id : '.$userId);

			$this->render('dashboard/profile_pegawai_view');

	}
	public function getCurrentDayBirthday()
	{
		$key = $this->input->get('key');
		$draw = $this->input->get('draw');
		$limitStart = $this->input->get('start');
		$limitLength = $this->input->get('length');
		$column0Searchable = $this->input->get('columns[0][searchable]');
		$searchColumn = $this->input->get('search[value]');
		$searchQueryColumn=null;
		$orderByColumn = $this->input->get('order[0][column]');
		$orderByDir = $this->input->get('order[0][dir]');
		$limit=null;


		log_message('debug','Isi Draw : '.$draw);
		log_message('debug','Isi limitStart :'.$limitStart);
		log_message('debug','Isi limitLength :'.$limitLength);
		log_message('debug','Isi $column0Searchable :'.$column0Searchable);
		log_message('debug','Isi $orderByColumn :'.$orderByColumn);



		$dataPegawai =$this->Simpeg_model->getCurentDayBirthDay($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir);
		$arrayReturn= array();

		$arrayReturn['draw']=(int)$draw;
		$arrayReturn['recordsTotal']=$this->Simpeg_model->getCountTotalRowCurrentBirthday($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir);
		$arrayReturn['recordsFiltered']=$this->Simpeg_model->getCountTotalRowCurrentBirthday($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir);
		$arrayReturn['data']=$dataPegawai;


		$returnResponse = json_encode($arrayReturn);
		log_message('debug',$returnResponse);

		echo $returnResponse;
	}

	public function groupManagement()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('groups')
						->set_subject('Group Modification')
						->columns('name','description')
						->display_as('name','Nama Group')
						->display_as('description','Deskripsi Grup');


		$crud->fields('name','description');
		$output = $crud->render();

		if($this->ion_auth->is_admin()===FALSE)
	{
			log_message('DEBUG','inside Not Admin');
			 //$this->render('dashboard/member_index_view');
			 $this->load->view('dashboard/member_index_view');
	}else
	{
	//$this->render('dashboard/index_view');
	$this->load->view('dashboard/grid',$output);
	}
	}
	public function dataKepegawaian()
	{
		$userId = $this->ion_auth->get_user_id();
		$this->data['user']=$this->ion_auth->user()->row();
		$this->data['menu']=$this->Menu_model->menuMaster();

		$this->render('dashboard/kepegawaian_view');
	}

public function agama()
{
	log_message('debug','Inside Page Dashboard Ref Agama');
	$userId = $this->ion_auth->get_user_id();
	$this->data['user']=$this->ion_auth->user()->row();
		log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

	$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

	$this->data['menu']=$this->Menu_model->menuMaster();

	log_message('INFO','User Id : '.$userId);


			log_message('DEBUG','inside Admin');
		$this->render('dashboard/referensi_agama_view');


}
public function referensiAgama()
{
	log_message('debug','Trying to load Grocer Ref Agama');
	$adminSts = $this->ion_auth->is_admin()===FALSE;
	$this->db = $this->load->database('simpegRef',true);
	log_message('debug','after Load new Db');
	$crud = new grocery_CRUD();
	$crud->set_table('agama')
					->set_subject('Modifikasi Agama')
					->columns('kode','nama')
					->display_as('nama','agama');

	$crud->fields('nama');
	$output = $crud->render();



	//$this->render('dashboard/index_view');
			$this->load->view('dashboard/grid',$output);

}

public function instansiManagement()
{
			$crud = new grocery_CRUD();
			$crud->set_table('instansi')
							->set_subject('Instansi User Modification')
							->columns('instansi_name','instansi_alias')
							->display_as('instansi_name','Nama Instansi')
							->display_as('instansi_alias','Singkatan Instansi');


			$crud->fields('instansi_name','instansi_alias');
			$output = $crud->render();

			if($this->ion_auth->is_admin()===FALSE)
		{
				log_message('DEBUG','inside Not Admin');
				 //$this->render('dashboard/member_index_view');
				 $this->load->view('dashboard/member_index_view');
		}else
		{
		//$this->render('dashboard/index_view');
		$this->load->view('dashboard/grid',$output);
		}
}

public function menuManagement()
{
	$userId = $this->ion_auth->get_user_id();
	$this->data['user']=$this->ion_auth->user()->row();
		log_message('INFO','is admin? : Menu Management'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		log_message('debug','User Group : Menu Management '.print_r($this->data['user_group'],TRUE));

			$crud = new grocery_CRUD();
			$crud->set_table('menu')
			        ->set_subject('Menu Modification')
			        ->columns('menu_name','menu_link','menu_order','parent_id')
			        ->display_as('menu_name','Nama Menu')
			        ->display_as('menu_link','Menu URL')
							->display_as('menu_order','Urutan Menu');

			$crud->fields('menu_name','menu_link','parent_id','menu_order');
			$crud->set_relation('parent_id','menu','menu_name');
			$output = $crud->render();
			if($this->ion_auth->is_admin()===FALSE)
		{
				log_message('DEBUG','inside Not Admin');
				 //$this->render('dashboard/member_index_view');
				 $this->load->view('dashboard/member_index_view');
		}else
		{
		//$this->render('dashboard/index_view');
		$this->load->view('dashboard/grid',$output);
		}
			// $this->load->view('dashboard/grid',$output);
}

public function gridUserManagement()
{
	$crud = new grocery_CRUD();

$crud->set_table('users');
$crud->set_theme('flexigrid');
$crud->set_subject('Dashboard User');
$crud->fields('username','nip','email','first_name','last_name','groups','phone','profile_pic');
		$crud->required_fields('username','password','nip','email','first_name','last_name','company','phone');
		$crud->add_fields(array('username','password','nip','email','first_name','last_name','groups','company','phone','instansi','profile_pic'));
		$crud->edit_fields(array('username','password','nip','email','first_name','last_name','groups','company','phone','instansi','profile_pic'));
		$crud->set_relation_n_n('instansi', 'users_instansi', 'instansi', 'users_id', 'instansi_id', 'instansi_name');
		$crud->set_relation_n_n('groups', 'users_groups', 'groups', 'user_id', 'group_id', 'name');
		$crud->columns(array('id','nip','username','email','profile_pic','first_name','last_name'));
		$crud->field_type('password', 'password');
		$crud->set_field_upload('profile_pic','assets/uploads/files');
		$crud->callback_insert(function ($post_array) {
				$username = $post_array['username'];
				$password = $post_array['password'];
				$email = $post_array['email'];
				$data = array(
				'phone' => $post_array['phone'],
				'first_name' => $post_array['first_name'],
				'last_name' => $post_array['last_name'],
				'company' =>$post_array['company'],
				'profile_pic' =>$post_array['profile_pic'],
				'nip' =>$post_array['nip']
				);


				$insertId=  $this->ion_auth_model->register($username, $password, $email, $data);

				log_message('debug','Got last InsertId :'.$insertId);


				log_message('debug',print_r($post_array['instansi'],TRUE));
				$arrayInsertinstansi = array();
				$arrayInsertGroup = array();


				foreach($post_array['instansi']as $v)
				{
						$arrayPush = array('users_id'=>$insertId,'instansi_id'=>$v);
						array_push($arrayInsertinstansi,$arrayPush);
				}
				 log_message('debug','iniloh Array Instansi '.print_r($arrayInsertinstansi,TRUE));


				foreach($post_array['groups']as $v)
				{
						$arrayPush = array('user_id'=>$insertId,'group_id'=>$v);
						array_push($arrayInsertGroup,$arrayPush);
				}
				log_message('debug','iniloh Array userGroup '.print_r($arrayInsertGroup,TRUE));

				$this->Users_model->insertUser_instansiBatch($arrayInsertinstansi);
				$this->Users_model->insertUser_groupsBatch($arrayInsertGroup);

				return $insertId;

		});

		$crud->callback_edit_field('password',function($value,$primary_key)
				{
						return '<input id="field-password" class="form-control" name="password" type="password" value="" maxlength="255" placeholder="Please Reinput Your Password">';
				});

		$crud->callback_update(
				function($post_array,$primary_key)
				{
						$data = array(
										'username' => $post_array['username'],
										'email' => $post_array['email'],
										'phone' => $post_array['phone'],
										'first_name' => $post_array['first_name'],
										'last_name' => $post_array['last_name'],
										'company' => $post_array['company'],
										'password' => $post_array['password'],
										'profile_pic' => $post_array['profile_pic'],
										'nip'=> $post_array['nip'],
										);
						log_message('debug',print_r($post_array['instansi'],TRUE));
						$arrayInsert = array();
						$arrayInsertGroup = array();
						foreach($post_array['instansi']as $v)
						{
								$arrayPush = array('users_id'=>$primary_key,'instansi_id'=>$v);
								array_push($arrayInsert,$arrayPush);
						}

						foreach($post_array['groups']as $v)
						{
								$arrayPush = array('user_id'=>$primary_key,'group_id'=>$v);
								array_push($arrayInsertGroup,$arrayPush);
						}



						$this->Users_model->updateUser_instansiBatch($arrayInsert,$primary_key);
						$this->Users_model->updateUser_groupsBatch($arrayInsertGroup,$primary_key);




						$this->ion_auth_model->update($primary_key, $data);

						return true;

				});

$output = $crud->render();
$this->load->view('dashboard/grid',$output);
}
    public function index()
    {

    	$userId = $this->ion_auth->get_user_id();
    	$this->data['user']=$this->ion_auth->user()->row();
        log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
        $this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
        log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

    	$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

			$this->data['menu']=$this->Menu_model->menuMaster();

    	log_message('INFO','User Id : '.$userId);

          if($this->ion_auth->is_admin()===FALSE)
        {
            log_message('DEBUG','inside Not Admin');
             $this->render('dashboard/member_index_view');
        }else
    		{
        $this->render('dashboard/index_view');
        }
    }


    public function uploadDirectPush()
    {
        $sms=$this->input->post('sms');
        $sid=$this->input->post('sid');
        $shortcode=$this->input->post('shortcode');
        $file = $_FILES['upload']['tmp_name'];
    }

    public function uploadExcel()
    {
        $file = $_FILES['upload']['tmp_name'];
        $partner = $this->input->post('partner');
        $type=$this->input->post('type');
        $arr_data = array();
        log_message('debug','Partner Upload : '.$partner);
        //load the excel library
        $this->load->library('excel');
        //read file from path
        $objPHPExcel = PHPExcel_IOFactory::load($file);
        //get only the Cell Collection
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
        //extract to a PHP readable array format
        foreach ($cell_collection as $cell) {
         $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
         $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
         $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
         //header will/should be in row 1 only.
         if ($row == 1) {
         $header[$row][$column] = $data_value;
         } else {
         $arr_data[$row][$column] = $data_value;
         log_message('debug',"Row : ".$row."  Column : ".$column." | ".$arr_data[$row][$column]);
         }
        }
        log_message('debug',print_r($arr_data,TRUE));
        if($type=='story'){
        $storyInsert= array();
        $story = array();
        foreach($arr_data as $value)
        {
            $story['msg_Story']=$value['A'];
            $story['sid']=$value['B'];
            $story['url']=$value['C'];
            $story['objectid']=$value['D'];
            $story['msgkind']=$value['E'];
            $story['msgtype']=$value['F'];
            $story['group_id']=$value['G'];
            $story['sequence_story']=$value['H'];
            $story['order_id']=$value['I'];
            if (array_key_exists('J', $value)) {
                $story['charging']=$value['J'];
                }

            array_push($storyInsert,$story);
        }
        log_message('debug',print_r($storyInsert,TRUE));
        $partner = strtolower($partner);
        $this->Dashboard_model->insertBatch($partner,'msg_story',$storyInsert);
        echo 'Upload Success';
        }else if($type=='sch')
        {
            $arrayInsert= array();
            $array = array();
            foreach($arr_data as $value)
            {
                $array['msg_schedule']=$value['A'];
                $array['sid']=$value['B'];
                $array['url']=$value['C'];
                $array['objectid']=$value['D'];
                $array['msgkind']=$value['E'];
                $array['msgtype']=$value['F'];
                $array['group_id']=$value['G'];
                $array['schedule_msg']=$value['H'];
                $array['order_id']=$value['I'];
                $array['msgstatus']=0;
                if (array_key_exists('J', $value)) {
                    $array['charging']=$value['J'];
                    }

                array_push($arrayInsert,$array);
            }
            log_message('debug',print_r($arrayInsert,TRUE));
            $partner = strtolower($partner);
            $this->Dashboard_model->insertBatch($partner,'msg_schedule',$arrayInsert);
            echo 'Upload Success';
        }
    }

//======================================================================

    public function group($instansi)
    {

        $instansi = strtolower($instansi);
    	$userId = $this->ion_auth->get_user_id();
    	$this->data['user']=$this->ion_auth->user()->row();
    	$this->data['instansi']=$instansi;
    	$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

    	log_message('INFO','User Id : '.$userId);
    	 $this->userId=$userId;
    	$this->db = $this->load->database($partner,true);
    	$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap-v4');
		$crud->set_table('groups');
		$crud->set_subject('Groups');
		$crud->add_fields('group_name','partner_name','status','liferayid');
		$crud->required_fields('group_name','partner_name','status');
		$crud->change_field_type('updateTime','invisible');
		$crud->change_field_type('liferayid','invisible');
		$crud->display_as('group_name','Group Name')->display_as('partner_name','Partner Name')->display_as('dates','Created Date');
		$crud->change_field_type('status', 'true_false');
		$crud->edit_fields('group_name','status','partner_name');
		$crud->columns('group_id','group_name','partner_name','status','dates','updatetime');
    	$crud->callback_after_update(function ($post_array,$primary_key) {
	       	$updateTimeGroup = array("updatetime" => date('Y-m-d H:i:s'));

			$this->db->update('groups',$updateTimeGroup,array('group_id' => $primary_key));
					 return true;
	    });
    	$crud->callback_after_insert(function ($post_array,$primary_key) {

	    	$updateLiferayId = array("liferayid" =>$this->userId );
	    	$this->db->update('groups',$updateLiferayId,array('group_id' => $primary_key));
			return true;
   		});

		$output = $crud->render();
		$this->data['output']=$output;
		$this->render('dashboard/group_view');
    }

    public function keyword($partner)
    {
        $partner = strtolower($partner);
    	$userId = $this->ion_auth->get_user_id();
    	$this->data['user']=$this->ion_auth->user()->row();
    	$this->data['partner']=$partner;
    	$this->data['users_partner']=$this->Users_model->getUsersPartner($userId );

    	log_message('INFO','User Id : '.$userId);

    	$this->db = $this->load->database($partner,true);
    	$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap-v4');
		$crud->set_table('keywords');
		$crud->set_subject('Keyword');
		$crud->add_fields('group_id','keywords','type_keyword','status','shortcode','set_push_freetalk_sts','set_push_freetalk_sid');
		$crud->required_fields('group_id','keywords','type_keyword','status','shortcode','set_push_freetalk_sts');
		$crud->edit_fields('group_id','status','type_keyword','shortcode');
		$crud->columns('keyword_id','group_id','type_keyword','shortcode','status','updatetime');
		$crud->change_field_type('updateTime','invisible');
		$crud->change_field_type('liferayid','invisible');
		$crud->display_as('keywords','Keyword')->display_as('type_keyword','Keyword Type')->display_as('set_push_freetalk_sts','Freetalk Status')->display_as('group_id','Group Name');
		$crud->change_field_type('status', 'true_false');
		$crud->change_field_type('set_push_freetalk_sts', 'true_false');
		$crud->set_relation('group_id','groups','group_name');

    	$crud->callback_after_update(function ($post_array,$primary_key) {
	       	$updateTimeGroup = array("updatetime" => date('Y-m-d H:i:s'));

			$this->db->update('keywords',$updateTimeGroup,array('keyword_id' => $primary_key));
					 return true;
	    });
    	$crud->callback_after_insert(function ($post_array,$primary_key) {

	    	$updateLiferayId = array("liferayid" =>$this->userId );
	    	$this->db->update('keywords',$updateLiferayId,array('keyword_id' => $primary_key));
			return true;
   		});

   		$crud->field_type('type_keyword','dropdown',array('reg_msg' => 'Reg Message', 'reg_story' => 'Reg Message Story'));


		$output = $crud->render();
		$this->data['output']=$output;
		$this->render('dashboard/keyword_view');

    }

    public function keyword2($partner)
    {
        $partner = strtolower($partner);
    	$userId = $this->ion_auth->get_user_id();
    	$this->data['user']=$this->ion_auth->user()->row();
    	$this->data['partner']=$partner;
    	$this->data['users_partner']=$this->Users_model->getUsersPartner($userId );

    	log_message('INFO','User Id : '.$userId);

    	$this->db = $this->load->database($partner,true);
    	$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap-v4');
		$crud->set_table('key2');
		$crud->set_subject('Keyword 2');
		$crud->add_fields('group_id','key_nm','status','updatetime','liferayid');
		$crud->required_fields('group_id','key_nm','status');
		$crud->edit_fields('group_id','key_nm','status');
		$crud->columns('group_id','key_nm','status');
		$crud->change_field_type('updatetime','invisible');
		$crud->change_field_type('liferayid','invisible');
		$crud->display_as('key_nm','Keyword 2 Name')->display_as('status','Status')->display_as('group_id','Group Name');
		$crud->change_field_type('status', 'true_false');
		$crud->set_relation('group_id','groups','group_name');

    	$crud->callback_after_update(function ($post_array,$primary_key) {
	       	$updateTimeGroup = array("updatetime" => date('Y-m-d H:i:s'));

			$this->db->update('key2',$updateTimeGroup,array('order_id' => $primary_key));
					 return true;
	    });
    	$crud->callback_after_insert(function ($post_array,$primary_key) {

	    	$updateLiferayId = array("liferayId" =>$this->userId );
	    	$this->db->update('key2',$updateLiferayId,array('order_id' => $primary_key));
			return true;
   		});


		$output = $crud->render();
		$this->data['output']=$output;
		$this->render('dashboard/keyword_2_view');

    }


	public function message_register($partner)
    {
        $partner = strtolower($partner);
    	$userId = $this->ion_auth->get_user_id();
    	$this->data['user']=$this->ion_auth->user()->row();
    	$this->data['partner']=$partner;
    	$this->data['users_partner']=$this->Users_model->getUsersPartner($userId );

    	log_message('INFO','User Id : '.$userId);

    	$this->db = $this->load->database($partner,true);
    	$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap-v4');
		$crud->set_table('msg_reg');
		$crud->set_subject('Message Register');
		$crud->add_fields('msg_reg','group_id','sid','url','objectid','order_id','msgtype','msgkind','waptype','updatetime','liferayid','msgstatus');
		$crud->required_fields('group_id','msg_reg','sid','msgtype','msgkind','waptype');
		$crud->edit_fields('group_id','msg_reg','sid','msgtype','msgkind','waptype','msgstatus');
		$crud->columns('group_id','msg_reg','sid','msgtype','msgkind','waptype','msgstatus','updatetime');
		$crud->change_field_type('updatetime','invisible');
		$crud->change_field_type('liferayid','invisible');
		$crud->display_as('msg_reg','SMS')->display_as('objectid','Object Id')->display_as('group_id','Group Name')->display_as('msgtype','Message Type')->display_as('msgkind','Message Kind')->display_as('waptype','SMS Type')->display_as('msgstatus','Status');

		$crud->set_relation('group_id','groups','group_name');
		$crud->set_relation('order_id','key2','key_nm');
		$crud->change_field_type('msgstatus', 'true_false');
		$crud->field_type('msgtype','dropdown',array('11' => 'Freetalk', '20' => 'No Freetalk'));
		$crud->field_type('msgkind','dropdown',array('1' => 'Message Reg', '2' => 'Message URL + MSISDN','3'=>'Message Generate Code','4'=>'Message URL','5'=>'Message URL (Auto)','6'=>'Message URL M1M'));
		$crud->field_type('waptype','dropdown',array('0' => 'SMS Biasa < 160 Karakter', '1' => 'SMS Binary','2'=>'SMS Message Binary'));

    	$crud->callback_after_update(function ($post_array,$primary_key) {
	       	$updateTimeGroup = array("updatetime" => date('Y-m-d H:i:s'));

			$this->db->update('msg_reg',$updateTimeGroup,array('msg_reg_id 	' => $primary_key));
					 return true;
	    });
    	$crud->callback_after_insert(function ($post_array,$primary_key) {

	    	$updateLiferayId = array("liferayId" =>$this->userId,"updatetime" => date('Y-m-d H:i:s') );
	    	$this->db->update('msg_reg',$updateLiferayId,array('msg_reg_id' => $primary_key));
			return true;
   		});


		$output = $crud->render();
		$this->data['output']=$output;
		$this->render('dashboard/msg_reg_view');

 }

public function message_schedule($partner)
    {
        $partner = strtolower($partner);
    	$userId = $this->ion_auth->get_user_id();
    	$this->data['user']=$this->ion_auth->user()->row();
    	$this->data['partner']=$partner;
    	$this->data['users_partner']=$this->Users_model->getUsersPartner($userId );

    	log_message('INFO','User Id : '.$userId);

    	$this->db = $this->load->database($partner,true);
    	$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap-v4');
		$crud->set_table('msg_schedule');
		$crud->set_subject('Message Schedule');
		$crud->add_fields('msg_schedule','group_id','sid','url','objectid','schedule_msg','liferayid','order_id','msgtype','msgkind','updatetime','liferayid');
		$crud->required_fields('group_id','msg_schedule','sid','msgtype','msgkind','schedule_msg');
		$crud->edit_fields('group_id','msg_reg','sid','msgtype','msgkind','schedule_msg');
		$crud->columns('group_id','msg_schedule','sid','msgtype','msgkind','schedule_msg','msgstatus','updatetime');
		$crud->change_field_type('updatetime','invisible');
		$crud->change_field_type('liferayid','invisible');
		$crud->display_as('msg_schedule','SMS')->display_as('objectid','Object Id')->display_as('group_id','Group Name')->display_as('msgtype','Message Type')->display_as('msgkind','Message Kind')->display_as('schedule_msg','Running Time')->display_as('msgstatus','Status');

		$crud->set_relation('group_id','groups','group_name');

		$crud->change_field_type('msgstatus', 'true_false');
		$crud->field_type('msgtype','dropdown',array('11' => 'Freetalk', '20' => 'No Freetalk'));
		$crud->field_type('msgkind','dropdown',array('1' => 'Message Reg', '2' => 'Message URL + MSISDN','3'=>'Message Generate Code','4'=>'Message URL','5'=>'Message URL (Auto)','6'=>'Message URL M1M'));
		$crud->field_type('waptype','dropdown',array('0' => 'SMS Biasa < 160 Karakter', '1' => 'SMS Binary','2'=>'SMS Message Binary'));

    	$crud->callback_after_update(function ($post_array,$primary_key) {
	       	$updateTimeGroup = array("updatetime" => date('Y-m-d H:i:s'));

			$this->db->update('msg_schedule',$updateTimeGroup,array('msg_schedule_id' => $primary_key));
					 return true;
	    });
    	$crud->callback_after_insert(function ($post_array,$primary_key) {

	    	$updateLiferayId = array("liferayId" =>$this->userId,"updatetime" => date('Y-m-d H:i:s') ,'msgstatus'=>0);
	    	$this->db->update('msg_schedule',$updateLiferayId,array('msg_schedule_id' => $primary_key));
			return true;
   		});


		$output = $crud->render();
		$this->data['output']=$output;
		$this->render('dashboard/msg_schedule_view');

 }

public function taskScheduleMsgStory($partner)
{
        $partner = strtolower($partner);
		$userId = $this->ion_auth->get_user_id();
    	$this->data['user']=$this->ion_auth->user()->row();
    	$this->data['partner']=$partner;
    	$this->data['users_partner']=$this->Users_model->getUsersPartner($userId );

    	log_message('INFO','User Id : '.$userId);

    	$this->db = $this->load->database($partner,true);
    	$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap-v4');
		$crud->set_table('msg_story_task');
		$crud->set_subject('Schedule Message Story');
		$crud->add_fields('group_id','daysPush','timePush','task_msg_story','status','wapPush','liferayId');

		$crud->edit_fields('group_id','task_msg_story','status','wapPush','updatetime');
		$crud->columns('group_id','daysPush','task_msg_story','status','wapPush');
		$crud->display_as('daysPush','Days To Push')->display_as('group_id','Group Name')->display_as('task_msg_story','Cron Schedule');
		$crud->change_field_type('updatetime','invisible');
		$crud->change_field_type('liferayId','invisible');
		$crud->change_field_type('task_msg_story','invisible');
		$crud->set_relation('group_id','groups','group_name');
		$crud->change_field_type('status', 'true_false');
		$crud->change_field_type('wapPush', 'true_false');

		$crud->field_type('daysPush','multiselect',array( "MON"  => "Monday", "TUE" => "Tuesday", "WED" => "Wednesday","THU"=>"Thursday","FRI"=>"Friday","SAT"=>"Saturday","SUN"=>"Sunday"));
		$crud->field_type('timePush','datetime');


		$crud->callback_before_insert(function($post_array)
			{
				$daysPush=$post_array['daysPush'];
				$timePush=$post_array['timePush'];
				$day=implode(",",$daysPush);


				log_message('info',$timePush);
				$timePush = str_replace('/','-', $timePush);
				log_message('info',$timePush);

				$date = strtotime($timePush);
				log_message('debug',date('H', $date));
				log_message('debug',date('i', $date));
				log_message('debug',date('s', $date));

				$time =date('H', $date).':'.date('i', $date);
				log_message('debug','Push Time : '.$time);

				$taskCron = date('s',$date).' '.date('i', $date).' '.date('H', $date).' '.'?'.' '.'*'.' '.$day;

				$post_array['task_msg_story']=$taskCron;


				log_message('info',$taskCron);
				log_message('debug',print_r($post_array,TRUE));
				return $post_array;


			});


    	$crud->callback_after_update(function ($post_array,$primary_key) {
	       	$updateTimeGroup = array("updatetime" => date('Y-m-d H:i:s'));

			$this->db->update('msg_story_task',$updateTimeGroup,array('msg_story_task_id' => $primary_key));
					 return true;
	    });
    	$crud->callback_after_insert(function ($post_array,$primary_key) {

	    	$updateLiferayId = array("liferayId" =>$this->userId,"updatetime" => date('Y-m-d H:i:s') );
	    	$this->db->update('msg_story_task',$updateLiferayId,array('msg_story_task_id' => $primary_key));
			return true;
   		});


		$output = $crud->render();
		$this->data['output']=$output;
		$this->render('dashboard/story_task_schedule_view');

}

	public function message_welcome($partner)
    {
        $partner = strtolower($partner);
    	$userId = $this->ion_auth->get_user_id();
    	$this->data['user']=$this->ion_auth->user()->row();
    	$this->data['partner']=$partner;
    	$this->data['users_partner']=$this->Users_model->getUsersPartner($userId );

    	log_message('INFO','User Id : '.$userId);

    	$this->db = $this->load->database($partner,true);
    	$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap-v4');
		$crud->set_table('msg_wellcome');
		$crud->set_subject('Message Welcome');
		$crud->add_fields('msg_reg','group_id','method','sid','url','objectid','msgtype','msgkind','updatetime','liferayId','msgstatus');
		$crud->required_fields('group_id','method','msg_reg','sid','msgtype','msgkind','msgstatus');
		$crud->edit_fields('group_id','msg_reg','sid','msgtype','msgkind','waptype','msgstatus');
		$crud->columns('group_id','msg_reg','sid','msgtype','msgkind','method','msgstatus','updatetime');
		$crud->change_field_type('updatetime','invisible');
		$crud->change_field_type('liferayId','invisible');
		$crud->display_as('msg_reg','SMS')->display_as('objectid','Object Id')->display_as('group_id','Group Name')->display_as('msgtype','Message Type')->display_as('msgkind','Message Kind')->display_as('waptype','SMS Type')->display_as('msgstatus','Status');

		$crud->set_relation('group_id','groups','group_name');

		$crud->field_type('msgstatus','dropdown',array('register' => 'Register', 'unregister' => 'UnReg','already_member'=>'Already Member','not_member'=>'Not Member'));
		$crud->field_type('method','dropdown',array('pull' => 'Pull', 'push' => 'Push'));
		$crud->field_type('msgtype','dropdown',array('11' => 'Freetalk', '20' => 'No Freetalk'));
		$crud->field_type('msgkind','dropdown',array('1' => 'Message Reg', '2' => 'Message URL + MSISDN','3'=>'Message Generate Code','4'=>'Message URL','5'=>'Message URL (Auto)','6'=>'Message URL M1M'));


    	$crud->callback_after_update(function ($post_array,$primary_key) {
	       	$updateTimeGroup = array("updatetime" => date('Y-m-d H:i:s'));

			$this->db->update('msg_wellcome',$updateTimeGroup,array('msg_reg_id 	' => $primary_key));
					 return true;
	    });
    	$crud->callback_after_insert(function ($post_array,$primary_key) {

	    	$updateLiferayId = array("liferayId" =>$this->userId,"updatetime" => date('Y-m-d H:i:s') );
	    	$this->db->update('msg_wellcome',$updateLiferayId,array('msg_reg_id' => $primary_key));
			return true;
   		});


		$output = $crud->render();
		$this->data['output']=$output;
		$this->render('dashboard/msg_welcome_view');

 }

public function message_story($partner)
    {
        $partner = strtolower($partner);
    	$userId = $this->ion_auth->get_user_id();
    	$this->data['user']=$this->ion_auth->user()->row();
    	$this->data['partner']=$partner;
    	$this->data['users_partner']=$this->Users_model->getUsersPartner($userId );

    	log_message('INFO','User Id : '.$userId);

    	$this->db = $this->load->database($partner,true);
    	$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap-v4');
		$crud->set_table('msg_story');
		$crud->set_subject('Message Story');
		$crud->add_fields('msg_story','group_id','sequence_story','sid','url','objectid','msgtype','msgkind','updatetime','liferayId');
		$crud->required_fields('group_id','method','msg_reg','sid','msgtype','msgkind','sequence_story');
		$crud->edit_fields('group_id','msg_reg','sid','msgtype','msgkind','sequence_story');
		$crud->columns('group_id','msg_reg','sid','msgtype','msgkind','sequence_story','updatetime');
		$crud->change_field_type('updatetime','invisible');
		$crud->change_field_type('liferayId','invisible');
		$crud->display_as('msg_story','SMS')->display_as('objectid','Object Id')->display_as('group_id','Group Name')->display_as('msgtype','Message Type')->display_as('msgkind','Message Kind')->display_as('sequence_story','Story Sequence');

		$crud->set_relation('group_id','groups','group_name');



		$crud->field_type('msgtype','dropdown',array('11' => 'Freetalk', '20' => 'No Freetalk'));
		$crud->field_type('msgkind','dropdown',array('1' => 'Message Reg', '2' => 'Message URL + MSISDN','3'=>'Message Generate Code','4'=>'Message URL','5'=>'Message URL (Auto)','6'=>'Message URL M1M'));


    	$crud->callback_after_update(function ($post_array,$primary_key) {
	       	$updateTimeGroup = array("updatetime" => date('Y-m-d H:i:s'));

			$this->db->update('msg_story',$updateTimeGroup,array('msg_story_id 	' => $primary_key));
					 return true;
	    });
    	$crud->callback_after_insert(function ($post_array,$primary_key) {

	    	$updateLiferayId = array("liferayId" =>$this->userId,"updatetime" => date('Y-m-d H:i:s') );
	    	$this->db->update('msg_story',$updateLiferayId,array('msg_story_id' => $primary_key));
			return true;
   		});


		$output = $crud->render();
		$this->data['output']=$output;
		$this->render('dashboard/msg_story_view');

 }

}
