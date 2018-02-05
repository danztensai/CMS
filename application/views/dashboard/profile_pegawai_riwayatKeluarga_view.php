<style>
.scroll{
  height:300px;
overflow-y:scroll;
}
</style>

<div class="tab-pane" id="riwayatKeluarga">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li  class="active"><a href="#ayah" data-toggle="tab">Ayah</a></li>
      <li><a href="#ibu" data-toggle="tab">Ibu</a></li>
      <li><a href="#suamiIstri" data-toggle="tab">Suami/Istri</a></li>
      <li><a href="#anak" data-toggle="tab">Anak</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="ayah">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>AYAH</strong>
              </p>
              <?php if($riwayatKeluargaAyah2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatKeluargaAyah2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NAYAH" class="col-md-4 control-label">NAYAH</label>
                            <div class="col-sm-4">
                              <input class="form-control" id="NAYAH" placeholder="NAYAH" value="<?php echo $ru['NAYAH']?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="TLAHIR" class="col-md-4 control-label">Tempat Lahir</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NAYAH" placeholder="Tempat Lahir" value="<?php echo $ru['TLAHIR'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="tanggalLahir" class="col-md-4 control-label">Tanggal Lahir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control" id="TGLLAHIR" placeholder="Tanggal Lahir" value="<?php echo $ru['TGLLAHIR'];?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="KKERJA" class="col-md-4 control-label">Pekerjaan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="nama" placeholder="Pekerjaan" value="<?php echo $ru['nama'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ALJALAN" class="col-md-4 control-label">Alamat Rumah</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ALJALAN" placeholder="Alamat Rumah" value="<?php echo $ru['ALJALAN'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ALRT" class="col-md-4 control-label">RT</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ALRT" placeholder="RT" value="<?php echo $ru['ALRT'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ALRW" class="col-md-4 control-label">RW</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ALRW" placeholder="RW" value="<?php echo $ru['ALRW'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NOTELP" class="col-md-4 control-label">No. Telepon</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NOTELP" placeholder="No Telepon" value="<?php echo $ru['NOTELP'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="WIL" class="col-md-4 control-label">Kota / Kabupaten</label>
                            <div class="col-md-4">
                              <input class="form-control" id="WIL" placeholder="Kota / Kabupaten" value="<?php echo $ru['WIL'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="KPOS" class="col-md-4 control-label">Kode Pos</label>
                            <div class="col-md-4">
                              <input class="form-control" id="KPOS" placeholder="Kode Pos" value="<?php echo $ru['KPOS'];?>" disabled>
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
      <div class="tab-pane" id="ibu">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>IBU</strong>
              </p>
              <?php if($riwayatKeluargaIbu2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatKeluargaIbu2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NIBU" class="col-md-4 control-label">Nama Ibu</label>
                            <div class="col-sm-4">
                              <input class="form-control" id="NIBU" placeholder="Nama Ibu" value="<?php echo $ru['NIBU']?>" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="TLAHIR" class="col-md-4 control-label">Tempat Lahir</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NAYAH" placeholder="Tempat Lahir" value="<?php echo $ru['TLAHIR'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="tanggalLahir" class="col-md-4 control-label">Tanggal Lahir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control" id="TGLLAHIR" placeholder="Tanggal Lahir" value="<?php echo $ru['TGLLAHIR'];?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="KKERJA" class="col-md-4 control-label">Pekerjaan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="nama" placeholder="Pekerjaan" value="<?php echo $ru['nama'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ALJALAN" class="col-md-4 control-label">Alamat Rumah</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ALJALAN" placeholder="Alamat Rumah" value="<?php echo $ru['ALJALAN'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ALRT" class="col-md-4 control-label">RT</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ALRT" placeholder="RT" value="<?php echo $ru['ALRT'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ALRW" class="col-md-4 control-label">RW</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ALRW" placeholder="RW" value="<?php echo $ru['ALRW'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NOTELP" class="col-md-4 control-label">No. Telepon</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NOTELP" placeholder="No Telepon" value="<?php echo $ru['NOTELP'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="WIL" class="col-md-4 control-label">Kota / Kabupaten</label>
                            <div class="col-md-4">
                              <input class="form-control" id="WIL" placeholder="Kota / Kabupaten" value="<?php echo $ru['WIL'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="KPOS" class="col-md-4 control-label">Kode Pos</label>
                            <div class="col-md-4">
                              <input class="form-control" id="KPOS" placeholder="Kode Pos" value="<?php echo $ru['KPOS'];?>" disabled>
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
      <div class="tab-pane" id="suamiIstri">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>SUAMI/ISTRI</strong>
              </p>
              <?php if($riwayatKeluargaSuamiIstri2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatKeluargaSuamiIstri2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NISUA" class="col-md-4 control-label">Nama Istri / Suami</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NISUA" placeholder="Nama Istri / Suami" value="<?php echo $ru['NISUA'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="KTLAHIR" class="col-md-4 control-label">Tempat Lahir</label>
                            <div class="col-md-4">
                              <input class="form-control" id="KTLAHIR" placeholder="Tempat Lahir" value="<?php echo $ru['KTLAHIR'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TLAHIR" class="col-md-4 control-label">Tanggal Lahir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control" id="TLAHIR" placeholder="Tanggal Lahir" value="<?php echo $ru['TLAHIR'];?>" disabled>
                            </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TIJASAH" class="col-md-4 control-label">Pendidikan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="TIJASAH" placeholder="Pendidikan" value="<?php echo $ru['TIJASAH'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TKAWIN" class="col-md-4 control-label">Tanggal Kawin</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control" id="TKAWIN" placeholder="Tanggal Kawin" value="<?php echo $ru['TKAWIN'];?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nama" class="col-md-4 control-label">Status Tunjangan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="nama" placeholder="Status Tunjangan" value="<?php echo $ru['nama'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="namapekerjaan" class="col-md-4 control-label">Pekerjaan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="namapekerjaan" placeholder="Pekerjaan" value="<?php echo $ru['namapekerjaan'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="statusAkhir" class="col-md-4 control-label">Istri / Suami Terakhir</label>
                            <div class="col-md-4">
                              <input class="form-control" id="statusAkhir" placeholder="Istri / Suami Terakhir" value="<?php echo $ru['statusAkhir'];?>" disabled>
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
      <div class="tab-pane" id="anak">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>ANAK</strong>
              </p>
              <?php if($riwayatKeluargaAnak2==null)
              {
                log_message('debug','Empty Data');
                ?>
                <h1>Belum Ada Data</h1>
                <?php

              }else{ ?>


                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <?php

                    foreach($riwayatKeluargaAnak2 as $ru)
                    {
                      ?>
                      <div class="row row-bordered">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="NANAK" class="col-md-4 control-label">Nama Anak</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NANAK" placeholder="Nama Anak" value="<?php echo $ru['NANAK'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TLAHIR" class="col-md-4 control-label">Tempat Lahir</label>
                            <div class="col-md-4">
                              <input class="form-control" id="TLAHIR" placeholder="Tempat Lahir" value="<?php echo $ru['TLAHIR'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TGLLAHIR" class="col-md-4 control-label">Tanggal Lahir</label>
                            <div class="col-md-4">
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input class="form-control" id="TGLLAHIR" placeholder="Tanggal Lahir" value="<?php echo $ru['TGLLAHIR'];?>" disabled>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="NKELAMIN" class="col-md-4 control-label">Kelamin</label>
                            <div class="col-md-4">
                              <input class="form-control" id="NKELAMIN" placeholder="Kelamin" value="<?php echo $ru['NKELAMIN'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ketkeluarga" class="col-md-4 control-label">Hubungan Keluarga</label>
                            <div class="col-md-4">
                              <input class="form-control" id="ketkeluarga" placeholder="Hubungan Keluarga" value="<?php echo $ru['ketkeluarga'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="tunjangan" class="col-md-4 control-label">Tunjangan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="tunjangan" placeholder="Tunjangan" value="<?php echo $ru['tunjangan'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="TIJASAH" class="col-md-4 control-label">Tingkat Pendidikan Umum</label>
                            <div class="col-md-4">
                              <input class="form-control" id="TIJASAH" placeholder="Tingkat Pendidikan Umum" value="<?php echo $ru['TIJASAH'];?>" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nama" class="col-md-4 control-label">Pekerjaan</label>
                            <div class="col-md-4">
                              <input class="form-control" id="nama" placeholder="Pekerjaan" value="<?php echo $ru['nama'];?>" disabled>
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
