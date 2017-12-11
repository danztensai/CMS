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

		$groupid = $this->data['user_group'][0]->id;
$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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

		$groupid = $this->data['user_group'][0]->id;
		$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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

		$groupid = $this->data['user_group'][0]->id;
		$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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

		$groupid = $this->data['user_group'][0]->id;
		$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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

		$groupid = $this->data['user_group'][0]->id;
		$this->data['menu']=$this->Menu_model->menuMaster($groupid);

		//log_message('INFO','User Id : '.$userId);

		$this->render('dashboard/profile_pegawai_pensiun_view');

	}

	public function dataReferensi()
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

		$groupid = $this->data['user_group'][0]->id;
		$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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

		$groupid = $this->data['user_group'][0]->id;
$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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

		$groupid = $this->data['user_group'][0]->id;
$this->data['menu']=$this->Menu_model->menuMaster($groupid);

		//log_message('INFO','User Id : '.$userId);

		$this->render('dashboard/profile_pegawai_meninggal_view');

	}

	public function opbkdModifRiwayatDiklat()
	 	{
	 		log_message('debug','Trying to load Grocer opbkdModifRiwayatDiklat');
	 		$adminSts = $this->ion_auth->is_admin()===FALSE;
	 		$this->db = $this->load->database('simpegRef',true);
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

	 		$groupid = $this->data['user_group'][0]->id;
	 		$this->data['menu']=$this->Menu_model->menuMaster($groupid);

	 		log_message('INFO','User Id : '.$userId);


	 		log_message('DEBUG','inside Admin');
	 		$this->render('dashboard/edit_riwayat_diklat_view');


	 	}

	function editIdentitas() {

		$user = $this->ion_auth->user()->row();
		$instansi=$this->Users_model->getUsersinstansi($user->id);

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

			// $this->load->view('upload_success', $data);
		}

		log_message('debug','Uploading Foto');

		$userLoggedin = $this->ion_auth->user()->row();
		$user=$userLoggedin;
		$nipBaru = $user->nip;
		log_message('debug','From Post Form '.$nipBaru);

		$json = $this->input->post('json');
		$jsonDecode = json_decode($json);
		$changedData = array();

		foreach($jsonDecode as $i)
		{
			$changedData[$i->name]=$i->value;
		}



		$changedData['FILE_BMP']=$data['upload_data']['raw_name'].$data['upload_data']['file_ext'];
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
		$this->Simpeg_model->updateStatusDataConfirmation(array('stsConfirmation'=>1),$id);
		$dataConfirmation = $this->Simpeg_model->getConfirmationDataByid($id);
		$changedData = json_decode($dataConfirmation['changedData']);
		$nData['ALRT'] = $changedData->ALRT;
		$nData['ALRW'] = $changedData->ALRW;
		$nData['KPOS'] = $changedData->KPOS;
		$nData['alamat'] = $changedData->alamat;
		$nData['KGOLDAR'] = $changedData->KGOLDAR;
		$nData['agamaId'] = $changedData->agamaId;
		$nData['nipBaru'] = $changedData->nipBaru;
		$nData['nomorTelpon'] = $changedData->noTelpon;
		$nData['npwpNomor'] = $changedData->npwpNomor;
		$nData['askesNomor'] = $changedData->askesNomor;
		$nData['jenisKawin'] = $changedData->jenisKawin;
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
		$cpnspnsSimpeg = $this->Simpeg_model->getCPNSPNSInfoByNip($userLoggedin->nip);
		$pangkatTerakhir = $this->Simpeg_model->getPangkatAkhirByNip($userLoggedin->nip);
		$gajiBerkala = $this->Simpeg_model->getGajiBerkala($userLoggedin->nip);
		$tempatPegawai = $this->Simpeg_model->getTempatPegawai($userLoggedin->nip);
		$jabatanTerakhir = $this->Simpeg_model->getJabatanTerakhir($userLoggedin->nip);
		$riwayatPangkat = $this->Simpeg_model->getRiwayatPangkat($userLoggedin->nip);
		$riwayatJabatan = $this->Simpeg_model->getRiwayatJabatan($userLoggedin->nip);
		$riwayatJasa = $this->Simpeg_model->getRiwayatJasa($userLoggedin->nip);
		$riwayatDpp = $this->Simpeg_model->getRiwayatDPP($userLoggedin->nip);
		$riwayatKeluargaAyah = $this->Simpeg_model->getRiwayatKeluargaAyah($userLoggedin->nip);
		$riwayatKeluargaIbu = $this->Simpeg_model->getRiwayatKeluargaIbu($userLoggedin->nip);
		$riwayatKeluargaSuamiIstri = $this->Simpeg_model->getRiwayatKeluargaSuamiIstri($userLoggedin->nip);
		$riwayatKeluargaAnak = $this->Simpeg_model->getRiwayatKeluargaAnak($userLoggedin->nip);

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
		$this->data['riwayatKeluargaAyah']=$riwayatKeluargaAyah;
		$this->data['riwayatKeluargaIbu']=$riwayatKeluargaIbu;
		$this->data['riwayatKeluargaSuamiIstri']=$riwayatKeluargaSuamiIstri;
		$this->data['riwayatKeluargaAnak']=$riwayatKeluargaAnak;

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

		$groupid = $this->data['user_group'][0]->id;
$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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
		$nData['ALRT'] = $changedData->ALRT;
		$nData['ALRW'] = $changedData->ALRW;
		$nData['KPOS'] = $changedData->KPOS;
		$nData['alamat'] = $changedData->alamat;
		$nData['KGOLDAR'] = $changedData->KGOLDAR;
		$nData['agamaId'] = $changedData->agamaId;
		$nData['nipBaru'] = $changedData->nipBaru;
		$nData['noTelpon'] = $changedData->noTelpon;
		$nData['npwpNomor'] = $changedData->npwpNomor;
		$nData['askesNomor'] = $changedData->askesNomor;
		$nData['jenisKawin'] = $changedData->jenisKawin;
		$nData['statusCpnsPns'] = $changedData->statusCpnsPns;
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

		$groupid = $this->data['user_group'][0]->id;
		$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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
		$groupid = $this->data['user_group'][0]->id;
		$this->data['menu']=$this->Menu_model->menuMaster($groupid);
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
		$groupid = $this->data['user_group'][0]->id;
$this->data['menu']=$this->Menu_model->menuMaster($groupid);
		log_message('INFO','User Id : '.$userId);
		log_message('DEBUG','inside Admin');
		$this->render('dashboard/referensi_instansiInduk_view');
	}


	public function referensiInstansiInduk()
	{
		log_message('debug','Trying to load Grocer Ref Instansi Induk');
		$adminSts = $this->ion_auth->is_admin()===FALSE;
		$this->db = $this->load->database('simpegRef',true);
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

	public function referensiUnitKerja()
	{
		log_message('debug','Trying to load Grocer Ref Unit Kerja');
		$adminSts = $this->ion_auth->is_admin()===FALSE;
		$this->db = $this->load->database('simpegRef',true);
		log_message('debug','after Load new Db');
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
		$output = $crud->render();
		$this->load->view('dashboard/grid',$output);
	}

	public function referensiWilayah()
	{
		log_message('debug','Trying to load Grocer Referensi Wilayah');
		$adminSts = $this->ion_auth->is_admin()===FALSE;
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('tingkatpendidikan')
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','1');
		$crud->set_table('jenisjabatan')
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
		$this->db = $this->load->database('simpegRef',true);
		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','2');
		$crud->set_table('jenisjabatan')
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
		$this->db = $this->load->database('simpegRef',true);
		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','3');
		$crud->set_table('jenisjabatan')
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
		$this->db = $this->load->database('simpegRef',true);
		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','4');
		$crud->set_table('jenisjabatan')
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
		$this->db = $this->load->database('simpegRef',true);
		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->where('JNSJAB','5');
		$crud->set_table('jenisjabatan')
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
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
		$this->db = $this->load->database('simpegRef',true);
		log_message('debug','after Load new Db');
		$crud = new grocery_CRUD();
		$crud->set_table('golruang')
		->set_subject('Status Pegawai')
		->columns('KGOLRU', 'NGOLRU', 'PANGKAT');
		$crud->fields('KGOLRU');
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

		$groupid = $this->data['user_group'][0]->id;
$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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
		->display_as('nama','Agama');
		$crud->fields('kode','nama');
		$crud->required_fields('kode','nama');
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
			$groupid = $this->data['user_group'][0]->id;
			$this->data['menu']=$this->Menu_model->menuMaster($groupid);
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

		public function referensi()
		{

			$userId = $this->ion_auth->get_user_id();
			$this->data['user']=$this->ion_auth->user()->row();
			log_message('INFO','is admin? :'.$this->ion_auth->is_admin());
			$this->data['user_group']= $this->ion_auth->get_users_groups($userId)->result();
			log_message('debug','User Group : '.print_r($this->data['user_group'],TRUE));

			$this->data['users_instansi']=$this->Users_model->getUsersinstansi($userId );

			$groupid = $this->data['user_group'][0]->id;
$this->data['menu']=$this->Menu_model->menuMaster($groupid);

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
