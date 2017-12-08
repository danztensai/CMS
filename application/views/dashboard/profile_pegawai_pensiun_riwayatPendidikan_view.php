<style>
.scroll{
  height:300px;
  overflow-y:scroll;
}

</style>
<style>
.intrinsic-container {
  position: relative;
  height: 0;
  overflow: hidden;
}

/* 16x9 Aspect Ratio */
.intrinsic-container-16x9 {
  padding-bottom: 56.25%;
}

/* 4x3 Aspect Ratio */
.intrinsic-container-4x3 {
  padding-bottom: 75%;
}

.intrinsic-container iframe {
  position: absolute;
  top:0;
  left: 0;
  width: 100%;
  height: 100%;
}</style>

<style>
.scroll{
  height:800px;
overflow-y:scroll;
}
.row-bordered:after {
  content: "";
  display: block;
  border-bottom: 2px solid #ccc;
  margin:  15px;
}
</style>

<div class="tab-pane" id="riwayatPendidikan">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#pendidikanUmum" data-toggle="tab">Umum</a></li>
      <li><a href="#pendidikanFungsional" data-toggle="tab">Fungsional</a></li>
      <li><a href="#pendidikanStruktural" data-toggle="tab">Struktural</a></li>
      <li><a href="#pendidikanTeknis" data-toggle="tab">Teknis</a></li>
      <li><a href="#pendidikanPenataran" data-toggle="tab">Penataran</a></li>
      <li><a href="#pendidikanSeminar" data-toggle="tab">Seminar</a></li>
      <li><a href="#pendidikanKursus" data-toggle="tab">Kursus</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="pendidikanUmum">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>RIWAYAT PENDIDIKAN UMUM</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatPendidikanUmumPensiun as $rp)
                      {
                      ?>
                    <div class="row row-bordered">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="nip" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $rp['nip']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NJUR" class="col-md-4 control-label">Nama Jurusan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NJUR" placeholder="NIP" value="<?php echo $rp['NJUR']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="npdum" class="col-md-4 control-label">Nama Pendidikan Umum</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npdum" placeholder="NIP" value="<?php echo $rp['npdum']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="namaSekolah" class="col-md-4 control-label">Nama Sekolah</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="namaSekolah" placeholder="NIP" value="<?php echo $rp['namaSekolah']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tempat" class="col-md-4 control-label">Tempat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="tempat" placeholder="NIP" value="<?php echo $rp['tempat']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="nkepsek" class="col-md-4 control-label">Nama Kepala Sekolah/Dekan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="nkepsek" placeholder="NIP" value="<?php echo $rp['nkepsek']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="nomorIjazah" class="col-md-4 control-label">No. STTB</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="nomorIjazah" placeholder="NIP" value="<?php echo $rp['nomorIjazah']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tglTahunLulus<?php echo $counter;?>" class="col-md-4 control-label">Tanggal STTB</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tglTahunLulus<?php echo $counter;?>" value="<?php echo $rp['tglTahunLulus']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="isPendidikanTerakhir" class="col-md-4 control-label">dataTerakhir</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="isPendidikanTerakhir" placeholder="NIP" value="<?php echo $rp['isPendidikanTerakhir']?>" disabled>
                          </div>
                        </div>

                      </div>
                    </div>
                      <?php
                      $counter++;
                      }
                      ?>
                    </div>
                  </form>

            </div>
          </div>
        </div>

      </div>
      <div class="tab-pane" id="pendidikanFungsional">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>RIWAYAT PENDIDIKAN FUNGSIONAL</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatPendidikanFungsionalPensiun as $rp)
                      {
                      ?>
                    <div class="row row-bordered">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="NIP" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $rp['NIP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="namaDiklat" class="col-md-4 control-label">Nama Diklat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="kFungStrTek" placeholder="namaDiklat" value="<?php echo $rp['namaDiklat']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npdum" placeholder="TEMPAT" value="<?php echo $rp['TEMPAT']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="PAN" placeholder="NIP" value="<?php echo $rp['PAN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="ANGKATAN" class="col-md-4 control-label">Angkatan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="ANGKATAN" placeholder="NIP" value="<?php echo $rp['ANGKATAN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TMULAI<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Mulai</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI<?php echo $counter;?>" value="<?php echo $rp['TMULAI']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TAKHIR<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Akhir</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR<?php echo $counter;?>" value="<?php echo $rp['TAKHIR']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="JAM" placeholder="NIP" value="<?php echo $rp['JAM']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NSTTPP" class="col-md-4 control-label">No. STTPP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NSTTPP" placeholder="NIP" value="<?php echo $rp['NSTTPP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TSTTPP<?php echo $counter;?>" class="col-md-4 control-label">Tanggal STPP</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TSTTPP<?php echo $counter;?>" value="<?php echo $rp['TSTTPP']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="ISAKHIR" class="col-md-4 control-label">Data Terakhirr</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="ISAKHIR" placeholder="NIP" value="<?php echo $rp['ISAKHIR']?>" disabled>
                          </div>
                        </div>

                      </div>
                    </div>
                      <?php
                      $counter++;
                      }
                      ?>
                    </div>
                  </form>

            </div>
          </div>
        </div>

      </div>
      <div class="tab-pane" id="pendidikanStruktural">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>RIWAYAT PENDIDIKAN STRUKTURAL</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatPendidikanStrukturalPensiun as $rp)
                      {
                      ?>
                    <div class="row row-bordered">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="NIP" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $rp['NIP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="namaDiklat" class="col-md-4 control-label">Nama Diklat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="kFungStrTek" placeholder="namaDiklat" value="<?php echo $rp['namaDiklat']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npdum" placeholder="TEMPAT" value="<?php echo $rp['TEMPAT']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="PAN" placeholder="NIP" value="<?php echo $rp['PAN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="ANGKATAN" class="col-md-4 control-label">Angkatan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="ANGKATAN" placeholder="NIP" value="<?php echo $rp['ANGKATAN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TMULAI<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Mulai</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI<?php echo $counter;?>" value="<?php echo $rp['TMULAI']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TAKHIR<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Akhir</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR<?php echo $counter;?>" value="<?php echo $rp['TAKHIR']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="JAM" placeholder="NIP" value="<?php echo $rp['JAM']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NSTTPP" class="col-md-4 control-label">No. STTPP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NSTTPP" placeholder="NIP" value="<?php echo $rp['NSTTPP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TSTTPP<?php echo $counter;?>" class="col-md-4 control-label">Tanggal STPP</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TSTTPP<?php echo $counter;?>" value="<?php echo $rp['TSTTPP']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="ISAKHIR" class="col-md-4 control-label">Data Terakhirr</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="ISAKHIR" placeholder="NIP" value="<?php echo $rp['ISAKHIR']?>" disabled>
                          </div>
                        </div>

                      </div>
                    </div>
                      <?php
                      $counter++;
                      }
                      ?>
                    </div>
                  </form>

            </div>
          </div>
        </div>

      </div>
      <div class="tab-pane" id="pendidikanTeknis">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>RIWAYAT PENDIDIKAN TEKNIS</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatPendidikanTeknisPensiun as $rp)
                      {
                      ?>
                    <div class="row row-bordered">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="NIP" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $rp['NIP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="namaDiklat" class="col-md-4 control-label">Nama Diklat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="kFungStrTek" placeholder="namaDiklat" value="<?php echo $rp['namaDiklat']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npdum" placeholder="TEMPAT" value="<?php echo $rp['TEMPAT']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="PAN" placeholder="NIP" value="<?php echo $rp['PAN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="ANGKATAN" class="col-md-4 control-label">Angkatan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="ANGKATAN" placeholder="NIP" value="<?php echo $rp['ANGKATAN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TMULAI<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Mulai</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI<?php echo $counter;?>" value="<?php echo $rp['TMULAI']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TAKHIR<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Akhir</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR<?php echo $counter;?>" value="<?php echo $rp['TAKHIR']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="JAM" placeholder="NIP" value="<?php echo $rp['JAM']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NSTTPP" class="col-md-4 control-label">No. STTPP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NSTTPP" placeholder="NIP" value="<?php echo $rp['NSTTPP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TSTTPP<?php echo $counter;?>" class="col-md-4 control-label">Tanggal STPP</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TSTTPP<?php echo $counter;?>" value="<?php echo $rp['TSTTPP']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="ISAKHIR" class="col-md-4 control-label">Data Terakhirr</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="ISAKHIR" placeholder="NIP" value="<?php echo $rp['ISAKHIR']?>" disabled>
                          </div>
                        </div>

                      </div>
                    </div>
                      <?php
                      $counter++;
                      }
                      ?>
                    </div>
                  </form>

            </div>
          </div>
        </div>

      </div>
      <div class="tab-pane" id="pendidikanPenataran">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>PENATARAN</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatPendidikanPenataranPensiun as $rp)
                      {
                      ?>
                    <div class="row row-bordered">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="NIP" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $rp['NIP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NTATAR" class="col-md-4 control-label">Nama Penataran</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NTATAR" placeholder="namaDiklat" value="<?php echo $rp['NTATAR']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npdum" placeholder="TEMPAT" value="<?php echo $rp['TEMPAT']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="PAN" placeholder="NIP" value="<?php echo $rp['PAN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TMULAI<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Mulai</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI<?php echo $counter;?>" value="<?php echo $rp['TMULAI']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TAKHIR<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Akhir</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR<?php echo $counter;?>" value="<?php echo $rp['TAKHIR']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="JAM" placeholder="NIP" value="<?php echo $rp['JAM']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NPIAGAM" class="col-md-4 control-label">No Piagam</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NPIAGAM" placeholder="NIP" value="<?php echo $rp['NPIAGAM']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TPIAGAM<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Piagam</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TPIAGAM<?php echo $counter;?>" value="<?php echo $rp['TPIAGAM']?>" disabled>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                      <?php
                      $counter++;
                      }
                      ?>
                    </div>
                  </form>

            </div>
          </div>
        </div>

      </div>
      <div class="tab-pane" id="pendidikanSeminar">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>SEMINAR</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatPendidikanSeminarPensiun as $rp)
                      {
                      ?>
                    <div class="row row-bordered">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="NIP" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $rp['NIP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NSEMINAR" class="col-md-4 control-label">Nama Seminar</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NSEMINAR" placeholder="namaDiklat" value="<?php echo $rp['NSEMINAR']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="TEMPAT" placeholder="TEMPAT" value="<?php echo $rp['TEMPAT']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="PAN" placeholder="NIP" value="<?php echo $rp['PAN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TMULAI<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Mulai</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI<?php echo $counter;?>" value="<?php echo $rp['TMULAI']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TAKHIR<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Akhir</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR<?php echo $counter;?>" value="<?php echo $rp['TAKHIR']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="JAM" placeholder="NIP" value="<?php echo $rp['JAM']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NPIAGAM" class="col-md-4 control-label">No Piagam</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NPIAGAM" placeholder="NIP" value="<?php echo $rp['NPIAGAM']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TPIAGAM<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Piagam</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TPIAGAM<?php echo $counter;?>" value="<?php echo $rp['TPIAGAM']?>" disabled>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                      <?php
                      $counter++;
                      }
                      ?>
                    </div>
                  </form>

            </div>
          </div>
        </div>

      </div>
      <div class="tab-pane" id="pendidikanKursus">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>KURSUS</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatPendidikanKursusPensiun as $rp)
                      {
                      ?>
                    <div class="row row-bordered">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="nip" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $rp['nip']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="namaKursus" class="col-md-4 control-label">Nama Kursus</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="namaKursus" placeholder="namaDiklat" value="<?php echo $rp['namaKursus']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tempat" class="col-md-4 control-label">Tempat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="tempat" placeholder="TEMPAT" value="<?php echo $rp['tempat']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="institusiPenyelenggara" class="col-md-4 control-label">Penyelenggara</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="institusiPenyelenggara" placeholder="NIP" value="<?php echo $rp['institusiPenyelenggara']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tanggalKursus<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Mulai</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tanggalKursus<?php echo $counter;?>" value="<?php echo $rp['tanggalKursus']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tanggalAkhirKursus<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Akhir</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tanggalAkhirKursus<?php echo $counter;?>" value="<?php echo $rp['tanggalAkhirKursus']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="jumlahJam" class="col-md-4 control-label">Jumlah Jam</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="jumlahJam" placeholder="NIP" value="<?php echo $rp['jumlahJam']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="npiagam" class="col-md-4 control-label">No Piagam</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npiagam" placeholder="NIP" value="<?php echo $rp['npiagam']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tpiagam<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Piagam</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tpiagam<?php echo $counter;?>" value="<?php echo $rp['tpiagam']?>" disabled>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                      <?php
                      $counter++;
                      }
                      ?>
                    </div>
                  </form>

            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /.tab-content -->
  </div>
</div>
