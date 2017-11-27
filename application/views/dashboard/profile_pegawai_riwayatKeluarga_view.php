<style>
.scroll{
  height:300px;
overflow-y:scroll;
}
</style>

<div class="tab-pane" id="riwayatKeluarga">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li><a href="#ayah" data-toggle="tab">Ayah</a></li>
      <li><a href="#ibu" data-toggle="tab">Ibu</a></li>
      <li><a href="#suamiIstri" data-toggle="tab">Suami/Istri</a></li>
      <li><a href="#anak" data-toggle="tab">Anak</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane" id="ayah">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Ayah</strong>
              </p>
              <form class="form-horizontal">
                <div class="box-body scroll">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="NAYAH" class="col-md-4 control-label">Nama Ayah</label>
                      <div class="col-md-4">
                        <input class="form-control" id="NAYAH" placeholder="Nama Ayah" value="<?php echo $riwayatKeluargaAyah['NAYAH'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TLAHIR" class="col-md-4 control-label">Tempat Lahir</label>
                      <div class="col-md-4">
                        <input class="form-control" id="NAYAH" placeholder="Tempat Lahir" value="<?php echo $riwayatKeluargaAyah['TLAHIR'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tanggalLahir" class="col-md-4 control-label">Tanggal Lahir</label>
                      <div class="col-md-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control" id="TGLLAHIR" placeholder="Tanggal Lahir" value="<?php echo $riwayatKeluargaAyah['TGLLAHIR'];?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="KKERJA" class="col-md-4 control-label">Pekerjaan</label>
                      <div class="col-md-4">
                        <input class="form-control" id="nama" placeholder="Pekerjaan" value="<?php echo $riwayatKeluargaAyah['nama'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ALJALAN" class="col-md-4 control-label">Alamat Rumah</label>
                      <div class="col-md-4">
                        <input class="form-control" id="ALJALAN" placeholder="Alamat Rumah" value="<?php echo $riwayatKeluargaAyah['ALJALAN'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ALRT" class="col-md-4 control-label">RT</label>
                      <div class="col-md-4">
                        <input class="form-control" id="ALRT" placeholder="RT" value="<?php echo $riwayatKeluargaAyah['ALRT'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ALRW" class="col-md-4 control-label">RW</label>
                      <div class="col-md-4">
                        <input class="form-control" id="ALRW" placeholder="RW" value="<?php echo $riwayatKeluargaAyah['ALRW'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="NOTELP" class="col-md-4 control-label">No. Telepon</label>
                      <div class="col-md-4">
                        <input class="form-control" id="NOTELP" placeholder="No Telepon" value="<?php echo $riwayatKeluargaAyah['NOTELP'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="WIL" class="col-md-4 control-label">Kota / Kabupaten</label>
                      <div class="col-md-4">
                        <input class="form-control" id="WIL" placeholder="Kota / Kabupaten" value="<?php echo $riwayatKeluargaAyah['WIL'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="KPOS" class="col-md-4 control-label">Kode Pos</label>
                      <div class="col-md-4">
                        <input class="form-control" id="KPOS" placeholder="Kode Pos" value="<?php echo $riwayatKeluargaAyah['KPOS'];?>" disabled>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="ibu">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Ibu</strong>
              </p>
              <form class="form-horizontal">
                <div class="box-body scroll">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="NIBU" class="col-md-4 control-label">Nama Ibu</label>
                      <div class="col-md-4">
                        <input class="form-control" id="NIBU" placeholder="Nama Ibu" value="<?php echo $riwayatKeluargaIbu['NIBU'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TLAHIR" class="col-md-4 control-label">Tempat Lahir</label>
                      <div class="col-md-4">
                        <input class="form-control" id="TLAHIR" placeholder="Tempat Lahir" value="<?php echo $riwayatKeluargaIbu['TLAHIR'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TGLLAHIR" class="col-md-4 control-label">Tanggal Lahir</label>
                      <div class="col-md-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control" id="TGLLAHIR" placeholder="Tanggal Lahir" value="<?php echo $riwayatKeluargaIbu['TGLLAHIR'];?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama" class="col-md-4 control-label">Pekerjaan</label>
                      <div class="col-md-4">
                        <input class="form-control" id="nama" placeholder="Pekerjaan" value="<?php echo $riwayatKeluargaIbu['nama'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ALJALAN" class="col-md-4 control-label">Alamat Rumah</label>
                      <div class="col-md-4">
                        <input class="form-control" id="ALJALAN" placeholder="Alamat Rumah" value="<?php echo $riwayatKeluargaIbu['ALJALAN'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ALRT" class="col-md-4 control-label">RT</label>
                      <div class="col-md-4">
                        <input class="form-control" id="ALRT" placeholder="RT" value="<?php echo $riwayatKeluargaIbu['ALRT'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ALRW" class="col-md-4 control-label">RW</label>
                      <div class="col-md-4">
                        <input class="form-control" id="ALRW" placeholder="RW" value="<?php echo $riwayatKeluargaIbu['ALRW'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="NOTELP" class="col-md-4 control-label">No. Telepon</label>
                      <div class="col-md-4">
                        <input class="form-control" id="NOTELP" placeholder="No. Telepon" value="<?php echo $riwayatKeluargaIbu['NOTELP'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="WIL" class="col-md-4 control-label">Kota / Kabupaten</label>
                      <div class="col-md-4">
                        <input class="form-control" id="WIL" placeholder="Kota / Kabupaten" value="<?php echo $riwayatKeluargaIbu['WIL'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="KPOS" class="col-md-4 control-label">Kode Pos</label>
                      <div class="col-md-4">
                        <input class="form-control" id="KPOS" placeholder="Kode Pos" value="<?php echo $riwayatKeluargaIbu['KPOS'];?>" disabled>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="suamiIstri">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Suami/Istri</strong>
              </p>
              <form class="form-horizontal">
                <div class="box-body scroll">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="NISUA" class="col-md-4 control-label">Nama Istri / Suami</label>
                      <div class="col-md-4">
                        <input class="form-control" id="NISUA" placeholder="Nama Istri / Suami" value="<?php echo $riwayatKeluargaSuamiIstri['NISUA'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="KTLAHIR" class="col-md-4 control-label">Tempat Lahir</label>
                      <div class="col-md-4">
                        <input class="form-control" id="KTLAHIR" placeholder="Tempat Lahir" value="<?php echo $riwayatKeluargaSuamiIstri['KTLAHIR'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TLAHIR" class="col-md-4 control-label">Tanggal Lahir</label>
                      <div class="col-md-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control" id="TLAHIR" placeholder="Tanggal Lahir" value="<?php echo $riwayatKeluargaSuamiIstri['TLAHIR'];?>" disabled>
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama" class="col-md-4 control-label">Pendidikan</label>
                      <div class="col-md-4">
                        <input class="form-control" id="nama" placeholder="Pendidikan" value="<?php echo $riwayatKeluargaSuamiIstri['nama'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TKAWIN" class="col-md-4 control-label">Tanggal Kawin</label>
                      <div class="col-md-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control" id="TKAWIN" placeholder="Tanggal Kawin" value="<?php echo $riwayatKeluargaSuamiIstri['TKAWIN'];?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="STUNJ" class="col-md-4 control-label">Status Tunjangan</label>
                      <div class="col-md-4">
                        <input class="form-control" id="STUNJ" placeholder="Status Tunjangan" value="<?php echo $riwayatKeluargaSuamiIstri['STUNJ'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="KKERJA" class="col-md-4 control-label">Pekerjaan</label>
                      <div class="col-md-4">
                        <input class="form-control" id="KKERJA" placeholder="Pekerjaan" value="<?php echo $riwayatKeluargaSuamiIstri['KKERJA'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ISAKHIR" class="col-md-4 control-label">Istri / Suami Terakhir</label>
                      <div class="col-md-4">
                        <input class="form-control" id="ISAKHIR" placeholder="Istri / Suami Terakhir" value="<?php echo $riwayatKeluargaSuamiIstri['ISAKHIR'];?>" disabled>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="anak">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Anak</strong>
              </p>
              <form class="form-horizontal">
                <div class="box-body scroll">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="NANAK" class="col-md-4 control-label">Nama Anak</label>
                      <div class="col-md-4">
                        <input class="form-control" id="NANAK" placeholder="Nama Anak" value="<?php echo $riwayatKeluargaAnak['NANAK'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TLAHIR" class="col-md-4 control-label">Tempat Lahir</label>
                      <div class="col-md-4">
                        <input class="form-control" id="TLAHIR" placeholder="Tempat Lahir" value="<?php echo $riwayatKeluargaAnak['TLAHIR'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TGLLAHIR" class="col-md-4 control-label">Tanggal Lahir</label>
                      <div class="col-md-4">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control" id="TGLLAHIR" placeholder="Tanggal Lahir" value="<?php echo $riwayatKeluargaAnak['TGLLAHIR'];?>" disabled>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="NKELAMIN" class="col-md-4 control-label">Kelamin</label>
                      <div class="col-md-4">
                        <input class="form-control" id="NKELAMIN" placeholder="Kelamin" value="<?php echo $riwayatKeluargaAnak['NKELAMIN'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="KELUARGA" class="col-md-4 control-label">Hubungan Keluarga</label>
                      <div class="col-md-4">
                        <input class="form-control" id="KELUARGA" placeholder="Hubungan Keluarga" value="<?php echo $riwayatKeluargaAnak['KELUARGA'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TUNJ" class="col-md-4 control-label">Tunjangan</label>
                      <div class="col-md-4">
                        <input class="form-control" id="TUNJ" placeholder="Tunjangan" value="<?php echo $riwayatKeluargaAnak['TUNJ'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TIJASAH" class="col-md-4 control-label">Tingkat Pendidikan Umum</label>
                      <div class="col-md-4">
                        <input class="form-control" id="TIJASAH" placeholder="Tingkat Pendidikan Umum" value="<?php echo $riwayatKeluargaAnak['TIJASAH'];?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama" class="col-md-4 control-label">Pekerjaan</label>
                      <div class="col-md-4">
                        <input class="form-control" id="nama" placeholder="Pekerjaan" value="<?php echo $riwayatKeluargaAnak['nama'];?>" disabled>
                      </div>
                    </div>
                  </div>
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
