<style>
.scroll{
  height:300px;
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
      <li class="active"><a href="#umum" data-toggle="tab">Umum</a></li>
      <li><a href="#struktural" data-toggle="tab">Struktural</a></li>
      <li><a href="#fungsional" data-toggle="tab">Fungsional</a></li>
      <li><a href="#teknis" data-toggle="tab">Teknis</a></li>
      <li><a href="#penataran" data-toggle="tab">Penataran</a></li>
      <li><a href="#seminar" data-toggle="tab">Seminar</a></li>
      <li><a href="#kursus" data-toggle="tab">kursus</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="umum">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Umum</strong>
                              </p>
                              <?php if($riwayatPendidikanUmum2==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                  <form class="form-horizontal">
                    <div class="box-body scroll">
                        <?php foreach($riwayatPendidikanUmum2 as $riwayatPendidikanUmum2){ ?>
  <div class="row row-bordered">
                      <div class="col-md-12">

                        <div class="form-group">
                          <label for="nip" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $riwayatPendidikanUmum2['nip'];?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="ntp" class="col-md-4 control-label">Tingkat Pendidikan Umum</label>
                          <div class="col-md-4">
                            <input class="form-control" id="ntp" placeholder="Tingkat Pendidikan Umum" value="<?php echo $riwayatPendidikanUmum2['ntp'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="npdum" class="col-md-4 control-label">Nama Pendidikan Umum</label>
                          <div class="col-md-4">
                            <input class="form-control" id="npdum" placeholder="Nama Pendidikan Umum" value="<?php echo $riwayatPendidikanUmum2['npdum'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="namaSekolah" class="col-md-4 control-label">Nama Sekolah</label>
                          <div class="col-md-4">
                            <input class="form-control" id="namaSekolah" placeholder="Nama Sekolah" value="<?php echo $riwayatPendidikanUmum2['namaSekolah'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="tempat" class="col-md-4 control-label">Tempat</label>
                          <div class="col-md-4">
                            <input class="form-control" id="tempat" placeholder="Tempat" value="<?php echo $riwayatPendidikanUmum2['tempat'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="nkepsek" class="col-md-4 control-label">Nama Kepala Sekolah/Dekan</label>
                          <div class="col-md-4">
                            <input class="form-control" id="nkepsek" placeholder="Nama Kepala Sekolah" value="<?php echo $riwayatPendidikanUmum2['nkepsek'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="nomorIjazah" class="col-md-4 control-label">No STTB</label>
                          <div class="col-md-4">
                            <input class="form-control" id="nomorIjazah" placeholder="Nomor STTB" value="<?php echo $riwayatPendidikanUmum2['nomorIjazah'];?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tglSTTB" class="col-md-4 control-label">Tanggal STTB</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tglTahunLulus" name="Tanggal Lulus" value="<?php echo $riwayatPendidikanUmum2['tglTahunLulus']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="statusAkhir" class="col-md-4 control-label">dataTerakhir</label>
                          <div class="col-md-4">
                            <input class="form-control" id="statusAkhir" placeholder="Pendidikan Terakhir" value="<?php echo $riwayatPendidikanUmum2['statusAkhir'];?>" disabled>
                          </div>
                        </div>

                      </div>
                    </div>
                      <?php } ?>
                    </div>
                  </form>

                <?php }
                ?>

            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="struktural">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Struktural</strong>
              </p>
              <?php if($riwayatPendidikanStruktural2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatPendidikanStruktural2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NIP" class="col-md-4 control-label">NIP</label>
                            <div class="col-sm-4">
                              <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $ru['NIP']?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaDiklat" class="col-md-4 control-label">Nama Diklat Struktural</label>
                            <div class="col-md-4">
                              <input class="form-control" id="namaDiklat" placeholder="Nama Diklat Struktural" value="<?php echo $ru['namaDiklat'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                            <div class="col-md-4">
                              <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $ru['TEMPAT'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                            <div class="col-md-4">
                              <input class="form-control" id="PAN" placeholder="Penyelenggara" value="<?php echo $ru['PAN'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="ANGKATAN" class="col-md-4 control-label">Angkatan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ANGKATAN" placeholder="Angkatan" value="<?php echo $ru['ANGKATAN'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $ru['TMULAI']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TAKHIR" class="col-md-4 control-label">Tanggal Akhir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $ru['TAKHIR']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-4">
                              <input class="form-control" id="JAM" placeholder="Jumlah Jam" value="<?php echo $ru['JAM'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NSTTPP" class="col-md-4 control-label">Nomor STPP</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NSTTPP" placeholder="Nomor STPP" value="<?php echo $ru['NSTTPP'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TSTTPP" class="col-md-4 control-label">Tanggal STPP</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TSTTPP" name="Tanggal STPP" value="<?php echo $ru['TSTTPP']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="statusAkhir" class="col-md-4 control-label">Data Terakhir</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control pull-right" id="statusAkhir" name="Data Terakhir" value="<?php echo $ru['statusAkhir']?>" disabled>
                            </div>
                          </div>


                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </form>
              <?php }
              ?>

            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="fungsional">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Fungsional</strong>
              </p>
              <?php if($riwayatPendidikanFungsional2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatPendidikanFungsional2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NIP" class="col-md-4 control-label">NIP</label>
                            <div class="col-sm-4">
                              <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $ru['NIP']?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="namaDiklat" class="col-md-4 control-label">Nama Diklat Struktural</label>
                            <div class="col-md-4">
                              <input class="form-control" id="namaDiklat" placeholder="Nama Diklat Struktural" value="<?php echo $ru['namaDiklat'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                            <div class="col-md-4">
                              <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $ru['TEMPAT'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="penyelenggara" class="col-md-4 control-label">Penyelenggara</label>
                            <div class="col-md-4">
                              <input class="form-control" id="namaDiklat" placeholder="Nama Diklat Struktural" value="<?php echo $ru['namaDiklat'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ANGKATAN" class="col-md-4 control-label">Angkatan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ANGKATAN" placeholder="Angkatan" value="<?php echo $ru['ANGKATAN'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $ru['TMULAI']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TAKHIR" class="col-md-4 control-label">Tanggal Akhir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $ru['TAKHIR']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="jumlahJAMJam" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-4">
                              <input class="form-control" id="JAM" placeholder="Jumlah JAM" value="<?php echo $ru['JAM'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NSTTPP" class="col-md-4 control-label">STPP</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NSTTPP" placeholder="STPP" value="<?php echo $ru['NSTTPP'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TSTTPP" class="col-md-4 control-label">Tanggal STTPP</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TSTTPP" name="Tanggal STTPP" value="<?php echo $ru['TSTTPP']?>" disabled>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="statusAkhir" class="col-md-4 control-label">Data Terakhir</label>
                            <div class="col-md-4">
                              <input class="form-control" id="statusAkhir" placeholder="Data Terakhir" value="<?php echo $ru['statusAkhir'];?>" disabled>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </form>
              <?php }
              ?>

            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="teknis">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Teknis</strong>
              </p>
              <?php if($riwayatPendidikanTeknis2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatPendidikanTeknis2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NIP" class="col-md-4 control-label">NIP</label>
                            <div class="col-sm-4">
                              <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $ru['NIP']?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="namaDiklat" class="col-md-4 control-label">Nama Diklat Teknis</label>
                            <div class="col-md-4">
                              <input class="form-control" id="namaDiklat" placeholder="Nama Diklat Teknis" value="<?php echo $ru['namaDiklat'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                            <div class="col-md-4">
                              <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $ru['TEMPAT'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="penyelenggara" class="col-md-4 control-label">Penyelenggara</label>
                            <div class="col-md-4">
                              <input class="form-control" id="namaDiklat" placeholder="Nama Diklat Struktural" value="<?php echo $ru['namaDiklat'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ANGKATAN" class="col-md-4 control-label">Angkatan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ANGKATAN" placeholder="Angkatan" value="<?php echo $ru['ANGKATAN'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $ru['TMULAI']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TAKHIR" class="col-md-4 control-label">Tanggal Akhir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $ru['TAKHIR']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="jumlahJAMJam" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-4">
                              <input class="form-control" id="JAM" placeholder="Jumlah JAM" value="<?php echo $ru['JAM'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NSTTPP" class="col-md-4 control-label">STPP</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NSTTPP" placeholder="STPP" value="<?php echo $ru['NSTTPP'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TSTTPP" class="col-md-4 control-label">Tanggal STTPP</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TSTTPP" name="Tanggal STTPP" value="<?php echo $ru['TSTTPP']?>" disabled>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="statusAkhir" class="col-md-4 control-label">Data Terakhir</label>
                            <div class="col-md-4">
                              <input class="form-control" id="statusAkhir" placeholder="Data Terakhir" value="<?php echo $ru['statusAkhir'];?>" disabled>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </form>
              <?php }
              ?>

            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="penataran">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Penataran</strong>
              </p>
              <?php if($riwayatPendidikanPenataran2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatPendidikanPenataran2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NIP" class="col-md-4 control-label">NIP</label>
                            <div class="col-sm-4">
                              <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $ru['NIP']?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NTATAR" class="col-md-4 control-label">Nama Penataran</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NTATAR" placeholder="Nama Penataran" value="<?php echo $ru['NTATAR'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                            <div class="col-md-4">
                              <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $ru['TEMPAT'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="penyelenggara" class="col-md-4 control-label">Penyelenggara</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NTATAR" placeholder="Nama Penataran" value="<?php echo $ru['NTATAR'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="angkatan" class="col-md-4 control-label">Angkatan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NTATAR" placeholder="Nama Penataran" value="<?php echo $ru['NTATAR'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $ru['TMULAI']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TAKHIR" class="col-md-4 control-label">Tanggal Akhir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $ru['TAKHIR']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-4">
                              <input class="form-control" id="JAM" placeholder="Jumlah Jam" value="<?php echo $ru['JAM'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NPIAGAM" class="col-md-4 control-label">No. Piagam</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NPIAGAM" placeholder="Jumlah Jam" value="<?php echo $ru['NPIAGAM'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TPIAGAM" class="col-md-4 control-label">Tanggal Piagam</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TPIAGAM" name="Tanggal Piagam" value="<?php echo $ru['TPIAGAM']?>" disabled>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </form>
              <?php }
              ?>

            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="seminar">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Seminar</strong>
              </p>
              <?php if($riwayatPendidikanSeminar2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatPendidikanSeminar2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NIP" class="col-md-4 control-label">NIP</label>
                            <div class="col-sm-4">
                              <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $ru['NIP'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NSEMINAR" class="col-md-4 control-label">Nama Seminar</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NSEMINAR" placeholder="Nama Seminar" value="<?php echo $ru['NSEMINAR'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                            <div class="col-md-4">
                              <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $ru['TEMPAT'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                            <div class="col-md-4">
                              <input class="form-control" id="PAN" placeholder="Penyelenggara" value="<?php echo $ru['PAN'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $ru['TMULAI']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TAKHIR" class="col-md-4 control-label">Tanggal Akhir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $ru['TAKHIR']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-4">
                              <input class="form-control" id="JAM" placeholder="Jumlah Jam" value="<?php echo $ru['JAM'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NPIAGAM" class="col-md-4 control-label">No. Piagam</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NPIAGAM" placeholder="Jumlah Jam" value="<?php echo $ru['NPIAGAM'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TPIAGAM" class="col-md-4 control-label">Tanggal Piagam</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TPIAGAM" name="Tanggal Piagam" value="<?php echo $ru['TPIAGAM']?>" disabled>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </form>
              <?php }
              ?>

            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="kursus">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Kursus</strong>
              </p>
              <?php if($riwayatPendidikanKursus2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatPendidikanKursus2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="nip" class="col-md-4 control-label">NIP</label>
                            <div class="col-sm-4">
                              <input class="form-control" id="NIP" placeholder="nip" value="<?php echo $ru['nip'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namaKursus" class="col-md-4 control-label">Nama Kursus</label>
                            <div class="col-md-4">
                              <input class="form-control" id="namaKursus" placeholder="Nama Kursus" value="<?php echo $ru['namaKursus'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="tempat" class="col-md-4 control-label">Tempat</label>
                            <div class="col-md-4">
                              <input class="form-control" id="TEMPAT" placeholder="tempat" value="<?php echo $ru['tempat'];?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="institusiPenyelenggara" class="col-md-4 control-label">Penyelenggara</label>
                            <div class="col-md-4">
                              <input class="form-control" id="institusiPenyelenggara" placeholder="Penyelenggara" value="<?php echo $ru['institusiPenyelenggara'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="tanggalKursus" class="col-md-4 control-label">Tanggal Mulai</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tanggalKursus" name="Tanggal Mulai" value="<?php echo $ru['tanggalKursus']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="tanggalAkhirKursus" class="col-md-4 control-label">Tanggal Akhir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tanggalAkhirKursus" name="Tanggal Akhir" value="<?php echo $ru['tanggalAkhirKursus']?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="jumlahJam" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-4">
                              <input class="form-control" id="jumlahJam" placeholder="Jumlah Jam" value="<?php echo $ru['jumlahJam'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="npiagam" class="col-md-4 control-label">No. Piagam</label>
                            <div class="col-md-4">
                              <input class="form-control" id="npiagam" placeholder="Jumlah Jam" value="<?php echo $ru['npiagam'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="tpiagam" class="col-md-4 control-label">Tanggal Piagam</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tpiagam" name="Tanggal Piagam" value="<?php echo $ru['tpiagam']?>" disabled>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                    ?>
                  </div>
                </form>
              <?php }
              ?>

            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.tab-content -->
  </div>
</div>
