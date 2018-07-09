<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 ini_set('max_execution_time', 0);
// ini_set('memory_limit','2048M');
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

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
$this->data['menu']=$this->Menu_model->menuMaster($gid);

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

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);

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

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);

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

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);

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

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);

		//log_message('INFO','User Id : '.$userId);

		$this->render('dashboard/profile_pegawai_pensiun_view');

	}

	public function dataReferensi()
	{
		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$this->data['user']=$userLoggedin;
		//log_message('debug',print_r($userLoggedin,TRUE));
		
		//log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		//log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);

		//log_message('INFO','User Id : '.$userId);

		$this->render('dashboard/referensi_view');

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

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
$this->data['menu']=$this->Menu_model->menuMaster($gid);

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

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
$this->data['menu']=$this->Menu_model->menuMaster($gid);

		//log_message('INFO','User Id : '.$userId);

		$this->render('dashboard/profile_pegawai_meninggal_view');

	}

	public function opbkdModifRiwayatDiklat()
	 	{
	 		log_message('debug','Trying to load Grocer opbkdModifRiwayatDiklat');
	 		$adminSts = $this->ion_auth->is_admin()===FALSE;

	 		log_message('debug','after Load new Db');
	 		$crud = new grocery_CRUD();
	 		$crud->set_table('riwayatdiklat')
	 		->set_subject('Riwayat Diklat')
	 		->columns('NIP','NIP','kodeJenisDiklat','namaDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI','TAKHIR','JAM','NSTTPP','TSTTPP','ISAKHIR');
	 		//$crud->set_relation('NIP','datautama','nipBaru')
	 		$crud->set_relation('kodeJenisDiklat','jenisdiklat','nama');
	 		$crud->set_relation('kFungStrTek','dikstr','NDIKSTR');
	 		$crud->callback_edit_field('NIP',array($this,'editFieldNim'));
	 		$crud->change_field_type('ISAKHIR', 'true_false');

	 		$crud->fields('NIP','kodeJenisDiklat','namaDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI','TAKHIR','JAM','NSTPP','TSTPP','ISAKHIR');
	 		$output = $crud->render();
	 		$this->load->view('dashboard/grid',$output);
	 	}
	 	function editFieldNim($value,$primaryKey){
	 			return '<input type="text" maxlength="50" value="'.$value.'" name="NIP" style="width:462px" disabled>';
	 		}
	 	public function editRiwayatDiklatPNS()
	 	{
	 		log_message('debug','Inside Page Dashboard editRiwayatDiklatPNS');
	 		$userId = $this->ion_auth->get_user_id();
	 		$this->data['user']=$this->ion_auth->user()->row();
	 		log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
	 		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
	 		log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

	 		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

	 		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
	 		$this->data['menu']=$this->Menu_model->menuMaster($gid);

	 		log_message('INFO','User Id : '.$userId);


	 		log_message('DEBUG','inside Admin');
	 		$this->render('dashboard/edit_riwayat_diklat_view');


	 	}

	function editIdentitas() {

		$user = $this->ion_auth->user()->row();
		$instansi=$this->Users_model->getUsersinstansi($user->id);
		$changedData = array();
		$nipBaru = $user->nip;
		//upload file
		$config['upload_path'] = 'assets/foto/';
		$config['allowed_types'] = '*';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = FALSE;
		$config['max_size'] = '1024'; //1 MB
		$new_name = $nipBaru.date('mdYhis', time());
		$config['file_name'] = $new_name;





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
			$changedData['FILE_BMP']=$data['upload_data']['raw_name'].$data['upload_data']['file_ext'];
			// $this->load->view('upload_success', $data);
		}

		log_message('debug','Uploading Foto');

		$userLoggedin = $this->ion_auth->user()->row();
		$user=$userLoggedin;
		$nipBaru = $user->nip;
		log_message('debug','From Post Form '.$nipBaru);

		$json = $this->input->post('json');
		$jsonDecode = json_decode($json);


		foreach($jsonDecode as $i)
		{
			$changedData[$i->name]=$i->value;
		}




		$changedData['nipBaru']=$nipBaru;
		log_message('debug',print_r($changedData,TRUE));
		$jsonchangeData = json_encode($changedData);

		$currentDataSimpeg = $this->Simpeg_model->getIdentitasPegawai($nipBaru);

		log_message('debug',print_r($currentDataSimpeg,TRUE));
		$jsonEncodeCurrentData = json_encode($currentDataSimpeg);

		if($this->Simpeg_model->checkUpdateIdentitasExist($nipBaru))
		{
			log_message('debug','Data Update Already Exist, Replacing ');
			$this->Simpeg_model->updateConfirmationData($jsonchangeData,$nipBaru);

		}else{
		$dataInsert['tables']='datautama';
		$dataInsert['currentData']=$jsonEncodeCurrentData;
		$dataInsert['changedData']=$jsonchangeData;
		$dataInsert['tabs']='identitas';
		$dataInsert['instansi']=$instansi[0]['instansi_name'];

		$this->Simpeg_model->insertData('dataconfirmation',$dataInsert);
	}
		$this->Simpeg_model->updateIdentitasStatusUpdate(array('stsUpdate'=>1),$nipBaru);
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

	public function updateStatusDataConfirmation()
	{
		$id=$this->input->post('id');
		$sts=$this->input->post('sts');
		$this->Simpeg_model->updateStatusDataConfirmation(array('stsConfirmation'=>$sts),$id);
		$dataConfirmation = $this->Simpeg_model->getConfirmationDataByid($id);
		$changedData = json_decode($dataConfirmation['changedData']);
		$nData['ALRT'] = $changedData->ALRT;
		$nData['ALRW'] = $changedData->ALRW;
		$nData['KPOS'] = $changedData->KPOS;
		$nData['alamat'] = $changedData->alamat;
		$nData['KGOLDAR'] = $changedData->golonganDarah;
		$nData['agamaId'] = $changedData->agamaId;
		$nData['nipBaru'] = $changedData->nipBaru;
		$nData['nomorTelpon'] = $changedData->noTelpon;
		$nData['npwpNomor'] = $changedData->npwpNomor;
		$nData['askesNomor'] = $changedData->askesNomor;
		$nData['jenisKawin'] = $changedData->jenisKawin;
		if (property_exists($changedData, 'FILE_BMP'))
		{
			$nData['FILE_BMP'] = $changedData->FILE_BMP;
		}
		//$nData['statusCpnsPns'] = $changedData->statusCpnsPns;
		$nData['stsUpdate']=0;

		$this->Simpeg_model->updateIdentitasStatusUpdate($nData,$changedData->nipBaru);

		echo 'Berhasil';
	}
	public function profilePegawai()
	{
		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$this->data['user']=$userLoggedin;
		//log_message('debug',print_r($userLoggedin,TRUE));
		$identitasSimpeg = $this->Simpeg_model->getIdentitasPegawai($userLoggedin->nip);
		log_message('debug',print_r($identitasSimpeg,TRUE));
		$cpnspnsSimpeg = $this->Simpeg_model->getCPNSPNSInfoByNip($userLoggedin->nip);
		$pangkatTerakhir = $this->Simpeg_model->getPangkatAkhirByNip($userLoggedin->nip);
		$gajiBerkala = $this->Simpeg_model->getGajiBerkala($userLoggedin->nip);
		$tempatPegawai = $this->Simpeg_model->getTempatPegawai($userLoggedin->nip);
		$jabatanTerakhir = $this->Simpeg_model->getJabatanTerakhir($userLoggedin->nip);
		$jabatanTerakhir2 = $this->Simpeg_model->getJabatanTerakhir2($userLoggedin->nip);
		$riwayatPangkat = $this->Simpeg_model->getRiwayatPangkat($userLoggedin->nip);
		$riwayatJabatan = $this->Simpeg_model->getRiwayatJabatan($userLoggedin->nip);
		$riwayatJabatan2 = $this->Simpeg_model->getRiwayatJabatan2($userLoggedin->nip);
		$riwayatOrganisasi = $this->Simpeg_model->getRiwayatOrganisasi($userLoggedin->nip);
		$riwayatOrganisasi2 = $this->Simpeg_model->getRiwayatOrganisasi2($userLoggedin->nip);
		$riwayatJasa = $this->Simpeg_model->getRiwayatJasa($userLoggedin->nip);
		$riwayatDpp = $this->Simpeg_model->getRiwayatDPP($userLoggedin->nip);
		$riwayatHukuman = $this->Simpeg_model->getRiwayatHukuman($userLoggedin->nip);
		$riwayatCuti = $this->Simpeg_model->getRiwayatCuti($userLoggedin->nip);
		$riwayatTugasLuarNegri = $this->Simpeg_model->getRiwayatTugasLuarNegri($userLoggedin->nip);
		$riwayatBahasa = $this->Simpeg_model->getRiwayatBahasa($userLoggedin->nip);
		$riwayatKeluargaAyah = $this->Simpeg_model->getRiwayatKeluargaAyah($userLoggedin->nip);
		$riwayatKeluargaAyah2 = $this->Simpeg_model->getRiwayatKeluargaAyah2($userLoggedin->nip);
		$riwayatKeluargaIbu = $this->Simpeg_model->getRiwayatKeluargaIbu($userLoggedin->nip);
		$riwayatKeluargaIbu2 = $this->Simpeg_model->getRiwayatKeluargaIbu2($userLoggedin->nip);
		$riwayatKeluargaSuamiIstri = $this->Simpeg_model->getRiwayatKeluargaSuamiIstri($userLoggedin->nip);
		$riwayatKeluargaSuamiIstri2 = $this->Simpeg_model->getRiwayatKeluargaSuamiIstri2($userLoggedin->nip);
		$riwayatKeluargaAnak = $this->Simpeg_model->getRiwayatKeluargaAnak($userLoggedin->nip);
		$riwayatKeluargaAnak2 = $this->Simpeg_model->getRiwayatKeluargaAnak2($userLoggedin->nip);
		$riwayatPendidikanUmum = $this->Simpeg_model->getRiwayatPendidikanUmum($userLoggedin->nip);
		$riwayatPendidikanUmum2 = $this->Simpeg_model->getRiwayatPendidikanUmum2($userLoggedin->nip);
		log_message('debug',print_r($riwayatPendidikanUmum,TRUE));
		$riwayatPendidikanStruktural = $this->Simpeg_model->getRiwayatPendidikanStruktural($userLoggedin->nip);
		$riwayatPendidikanStruktural2 = $this->Simpeg_model->getRiwayatPendidikanStruktural2($userLoggedin->nip);
		$riwayatPendidikanFungsional = $this->Simpeg_model->getRiwayatPendidikanFungsional($userLoggedin->nip);
		$riwayatPendidikanFungsional2 = $this->Simpeg_model->getRiwayatPendidikanFungsional2($userLoggedin->nip);
		$riwayatPendidikanTeknis = $this->Simpeg_model->getRiwayatPendidikanTeknis($userLoggedin->nip);
		$riwayatPendidikanTeknis2 = $this->Simpeg_model->getRiwayatPendidikanTeknis2($userLoggedin->nip);
		$riwayatPendidikanPenataran = $this->Simpeg_model->getRiwayatPendidikanPenataran($userLoggedin->nip);
		$riwayatPendidikanPenataran2 = $this->Simpeg_model->getRiwayatPendidikanPenataran2($userLoggedin->nip);
		$riwayatPendidikanSeminar = $this->Simpeg_model->getRiwayatPendidikanSeminar($userLoggedin->nip);
		$riwayatPendidikanSeminar2 = $this->Simpeg_model->getRiwayatPendidikanSeminar2($userLoggedin->nip);
		$riwayatPendidikanKursus = $this->Simpeg_model->getRiwayatPendidikanKursus($userLoggedin->nip);
		$riwayatPendidikanKursus2 = $this->Simpeg_model->getRiwayatPendidikanKursus2($userLoggedin->nip);

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
		$jenisGolDarah = $this->Simpeg_model->getJenisGolDarah();
		log_message('debug',print_r($jenisGolDarah,TRUE));
		log_message('debug','Isi Riwayat Jasa : '.count($riwayatJasa));


		$this->data['identitas']=$identitasSimpeg;
		$this->data['riwayatPangkat']=$riwayatPangkat;
		$this->data['riwayatJabatan']=$riwayatJabatan;
		$this->data['riwayatJabatan2']=$riwayatJabatan2;
		$this->data['riwayatOrganisasi']=$riwayatOrganisasi;
		$this->data['riwayatOrganisasi2']=$riwayatOrganisasi2;
		$this->data['riwayatJasa']=$riwayatJasa;
		$this->data['riwayatDpp']=$riwayatDpp;
		$this->data['riwayatHukuman']=$riwayatHukuman;
		$this->data['riwayatCuti']=$riwayatCuti;
		$this->data['riwayatTugasLuarNegri']=$riwayatTugasLuarNegri;
		$this->data['riwayatBahasa']=$riwayatBahasa;
		$this->data['riwayatKeluargaAyah']=$riwayatKeluargaAyah;
		$this->data['riwayatKeluargaAyah2']=$riwayatKeluargaAyah2;
		$this->data['riwayatKeluargaIbu']=$riwayatKeluargaIbu;
		$this->data['riwayatKeluargaIbu2']=$riwayatKeluargaIbu2;
		$this->data['riwayatKeluargaSuamiIstri']=$riwayatKeluargaSuamiIstri;
		$this->data['riwayatKeluargaSuamiIstri2']=$riwayatKeluargaSuamiIstri2;
		$this->data['riwayatKeluargaAnak']=$riwayatKeluargaAnak;
		$this->data['riwayatKeluargaAnak2']=$riwayatKeluargaAnak2;
		$this->data['riwayatPendidikanUmum']=$riwayatPendidikanUmum;
		$this->data['riwayatPendidikanUmum2']=$riwayatPendidikanUmum2;
		$this->data['riwayatPendidikanStruktural']=$riwayatPendidikanStruktural;
		$this->data['riwayatPendidikanStruktural2']=$riwayatPendidikanStruktural2;
		$this->data['riwayatPendidikanFungsional']=$riwayatPendidikanFungsional;
		$this->data['riwayatPendidikanFungsional2']=$riwayatPendidikanFungsional2;
		$this->data['riwayatPendidikanTeknis']=$riwayatPendidikanTeknis;
		$this->data['riwayatPendidikanTeknis2']=$riwayatPendidikanTeknis2;
		$this->data['riwayatPendidikanPenataran']=$riwayatPendidikanPenataran;
		$this->data['riwayatPendidikanPenataran2']=$riwayatPendidikanPenataran2;
		$this->data['riwayatPendidikanSeminar']=$riwayatPendidikanSeminar;
		$this->data['riwayatPendidikanSeminar2']=$riwayatPendidikanSeminar2;
		$this->data['riwayatPendidikanKursus']=$riwayatPendidikanKursus;
		$this->data['riwayatPendidikanKursus2']=$riwayatPendidikanKursus2;

		$this->data['cpnspns']=$cpnspnsSimpeg;
		$this->data['pangkatTerakhir']=$pangkatTerakhir;
		$this->data['gaji']=$gajiBerkala;
		$this->data['tempat']=$tempatPegawai;
		$this->data['jabatanTerakhir']=$jabatanTerakhir;
		$this->data['jabatanTerakhir2']=$jabatanTerakhir2;
		$this->data['kedudukanPegawai']=$kedudukanPegawai;
		$this->data['statusPegawai']=$statusPegawai;
		$this->data['jenisPegawai'] = $jenisPegawai;
		$this->data['pejabat'] = $jenisPejabatMenetapkan;
		$this->data['jenisGolongan']=$jenisGolongan;
		$this->data['jenisNaikPangkat']=$jenisNaikPangkat;
		$this->data['jenisGolDarah']=$jenisGolDarah;
		$this->data['stlud']=$jenisSTLUD;


		$this->data['agama']=$agama;
		$this->data['relationShipSts'] = $relationShipSts;
		//log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		//log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);




		//log_message('INFO','User Id : '.$userId);

		$this->render('dashboard/profile_pegawai_view');

	}



	public function modalViewConfirmation()
	{
		$userId = $this->ion_auth->get_user_id();
		$user=$this->ion_auth->user()->row();
		$idConfirmation  = $this->input->get('id');
		$data['test']="ini Loh";
		log_message('debug','Id Confirmation From Get :'.$idConfirmation);
		$dataConfirmation = $this->Simpeg_model->getConfirmationDataByid($idConfirmation);
		$currentData = json_decode($dataConfirmation['currentData']);
		$changedData = json_decode($dataConfirmation['changedData']);
		log_message('debug',print_r($currentData,TRUE));
		log_message('debug',print_r($changedData,TRUE));
		$oData['ALRT'] = $currentData->ALRT;
		$oData['ALRW'] = $currentData->ALRW;
		$oData['KPOS'] = $currentData->KPOS;
		$oData['alamat'] = $currentData->alamat;
		$oData['KGOLDAR'] = $currentData->KGOLDAR;
		$oData['agamaId'] = $currentData->agamaId;
		$oData['nipBaru'] = $currentData->nipBaru;
		$oData['noTelpon'] = $currentData->noTelpon;
		$oData['npwpNomor'] = $currentData->npwpNomor;
		$oData['askesNomor'] = $currentData->askesNomor;
		$oData['jenisKawin'] = $currentData->jenisKawin;
		$oData['statusCpnsPns'] = $currentData->statusCpnsPns;
		$oData['FILE_BMP'] = $currentData->FILE_BMP;
		$nData['ALRT'] = $changedData->ALRT;
		$nData['ALRW'] = $changedData->ALRW;
		$nData['KPOS'] = $changedData->KPOS;
		$nData['alamat'] = $changedData->alamat;
		$nData['KGOLDAR'] = $changedData->golonganDarah;
		$nData['agamaId'] = $changedData->agamaId;
		$nData['nipBaru'] = $changedData->nipBaru;
		$nData['noTelpon'] = $changedData->noTelpon;
		$nData['npwpNomor'] = $changedData->npwpNomor;
		$nData['askesNomor'] = $changedData->askesNomor;
		$nData['jenisKawin'] = $changedData->jenisKawin;
		$nData['statusCpnsPns'] = $changedData->statusCpnsPns;
		if(property_exists($changedData, 'FILE_BMP'))
		{
			$nData['FILE_BMP'] = base_url().'assets/foto/'.$changedData->FILE_BMP;
		}

		$data['oData']=$oData;
		$data['nData']=$nData;


		$this->load->view('dashboard/modal_confirmation_view',$data);
	}

	public function dataConfirmation()
	{


		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$this->data['user']=$userLoggedin;
		//log_message('debug',print_r($userLoggedin,TRUE));

		//log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		//log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);

		$confirmationData = $this->Simpeg_model->getConfirmationByStatus(0,$this->data['users_instansi'][0]['instansi_name']);
		$recordsTotal=$this->Simpeg_model->getCountTotalConfirmationByStatus(0,$this->data['users_instansi'][0]['instansi_name']);
		$returnDataJson = array();



		//log_message('INFO','User Id : '.$userId);

		$this->render('dashboard/dataConfirmation_view');

	}
	public function getJsonConfirmationData()
	{
		$draw=0;
		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$instansi = $this->Users_model->getUsersinstansi($userId );
		$confirmationData = $this->Simpeg_model->getConfirmationByStatus(0,$instansi[0]['instansi_name']);
		$recordsTotal=$this->Simpeg_model->getCountTotalConfirmationByStatus(0,$instansi[0]['instansi_name']);
		$returnDataJson = array();
		$returnDataJson['draw']=$draw;
		$returnDataJson['recordsTotal']=$recordsTotal;
		$returnDataJson['recordsFiltered']=$recordsTotal;
		$returnDataJson['data']=$confirmationData;
		echo json_encode($returnDataJson);

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
		$orderByColumn = $this->input->get('order[0][columninc]');
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
  public function getHistoryAbsensi()
	{
    $status=$this->input->get('StatusKey');
    $bulan=$this->input->get('bulanKey');
		$key = $this->input->get('key');
		$draw = $this->input->get('draw');
		$limitStart = $this->input->get('start');
		$limitLength = $this->input->get('length');
		$column0Searchable = $this->input->get('columns[0][searchable]');
		$searchColumn = $this->input->get('search[value]');
		$searchQueryColumn=null;
		$orderByColumn = $this->input->get('order[0][columninc]');
		$orderByDir = $this->input->get('order[0][dir]');
		$limit=null;
    $userLoggedin = $this->ion_auth->user()->row();

		log_message('debug','Isi Draw : '.$draw);
		log_message('debug','Isi limitStart :'.$limitStart);
		log_message('debug','Isi limitLength :'.$limitLength);
		log_message('debug','Isi $column0Searchable :'.$column0Searchable);
		log_message('debug','Isi $orderByColumn :'.$orderByColumn);



		$dataPegawai =$this->Simpeg_model->getHistoryAbsensi($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir,$userLoggedin->nip,$status,$bulan);
		$arrayReturn= array();

		$arrayReturn['draw']=(int)$draw;
		$arrayReturn['recordsTotal']=$this->Simpeg_model->getCountTotalRowAllHistory($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir,$userLoggedin->nip,$status,$bulan);
		$arrayReturn['recordsFiltered']=$this->Simpeg_model->getCountTotalRowAllHistory($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir,$userLoggedin->nip,$status,$bulan);
		$arrayReturn['data']=$dataPegawai;


		$returnResponse = json_encode($arrayReturn);

		log_message('debug',$returnResponse);

		echo $returnResponse;
	}
  public function getHistoryAbsensiBawahan()
  {
    $status=$this->input->get('StatusKey');
    $bulan=$this->input->get('bulanKey');
    $key = $this->input->get('key');
    $draw = $this->input->get('draw');
    $limitStart = $this->input->get('start');
    $limitLength = $this->input->get('length');
    $column0Searchable = $this->input->get('columns[0][searchable]');
    $searchColumn = $this->input->get('search[value]');
    $searchQueryColumn=null;
    $orderByColumn = $this->input->get('order[0][columninc]');
    $orderByDir = $this->input->get('order[0][dir]');
    $limit=null;
    $userLoggedin = $this->ion_auth->user()->row();

    log_message('debug','Isi Draw : '.$draw);
    log_message('debug','Isi limitStart :'.$limitStart);
    log_message('debug','Isi limitLength :'.$limitLength);
    log_message('debug','Isi $column0Searchable :'.$column0Searchable);
    log_message('debug','Isi $orderByColumn :'.$orderByColumn);



    $dataPegawai =$this->Simpeg_model->getHistoryAbsensiBawahan($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir,$userLoggedin->nip,$status,$bulan);
    $arrayReturn= array();

    $arrayReturn['draw']=(int)$draw;
    $arrayReturn['recordsTotal']=$this->Simpeg_model->getCountTotalRowAllHistoryAbsensiBawahan($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir,$userLoggedin->nip,$status,$bulan);
    $arrayReturn['recordsFiltered']=$this->Simpeg_model->getCountTotalRowAllHistoryAbsensiBawahan($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir,$userLoggedin->nip,$status,$bulan);
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
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);
		$this->render('dashboard/kepegawaian_view');
	}

	public function instansiInduk()
	{
		log_message('debug','Inside Page Dashboard Ref insinduk');
		$userId = $this->ion_auth->get_user_id();
		$this->data['user']=$this->ion_auth->user()->row();
		log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));
		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );
		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
$this->data['menu']=$this->Menu_model->menuMaster($gid);
		log_message('INFO','User Id : '.$userId);
		log_message('DEBUG','inside Admin');
		$this->render('dashboard/referensi_instansiInduk_view');
	}


	public function referensiInstansiInduk()
	{
		log_message('debug','Trying to load Grocer Ref Instansi Induk');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('insinduk')
		->set_subject('Instansi Induk')
		->columns('KINSIND','NINSIND')
		->display_as('KINSIND','Kode Instansi')
		->display_as('NINSIND','Nama Instansi');
		$crud->fields('KINSIND','NINSIND');
		$crud->required_fields('KINSIND','NINSIND');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}



	public function adminKesdis()
	{
		log_message('debug','Inside Page Dashboard editRiwayatDiklatPNS');
		$userId = $this->ion_auth->get_user_id();
		$this->data['user']=$this->ion_auth->user()->row();
		log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);

		log_message('INFO','User Id : '.$userId);
		log_message('DEBUG','inside Admin');
		$this->render('dashboard/admin_kesdis_view');
	}

	public function adminKesdisPenghargaan()
	{
		log_message('debug','Trying to load Grocer adminKesdisPenghargaan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('penghargaan')
		->set_subject('Penghargaan')
		->columns('nip','skNomor','skDate','tahun','NBINTANG','AOLEH','TEMPAT')
		->display_as('nip', 'Nip')
		->display_as('skNomor', 'Nomor Sk')
		->display_as('skDate', 'Tanggal SK')
		->display_as('tahun', 'Tahun')
		->display_as('NBINTANG', 'Nama Penghargaan')
		->display_as('AOLEH', 'Asal Perolehan')
		->display_as('TEMPAT', 'Tempat');

		$crud->fields('nip','skNomor','skDate','tahun','NBINTANG','AOLEH','TEMPAT');
		$crud->required_fields('nip','skNomor','skDate','tahun','NBINTANG','AOLEH','TEMPAT');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminKesdisCuti()
	{
		log_message('debug','Trying to load Grocer adminKesdisCuti');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatcuti')
		->set_subject('Cuti Pegawai')
		->columns('NIP','JCUTI','NSK','TSK','TMULAI','TAKHIR','PTETAP')
		->display_as('NIP', 'Nip')
		->display_as('JCUTI', 'Jenis Cuti')
		->display_as('NSK', 'Nomor SK')
		->display_as('TSK', 'Tanggal Sk')
		->display_as('TMULAI', 'Tanggal Mulai')
		->display_as('TAKHIR', 'Tanggal Berakhir')
		->display_as('PTETAP', 'Asal Perolehan');

		$crud->fields('NIP','JCUTI','NSK','TSK','TMULAI','TAKHIR','PTETAP');
		$crud->required_fields('NIP','JCUTI','NSK','TSK','TMULAI','TAKHIR','PTETAP');
		$crud->set_relation('PTETAP','pejabatmenetapkan','npej');

		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminKesdisStatusPerkawinan()
	{
		log_message('debug','Trying to load Grocer adminKesdisStatusPerkawinan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('datautama')
		->set_subject('Status Perkawinan')
		->columns('nipBaru','nama','jenisKawin')
		->display_as('nipBaru', 'Nip')
		->display_as('jenisKawin', 'Status Perkawinan');

		$crud->fields('nipBaru','nama','jenisKawin');
		$crud->required_fields('nipBaru','nama','jenisKawin');
		$crud->set_relation('jenisKawin','statusperkawinan','nama');

		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminKesdisHukuman()
	{
		log_message('debug','Trying to load Grocer adminKesdisStatusPerkawinan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayathukuman')
		->set_subject('Hukuman Pegawai')
		->columns('NIP','JHUKUM','DESHUKUM', 'NSK', 'TSK','TMT', 'KPEJ')
		->display_as('NIP', 'NIP')
		->display_as('JHUKUM', 'Jenis Hukuman')
		->display_as('DESHUKUM', 'Deskripsi Hukuman')
		->display_as('NSK', 'No. SK')
		->display_as('TSK', 'Tanggal SK')
		->display_as('KPEJ', 'Pejabat yang Menetapkan')
		->display_as('TMT', 'TMT Hukuman');

		$crud->fields('NIP','JHUKUM','DESHUKUM', 'NSK', 'TSK','TMT', 'KPEJ');
		$crud->required_fields('NIP','JHUKUM','DESHUKUM', 'NSK', 'TSK','TMT', 'KPEJ');
		$crud->set_relation('KPEJ','pejabatmenetapkan','npej');

		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpeg()
	{
		log_message('debug','Inside Page Dashboard editAdminSimpeg');
		$userId = $this->ion_auth->get_user_id();
		$this->data['user']=$this->ion_auth->user()->row();
		log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		$gid =array();
			foreach($this->data['user_group'] as $ug){
			  $gid[]=$ug->id;
			}
		$this->data['menu']=$this->Menu_model->menuMaster($gid);

		log_message('INFO','User Id : '.$userId);
		log_message('DEBUG','inside Admin');
		$this->render('dashboard/admin_simpeg_view');
	}

	public function adminSimpegKepangkatan()
	{
		log_message('debug','Trying to load Grocer adminSimpegKepangkatan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('golonganhistory')
		->set_subject('Kepangkatan')
		->columns('nip','nomorSk','tanggalSk','tmtGolongan','nomorLetterBkn','tanggalLetterBkn','mkGolonganTahun', 'mkGolonganBulan','jenisKP','AsalNama','kpej','Golongan_idGolongan','AKREDIT','TMTPANG2')
		->display_as('nip', 'Nip')
		->display_as('nomorSk', 'Nomor Sk')
		->display_as('tanggalSk', 'Tanggal SK')
		->display_as('tmtGolongan', 'TMT Kepangkatan')
		->display_as('nomorLetterBkn', 'Nomor Surat Bkn')
		->display_as('tanggalLetterBkn', 'Tanggal Surat BKN')
		->display_as('mkGolonganTahun', 'Masa Kerja Kepangkatan')
		->display_as('mkGolonganBulan', 'Masa Kerja Bulan')
		->display_as('jenisKP', 'Jenis Kepegawaian')
		->display_as('AsalNama', 'Asal Nama')
		->display_as('kpej', 'Pejabat Menetapkan')
		->display_as('Golongan_idGolongan', 'Golongan')
		->display_as('AKREDIT', 'Angka Kredit')
		->display_as('TMTPANG2', 'TMT Pangkat');
		$crud->fields('nip','nomorSk','tanggalSk','tmtGolongan','nomorLetterBkn','tanggalLetterBkn','mkGolonganTahun', 'mkGolonganBulan','jenisKP','AsalNama','kpej','Golongan_idGolongan','AKREDIT','TMTPANG2');
		$crud->set_relation('jenisKP','naikPangkat','nnpang');
		$crud->set_relation('kpej','pejabatMenetapkan','npej');
		$crud->set_relation('Golongan_idGolongan','jenisgolongan','golNama');
		$crud->required_fields('nip','nomorSk','tanggalSk','tmtGolongan','nomorLetterBkn','tanggalLetterBkn','mkGolonganTahun', 'mkGolonganBulan','jenisKP','AsalNama','kpej','Golongan_idGolongan','AKREDIT','TMTPANG2');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegJabatan()
	{
		log_message('debug','Trying to load Grocer adminSimpegJabatan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('jabatan')
		->set_subject('Kepangkatan')
		->columns('nip','kunkers','KINSIND','nunkerUnitOrganisasi','namaJenisJabatan','tmtJabatan', 'nomorSk','tanggalSk', 'jnsjab', 'kpej','tmtPelantikan', 'njab', 'kwil', 'nunkerUnitOrganisasi', 'JSUSPIM', 'KESELON')
		->display_as('nip', 'Nip')
		->display_as('kunkers', 'Instansi')
		->display_as('KINSIND', 'Instansi Induk')
		->display_as('nunkerUnitOrganisasi', 'Nama Unit Organisasi')
		->display_as('namaJenisJabatan', 'Nama Jenis Jabatan')
		->display_as('tmtJabatan', 'TMT Jabatan')
		->display_as('nomorSk', 'Nomor SK')
		->display_as('tanggalSk', 'Tanggal Sk')
		->display_as('jnsjab', 'Jenis Jabatan')
		->display_as('kpej', 'Pejabat Menetapkan')
		->display_as('tmtPelantikan', 'TMT Pelantikan')
		->display_as('njab', 'Nama Jabatan')
		->display_as('kwil', 'Wilayah')
		->display_as('nunkerUnitOrganisasi', 'Nama Unit Organisasi')
		->display_as('JSUSPIM', 'JSUSPIM')
		->display_as('KESELON', 'Eselon');
		$crud->fields('nip','kunkers', 'KINSIND','nunkerUnitOrganisasi','namaJenisJabatan','tmtJabatan', 'nomorSk','tanggalSk', 'jnsjab','kpej','tmtPelantikan', 'njab', 'kwil', 'nunkerUnitOrganisasi', 'JSUSPIM', 'KESELON');
		$crud->set_relation('kunkers','unkerja','nunker');
		$crud->set_relation('KINSIND','insinduk','NINSIND');
		$crud->set_relation('KESELON','eselon','nama');
		$crud->set_relation('jnsjab','jnsjabatan','namaJenisJabatan');
		$crud->set_relation('kpej','pejabatmenetapkan','npej');
		$crud->set_relation('kwil','wilayah','nwil');
		$crud->required_fields('nip','kunkers', 'KINSIND','nunkerUnitOrganisasi','namaJenisJabatan','tmtJabatan', 'nomorSk','tanggalSk', 'jnsjab' ,'kpej','tmtPelantikan', 'njab', 'kwil', 'nunkerUnitOrganisasi', 'JSUSPIM', 'KESELON');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegPendidikan()
	{
		log_message('debug','Trying to load Grocer adminSimpegPendidikan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('pendidikan')
		->set_subject('pendidikan')
		->columns('nip','tahunLulus','tglTahunLulus','nomorIjazah','namaSekolah','tempat','glrDepan', 'glrBelakang', 'ktpukjur', 'nkepsek','npdum')
		->display_as('nip', 'Nip')
		->display_as('tahunLulus', 'Tahun Kelulusan')
		->display_as('tglTahunLulus', 'Tanggal Kelulusan')
		->display_as('nomorIjazah', 'Nomor Ijazah')
		->display_as('namaSekolah', 'Nama Sekolah')
		->display_as('tempat', 'Tempat')
		->display_as('glrDepan', 'Gelar Depan')
		->display_as('glrBelakang', 'Gelar Belakang')
		->display_as('ktpukjur', 'Nama Jurusan')
		->display_as('nkepsek', 'Nama Kepala Sekolah')
		->display_as('npdum', 'Nama Pendidikan Umum');
		$crud->fields('nip','tahunLulus','tglTahunLulus','nomorIjazah','namaSekolah','tempat','glrDepan', 'glrBelakang', 'ktpukjur', 'nkepsek','npdum');
		$crud->set_relation('ktpukjur','jurpendidikan','NJUR');
		$crud->required_fields('nip','tahunLulus','tglTahunLulus','nomorIjazah','namaSekolah','tempat','glrDepan', 'glrBelakang', 'ktpukjur', 'nkepsek','npdum');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegDiklatStruktural()
	{
		log_message('debug','Trying to load Grocer adminSimpegDiklatStruktural');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('kodeJenisDiklat',2);
		$crud->set_table('riwayatdiklat')
		->set_subject('Diklat Kepemimpinan')
		->columns('NIP','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR')
		->display_as('NIP', 'Nip')
		->display_as('kodeJenisDiklat', 'Jenis Diklat')
		->display_as('kFungStrTek', 'Nama Diklat')
		->display_as('TEMPAT', 'Tempat')
		->display_as('PAN', 'Penyelenggara')
		->display_as('ANGKATAN', 'Angkatan')
		->display_as('TMULAI', 'Tanggal Mulai')
		->display_as('TAKHIR', 'Tanggal Berakhir')
		->display_as('tahun', 'Tahun')
		->display_as('JAM', 'Jam')
		->display_as('NSTTPP', 'NSTTPP')
		->display_as('TSTTPP', 'TSTTPP')
		->display_as('namaDiklat', 'Nama Diklat')
		->display_as('ISAKHIR', 'Diklat Terakhir');
		$crud->fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		$crud->set_relation('kodeJenisDiklat','jenisdiklat','nama');
		$crud->set_relation('kFungStrTek','dikstr','NDIKSTR');
		$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		$crud->required_fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegDiklatFungsional()
	{
		log_message('debug','Trying to load Grocer adminSimpegDiklatFungsional');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('kodeJenisDiklat',1);
		$crud->set_table('riwayatdiklat')
		->set_subject('Diklat Fungsional')
		->columns('NIP','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR')
		->display_as('NIP', 'Nip')
		->display_as('kodeJenisDiklat', 'Jenis Diklat')
		->display_as('kFungStrTek', 'Nama Diklat')
		->display_as('TEMPAT', 'Tempat')
		->display_as('PAN', 'Penyelenggara')
		->display_as('ANGKATAN', 'Angkatan')
		->display_as('TMULAI', 'Tanggal Mulai')
		->display_as('TAKHIR', 'Tanggal Berakhir')
		->display_as('tahun', 'Tahun')
		->display_as('JAM', 'Jam')
		->display_as('NSTTPP', 'NSTTPP')
		->display_as('TSTTPP', 'TSTTPP')
		->display_as('namaDiklat', 'Nama Diklat')
		->display_as('ISAKHIR', 'Diklat Terakhir');
		$crud->fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		$crud->set_relation('kodeJenisDiklat','jenisdiklat','nama');
		$crud->set_relation('kFungStrTek','dikfung','NDIKFUNG');
		$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		$crud->required_fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegDiklatTeknik()
	{
		log_message('debug','Trying to load Grocer adminSimpegDiklatTeknik');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('kodeJenisDiklat',3);
		$crud->set_table('riwayatdiklat')
		->set_subject('Diklat Teknik')
		->columns('NIP','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR')
		->display_as('NIP', 'Nip')
		->display_as('kodeJenisDiklat', 'Jenis Diklat')
		->display_as('kFungStrTek', 'Nama Diklat')
		->display_as('TEMPAT', 'Tempat')
		->display_as('PAN', 'Penyelenggara')
		->display_as('ANGKATAN', 'Angkatan')
		->display_as('TMULAI', 'Tanggal Mulai')
		->display_as('TAKHIR', 'Tanggal Berakhir')
		->display_as('tahun', 'Tahun')
		->display_as('JAM', 'Jam')
		->display_as('NSTTPP', 'NSTTPP')
		->display_as('TSTTPP', 'TSTTPP')
		->display_as('namaDiklat', 'Nama Diklat')
		->display_as('ISAKHIR', 'Diklat Terakhir');
		$crud->fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		$crud->set_relation('kodeJenisDiklat','jenisdiklat','nama');
		$crud->set_relation('kFungStrTek','diktek','NDIKTEK');
		$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		$crud->required_fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegPenataran()
	{
		log_message('debug','Trying to load Grocer adminSimpegPenataran');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatpenataran')
		->set_subject('Penataran')
		->columns('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NTATAR','ANGKATAN')
		->display_as('NIP', 'Nip')
		->display_as('TEMPAT', 'Tempat')
		->display_as('PAN', 'Penyelenggara')
		->display_as('TMULAI', 'Tanggal Mulai')
		->display_as('TAKHIR', 'Tanggak Akhir')
		->display_as('JAM', 'Jam')
		->display_as('NPIAGAM', 'Nama Piagam')
		->display_as('TPIAGAM', 'Tanggal Piagam')
		->display_as('NTATAR', 'Nama Penataran')
		->display_as('ANGKATAN', 'Angkatan');
		$crud->fields('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NTATAR','ANGKATAN');
		$crud->required_fields('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NTATAR','ANGKATAN');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegSeminar()
	{
		log_message('debug','Trying to load Grocer adminSimpegSeminar');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatseminar')
		->set_subject('Seminar')
		->columns('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NSEMINAR','ANGKATAN')
		->display_as('NIP', 'Nip')
		->display_as('TEMPAT', 'Tempat')
		->display_as('PAN', 'Penyelenggara')
		->display_as('TMULAI', 'Tanggal Mulai')
		->display_as('TAKHIR', 'Tanggal Akhir')
		->display_as('JAM', 'Jam')
		->display_as('NPIAGAM', 'Nama Piagam')
		->display_as('TPIAGAM', 'Tanggal Piagam')
		->display_as('NSEMINAR', 'Nama Penataran')
		->display_as('ANGKATAN', 'Angkatan');
		$crud->fields('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NSEMINAR','ANGKATAN');
		$crud->required_fields('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NSEMINAR','ANGKATAN');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegKursus()
	{
		log_message('debug','Trying to load Grocer adminSimpegKursus');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatkursus')
		->set_subject('Kursus')
		->columns('nip', 'namaKursus', 'jumlahJam', 'npiagam', 'tpiagam', 'tanggalKursus', 'tanggalAkhirKursus', 'tahun', 'tempat', 'kkurs', 'nomorSertipikat', 'institusiPenyelenggara')
		->display_as('nip', 'Nip')
		->display_as('namaKursus', 'Nama Kursus')
		->display_as('jumlahJam', 'Jumlah Jam')
		->display_as('npiagam', 'Nama Piagam')
		->display_as('tpiagam', 'Tanggal Piagam')
		->display_as('tanggalKursus', 'Tanggal Kursus')
		->display_as('tanggalAkhirKursus', 'Tanggal Akhir Kursus')
		->display_as('tahun', 'Tahun')
		->display_as('tempat', 'Tempat')
		->display_as('kkurs', 'Nama Kursus')
		->display_as('nomorSertipikat', 'Nomor Sertifikat')
		->display_as('institusiPenyelenggara', 'Institusi Penyelenggara');
		$crud->fields('nip', 'namaKursus', 'jumlahJam', 'npiagam', 'tpiagam', 'tanggalKursus', 'tanggalAkhirKursus', 'tahun', 'tempat', 'kkurs', 'nomorSertipikat', 'institusiPenyelenggara');
		$crud->set_relation('kkurs','kursus','nama');
		$crud->required_fields('nip', 'namaKursus', 'jumlahJam', 'npiagam', 'tpiagam', 'tanggalKursus', 'tanggalAkhirKursus', 'tahun', 'tempat', 'kkurs', 'nomorSertipikat', 'institusiPenyelenggara');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegPenghargaan()
	{
		log_message('debug','Trying to load Grocer adminSimpegPenghargaan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('penghargaan')
		->set_subject('Penghargaan')
		->columns('nip', 'skNomor', 'skDate', 'tahun', 'NBINTANG', 'AOLEH', 'NOMOR', 'TEMPAT')
		->display_as('nip', 'Nip')
		->display_as('skNomor', 'Nomor SK')
		->display_as('skDate', 'Tanggal SK')
		->display_as('tahun', 'Tahun')
		->display_as('NBINTANG', 'Nama Penghargaan')
		->display_as('AOLEH', 'Diperoleh Dari')
		->display_as('NOMOR', 'Nomor')
		->display_as('TEMPAT', 'Tempat');
		$crud->fields('nip', 'skNomor', 'skDate', 'tahun', 'NBINTANG', 'AOLEH', 'NOMOR', 'TEMPAT');
		$crud->required_fields('nip', 'skNomor', 'skDate', 'tahun', 'NBINTANG', 'AOLEH', 'NOMOR', 'TEMPAT');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegOrganisasi()
	{
		log_message('debug','Trying to load Grocer adminSimpegOrganisasi');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatorganisasi')
		->set_subject('Organisasi')
		->columns('NIP', 'idJORG', 'NORG', 'JBORG', 'TMULAI', 'TAKHIR', 'NPIMP', 'TEMPAT')
		->display_as('NIP', 'Nip')
		->display_as('idJORG', 'Jenis Organisasi')
		->display_as('NORG', 'Nama Organisasi')
		->display_as('JBORG', 'Jabatan Organisasi')
		->display_as('TMULAI', 'Tanggal Mulai')
		->display_as('TAKHIR', 'Tanggal Akhir')
		->display_as('NPIMP', 'Nama Pemimpin')
		->display_as('TEMPAT', 'Tempat');
		$crud->fields('NIP', 'idJORG', 'NORG', 'JBORG', 'TMULAI', 'TAKHIR', 'NPIMP', 'TEMPAT');
		$crud->set_relation('idJORG','jenisorganisasi','JORG');
		$crud->required_fields('NIP', 'idJORG', 'NORG', 'JBORG', 'TMULAI', 'TAKHIR', 'NPIMP', 'TEMPAT');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegTugas()
	{
		log_message('debug','Trying to load Grocer adminSimpegTugas');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayattugas')
		->set_subject('Tugas Luar Negri')
		->columns('NIP', 'NNEG', 'TUJUAN', 'PTETAP', 'NSK', 'TSK', 'TMULAI', 'TAKHIR')
		->display_as('NIP', 'Nip')
		->display_as('NNEG', 'Nama Negara')
		->display_as('TUJUAN', 'Tujuan Negara')
		->display_as('PTETAP', 'Pejabat Yang Menetapkan')
		->display_as('NSK', 'Nomor SK')
		->display_as('TSK', 'Tanggal SK')
		->display_as('TMULAI', 'Tanggal Mulai')
		->display_as('TAKHIR', 'Tanggal Akhir');
		$crud->fields('NIP', 'NNEG', 'TUJUAN', 'PTETAP', 'NSK', 'TSK', 'TMULAI', 'TAKHIR');
		$crud->required_fields('NIP', 'NNEG', 'TUJUAN', 'PTETAP', 'NSK', 'TSK', 'TMULAI', 'TAKHIR');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegBahasa()
	{
		log_message('debug','Trying to load Grocer adminSimpegRiwayatTugas');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatbahasa')
		->set_subject('Bahasa')
		->columns('NIP', 'NBAHASA', 'KBAHASA', 'JBAHASA')
		->display_as('NIP', 'Nip')
		->display_as('NBAHASA', 'Nama Bahasa')
		->display_as('KBAHASA', 'Kemampuan Bahasa')
		->display_as('JBAHASA', 'Jenis Bahasa');
		$crud->fields('NIP', 'NBAHASA', 'KBAHASA', 'JBAHASA');
		$crud->set_relation('KBAHASA','kemampuanbahasa','nama');
		$crud->set_relation('JBAHASA','jenisbahasa','nama');
		$crud->required_fields('NIP', 'NBAHASA', 'KBAHASA', 'JBAHASA');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegDPPP()
	{
		log_message('debug','Trying to load Grocer adminSimpegDPPP');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('rdppp')
		->set_subject('DPPP')
		->columns('NIP', 'THNILAI', 'NSETIA', 'NPRES', 'NTJAWAB', 'NTAAT', 'NJUJUR', 'NKSAMA', 'NPKARSA', 'NPIMPIN', 'NTOTAL', 'NRATA')
		->display_as('NIP', 'Nip')
		->display_as('THNILAI', 'Tahun Penilaian')
		->display_as('NSETIA', 'Kemampuan Kesetian')
		->display_as('NPRES', 'Nilai Prestasi')
		->display_as('NTAAT', 'Nilai Ketaatan')
		->display_as('NJUJUR', 'Nilai kejujuran')
		->display_as('NKSAMA', 'Nilai Kerja Sama')
		->display_as('NPKARSA', 'Nilai Prakarsa')
		->display_as('NPIMPIN', 'Nilai Kepemimpinan')
		->display_as('NTOTAL', 'Nilai Total')
		->display_as('NRATA', 'Nilai Rata Rata');
		$crud->fields('NIP', 'THNILAI', 'NSETIA', 'NPRES', 'NTJAWAB', 'NTAAT', 'NJUJUR', 'NKSAMA', 'NPKARSA', 'NPIMPIN', 'NTOTAL', 'NRATA');
		$crud->required_fields('NIP', 'THNILAI', 'NSETIA', 'NPRES', 'NTJAWAB', 'NTAAT', 'NJUJUR', 'NKSAMA', 'NPKARSA', 'NPIMPIN', 'NTOTAL', 'NRATA');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegHukuman()
	{
		log_message('debug','Trying to load Grocer adminSimpegHukuman');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('hukumandisiplin')
		->set_subject('Hukuman Disiplin')
		->columns('nipBaru', 'nipLama', 'jenisHukuman', 'DESHUKUM', 'skNomor', 'skTanggal', 'KPEJ', 'hukumanTanggal', 'akhirHukumTanggal', 'masaTahun', 'masaBulan', 'nomorPp', 'alasanHukumanDisiplin')
		->display_as('nipBaru', 'Nip')
		->display_as('nipLama', 'Nip Lama')
		->display_as('jenisHukuman', 'Jenis Hukuman')
		->display_as('DESHUKUM', 'Deskripsi Hukuman')
		->display_as('skNomor', 'Nomor SK')
		->display_as('skTanggal', 'Tanggal SK')
		->display_as('KPEJ', 'Pejabat Yang Menetapkan')
		->display_as('hukumanTanggal', 'Tanggal Hukuman')
		->display_as('akhirHukumTanggal', 'Akhir Tanggal Hukuman')
		->display_as('masaTahun', 'Tahun')
		->display_as('masaBulan', 'Bulan')
		->display_as('nomorPp', 'Nomor PP')
		->display_as('alasanHukumanDisiplin', 'Alasan Hukuman');
		$crud->fields('nipBaru', 'nipLama', 'jenisHukuman', 'DESHUKUM', 'skNomor', 'skTanggal', 'KPEJ', 'hukumanTanggal', 'akhirHukumTanggal', 'masaTahun', 'masaBulan', 'nomorPp', 'alasanHukumanDisiplin');
		$crud->set_relation('KPEJ','pejabatmenetapkan','npej');
		$crud->required_fields('nipBaru', 'jenisHukuman', 'DESHUKUM', 'skNomor', 'skTanggal', 'KPEJ', 'hukumanTanggal', 'akhirHukumTanggal', 'masaTahun', 'masaBulan', 'nomorPp', 'alasanHukumanDisiplin');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegSuamiIstri()
	{
		log_message('debug','Trying to load Grocer adminSimpegSuamiIstri');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatsuamiistri')
		->set_subject('Suami / Istri')
		->columns('NIP', 'NISUA', 'KTLAHIR', 'TLAHIR', 'TIJASAH', 'TKAWIN', 'STUNJ', 'KKERJA', 'ISAKHIR', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP')
		->display_as('NIP', 'Nip')
		->display_as('NISUA', 'Nama Pasangan')
		->display_as('KTLAHIR', 'Kota Lahir')
		->display_as('TLAHIR', 'Tanggal Lahir')
		->display_as('TIJASAH', 'Tingkat Ijasah')
		->display_as('TKAWIN', 'Tanggal Kawin')
		->display_as('STUNJ', 'Status Tunjangan')
		->display_as('KKERJA', 'Pekerjaan')
		->display_as('ALJALAN', 'Alamat')
		->display_as('ALRT', 'RT')
		->display_as('ALRW', 'RW')
		->display_as('NOTELP', 'Nomor Telepon')
		->display_as('WIL', 'Wilayah')
		->display_as('KPOS', 'Kode Pos')
		->display_as('ALHP', 'Nomor HP')
		->display_as('ISAKHIR', 'Akhir');
		$crud->fields('NIP', 'NISUA', 'KTLAHIR', 'TLAHIR', 'TIJASAH', 'TKAWIN', 'STUNJ', 'KKERJA', 'ISAKHIR', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		$crud->set_relation('STUNJ','statustunjangan','nama');
		$crud->set_relation('KKERJA','daftarPekerjaan','nama');
		$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		$crud->required_fields('NIP', 'NISUA', 'KTLAHIR', 'TLAHIR', 'TIJASAH', 'TKAWIN', 'STUNJ', 'KKERJA', 'ISAKHIR', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegAnak()
	{
		log_message('debug','Trying to load Grocer adminSimpegAnak');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatanak')
		->set_subject('Anak')
		->columns('NIP', 'NANAK', 'TLAHIR', 'TGLLAHIR', 'KJKEL', 'KELUARGA', 'TUNJ', 'TIJASAH', 'KKERJA')
		->display_as('NIP', 'Nip')
		->display_as('NANAK', 'Nama Anak')
		->display_as('TLAHIR', 'Tempat Lahir')
		->display_as('TGLLAHIR', 'Tanggal Lahir')
		->display_as('KJKEL', 'Jenis Kelamin')
		->display_as('KELUARGA', 'Hubungan Keluarga')
		->display_as('TUNJ', 'Tunjangan')
		->display_as('TIJASAH', 'Tingkat Pendidikan Umum')
		->display_as('KKERJA', 'Pekerjaan');
		$crud->fields('NIP', 'NANAK', 'TLAHIR', 'TGLLAHIR', 'KJKEL', 'KELUARGA', 'TUNJ', 'TIJASAH', 'KKERJA');
		$crud->set_relation('KJKEL','jenisKelamin','NKELAMIN');
		$crud->set_relation('KELUARGA','hubungankeluarga','ketkeluarga');
		$crud->set_relation('TUNJ','statustunjangan','nama');
		$crud->set_relation('KKERJA','daftarPekerjaan','nama');
		$crud->required_fields('NIP', 'NANAK', 'TLAHIR', 'TGLLAHIR', 'KJKEL', 'KELUARGA', 'TUNJ', 'TIJASAH', 'KKERJA');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegAyah()
	{
		log_message('debug','Trying to load Grocer adminSimpegAyah');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatayah')
		->set_subject('Ayah')
		->columns('NIP', 'NAYAH', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP')
		->display_as('NIP', 'Nip')
		->display_as('NAYAH', 'Nama Ayah')
		->display_as('TLAHIR', 'Tempat Lahir')
		->display_as('TGLLAHIR', 'Tanggal Lahir')
		->display_as('KKERJA', 'Pekerjaan')
		->display_as('ALJALAN', 'Alamat')
		->display_as('ALRT', 'RT')
		->display_as('ALRW', 'RW')
		->display_as('NOTELP', 'Nomor Telepon')
		->display_as('WIL', 'Wilayah')
		->display_as('KPOS', 'Kode Pos')
		->display_as('ALHP', 'Nomor HP');
		$crud->fields('NIP', 'NAYAH', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		$crud->set_relation('KKERJA','daftarPekerjaan','nama');
		$crud->required_fields('NIP', 'NAYAH', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function adminSimpegIbu()
	{
		log_message('debug','Trying to load Grocer adminSimpegAyah');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('riwayatibu')
		->set_subject('Ibu')
		->columns('NIP', 'NIBU', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP')
		->display_as('NIP', 'Nip')
		->display_as('NIBU', 'Nama Ibu')
		->display_as('TLAHIR', 'Tempat Lahir')
		->display_as('TGLLAHIR', 'Tanggal Lahir')
		->display_as('KKERJA', 'Pekerjaan')
		->display_as('ALJALAN', 'Alamat')
		->display_as('ALRT', 'RT')
		->display_as('ALRW', 'RW')
		->display_as('NOTELP', 'Nomor Telepon')
		->display_as('WIL', 'Wilayah')
		->display_as('KPOS', 'Kode Pos')
		->display_as('ALHP', 'Nomor HP');
		$crud->fields('NIP', 'NIBU', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		$crud->set_relation('KKERJA','daftarPekerjaan','nama');
		$crud->required_fields('NIP', 'NIBU', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}


		public function operatorSimpeg()
		{
			log_message('debug','Inside Page Dashboard editAdminSimpeg');
			$userId = $this->ion_auth->get_user_id();
			$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

			$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

			$gid =array();
			foreach($this->data['user_group'] as $ug){
			  $gid[]=$ug->id;
			}
			$this->data['menu']=$this->Menu_model->menuMaster($gid);

			log_message('INFO','User Id : '.$userId);
			log_message('DEBUG','inside Admin');
			$this->render('dashboard/operator_simpeg_view');
		}
		
		public function addNewPNSDataUtama()
		{
			$crud = new grocery_CRUD();
	 
			$crud->set_table('datautama');
			$crud->fields('nipBaru','nipLama','nama','gelarDepan','gelarBlk','jenisKawin','KTLAHIR','TLAHIR','KJKEL','KGOLDAR','statusHidupPensiunPindah','ALRT','ALRW','kwil','KPOS','NKARIS_SU','FILE_BMP','agamaId','email','alamat',
			'nomorTelpon','kartuPegawai','askesNomor','taspen','npwpNomor');
			$crud->columns(array('nipBaru','nipLama','nama','gelarDepan','gelarBlk','jenisKawin','KTLAHIR','TLAHIR','KJKEL','KGOLDAR','statusHidupPensiunPindah','ALRT','ALRW','kwil','KPOS','NKARIS_SU','FILE_BMP','agamaId','email','alamat',
			'nomorTelpon','jenisPegawai','kartuPegawai','askesNomor','taspen','npwpNomor'));
			$crud->edit_fields(array('nipBaru','nipLama','nama','gelarDepan','gelarBlk','KTLAHIR','TLAHIR','KJKEL','KGOLDAR','statusHidupPensiunPindah','ALRT','ALRW','kwil','KPOS','NKARIS_SU','FILE_BMP','agamaId','email','alamat',
			'nomorTelpon','jenisPegawai','kartuPegawai','askesNomor','taspen','npwpNomor'));
			$crud->set_subject('Data PNS');
			$crud->set_relation('agamaId','agama','nama');
			$crud->display_as('nipBaru', 'NIP');
			$crud->display_as('nipLama', 'NIP Lama');
			$crud->display_as('gelarDepan', 'Gelar Depan');
			$crud->display_as('gelarBlk', 'Gelar Belakang');
			$crud->display_as('KTLAHIR', 'Tempat Lahir');
			$crud->display_as('TLAHIR', 'Tanggal Lahir');
			$crud->display_as('KGOLDAR', 'Golongan Darah');
			$crud->display_as('statusHidupPensiunPindah', 'Status');
			$crud->display_as('ALRT', 'RT');
			$crud->display_as('ALRW', 'RW');
			$crud->display_as('KJKEL', 'Jenis Kelamin');
			$crud->display_as('kwil', 'Kode Wilayah');
			$crud->display_as('KPOS', 'Kode Pos');
			$crud->display_as('NKARIS_SU', 'No Karis SU');
			$crud->display_as('FILE_BMP', 'Foto');
			$crud->display_as('agamaId', 'Agama');
			$crud->display_as('nomorTelpon', 'No Telepon');
			$crud->display_as('jenisPegawai', 'Jenis Pegawai');
			$crud->display_as('kartuPegawai', 'Kartu Pegawai');
			$crud->display_as('askesNomor', 'No Askes');
			$crud->display_as('nipBaru', 'NIP');
			$crud->display_as('npwpNomor', 'No NPWP');
			$crud->display_as('jenisKawin', 'Status Nikah');
			
			$crud->set_relation('jenisKawin','statusperkawinan','nama');
			$crud->set_relation('jenisPegawai','jenispegawai','nama');
			$crud->set_relation('KJKEL','jeniskelamin','NKELAMIN');
			$crud->set_relation('KGOLDAR','golongandarah','NGOLDAR');
			$crud->set_relation('statusHidupPensiunPindah','statushiduppensiunpindah','namaStatus');
			$crud->set_field_upload('FILE_BMP','assets/foto');
			
			$output = $crud->render();
			 
				
			//$output = $crud->render();

			if($this->ion_auth->is_admin()===FALSE)
			{
				$this->load->view('dashboard/grid',$output);
			}else
			{
				//$this->render('dashboard/index_view');
				$this->load->view('dashboard/grid',$output);
			}
		}	

		public function operatorSimpegKepangkatan()
		{
			log_message('debug','Trying to load Grocer operatorSimpegKepangkatan');
			$adminSts = $this->ion_auth->is_admin()===FALSE;

			log_message('debug','after Load new Db');
			$crud = new grocery_CRUD();
			$crud->set_table('golonganhistory')
			->set_subject('Kepangkatan')
			->columns('nip','nomorSk','tanggalSk','tmtGolongan','nomorLetterBkn','tanggalLetterBkn','mkGolonganTahun', 'mkGolonganBulan','jenisKP','AsalNama','kpej','Golongan_idGolongan','AKREDIT','TMTPANG2')
			->fields('nip','nomorSk','tanggalSk','tmtGolongan','nomorLetterBkn','tanggalLetterBkn','mkGolonganTahun', 'mkGolonganBulan','jenisKP','AsalNama','kpej','Golongan_idGolongan','AKREDIT','TMTPANG2')
			->display_as('nip', 'Nip')
			->display_as('nomorSk', 'Nomor Sk')
			->display_as('tanggalSk', 'Tanggal SK')
			->display_as('tmtGolongan', 'TMT Kepangkatan')
			->display_as('nomorLetterBkn', 'Nomor Surat Bkn')
			->display_as('tanggalLetterBkn', 'Tanggal Surat BKN')
			->display_as('mkGolonganTahun', 'Masa Kerja Kepangkatan')
			->display_as('mkGolonganBulan', 'Masa Kerja Bulan')
			->display_as('jenisKP', 'Jenis Kepegawaian')
			->display_as('AsalNama', 'Asal Nama')
			->display_as('kpej', 'Pejabat Yang Menetapkan')
			->display_as('Golongan_idGolongan', 'Golongan')
			->display_as('AKREDIT', 'Angka Kredit')
			->display_as('TMTPANG2', 'TMT Pangkat');
			$crud->set_relation('jenisKP','naikPangkat','nnpang');
			$crud->set_relation('kpej','pejabatMenetapkan','npej');
			$crud->set_relation('Golongan_idGolongan','jenisgolongan','golNama');

			$crud->required_fields('nip','nomorSk','tanggalSk','tmtGolongan','nomorLetterBkn','tanggalLetterBkn','mkGolonganTahun', 'mkGolonganBulan','jenisKP','AsalNama','kpej','Golongan_idGolongan','AKREDIT','TMTPANG2');
			$output = $crud->render();
			$this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegJabatan()
		{
			log_message('debug','Trying to load Grocer operatorSimpegJabatan');
			$adminSts = $this->ion_auth->is_admin()===FALSE;

			log_message('debug','after Load new Db');
			$crud = new grocery_CRUD();
			$crud->set_table('jabatan')
			->set_subject('Kepangkatan')
			->columns('nip','kunkers','kunkersInduk','KINSIND','nunkerUnitOrganisasi','namaJenisJabatan','tmtJabatan', 'nomorSk','tanggalSk', 'jnsjab','kjab','kpej','tmtPelantikan', 'njab', 'kwil', 'nunkerUnitOrganisasi', 'JSUSPIM', 'KESELON')
			->display_as('nip', 'Nip')
			->display_as('kunkers', 'Instansi')
			->display_as('kunkersInduk', 'Instansi')
			->display_as('KINSIND', 'Instansi Induk')
			->display_as('nunkerUnitOrganisasi', 'Nama Unit Organisasi')
			->display_as('namaJenisJabatan', 'Nama Jenis Jabatan')
			->display_as('tmtJabatan', 'TMT Jabatan')
			->display_as('nomorSk', 'Nomor SK')
			->display_as('tanggalSk', 'Tanggal Sk')
			->display_as('jnsjab', 'Jenis Jabatan')
			->display_as('kjab', 'Jabatan')
			->display_as('kpej', 'Pejabat Menetapkan')
			->display_as('tmtPelantikan', 'TMT Pelantikan')
			->display_as('njab', 'Nama Jabatan')
			->display_as('kwil', 'Wilayah')
			->display_as('nunkerUnitOrganisasi', 'Nama Unit Organisasi')
			->display_as('JSUSPIM', 'JSUSPIM')
			->display_as('KESELON', 'Eselon');
			$crud->set_relation('KINSIND','insinduk','NINSIND');
			$crud->set_relation('jnsjab','jnsjabatan','namaJenisJabatan');
			$crud->set_relation('kpej','pejabatmenetapkan','npej');
			$crud->set_relation('kwil','wilayah','nwil');
			$crud->set_relation('KESELON','eselon','nama');
			$crud->fields('nip','kunkers','kunkersInduk','KINSIND','nunkerUnitOrganisasi','namaJenisJabatan','tmtJabatan', 'nomorSk','tanggalSk', 'jnsjab','kjab','kpej','tmtPelantikan', 'njab', 'kwil', 'nunkerUnitOrganisasi', 'JSUSPIM', 'KESELON');
			$crud->required_fields('nip','kunkers','kunkersInduk','KINSIND','nunkerUnitOrganisasi','namaJenisJabatan','tmtJabatan', 'nomorSk','tanggalSk', 'jnsjab','kjab','kpej','tmtPelantikan', 'njab', 'kwil', 'nunkerUnitOrganisasi', 'JSUSPIM', 'KESELON');
			$output = $crud->render();
			$this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegPendidikan()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegPendidikan');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('pendidikan')
		  ->set_subject('pendidikan')
		  ->columns('nip','tahunLulus','tglTahunLulus','nomorIjazah','namaSekolah','tempat','glrDepan', 'glrBelakang', 'ktpukjur', 'nkepsek','npdum')
		  ->display_as('nip', 'Nip')
		  ->display_as('tahunLulus', 'Tahun Kelulusan')
		  ->display_as('tglTahunLulus', 'Tanggal Kelulusan')
		  ->display_as('nomorIjazah', 'Nomor Ijazah')
		  ->display_as('namaSekolah', 'Nama Sekolah')
		  ->display_as('tempat', 'Tempat')
		  ->display_as('glrDepan', 'Gelar Depan')
		  ->display_as('glrBelakang', 'Gelar Belakang')
		  ->display_as('ktpukjur', 'Nama Pendidikan Umum')
		  ->display_as('nkepsek', 'Nama Kepala Sekolah')
		  ->display_as('npdum', 'Nama Pendidikan Umum');
		  $crud->set_relation('ktpu','tpu','NJUR');
			$crud->set_relation('ktpukjur','jurpendidikan','NJUR');
		  $crud->fields('nip','tahunLulus','tglTahunLulus','nomorIjazah','namaSekolah','tempat','glrDepan', 'glrBelakang','ktpukjur','nkepsek','npdum');
		  $crud->required_fields('nip','tahunLulus','tglTahunLulus','nomorIjazah','namaSekolah','tempat','glrDepan', 'glrBelakang','ktpukjur','nkepsek','npdum');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegDiklatStruktural()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegDiklatStruktural');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->where('kodeJenisDiklat',2);
		  $crud->set_table('riwayatdiklat')
		  ->set_subject('Diklat Kepemimpinan')
		  ->columns('NIP','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR')
		  ->display_as('NIP', 'Nip')
		  ->display_as('kodeJenisDiklat', 'Jenis Diklat')
		  ->display_as('kFungStrTek', 'Nama Diklat')
		  ->display_as('TEMPAT', 'Tempat')
		  ->display_as('PAN', 'Penyelenggara')
		  ->display_as('ANGKATAN', 'Angkatan')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggal Berakhir')
		  ->display_as('tahun', 'Tahun')
		  ->display_as('JAM', 'Jam')
		  ->display_as('NSTTPP', 'NSTTPP')
		  ->display_as('TSTTPP', 'TSTTPP')
			->display_as('namaDiklat', 'Nama Diklat')
			->display_as('ISAKHIR', 'Diklat Terakhir');
			$crud->set_relation('kFungStrTek','dikstr','NDIKSTR');
			$crud->set_relation('kodeJenisDiklat','jenisdiklat','nama');
			$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		  $crud->fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $crud->required_fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegDiklatFungsional()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegDiklatFungsional');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->where('kodeJenisDiklat',1);
		  $crud->set_table('riwayatdiklat')
		  ->set_subject('Diklat Fungsional')
		  ->columns('NIP','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR')
		  ->display_as('NIP', 'Nip')
		  ->display_as('kodeJenisDiklat', 'Jenis Diklat')
		  ->display_as('kFungStrTek', 'Nama Diklat')
		  ->display_as('TEMPAT', 'Tempat')
		  ->display_as('PAN', 'Penyelenggara')
		  ->display_as('ANGKATAN', 'Angkatan')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggal Berakhir')
		  ->display_as('tahun', 'Tahun')
		  ->display_as('JAM', 'Jam')
		  ->display_as('NSTTPP', 'NSTTPP')
		  ->display_as('TSTTPP', 'TSTTPP')
		  ->display_as('namaDiklat', 'Nama Diklat')
			->display_as('ISAKHIR', 'Diklat Terakhir');
			$crud->set_relation('kFungStrTek','dikfung','NDIKFUNG');
			$crud->set_relation('kodeJenisDiklat','jenisdiklat','nama');
			$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		  $crud->fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $crud->required_fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegDiklatTeknik()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegDiklatTeknik');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->where('kodeJenisDiklat',3);
		  $crud->set_table('riwayatdiklat')
		  ->set_subject('Diklat Teknik')
		  ->columns('NIP','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR')
		  ->display_as('NIP', 'Nip')
		  ->display_as('kodeJenisDiklat', 'Jenis Diklat')
		  ->display_as('kFungStrTek', 'Nama Diklat')
		  ->display_as('TEMPAT', 'Tempat')
		  ->display_as('PAN', 'Penyelenggara')
		  ->display_as('ANGKATAN', 'Angkatan')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggal Berakhir')
		  ->display_as('tahun', 'Tahun')
		  ->display_as('JAM', 'Jam')
		  ->display_as('NSTTPP', 'NSTTPP')
		  ->display_as('TSTTPP', 'TSTTPP')
		  ->display_as('namaDiklat', 'Nama Diklat')
			->display_as('ISAKHIR', 'Diklat Terakhir');
			$crud->set_relation('kFungStrTek','diktek','NDIKTEK');
			$crud->set_relation('kodeJenisDiklat','jenisdiklat','nama');
			$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		  $crud->fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $crud->required_fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegPenataran()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegPenataran');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayatpenataran')
		  ->set_subject('Penataran')
		  ->columns('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NTATAR','ANGKATAN')
		  ->display_as('NIP', 'Nip')
		  ->display_as('TEMPAT', 'Tempat')
		  ->display_as('PAN', 'Penyelenggara')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggak Akhir')
		  ->display_as('JAM', 'Jam')
		  ->display_as('NPIAGAM', 'Nama Piagam')
		  ->display_as('TPIAGAM', 'Tanggal Piagam')
		  ->display_as('NTATAR', 'Nama Penataran')
		  ->display_as('ANGKATAN', 'Angkatan');
		  $crud->fields('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NTATAR','ANGKATAN');
		  $crud->required_fields('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NTATAR','ANGKATAN');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegSeminar()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegSeminar');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayatseminar')
		  ->set_subject('Seminar')
		  ->columns('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NSEMINAR','ANGKATAN')
		  ->display_as('NIP', 'Nip')
		  ->display_as('TEMPAT', 'Tempat')
		  ->display_as('PAN', 'Penyelenggara')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggak Akhir')
		  ->display_as('JAM', 'Jam')
		  ->display_as('NPIAGAM', 'Nama Piagam')
		  ->display_as('TPIAGAM', 'Tanggal Piagam')
		  ->display_as('NSEMINAR', 'Nama Penataran')
		  ->display_as('ANGKATAN', 'Angkatan');
		  $crud->fields('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NSEMINAR','ANGKATAN');
		  $crud->required_fields('NIP','TEMPAT','PAN','TMULAI','TAKHIR', 'JAM','NPIAGAM','TPIAGAM','NSEMINAR','ANGKATAN');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegKursus()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegKursus');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayatkursus')
		  ->set_subject('Kursus')
		  ->columns('nip', 'namaKursus', 'jumlahJam', 'npiagam', 'tpiagam', 'tanggalKursus', 'tanggalAkhirKursus', 'tahun', 'tempat', 'kkurs', 'nomorSertipikat', 'institusiPenyelenggara')
		  ->display_as('nip', 'Nip')
		  ->display_as('namaKursus', 'Nama Kursus')
		  ->display_as('jumlahJam', 'Jumlah Jam')
		  ->display_as('npiagam', 'Nama Piagam')
		  ->display_as('tpiagam', 'Tanggak Piagam')
		  ->display_as('tanggalKursus', 'Tanggal Kursus')
		  ->display_as('tanggalAkhirKursus', 'Tanggal Akhir Kursus')
		  ->display_as('tahun', 'Tahun')
		  ->display_as('tempat', 'Tempat')
		  ->display_as('kkurs', 'Jenis Kursus')
		  ->display_as('nomorSertipikat', 'Nomor Sertifikat')
		  ->display_as('institusiPenyelenggara', 'Institusi Penyelenggara');
		  $crud->set_relation('kkurs','kursus','nama');
		  $crud->fields('nip', 'namaKursus', 'jumlahJam', 'npiagam', 'tpiagam', 'tanggalKursus', 'tanggalAkhirKursus', 'tahun', 'tempat', 'kkurs', 'nomorSertipikat', 'institusiPenyelenggara');
		  $crud->required_fields('nip', 'namaKursus', 'jumlahJam', 'npiagam', 'tpiagam', 'tanggalKursus', 'tanggalAkhirKursus', 'tahun', 'tempat', 'kkurs', 'nomorSertipikat', 'institusiPenyelenggara');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegPenghargaan()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegPenghargaan');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('penghargaan')
		  ->set_subject('Penghargaan')
		  ->columns('nip', 'skNomor', 'skDate', 'tahun', 'NBINTANG', 'AOLEH', 'NOMOR', 'TEMPAT')
		  ->display_as('nip', 'Nip')
		  ->display_as('skNomor', 'Nomor SK')
		  ->display_as('skDate', 'Tanggal SK')
		  ->display_as('tahun', 'Tahun')
		  ->display_as('NBINTANG', 'Nama Penghargaan')
		  ->display_as('AOLEH', 'Diperoleh Dari')
		  ->display_as('NOMOR', 'Nomor')
		  ->display_as('TEMPAT', 'Tempat');
		  $crud->fields('nip', 'skNomor', 'skDate', 'tahun', 'NBINTANG', 'AOLEH', 'NOMOR', 'TEMPAT');
		  $crud->required_fields('nip', 'skNomor', 'skDate', 'tahun', 'NBINTANG', 'AOLEH', 'NOMOR', 'TEMPAT');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegOrganisasi()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegOrganisasi');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayatorganisasi')
		  ->set_subject('Organisasi')
		  ->columns('NIP', 'idJORG', 'NORG', 'JBORG', 'TMULAI', 'TAKHIR', 'NPIMP', 'TEMPAT')
		  ->display_as('NIP', 'Nip')
		  ->display_as('idJORG', 'Jenis Organisasi')
		  ->display_as('NORG', 'Nama Organisasi')
		  ->display_as('JBORG', 'Jabatan Organisasi')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggal Akhir')
		  ->display_as('NPIMP', 'Nama Pemimpin')
		  ->display_as('TEMPAT', 'Tempat');
		  $crud->fields('NIP', 'idJORG', 'NORG', 'JBORG', 'TMULAI', 'TAKHIR', 'NPIMP', 'TEMPAT');
			$crud->set_relation('idJORG','jenisorganisasi','JORG');
		  $crud->required_fields('NIP', 'idJORG', 'NORG', 'JBORG', 'TMULAI', 'TAKHIR', 'NPIMP', 'TEMPAT');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegTugas()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegTugas');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayattugas')
		  ->set_subject('Tugas Luar Negri')
		  ->columns('NIP', 'NNEG', 'TUJUAN', 'PTETAP', 'NSK', 'TSK', 'TMULAI', 'TAKHIR')
		  ->display_as('NIP', 'Nip')
		  ->display_as('NNEG', 'Nama Negara')
		  ->display_as('TUJUAN', 'Tujuan Negara')
		  ->display_as('PTETAP', 'Pejabat Yang Menetapkan')
		  ->display_as('NSK', 'Nomor SK')
		  ->display_as('TSK', 'Tanggal SK')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggal Akhir');
		  $crud->fields('NIP', 'NNEG', 'TUJUAN', 'PTETAP', 'NSK', 'TSK', 'TMULAI', 'TAKHIR');
		  $crud->required_fields('NIP', 'NNEG', 'TUJUAN', 'PTETAP', 'NSK', 'TSK', 'TMULAI', 'TAKHIR');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegBahasa()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegRiwayatTugas');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayatbahasa')
		  ->set_subject('Bahasa')
		  ->columns('NIP', 'NBAHASA', 'KBAHASA', 'JBAHASA')
		  ->display_as('NIP', 'Nip')
		  ->display_as('NBAHASA', 'Nama Bahasa')
		  ->display_as('KBAHASA', 'Kemampuan Bahasa')
		  ->display_as('JBAHASA', 'Jenis Bahasa');
		  $crud->fields('NIP', 'NBAHASA', 'KBAHASA', 'JBAHASA');
			$crud->set_relation('KBAHASA','kemampuanbahasa','nama');
			$crud->set_relation('JBAHASA','jenisbahasa','nama');
		  $crud->required_fields('NIP', 'NBAHASA', 'KBAHASA', 'JBAHASA');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegDPPP()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegDPPP');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('rdppp')
		  ->set_subject('DPPP')
		  ->columns('NIP', 'THNILAI', 'NSETIA', 'NPRES', 'NTJAWAB', 'NTAAT', 'NJUJUR', 'NKSAMA', 'NPKARSA', 'NPIMPIN', 'NTOTAL', 'NRATA')
		  ->display_as('NIP', 'Nip')
		  ->display_as('THNILAI', 'Tahun Penilaian')
		  ->display_as('NSETIA', 'Kemampuan Kesetian')
		  ->display_as('NPRES', 'Nilai Prestasi')
		  ->display_as('NTAAT', 'Nilai Ketaatan')
		  ->display_as('NJUJUR', 'Nilai kejujuran')
		  ->display_as('NKSAMA', 'Nilai Kerja Sama')
		  ->display_as('NPKARSA', 'Nilai Prakarsa')
		  ->display_as('NPIMPIN', 'Nilai Kepemimpinan')
		  ->display_as('NTOTAL', 'Nilai Total')
		  ->display_as('NRATA', 'Nilai Rata Rata');
		  $crud->fields('NIP', 'THNILAI', 'NSETIA', 'NPRES', 'NTJAWAB', 'NTAAT', 'NJUJUR', 'NKSAMA', 'NPKARSA', 'NPIMPIN', 'NTOTAL', 'NRATA');
		  $crud->required_fields('NIP', 'THNILAI', 'NSETIA', 'NPRES', 'NTJAWAB', 'NTAAT', 'NJUJUR', 'NKSAMA', 'NPKARSA', 'NPIMPIN', 'NTOTAL', 'NRATA');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegHukuman()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegHukuman');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('hukumandisiplin')
		  ->set_subject('Hukuman Disiplin')
		  ->columns('nipBaru', 'nipLama', 'jenisHukuman', 'DESHUKUM', 'skNomor', 'skTanggal', 'KPEJ', 'hukumanTanggal', 'akhirHukumTanggal', 'masaTahun', 'masaBulan', 'nomorPp', 'alasanHukumanDisiplin')
		  ->display_as('nipBaru', 'Nip')
		  ->display_as('nipLama', 'Nip Lama')
		  ->display_as('jenisHukuman', 'Jenis Hukuman')
		  ->display_as('DESHUKUM', 'Deskripsi Hukuman')
		  ->display_as('skNomor', 'Nomor SK')
		  ->display_as('skTanggal', 'Tanggal SK')
		  ->display_as('KPEJ', 'Pejabat Yang Menetapkan')
		  ->display_as('hukumanTanggal', 'Tanggal Hukuman')
		  ->display_as('akhirHukumTanggal', 'Akhir Tanggal Hukuman')
		  ->display_as('masaTahun', 'Tahun')
		  ->display_as('masaBulan', 'Bulan')
		  ->display_as('nomorPp', 'Nomor PP')
		  ->display_as('alasanHukumanDisiplin', 'Alasan Hukuman');
		  $crud->set_relation('KPEJ','pejabatmenetapkan','npej');
		  $crud->fields('nipBaru', 'nipLama', 'jenisHukuman', 'DESHUKUM', 'skNomor', 'skTanggal', 'KPEJ', 'hukumanTanggal', 'akhirHukumTanggal', 'masaTahun', 'masaBulan', 'nomorPp', 'alasanHukumanDisiplin');
		  $crud->required_fields('nipBaru', 'jenisHukuman', 'DESHUKUM', 'skNomor', 'skTanggal', 'KPEJ', 'hukumanTanggal', 'akhirHukumTanggal', 'masaTahun', 'masaBulan', 'nomorPp', 'alasanHukumanDisiplin');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegSuamiIstri()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegSuamiIstri');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayatsuamiistri')
		  ->set_subject('Suami / Istri')
		  ->columns('NIP', 'NISUA', 'KTLAHIR', 'TLAHIR', 'TIJASAH', 'TKAWIN', 'STUNJ', 'KKERJA', 'ISAKHIR', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP')
		  ->display_as('NIP', 'Nip')
		  ->display_as('NISUA', 'Nama Pasangan')
		  ->display_as('KTLAHIR', 'Kota Lahir')
		  ->display_as('TLAHIR', 'Tanggal Lahir')
		  ->display_as('TIJASAH', 'Tingkat Ijasah')
		  ->display_as('TKAWIN', 'Tanggal Kawin')
		  ->display_as('STUNJ', 'Status Tunjangan')
		  ->display_as('KKERJA', 'Pekerjaan')
		  ->display_as('ALJALAN', 'Alamat')
		  ->display_as('ALRT', 'RT')
		  ->display_as('ALRW', 'RW')
		  ->display_as('NOTELP', 'Nomor Telepon')
		  ->display_as('WIL', 'Wilayah')
		  ->display_as('KPOS', 'Kode Pos')
		  ->display_as('ALHP', 'Nomor HP')
		  ->display_as('ISAKHIR', 'Akhir');
			$crud->set_relation('STUNJ','statustunjangan','nama');
		  $crud->set_relation('KKERJA','daftarPekerjaan','nama');
			$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		  $crud->fields('NIP', 'NISUA', 'KTLAHIR', 'TLAHIR', 'TIJASAH', 'TKAWIN', 'STUNJ', 'KKERJA', 'ISAKHIR', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		  $crud->required_fields('NIP', 'NISUA', 'KTLAHIR', 'TLAHIR', 'TIJASAH', 'TKAWIN', 'STUNJ', 'KKERJA', 'ISAKHIR', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegAnak()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegAnak');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayatanak')
		  ->set_subject('Anak')
		  ->columns('NIP', 'NANAK', 'TLAHIR', 'TGLLAHIR', 'KJKEL', 'KELUARGA', 'TUNJ', 'TIJASAH', 'KKERJA')
		  ->display_as('NIP', 'Nip')
		  ->display_as('NANAK', 'Nama Anak')
		  ->display_as('TLAHIR', 'Tempat Lahir')
		  ->display_as('TGLLAHIR', 'Tanggal Lahir')
		  ->display_as('KJKEL', 'Jenis Kelamin')
		  ->display_as('KELUARGA', 'Hubungan Keluarga')
		  ->display_as('TUNJ', 'Tunjangan')
		  ->display_as('TIJASAH', 'Tingkat Pendidikan Umum')
		  ->display_as('KKERJA', 'Pekerjaan');
		  $crud->fields('NIP', 'NANAK', 'TLAHIR', 'TGLLAHIR', 'KJKEL', 'KELUARGA', 'TUNJ', 'TIJASAH', 'KKERJA');
			$crud->set_relation('KJKEL','jenisKelamin','NKELAMIN');
			$crud->set_relation('KELUARGA','hubungankeluarga','ketkeluarga');
			$crud->set_relation('TUNJ','statustunjangan','nama');
			$crud->set_relation('KKERJA','daftarPekerjaan','nama');
		  $crud->required_fields('NIP', 'NANAK', 'TLAHIR', 'TGLLAHIR', 'KJKEL', 'KELUARGA', 'TUNJ', 'TIJASAH', 'KKERJA');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegAyah()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegAyah');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayatayah')
		  ->set_subject('Ayah')
		  ->columns('NIP', 'NAYAH', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP')
		  ->display_as('NIP', 'Nip')
		  ->display_as('NAYAH', 'Nama Ayah')
		  ->display_as('TLAHIR', 'Tempat Lahir')
		  ->display_as('TGLLAHIR', 'Tanggal Lahir')
		  ->display_as('KKERJA', 'Pekerjaan')
		  ->display_as('ALJALAN', 'Alamat')
		  ->display_as('ALRT', 'RT')
		  ->display_as('ALRW', 'RW')
		  ->display_as('NOTELP', 'Nomor Telepon')
		  ->display_as('WIL', 'Wilayah')
		  ->display_as('KPOS', 'Kode Pos')
		  ->display_as('ALHP', 'Nomor HP');
		  $crud->fields('NIP', 'NAYAH', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
			$crud->set_relation('KKERJA','daftarPekerjaan','nama');
		  $crud->required_fields('NIP', 'NAYAH', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function operatorSimpegIbu()
		{
		  log_message('debug','Trying to load Grocer operatorSimpegAyah');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayatibu')
		  ->set_subject('Ibu')
		  ->columns('NIP', 'NIBU', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP')
		  ->display_as('NIP', 'Nip')
		  ->display_as('NIBU', 'Nama Ibu')
		  ->display_as('TLAHIR', 'Tempat Lahir')
		  ->display_as('TGLLAHIR', 'Tanggal Lahir')
		  ->display_as('KKERJA', 'Pekerjaan')
		  ->display_as('ALJALAN', 'Alamat')
		  ->display_as('ALRT', 'RT')
		  ->display_as('ALRW', 'RW')
		  ->display_as('NOTELP', 'Nomor Telepon')
		  ->display_as('WIL', 'Wilayah')
		  ->display_as('KPOS', 'Kode Pos')
		  ->display_as('ALHP', 'Nomor HP');
		  $crud->set_relation('KKERJA','daftarPekerjaan','nama');
		  $crud->set_relation('WIL','wilayah','nwil');
		  $crud->fields('NIP', 'NIBU', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		  $crud->required_fields('NIP', 'NIBU', 'TLAHIR', 'TGLLAHIR', 'KKERJA', 'ALJALAN', 'ALRT', 'ALRW', 'NOTELP', 'WIL', 'KPOS', 'ALHP');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function bangrirSimpeg()
		{
		  log_message('debug','Inside Page Dashboard editAdminSimpeg');
		  $userId = $this->ion_auth->get_user_id();
		  $this->data['user']=$this->ion_auth->user()->row();
		  log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		  $this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		  log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		  $this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

		  $gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
		  $this->data['menu']=$this->Menu_model->menuMaster($gid);

		  log_message('INFO','User Id : '.$userId);
		  log_message('DEBUG','inside Admin');
		  $this->render('dashboard/bangrir_simpeg_view');
		}


		public function bangrirSimpegJabatan()
		{
		  log_message('debug','Trying to load Grocer bangrirSimpegJabatan');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('jabatan')
		  ->set_subject('Kepangkatan')
		  ->columns('nip','kunkers','kunkersInduk','KINSIND','nunkerUnitOrganisasi','namaJenisJabatan','tmtJabatan', 'nomorSk','tanggalSk', 'jnsjab','kjab','kpej','tmtPelantikan', 'njab', 'kwil', 'nunkerUnitOrganisasi', 'JSUSPIM', 'KESELON')
		  ->display_as('nip', 'Nip')
		  ->display_as('kunkers', 'Instansi')
		  ->display_as('kunkersInduk', 'Instansi')
		  ->display_as('KINSIND', 'Instansi Induk')
		  ->display_as('nunkerUnitOrganisasi', 'Nama Unit Organisasi')
		  ->display_as('namaJenisJabatan', 'Nama Jenis Jabatan')
		  ->display_as('tmtJabatan', 'TMT Jabatan')
		  ->display_as('nomorSk', 'Nomor SK')
		  ->display_as('tanggalSk', 'Tanggal Sk')
		  ->display_as('jnsjab', 'Jenis Jabatan')
		  ->display_as('kjab', 'Jabatan')
		  ->display_as('kpej', 'Pejabat Menetapkan')
		  ->display_as('tmtPelantikan', 'TMT Pelantikan')
		  ->display_as('njab', 'Nama Jabatan')
		  ->display_as('kwil', 'Wilayah')
		  ->display_as('nunkerUnitOrganisasi', 'Nama Unit Organisasi')
		  ->display_as('JSUSPIM', 'JSUSPIM')
		  ->display_as('KESELON', 'Eselon');
		  $crud->set_relation('KINSIND','insinduk','NINSIND');
			$crud->set_relation('jnsjab','jnsjabatan','namaJenisJabatan');
		  $crud->set_relation('kpej','pejabatmenetapkan','npej');
		  $crud->set_relation('kwil','wilayah','nwil');
			$crud->set_relation('KESELON','eselon','nama');
		  $crud->fields('nip','kunkers','kunkersInduk','KINSIND','nunkerUnitOrganisasi','namaJenisJabatan','tmtJabatan', 'nomorSk','tanggalSk', 'jnsjab','kjab','kpej','tmtPelantikan', 'njab', 'kwil', 'nunkerUnitOrganisasi', 'JSUSPIM', 'KESELON');
		  $crud->required_fields('nip','kunkers','kunkersInduk','KINSIND','nunkerUnitOrganisasi','namaJenisJabatan','tmtJabatan', 'nomorSk','tanggalSk', 'jnsjab','kjab','kpej','tmtPelantikan', 'njab', 'kwil', 'nunkerUnitOrganisasi', 'JSUSPIM', 'KESELON');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function bangrirSimpegPendidikan()
		{
		  log_message('debug','Trying to load Grocer bangrirSimpegPendidikan');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('pendidikan')
		  ->set_subject('pendidikan')
		  ->columns('nip','tahunLulus','tglTahunLulus','nomorIjazah','namaSekolah','tempat','glrDepan', 'glrBelakang','ktpukjur','nkepsek','npdum')
		  ->display_as('nip', 'Nip')
		  ->display_as('tahunLulus', 'Tahun Kelulusan')
		  ->display_as('tglTahunLulus', 'Tanggal Kelulusan')
		  ->display_as('nomorIjazah', 'Nomor Ijazah')
		  ->display_as('namaSekolah', 'Nama Sekolah')
		  ->display_as('tempat', 'Tempat')
		  ->display_as('glrDepan', 'Gelar Depan')
		  ->display_as('glrBelakang', 'Gelar Belakang')
		  ->display_as('ktpukjur', 'Nama Pendidikan Umum')
		  ->display_as('nkepsek', 'Nama Kepala Sekolah')
		  ->display_as('npdum', 'Nama Pendidikan Umum');
		  $crud->set_relation('ktpu','tpu','NJUR');
			$crud->set_relation('ktpukjur','jurpendidikan','NJUR');
		  $crud->fields('nip','tahunLulus','tglTahunLulus','nomorIjazah','namaSekolah','tempat','glrDepan', 'glrBelakang','ktpukjur','nkepsek','npdum');
		  $crud->required_fields('nip','tahunLulus','tglTahunLulus','nomorIjazah','namaSekolah','tempat','glrDepan', 'glrBelakang','ktpukjur','nkepsek','npdum');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function bangrirSimpegDiklatStruktural()
		{
		  log_message('debug','Trying to load Grocer bangrirSimpegDiklatStruktural');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->where('kodeJenisDiklat',2);
		  $crud->set_table('riwayatdiklat')
		  ->set_subject('Diklat Kepemimpinan')
		  ->columns('NIP','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR')
		  ->display_as('NIP', 'Nip')
		  ->display_as('kodeJenisDiklat', 'Jenis Diklat')
		  ->display_as('kFungStrTek', 'Nama Diklat')
		  ->display_as('TEMPAT', 'Tempat')
		  ->display_as('PAN', 'Penyelenggara')
		  ->display_as('ANGKATAN', 'Angkatan')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggal Berakhir')
		  ->display_as('tahun', 'Tahun')
		  ->display_as('JAM', 'Jam')
		  ->display_as('NSTTPP', 'NSTTPP')
		  ->display_as('TSTTPP', 'TSTTPP')
			->display_as('namaDiklat', 'Nama Diklat')
			->display_as('ISAKHIR', 'Diklat Terakhir');
			$crud->set_relation('kFungStrTek','dikstr','NDIKSTR');
		  $crud->set_relation('kodeJenisDiklat','jenisdiklat','nama');
			$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		  $crud->fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $crud->required_fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function bangrirSimpegDiklatFungsional()
		{
		  log_message('debug','Trying to load Grocer bangrirSimpegDiklatFungsional');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->where('kodeJenisDiklat',1);
		  $crud->set_table('riwayatdiklat')
		  ->set_subject('Diklat Fungsional')
		  ->columns('NIP','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR')
		  ->display_as('NIP', 'Nip')
		  ->display_as('kodeJenisDiklat', 'Jenis Diklat')
		  ->display_as('kFungStrTek', 'Nama Diklat')
		  ->display_as('TEMPAT', 'Tempat')
		  ->display_as('PAN', 'Penyelenggara')
		  ->display_as('ANGKATAN', 'Angkatan')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggal Berakhir')
		  ->display_as('tahun', 'Tahun')
		  ->display_as('JAM', 'Jam')
		  ->display_as('NSTTPP', 'NSTTPP')
		  ->display_as('TSTTPP', 'TSTTPP')
		  ->display_as('namaDiklat', 'Nama Diklat')
			->display_as('ISAKHIR', 'Diklat Terakhir');
			$crud->set_relation('kFungStrTek','dikfung','NDIKFUNG');
		  $crud->set_relation('kodeJenisDiklat','jenisdiklat','nama');
			$crud->set_relation('ISAKHIR','statusterakhir','statusAkhir');
		  $crud->fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $crud->required_fields('nip','kodeJenisDiklat','kFungStrTek','TEMPAT','PAN','ANGKATAN','TMULAI', 'TAKHIR','tahun', 'JAM','NSTTPP','TSTTPP','namaDiklat', 'ISAKHIR');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function bangrirSimpegTugas()
		{
		  log_message('debug','Trying to load Grocer bangrirSimpegTugas');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('riwayattugas')
		  ->set_subject('Tugas Luar Negri')
		  ->columns('NIP', 'NNEG', 'TUJUAN', 'PTETAP', 'NSK', 'TSK', 'TMULAI', 'TAKHIR')
		  ->display_as('NIP', 'Nip')
		  ->display_as('NNEG', 'Nama Negara')
		  ->display_as('TUJUAN', 'Tujuan Negara')
		  ->display_as('PTETAP', 'Pejabat Yang Menetapkan')
		  ->display_as('NSK', 'Nomor SK')
		  ->display_as('TSK', 'Tanggal SK')
		  ->display_as('TMULAI', 'Tanggal Mulai')
		  ->display_as('TAKHIR', 'Tanggal Akhir');
		  $crud->fields('NIP', 'NNEG', 'TUJUAN', 'PTETAP', 'NSK', 'TSK', 'TMULAI', 'TAKHIR');
		  $crud->required_fields('NIP', 'NNEG', 'TUJUAN', 'PTETAP', 'NSK', 'TSK', 'TMULAI', 'TAKHIR');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function kesdisSimpeg()
		{
			log_message('debug','Inside Page Dashboard kesdisSimpeg');
			$userId = $this->ion_auth->get_user_id();
			$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

			$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

			$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
			$this->data['menu']=$this->Menu_model->menuMaster($gid);

			log_message('INFO','User Id : '.$userId);
			log_message('DEBUG','inside Admin');
			$this->render('dashboard/kesdis_simpeg_view');
		}


		public function kesdisSimpegPenghargaan()
		{
		  log_message('debug','Trying to load Grocer kesdisSimpegPenghargaan');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('penghargaan')
		  ->set_subject('Penghargaan')
		  ->columns('nip', 'skNomor', 'skDate', 'tahun', 'NBINTANG', 'AOLEH', 'NOMOR', 'TEMPAT')
		  ->display_as('nip', 'Nip')
		  ->display_as('skNomor', 'Nomor SK')
		  ->display_as('skDate', 'Tanggal SK')
		  ->display_as('tahun', 'Tahun')
		  ->display_as('NBINTANG', 'Nama Penghargaan')
		  ->display_as('AOLEH', 'Diperoleh Dari')
		  ->display_as('NOMOR', 'Nomor')
		  ->display_as('TEMPAT', 'Tempat');
		  $crud->fields('nip', 'skNomor', 'skDate', 'tahun', 'NBINTANG', 'AOLEH', 'NOMOR', 'TEMPAT');
		  $crud->required_fields('nip', 'skNomor', 'skDate', 'tahun', 'NBINTANG', 'AOLEH', 'NOMOR', 'TEMPAT');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

		public function kesdisSimpegHukuman()
		{
		  log_message('debug','Trying to load Grocer kesdisSimpegHukuman');
		  $adminSts = $this->ion_auth->is_admin()===FALSE;

		  log_message('debug','after Load new Db');
		  $crud = new grocery_CRUD();
		  $crud->set_table('hukumandisiplin')
		  ->set_subject('Hukuman Disiplin')
		  ->columns('nipBaru', 'nipLama', 'jenisHukuman', 'DESHUKUM', 'skNomor', 'skTanggal', 'KPEJ', 'hukumanTanggal', 'akhirHukumTanggal', 'masaTahun', 'masaBulan', 'nomorPp', 'alasanHukumanDisiplin')
		  ->display_as('nipBaru', 'Nip')
		  ->display_as('nipLama', 'Nip Lama')
		  ->display_as('jenisHukuman', 'Jenis Hukuman')
		  ->display_as('DESHUKUM', 'Deskripsi Hukuman')
		  ->display_as('skNomor', 'Nomor SK')
		  ->display_as('skTanggal', 'Tanggal SK')
		  ->display_as('KPEJ', 'Pejabat Yang Menetapkan')
		  ->display_as('hukumanTanggal', 'Tanggal Hukuman')
		  ->display_as('akhirHukumTanggal', 'Akhir Tanggal Hukuman')
		  ->display_as('masaTahun', 'Tahun')
		  ->display_as('masaBulan', 'Bulan')
		  ->display_as('nomorPp', 'Nomor PP')
		  ->display_as('alasanHukumanDisiplin', 'Alasan Hukuman');
		  $crud->set_relation('KPEJ','pejabatmenetapkan','npej');
		  $crud->fields('nipBaru', 'nipLama', 'jenisHukuman', 'DESHUKUM', 'skNomor', 'skTanggal', 'KPEJ', 'hukumanTanggal', 'akhirHukumTanggal', 'masaTahun', 'masaBulan', 'nomorPp', 'alasanHukumanDisiplin');
		  $crud->required_fields('nipBaru', 'jenisHukuman', 'DESHUKUM', 'skNomor', 'skTanggal', 'KPEJ', 'hukumanTanggal', 'akhirHukumTanggal', 'masaTahun', 'masaBulan', 'nomorPp', 'alasanHukumanDisiplin');
		  $output = $crud->render();
		  $this->load->view('dashboard/grid',$output);
		}

	public function referensiUnitKerja()
	{
		log_message('debug','Trying to load Grocer Ref Unit Kerja');
		$adminSts = $this->ion_auth->is_admin()===FALSE;
	
		$user = $this->ion_auth->user()->row();
		$nip = $user->nip;
		$kunkers = $this->Simpeg_model->getKunkersByNip($nip);
		log_message('debug',print_r($user,TRUE));
		
		$kunker = mb_substr($kunkers[0]['kunkers'], 0, 4);
		log_message('debug',print_r($kunkers,TRUE));
		
		
		$crud = new grocery_CRUD();
		$crud->set_table('unkerja')
		->set_subject('Unit Kerja')
		->columns('kunker','nunker', 'keselon', 'unkerjagrade')
		->display_as('kunker','Kode')
		->display_as('nunker','Nama Unit Kerja')
		->display_as('keselon','Eselon')
		->display_as('unkerjagrade','Grade');
		
		$crud->set_relation('keselon','eselon','nama');
		$crud->fields('kunker','nunker', 'keselon', 'unkerjagrade');
		$crud->required_fields('kunker','nunker', 'keselon', 'unkerjagrade');
		$crud->set_relation('keselon','eselon','nama');
		$crud->like('kunker',$kunker,'after');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiWilayah()
	{
		log_message('debug','Trying to load Grocer Referensi Wilayah');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('wilayah')
		->set_subject('Wilayah')
		->columns('kwil','nwil', 'twil')
		->display_as('kwil','Kode')
		->display_as('nwil','Nama')
		->display_as('twil','Tingkat');
		$crud->fields('kwil','nwil', 'twil');
		$crud->required_fields('kwil','nwil', 'twil');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiBidangUrusan()
	{
		log_message('debug','Trying to load Grocer Referensi Bidang Urusan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('urusan')
		->set_subject('Bidang Urusan Pemerintahan')
		->columns('kurusan', 'nurusan', 'wajib')
		->display_as('kurusan','Kode')
		->display_as('nurusan','Bidang Urusan Pemerintahan')
		->display_as('wajib','Status');
		$crud->field_type('wajib','dropdown',
		array('0' => 'Tidak Wajib', '1' => 'Wajib'));
		$crud->fields('kurusan', 'nurusan', 'wajib');
		$crud->required_fields('kurusan', 'nurusan', 'wajib');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiStatusPegawai()
	{
		log_message('debug','Trying to load Grocer Referensi Status Pegawai');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('statuspegawai')
		->set_subject('Status Pegawai')
		->columns('kStatusPegawai', 'nStatusPegawai')
		->display_as('kStatusPegawai','Kode')
		->display_as('nStatusPegawai','Nama');
		$crud->fields('kStatusPegawai', 'nStatusPegawai');
		$crud->required_fields('kStatusPegawai', 'nStatusPegawai');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiKedudukanPegawai()
	{
		log_message('debug','Trying to load Grocer Referensi Status Pegawai');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('kedudukanpegawai')
		->set_subject('Kedudukan Pegawai')
		->columns('id', 'nama')
		->display_as('id','Kode')
		->display_as('nama','Nama');
		$crud->fields('id', 'nama');
		$crud->required_fields('id', 'nama');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiKenaikanPangkatPegawai()
	{
		log_message('debug','Trying to load Grocer Referensi Status Pegawai');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('naikpangkat')
		->set_subject('Naik Pangkat')
		->columns('knpang', 'nnpang')
		->display_as('knpang','Kode')
		->display_as('nnpang','Nama');
		$crud->fields('knpang', 'nnpang');
		$crud->required_fields('knpang', 'nnpang');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiPekerjaan()
	{
		log_message('debug','Trying to load Grocer Referensi Daftar Pekerjaan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('daftarpekerjaan')
		->set_subject('Daftar Pekerjaan')
		->columns('id', 'nama')
		->display_as('id','Kode')
		->display_as('nama','Nama');
		$crud->fields('id, nama');
		$crud->required_fields('id, nama');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiSTLUD()
	{
		log_message('debug','Trying to load Grocer Referensi Daftar Pekerjaan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('stlud')
		->set_subject('Daftar Pekerjaan')
		->columns('KSTLUD', 'NSTLUD')
		->display_as('KSTLUD','Kode')
		->display_as('NSTLUD','Nama');
		$crud->fields('KSTLUD', 'NSTLUD');
		$crud->required_fields('KSTLUD', 'NSTLUD');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiJenisPegawai()
	{
		log_message('debug','Trying to load Grocer Referensi Jenis Pegawai');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('jenispegawai')
		->set_subject('Jenis Pegawai')
		->columns('kode', 'nama')
		->display_as('kode','Kode')
		->display_as('nama','Nama');
		$crud->fields('kode', 'nama');
		$crud->required_fields('kode', 'nama');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiGajiPokokPegawai()
	{
		log_message('debug','Trying to load Grocer Referensi Jenis Pegawai');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('gapok')
		->set_subject('Gaji Pokok Pegawai')
		->columns('KGOLRU', 'MKG', 'GPOK')
		->display_as('KGOLRU','Golongan Ruang')
		->display_as('MKG','Masa Kerja (Thn)')
		->display_as('GPOK','Gaji Pokok');
		$crud->fields('KGOLRU', 'MKG', 'GPOK');
		$this->db->order_by('KGOLRU', 'asc');
		$this->db->order_by('MKG', 'asc');
		$crud->required_fields('KGOLRU', 'MKG', 'GPOK');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiKelompokUsia()
	{
		log_message('debug','Trying to load Grocer Referensi Jenis Pegawai');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('kelompokusia')
		->set_subject('Gaji Pokok Pegawai')
		->columns('kode', 'usia', 'grup')
		->display_as('kode','kode')
		->display_as('usia','usia')
		->display_as('grup','grup');
		$crud->fields('kode', 'usia', 'grup');
		$crud->required_fields('kode', 'usia', 'grup');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiKantorBayar()
	{
		log_message('debug','Trying to load Grocer Referensi Kantor Bayar');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('kbayar')
		->set_subject('Kantor Bayar')
		->columns('KKANTOR', 'NKANTOR')
		->display_as('KKANTOR','Kode')
		->display_as('NKANTOR','Nama');
		$crud->fields('KKANTOR', 'NKANTOR');
		$crud->required_fields('KKANTOR', 'NKANTOR');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiKTUA()
	{
		log_message('debug','Trying to load Grocer Referensi KTUA');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('ktua')
		->set_subject('KTUA')
		->columns('KKTUA', 'NKTUA')
		->display_as('KKTUA','Kode')
		->display_as('NKTUA','Nama');
		$crud->fields('KKTUA', 'NKTUA');
		$crud->required_fields('KKTUA', 'NKTUA');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiJurusanPendidikan()
	{
		log_message('debug','Trying to load Grocer Referensi Jurusan Pendidikan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('jurpendidikan')
		->set_subject('KTUA')
		->columns('KJUR', 'NJUR', 'TP')
		->display_as('KJUR','Kode')
		->display_as('NJUR','Nama')
		->display_as('TP','Tingkat');
		$crud->fields('KJUR', 'NJUR', 'TP');
		$crud->required_fields('KJUR', 'NJUR', 'TP');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiDiklatStruktural()
	{
		log_message('debug','Trying to load Grocer Referensi Diklat Struktural');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('dikstr')
		->set_subject('Diklat Struktural')
		->columns('KDIKSTR', 'NDIKSTR')
		->display_as('KDIKSTR','Kode')
		->display_as('NDIKSTR','Nama');
		$crud->fields('KDIKSTR', 'NDIKSTR');
		$crud->required_fields('KDIKSTR', 'NDIKSTR');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiDiklatFungsional()
	{
		log_message('debug','Trying to load Grocer Referensi Diklat Fungsional');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('dikfung')
		->set_subject('Diklat Struktural')
		->columns('KDIKFUNG', 'NDIKFUNG')
		->display_as('KDIKFUNG','Kode')
		->display_as('NDIKFUNG','Nama');
		$crud->fields('KDIKFUNG', 'NDIKFUNG');
		$crud->required_fields('KDIKFUNG', 'NDIKFUNG');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiDiklatTeknik()
	{
		log_message('debug','Trying to load Grocer Referensi Diklat Teknik');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('diktek')
		->set_subject('Diklat Struktural')
		->columns('KDIKTEK', 'NDIKTEK')
		->display_as('KDIKTEK','Kode')
		->display_as('NDIKTEK','Nama');
		$crud->fields('KDIKTEK', 'NDIKTEK');
		$crud->required_fields('KDIKTEK', 'NDIKTEK');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiSeminar()
	{
		log_message('debug','Trying to load Grocer Referensi Seminar');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('seminar')
		->set_subject('Seminar')
		->columns('KSEMINAR', 'NSEMINAR')
		->display_as('KSEMINAR','Kode')
		->display_as('NSEMINAR','Nama');
		$crud->fields('KSEMINAR', 'NSEMINAR');
		$crud->required_fields('KSEMINAR', 'NSEMINAR');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiPenataran()
	{
		log_message('debug','Trying to load Grocer Referensi Seminar');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('tatar')
		->set_subject('Penataran')
		->columns('KTATAR', 'NTATAR')
		->display_as('KTATAR','Kode')
		->display_as('NTATAR','Nama');
		$crud->fields('KSEMKTATARINAR', 'NTATAR');
		$crud->required_fields('KTATAR', 'NTATAR');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiKursus()
	{
		log_message('debug','Trying to load Grocer Referensi Kursus');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('kursus')
		->set_subject('Kursus')
		->columns('kode', 'nama')
		->display_as('kode','Kode')
		->display_as('nama','Nama');
		$crud->fields('kode', 'nama');
		$crud->required_fields('kode', 'nama');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiTingkatPendidikan()
	{
		log_message('debug','Trying to load Grocer Tingkat Pendidikan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('tingpend')
		->set_subject('Tingkat Pendidikan')
		->columns('ktp', 'ntp')
		->display_as('ktp','Kode')
		->display_as('ntp','Nama');
		$crud->fields('ktp', 'ntp');
		$crud->order_by('ktp','asc');
		$crud->required_fields('ktp', 'ntp');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function refJabatan()
	{
		log_message('debug','try daadfa dad');
		$adminSts = $this->ion_auth->is_admin()===FALSE;
		$this->db = $this->load->database('simpegRef', true);
		log_message('debug','after load');
		$crud = new grocery_CRUD();
		$crud->set_table('tbjab')
		->set_subject('jabatanf')
		->columns('KOJAB','NAJAB')
		->display_as('KOJAB','kode')
		->display_as('NAJAB','Nama');
		$crud->fields('KOJAB','NAJAB2');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiKelompokJabatan()
	{
		log_message('debug','Trying to load Grocer Kelompok Jabatan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('kelompokjabatan')
		->set_subject('Kelompok Jabatan')
		->columns('KJAB', 'NJAB')
		->display_as('KJAB','Kode')
		->display_as('ntNJABp','Nama');
		$crud->fields('KJAB', 'NJAB');
		$crud->required_fields('KJAB', 'NJAB');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiJabatanStruktural()
	{
		log_message('debug','Trying to load Grocer Jabatan Struktural');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','1');
		$crud->set_table('subjnsjabatan')
		->set_subject('Jabatan Struktural')
		->columns('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK')
		->display_as('KJAB','Kode')
		->display_as('NJAB','Nama Jabatan')
		->display_as('KGOLRU','Golongan Ruang')
		->display_as('TUNJJAB','Tunjangan Pusat')
		->display_as('TPP','TPP')
		->display_as('USIA','Usia Pensiun')
		->display_as('PAK','PAK Minimum');
		$crud->fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$crud->required_fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiJabatanFungsionalKhusus()
	{
		log_message('debug','Trying to load Grocer Jabatan Fungsional Khusus');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','2');
		$crud->set_table('subjnsjabatan')
		->set_subject('Jabatan Fungsional Khusus')
		->columns('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK')
		->display_as('KJAB','Kode')
		->display_as('NJAB','Nama Jabatan')
		->display_as('KGOLRU','Golongan Ruang')
		->display_as('TUNJJAB','Tunjangan Pusat')
		->display_as('TPP','TPP')
		->display_as('USIA','Usia Pensiun')
		->display_as('PAK','PAK Minimum');
		$crud->fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$crud->required_fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiJabatanNegara()
	{
		log_message('debug','Trying to load Grocer Jabatan Negara');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','3');
		$crud->set_table('subjnsjabatan')
		->set_subject('Jabatan Negara')
		->columns('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK')
		->display_as('KJAB','Kode')
		->display_as('NJAB','Nama Jabatan')
		->display_as('KGOLRU','Golongan Ruang')
		->display_as('TUNJJAB','Tunjangan Pusat')
		->display_as('TPP','TPP')
		->display_as('USIA','Usia Pensiun')
		->display_as('PAK','PAK Minimum');
		$crud->fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$crud->required_fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiJabatanFungsionalUmum()
	{
		log_message('debug','Trying to load Grocer Jabatan Fungsional Umum');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','4');
		$crud->set_table('subjnsjabatan')
		->set_subject('Jabatan Fungsional Umum')
		->columns('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK')
		->display_as('KJAB','Kode')
		->display_as('NJAB','Nama Jabatan')
		->display_as('KGOLRU','Golongan Ruang')
		->display_as('TUNJJAB','Tunjangan Pusat')
		->display_as('TPP','TPP')
		->display_as('USIA','Usia Pensiun')
		->display_as('PAK','PAK Minimum');
		$crud->fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$crud->required_fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiJabatanKorpri()
	{
		log_message('debug','Trying to load Grocer Jabatan KORPRI');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','5');
		$crud->set_table('subjnsjabatan')
		->set_subject('Jabatan KORPRI')
		->columns('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK')
		->display_as('KJAB','Kode')
		->display_as('NJAB','Nama Jabatan')
		->display_as('KGOLRU','Golongan Ruang')
		->display_as('TUNJJAB','Tunjangan Pusat')
		->display_as('TPP','TPP')
		->display_as('USIA','Usia Pensiun')
		->display_as('PAK','PAK Minimum');
		$crud->fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$crud->required_fields('KJAB', 'NJAB', 'KGOLRU', 'TUNJJAB', 'TPP', 'USIA', 'PAK');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiEselonJabatan()
	{
		log_message('debug','Trying to load Grocer Eselon Jabatan');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('eselon')
		->set_subject('Eselon Jabatan')
		->columns('ideselon', 'nama', 'tpp')
		->display_as('ideselon','Kode')
		->display_as('nama','Nama Jabatan')
		->display_as('tpp','TPP');
		$crud->fields('ideselon', 'nama', 'tpp');
		$crud->required_fields('ideselon', 'nama', 'tpp');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiPejabatTetap()
	{
		log_message('debug','Trying to load Grocer Pejabat Tetap');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('pejabatmenetapkan')
		->set_subject('Pejabat Tetap')
		->columns('kpej', 'npej')
		->display_as('kpej','Kode')
		->display_as('npej','Nama');
		$crud->fields('kpej', 'nama');
		$crud->required_fields('kpej', 'nama');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiPejabatNegara()
	{
		log_message('debug','Trying to load Grocer Pejabat Negara');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('jabneg')
		->set_subject('Pejabat Negara')
		->columns('KJAB', 'NJAB')
		->display_as('KJAB','Kode')
		->display_as('NJAB','Nama');
		$crud->fields('KJAB', 'nama');
		$crud->required_fields('KJAB', 'NJAB');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}


	public function referensiGolonganRuang()
	{
		log_message('debug','Trying to load Grocer Referensi Status Pegawai');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('jenisgolongan')
		->set_subject('Status Pegawai')
		->columns('Golongan_id', 'golNama', 'golPangkat')
		->display_as('Golongan_id','Golongan')
		->display_as('golNama','Nama Golongan')
		->display_as('golPangkat','Pangkat Golongan');
		$crud->fields('Golongan_id', 'golNama', 'golPangkat');
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
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

		$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
$this->data['menu']=$this->Menu_model->menuMaster($gid);

		log_message('INFO','User Id : '.$userId);


		log_message('DEBUG','inside Admin');
		$this->render('dashboard/referensi_agama_view');


	}

	public function referensiAgama()
	{
		log_message('debug','Trying to load Grocer Ref Agama');
		$adminSts = $this->ion_auth->is_admin()===FALSE;

		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('agama')
		->set_subject('Modifikasi Agama')
		->columns('kode','nama')
		->display_as('nama','Agama');
		$crud->fields('kode','nama');
		$crud->required_fields('kode','nama');
		$output = $crud->render();
		//$this->render('dashboard/index_view');
		$this->load->view('dashboard/grid',$output);
	}
	public function getTotalNotificationUpdatePNS()
	{
		$userId = $this->ion_auth->get_user_id();
		$userLoggedin = $this->ion_auth->user()->row();
		$this->data['user']=$userLoggedin;
		//log_message('debug',print_r($userLoggedin,TRUE));

		//log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		//log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

		$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );
		$totalNotif =$this->Simpeg_model->getCountTotalConfirmationByStatus(0,$this->data['users_instansi'][0]['instansi_name']);
		log_message('debug','Total Notification '.$totalNotif);
		echo $totalNotif;
	}


	public function arsipDokumenPegawai()
	{
		$this->load->library('gc_dependent_select');
		log_message('debug','Trying to load Grocey Arsip Dokumen Pegawai');
		$adminSts = $this->ion_auth->is_admin()===FALSE;
		$userLoggedin = $this->ion_auth->user()->row();
		$pathFolder = "assets/upload/files/".$userLoggedin->nip.'_'.$userLoggedin->first_name;
		if (!is_dir($pathFolder)) {
    		mkdir($pathFolder , 0777, TRUE);
				}

		$nip = $userLoggedin->nip;
		log_message('debug','Nip From Get'.$nip);

		$crud = new grocery_CRUD();
		$crud->where('nip',$nip);
		$crud->set_theme('flexigrid');
		$crud->set_table('archive_pns');
		$crud->columns('nip','name','path','documentType','document_folder_1_id','document_folder_2_id');


		$crud->set_relation('documentType','document_type','name');
		$crud->set_relation('document_folder_1_id','document_folder_1','name');
		$crud->set_relation('document_folder_2_id','document_folder_2','name');

		$fields = array(

		// Field Provinsi
		'documentType' => array( // first dropdown name
		'table_name' => 'document_type', // table of country
		'title' => 'nama', // country title
		'relate' => null, // the first dropdown hasn't a relation
		'data-placeholder' => 'Pilih Tipe Dokumen' //dropdown's data-placeholder:
		),
		// Field Kabupaten
		'document_folder_1_id' => array( // second dropdown name
		'table_name' => 'document_folder_1', // table of state
		'title' => 'name', // state title
		'id_field' => 'id', // table of state: primary key
		'relate' => 'id_doc_type', // table of state:
		'data-placeholder' => 'Pilih Folder ' //dropdown's data-placeholder:

		),
		// Field Kecamatan
		'document_folder_2_id' => array(
		'table_name' => 'document_folder_2',
		'title' => 'name',  // now you can use this format )))
		//'where' =>"post_code>'167'",  // string. It's an optional parameter.
		//'order_by'=>"id_kab DESC",  // string. It's an optional parameter.
		'id_field' => 'id',
		'relate' => 'id_doc_folder_1',
		'data-placeholder' => 'Pilih Sub Folder'
		)
		);





		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Dokumen');
		$crud->unset_read();
		$crud->required_fields('name','path','documentType');
		$crud->set_field_upload('path',$pathFolder,"pdf");
		$crud->callback_add_field('nip',function(){
			$this->db = $this->load->database('default',true);
			$userLoggedin = $this->ion_auth->user()->row();
			$nip = $userLoggedin->nip;


			return '<input type="text" value="'.$nip.'" name="nipShow"disabled>
			 				<input type="hidden" value="'.$nip.'" name="nip"/>';
		});
		//$crud->callback_column('path',array($this,'_callback_webpage_url'));
		// $crud->callback_read_field('path', function ($value, $primary_key) {
		// 	$tagImg= '<a href="'.$value.'" class="image-thumbnail"><img src="'.$value.'" height="50px"></a>';
		// 					return $tagImg;
		// 					});
		$crud->callback_before_update(function($post_array)
							{
								log_message('debug','iniloh Before Insert'.print_r($post_array,TRUE));
								$this->db = $this->load->database('default',true);
								$userLoggedin = $this->ion_auth->user()->row();
								$nip = $userLoggedin->nip;
								$nama =trim($userLoggedin->first_name);



								$docType = $this->Simpeg_model->getDocumentTypeById($post_array['documentType']);
								$docFolder1 = $this->Simpeg_model->getDocumentFolderById($post_array['document_folder_1_id'],1);

								if (!array_key_exists("document_folder_2_id",$post_array))
							  {

										$pathFolder="assets/upload/files/".$nip.'_'.$nama."/".$docType[0]['alias'].'/'.$docFolder1['alias'].'/';
										$realPathFolder = $docType[0]['alias'].'/'.$docFolder1['alias'].'/';
										$fileName = 	$docType[0]['kode'].$docFolder1['kode'];
										log_message('debug','Sub Folder Exist ');
								}
							else
							  {
									log_message('debug','Sub Folder Not Exist ');
									$docFolder2 = $this->Simpeg_model->getDocumentFolderById($post_array['document_folder_2_id'],2);
									$pathFolder="assets/upload/files/".$nip.'_'.$nama."/".$docType[0]['alias'].'/'.$docFolder1['alias'].'/'.'{'.$docFolder2['kode'].'}'.preg_replace('/\s+/', '_', $docFolder2['name']);
									$realPathFolder = $docType[0]['alias'].'/'.$docFolder1['alias'].'/'.'{'.$docFolder2['kode'].'}'.preg_replace('/\s+/', '_', $docFolder2['name']).'/';
									$fileName = 	$docType[0]['kode'].$docFolder1['kode'].$docFolder2['kode'];
							  }


								$pathFolderTemp = "assets/upload/files/".$nip.'_'.$userLoggedin->first_name;;

								log_message('debug','Pathnya : '.$pathFolder);
								if (!is_dir($pathFolder)) {
						    		mkdir($pathFolder , 0777, TRUE);
										}
								//$realPathFolder = base_url()."assets/upload/files/".$nip."/".$docType[0]['alias'].'/';

								rename($pathFolderTemp.'/'.$post_array['path'],$pathFolder.'/'.$fileName.'.pdf');


								$post_array['path']=$realPathFolder.$fileName.'.pdf';

								return $post_array;

							});
		$crud->callback_before_insert(function($post_array)
		{
			log_message('debug','iniloh Before Insert'.print_r($post_array,TRUE));
			$this->db = $this->load->database('default',true);
			$userLoggedin = $this->ion_auth->user()->row();
			$nip = $userLoggedin->nip;
			$nama =trim($userLoggedin->first_name);



			$docType = $this->Simpeg_model->getDocumentTypeById($post_array['documentType']);
			$docFolder1 = $this->Simpeg_model->getDocumentFolderById($post_array['document_folder_1_id'],1);

			if (!array_key_exists("document_folder_2_id",$post_array))
		  {

					$pathFolder="assets/upload/files/".$nip.'_'.$nama."/".$docType[0]['alias'].'/'.$docFolder1['alias'].'/';
					$realPathFolder = $docType[0]['alias'].'/'.$docFolder1['alias'].'/';
					$fileName = 	$docType[0]['kode'].$docFolder1['kode'];
					log_message('debug','Sub Folder Exist ');
			}
		else
		  {
				log_message('debug','Sub Folder Not Exist ');
				$docFolder2 = $this->Simpeg_model->getDocumentFolderById($post_array['document_folder_2_id'],2);
				$pathFolder="assets/upload/files/".$nip.'_'.$nama."/".$docType[0]['alias'].'/'.$docFolder1['alias'].'/'.'{'.$docFolder2['kode'].'}'.preg_replace('/\s+/', '_', $docFolder2['name']);
				$realPathFolder = $docType[0]['alias'].'/'.$docFolder1['alias'].'/'.'{'.$docFolder2['kode'].'}'.preg_replace('/\s+/', '_', $docFolder2['name']).'/';
				$fileName = 	$docType[0]['kode'].$docFolder1['kode'].$docFolder2['kode'];
		  }


			$pathFolderTemp = "assets/upload/files/".$nip.'_'.$userLoggedin->first_name;;

			log_message('debug','Pathnya : '.$pathFolder);
			if (!is_dir($pathFolder)) {
	    		mkdir($pathFolder , 0777, TRUE);
					}
			//$realPathFolder = base_url()."assets/upload/files/".$nip."/".$docType[0]['alias'].'/';

			rename($pathFolderTemp.'/'.$post_array['path'],$pathFolder.'/'.$fileName.'.pdf');


			$post_array['path']=$realPathFolder.$fileName.'.pdf';

			return $post_array;


		});

		$config = array(
		'main_table' => 'archive_pns',
		'main_table_primary' => 'id',
		"url" => base_url() . 'dashboard/arsipDokumenPegawai/',
		'ajax_loader' => base_url() . 'assets/ajax-loader.gif'
		);
		$categories = new gc_dependent_select($crud, $fields, $config);

		// first method:
		//$output = $categories->render();

		// the second method:
		$js = $categories->get_js();
		$output = $crud->render();
		$output->output.= $js;



		$this->load->view('dashboard/grid',$output);
	}
	public function _callback_webpage_url($value, $row)
{
	//log_message('debug',print_r($row,TRUE).' Value : '.print_r($value,TRUE));
	//log_message('debug',$value);
	$tagImg= '<a href="'.$value.'" class="image-thumbnail"><img src="'.$value.'" height="50px"></a>';
return $tagImg;
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

	public function referensiAgamaku()
	{
		$userId = $this->ion_auth->get_user_id();
		$this->data['user']=$this->ion_auth->user()->row();
		log_message('INFO','is admin? : Menu Management'.$this->ion_auth->is_admin());
		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
		log_message('debug','User Group : Menu Management '.print_r($this->data['user_group'],TRUE));
		$crud = new grocery_CRUD();
		$crud->set_table('agama')
		->set_subject('Modifikasi Agama')
		->columns('kode','nama')
		->display_as('nama','agama');
		$crud->fields('nama');
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
		->columns('menu_name','menu_link','menu_order','parent_id','groups')
		->display_as('menu_name','Nama Menu')
		->display_as('menu_link','Menu URL')
		->display_as('menu_order','Urutan Menu');

		$crud->fields('menu_name','menu_link','parent_id','menu_order','groups');
		$crud->set_relation_n_n('groups', 'group_menu', 'groups', 'menu_id', 'group_id', 'description');
		$crud->set_relation('parent_id','menu','menu_name');
    $crud->set_relation('menu_link','page_link','page_name');
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

  public function pageLinkManagement()
  {

  		$userId = $this->ion_auth->get_user_id();
  		$this->data['user']=$this->ion_auth->user()->row();
  		log_message('INFO','is admin? : Menu Management'.$this->ion_auth->is_admin());
  		$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
  		log_message('debug','User Group : Menu Management '.print_r($this->data['user_group'],TRUE));

  		$crud = new grocery_CRUD();
  		$crud->set_table('page_link')
  		->set_subject('Link Management')
  		->columns('page_name','link','description','last_update');

  		$crud->fields('page_name','link','description');
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

	public function createUser()
	{


			$data = array(
				'phone' => $p['nomorTelpon'],
				'first_name' => $p['first_name'],
				'last_name' => '',
				'company' =>$p['instansi'],
				'profile_pic' =>'placeholder.png',
				'nip' =>$p['nipBaru']
			);

			$insertId=  $this->ion_auth_model->register($username, $password, $email, $data);
			$instansiId = $this->Simpeg_model->getIdInstansiByName($p['instansi']);
				$arrayInsertinstansi = array('users_id'=>$insertId,'instansi_id'=>$instansiId);
				$arrayInsertGroup = array('user_id'=>$insertId,'group_id'=>4);
				$this->Users_model->insertUser_instansiBatch($arrayInsertinstansi);
					$this->Users_model->insertUser_groupsBatch($arrayInsertGroup);

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
		$crud->set_field_upload('profile_pic','assets/foto/');
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

    public function updatePassword()
    {

        $key = $this->input->post('password');
        $data = array(
					'password' => $key,
				);
      $user=  $this->ion_auth->user()->row();
      log_message('debug',$user->id);
      $this->ion_auth_model->update($primary_key, $data);


    }

		public function index()
		{

			$userId = $this->ion_auth->get_user_id();
			$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));
			$gid =array();
			foreach($this->data['user_group'] as $ug){
			  $gid[]=$ug->id;
			}
			$gid =array();
			foreach($this->data['user_group'] as $ug){
				$gid[]=$ug->id;
			}
			log_message('debug','User Group Array : '.print_r($gid,TRUE));
			$this->data['menu']=$this->Menu_model->menuMaster($gid);
			$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );



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
    public function historyAbsensi()
		{

			$userId = $this->ion_auth->get_user_id();
			$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));
			$gid =array();
			foreach($this->data['user_group'] as $ug){
			  $gid[]=$ug->id;
			}
			$gid =array();
			foreach($this->data['user_group'] as $ug){
				$gid[]=$ug->id;
			}
        $userLoggedin = $this->ion_auth->user()->row();
        $nip = $userLoggedin->nip;
			log_message('debug','User Group Array : '.print_r($gid,TRUE));
			$this->data['menu']=$this->Menu_model->menuMaster($gid);
			$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );
      $this->data['countAbsensi']=$this->Simpeg_model->getCountAllStatusAbsensi($nip);
      $this->data['statusPersensi']=$this->Simpeg_model->getPersensiStatus();

			log_message('INFO','User Id : '.$userId);


				$this->render('dashboard/absensi_view');

		}

		public function referensi()
		{

			$userId = $this->ion_auth->get_user_id();
			$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

			$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

			$gid =array();
foreach($this->data['user_group'] as $ug){
  $gid[]=$ug->id;
}
$this->data['menu']=$this->Menu_model->menuMaster($gid);

			log_message('INFO','User Id : '.$userId);

			if($this->ion_auth->is_admin()===FALSE)
			{
				log_message('DEBUG','inside Not Admin');
				$this->render('dashboard/member_index_view');
			}else
			{
				$this->render('dashboard/referensi_view');
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


		public function persentaseGenderPNS()
		{
			$kunker=$this->input->get('kunker');
			if($kunker!='All')
			{
				$result = $this->Simpeg_model->getPersentaseGenderPNS($kunker);
			}else{
				$result = $this->Simpeg_model->getPersentaseGenderPNS();
			}
      echo json_encode($result);
		}

    public function persentasePendidikanPNS()
    {
      $key = $this->input->get('kunker');
      	$kunker = mb_substr($key, 0, 4);
      if($kunker!='All')
      {
      $result = $this->Simpeg_model->getPersentasePendidikan($kunker);
      }
      else {
        $result = $this->Simpeg_model->getPersentasePendidikan();
      }
      echo json_encode($result);
    }

		public function EISMainPage()
		{

			$userId = $this->ion_auth->get_user_id();
			$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));
			$gid =array();
      $stsOPD = TRUE;
			foreach($this->data['user_group'] as $ug){
				$gid[]=$ug->id;
			}
			$gid =array();
			foreach($this->data['user_group'] as $ug){
				$gid[]=$ug->id;
			}
			log_message('debug','User Group Array : '.print_r($gid,TRUE));
			$this->data['menu']=$this->Menu_model->menuMaster($gid);
			$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

      $a = 	$this->data['user_group'][0]->name;
      if (strpos($a, 'opd_bkd') !== false) {
  	     $this->data['instansiUnkerja']=$this->Simpeg_model->getInstansi();
        log_message('debug','MASUK TRUE');
      }else {
        $stsOPD =FALSE;
        $kunkerByNip = $this->Simpeg_model->getKunkersByNip($this->data['user']->nip);
        $this->data['instansiUnkerja']=$this->Simpeg_model->getStrukturInstansi($kunkerByNip[0]['kunkers']);
        log_message('debug','MASUK False');
      }

			$this->data['instansiUnkerjaPercentage']=$this->Simpeg_model->getInstansi();

      $this->data['tingkatPendidikanPns']=$this->Simpeg_model->getTingkatPendidikanPns();
			$this->data['rekapPNSBKD']=$this->Simpeg_model->getDaftarUrutKepangkatanByInstansiJoinQuery();

      $this->data['totalPNSAktif']=$this->Simpeg_model->getTotalPNSAktif();
      $this->data['totalGender']=$this->Simpeg_model->getCountJenisKelamin();
			log_message('INFO','User Id : '.$userId);

				$this->render('dashboard/eis_main_view');
		}

		public function testRekap()
		{
			$rekap =$this->Simpeg_model->getDaftarUrutKepangkatanByInstansi2() ;
    //  log_message('debug',print_r($rekap[0],TRUE));
			$data_rekap_bkd =array('rekap'=>$rekap);
			$this->load->view('eis_duk_bkd_pdf0', $data_rekap_bkd, false);

		}
		public function testTable()
		{
			$rekap=$this->Simpeg_model->getDaftarUrutKepangkatanByInstansiJoinQueryTableGenerate() ;
			$this->load->view('test', $rekap, false);
		}
		public function checkRekap()
		{
			$key = $this->input->get('q');
			$result = mb_substr($key, 0, 4);
			log_message('debug','This is the code: '.$result);
			$rekap =$this->Simpeg_model->getDaftarUrutKepangkatanByInstansi2($result) ;

			$data_rekap_bkd =array('rekap'=>$rekap);
			//print_r($data_rekap_bkd);
			//$this->load->view('eis_duk_bkd_pdf', $data_rekap_bkd, false);

			//
			$this->load->helper('download');
			$pdfFilePath = "assets/".date("h_i_sa").".pdf";
			if (file_exists($pdfFilePath) == FALSE)

			{
				$dataEmail='';
				ini_set('memory_limit','750M'); // boost the memory limit if it's low ;)

				$this->load->library('pdf');
				$data_rekap_bkd =array('rekap'=>$rekap);

				$html = $this->load->view('eis_duk_bkd_pdf0', $data_rekap_bkd, true); // render the view into HTML

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
				$pdf->cacheTables = true;
				$pdf->simpleTables=true;
				$pdf->packTableData=true;
				$pdf->WriteHTML($html); // write the HTML into the PDF

				$pdf->Output($pdfFilePath, 'F'); // save to file because we can

			}
			$pathAttachments =$pdfFilePath;
			force_download($pdfFilePath, NULL);

		}

      public function checkRekapEselon()
  		{
        	$userId = $this->ion_auth->get_user_id();
  			$key = $this->input->get('q');
  			$result = mb_substr($key, 0, 4);
  			log_message('debug','This is the code: '.$result);


        $this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
        $stsOPDBKD = TRUE;
        $a = 	$this->data['user_group'][0]->name;
        if (strpos($a, 'opd_bkd') !== false) {
            $rekap =$this->Simpeg_model->getEselonByInstansi($key) ;
            }else {
              $stsOPDBKD =FALSE;
              $rekap =$this->Simpeg_model->getEselonByInstansi($key,$stsOPDBKD) ;
            }
  			//$rekap =$this->Simpeg_model->getEselonByInstansi($key) ;
  		//	log_message(print_r($rekap,TRUE));
  			$data_rekap_bkd =array('rekap'=>$rekap);
  			$this->load->helper('download');
  			$pdfFilePath = "assets/".date("h_i_sa").".pdf";
  			if (file_exists($pdfFilePath) == FALSE)

  			{
  				$dataEmail='';
  				ini_set('memory_limit','750M'); // boost the memory limit if it's low ;)

  				$this->load->library('pdf');
  				$data_rekap_bkd =array('rekap'=>$rekap);

  				$html = $this->load->view('eis_eselon_pdf', $data_rekap_bkd, true); // render the view into HTML

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
  				$pdf->cacheTables = true;
  				$pdf->simpleTables=true;
  				$pdf->packTableData=true;
  				$pdf->WriteHTML($html); // write the HTML into the PDF

  				$pdf->Output($pdfFilePath, 'F'); // save to file because we can

  			}
  			$pathAttachments =$pdfFilePath;
  			force_download($pdfFilePath, NULL);

  		}

  		public function checkRekapGolongan()
  		{
  			$key = $this->input->get('q');
  			$result = mb_substr($key, 0, 4);
  			log_message('debug','This is the code: '.$result);

        	$userId = $this->ion_auth->get_user_id();
        $this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
        $stsOPDBKD = TRUE;
        $a = 	$this->data['user_group'][0]->name;
        if (strpos($a, 'opd_bkd') !== false) {
            $rekap =$this->Simpeg_model->getGolonganByInstansi($key) ;
            }else {
              $stsOPDBKD =FALSE;
              $rekap =$this->Simpeg_model->getGolonganByInstansi($key,$stsOPDBKD) ;
            }
  		//	$rekap =$this->Simpeg_model->getGolonganByInstansi($key) ;
  		//	log_message(print_r($rekap,TRUE));
  			$data_rekap_bkd =array('rekap'=>$rekap);
  			$this->load->helper('download');
  			$pdfFilePath = "assets/".date("h_i_sa").".pdf";
  			if (file_exists($pdfFilePath) == FALSE)

  			{
  				$dataEmail='';
  				ini_set('memory_limit','750M'); // boost the memory limit if it's low ;)

  				$this->load->library('pdf');
  				$data_rekap_bkd =array('rekap'=>$rekap);

  				$html = $this->load->view('eis_golongan_pdf', $data_rekap_bkd, true); // render the view into HTML

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
  				$pdf->cacheTables = true;
  				$pdf->simpleTables=true;
  				$pdf->packTableData=true;
  				$pdf->WriteHTML($html); // write the HTML into the PDF

  				$pdf->Output($pdfFilePath, 'F'); // save to file because we can

  			}
  			$pathAttachments =$pdfFilePath;
  			force_download($pdfFilePath, NULL);

  		}

		public function testEIS()
		{
			echo json_encode($this->Simpeg_model->getDaftarUrutKepangkatanByInstansiJoinQuery());
		}

    public function testEselon()
    {
      $key='103000000000';
      $result = mb_substr($key, 0, 4);
        echo json_encode($this->Simpeg_model->getEselonByInstansi($result));
    }
    public function checkRekapUsia()
  {
    $key = $this->input->get('q');
    $result = mb_substr($key, 0, 4);
    log_message('debug','This is the code: '.$result);
    $rekap =$this->Simpeg_model->getUsiaByInstansi($key) ;
  //	log_message(print_r($rekap,TRUE));
    $data_rekap_bkd =array('rekap'=>$rekap);
    $this->load->helper('download');
    $pdfFilePath = "assets/".date("h_i_sa").".pdf";
    if (file_exists($pdfFilePath) == FALSE)

    {
      $dataEmail='';
      ini_set('memory_limit','750M'); // boost the memory limit if it's low ;)

      $this->load->library('pdf');
      $data_rekap_bkd =array('rekap'=>$rekap);

      $html = $this->load->view('eis_usia_pdf', $data_rekap_bkd, true); // render the view into HTML

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
      $pdf->cacheTables = true;
      $pdf->simpleTables=true;
      $pdf->packTableData=true;
      $pdf->WriteHTML($html); // write the HTML into the PDF

      $pdf->Output($pdfFilePath, 'F'); // save to file because we can

    }
    $pathAttachments =$pdfFilePath;
    force_download($pdfFilePath, NULL);

  }
  public function checkRekapPendidikan()
  		{
  			$key = $this->input->get('q');
  			$result = mb_substr($key, 0, 4);
  			log_message('debug','This is the code: '.$result);
  			$rekap =$this->Simpeg_model->getTingkatPendidikanByInstansi($key) ;
  		//	log_message(print_r($rekap,TRUE));
  			$data_rekap_bkd =array('rekap'=>$rekap);
  			$this->load->helper('download');
  			$pdfFilePath = "assets/".date("h_i_sa").".pdf";
  			if (file_exists($pdfFilePath) == FALSE)

  			{
  				$dataEmail='';
  				ini_set('memory_limit','750M'); // boost the memory limit if it's low ;)

  				$this->load->library('pdf');
  				$data_rekap_bkd =array('rekap'=>$rekap);

  				$html = $this->load->view('eis_pendidikan_pdf', $data_rekap_bkd, true); // render the view into HTML

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
  				$pdf->cacheTables = true;
  				$pdf->simpleTables=true;
  				$pdf->packTableData=true;
  				$pdf->WriteHTML($html); // write the HTML into the PDF

  				$pdf->Output($pdfFilePath, 'F'); // save to file because we can

  			}
  			$pathAttachments =$pdfFilePath;
  			force_download($pdfFilePath, NULL);

  		}

      public function checkRekapGolonganPerJurusan()
      		{
      			$key = $this->input->get('q');
      			$rekap =$this->Simpeg_model->getGolonganPerJurusan($key) ;
      		//	log_message(print_r($rekap,TRUE));
      			$data_rekap_bkd =array('rekap'=>$rekap);
      			$this->load->helper('download');
      			$pdfFilePath = "assets/".date("h_i_sa").".pdf";
      			if (file_exists($pdfFilePath) == FALSE)

      			{
      				$dataEmail='';
      				ini_set('memory_limit','750M'); // boost the memory limit if it's low ;)

      				$this->load->library('pdf');
      				$data_rekap_bkd =array('rekap'=>$rekap);

      				$html = $this->load->view('eis_golongan_jurusan_pdf', $data_rekap_bkd, true); // render the view into HTML

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
      				$pdf->cacheTables = true;
      				$pdf->simpleTables=true;
      				$pdf->packTableData=true;
      				$pdf->WriteHTML($html); // write the HTML into the PDF

      				$pdf->Output($pdfFilePath, 'F'); // save to file because we can

      			}
      			$pathAttachments =$pdfFilePath;
      			force_download($pdfFilePath, NULL);

      		}

          public function checkRekapJenisKelaminPerInstansi()
          		{
          			$key = $this->input->get('q');
          			$result = mb_substr($key, 0, 4);
          			log_message('debug','This is the code: '.$result);
          			$rekap =$this->Simpeg_model->getJenisKelaminByInstansi($key) ;
          		//	log_message(print_r($rekap,TRUE));
          			$data_rekap_bkd =array('rekap'=>$rekap);
          			$this->load->helper('download');
          			$pdfFilePath = "assets/".date("h_i_sa").".pdf";
          			if (file_exists($pdfFilePath) == FALSE)

          			{
          				$dataEmail='';
          				ini_set('memory_limit','750M'); // boost the memory limit if it's low ;)

          				$this->load->library('pdf');
          				$data_rekap_bkd =array('rekap'=>$rekap);

          				$html = $this->load->view('eis_jeniskelamin_per_instansi_pdf', $data_rekap_bkd, true); // render the view into HTML

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
          				$pdf->cacheTables = true;
          				$pdf->simpleTables=true;
          				$pdf->packTableData=true;
          				$pdf->WriteHTML($html); // write the HTML into the PDF

          				$pdf->Output($pdfFilePath, 'F'); // save to file because we can

          			}
          			$pathAttachments =$pdfFilePath;
          			force_download($pdfFilePath, NULL);

          		}
	}
