<?php class Simpeg_model extends CI_Model {


		function __construct() {
			parent::__construct();

		}


		public function getIdentitasPegawai($nip)
		{
			  $DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT d.nipBaru, d.nipLama, d.nama, d.gelarDepan, d.gelarBlk,a.nama as agama, d.KTLAHIR, d.TLAHIR, d.KJKEL, d.agamaId,
d.jenisPegawai, c.statusCpnsPns, s.nStatusPegawai, d.kedudukanHukum, d.jenisKawin, d.KGOLDAR, d.alamat, d.ALRT,
d.ALRW, d.nomorTelpon, d.kwil, d.KPOS, d.kartuPegawai, d.taspen, d.askesNomor, d.NKARIS_SU, d.npwpNomor, d.NOPEN, d.FILE_BMP
FROM revReferenceSimpeg.datautama d
INNER JOIN revReferenceSimpeg.cpnspns c ON c.nipbaru = d.nipbaru
INNER JOIN revReferenceSimpeg.statusPegawai s on s.kStatusPegawai = c.statusCpnsPns
INNER JOIN revReferenceSimpeg.agama a on a.kode = d.agamaId WHERE d.nipbaru = '$nip'";

		$data = array();
		$stackData = array();

		log_message('debug','getIdentitasPegawai: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['nipBaru']=$row->nipBaru;
					$data['nipLama']=$row->nipLama;
					$data['nama']=$row->nama;
					$data['gelarDepan']=$row->gelarDepan;
					$data['gelarBlk']=$row->gelarBlk;
					$data['agama']=$row->agama;
					$data['KTLAHIR']=$row->KTLAHIR;
					$data['TLAHIR']=$row->TLAHIR;
					$data['KJKEL']=$row->KJKEL;
					$data['jenisPegawai']=$row->jenisPegawai;
					$data['jenisKawin']=$row->jenisKawin;
					$data['KGOLDAR']=$row->KGOLDAR;
					$data['alamat']=$row->alamat;
					$data['ALRT']=$row->ALRT;
					$data['ALRW']=$row->ALRW;
					$data['noTelpon']=$row->nomorTelpon;
					$data['KPOS']=$row->KPOS;
					$data['kartuPegawai']=$row->kartuPegawai;
					$data['taspen']=$row->taspen;
					$data['askesNomor']=$row->askesNomor;
					$data['NKARIS_SU']=$row->NKARIS_SU;
					$data['npwpNomor']=$row->nama;
					$data['NOPEN']=$row->NOPEN;
					$data['FILE_BMP']=base_url().'assets/foto/'.$row->FILE_BMP;
					$data['agamaId']=$row->agamaId;
					$data['statusCpnsPns']=$row->statusCpnsPns;
					$data['kedudukanHukum']=$row->kedudukanHukum;

				//	array_push($stackData,$data);
				}
				$query->free_result();
				return $data;
			}else
			{

				$query->free_result();
				return $data;
			}
		}

		public function getCPNSPNSInfoByNip($nip)
		{
			  $DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT nipBaru, nipLama, statusCpnsPns, NTBAKN, TNTBAKN, KPEJ_CPNS, nomorSkCpns, tglSkCpns, tmtCpns,
		 KGOLRU_CPNS, nomorSttpl, tglSttpl, tglSpmt, KPEJ_PNS,nomorSkPns, tglSkPns, tmtPns, KGOLRU_PNS, sumpahPNS
								FROM cpnspns WHERE nipBaru = '$nip'";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getCPNSByNip	: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['nipBaru']=$row->nipBaru;
					$data['nipLama']=$row->nipLama;
					$data['statusCpnsPns']=$row->statusCpnsPns;
					$data['NTBAKN']=$row->NTBAKN;
					$data['TNTBAKN']=$row->TNTBAKN;
					$data['KPEJ_CPNS']=$row->KPEJ_CPNS;
					$data['nomorSkCpns']=$row->nomorSkCpns;
					$data['tglSkCpns']=$row->tglSkCpns;
					$data['tmtCpns']=$row->tmtCpns;
					$data['KGOLRU_CPNS']=$row->KGOLRU_CPNS;
					$data['nomorSttpl']=$row->nomorSttpl;
					$data['tglSttpl']=$row->tglSttpl;
					$data['KPEJ_PNS']=$row->KPEJ_PNS;
					$data['nomorSkPns']=$row->nomorSkPns;
					$data['tglSkPns']=$row->tglSkPns;
					$data['tmtPns']=$row->tmtPns;
					$data['KGOLRU_PNS']=$row->KGOLRU_PNS;
					$data['sumpahPNS']=$row->sumpahPNS;


					array_push($stackData,$data);
				}
				$query->free_result();
				return $stackData;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}



		public function getRelationStatus()
		{
			  $DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT * FROM statusperkawinan";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getRelationStatus	: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['kode']=$row->kode;
					$data['nama']=$row->nama;

					array_push($stackData,$data);
				}
				$query->free_result();
				return $stackData;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}

		public function getJenisGolongan()
		{
			  $DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT * FROM jenisgolongan";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getRelationStatus	: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['kode']=$row->Golongan_id;
					$data['nama']=$row->golNama;
					$data['pangkat']=$row->golPangkat;

					array_push($stackData,$data);
				}
				$query->free_result();
				return $stackData;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}

		public function getJenisPegawai()
		{
			  $DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT * FROM jenispegawai";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getJenisPegawai	: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['kode']=$row->kode;
					$data['nama']=$row->nama;

					array_push($stackData,$data);
				}
				$query->free_result();
				return $stackData;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}

		public function getJenisPejabatMenetapkan()
		{
				$DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT * FROM pejabatmenetapkan";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getJenisPejabatMenetapkan	: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['kode']=$row->kpej;
					$data['nama']=$row->npej;

					array_push($stackData,$data);
				}
				$query->free_result();
				return $stackData;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}

		public function getStatusPegawai()
		{
			  $DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT * FROM statuspegawai";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getStatusPegawai	: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['kode']=$row->kStatusPegawai;
					$data['nama']=$row->nStatusPegawai;

					array_push($stackData,$data);
				}
				$query->free_result();
				return $stackData;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}

		public function getKedudukanPegawai()
		{
			  $DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT * FROM kedudukanpegawai";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getKedudukanPegawai	: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['kode']=$row->id;
					$data['nama']=$row->nama;

					array_push($stackData,$data);
				}
				$query->free_result();
				return $stackData;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}

		public function getAgama()
		{
			  $DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT * FROM agama";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getAgama	: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['kode']=$row->kode;
					$data['nama']=$row->nama;

					array_push($stackData,$data);
				}
				$query->free_result();
				return $stackData;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}
		public function getJenisKelamin()
		{
			  $DB2 =$this->load->database('simpegRef', TRUE);
		$querySQL = "SELECT * FROM jeniskelamin";

		$data = array();
		$stackData = array();

		log_message('debug','getJenisKelamin	: '.$querySQL);
		$query = $DB2->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['KJKEL']=$row->KJKEL;
					$data['NKELAMIN']=$row->NKELAMIN;

					array_push($stackData,$data);
				}
				$query->free_result();
				return $stackData;
			}else
			{

				$query->free_result();
				return $data;
			}
		}

    public function getCountTotalRowCurrentBirthday($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir)
    {
    $DB2 =$this->load->database('simpegRef', TRUE);

    $querySqlCount = "select count(*) as total
                  from datautama du
                  left join jakhir ja on du.nipBaru = ja.nip
                  left join unkerja k1 on k1.kunker = ja.kunkers
                  left join unkerja k2 on k2.kunker = ja.kunkersInduk
                  where du.kedudukanHukum=1  and MONTH(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = MONTH(NOW()) and day(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = day(NOW()) and
                  du.nama like '%$searchColumn%' ";


      log_message('debug','Query TotalCountRow GetPegawaiUmum :'.$querySqlCount);
      $query = $DB2->query($querySqlCount);

      $total=0;
      if($query->num_rows()>0)
        { $count = 1;
          foreach($query->result() as $row)
          {
            $total=$row->total;


          }
          $query->free_result();


        }
        return $total;
    }

    function getCurentDayBirthDay ($key,$limitStart,$limitLength,$searchColumn,$draw,$orderByColumn,$orderByDir)
    {
      $orderBy = $orderByColumn;
      $orderQuery = '';
      if($orderByColumn != 0)
			{
				log_message('debug','Inside Order By 0');
				$orderQuery = "order by ".($orderByColumn+1)." ".$orderByDir;


			}
      $querySQL = "select du.nipBaru as nip,du.nama as nama,k2.nunker as instansi,k1.nunker as subUnit ,ja.NJAB as jabatan,DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(DU.TLAHIR)), '%Y')+0 AS age
                    from datautama du
                    left join jakhir ja on du.nipBaru = ja.nip
                    left join unkerja k1 on k1.kunker = ja.kunkers
                    left join unkerja k2 on k2.kunker = ja.kunkersInduk
                    where du.kedudukanHukum=1 and du.statusHidupPensiunPindah =1  and MONTH(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = MONTH(NOW()) and day(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = day(NOW()) and ja.jnsjab=1 and
                    du.nama like '%$searchColumn%' ".$orderQuery." limit $limitStart,$limitLength";
      $DB2 =$this->load->database('simpegRef', TRUE);
      log_message('debug','Query getCurrentBirthday :  '.$querySQL);

      $stackData = array();
      $query = $DB2->query($querySQL);

      if($query->num_rows()>0)
        { $count = 1;
          foreach($query->result() as $row)
          {
            $data = array();
            $data[]=$row->nip;
            $data[]=$row->nama;
            $data[]=$row->age;
            $data[]=$row->instansi;
            $data[]=$row->subUnit;
            $data[]=$row->jabatan;


            array_push($stackData,$data);
          }
          $query->free_result();
          return $stackData;
        }else
        {

          $query->free_result();
          return $data;
        }
    }

}
