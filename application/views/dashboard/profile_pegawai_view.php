<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
     $('#birthday').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "dashboard/getCurrentDayBirthday"
        } );

   });

</script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="fa fa-dashboard"></i> Dashboard

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Dashboard</li>
        <li class="active">Profile Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
          <div class="col-md-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Profile Pegawai</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">

                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Data Induk</a></li>
                                  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Riwayat Pegawai</a></li>
                                  <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Riwayat Pendidikan</a></li>
                                  <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Riwayat Keluarga</a></li>

                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="tab_1">

                                    <ul class="nav nav-tabs">
                                      <li class=""><a href="#Identitas" data-toggle="tab" aria-expanded="true">Identitas</a></li>
                                      <li class=""><a href="#CPNS" data-toggle="tab" aria-expanded="true">CPNS/PNS</a></li>
                                      <li class=""><a href="#Pangkat_terakhir" data-toggle="tab" aria-expanded="false">Pangkat Terakhir</a></li>
                                      <li class=""><a href="#Gaji_berkala" data-toggle="tab" aria-expanded="false">Gaji Berkala</a></li>
                                      <li class=""><a href="#Pendidikan_terakhir" data-toggle="tab" aria-expanded="false">Pendidikan Terakhir</a></li>
                                      <li class=""><a href="#Tempat" data-toggle="tab" aria-expanded="false">Tempat</a></li>
                                      <li class=""><a href="#Jabatan_terakhir" data-toggle="tab" aria-expanded="false">Jabatan Terakhir</a></li>
                                    </ul>
                                    <!-- /.tab-pane -->
                                    <div class="tab-content">
                                          <div class="tab-pane" id="Identitas">
                                            <div class="box-body">
                                              <div class="row">
                                                <div class="col-md-8">
                                                                  <p class="text-center">
                                                                    <strong>Identitas</strong>
                                                                  </p>

                                                      <form class="form-horizontal">
                                                        <div class="box-body">
                                                          <div class="col-md-4">
                                                          <div class="form-group">
                                                            <label for="inputEmail3" class="col-md-4 control-label">NIP</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="inputEmail3" placeholder="NIP">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="inputPassword3" class="col-md-4 control-label">NIP Lama</label>

                                                          <div class="col-md-8">
                                                              <input class="form-control" id="inputPassword3" placeholder="NIP Lama">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="nama" class="col-md-4 control-label">Nama</label>

                                                          <div class="col-md-8">
                                                              <input class="form-control" id="nama" placeholder="Nama">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="gelarDepan" class="col-md-4 control-label">Gelar Depan</label>

                                                          <div class="col-md-8">
                                                              <input class="form-control" id="gelarDepan" placeholder="Gelar Depan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="gelarBelakang" class="col-md-4 control-label">Gelar Belakang</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="gelarBelakang" placeholder="gelarBelakang">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tempatLahir" class="col-md-4 control-label">Tempat Lahir</label>

                                                          <div class="col-md-8">
                                                              <input class="form-control" id="tempatLahir" placeholder="Tempat Lahir">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tanggalLahir" class="col-md-4 control-label">Tanggal Lahir</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tanggalLahir" placeholder="tanggalLahir">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="jeniKelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="jenisKelamin" placeholder="Jenis Kelamin">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="agama" class="col-md-4 control-label">Agama</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="agama" placeholder="Agama">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="statusNikah" class="col-md-4 control-label">Status Nikah</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="statusNikah" placeholder="Status Nikah">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="golonganDarah" class="col-md-4 control-label">Golongan Darah</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="golonganDarah" placeholder="Golongan Darah">
                                                            </div>
                                                          </div>


                                                        </div>
                                                        <div class="col-md-6">

                                                          <div class="form-group">
                                                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="alamat" placeholder="Alamat">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="rtrw" class="col-md-4 control-label">RT/RW</label>

                                                            <div class="col-md-2">
                                                              <input class="form-control" id="rt" placeholder="RT">
                                                            </div>
                                                            <div class="col-md-2">
                                                              <input class="form-control" id="rw" placeholder="RW">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="telepon" class="col-md-4 control-label">Telepon</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="telepon" placeholder="Telepon">
                                                            </div>

                                                          </div>
                                                          <div class="form-group">
                                                            <label for="kodePos" class="col-md-4 control-label">Kode Pos</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="kodePos" placeholder="Kode Pos">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="nomorKarpeg" class="col-md-4 control-label">No KARPEG</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="nomorKarpeg" placeholder="No Karpeg">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="noTaspen" class="col-md-4 control-label">noTaspen</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noTaspen" placeholder="noTaspen">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="noAskes" class="col-md-4 control-label">noAskes</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noAskes" placeholder="noAskes">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="noKarisSU" class="col-md-4 control-label">No KARIS/SU</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noKarissu" placeholder="No Karis/SU">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="statusKepegawaian" class="col-sm-4 control-label">Status Kepegawaian</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="statusKepegawaian" placeholder="Status Kepegawaian">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="npwp" class="col-md-4 control-label">npwp</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="npwp" placeholder="NPWP">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noKTP" class="col-md-4 control-label">No KTP</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noKTP" placeholder="noKTP">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="jenisKepegawaian" class="col-md-4 control-label">Jenis Kepegawaian</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="jenisKepegawaian" placeholder="jenisKepegawaian">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kedudukanPegawai" class="col-md-4 control-label">Kedudukan Pegawai</label>

                                                            <div class="col-md-8">
                                                              <input class="form-control" id="agama" placeholder="Agama">
                                                            </div>
                                                          </div>

                                                        </div>
                                                        </div>

                                                        <!-- /.box-body -->
                                                        <div class="box-footer">
                                                          <button type="submit" class="btn btn-default">Cancel</button>
                                                          <button type="submit" class="btn btn-info pull-right">Sign in</button>
                                                        </div>
                                                        <!-- /.box-footer -->
                                                      </form>
                                                </div>
                                                <div class="col-md-2">
                                                                  <p class="text-center">
                                                                    <strong>Foto</strong>
                                                                  </p>

                                                                  <img class="img-responsive" src="https://www.w3schools.com/bootstrap/img_chania.jpg" alt="Chania" width="460" height="345">
                                                                  <!-- /.chart-responsive -->
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!-- /.tab-pane -->
                                          <div class="tab-pane" id="CPNS">
                                            <div class="box-body">
                                              <div class="row">
                                                <div class="col-md-7">
                                                                  <p class="text-center">
                                                                    <strong>CPNS</strong>
                                                                  </p>

                                                      <form class="form-horizontal">
                                                        <div class="box-body">
                                                          <div class="col-md-4">

                                                            <div class="form-group">
                                                              <label for="NIP" class="col-md-4 control-label">NIP</label>
                                                              <div class="col-md-8">
                                                                <input class="form-control" id="NIP" placeholder="NIP">
                                                              </div>
                                                            </div>

                                                        <div class="form-group">
                                                          <label for="notaBKN" class="col-md-4 control-label">Nota BKN</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="notaBKN" placeholder="Nota BKN">
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="tglNotaBKN" class="col-md-4 control-label">Tanggal Nota BKN</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="tglNotaBKN" placeholder="Tanggal Nota BKN">
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="pejabatMenetapkan" class="col-md-4 control-label">Yang Menetapkan</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="pejabatMenetapkan" placeholder="Pejabat Yang Menetapkan">
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="noSKCPNS" class="col-md-4 control-label">No SK CPNS</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="noSKCPNS" placeholder="No SK CPNS">
                                                          </div>
                                                        </div>
                                                        </div>

                                                        <div class="col-md-6">

                                                          <div class="form-group">
                                                            <label for="tanggalSKCPNS" class="col-md-4 control-label">Tanggal SK CPNS</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tanggalSKCPNS" placeholder="TAnggal SK CPNS">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tmtCPNS" class="col-md-4 control-label">tmtCPNS</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tmtCPNS" placeholder="Tamat CPNS">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="golonganRuang" class="col-md-4 control-label">Golongan Ruang</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="golonganRuang" placeholder="golonganRuang">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noSTTP" class="col-md-4 control-label">noSTTP</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noSTTP" placeholder="No STTP">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tmtTugas" class="col-md-4 control-label">Tamat Tugas</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tmtTugas" placeholder="Tamat Tugas">
                                                            </div>
                                                          </div>

                                                        </div>
                                                        </div>

                                                        <!-- /.box-body -->
                                                        <div class="box-footer">
                                                          <button type="submit" class="btn btn-default">Cancel</button>
                                                          <button type="submit" class="btn btn-default">Edit</button>
                                                          <button type="submit" class="btn btn-info">Submit</button>
                                                        </div>
                                                        <!-- /.box-footer -->
                                                      </form>
                                                </div>
                                                <div class="col-md-4">
                                                                  <p class="text-center">
                                                                    <strong>PNS</strong>
                                                                  </p>
                                                                  <form class="form-horizontal">
                                                                    <div class="box-body">
                                                                        <div class="form-group">
                                                                          <label for="pejabatMenetapkanPNS" class="col-md-4 control-label">Pejabat Yang Menetapkan</label>
                                                                          <div class="col-md-8">
                                                                            <input class="form-control" id="inputEmail3" placeholder="Pejabat Yang Menetapkan">
                                                                          </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="noSKPNS" class="col-md-4 control-label">No SK PNS</label>
                                                                          <div class="col-md-8">
                                                                            <input class="form-control" id="noSKPNS" placeholder="No SK PNS">
                                                                          </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="tglSKPNS" class="col-md-4 control-label">Tanggal SK PNS</label>
                                                                          <div class="col-md-8">
                                                                            <input class="form-control" id="tglSKPNS" placeholder="Tanggal SK PNS">
                                                                          </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="tmtPNS" class="col-md-4 control-label">TMT PNS</label>
                                                                          <div class="col-md-8">
                                                                            <input class="form-control" id="tmtPNS" placeholder="TMT PNS">
                                                                          </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="golRuangPNS" class="col-md-4 control-label">Golongan Ruang PNS</label>
                                                                          <div class="col-md-8">
                                                                            <input class="form-control" id="golRuangPNS" placeholder="Golongan Ruang PNS">
                                                                          </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label for="sumpahPNS" class="col-md-4 control-label">sumpahPNS</label>
                                                                          <div class="col-md-8">
                                                                            <input class="form-control" id="sumpahPNS" placeholder="Sumpah PNS">
                                                                          </div>
                                                                        </div>







                                                                    </div>
                                                                  </form>

                                                                  <!-- /.chart-responsive -->
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="tab-pane" id="Pangkat_terakhir">
                                            44444444444444444
                                          </div>
                                          <div class="tab-pane" id="Gaji_berkala">
                                          5555555555555555555
                                          </div>
                                          <div class="tab-pane" id="Pendidikan_terakhir">
                                          ISISISIS
                                          </div>
                                          <div class="tab-pane" id="Tempat">
                                          ISISISIS
                                          </div>
                                          <div class="tab-pane" id="Jabatan_terakhir">
                                          ISISISIS
                                          </div>
                                        </div>
                                  </div>
                                  <!-- /.tab-pane -->
                                  <div class="tab-pane" id="tab_2">

                                  </div>
                                  <!-- /.tab-pane -->
                                  <div class="tab-pane" id="tab_3">

                                  </div>
                                  <!-- /.tab-pane -->
                                  <div class="tab-pane active" id="tab_4">

                                  </div>
                                </div>
                                <!-- /.tab-content -->
                              </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>



     </div>



    </div>
