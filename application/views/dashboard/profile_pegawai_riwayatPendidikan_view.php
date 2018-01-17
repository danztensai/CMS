<style>
.scroll{
  height:300px;
overflow-y:scroll;
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
                              <?php if($riwayatPendidikanUmum==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                  <form class="form-horizontal">
                    <div class="box-body scroll">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="nip" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $riwayatPendidikanUmum['nip'];?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="ktpu" class="col-md-4 control-label">Kode Pendidikan Umum</label>
                          <div class="col-md-4">
                            <input class="form-control" id="ktpu" placeholder="Kode Pendidikan Umum" value="<?php echo $riwayatPendidikanUmum['ktpu'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="npdum" class="col-md-4 control-label">Nama Pendidikan Umum</label>
                          <div class="col-md-4">
                            <input class="form-control" id="npdum" placeholder="Nama Pendidikan Umum" value="<?php echo $riwayatPendidikanUmum['npdum'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="namaSekolah" class="col-md-4 control-label">Nama Sekolah</label>
                          <div class="col-md-4">
                            <input class="form-control" id="namaSekolah" placeholder="Nama Sekolah" value="<?php echo $riwayatPendidikanUmum['namaSekolah'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="tempat" class="col-md-4 control-label">Tempat</label>
                          <div class="col-md-4">
                            <input class="form-control" id="tempat" placeholder="Tempat" value="<?php echo $riwayatPendidikanUmum['tempat'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="nkepsek" class="col-md-4 control-label">Nama Kepala Sekolah/Dekan</label>
                          <div class="col-md-4">
                            <input class="form-control" id="nkepsek" placeholder="Nama Kepala Sekolah" value="<?php echo $riwayatPendidikanUmum['nkepsek'];?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="nomorIjazah" class="col-md-4 control-label">No STTB</label>
                          <div class="col-md-4">
                            <input class="form-control" id="nomorIjazah" placeholder="Nomor STTB" value="<?php echo $riwayatPendidikanUmum['nomorIjazah'];?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tglSTTB" class="col-md-4 control-label">Tanggal STTB</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tglTahunLulus" name="Tanggal Lulus" value="<?php echo $riwayatPendidikanUmum['tglTahunLulus']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="dataTerakhir" class="col-md-4 control-label">dataTerakhir</label>
                          <div class="col-md-4">
                            <input class="form-control" id="isPendidikanTerakhir" placeholder="Pendidikan Terakhir" value="<?php echo $riwayatPendidikanUmum['isPendidikanTerakhir'];?>" disabled>
                          </div>
                        </div>

                      </div>
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
                              <?php if($riwayatPendidikanStruktural==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="NIP" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $riwayatPendidikanStruktural['NIP'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="namaDiklat" class="col-md-4 control-label">Nama Diklat Struktural</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="namaDiklat" placeholder="Nama Diklat Struktural" value="<?php echo $riwayatPendidikanStruktural['namaDiklat'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $riwayatPendidikanStruktural['TEMPAT'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="PAN" placeholder="Penyelenggara" value="<?php echo $riwayatPendidikanStruktural['PAN'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="ANGKATAN" class="col-md-4 control-label">Angkatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="ANGKATAN" placeholder="Angkatan" value="<?php echo $riwayatPendidikanStruktural['ANGKATAN'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $riwayatPendidikanStruktural['TMULAI']?>" disabled>
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
                                            <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $riwayatPendidikanStruktural['TAKHIR']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="JAM" placeholder="Jumlah Jam" value="<?php echo $riwayatPendidikanStruktural['JAM'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NSTTPP" class="col-md-4 control-label">Nomor STPP</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NSTTPP" placeholder="Nomor STPP" value="<?php echo $riwayatPendidikanStruktural['NSTTPP'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TSTTPP" class="col-md-4 control-label">Tanggal STPP</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TSTTPP" name="Tanggal STPP" value="<?php echo $riwayatPendidikanStruktural['TSTTPP']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="ISAKHIR" class="col-md-4 control-label">Data Terakhir</label>
                                      <div class="col-md-4">
                                        <input type="text" class="form-control pull-right" id="ISAKHIR" name="Data Terakhir" value="<?php echo $riwayatPendidikanStruktural['ISAKHIR']?>" disabled>
                                      </div>
                                    </div>

                                  </div>
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
                              <?php if($riwayatPendidikanFungsional==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>

                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="NIP" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $riwayatPendidikanFungsional['NIP'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="namaDiklat" class="col-md-4 control-label">Nama Diklat Struktural</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="namaDiklat" placeholder="Nama Diklat Struktural" value="<?php echo $riwayatPendidikanFungsional['namaDiklat'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $riwayatPendidikanFungsional['TEMPAT'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="penyelenggara" class="col-md-4 control-label">Penyelenggara</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="namaDiklat" placeholder="Nama Diklat Struktural" value="<?php echo $riwayatPendidikanFungsional['namaDiklat'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="ANGKATAN" class="col-md-4 control-label">Angkatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="ANGKATAN" placeholder="Angkatan" value="<?php echo $riwayatPendidikanFungsional['ANGKATAN'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $riwayatPendidikanFungsional['TMULAI']?>" disabled>
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
                                            <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $riwayatPendidikanFungsional['TAKHIR']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="jumlahJAMJam" class="col-md-4 control-label">Jumlah Jam</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="JAM" placeholder="Jumlah JAM" value="<?php echo $riwayatPendidikanFungsional['JAM'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NSTTPP" class="col-md-4 control-label">STPP</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NSTTPP" placeholder="STPP" value="<?php echo $riwayatPendidikanFungsional['NSTTPP'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TSTTPP" class="col-md-4 control-label">Tanggal STTPP</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TSTTPP" name="Tanggal STTPP" value="<?php echo $riwayatPendidikanFungsional['TSTTPP']?>" disabled>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="ISAKHIR" class="col-md-4 control-label">Data Terakhir</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="ISAKHIR" placeholder="Data Terakhir" value="<?php echo $riwayatPendidikanFungsional['ISAKHIR'];?>" disabled>
                                      </div>
                                    </div>
                                  </div>
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
                              <?php if($riwayatPendidikanTeknis==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>

                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="NIP" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $riwayatPendidikanTeknis['NIP'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="namaDiklat" class="col-md-4 control-label">Nama Diklat Teknis</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="namaDiklat" placeholder="Nama Diklat Teknis" value="<?php echo $riwayatPendidikanTeknis['namaDiklat'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $riwayatPendidikanTeknis['TEMPAT'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="PAN" placeholder="Penyelenggara" value="<?php echo $riwayatPendidikanTeknis['PAN'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="ANGKATAN" class="col-md-4 control-label">Angkatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="ANGKATAN" placeholder="Angkatan" value="<?php echo $riwayatPendidikanTeknis['ANGKATAN'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $riwayatPendidikanTeknis['TMULAI']?>" disabled>
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
                                            <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $riwayatPendidikanTeknis['TAKHIR']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="JAM" placeholder="Jumlah Jam" value="<?php echo $riwayatPendidikanTeknis['JAM'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NSTTPP" class="col-md-4 control-label">STPP</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NSTTPP" placeholder="STPP" value="<?php echo $riwayatPendidikanTeknis['NSTTPP'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TSTTPP" class="col-md-4 control-label">Tanggal STPP</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TSTTPP" name="Tanggal STPP" value="<?php echo $riwayatPendidikanTeknis['TSTTPP']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="ISAKHIR" class="col-md-4 control-label">Data Terakhir</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="ISAKHIR" placeholder="Data Terakhir" value="<?php echo $riwayatPendidikanTeknis['ISAKHIR'];?>" disabled>
                                      </div>
                                    </div>
                                  </div>
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
                              <?php if($riwayatPendidikanPenataran==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>

                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="NIP" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $riwayatPendidikanPenataran['NIP'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NTATAR" class="col-md-4 control-label">Nama Penataran</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NTATAR" placeholder="Nama Penataran" value="<?php echo $riwayatPendidikanPenataran['NTATAR'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $riwayatPendidikanPenataran['TEMPAT'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="penyelenggara" class="col-md-4 control-label">Penyelenggara</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NTATAR" placeholder="Nama Penataran" value="<?php echo $riwayatPendidikanPenataran['NTATAR'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="angkatan" class="col-md-4 control-label">Angkatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NTATAR" placeholder="Nama Penataran" value="<?php echo $riwayatPendidikanPenataran['NTATAR'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $riwayatPendidikanPenataran['TMULAI']?>" disabled>
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
                                            <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $riwayatPendidikanPenataran['TAKHIR']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="JAM" placeholder="Jumlah Jam" value="<?php echo $riwayatPendidikanPenataran['JAM'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NPIAGAM" class="col-md-4 control-label">No. Piagam</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NPIAGAM" placeholder="Jumlah Jam" value="<?php echo $riwayatPendidikanPenataran['NPIAGAM'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TPIAGAM" class="col-md-4 control-label">Tanggal Piagam</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TPIAGAM" name="Tanggal Piagam" value="<?php echo $riwayatPendidikanPenataran['TPIAGAM']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
                              <?php if($riwayatPendidikanSeminar==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>

                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="NIP" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $riwayatPendidikanSeminar['NIP'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NSEMINAR" class="col-md-4 control-label">Nama Seminar</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NSEMINAR" placeholder="Nama Seminar" value="<?php echo $riwayatPendidikanSeminar['NSEMINAR'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $riwayatPendidikanSeminar['TEMPAT'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="PAN" class="col-md-4 control-label">Penyelenggara</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="PAN" placeholder="Penyelenggara" value="<?php echo $riwayatPendidikanSeminar['PAN'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TMULAI" name="Tanggal Mulai" value="<?php echo $riwayatPendidikanSeminar['TMULAI']?>" disabled>
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
                                            <input type="text" class="form-control pull-right" id="TAKHIR" name="Tanggal Akhir" value="<?php echo $riwayatPendidikanSeminar['TAKHIR']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="JAM" class="col-md-4 control-label">Jumlah Jam</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="JAM" placeholder="Jumlah Jam" value="<?php echo $riwayatPendidikanSeminar['JAM'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NPIAGAM" class="col-md-4 control-label">No. Piagam</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NPIAGAM" placeholder="Jumlah Jam" value="<?php echo $riwayatPendidikanSeminar['NPIAGAM'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TPIAGAM" class="col-md-4 control-label">Tanggal Piagam</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TPIAGAM" name="Tanggal Piagam" value="<?php echo $riwayatPendidikanSeminar['TPIAGAM']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
                              <?php if($riwayatPendidikanKursus==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>

                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="nip" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NIP" placeholder="nip" value="<?php echo $riwayatPendidikanKursus['nip'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="namaKursus" class="col-md-4 control-label">Nama Kursus</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="namaKursus" placeholder="Nama Kursus" value="<?php echo $riwayatPendidikanKursus['namaKursus'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="tempat" class="col-md-4 control-label">Tempat</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="TEMPAT" placeholder="tempat" value="<?php echo $riwayatPendidikanKursus['tempat'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="institusiPenyelenggara" class="col-md-4 control-label">Penyelenggara</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="institusiPenyelenggara" placeholder="Penyelenggara" value="<?php echo $riwayatPendidikanKursus['institusiPenyelenggara'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="tanggalKursus" class="col-md-4 control-label">Tanggal Mulai</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="tanggalKursus" name="Tanggal Mulai" value="<?php echo $riwayatPendidikanKursus['tanggalKursus']?>" disabled>
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
                                            <input type="text" class="form-control pull-right" id="tanggalAkhirKursus" name="Tanggal Akhir" value="<?php echo $riwayatPendidikanKursus['tanggalAkhirKursus']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="jumlahJam" class="col-md-4 control-label">Jumlah Jam</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="jumlahJam" placeholder="Jumlah Jam" value="<?php echo $riwayatPendidikanKursus['jumlahJam'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="npiagam" class="col-md-4 control-label">No. Piagam</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="npiagam" placeholder="Jumlah Jam" value="<?php echo $riwayatPendidikanKursus['npiagam'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="tpiagam" class="col-md-4 control-label">Tanggal Piagam</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="tpiagam" name="Tanggal Piagam" value="<?php echo $riwayatPendidikanKursus['tpiagam']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
