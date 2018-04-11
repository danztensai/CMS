<?php class Simpeg_model extends CI_Model {


		function __construct() {
			parent::__construct();

		}

		public function getUsiaByInstansi($instansi = null)
						{
							if($instansi=='100000000000')
							{
								$instansi = null;
							}

							if($instansi == null){
							$querySQL = "select * from unkerja where kunker like '10%__00000000'";
						}
						else {
							$querySQL = "select * from unkerja where kunker like '$instansi'";
						}
							$data = array();
							$stackData = array();

							log_message('debug','getUsiaByInstansi: '.$querySQL);
							$query = $this->db->query($querySQL);

							if($query->num_rows()>0)
							 { $count = 1;
								foreach($query->result() as $row)
								{
								 $data['kunker']=$row->kunker;
								 $data['nunker']=$row->nunker;
								 $data['usiaCount']=$this->countUsiaPerInstansi($row->kunker);
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


					public function countUsiaPerInstansi($instansi='103000000000')
			{
				$kunker = mb_substr($instansi, 0, 4);
				$querySQL = "SELECT SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) <= 25, 1, 0)) as 'usiakurangsamadengan25',
		SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) BETWEEN 26 and 30, 1, 0)) as 'usia26_30',
		SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) BETWEEN 31 and 35, 1, 0)) as 'usia31_35',
		SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) BETWEEN 26 and 40, 1, 0)) as 'usia36_40',
		SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) BETWEEN 26 and 45, 1, 0)) as 'usia41_45',
		SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) BETWEEN 26 and 50, 1, 0)) as 'usia46_50',
		SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) BETWEEN 26 and 55, 1, 0)) as 'usia51_55',
		SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) BETWEEN 26 and 60, 1, 0)) as 'usia56_60',
		SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) >= 61 , 1, 0)) as 'usialebihbesarsamadengan61',
		SUM(IF(YEAR(CURDATE()) - YEAR(TLAHIR) BETWEEN 0 and 100, 1, 0)) as 'Jumlah'
		FROM rekap_instansi WHERE kunkers LIKE '$kunker%'";

				$data = array();
				$stackData = array();

				log_message('debug','countUsiaPerInstansi: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				 { $count = 1;
					foreach($query->result() as $row)
					{
					 $data['usiakurangsamadengan25']=$row->usiakurangsamadengan25;
					 $data['usia26_30']=$row->usia26_30;
					 $data['usia31_35']=$row->usia31_35;
					 $data['usia36_40']=$row->usia36_40;
					 $data['usia41_45']=$row->usia41_45;
					 $data['usia46_50']=$row->usia46_50;
					 $data['usia51_55']=$row->usia51_55;
					 $data['usia56_60']=$row->usia56_60;
					 $data['usialebihbesarsamadengan61']=$row->usialebihbesarsamadengan61;
					 $data['Jumlah']=$row->Jumlah;
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

		public function countEselonPerInstansi($instansi='103000000000')
						  {
						    $kunker = mb_substr($instansi, 0, 4);
						    $querySQL = "SELECT SUM(IF(KESELON LIKE '1%', 1, 0)) AS JumlahEselon1,
						SUM(IF(KESELON LIKE '2%', 1, 0)) AS JumlahEselon2,
						SUM(IF(KESELON LIKE '3%', 1, 0)) AS JumlahEselon3,
						SUM(IF(KESELON LIKE '4%', 1, 0)) AS JumlahEselon4,
						SUM(IF(KESELON REGEXP '^1|^2|^3|^4', 1, 0)) AS JumlahEselonKeseluruhan,
						SUM(IF(KESELON = 11, 1, 0)) AS JumlahEselonIA,
						SUM(IF(KESELON = 12, 1, 0)) AS JumlahEselonIB,
						SUM(IF(KESELON LIKE '1%', 1, 0)) AS JumlahEselonIVALID,
						SUM(IF(KESELON = 21, 1, 0)) AS JumlahEselonIIA,
						SUM(IF(KESELON = 22, 1, 0)) AS JumlahEselonIIB,
						SUM(IF(KESELON LIKE '2%', 1, 0)) AS JumlahEselonIIVALID,
						SUM(IF(KESELON = 31, 1, 0)) AS JumlahEselonIIIA,
						SUM(IF(KESELON = 32, 1, 0)) AS JumlahEselonIIIB,
						SUM(IF(KESELON LIKE '3%', 1, 0)) AS JumlahEselonIIIVALID,
						SUM(IF(KESELON = 41, 1, 0)) AS JumlahEselonIVA,
						SUM(IF(KESELON = 42, 1, 0)) AS JumlahEselonIVB,
						SUM(IF(KESELON LIKE '4%', 1, 0)) AS JumlahEselonIVVALID,
						SUM(IF(KESELON REGEXP '^1|^2|^3|^4', 1, 0)) AS JumlahEselon,
						(SELECT COUNT(ru.kunker) FROM unkerja ru WHERE ru.kunker LIKE '$instansi%'
						AND NOT EXISTS (SELECT 1 FROM jakhir rj WHERE kunkers = ru.kunker AND KESELON REGEXP '^1|^2|^3|^4' AND KESELON = ru.keselon)) as EselonTidakTerpenuhi
						FROM rekap_pns_eselon WHERE kunkers LIKE '$kunker%'";

						    $data = array();
						    $stackData = array();

						    log_message('debug','countEselonPerInstansi: '.$querySQL);
						    $query = $this->db->query($querySQL);

						    if($query->num_rows()>0)
						     { $count = 1;
						      foreach($query->result() as $row)
						      {
						       $data['JumlahEselon1']=$row->JumlahEselon1;
						           $data['JumlahEselon2']=$row->JumlahEselon2;
						           $data['JumlahEselon3']=$row->JumlahEselon3;
						           $data['JumlahEselon4']=$row->JumlahEselon4;
						           $data['JumlahEselonIA']=$row->JumlahEselonIA;
						           $data['JumlahEselonIB']=$row->JumlahEselonIB;
						           $data['JumlahEselonIVALID']=$row->JumlahEselonIVALID;
						           $data['JumlahEselonIIA']=$row->JumlahEselonIIA;
						           $data['JumlahEselonIIB']=$row->JumlahEselonIIB;
						           $data['JumlahEselonIIVALID']=$row->JumlahEselonIIVALID;
						           $data['JumlahEselonIIIA']=$row->JumlahEselonIIIA;
						           $data['JumlahEselonIIIB']=$row->JumlahEselonIIIB;
						           $data['JumlahEselonIIIVALID']=$row->JumlahEselonIIIVALID;
						           $data['JumlahEselonIVA']=$row->JumlahEselonIVA;
						           $data['JumlahEselonIVB']=$row->JumlahEselonIVB;
						           $data['JumlahEselonIVVALID']=$row->JumlahEselonIVVALID;
						           $data['JumlahEselon']=$row->JumlahEselon;
						           $data['EselonTidakTerpenuhi']=$row->EselonTidakTerpenuhi;
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
							public function getGolonganByInstansi($instansi = null)
					  {
							if($instansi=='10000000000')
							{
								$instansi = null;
							}

							if($instansi == null){
					    $querySQL = "select * from unkerja where kunker like '10%__00000000'";
						}
						else {
							$querySQL = "select * from unkerja where kunker like '$instansi'";
						}
					    $data = array();
					    $stackData = array();

					    log_message('debug','getRiwayatPangkat: '.$querySQL);
					    $query = $this->db->query($querySQL);

					    if($query->num_rows()>0)
					     { $count = 1;
					      foreach($query->result() as $row)
					      {
					       $data['kunker']=$row->kunker;
					       $data['nunker']=$row->nunker;
					       $data['eselonCount']=$this->countGolonganPerInstansi($row->kunker);
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


					public function countGolonganPerInstansi($instansi='103000000000')
			{
				$kunker = mb_substr($instansi, 0, 4);
				$querySQL = "SELECT SUM(IF(KGOLRU LIKE '1%', 1, 0)) as JumlahSemuaGolongan,
SUM(IF(KGOLRU = '141', 1, 0)) as JumlahGolonganIVA,
SUM(IF(KGOLRU = '142', 1, 0)) as JumlahGolonganIVB,
SUM(IF(KGOLRU = '143', 1, 0)) as JumlahGolonganIVC,
SUM(IF(KGOLRU = '144', 1, 0)) as JumlahGolonganIVD,
SUM(IF(KGOLRU = '145', 1, 0)) as JumlahGolonganIVE,
SUM(IF(KGOLRU like '14%', 1, 0)) as JumlahGolonganIV,
SUM(IF(KGOLRU = '131', 1, 0)) as JumlahBGolonganIIIA,
SUM(IF(KGOLRU = '132', 1, 0)) as JumlahGolonganIIIB,
SUM(IF(KGOLRU = '133', 1, 0)) as JumlahGolonganIIIC,
SUM(IF(KGOLRU = '134', 1, 0)) as JumlahGolonganIIID,
SUM(IF(KGOLRU like '13%', 1, 0)) as JumlahGolonganIII,
SUM(IF(KGOLRU = '121', 1, 0)) as JumlahGolonganIIA,
SUM(IF(KGOLRU = '122', 1, 0)) as JumlahGolonganIIB,
SUM(IF(KGOLRU = '123', 1, 0)) as JumlahGolonganIIC,
SUM(IF(KGOLRU = '124', 1, 0)) as JumlahGolonganIID,
SUM(IF(KGOLRU like '12%', 1, 0)) as JumlahGolonganII,
SUM(IF(KGOLRU = '111', 1, 0)) as JumlahGolonganIA,
SUM(IF(KGOLRU = '112', 1, 0)) as JumlahGolonganIB,
SUM(IF(KGOLRU = '113', 1, 0)) as JumlahGolonganIC,
SUM(IF(KGOLRU = '114', 1, 0)) as JumlahGolonganID,
SUM(IF(KGOLRU like '11%', 1, 0)) as JumlahGolonganI
FROM rekap_pns_golongan WHERE kunkers LIKE '$kunker%'";

				$data = array();
				$stackData = array();

				log_message('debug','countGolonganPerInstansi: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				 { $count = 1;
					foreach($query->result() as $row)
					{
					 $data['JumlahSemuaGolongan']=$row->JumlahSemuaGolongan;
							 $data['JumlahGolonganIVA']=$row->JumlahGolonganIVA;
							 $data['JumlahGolonganIVB']=$row->JumlahGolonganIVB;
							 $data['JumlahGolonganIVC']=$row->JumlahGolonganIVC;
							 $data['JumlahGolonganIVD']=$row->JumlahGolonganIVD;
							 $data['JumlahGolonganIVE']=$row->JumlahGolonganIVE;
							 $data['JumlahGolonganIV']=$row->JumlahGolonganIV;
							 $data['JumlahBGolonganIIIA']=$row->JumlahBGolonganIIIA;
							 $data['JumlahGolonganIIIB']=$row->JumlahGolonganIIIB;
							 $data['JumlahGolonganIIIC']=$row->JumlahGolonganIIIC;
							 $data['JumlahGolonganIIID']=$row->JumlahGolonganIIID;
							 $data['JumlahGolonganIII']=$row->JumlahGolonganIII;
							 $data['JumlahGolonganIIA']=$row->JumlahGolonganIIA;
							 $data['JumlahGolonganIIB']=$row->JumlahGolonganIIB;
							 $data['JumlahGolonganIIC']=$row->JumlahGolonganIIC;
							 $data['JumlahGolonganIID']=$row->JumlahGolonganIID;
							 $data['JumlahGolonganII']=$row->JumlahGolonganII;
							 $data['JumlahGolonganIA']=$row->JumlahGolonganIA;
							 $data['JumlahGolonganIB']=$row->JumlahGolonganIB;
							 $data['JumlahGolonganIC']=$row->JumlahGolonganIC;
							 $data['JumlahGolonganID']=$row->JumlahGolonganID;
							 $data['JumlahGolonganI']=$row->JumlahGolonganI;
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

		public function getPersentasePendidikan($instansi = null)
		{
			$querySQL = "SELECT COUNT(rt.ktp) as total, rt.ntp as pendidikan
FROM pendidikanAkhir rp
INNER JOIN jurpendidikan rj on rj.KJUR LIKE CONCAT(rp.KTPU,rp.KJUR)
INNER JOIN tingpend rt on rt.ktp = rj.tp
INNER JOIN datautama rd on rd.nipBaru = rp.NIP
INNER join jakhir ja on ja.nip = rp.nip
INNER join unkerja uk on uk.kunker = ja.kunkers
WHERE rd.statusHidupPensiunPindah = 1 and ja.kunkers like '$instansi%'
GROUP BY rt.ktp;";

 	if($instansi == null)
	{
		$querySQL = "SELECT COUNT(rt.ktp) as total, rt.ntp as pendidikan
FROM pendidikanAkhir rp
INNER JOIN jurpendidikan rj on rj.KJUR LIKE CONCAT(rp.KTPU,rp.KJUR)
INNER JOIN tingpend rt on rt.ktp = rj.tp
INNER JOIN datautama rd on rd.nipBaru = rp.NIP
INNER join jakhir ja on ja.nip = rp.nip
INNER join unkerja uk on uk.kunker = ja.kunkers
WHERE rd.statusHidupPensiunPindah = 1
GROUP BY rt.ktp";
	}
			$data = array();
			$stackData = array();

			log_message('debug','getPersentaseGenderPNS: '.$querySQL);
			$query = $this->db->query($querySQL);

			if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['total']=$row->total;
						$data['pendidikan']=$row->pendidikan;
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

		public function getPersentaseGenderPNS($instansi = null)
		{
			$querySQL = "select
  concat(5*floor(age/5), '-', 5*floor(age/5
	) + 5) as `range`,
  gender,
  count(*) as count
from (
  select
    TIMESTAMPDIFF(YEAR,TLAHIR,CURDATE()) AS age,jeniskelamin.NKELAMIN as gender
  from
    datautama left join jeniskelamin  on datautama.KJKEL = jeniskelamin.KJKEL where datautama.statusHidupPensiunPindah = 1
) as t  group by `range`, gender";

			if ($instansi !=null)
			{
				$querySQL = "select
  concat(5*floor(age/5), '-', 5*floor(age/5) + 5) as `range`,
  gender,
  count(*) as count
from (
  select
    TIMESTAMPDIFF(YEAR,TLAHIR,CURDATE()) AS age,jeniskelamin.NKELAMIN as gender
  from
    datautama left join jeniskelamin  on datautama.KJKEL = jeniskelamin.KJKEL left join jakhir ja on datautama.nipBaru = ja.NIP where datautama.statusHidupPensiunPindah = 1 and ja.kunkersInduk = '$instansi'
) as t  group by `range`, gender;";
			}
			$data = array();
			$stackData = array();

			log_message('debug','getPersentaseGenderPNS: '.$querySQL);
			$query = $this->db->query($querySQL);

			if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['range']=$row->range;
						if($row->range==null)
						{
							if($row->gender=='LAKI-LAKI')
							{
								$data['range']=null;
								$data['gender']='PEREMPUAN';
								$data['count']=0;
								array_push($stackData,$data);
							}else {
								$data['range']=null;
								$data['gender']='LAKI-LAKI';
								$data['count']=0;
								array_push($stackData,$data);
							}
						}
						$data['gender']=$row->gender;
						$data['count']=$row->count;
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

		public function getRiwayatPangkat($nip)
		{

				$querySQL = "SELECT rg.nip, rg.Golongan_idGolongan, rj.golNama, rg.jenisKP, rn.nnpang, rg.tmtGolongan, rg.nomorSk, rg.tanggalSk, rg.kpej, rp.npej
								FROM golonganhistory rg
								INNER JOIN jenisgolongan rj on rj.Golongan_id = rg.Golongan_idGolongan
								INNER JOIN naikPangkat rn on rn.knpang = rg.jenisKP
								INNER JOIN pejabatMenetapkan rp on rp.kpej = rg.kpej
								WHERE rg.nip = '$nip'
								ORDER BY rg.tmtGolongan ASC;";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPangkat: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['nip']=$row->nip;
							$data['idGolongan']=$row->Golongan_idGolongan;
							$data['golNama']=$row->golNama;
							$data['jenisKP']=$row->jenisKP;
							$data['nnpang']=$row->nnpang;
							$data['tmtGolongan']=$row->tmtGolongan;
							$data['nomorSk']=$row->nomorSk;
							$data['tanggalSk']=$row->tanggalSk;
							$data['kpej']=$row->kpej;
							$data['npej']=$row->npej;


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

		public function getDaftarUrutKepangkatanByInstansi($instansi='1003')
		{

				$querySQL = "SELECT rg.NIP, rd.nama, jg.golNama, rg.TMTPANG, rj.NJAB, rj.TMTJAB ,rj.NJAB, YEAR(CURDATE()) - YEAR(rd.TLAHIR) as usia
										FROM jakhir rj
										LEFT JOIN golonganakhir2 rg on rg.nip = rj.NIP
										LEFT JOIN datautama5 rd on rd.nipBaru = rj.NIP
										left join jenisgolongan jg on jg.Golongan_id = rg.KGOLRU
										WHERE rj.kunkers like '$instansi%' AND rg.statusHidupPensiunPindah = 1
										ORDER BY rg.KGOLRU desc, rd.TLAHIR";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPangkat: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['NIP']=$row->NIP;
							$data['nama']=$row->nama;
							$data['golNama']=$row->golNama;
							$data['TMTPANG']=$row->TMTPANG;
							$data['NJAB']=$row->NJAB;
							$data['TMTJAB']=$row->TMTJAB;
							$data['NJAB']=$row->NJAB;
							$data['usia']=$row->usia;
							$data['masa_kerja']=$this->getMasaKerjaByNip($row->NIP);
							$data['data_pendidikan_diklat']=$this->getRiwayatDiklatByNip($row->NIP);
							$data['data_pendidikan_umum']=$this->getRiwayatPendidikanUmumByNip($row->NIP);
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

		public function getEselonByInstansi($key=null)
		{


			if($key=='10000')
			{
				$key = null;
			}

			if($key == null){
			$querySQL = "select * from unkerja where kunker like '10%__00000000'";
			}
			else {
				$querySQL = "select * from unkerja where kunker like '$key%__000000'";
			}

				//$querySQL = "select * from unkerja where kunker like '10%__00000000'";

				$data = array();
				$stackData = array();

				log_message('debug','getEselonByInstansi: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['kunker']=$row->kunker;
							$data['nunker']=$row->nunker;
							$data['eselonCount']=$this->countEselonPerInstansi($row->kunker);
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

		public function getRiwayatDiklatRekap($nip)
		{

				$querySQL = "select namaDiklat,bulan,tahun,JAM from rekap_pns where NIP like '$nip%'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatDiklatRekap: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{

							$data['namaDiklat']=$row->namaDiklat;
							$data['bulan']=$row->bulan;
							$data['tahun']=$row->tahun;
							$data['JAM']=$row->JAM;




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
		public function getDaftarUrutKepangkatanByInstansi2($instansi='1030')
		{

				if($instansi=='1000')
				{
					$querySQL = "select NIP,nama,golNama,TMTPANG,NJAB,TMTJAB,masakerja from rekap_pns";
				}else{
					$querySQL = "select NIP,nama,golNama,TMTPANG,NJAB,TMTJAB,masakerja from rekap_pns where kunkers like '$instansi%'";
				}
				$data = array();
				$stackData = array();

				log_message('debug','getDaftarUrutKepangkatanByInstansi: '.$querySQL);
				$query = $this->db->query($querySQL);
				$tempNip = "";
				$counter = 0;
				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							if($counter ==0)
							{
								$tempNip = $row->NIP;
								$data['NIP']=$row->NIP;
								$data['nama']=$row->nama;
								$data['golNama']=$row->golNama;
								$data['TMTPANG']=$row->TMTPANG;
								$data['NJAB']=$row->NJAB;
								$data['TMTJAB']=$row->TMTJAB;
								$data['masa_kerja']=$row->masakerja;

								$data['riwayatDiklat']=$this->getRiwayatDiklatRekap($row->NIP);
								$data['riwayatPendidikan']=$this->getRiwayatPendidikanRekap($row->NIP);
								array_push($stackData,$data);
							}else{
								$tempNip = $query->result()[$counter-1]->NIP;
							}

							$currentNip =$row->NIP;
							log_message('debug','Current Nip '.$currentNip);
							log_message('debug','Prev NIP '.$tempNip);
							if($currentNip != $tempNip)
							{
								$data['NIP']=$row->NIP;
								$data['nama']=$row->nama;
								$data['golNama']=$row->golNama;
								$data['TMTPANG']=$row->TMTPANG;
								$data['NJAB']=$row->NJAB;
								$data['TMTJAB']=$row->TMTJAB;
								$data['masa_kerja']=$row->masakerja;

								$data['riwayatDiklat']=$this->getRiwayatDiklatRekap($row->NIP);
								$data['riwayatPendidikan']=$this->getRiwayatPendidikanRekap($row->NIP);
								array_push($stackData,$data);
							}else {
								log_message('debug','counter ke '.$counter);
							}


						 $counter++;
						}
						$query->free_result();
						return $stackData;
					}else
					{

						$query->free_result();
						return $data;
					}
		}public function getRiwayatPendidikanRekap($nip)
		{

				$querySQL = "select distinct npdum,NJUR,namaSekolah,tahunLulus,usia,NTP from rekap_pns where NIP like '$nip%'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanRekap: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['npdum']=$row->npdum;
							$data['NJUR']=$row->NJUR;
							$data['namaSekolah']=$row->namaSekolah;
							$data['tahunLulus']=$row->tahunLulus;
							$data['usia']=$row->usia;
							$data['NTP']=$row->ntp;
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
		public function getDaftarUrutKepangkatanByInstansiJoinQuery($instansi='1030')
		{

				if($instansi=='1000')
				{
					$querySQL = "select * from rekap_pns";
				}else{
					$querySQL = "select * from rekap_pns where kunkers like '$instansi%'";
				}
				$data = array();
				$stackData = array();

				log_message('debug','getDaftarUrutKepangkatanByInstansiJoinQuery: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['NIP']=$row->NIP;
							$data['nama']=$row->nama;
							$data['golNama']=$row->golNama;
							$data['TMTPANG']=$row->TMTPANG;
							$data['NJAB']=$row->NJAB;
							$data['TMTJAB']=$row->TMTJAB;
							$data['masa_kerja']=$row->masakerja;
							$data['namaDiklat']=$row->namaDiklat;
							$data['bulan']=$row->bulan;
							$data['tahun']=$row->tahun;
							$data['JAM']=$row->JAM;
							$data['npdum']=$row->npdum;
							$data['NJUR']=$row->NJUR;
							$data['namaSekolah']=$row->namaSekolah;
							$data['tahunLulus']=$row->ntp;
							$data['usia']=$row->usia;
							$data['NTP']=$row->ntp;


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

		public function getInstansi()
		{

				$querySQL = "select * from unkerja where kunker like '10%__00000000';";

				$data = array();
				$stackData = array();

				log_message('debug','getInstansiUnkerja: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['kunker']=$row->kunker;
							$data['nunker']=$row->nunker;


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
		public function getMasaKerjaByNip($nip)
		{

				$querySQL = "select concat(FLOOR(( DATE_FORMAT(NOW(),'%Y%m%d') - DATE_FORMAT(tmtCpns,'%Y%m%d'))/10000)) AS years,
       					FLOOR((1200 + DATE_FORMAT(NOW(),'%m%d') - DATE_FORMAT(tmtCpns,'%m%d'))/100) %12 AS months
			 			from cpnspns where nipbaru=$nip";

				$data = array();
				$stackData = array();

				log_message('debug','getMasaKerjaByNip: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['masa_kerja']=$row->years.' Tahun '.$row->months.' Bulan';
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

		public function getRiwayatDiklatByNip($nip)
		{

				$querySQL = "select namaDiklat, month(TAKHIR) as bulan, year(TAKHIR) as tahun, JAM	from riwayatdiklat where nip=$nip and ISAKHIR = 1";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatDiklatByNip: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['nama_diklat']=$row->namaDiklat;
							$data['bulan']=$row->bulan;
							$data['tahun']=$row->tahun;
							$data['jam']=$row->JAM;
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

		public function getRiwayatPendidikanUmumByNip($nip)
		{

				$querySQL = "SELECT  rp.npdum, rj.NJUR, rp.namaSekolah, rp.tahunLulus, rt.ntp,  rp.tempat, rp.tglTahunLulus FROM pendidikan rp
											LEFT JOIN jurpendidikan rj on rj.KJUR = rp.ktpukjur
											LEFT JOIN tingpend rt on rt.ktp = rj.tp
											WHERE rp.NIP=$nip and isPendidikanTerakhir = 1
											ORDER BY rp.tglTahunLulus DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanUmumByNip: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['nama_pendidikan']=$row->npdum;
							$data['nama_jurusan']=$row->NJUR;
							$data['nama_sekolah']=$row->namaSekolah;
							$data['tahun_lulus']=$row->tahunLulus;
							$data['nama_tingkat_pendidikan']=$row->ntp;
							$data['tempat']=$row->tempat;
							$data['tahun_lulus']=$row->tglTahunLulus;
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


		public function getRiwayatJasa($nip)
		{

				$querySQL = "SELECT nip, NBINTANG, skNomor, skDate, tahun, AOLEH
											FROM penghargaan
											WHERE nip = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','riwayatJabatan: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['nip']=$row->nip;
							$data['NBINTANG']=$row->NBINTANG;
							$data['skNomor']=$row->skNomor;
							$data['skDate']=$row->skDate;
							$data['AOLEH']=$row->AOLEH;
							$data['tahun']=$row->tahun;


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
		public function insertData($table,$data){

			$this->db->insert($table, $data);
		}

		public function getRiwayatDPP($nip)
		{

				$querySQL = "SELECT NIP, THNILAI, NSETIA, NPRES, NTJAWAB, NTAAT, NJUJUR, NKSAMA, NPKARSA, NPIMPIN, NTOTAL, NRATA
											FROM rdppp
											WHERE nip = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatDPP: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['NIP']=$row->NIP;
							$data['THNILAI']=$row->THNILAI;
							$data['NSETIA']=$row->NSETIA;
							$data['NPRES']=$row->NPRES;
							$data['NTJAWAB']=$row->NTJAWAB;
							$data['NTAAT']=$row->NTAAT;
							$data['NJUJUR']=$row->NJUJUR;
							$data['NKSAMA']=$row->NKSAMA;
							$data['NPKARSA']=$row->NPKARSA;
							$data['NPIMPIN']=$row->NPIMPIN;
							$data['NTOTAL']=$row->NTOTAL;
							$data['NRATA']=$row->NRATA;


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

		public function getRiwayatHukuman($nip)
		{
				$querySQL = "SELECT rh.nipBaru, rh.nipLama, rh.jenisHukuman, rh.DESHUKUM, rh.skNomor, rh.skTanggal, rh.KPEJ, rp.npej, rh.hukumanTanggal
FROM hukumandisiplin rh
INNER JOIN pejabatMenetapkan rp on rp.kpej = rh.KPEJ
WHERE nipBaru = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatHukuman: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['nipBaru']=$row->nipBaru;
							$data['jenisHukuman']=$row->jenisHukuman;
							$data['DESHUKUM']=$row->DESHUKUM;
							$data['skNomor']=$row->skNomor;
							$data['skTanggal']=$row->skTanggal;
							$data['KPEJ']=$row->KPEJ;
							$data['npej']=$row->npej;
							$data['hukumanTanggal']=$row->hukumanTanggal;
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

		public function getRiwayatCuti($nip)
		{
				$querySQL = "SELECT rr.nip, rr.JCUTI, rr.NSK, rr.TSK, rr.TMULAI, rr.TAKHIR, rr.PTETAP, rp.npej
FROM riwayatCuti rr
INNER JOIN pejabatMenetapkan rp on rp.kpej = rr.PTETAP
WHERE nip = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatCuti: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['nip']=$row->nip;
							$data['JCUTI']=$row->JCUTI;
							$data['NSK']=$row->NSK;
							$data['TSK']=$row->TSK;
							$data['TMULAI']=$row->TMULAI;
							$data['TAKHIR']=$row->TAKHIR;
							$data['PTETAP']=$row->PTETAP;
							$data['npej']=$row->npej;
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

		public function getRiwayatTugasLuarNegri($nip)
		{
				$querySQL = "SELECT NIP, NNEG, TUJUAN, PTETAP, NSK, TSK, TMULAI, TAKHIR
FROM riwayatTugas
WHERE nip = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatTugasLuarNegri: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['NIP']=$row->NIP;
							$data['NNEG']=$row->NNEG;
							$data['TUJUAN']=$row->TUJUAN;
							$data['PTETAP']=$row->PTETAP;
							$data['NSK']=$row->NSK;
							$data['TSK']=$row->TSK;
							$data['TMULAI']=$row->TMULAI;
							$data['TAKHIR']=$row->TAKHIR;
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

		public function getRiwayatBahasa($nip)
		{
				$querySQL = "SELECT rr.NIP, rr.NBAHASA, rk.nama as 'KBAHASA', rj.nama as 'JBAHASA'
FROM riwayatBahasa rr
INNER JOIN kemampuanbahasa rk on rk.KBAHASA = rr.KBAHASA
INNER JOIN jenisbahasa rj on rj.JBAHASA = rr.JBAHASA
WHERE NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatBahasa: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['NIP']=$row->NIP;
							$data['NBAHASA']=$row->NBAHASA;
							$data['KBAHASA']=$row->KBAHASA;
							$data['JBAHASA']=$row->JBAHASA;
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

		public function getRiwayatJabatan($nip)
		{

				$querySQL = "SELECT rj.nip, rj.nunkerUnitOrganisasi, rj.KESELON, re.nama, rj.njab,
				SUBSTRING(rj.kwil, 1,2) as 'kode_propinsi', SUBSTRING(rj.kwil, 3,2) as 'kode_kabupaten',
										rj.tmtJabatan, rj.nomorSk, rj.tanggalSk, rj.jnsjab
										FROM jabatan rj
										INNER JOIN eselon re on rj.KESELON = re.ideselon
										WHERE rj.nip = '$nip'
										ORDER BY rj.tmtJabatan asc ";

				$data = array();
				$stackData = array();

				log_message('debug','riwayatJabatan: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['nip']=$row->nip;
							$data['nunkerUnitOrganisasi']=$row->nunkerUnitOrganisasi;
							$data['KESELON']=$row->KESELON;
							$data['nama']=$row->nama;
							$data['njab']=$row->njab;
							$data['kode_propinsi']=$row->kode_propinsi;
							$data['kode_kabupaten']=$row->kode_kabupaten;
							$data['tmtJabatan']=$row->tmtJabatan;
							$data['nomorSk']=$row->nomorSk;
							$data['tanggalSk']=$row->tanggalSk;
							$data['jnsjab']=$row->jnsjab;


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

		public function getRiwayatJabatan2($nip)
		{
				$querySQL = "SELECT rj.nip, rj.nunkerUnitOrganisasi, rjn.namaJenisJabatan, re.nama, rj.njab, SUBSTRING(rj.kwil, 1,2) as 'kode_propinsi', SUBSTRING(rj.kwil, 3,2) as 'kode_kabupaten', rj.tmtJabatan, rj.nomorSk, rj.tanggalSk
FROM jabatan rj
LEFT JOIN jnsjabatan rjn on rjn.JNSJAB = rj.jnsjab
LEFT JOIN eselon re on rj.KESELON = re.ideselon
WHERE rj.nip = '$nip'
										ORDER BY rj.tmtJabatan asc ";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatJabatan2: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['nip']=$row->nip;
							$data['nunkerUnitOrganisasi']=$row->nunkerUnitOrganisasi;
							$data['namaJenisJabatan']=$row->namaJenisJabatan;
							$data['nama']=$row->nama;
							$data['njab']=$row->njab;
							$data['kode_propinsi']=$row->kode_propinsi;
							$data['kode_kabupaten']=$row->kode_kabupaten;
							$data['tmtJabatan']=$row->tmtJabatan;
							$data['nomorSk']=$row->nomorSk;
							$data['tanggalSk']=$row->tanggalSk;

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


		public function getRiwayatOrganisasi($nip)
		{
				$querySQL = "SELECT NIP, JORG, NORG, JBORG, TMULAI, TAKHIR, NPIMP, TEMPAT
FROM riwayatorganisasi
WHERE NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatOrganisasi: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['NIP']=$row->NIP;
							$data['JORG']=$row->JORG;
							$data['NORG']=$row->NORG;
							$data['JBORG']=$row->JBORG;
							$data['TMULAI']=$row->TMULAI;
							$data['TAKHIR']=$row->TAKHIR;
							$data['NPIMP']=$row->NPIMP;
							$data['TEMPAT']=$row->TEMPAT;
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

		public function getRiwayatOrganisasi2($nip)
		{
				$querySQL = "SELECT rr.NIP, rj.JORG, rr.NORG, rr.JBORG, rr.TMULAI, rr.TAKHIR, rr.NPIMP, rr.TEMPAT
FROM riwayatorganisasi rr
LEFT JOIN jenisorganisasi rj on rj.id = rr.idJORG
WHERE NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatOrganisasi: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['NIP']=$row->NIP;
							$data['JORG']=$row->JORG;
							$data['NORG']=$row->NORG;
							$data['JBORG']=$row->JBORG;
							$data['TMULAI']=$row->TMULAI;
							$data['TAKHIR']=$row->TAKHIR;
							$data['NPIMP']=$row->NPIMP;
							$data['TEMPAT']=$row->TEMPAT;
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



		public function getRiwayatJabatanPensiun($nip)
		{

				$querySQL = "SELECT rj.nip, rj.nunkerUnitOrganisasi, rj.KESELON, re.nama, rj.njab,
				SUBSTRING(rj.kwil, 1,2) as 'kode_propinsi', SUBSTRING(rj.kwil, 3,2) as 'kode_kabupaten',
										rj.tmtJabatan, rj.nomorSk, rj.tanggalSk, rj.jnsjab
										FROM jabatan rj
										INNER JOIN eselon re on rj.KESELON = re.ideselon
										WHERE rj.nip = '$nip'
										ORDER BY rj.tmtJabatan asc ";

				$data = array();
				$stackData = array();

				log_message('debug','riwayatJabatan: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['nip']=$row->nip;
							$data['nunkerUnitOrganisasi']=$row->nunkerUnitOrganisasi;
							$data['KESELON']=$row->KESELON;
							$data['nama']=$row->nama;
							$data['njab']=$row->njab;
							$data['kode_propinsi']=$row->kode_propinsi;
							$data['kode_kabupaten']=$row->kode_kabupaten;
							$data['tmtJabatan']=$row->tmtJabatan;
							$data['nomorSk']=$row->nomorSk;
							$data['tanggalSk']=$row->tanggalSk;
							$data['jnsjab']=$row->jnsjab;


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

		public function getTempatPegawai($nip)
		{

		$querySQL = "		 SELECT rw1.kwil as kwi1, rw1.nwil as nwil1, rw2.kwil AS kwil2, rw2.nwil as nwil2, rw3.kwil as kwil3,
		 rw3.nwil as nwil3, rw4.kwil as kwil4, rw4.nwil as nwil4, ru.kunker as kunker, ru.nunker as nunker, ru2.kunker as kunker2, ru2.nunker as nunker2
		FROM jakhir rj
		LEFT JOIN wilayah rw1 on rw1.kwil = CONCAT(SUBSTRING(rj.kwil, 1,2), '00000000')
		LEFT JOIN wilayah rw2 on rw2.kwil = CONCAT(SUBSTRING(rj.kwil, 1,4), '000000')
		LEFT JOIN wilayah rw3 on rw3.kwil = CONCAT(SUBSTRING(rj.kwil, 1,6), '0000')
		LEFT JOIN wilayah rw4 on rw4.kwil = rj.kwil
		LEFT JOIN unkerja2 ru on ru.kunker = CONCAT(SUBSTRING(rj.kunkers, 1,4), '00000000')
		LEFT JOIN unkerja2 ru2 on ru2.kunker = CONCAT(SUBSTRING(rj.kunkers, 1,6), '000000')
		WHERE rj.NIP = '$nip'";

		$data = array();
		$stackData = array();

		log_message('debug','getTempatPegawai: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['kwi1']=$row->kwi1;
					$data['nwil1']=$row->nwil1;
					$data['kwil2']=$row->kwil2;
					$data['nwil2']=$row->nwil2;
					$data['kwil3']=$row->kwil3;
					$data['nwil3']=$row->nwil3;
					$data['kwil4']=$row->kwil4;
					$data['nwil4']=$row->nwil4;
					$data['kunker']=$row->kunker;
					$data['nunker']=$row->nunker;
					$data['kunker2']=$row->kunker2;
					$data['nunker2']=$row->nunker2;
					//array_push($stackData,$data);
				}
				$query->free_result();
				return $data;
			}else
			{

				$query->free_result();
				return $data;
			}
		}

		public function getJabatanTerakhir($nip)
		{

		$querySQL = "SELECT rj.NIP as NIP, rj.KPEJ, rp.npej, rj.NSKJABAT, rj.TSKJABAT, rjn.namaJenisJabatan, rj.KESELON, rj.kunkers as kunker1,
		ru.nunker, ru2.nunker as nunker2, ru3.nunker as nunker3,
rj.KJAB, rjn.NJAB, rj.NJAB as njab2, rj.TLANTIK, rj.TMTJAB, rj.SJAB,rj.NLANTIK
FROM jakhir rj
INNER JOIN pejabatMenetapkan rp on rp.kpej = rj.KPEJ
INNER JOIN jenisJabatan rjn on rjn.JNSJAB = rj.JNSJAB AND rjn.KJAB = rj.KJAB
INNER JOIN unkerja ru on ru.kunker LIKE CONCAT(SUBSTRING(rj.kunkers, 1,8), '0000')
INNER JOIN unkerja ru2 on ru2.kunker LIKE CONCAT(SUBSTRING(rj.kunkers, 1,10), '00')
INNER JOIN unkerja ru3 on ru3.kunker = rj.kunkers
WHERE rj.NIP = '$nip'";

		$data = array();
		$stackData = array();

		log_message('debug','getJabatanTerakhir: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['NIP']=$row->NIP;
					$data['KPEJ']=$row->KPEJ;
					$data['npej']=$row->npej;
					$data['NSKJABAT']=$row->NSKJABAT;
					$data['TSKJABAT']=$row->TSKJABAT;
					$data['namaJenisJabatan']=$row->namaJenisJabatan;
					$data['KESELON']=$row->KESELON;
					$data['kunker1']=$row->kunker1;
					$data['nunker']=$row->nunker;
					$data['nunker2']=$row->nunker2;
					$data['nunker3']=$row->nunker3;
					$data['KJAB']=$row->KJAB;
					$data['njab2']=$row->njab2;
					$data['TLANTIK']=$row->TLANTIK;
					$data['TMTJAB']=$row->TMTJAB;
					$data['SJAB']=$row->SJAB;
					$data['NLANTIK']=$row->NLANTIK;

					//array_push($stackData,$data);
				}
				$query->free_result();
				return $data;
			}else
			{

				$query->free_result();
				return $data;
			}
		}

		public function getJabatanTerakhir2($nip)
		{

		$querySQL = "SELECT rj.NIP, rp.npej, rj.NSKJABAT, rj.TSKJABAT, rjn.namaJenisJabatan, re.nama as 'eselon', rj.kunkers as kunker1,
ru.nunker, ru2.nunker as nunker2, ru3.nunker as nunker3, rj.NLANTIK, rj.TLANTIK, rj.TMTJAB, rj.NJAB, rsjn.NJAB as 'NJAB2', rj.SJAB
FROM jakhir rj
LEFT JOIN pejabatMenetapkan rp on rp.kpej = rj.KPEJ
LEFT JOIN jnsjabatan rjn on rjn.JNSJAB = rj.JNSJAB
LEFT JOIN subjnsjabatan rsjn on rsjn.JNSJAB = rj.JNSJAB AND rsjn.KJAB = rj.KJAB
LEFT JOIN eselon re on re.ideselon = rj.KESELON
LEFT JOIN unkerja ru on ru.kunker LIKE CONCAT(SUBSTRING(rj.kunkers, 1,8), '0000')
LEFT JOIN unkerja ru2 on ru2.kunker LIKE CONCAT(SUBSTRING(rj.kunkers, 1,10), '00')
LEFT JOIN unkerja ru3 on ru3.kunker = rj.kunkers
WHERE rj.NIP = '$nip'";

		$data = array();
		$stackData = array();

		log_message('debug','getJabatanTerakhir: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['NIP']=$row->NIP;
					$data['npej']=$row->npej;
					$data['NSKJABAT']=$row->NSKJABAT;
					$data['TSKJABAT']=$row->TSKJABAT;
					$data['namaJenisJabatan']=$row->namaJenisJabatan;
					$data['eselon']=$row->eselon;
					$data['kunker1']=$row->kunker1;
					$data['nunker']=$row->nunker;
					$data['nunker2']=$row->nunker2;
					$data['nunker3']=$row->nunker3;
					$data['NLANTIK']=$row->NLANTIK;
					$data['TLANTIK']=$row->TLANTIK;
					$data['TMTJAB']=$row->TMTJAB;
					$data['NJAB']=$row->NJAB;
					$data['NJAB2']=$row->NJAB2;
					$data['SJAB']=$row->SJAB;
				}
				$query->free_result();
				return $data;
			}else
			{

				$query->free_result();
				return $data;
			}
		}


		public function getGajiBerkala($nip)
		{

				$querySQL = "SELECT NIP, NSTAHU, TSTAHU, TMTNGAJ, GPOKKHIR, k.KKANTOR, MSKERJA, FLAG,k.NKANTOR
				FROM gkkhir g left join kbayar k on g.KKANTOR=k.KKANTOR WHERE NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getGajiBerkala: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
					{ $count = 1;
						foreach($query->result() as $row)
						{
							$data['NIP']=$row->NIP;
							$data['NSTAHU']=$row->NSTAHU;
							$data['TSTAHU']=$row->TSTAHU;
							$data['TMTNGAJ']=$row->TMTNGAJ;
							$data['GPOKKHIR']=$row->GPOKKHIR;
							$data['KKANTOR']=$row->KKANTOR;
							$data['NKANTOR']=$row->NKANTOR;
							$data['MSKERJA']=$row->MSKERJA;
							$data['FLAG']=$row->FLAG;


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

		public function checkUpdateIdentitasExist($nipBaru)
		{

			$querySQL = "SELECT * FROM dataconfirmation WHERE JSON_EXTRACT(changedData, '$.nipBaru')='$nipBaru' and tables='datautama' and tabs='identitas'";
			log_message('debug','checkUpdateIdentitasExist:  '.$querySQL);
			$query = $this->db->query($querySQL);
			$sts = False;
			if($query->num_rows()>0)
			{
			//  log_message('debug','Exist '.$querySQL);
				return TRUE;
			}else {
				{
				//  log_message('debug','NotExist '.$querySQL);
					return FALSE;
				}
			}
		}

		public function updateConfirmationData($data,$nipBaru)
		{


			$querySQL = "update dataconfirmation set changedData = '$data' ,stsConfirmation=0  WHERE JSON_EXTRACT(changedData, '$.nipBaru')='$nipBaru' and tables='datautama' and tabs='identitas'";
			log_message('debug','updateConfirmationData:  '.$querySQL);
			$query = $this->db->query($querySQL);
		}


		public function getBasicDataSimpegbyNip($nip)
		{

		$querySQL = "select du.nipBaru,du.nama,k2.nunker as instansi,k1.nunker as subUnit ,ja.NJAB from datautama du
									left join jakhir ja on du.nipBaru = ja.nip
									left join unkerja k1 on k1.kunker = ja.kunkers
									left join unkerja k2 on k2.kunker = ja.kunkersInduk
									where du.kedudukanHukum=1 and nipBaru='$nip'";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getBasicDataSimpegbyNip	: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['nipBaru']=$row->nipBaru;
					$data['nama']=$row->nama;
					$data['instansi']=$row->instansi;
					$data['subUnit']=$row->subUnit;
					$data['NJAB']=$row->NJAB;

				//	array_push($stackData,$data);
				}
				$query->free_result();
				return $data;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}
		public function updateIdentitasStatusUpdate($data,$nipBaru)
		{


			$this->db->where('nipBaru', $nipBaru);
			$this->db->update('datautama', $data);
		}

		public function updateStatusDataConfirmation($data,$id)
		{


			$this->db->where('id', $id);
			$this->db->update('dataConfirmation', $data);
		}

		public function getIdentitasPegawai($nip)
		{

		$querySQL = "SELECT  d.stsUpdate, d.nipBaru, d.nipLama, d.nama, d.gelarDepan, d.gelarBlk,a.nama as agama, d.KTLAHIR, d.TLAHIR, d.KJKEL, d.agamaId,
d.jenisPegawai, c.statusCpnsPns, s.nStatusPegawai, d.kedudukanHukum, d.jenisKawin, d.KGOLDAR, d.alamat, d.ALRT,
d.ALRW, d.nomorTelpon, d.kwil, d.KPOS, d.kartuPegawai, d.taspen, d.askesNomor, d.NKARIS_SU, d.npwpNomor, d.NOPEN, d.FILE_BMP
FROM datautama d
INNER JOIN cpnspns c ON c.nipbaru = d.nipbaru
INNER JOIN statusPegawai s on s.kStatusPegawai = c.statusCpnsPns
INNER JOIN agama a on a.kode = d.agamaId WHERE d.nipbaru = '$nip'";

		$data = array();
		$stackData = array();

		log_message('debug','getIdentitasPegawai by NIP : '.$querySQL);
		$query = $this->db->query($querySQL);

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
					$data['npwpNomor']=$row->npwpNomor;
					$data['NOPEN']=$row->NOPEN;
					$data['FILE_BMP']=base_url().'assets/foto/'.$row->FILE_BMP;
					$data['agamaId']=$row->agamaId;
					$data['statusCpnsPns']=$row->statusCpnsPns;
					$data['kedudukanHukum']=$row->kedudukanHukum;
					$data['stsUpdate']=$row->stsUpdate;

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

		$querySQL = "SELECT nipBaru, nipLama, statusCpnsPns, NTBAKN, TNTBAKN, KPEJ_CPNS, nomorSkCpns, tglSkCpns, tmtCpns,
		 KGOLRU_CPNS, nomorSttpl, tglSttpl, tglSpmt, KPEJ_PNS,nomorSkPns, tglSkPns, tmtPns, KGOLRU_PNS, sumpahPNS
								FROM cpnspns WHERE nipBaru = '$nip'";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getCPNSByNip	: '.$querySQL);
		$query = $this->db->query($querySQL);

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


		public function getPangkatAkhirByNip($nip)
		{

		$querySQL = "select * from golonganAkhir where nip='$nip';";

		$data = array();
		$stackData = array();

		log_message('debug','getPangkatAkhirByNip: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['nip']=$row->nip;
					$data['KSTLUD']=$row->KSTLUD;
					$data['NSTLUD']=$row->NSTLUD;
					$data['TSTLUD']=$row->TSTLUD;
					$data['NNTBAKN']=$row->NNTBAKN;
					$data['TNTBAKN']=$row->TNTBAKN;
					$data['PTETAP']=$row->PTETAP;
					$data['NSKPANG']=$row->NSKPANG;
					$data['TSKPANG']=$row->TSKPANG;
					$data['TMTPANG']=$row->TMTPANG;
					$data['KGOLRU']=$row->KGOLRU;
					$data['MSKERJA']=$row->MSKERJA;
					$data['GPOK']=$row->GPOK;
					$data['KNPANG']=$row->KNPANG;

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




		public function getRelationStatus()
		{

		$querySQL = "SELECT * FROM statusperkawinan";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getRelationStatus	: '.$querySQL);
		$query = $this->db->query($querySQL);

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



		public function getConfirmationByStatus($sts,$instansi)
		{

		$querySQL = "SELECT dc.id,du.nipBaru,du.nama,k2.nunker as instansi,k1.nunker as subUnit ,ja.NJAB
		FROM dataconfirmation dc left join datautama du on JSON_EXTRACT(changedData, '$.nipBaru')=du.nipBaru
									left join jakhir ja on du.nipBaru = ja.nip
									left join unkerja k1 on k1.kunker = ja.kunkers
									left join unkerja k2 on k2.kunker = ja.kunkersInduk
 								where stsConfirmation = $sts and dc.instansi like '$instansi'";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getConfirmationByStatus	: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['nip']=$row->nipBaru;
					$data['nama']=$row->nama;
					$data['instansi']=$row->instansi;
					$data['subUnit']=$row->subUnit;
					$data['NJAB']=$row->NJAB;
					$data['action']=$row->id;

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

		public function getConfirmationDataByid($id)
		{

		$querySQL = "SELECT id,tables,currentData,changedData	FROM dataconfirmation where id=$id";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getConfirmationDataByid	: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{

					$dataRet['id']=$row->id;
					$dataRet['tables']=$row->tables;
					$dataRet['currentData']=$row->currentData;
					$dataRet['changedData']=$row->changedData;


				}
				$query->free_result();
				return $dataRet;
			}else
			{

				$query->free_result();
				return $dataRet;
			}
		}

		public function getCountTotalConfirmationByStatus($sts,$instansi)
		{

		$querySQL = "SELECT count(*) as recordsTotal 	FROM dataconfirmation dc
									left join datautama du on JSON_EXTRACT(changedData, '$.nipBaru')=du.nipBaru
									left join jakhir ja on du.nipBaru = ja.nip
									left join unkerja k1 on k1.kunker = ja.kunkers
									left join unkerja k2 on k2.kunker = ja.kunkersInduk
 								where stsConfirmation = $sts and dc.instansi like '$instansi'";

		$recordsTotal=0;

		log_message('debug','getCountTotalConfirmationByStatus	: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$recordsTotal=$row->recordsTotal;
				}
				$query->free_result();

				return $recordsTotal;
			}else
			{

				$query->free_result();
				return $recordsTotal;
			}
		}

		public function getJenisNaikPangkat()
		{

		$querySQL = "SELECT * FROM naikPangkat";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getRelationStatus	: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['kode']=$row->knpang;
					$data['nama']=$row->nnpang;

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

		public function getGajiBerkalaPegawaiPensiun($nip)
		{

			$querySQL = "SELECT NIP, NSTAHU, TSTAHU, TMTNGAJ, GPOKKHIR, KKANTOR, MSKERJA, FLAG
	FROM gkkhir WHERE NIP = '$nip'";

			$data = array();
			$stackData = array();

			log_message('debug','getGajiBerkalaPegawai: '.$querySQL);
			$query = $this->db->query($querySQL);

			if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['NIP']=$row->NIP;
					$data['NSTAHU']=$row->NSTAHU;
					$data['TSTAHU']=$row->TSTAHU;
					$data['TMTNGAJ']=$row->TMTNGAJ;
					$data['GPOKKHIR']=$row->GPOKKHIR;
					$data['KKANTOR']=$row->KKANTOR;
					$data['MSKERJA']=$row->MSKERJA;
					$data['FLAG']=$row->FLAG;
				}
				$query->free_result();
				return $data;
			}else
			{

				$query->free_result();
				return $data;
			}
		}

		public function getTempatPegawaiPensiun($nip)
		{

			$querySQL = "SELECT rj.NIP, ri.NINSIND, rw1.nwil as provinsi, rw2.nwil as kabupaten, rw3.nwil as kecamatan, rw4.nwil as kelurahan, ru.nunker, ru2.nunker as subUnker
	FROM jakhir rj
	LEFT JOIN insinduk ri on ri.KINSIND = rj.KINSIND
	LEFT JOIN wilayah rw1 on rw1.kwil = CONCAT(SUBSTRING(rj.kwil, 1,2), '00000000')
	LEFT JOIN wilayah rw2 on rw2.kwil = CONCAT(SUBSTRING(rj.kwil, 1,4), '000000')
	LEFT JOIN wilayah rw3 on rw3.kwil = CONCAT(SUBSTRING(rj.kwil, 1,6), '0000')
	LEFT JOIN wilayah rw4 on rw4.kwil = rj.kwil
	LEFT JOIN unkerja2 ru on ru.kunker = CONCAT(SUBSTRING(rj.kunkers, 1,4), '00000000')
	LEFT JOIN unkerja2 ru2 on ru2.kunker = CONCAT(SUBSTRING(rj.kunkers, 1,6), '000000')
	WHERE rj.NIP = '$nip'";

			$data = array();
			$stackData = array();

			log_message('debug','getTempatPegawaiPensiun: '.$querySQL);
			$query = $this->db->query($querySQL);

			if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['NIP']=$row->NIP;
					$data['NINSIND']=$row->NINSIND;
					$data['provinsi']=$row->provinsi;
					$data['kabupaten']=$row->kabupaten;
					$data['kecamatan']=$row->kecamatan;
					$data['kelurahan']=$row->kelurahan;
					$data['nunker']=$row->nunker;
					$data['subUnker']=$row->subUnker;
				}
				$query->free_result();
				return $data;
			}else
			{

				$query->free_result();
				return $data;
			}
		}

		public function getRiwayatKeluargaAyah($nip)
		{

			$querySQL = "SELECT rr.NIP, rr.NAYAH, rr.TLAHIR, rr.TGLLAHIR, rr.KKERJA, rd.nama, rr.ALJALAN, rr.ALRT, rr.ALRW, rr.NOTELP, rr.WIL, rr.KPOS
			FROM riwayatAyah rr
			INNER JOIN daftarPekerjaan rd on rd.id = rr.KKERJA
			WHERE rr.NIP = '$nip'";

			$data = array();
			$stackData = array();

			log_message('debug','getRiwayatPensiunKeluargaAyah: '.$querySQL);
			$query = $this->db->query($querySQL);

			if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['NIP']=$row->NIP;
					$data['NAYAH']=$row->NAYAH;
					$data['TLAHIR']=$row->TLAHIR;
					$data['TGLLAHIR']=$row->TGLLAHIR;
					$data['KKERJA']=$row->KKERJA;
					$data['nama']=$row->nama;
					$data['ALJALAN']=$row->ALJALAN;
					$data['ALRT']=$row->ALRT;
					$data['ALRW']=$row->ALRW;
					$data['NOTELP']=$row->NOTELP;
					$data['WIL']=$row->WIL;
					$data['KPOS']=$row->KPOS;
				}
				$query->free_result();
				return $data;
			}else
			{
				$query->free_result();
				return $data;
			}
		}


								public function getRiwayatKeluargaAyah2($nip)
								{

									$querySQL = "SELECT rr.NIP, rr.NAYAH, rr.TLAHIR, rr.TGLLAHIR, rr.KKERJA, rd.nama, rr.ALJALAN, rr.ALRT, rr.ALRW, rr.NOTELP, rr.WIL, rr.KPOS
FROM riwayatAyah rr
LEFT JOIN daftarPekerjaan rd on rd.id = rr.KKERJA
WHERE rr.NIP = '$nip'";

									$data = array();
									$stackData = array();

									log_message('debug','getRiwayatKeluargaAyah: '.$querySQL);
									$query = $this->db->query($querySQL);


									if($query->num_rows()>0)
									{ $count = 1;
										foreach($query->result() as $row)
										{
											$data['NIP']=$row->NIP;
											$data['NAYAH']=$row->NAYAH;
											$data['TLAHIR']=$row->TLAHIR;
											$data['TGLLAHIR']=$row->TGLLAHIR;
											$data['KKERJA']=$row->KKERJA;
											$data['nama']=$row->nama;
											$data['ALJALAN']=$row->ALJALAN;
											$data['ALRT']=$row->ALRT;
											$data['ALRW']=$row->ALRW;
											$data['NOTELP']=$row->NOTELP;
											$data['WIL']=$row->WIL;
											$data['KPOS']=$row->KPOS;
											array_push($stackData,$data);
										}
										$query->free_result();
										return $stackData;
									}else
									{
										$query->free_result();
										return $stackData;
									}
								}



			public function getRiwayatPensiunKeluargaAyah($nip)
			{

				$querySQL = "SELECT rr.NIP, rr.NAYAH, rr.TLAHIR, rr.TGLLAHIR, rr.KKERJA, rd.nama, rr.ALJALAN, rr.ALRT, rr.ALRW, rr.NOTELP, rr.WIL, rr.KPOS
				FROM riwayatAyah rr
				INNER JOIN daftarPekerjaan rd on rd.id = rr.KKERJA
				WHERE rr.NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPensiunKeluargaAyah: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['NIP']=$row->NIP;
						$data['NAYAH']=$row->NAYAH;
						$data['TLAHIR']=$row->TLAHIR;
						$data['TGLLAHIR']=$row->TGLLAHIR;
						$data['KKERJA']=$row->KKERJA;
						$data['nama']=$row->nama;
						$data['ALJALAN']=$row->ALJALAN;
						$data['ALRT']=$row->ALRT;
						$data['ALRW']=$row->ALRW;
						$data['NOTELP']=$row->NOTELP;
						$data['WIL']=$row->WIL;
						$data['KPOS']=$row->KPOS;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatKeluargaIbu($nip)
			{

				$querySQL = "SELECT rr.NIP, rr.NIBU, rr.TLAHIR, rr.TGLLAHIR, rr.KKERJA, rd.nama, rr.ALJALAN, rr.ALRT, rr.ALRW, rr.NOTELP, rr.WIL, rr.KPOS, rr.FLAG, rr.ALHP
				FROM riwayatIbu rr
				INNER JOIN daftarPekerjaan rd on rd.id = rr.KKERJA
				WHERE rr.NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPensiunKeluargaIbu: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['NIP']=$row->NIP;
						$data['NIBU']=$row->NIBU;
						$data['TLAHIR']=$row->TLAHIR;
						$data['TGLLAHIR']=$row->TGLLAHIR;
						$data['KKERJA']=$row->KKERJA;
						$data['nama']=$row->nama;
						$data['ALJALAN']=$row->ALJALAN;
						$data['ALRT']=$row->ALRT;
						$data['ALRW']=$row->ALRW;
						$data['NOTELP']=$row->NOTELP;
						$data['WIL']=$row->WIL;
						$data['KPOS']=$row->KPOS;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatKeluargaIbu2($nip)
			{

					$querySQL = "SELECT rr.NIP, rr.NIBU, rr.TLAHIR, rr.TGLLAHIR, rr.KKERJA, rd.nama, rr.ALJALAN, rr.ALRT, rr.ALRW, rr.NOTELP, rr.WIL, rr.KPOS
FROM riwayatIbu rr
LEFT JOIN daftarPekerjaan rd on rd.id = rr.KKERJA
WHERE rr.NIP = '$nip'";

					$data = array();
					$stackData = array();

					log_message('debug','getRiwayatKeluargaIbu: '.$querySQL);
					$query = $this->db->query($querySQL);

					if($query->num_rows()>0)
						{ $count = 1;
							foreach($query->result() as $row)
							{
								$data['NIP']=$row->NIP;
								$data['NIBU']=$row->NIBU;
								$data['TLAHIR']=$row->TLAHIR;
								$data['TGLLAHIR']=$row->TGLLAHIR;
								$data['nama']=$row->nama;
								$data['KKERJA']=$row->KKERJA;
								$data['ALJALAN']=$row->ALJALAN;
								$data['ALRT']=$row->ALRT;
								$data['ALRW']=$row->ALRW;
								$data['NOTELP']=$row->NOTELP;
								$data['WIL']=$row->WIL;
								$data['KPOS']=$row->KPOS;
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


			public function getRiwayatPensiunKeluargaIbu($nip)
			{

				$querySQL = "SELECT rr.NIP, rr.NIBU, rr.TLAHIR, rr.TGLLAHIR, rr.KKERJA, rd.nama, rr.ALJALAN, rr.ALRT, rr.ALRW, rr.NOTELP, rr.WIL, rr.KPOS, rr.FLAG, rr.ALHP
				FROM riwayatIbu rr
				INNER JOIN daftarPekerjaan rd on rd.id = rr.KKERJA
				WHERE rr.NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPensiunKeluargaIbu: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['NIP']=$row->NIP;
						$data['NIBU']=$row->NIBU;
						$data['TLAHIR']=$row->TLAHIR;
						$data['TGLLAHIR']=$row->TGLLAHIR;
						$data['KKERJA']=$row->KKERJA;
						$data['nama']=$row->nama;
						$data['ALJALAN']=$row->ALJALAN;
						$data['ALRT']=$row->ALRT;
						$data['ALRW']=$row->ALRW;
						$data['NOTELP']=$row->NOTELP;
						$data['WIL']=$row->WIL;
						$data['KPOS']=$row->KPOS;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}


						public function getRiwayatKeluargaSuamiIstri($nip)
						{

							$querySQL = "SELECT rr.NIP, rr.NISUA, rr.KTLAHIR, rr.TLAHIR, rr.TIJASAH, rr.TKAWIN, rr.STUNJ, rr.KKERJA, rd.nama, rr.ISAKHIR
					FROM riwayatSuamiIstri rr
					INNER JOIN daftarPekerjaan rd on rd.id = rr.KKERJA
					WHERE rr.NIP = '$nip'";

							$data = array();
							$stackData = array();

							log_message('debug','getRiwayatKeluargaSuamiIstri: '.$querySQL);
							$query = $this->db->query($querySQL);

							if($query->num_rows()>0)
							{ $count = 1;
								foreach($query->result() as $row)
								{
									$data['NIP']=$row->NIP;
									$data['NISUA']=$row->NISUA;
									$data['KTLAHIR']=$row->KTLAHIR;
									$data['TLAHIR']=$row->TLAHIR;
									$data['TIJASAH']=$row->TIJASAH;
									$data['TKAWIN']=$row->TKAWIN;
									$data['STUNJ']=$row->STUNJ;
									$data['KKERJA']=$row->KKERJA;
									$data['nama']=$row->nama;
									$data['ISAKHIR']=$row->ISAKHIR;
								}
								$query->free_result();
								return $data;
							}else
							{
								$query->free_result();
								return $data;
							}
						}

						public function getRiwayatKeluargaSuamiIstri2($nip)
{
		$querySQL = "SELECT rr.NIP, rr.NISUA, rr.KTLAHIR, rr.TLAHIR, rr.TIJASAH, rr.TKAWIN, rs.nama, rr.KKERJA, rd.nama as 'namapekerjaan', rt.statusAkhir
FROM riwayatSuamiIstri rr
LEFT JOIN daftarPekerjaan rd on rd.id = rr.KKERJA
LEFT JOIN statustunjangan rs on rs.STUNJ = rr.STUNJ
LEFT JOIN statusterakhir rt on rt.ISAKHIR = rr.ISAKHIR
WHERE rr.NIP = '$nip'";

		$data = array();
		$stackData = array();

		log_message('debug','getRiwayatKeluargaSuamiIstri: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data['NIP']=$row->NIP;
					$data['NISUA']=$row->NISUA;
					$data['KTLAHIR']=$row->KTLAHIR;
					$data['TLAHIR']=$row->TLAHIR;
					$data['TIJASAH']=$row->TIJASAH;
					$data['TKAWIN']=$row->TKAWIN;
					$data['nama']=$row->nama;
					$data['KKERJA']=$row->KKERJA;
					$data['namapekerjaan']=$row->namapekerjaan;
					$data['statusAkhir']=$row->statusAkhir;
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


			public function getRiwayatPensiunKeluargaSuamiIstri($nip)
			{

				$querySQL = "SELECT rr.NIP, rr.NISUA, rr.KTLAHIR, rr.TLAHIR, rr.TIJASAH, rr.TKAWIN, rr.STUNJ, rr.KKERJA, rd.nama, rr.ISAKHIR
		FROM riwayatSuamiIstri rr
		INNER JOIN daftarPekerjaan rd on rd.id = rr.KKERJA
		WHERE rr.NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPensiunKeluargaSuamiIstri: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['NIP']=$row->NIP;
						$data['NISUA']=$row->NISUA;
						$data['KTLAHIR']=$row->KTLAHIR;
						$data['TLAHIR']=$row->TLAHIR;
						$data['TIJASAH']=$row->TIJASAH;
						$data['TKAWIN']=$row->TKAWIN;
						$data['STUNJ']=$row->STUNJ;
						$data['KKERJA']=$row->KKERJA;
						$data['nama']=$row->nama;
						$data['ISAKHIR']=$row->ISAKHIR;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatKeluargaAnak($nip)
			{

				$querySQL = "SELECT ra.NIP, ra.NANAK, ra.TLAHIR, ra.TGLLAHIR, rj.NKELAMIN, ra.KELUARGA, ra.TUNJ, ra.TIJASAH, rd.nama
		FROM riwayatAnak ra
		INNER JOIN jenisKelamin rj on rj.KJKEL = ra.KJKEL
		INNER JOIN daftarPekerjaan rd on rd.id = ra.KKERJA
		WHERE ra.NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatKeluargaAnak: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['NIP']=$row->NIP;
						$data['NANAK']=$row->NANAK;
						$data['TLAHIR']=$row->TLAHIR;
						$data['TGLLAHIR']=$row->TGLLAHIR;
						$data['NKELAMIN']=$row->NKELAMIN;
						$data['KELUARGA']=$row->KELUARGA;
						$data['TUNJ']=$row->TUNJ;
						$data['TIJASAH']=$row->TIJASAH;
						$data['nama']=$row->nama;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatKeluargaAnak2($nip)
			{

					$querySQL = "SELECT ra.NIP, ra.NANAK, ra.TLAHIR, ra.TGLLAHIR, rj.NKELAMIN, rh.ketkeluarga, rs.nama as 'tunjangan', ra.TIJASAH, rd.nama
FROM riwayatAnak ra
INNER JOIN jenisKelamin rj on rj.KJKEL = ra.KJKEL
INNER JOIN daftarPekerjaan rd on rd.id = ra.KKERJA
LEFT JOIN statustunjangan rs on rs.STUNJ = ra.TUNJ
LEFT JOIN hubungankeluarga rh on rh.KELUARGA = ra.KELUARGA
WHERE ra.NIP =  '$nip'";

					$data = array();
					$stackData = array();

					log_message('debug','getRiwayatKeluargaAnak: '.$querySQL);
					$query = $this->db->query($querySQL);

					if($query->num_rows()>0)
						{ $count = 1;
							foreach($query->result() as $row)
							{
								$data['NIP']=$row->NIP;
								$data['NANAK']=$row->NANAK;
								$data['TLAHIR']=$row->TLAHIR;
								$data['TGLLAHIR']=$row->TGLLAHIR;
								$data['NKELAMIN']=$row->NKELAMIN;
								$data['ketkeluarga']=$row->ketkeluarga;
								$data['tunjangan']=$row->tunjangan;
								$data['TIJASAH']=$row->TIJASAH;
								$data['nama']=$row->nama;
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

			public function getRiwayatPensiunKeluargaAnak($nip)
			{

				$querySQL = "SELECT ra.NIP, ra.NANAK, ra.TLAHIR, ra.TGLLAHIR, rj.NKELAMIN, ra.KELUARGA, ra.TUNJ, ra.TIJASAH, rd.nama
		FROM riwayatAnak ra
		INNER JOIN jenisKelamin rj on rj.KJKEL = ra.KJKEL
		INNER JOIN daftarPekerjaan rd on rd.id = ra.KKERJA
		WHERE ra.NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPensiunKeluargaAnak: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['NIP']=$row->NIP;
						$data['NANAK']=$row->NANAK;
						$data['TLAHIR']=$row->TLAHIR;
						$data['TGLLAHIR']=$row->TGLLAHIR;
						$data['NKELAMIN']=$row->NKELAMIN;
						$data['KELUARGA']=$row->KELUARGA;
						$data['TUNJ']=$row->TUNJ;
						$data['TIJASAH']=$row->TIJASAH;
						$data['nama']=$row->nama;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatPendidikanUmum($nip)
			{

				$querySQL = "SELECT rp.nip, rp.ktpu, rp.KJUR, rp.npdum, rp.namaSekolah, rp.tempat, rp.nkepsek, rp.nomorIjazah, rp.tglTahunLulus, rs.statusAkhir
											FROM pendidikan rp
											INNER JOIN statusterakhir rs on rs.ISAKHIR = rp.isPendidikanTerakhir
											WHERE rp.NIP = '$nip'
											ORDER BY rp.tglTahunLulus DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanUmum: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['nip']=$row->nip;
						$data['ktpu']=$row->ktpu;
						$data['KJUR']=$row->KJUR;
						$data['npdum']=$row->npdum;
						$data['namaSekolah']=$row->namaSekolah;
						$data['tempat']=$row->tempat;
						$data['nkepsek']=$row->nkepsek;
						$data['nomorIjazah']=$row->nomorIjazah;
						$data['tglTahunLulus']=$row->tglTahunLulus;
						$data['statusAkhir']=$row->statusAkhir;
						array_push($stackData,$data);

					}
					$query->free_result();
					return $stackData;
				}else
				{
					$query->free_result();
					return $stackData;
				}
			}

			public function getRiwayatPendidikanUmum2($nip)
			{

				$querySQL = "SELECT rp.nip, rt.ntp, rp.npdum, rp.namaSekolah, rp.tempat, rp.nkepsek, rp.nomorIjazah, rp.tglTahunLulus, rj.NJUR, rs.statusAkhir
FROM pendidikan rp
LEFT JOIN jurpendidikan rj on rj.KJUR = rp.ktpukjur
LEFT JOIN tingpend rt on rt.ktp = rj.tp
LEFT JOIN statusterakhir rs on rs.ISAKHIR = rp.isPendidikanTerakhir
WHERE rp.NIP = '$nip' ORDER BY rp.tglTahunLulus DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanUmum: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['nip']=$row->nip;
						$data['ntp']=$row->ntp;
						$data['npdum']=$row->npdum;
						$data['namaSekolah']=$row->namaSekolah;
						$data['tempat']=$row->tempat;
						$data['nkepsek']=$row->nkepsek;
						$data['namaSekolah']=$row->namaSekolah;
						$data['tempat']=$row->tempat;
						$data['nkepsek']=$row->nkepsek;
						$data['nomorIjazah']=$row->nomorIjazah;
						$data['tglTahunLulus']=$row->tglTahunLulus;
						$data['NJUR']=$row->NJUR;
						$data['statusAkhir']=$row->statusAkhir;
						array_push($stackData,$data);

					}
					$query->free_result();
					return $stackData;
				}else
				{
					$query->free_result();
					return $stackData;
				}
			}


			public function getRiwayatPendidikanStruktural($nip)
			{

				$querySQL = "SELECT rj.nama, rr.NIP, rr.kFungStrTek, rr.namaDiklat, rr.TEMPAT, rr.PAN, rr.ANGKATAN, rr.TMULAI, rr.TAKHIR, rr.JAM, rr.NSTTPP, rr.TSTTPP, rr.ISAKHIR
FROM riwayatdiklat rr
INNER JOIN jenisDiklat rj on rj.kode = rr.kodeJenisDiklat
WHERE rr.NIP = '$nip' AND rr.kodeJenisDiklat = 2
ORDER BY rr.TAKHIR DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanStruktural: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['nama']=$row->nama;
						$data['NIP']=$row->NIP;
						$data['namaDiklat']=$row->namaDiklat;
						$data['TEMPAT']=$row->TEMPAT;
						$data['PAN']=$row->PAN;
						$data['ANGKATAN']=$row->ANGKATAN;
						$data['TMULAI']=$row->TMULAI;
						$data['TAKHIR']=$row->TAKHIR;
						$data['JAM']=$row->JAM;
						$data['NSTTPP']=$row->NSTTPP;
						$data['TSTTPP']=$row->TSTTPP;
						$data['ISAKHIR']=$row->ISAKHIR;
						array_push($stackData,$data);
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}


						public function getRiwayatPendidikanStruktural2($nip)
						{

							$querySQL = "SELECT rj.nama, rr.NIP, rr.kFungStrTek, rr.namaDiklat, rr.TEMPAT, rr.PAN, rr.ANGKATAN, rr.TMULAI, rr.TAKHIR, rr.JAM, rr.NSTTPP, rr.TSTTPP, rs.statusAkhir
			FROM riwayatdiklat rr
			INNER JOIN jenisDiklat rj on rj.kode = rr.kodeJenisDiklat
			LEFT JOIN statusterakhir rs on rs.ISAKHIR = rr.ISAKHIR
			WHERE rr.NIP = '$nip' AND rr.kodeJenisDiklat = 2";

							$data = array();
							$stackData = array();

							log_message('debug','getRiwayatPendidikanStruktural2: '.$querySQL);
							$query = $this->db->query($querySQL);


							if($query->num_rows()>0)
							{ $count = 1;
								foreach($query->result() as $row)
								{
									$data['nama']=$row->nama;
									$data['NIP']=$row->NIP;
									$data['kFungStrTek']=$row->kFungStrTek;
									$data['namaDiklat']=$row->namaDiklat;
									$data['TEMPAT']=$row->TEMPAT;
									$data['PAN']=$row->PAN;
									$data['ANGKATAN']=$row->ANGKATAN;
									$data['TMULAI']=$row->TMULAI;
									$data['TAKHIR']=$row->TAKHIR;
									$data['JAM']=$row->JAM;
									$data['NSTTPP']=$row->NSTTPP;
									$data['TSTTPP']=$row->TSTTPP;
									$data['statusAkhir']=$row->statusAkhir;
									array_push($stackData,$data);

								}
								$query->free_result();
								return $stackData;
							}else
							{
								$query->free_result();
								return $stackData;
							}
						}


			public function getRiwayatPendidikanFungsional($nip)
			{

				$querySQL = "SELECT rj.nama, rr.NIP, rr.kFungStrTek, rr.namaDiklat, rr.TEMPAT, rr.PAN, rr.ANGKATAN, rr.TMULAI, rr.TAKHIR, rr.JAM, rr.NSTTPP, rr.TSTTPP, rr.ISAKHIR
FROM riwayatdiklat rr
INNER JOIN jenisDiklat rj on rj.kode = rr.kodeJenisDiklat
WHERE rr.NIP = '$nip' AND rr.kodeJenisDiklat = 1
ORDER BY rr.TAKHIR DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanFungsional: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['nama']=$row->nama;
						$data['NIP']=$row->NIP;
						$data['namaDiklat']=$row->namaDiklat;
						$data['TEMPAT']=$row->TEMPAT;
						$data['PAN']=$row->PAN;
						$data['ANGKATAN']=$row->ANGKATAN;
						$data['TMULAI']=$row->TMULAI;
						$data['TAKHIR']=$row->TAKHIR;
						$data['JAM']=$row->JAM;
						$data['NSTTPP']=$row->NSTTPP;
						$data['TSTTPP']=$row->TSTTPP;
						$data['ISAKHIR']=$row->ISAKHIR;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatPendidikanFungsional2($nip)
			{

				$querySQL = "SELECT rj.nama, rr.NIP, rr.kFungStrTek, rr.namaDiklat, rr.TEMPAT, rr.PAN, rr.ANGKATAN, rr.TMULAI, rr.TAKHIR, rr.JAM, rr.NSTTPP, rr.TSTTPP, rs.statusAkhir
FROM riwayatdiklat rr
INNER JOIN jenisDiklat rj on rj.kode = rr.kodeJenisDiklat
LEFT JOIN statusterakhir rs on rs.ISAKHIR = rr.ISAKHIR
WHERE rr.NIP = '$nip' AND rr.kodeJenisDiklat = 1";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanFungsional: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['nama']=$row->nama;
						$data['NIP']=$row->NIP;
						$data['kFungStrTek']=$row->kFungStrTek;
						$data['namaDiklat']=$row->namaDiklat;
						$data['TEMPAT']=$row->TEMPAT;
						$data['PAN']=$row->PAN;
						$data['ANGKATAN']=$row->ANGKATAN;
						$data['TMULAI']=$row->TMULAI;
						$data['TAKHIR']=$row->TAKHIR;
						$data['JAM']=$row->JAM;
						$data['NSTTPP']=$row->NSTTPP;
						$data['TSTTPP']=$row->TSTTPP;
						$data['statusAkhir']=$row->statusAkhir;
						array_push($stackData,$data);

					}
					$query->free_result();
					return $stackData;
				}else
				{
					$query->free_result();
					return $stackData;
				}
			}


			public function getRiwayatPendidikanTeknis($nip)
			{

				$querySQL = "SELECT rj.nama, rr.NIP, rr.kFungStrTek, rr.namaDiklat, rr.TEMPAT, rr.PAN, rr.ANGKATAN, rr.TMULAI, rr.TAKHIR, rr.JAM, rr.NSTTPP, rr.TSTTPP, rr.ISAKHIR
FROM riwayatdiklat rr
INNER JOIN jenisDiklat rj on rj.kode = rr.kodeJenisDiklat
WHERE rr.NIP = '$nip' AND rr.kodeJenisDiklat = 3
ORDER BY rr.TAKHIR DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanTeknis: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['nama']=$row->nama;
						$data['NIP']=$row->NIP;
						$data['namaDiklat']=$row->namaDiklat;
						$data['TEMPAT']=$row->TEMPAT;
						$data['PAN']=$row->PAN;
						$data['ANGKATAN']=$row->ANGKATAN;
						$data['TMULAI']=$row->TMULAI;
						$data['TAKHIR']=$row->TAKHIR;
						$data['JAM']=$row->JAM;
						$data['NSTTPP']=$row->NSTTPP;
						$data['TSTTPP']=$row->TSTTPP;
						$data['ISAKHIR']=$row->ISAKHIR;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatPendidikanTeknis2($nip)
			{

				$querySQL = "SELECT rj.nama, rr.NIP, rr.kFungStrTek, rr.namaDiklat, rr.TEMPAT, rr.PAN, rr.ANGKATAN, rr.TMULAI, rr.TAKHIR, rr.JAM, rr.NSTTPP, rr.TSTTPP, rs.statusAkhir
FROM riwayatdiklat rr
LEFT JOIN jenisDiklat rj on rj.kode = rr.kodeJenisDiklat
LEFT JOIN statusterakhir rs on rs.ISAKHIR = rr.ISAKHIR
WHERE rr.NIP = '$nip' AND rr.kodeJenisDiklat = 3";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanTeknis: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['nama']=$row->nama;
						$data['NIP']=$row->NIP;
						$data['kFungStrTek']=$row->kFungStrTek;
						$data['namaDiklat']=$row->namaDiklat;
						$data['TEMPAT']=$row->TEMPAT;
						$data['PAN']=$row->PAN;
						$data['ANGKATAN']=$row->ANGKATAN;
						$data['TMULAI']=$row->TMULAI;
						$data['TAKHIR']=$row->TAKHIR;
						$data['JAM']=$row->JAM;
						$data['NSTTPP']=$row->NSTTPP;
						$data['TSTTPP']=$row->TSTTPP;
						$data['statusAkhir']=$row->statusAkhir;
						array_push($stackData,$data);

					}
					$query->free_result();
					return $stackData;
				}else
				{
					$query->free_result();
					return $stackData;
				}
			}

			public function getRiwayatPendidikanPenataran($nip)
			{

				$querySQL = "SELECT NIP, NTATAR, TEMPAT, PAN, TMULAI, TAKHIR, JAM, NPIAGAM, TPIAGAM
FROM riwayatPenataran
WHERE NIP = '$nip'";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanPenataran: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['NIP']=$row->NIP;
						$data['NTATAR']=$row->NTATAR;
						$data['TEMPAT']=$row->TEMPAT;
						$data['PAN']=$row->PAN;
						$data['TMULAI']=$row->TMULAI;
						$data['TAKHIR']=$row->TAKHIR;
						$data['JAM']=$row->JAM;
						$data['NPIAGAM']=$row->NPIAGAM;
						$data['TPIAGAM']=$row->TPIAGAM;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatPendidikanPenataran2($nip)
			{

				$querySQL = "SELECT NIP, NTATAR, TEMPAT, PAN, TMULAI, TAKHIR, JAM, NPIAGAM, TPIAGAM
FROM riwayatPenataran
WHERE NIP = '$nip' ORDER BY TAKHIR DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanPenataran: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['NIP']=$row->NIP;
						$data['NTATAR']=$row->NTATAR;
						$data['TEMPAT']=$row->TEMPAT;
						$data['PAN']=$row->PAN;
						$data['TMULAI']=$row->TMULAI;
						$data['TAKHIR']=$row->TAKHIR;
						$data['JAM']=$row->JAM;
						$data['NPIAGAM']=$row->NPIAGAM;
						$data['TPIAGAM']=$row->TPIAGAM;
						array_push($stackData,$data);

					}
					$query->free_result();
					return $stackData;
				}else
				{
					$query->free_result();
					return $stackData;
				}
			}


			public function getRiwayatPendidikanSeminar($nip)
			{

				$querySQL = "SELECT NIP, NSEMINAR, TEMPAT, PAN, TMULAI, TAKHIR, JAM, NPIAGAM, TPIAGAM
FROM riwayatSeminar
WHERE NIP = '$nip' ORDER BY TAKHIR DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanSeminar: '.$querySQL);
				$query = $this->db->query($querySQL);

				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['NIP']=$row->NIP;
						$data['NSEMINAR']=$row->NSEMINAR;
						$data['TEMPAT']=$row->TEMPAT;
						$data['PAN']=$row->PAN;
						$data['TMULAI']=$row->TMULAI;
						$data['TAKHIR']=$row->TAKHIR;
						$data['JAM']=$row->JAM;
						$data['NPIAGAM']=$row->NPIAGAM;
						$data['TPIAGAM']=$row->TPIAGAM;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatPendidikanSeminar2($nip)
{

	$querySQL = "SELECT NIP, NSEMINAR, TEMPAT, PAN, TMULAI, TAKHIR, JAM, NPIAGAM, TPIAGAM
FROM riwayatSeminar
WHERE NIP = '$nip' ORDER BY TAKHIR DESC";

	$data = array();
	$stackData = array();

	log_message('debug','getRiwayatPendidikanSeminar: '.$querySQL);
	$query = $this->db->query($querySQL);


	if($query->num_rows()>0)
	{ $count = 1;
		foreach($query->result() as $row)
		{
			$data['NIP']=$row->NIP;
			$data['NSEMINAR']=$row->NSEMINAR;
			$data['TEMPAT']=$row->TEMPAT;
			$data['PAN']=$row->PAN;
			$data['TMULAI']=$row->TMULAI;
			$data['TAKHIR']=$row->TAKHIR;
			$data['JAM']=$row->JAM;
			$data['NPIAGAM']=$row->NPIAGAM;
			$data['TPIAGAM']=$row->TPIAGAM;
			array_push($stackData,$data);

		}
		$query->free_result();
		return $stackData;
	}else
	{
		$query->free_result();
		return $stackData;
	}
}


			public function getRiwayatPendidikanKursus($nip)
			{

				$querySQL = "SELECT nip, namaKursus, tempat, institusiPenyelenggara, tanggalKursus, tanggalAkhirKursus, jumlahJam, npiagam, tpiagam
FROM riwayatkursus
WHERE nip = '$nip' ORDER BY tanggalAkhirKursus DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanKursus: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['nip']=$row->nip;
						$data['namaKursus']=$row->namaKursus;
						$data['tempat']=$row->tempat;
						$data['institusiPenyelenggara']=$row->institusiPenyelenggara;
						$data['tanggalKursus']=$row->tanggalKursus;
						$data['tanggalAkhirKursus']=$row->tanggalAkhirKursus;
						$data['jumlahJam']=$row->jumlahJam;
						$data['npiagam']=$row->npiagam;
						$data['tpiagam']=$row->tpiagam;
					}
					$query->free_result();
					return $data;
				}else
				{
					$query->free_result();
					return $data;
				}
			}

			public function getRiwayatPendidikanKursus2($nip)
			{

				$querySQL = "SELECT nip, namaKursus, tempat, institusiPenyelenggara, tanggalKursus, tanggalAkhirKursus, jumlahJam, npiagam, tpiagam
FROM riwayatkursus
WHERE nip = '$nip' ORDER BY tanggalAkhirKursus DESC";

				$data = array();
				$stackData = array();

				log_message('debug','getRiwayatPendidikanKursus: '.$querySQL);
				$query = $this->db->query($querySQL);


				if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['nip']=$row->nip;
						$data['namaKursus']=$row->namaKursus;
						$data['tempat']=$row->tempat;
						$data['institusiPenyelenggara']=$row->institusiPenyelenggara;
						$data['tanggalKursus']=$row->tanggalKursus;
						$data['tanggalAkhirKursus']=$row->tanggalAkhirKursus;
						$data['jumlahJam']=$row->jumlahJam;
						$data['npiagam']=$row->npiagam;
						$data['tpiagam']=$row->tpiagam;
						array_push($stackData,$data);

					}
					$query->free_result();
					return $stackData;
				}else
				{
					$query->free_result();
					return $stackData;
				}
			}


		public function getStlud()
		{

		$querySQL = "SELECT * FROM stlud";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getRelationStatus	: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['kode']=$row->KSTLUD;
					$data['nama']=$row->NSTLUD;

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

		$querySQL = "SELECT * FROM jenisgolongan";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getJenisGolongan	: '.$querySQL);
		$query = $this->db->query($querySQL);

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
		public function getJenisGolDarah()
		{

		$querySQL = "SELECT * FROM golongandarah";

		$dataRet = array();
		$stackData = array();

		log_message('debug','golongandarah	: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['KGOLDAR']=$row->KGOLDAR;
					$data['NGOLDAR']=$row->NGOLDAR;
					$data['id']=$row->id;

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

		$querySQL = "SELECT * FROM jenispegawai";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getJenisPegawai	: '.$querySQL);
		$query = $this->db->query($querySQL);

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

		$querySQL = "SELECT * FROM pejabatmenetapkan";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getJenisPejabatMenetapkan	: '.$querySQL);
		$query = $this->db->query($querySQL);

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

		$querySQL = "SELECT * FROM statuspegawai";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getStatusPegawai	: '.$querySQL);
		$query = $this->db->query($querySQL);

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

		$querySQL = "SELECT * FROM kedudukanpegawai";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getKedudukanPegawai	: '.$querySQL);
		$query = $this->db->query($querySQL);

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

		$querySQL = "SELECT * FROM agama";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getAgama	: '.$querySQL);
		$query = $this->db->query($querySQL);

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

		$querySQL = "SELECT * FROM jeniskelamin";

		$data = array();
		$stackData = array();

		log_message('debug','getJenisKelamin	: '.$querySQL);
		$query = $this->db->query($querySQL);

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


    $querySQL = "select count(*) as total
                  from datautama du
                  left join jakhir ja on du.nipBaru = ja.nip
                  left join unkerja k1 on k1.kunker = ja.kunkers
                  left join unkerja k2 on k2.kunker = ja.kunkersInduk
                  where du.kedudukanHukum=1 and du.statusHidupPensiunPindah =1  and ja.jnsjab=1 and MONTH(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = MONTH(NOW()) and day(STR_TO_DATE(DU.TLAHIR, '%Y-%m-%d')) = day(NOW()) and
                  du.nama like '%$searchColumn%' ";


      log_message('debug','Query TotalCountRow GetPegawaiUmum :'.$querySQL);
      $query = $this->db->query($querySQL);

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

      log_message('debug','Query getCurrentBirthday :  '.$querySQL);

      $stackData = array();
      $query = $this->db->query($querySQL);

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
          return null;
        }
    }
		public function getDocumentTypeById($id)
		{

			$querySQL = "select * from document_type where id = '$id' ";

			$data = array();
			$stackData = array();

			log_message('debug','document_type: '.$querySQL);
			$query = $this->db->query($querySQL);

			if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['id']=$row->id;
						$data['name']=$row->name;
						$data['alias']=$row->alias;
						$data['kode']=$row->kode;
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

		public function getDocumentFolderById($id,$noFolder)
		{

			$querySQL = "select * from document_folder_$noFolder where id = '$id' ";

			$data = array();
			$stackData = array();

			log_message('debug','document_type: '.$querySQL);
			$query = $this->db->query($querySQL);

			if($query->num_rows()>0)
				{ $count = 1;
					foreach($query->result() as $row)
					{
						$data['id']=$row->id;
						$data['name']=$row->name;
						$data['alias']=$row->alias;
						$data['kode']=$row->kode;
					 // array_push($stackData,$data);
					}
					$query->free_result();
					return $data;
				}else
				{

					$query->free_result();
					return $data;
				}
		}

		public function getAllPNS()
		{

		$querySQL = "SELECT  d.nipBaru,d.Nama,k2.nunker as Instansi,REPLACE(d.TLAHIR, '-', '')as password,d.nomorTelpon FROM datautama d
							  left join jakhir ja on d.nipBaru = ja.nip
								left join unkerja k2 on k2.kunker = ja.kunkersInduk
							 	where d.kedudukanHukum=1 and d.statusHidupPensiunPindah=1;";

		$dataRet = array();
		$stackData = array();

		log_message('debug','getAllPNS	: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$data['nipBaru']=$row->nipBaru;
					$data['nama']=$row->nama;
					$data['instansi']=$row->instansi;
					$data['tlahir']=$row->tlahir;


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
		public function getIdInstansiByName($name)
		{

		$querySQL = "SELECT * FROM simpegnew.instansi where instansi_name like '%$name%'";

		$id=0;

		log_message('debug','getIdInstansiByName	: '.$querySQL);
		$query = $this->db->query($querySQL);

		if($query->num_rows()>0)
			{ $count = 1;
				foreach($query->result() as $row)
				{
					$data = array();
					$id=$row->instansi_id;




				}
				$query->free_result();
				return $id;
			}else
			{

				$query->free_result();
				return $id;
			}
		}

}
