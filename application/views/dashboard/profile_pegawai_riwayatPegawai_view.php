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
      <li class="active"><a href="#pangkat" data-toggle="tab">Pangkat</a></li>
      <li><a href="#jabatan" data-toggle="tab">Jabatan</a></li>
      <li><a href="#organisasi" data-toggle="tab">Organisasi</a></li>
      <li><a href="#tandaJasa" data-toggle="tab">Tanda Jasa</a></li>
      <li><a href="#DPPP" data-toggle="tab">DPPP</a></li>
      <li><a href="#Hukuman" data-toggle="tab">Hukuman</a></li>
      <li><a href="#Cuti" data-toggle="tab">Cuti</a></li>
      <li><a href="#tln" data-toggle="tab">Tugas Luar Negeri</a></li>
      <li><a href="#bahasa" data-toggle="tab">Bahasa</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="pangkat">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Pangkat</strong>
                              </p>
                              <?php if($riwayatPangkat==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>

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
                            <input class="form-control" id="pejabatMenetapkan<?php echo $counter;?>" placeholder="Pejabat Yang Menetapkan" value="<?php echo $rp['npej']?>" disabled>
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
                <?php }
                ?>

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
                              <?php if($riwayatJabatan2==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <?php

                                  foreach($riwayatJabatan2 as $rj)
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
                                      <label for="namaJenisJabatan" class="col-md-4 control-label">Jenis Jabatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="namaJenisJabatan" placeholder="Jenis Jabatan" value="<?php echo $rj['namaJenisJabatan'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="nama" class="col-md-4 control-label">Eselon Jabatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="nama" placeholder="Eselon Jabatan" value="<?php echo $rj['nama'];?>" disabled>
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
                            <?php }
                            ?>

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
                                <strong>Riwayat Jabatan</strong>
                              </p>
                              <?php if($riwayatOrganisasi==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <?php

                                  foreach($riwayatOrganisasi as $rj)
                                  {
                                    ?>
                                <div class="row row-bordered">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="NIP" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $rj['NIP']?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="JORG" class="col-md-4 control-label">Jenis Organisasi</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="JORG" placeholder="Jenis Organisasi'" value="<?php echo $rj['JORG']?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NORG" class="col-md-4 control-label">Nama Organisasi</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NORG" placeholder="Nama Organisasi" value="<?php echo $rj['NORG']?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="JBORG" class="col-md-4 control-label">Jabatan Organisasi</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="JBORG" placeholder="Jabatan Organisasi" value="<?php echo $rj['JBORG']?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TMULAI<?php echo $counter;?>" class="col-md-4 control-label">Tanggal Mulai</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="TMULAI<?php echo $counter;?>" value="<?php echo $rj['TMULAI']?>" disabled>
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
                                            <input type="text" class="form-control pull-right" id="TAKHIR<?php echo $counter;?>" value="<?php echo $rj['TAKHIR']?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NPIMP" class="col-md-4 control-label">Nama Pemimpin</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NPIMP" placeholder="Nama Pemimpin" value="<?php echo $rj['NPIMP']?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="TEMPAT" class="col-md-4 control-label">Tempat</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="TEMPAT" placeholder="Tempat" value="<?php echo $rj['TEMPAT']?>" disabled>
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
      <div class="tab-pane" id="tandaJasa">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Jasa</strong>
                              </p>
                              <?php if($riwayatJasa==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <?php

                                  foreach($riwayatJasa as $rjas)
                                  {
                                    ?>
                                <div class="row row-bordered">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="nip" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $rjas['nip'];?>" disabled >
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NBINTANG" class="col-md-4 control-label">Nama Bintang Jasa</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NBINTANG" placeholder="Nama Bintang Jasa" value="<?php echo $rjas['NBINTANG'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="skNomor" class="col-md-4 control-label">No SK</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="skNomor" placeholder="no SK" value="<?php echo $rjas['skNomor'];?>" disabled>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="skDate" class="col-md-4 control-label">Tanggal SK</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="skDate" value="<?php echo $rjas['skDate'];?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="AOLEH" class="col-md-4 control-label">Asal Perolehan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="AOLEH" placeholder="Asal Perolehan" value="<?php echo $rjas['AOLEH'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="tahun" class="col-md-4 control-label">Tahun Perolehan</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="tahun" value="<?php echo $rjas['tahun'];?>" disabled>
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
      <div class="tab-pane" id="DPPP">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Jabatan</strong>
                              </p>
                              <?php if($riwayatDpp==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <?php

                                  foreach($riwayatDpp as $rd)
                                  {
                                    ?>
                                <div class="row row-bordered">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="NIP" class="col-md-4 control-label">NIP</label>
                                      <div class="col-sm-4">
                                        <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $rd['NIP'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="THNILAI" class="col-md-4 control-label">Tahun Penilaian</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="THNILAI" placeholder="Tahun Penilaian" value="<?php echo $rd['THNILAI'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NSETIA" class="col-md-4 control-label">Nilai Kesetiaan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="Nilai Kesetiaan" placeholder="no SK" value="<?php echo $rd['NSETIA'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NPRES" class="col-md-4 control-label">Nilai Prestasi</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NPRES" placeholder="Nilai Prestasi" value="<?php echo $rd['NPRES'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NTJAWAB" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NTJAWAB" placeholder="Nilai Tanggung Jawab" value="<?php echo $rd['NTJAWAB'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NTAAT" class="col-md-4 control-label">Nilai Ketaatan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NTAAT" placeholder="Nilai Ketaatan" value="<?php echo $rd['NTAAT'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NJUJUR" class="col-md-4 control-label">Nilai Kejujuran</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NJUJUR" placeholder="Nilai Kejujuran" value="<?php echo $rd['NJUJUR'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NKSAMA" class="col-md-4 control-label">Nilai Kerja Sama</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NKSAMA" placeholder="Nilai Kerja Sama" value="<?php echo $rd['NKSAMA'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NPKARSA" class="col-md-4 control-label">Nilai Prakarsa</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NPKARSA" placeholder="Nilai Prakarsa" value="<?php echo $rd['NPKARSA'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NPIMPIN" class="col-md-4 control-label">Nilai Kepemimpinan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NPIMPIN" placeholder="Nilai Kepemimpinan" value="<?php echo $rd['NPIMPIN'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NTOTAL" class="col-md-4 control-label">Nilai Total</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NTOTAL" placeholder="Nilai Total" value="<?php echo $rd['NTOTAL'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="NRATA" class="col-md-4 control-label">Nilai Rata-rata</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="NRATA" placeholder="Nilai Rata-rata" value="<?php echo $rd['NRATA'];?>" disabled>
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
      <div class="tab-pane" id="Hukuman">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Jabatan</strong>
                              </p>
                              <?php if($riwayatHukuman==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <?php

                                  foreach($riwayatHukuman as $rh)
                                  {
                                    ?>
                                <div class="row row-bordered">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="nipBaru" class="col-md-4 control-label">NIP</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="nipBaru" placeholder="NIP" value="<?php echo $rh['nipBaru'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="jenisHukuman" class="col-md-4 control-label">Jenis Hukuman</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="jenisHukuman" placeholder="Jenis Hukuman" value="<?php echo $rh['jenisHukuman'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="DESHUKUM" class="col-md-4 control-label">Deskripsi Hukuman</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="DESHUKUM" placeholder="Deskripsi Hukuman" value="<?php echo $rh['DESHUKUM'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="skNomor" class="col-md-4 control-label">No. SK</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="skNomor" placeholder="No. SK" value="<?php echo $rh['skNomor'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="skTanggal" class="col-md-4 control-label">Tahun Perolehan</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="skTanggal" value="<?php echo $rh['skTanggal'];?>" disabled>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="npej" class="col-md-4 control-label">Pejabat yang Menetapkan</label>
                                      <div class="col-md-4">
                                        <input class="form-control" id="npej" placeholder="Pejabat yang Menetapkan" value="<?php echo $rh['npej'];?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="hukumanTanggal" class="col-md-4 control-label">TMT Hukuman</label>
                                      <div class="col-md-4">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="hukumanTanggal" value="<?php echo $rh['hukumanTanggal'];?>" disabled>
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
      <div class="tab-pane" id="Cuti">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Jabatan</strong>
                              </p>
                              <?php if($riwayatCuti==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <?php

                                  foreach($riwayatCuti as $rc)
                                  {
                                    ?>
                                <div class="row row-bordered">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="nip" class="col-md-4 control-label">NIP</label>
                                       <div class="col-sm-4">
                                         <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $rc['nip'];?>" disabled>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="JCUTI" class="col-md-4 control-label">Jenis Cuti</label>
                                       <div class="col-md-4">
                                         <input class="form-control" id="JCUTI" placeholder="Jenis Cuti" value="<?php echo $rc['JCUTI'];?>" disabled>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="NSK" class="col-md-4 control-label">No. SK</label>
                                       <div class="col-md-4">
                                         <input class="form-control" id="NSK" placeholder="No. SK" value="<?php echo $rc['NSK'];?>" disabled>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="TSK" class="col-md-4 control-label">Tanggal SK</label>
                                       <div class="col-md-4">
                                         <div class="input-group date">
                                           <div class="input-group-addon">
                                             <i class="fa fa-calendar"></i>
                                           </div>
                                           <input class="form-control" id="TSK" placeholder="Tanggal SK" value="<?php echo $rc['TSK'];?>" disabled>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                                       <div class="col-md-4">
                                         <div class="input-group date">
                                           <div class="input-group-addon">
                                             <i class="fa fa-calendar"></i>
                                           </div>
                                           <input class="form-control" id="TMULAI" placeholder="Tanggal Mulai" value="<?php echo $rc['TMULAI'];?>" disabled>
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
                                           <input class="form-control" id="TAKHIR" placeholder="Tanggal Akhir" value="<?php echo $rc['TAKHIR'];?>" disabled>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="npej" class="col-md-4 control-label">Pejabat yang Menetapkan</label>
                                       <div class="col-md-4">
                                         <input class="form-control" id="npej" placeholder="Pejabat yang Menetapkan" value="<?php echo $rc['npej'];?>" disabled>
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
      <div class="tab-pane" id="tln">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Tugas Luar Negri</strong>
                              </p>
                              <?php if($riwayatTugasLuarNegri==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <?php

                                  foreach($riwayatTugasLuarNegri as $rtn)
                                  {
                                    ?>
                                <div class="row row-bordered">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="NIP" class="col-md-4 control-label">NIP</label>
                                       <div class="col-sm-4">
                                         <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $rtn['NIP'];?>" disabled>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="NNEG" class="col-md-4 control-label">Nama Negara</label>
                                       <div class="col-md-4">
                                         <input class="form-control" id="NNEG" placeholder="Nama Negara" value="<?php echo $rtn['NNEG'];?>" disabled>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="TUJUAN" class="col-md-4 control-label">Tujuan Penugasan</label>
                                       <div class="col-md-4">
                                         <input class="form-control" id="TUJUAN" placeholder="Tujuan Penugasan" value="<?php echo $rtn['TUJUAN'];?>" disabled>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="PTETAP" class="col-md-4 control-label">Pejabat Penetap</label>
                                       <div class="col-md-4">
                                         <input class="form-control" id="PTETAP" placeholder="Pejabat Penetap" value="<?php echo $rtn['PTETAP'];?>" disabled>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="NSK" class="col-md-4 control-label">No SK</label>
                                       <div class="col-md-4">
                                         <input class="form-control" id="NSK" placeholder="No SK" value="<?php echo $rtn['NSK'];?>" disabled>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="TSK" class="col-md-4 control-label">Tanggal SK</label>
                                       <div class="col-md-4">
                                         <div class="input-group date">
                                           <div class="input-group-addon">
                                             <i class="fa fa-calendar"></i>
                                           </div>
                                           <input class="form-control" id="TSK" placeholder="Pejabat Penetap" value="<?php echo $rtn['TSK'];?>" disabled>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                       <label for="TMULAI" class="col-md-4 control-label">Tanggal Mulai</label>
                                       <div class="col-md-4">
                                         <div class="input-group date">
                                           <div class="input-group-addon">
                                             <i class="fa fa-calendar"></i>
                                           </div>
                                           <input class="form-control" id="TMULAI" placeholder="Tanggal Mulai" value="<?php echo $rtn['TMULAI'];?>" disabled>
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
                                           <input class="form-control" id="TAKHIR" placeholder="Tanggal Akhir" value="<?php echo $rtn['TAKHIR'];?>" disabled>
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
      <div class="tab-pane" id="bahasa">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                              <p class="text-center">
                                <strong>Riwayat Tugas Luar Negri</strong>
                              </p>
                              <?php if($riwayatBahasa==null)
                              {
                                  log_message('debug','Empty Bro');
                              ?>
                              <h1>Belum Ada Data</h1>
                              <?php

                              }else{ ?>


                              <form class="form-horizontal">
                                <div class="box-body scroll">
                                  <?php

                                  foreach($riwayatBahasa as $rb)
                                  {
                                    ?>
                                <div class="row row-bordered">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="NIP" class="col-md-4 control-label">NIP</label>
                                       <div class="col-sm-4">
                                         <input class="form-control" id="NIP" placeholder="NIP" value="<?php echo $rb['NIP'];?>" disabled>
                                       </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="NBAHASA" class="col-md-4 control-label">Bahasa</label>
                                        <div class="col-sm-4">
                                          <input class="form-control" id="NBAHASA" placeholder="Bahasa" value="<?php echo $rb['NBAHASA'];?>" disabled>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                         <label for="KBAHASA" class="col-md-4 control-label">Kemampuan</label>
                                         <div class="col-sm-4">
                                           <input class="form-control" id="KBAHASA" placeholder="Kemampuan" value="<?php echo $rb['KBAHASA'];?>" disabled>
                                         </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="JBAHASA" class="col-md-4 control-label">Jenis Bahasa</label>
                                          <div class="col-sm-4">
                                            <input class="form-control" id="JBAHASA" placeholder="Jenis Bahasa" value="<?php echo $rb['JBAHASA'];?>" disabled>
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
