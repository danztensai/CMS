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
<style>
.scroll{
  height:300px;
  overflow-y:scroll;
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
      <li><a href="#Hukuman" data-toggle="tab">Hukuman</a></li>
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
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
          like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tandaJasa">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <p class="text-center">
                  <strong>Riwayat Tanda Jasa</strong>
                </p>
                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="nip" class="col-md-4 control-label">NIP</label>
                        <div class="col-sm-4">
                          <input class="form-control" id="nip" placeholder="NIP">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="namaBintangJasa" class="col-md-4 control-label">Nama Bintang Jasa</label>
                        <div class="col-md-4">
                          <input class="form-control" id="namaBintangJasa" placeholder="Nama Bintang Jasa">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="noSK" class="col-md-4 control-label">No. SK</label>
                        <div class="col-md-4">
                          <input class="form-control" id="noSK" placeholder="No. SK">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggalLahir" class="col-md-4 control-label">Tanggal SK</label>
                        <div class="col-md-4">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="tglSK" value="" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="thnPerolehan" class="col-md-4 control-label">Tahun Perolehan</label>
                        <div class="col-md-4">
                          <input class="form-control" id="thnPerolehan" placeholder="Tahun Perolehan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="asalPerolehan" class="col-md-4 control-label">Asal Perolehan</label>
                        <div class="col-md-4">
                          <input class="form-control" id="asalPerolehan" placeholder="Asal Perolehan">
                        </div>
                      </div>
                    </div>
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
                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="nip" class="col-md-4 control-label">NIP</label>
                        <div class="col-sm-4">
                          <input class="form-control" id="nip" placeholder="NIP">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="THNILAI" class="col-md-4 control-label">Tahun Penilaian</label>
                        <div class="col-md-4">
                          <input class="form-control" id="THNILAI" placeholder="Tahun Penilaian">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NSETIA" class="col-md-4 control-label">Nilai Kesetiaan</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NSETIA" placeholder="Nilai Kesetiaan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NPRES" class="col-md-4 control-label">Nilai Prestasi</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NPRES" placeholder="Nilai Prestasi">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NTJAWAB" class="col-md-4 control-label">Nilai Tanggung Jawab</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NTJAWAB" placeholder="Nilai Tanggung Jawab">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NTAAT" class="col-md-4 control-label">Nilai Ketaatan</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NTAAT" placeholder="Nilai Ketaatan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NJUJUR" class="col-md-4 control-label">Nilai Kejujuran</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NJUJUR" placeholder="Nilai Kejujuran">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NKSAMA" class="col-md-4 control-label">Nilai Kerja Sama</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NKSAMA" placeholder="Nilai Kerja Sama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NPKARSA" class="col-md-4 control-label">Nilai Prakarsa</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NPKARSA" placeholder="Nilai Prakarsa">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NPIMPIN" class="col-md-4 control-label">Nilai Kepemimpinan</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NPIMPIN" placeholder="Nilai Kepemimpinan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NTOTAL" class="col-md-4 control-label">Nilai Total</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NTOTAL" placeholder="Nilai Total">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="NRATA" class="col-md-4 control-label">Nilai Rata-rata</label>
                        <div class="col-md-4">
                          <input class="form-control" id="NRATA" placeholder="Nilai Rata-rata">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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
                  <strong>RIWAYAT HUKUMAN</strong>
                </p>
                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="nip" class="col-md-4 control-label">NIP</label>
                        <div class="col-sm-4">
                          <input class="form-control" id="nip" placeholder="NIP">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="jenisHukuman" class="col-md-4 control-label">Jenis Hukuman</label>
                        <div class="col-md-4">
                          <input class="form-control" id="jenisHukuman" placeholder="Jenis Hukuman">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="DESHUKUM" class="col-md-4 control-label">Deskripsi Hukuman</label>
                        <div class="col-md-4">
                          <input class="form-control" id="DESHUKUM" placeholder="Deskripsi Hukuman">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="skNomor" class="col-md-4 control-label">No. SK</label>
                        <div class="col-md-4">
                          <input class="form-control" id="skNomor" placeholder="No. SK">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggalLahir" class="col-md-4 control-label">Tanggal SK</label>
                        <div class="col-md-4">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="tglSK" value="" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="KPEJ" class="col-md-4 control-label">Pejabat yang Menetapkan</label>
                        <div class="col-md-4">
                          <input class="form-control" id="KPEJ" placeholder="Pejabat yang Menetapkan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="hukumanTanggal" class="col-md-4 control-label">TMT Hukuman</label>
                        <div class="col-md-4">
                          <input class="form-control" id="hukumanTanggal" placeholder="TMT Hukuman">
                        </div>
                      </div>
                    </div>
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
                  <strong>RIWAYAT CUTI</strong>
                </p>
                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="nip" class="col-md-4 control-label">NIP</label>
                        <div class="col-sm-4">
                          <input class="form-control" id="nip" placeholder="NIP">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="JCUTI" class="col-md-4 control-label">Jenis Cuti</label>
                        <div class="col-md-4">
                          <input class="form-control" id="JCUTI" placeholder="Jenis Cuti">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="SkNomor" class="col-md-4 control-label">No. SK</label>
                        <div class="col-md-4">
                          <input class="form-control" id="SkNomor" placeholder="No. SK">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggalLahir" class="col-md-4 control-label">Tanggal SK</label>
                        <div class="col-md-4">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="tglSK" value="" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggalLahir" class="col-md-4 control-label">Tanggal Mulai</label>
                        <div class="col-md-4">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="TanggalAwal" value="" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tanggalLahir" class="col-md-4 control-label">Tanggal Akhir</label>
                        <div class="col-md-4">
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="TanggalAkhir" value="" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="PTETAP" class="col-md-4 control-label">Pejabat yang Menetapkan</label>
                        <div class="col-md-4">
                          <input class="form-control" id="PTETAP" placeholder="Pejabat yang Menetapkan">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tln">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          It has survived not only five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
          like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="bahasa">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <p class="text-center">
                  <strong>Bahasa</strong>
                </p>
                <form class="form-horizontal">
                  <div class="box-body scroll">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="nip" class="col-md-4 control-label">NIP</label>
                        <div class="col-sm-4">
                          <input class="form-control" id="nip" placeholder="NIP">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="bahasa" class="col-md-4 control-label">Bahasa</label>
                        <div class="col-md-4">
                          <input class="form-control" id="bahasa" placeholder="Bahasa">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="kemampuan" class="col-md-4 control-label">Kemampuan</label>
                        <div class="col-md-4">
                          <input class="form-control" id="kemampuan" placeholder="Kemampuan">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="jenisBahasa" class="col-md-4 control-label">Jenis Bahasa</label>
                        <div class="col-md-4">
                          <input class="form-control" id="jenisBahasa" placeholder="Jenis Bahasa">
                        </div>
                      </div>
                    </div>
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
