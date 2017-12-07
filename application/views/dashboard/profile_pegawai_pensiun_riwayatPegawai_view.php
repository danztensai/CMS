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

<div class="tab-pane" id="riwayatPegawai">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li><a href="#pangkat" data-toggle="tab">Pangkat</a></li>
      <li><a href="#jabatan" data-toggle="tab">Jabatan</a></li>
      <li><a href="#organisasi" data-toggle="tab">Organisasi</a></li>
      <li><a href="#tandaJasa" data-toggle="tab">Tanda Jasa</a></li>
      <li><a href="#DPPP" data-toggle="tab">DPPP</a></li>
      <li><a href="#penilaianKerja" data-toggle="tab">Penilaian Kerja</a></li>
      <li><a href="#hukuman" data-toggle="tab">Hukuman</a></li>
      <li><a href="#Cuti" data-toggle="tab">Cuti</a></li>
      <li><a href="#tln" data-toggle="tab">Tugas Luar Negeri</a></li>
      <li><a href="#bahasa" data-toggle="tab">Bahasa</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane" id="pangkat">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Pangkat</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatPangkat as $rp)
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
                          <label for="golRuang"<?php echo $counter;?> class="col-md-4 control-label">Gol/Ruang</label>
                          <div class="col-md-4">
                            <input class="form-control" id="golRuang<?php echo $counter;?>" placeholder="Gol/Ruang" value="<?php echo $rp['golNama']?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="kodeNaekPangkat<?php echo $counter;?>" class="col-md-4 control-label">Kode Naek Pangkat</label>
                          <div class="col-md-4">
                            <input class="form-control" id="kodeNaekPangkat<?php echo $counter;?>" placeholder="Kode Naek Pangkat" value="<?php echo $rp['nnpang']?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="tmtPangkatRiwayat<?php echo $counter;?>" class="col-md-4 control-label">TMT Pangkat</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tmtPangkatRiwayat<?php echo $counter;?>" value="<?php echo $rp['tmtGolongan']?>" disabled>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="noSkNaikPangkat<?php echo $counter;?>" class="col-md-4 control-label">No SK Naik Pangkat</label>
                          <div class="col-md-4">
                            <input class="form-control" id="noSkNaikPangkat<?php echo $counter;?>" placeholder="No SK Naik Pangkat" value="<?php echo $rp['nomorSk']?>" disabled>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="tglSKNaikPangkat" class="col-md-4 control-label">Tanggal SK Naik Pangkat</label>
                          <div class="col-md-4">

                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="tglSKNaikPangkat<?php echo $counter;?>" value="<?php echo $rp['tanggalSk']?>" disabled>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="pejabatMenetapkan<?php echo $counter;?>" class="col-md-4 control-label">Pejabat yang Menetapkan</label>
                          <div class="col-md-4">
                            <input class="form-control" id="pejabatMenetapkan<?php echo $counter;?>" placeholder="Pejabat Yang Menetapkan" value="<?php echo $rp['tanggalSk']?>" disabled>
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
      <!-- /.tab-pane -->
      <div class="tab-pane" id="jabatan">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Jabatan</strong>
                              </p>
                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <?php

                                  foreach($riwayatJabatanPensiun as $rj)
                                  {
                                    ?>
                                <div class="row row-bordered">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="nip" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $rj['nip']?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="unitKerja" class="col-md-4 control-label">Unit Kerja</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="unitKerja" placeholder="Unit Kerja" value="<?php echo $rj['nunkerUnitOrganisasi']?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="jenisJabatan" class="col-md-4 control-label">Jenis Jabatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="jenisJabatan" placeholder="Jenis Jabatan" value="<?php echo $rj['jnsjab'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="eselonJabatan" class="col-md-4 control-label">Eselon Jabatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="eselonJabatan" placeholder="eselonJabatan" value="<?php echo $rj['KESELON'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="jabatan" class="col-md-4 control-label">Jabatan</label>
                                      <div class="col-md-4">
                                        <textArea rows="5"class="form-control" id="jabatan" placeholder="jabatan" disabled><?php echo $rj['njab'];?></textarea>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="tmtJabatanRiwayat" class="col-md-4 control-label">tmtJabatan</label>
                                      <div class="col-md-4">

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="tmtJabatanRiwayat" value="<?php echo $rj['tmtJabatan'];?>" disabled>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="noSkNaikJabatan" class="col-md-4 control-label">noSkNaikJabatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="noSkNaikJabatan" placeholder="noSkNaikJabatan" value="<?php echo $rj['nomorSk'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="tglSKnaikJabatan" class="col-md-4 control-label">Tanggal SK Naik Jabatan</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="tglSKnaikJabatan" value="<?php echo $rj['tanggalSk'];?>" disabled>
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
            </div>
          </div>
        </div>

      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="organisasi">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Organisasi</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatOrganisasiPensiun as $rp)
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
                          <label for="JORG" class="col-md-4 control-label">Jenis Organisasi</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="JORG" placeholder="NIP" value="<?php echo $rp['JORG']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NORG" class="col-md-4 control-label">Nama Organisasi</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NORG" placeholder="No. SK" value="<?php echo $rp['NORG']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="JBORG" class="col-md-4 control-label">Jabatan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="JBORG" placeholder="No. SK" value="<?php echo $rp['JBORG']?>" disabled>
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
                          <label for="NPIMP" class="col-md-4 control-label">Nama Pimpinan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npej" placeholder="NPIMP" value="<?php echo $rp['NPIMP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npej" placeholder="TEMPAT" value="<?php echo $rp['TEMPAT']?>" disabled>
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
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tandaJasa">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Jasa</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatJasaPensiun as $rp)
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
                          <label for="NBINTANG" class="col-md-4 control-label">Nama Bintang Jasa</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NBINTANG" placeholder="NIP" value="<?php echo $rp['NBINTANG']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="skNomor" class="col-md-4 control-label">No. SK</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="skNomor" placeholder="NIP" value="<?php echo $rp['skNomor']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="skDate<?php echo $counter;?>" class="col-md-4 control-label">Tanggal SK</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="skDate<?php echo $counter;?>" value="<?php echo $rp['skDate']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tahun" class="col-md-4 control-label">Tahun Perolehan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="tahun" placeholder="NIP" value="<?php echo $rp['tahun']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="AOLEH" class="col-md-4 control-label">Asal Perolehan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="AOLEH" placeholder="NIP" value="<?php echo $rp['AOLEH']?>" disabled>
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
      <!-- /.tab-pane -->
      <div class="tab-pane" id="DPPP">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>RIWAYAT DPPP</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatDPPPPensiun as $rp)
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
                          <label for="THNILAI" class="col-md-4 control-label">Tahun Penilaian</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="THNILAI" placeholder="NIP" value="<?php echo $rp['THNILAI']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NSETIA" class="col-md-4 control-label">Nilai Kesetiaan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NSETIA" placeholder="NIP" value="<?php echo $rp['NSETIA']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NPRES" class="col-md-4 control-label">Nilai Prestasi</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NPRES" placeholder="NIP" value="<?php echo $rp['NPRES']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NTJAWAB" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NTJAWAB" placeholder="NIP" value="<?php echo $rp['NTJAWAB']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NTAAT" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NTAAT" placeholder="NIP" value="<?php echo $rp['NTAAT']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NJUJUR" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NJUJUR" placeholder="NIP" value="<?php echo $rp['NJUJUR']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NKSAMA" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NKSAMA" placeholder="NIP" value="<?php echo $rp['NKSAMA']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NPKARSA" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NPKARSA" placeholder="NIP" value="<?php echo $rp['NPKARSA']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NPIMPIN" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NPIMPIN" placeholder="NIP" value="<?php echo $rp['NPIMPIN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NTOTAL" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NTOTAL" placeholder="NIP" value="<?php echo $rp['NTOTAL']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NRATA" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NRATA" placeholder="NIP" value="<?php echo $rp['NRATA']?>" disabled>
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
      <!-- /.tab-pane -->
      <div class="tab-pane" id="penilaianKerja">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Penilaian Kerja</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatPenilaianKerjaPensiun as $rp)
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
                          <label for="NSKP" class="col-md-4 control-label">Nilai SKP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NSKP" placeholder="NIP" value="<?php echo $rp['NSKP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NPelayanan" class="col-md-4 control-label">Nilai Pelayanan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NPelayanan" placeholder="NIP" value="<?php echo $rp['NPelayanan']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NItegritas" class="col-md-4 control-label">Nilai Integritas</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NItegritas" placeholder="NIP" value="<?php echo $rp['NItegritas']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NKomitmen" class="col-md-4 control-label">Nilai Komitmen</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NKomitmen" placeholder="NIP" value="<?php echo $rp['NKomitmen']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NDisiplin" class="col-md-4 control-label">Nilai Disiplin</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NDisiplin" placeholder="NIP" value="<?php echo $rp['NDisiplin']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NKerjasama" class="col-md-4 control-label">Nilai Kerjasama</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NKerjasama" placeholder="NIP" value="<?php echo $rp['NKerjasama']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NKepemimpinan" class="col-md-4 control-label">Nilai Kepemimpinan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NKepemimpinan" placeholder="NIP" value="<?php echo $rp['NKepemimpinan']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NJumlah" class="col-md-4 control-label">Total Prilaku Kerja</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NJumlah" placeholder="NIP" value="<?php echo $rp['NJumlah']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NRataRata" class="col-md-4 control-label">Nilai Rata-Rata Prilaku Kerja</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NRataRata" placeholder="NIP" value="<?php echo $rp['NRataRata']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NPrilaku" class="col-md-4 control-label">Nilai Akhir Perilaku Kerja</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NPrilaku" placeholder="NIP" value="<?php echo $rp['NPrilaku']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TotalPrestasi" class="col-md-4 control-label">Total Akhir Prestasi Kerja</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="TotalPrestasi" placeholder="NIP" value="<?php echo $rp['TotalPrestasi']?>" disabled>
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

      <div class="tab-pane" id="hukuman">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Jasa</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatHukumanPensiun as $rp)
                      {
                      ?>
                    <div class="row row-bordered">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="nipBaru" class="col-md-4 control-label">NIP</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="nipBaru" placeholder="NIP" value="<?php echo $rp['nipBaru']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="jenisHukuman" class="col-md-4 control-label">Jenis Hukuman</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="jenisHukuman" placeholder="NIP" value="<?php echo $rp['jenisHukuman']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="DESHUKUM" class="col-md-4 control-label">Deskripsi Hukuman</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="DESHUKUM" placeholder="NIP" value="<?php echo $rp['DESHUKUM']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="skNomor" class="col-md-4 control-label">No. SK</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="skNomor" placeholder="No. SK" value="<?php echo $rp['skNomor']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="skTanggal<?php echo $counter;?>" class="col-md-4 control-label">Tanggal SK</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="skTanggal<?php echo $counter;?>" value="<?php echo $rp['skTanggal']?>" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="npej" class="col-md-4 control-label">Pejabat yang Menetapkan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npej" placeholder="NIP" value="<?php echo $rp['npej']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="hukumanTanggal<?php echo $counter;?>" class="col-md-4 control-label">TMT Hukuman</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="hukumanTanggal<?php echo $counter;?>" value="<?php echo $rp['hukumanTanggal']?>" disabled>
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
      <!-- /.tab-pane -->
      <div class="tab-pane" id="Cuti">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Cuti</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatCutiPensiun as $rp)
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
                          <label for="JCUTI" class="col-md-4 control-label">Jenis Cuti</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="JCUTI" placeholder="NIP" value="<?php echo $rp['JCUTI']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NSK" class="col-md-4 control-label">No. SK</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NSK" placeholder="No. SK" value="<?php echo $rp['NSK']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TSK<?php echo $counter;?>" class="col-md-4 control-label">Tanggal SK</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TSK<?php echo $counter;?>" value="<?php echo $rp['TSK']?>" disabled>
                            </div>
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
                          <label for="npej" class="col-md-4 control-label">Pejabat yang Menetapkan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="npej" placeholder="NIP" value="<?php echo $rp['npej']?>" disabled>
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
      <!-- /.tab-pane -->
      <div class="tab-pane" id="tln">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Tugas Luar Negri</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatTLNPensiun as $rp)
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
                          <label for="NNEG" class="col-md-4 control-label">Nama Negara</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NNEG" placeholder="NNEG" value="<?php echo $rp['NNEG']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TUJUAN" class="col-md-4 control-label">Tujuan Penugasan</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="TUJUAN" placeholder="No. SK" value="<?php echo $rp['TUJUAN']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="PTETAP" class="col-md-4 control-label">Pejabat Penetap</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="PTETAP" placeholder="No. SK" value="<?php echo $rp['PTETAP']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="NSK" class="col-md-4 control-label">No SK</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NSK" placeholder="No. SK" value="<?php echo $rp['NSK']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="TSK<?php echo $counter;?>" class="col-md-4 control-label">Tanggal SK</label>
                          <div class="col-md-4">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="TSK<?php echo $counter;?>" value="<?php echo $rp['TSK']?>" disabled>
                            </div>
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
      <!-- /.tab-pane -->
      <div class="tab-pane" id="bahasa2">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Tugas Luar Negri</strong>
                              </p>

              <form class="form-horizontal" id="formRiwayatPangket">
                    <div class="box-body scroll">
                      <?php
                      $counter = 1;
                      foreach($riwayatBahasaPensiun as $rp)
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
                          <label for="NBAHASA" class="col-md-4 control-label">Nama Bahasa</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="NNEG" placeholder="NBAHASA" value="<?php echo $rp['NBAHASA']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="KBAHASA" class="col-md-4 control-label">Kemampuan Bahasa</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="KBAHASA" placeholder="No. SK" value="<?php echo $rp['KBAHASA']?>" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="JBAHASA" class="col-md-4 control-label">Jenis Bahasa</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="JBAHASA" placeholder="No. SK" value="<?php echo $rp['JBAHASA']?>" disabled>
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
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div>
</div>
