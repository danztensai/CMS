<script>  //Date picker
$( document ).ready(function() {

$('.select2').select2();

$("select[value]").each(function(){
  console.log(this.getAttribute("value"));
  $(this).val(this.getAttribute("value"));
});

  $('#tglLahir').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  });
});
    </script>
<div class="tab-pane active" id="dataInduk">

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
                                                            <input class="form-control" id="inputEmail3" placeholder="NIP" value="<?php echo $identitas['nipBaru'];?>" disabled>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="inputPassword3" class="col-md-4 control-label">NIP Lama</label>

                                                        <div class="col-md-8">
                                                            <input class="form-control" id="inputPassword3" placeholder="NIP Lama" value="<?php echo $identitas['nipLama'];?>"   disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="nama" class="col-md-4 control-label">Nama</label>

                                                        <div class="col-md-8">
                                                            <input class="form-control" id="nama" placeholder="Nama" value="<?php echo $identitas['nama'];?>" disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="gelarDepan" class="col-md-4 control-label">Gelar Depan</label>

                                                        <div class="col-md-8">
                                                            <input class="form-control" id="gelarDepan" placeholder="Gelar Depan" value="<?php echo $identitas['gelarDepan'];?>" disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="gelarBelakang" class="col-md-4 control-label">Gelar Belakang</label>

                                                          <div class="col-md-8">
                                                            <input class="form-control" id="gelarBelakang" placeholder="gelarBelakang" value="<?php echo $identitas['gelarBlk'];?>" disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="tempatLahir" class="col-md-4 control-label">Tempat Lahir</label>

                                                        <div class="col-md-8">
                                                            <input class="form-control" id="tempatLahir" placeholder="Tempat Lahir" value="<?php echo $identitas['KTLAHIR']?>" disabled >
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="tanggalLahir" class="col-md-4 control-label">Tanggal Lahir</label>

                                                          <div class="col-md-8">
                                                            <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                  <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <input type="text" class="form-control pull-right" id="tglLahir" value="<?php echo $identitas['TLAHIR']?>" disabled>
                                                              </div>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="jeniKelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                                                          <div class="col-md-8">
                                                            <select id="jenisKelamin" disabled="disabled" value="<?php echo $identitas['KJKEL']?>" class="form-control select2" style="width: 100%;">


                                                                  <option value="1">Pria</option>
                                                                  <option value="2">Wanita</option>

                                                            </select>


                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="agama" class="col-md-4 control-label">Agama</label>

                                                          <div class="col-md-8">
                                                            <input class="form-control" id="agama" placeholder="Agama" value="<?php echo $identitas['agama'];?>" disabled>
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
                                          <div class="box-footer">
                                            <button type="submit" class="btn btn-default">Cancel</button>
                                            <button type="submit" class="btn btn-default">Edit</button>
                                            <button type="submit" class="btn btn-info">Save</button>
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
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="tab-pane" id="Pangkat_terakhir">
                                          <div class="box-body">
                                            <div class="row">
                                              <div class="col-md-12">

                                                                <p class="text-center">
                                                                  <strong>Pangkat Terakhir</strong>
                                                                </p>

                                                    <form class="form-horizontal">
                                                      <div class="box-body">
                                                        <div class="col-md-6">

                                                          <div class="form-group">
                                                            <label for="nip" class="col-md-2 control-label">NIP</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="nip" placeholder="NIP">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="stlud" class="col-md-2 control-label">STLUD</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="stlud" placeholder="STLUD">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noStlud" class="col-md-2 control-label">noStlud</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noStlud" placeholder="No STLUD">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglStlud" class="col-md-2 control-label">Tanggal STLUD</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tglStlud" placeholder="Tanggal STLUD">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="notaBAKN" class="col-md-2 control-label">Nota BAKN</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="notaBAKN" placeholder="Nota BAKN">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglBakn" class="col-md-2 control-label">Tanggal Nota BAKN</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tglBakn" placeholder="Tanggal Nota BAKN">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="pejabatMenetapkanPangkatTerakhir" class="col-md-2 control-label">Pejabat Menetapkan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="pejabatMenetapkanPangkatTerakhir" placeholder="Pejabat Menetapkan">
                                                            </div>
                                                          </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="noSKPangkat" class="col-md-2 control-label">No SK Pangkat</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noSKPangkat" placeholder="No SK Pangkat">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglSKPangkat" class="col-md-2 control-label">Tanggal SK Pangkat</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tglSKPangkat" placeholder="Tanggal SK Pangkat">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tmtPangkat" class="col-md-2 control-label">TMT Pangkat</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tmtPangkat" placeholder="TMT Pangkat">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="golRuangPangkat" class="col-md-2 control-label">Gol/Ruang</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="golRuangPangkat" placeholder="Gol/Ruang">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="masaKerjaGolRuang" class="col-md-2 control-label">Masa Kerja Gol Ruang</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="masaKerjaGolRuang" placeholder="Masa Kerja Gol Ruang">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="gajiPokok" class="col-md-2 control-label">Gaji Pokok</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="gajiPokok" placeholder="Gaji Pokok">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="jenisNaikPangkat" class="col-md-2 control-label">Jenis Naik Pangkat</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="jenisNaikPangkat" placeholder="Jenis Naik Pangkat">
                                                            </div>
                                                          </div>

                                                        </div>
                                                      </div>
                                                    </form>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="box-footer">
                                                      <button type="submit" class="btn btn-default ">Cancel</button>
                                                      <button type="submit" class="btn btn-default">Edit</button>
                                                      <button type="submit" class="btn btn-info">Save</button>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Gaji_berkala">
                                          <div class="box-body">
                                            <div class="row">
                                              <div class="col-md-12">

                                                                <p class="text-center">
                                                                  <strong>Gaji Berkala</strong>
                                                                </p>

                                                    <form class="form-horizontal">
                                                      <div class="box-body">
                                                        <div class="col-md-12">

                                                          <div class="form-group">
                                                            <label for="nip" class="col-md-4 control-label">NIP</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="nip" placeholder="NIP">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noSuratPemberitahuan" class="col-md-4 control-label">No Surat Pemberitahuan</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="noSuratPemberitahuan" placeholder="No Surat Pemberitahuan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglSuratPemberitahuan" class="col-md-4 control-label">Tanggal Surat Pemberitahuan</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="tglSuratPemberitahuan" placeholder="Tanggal Surat Pemberitahuan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tmtKenaikanGajih" class="col-md-4 control-label">TMT Kenaikan Gaji</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="tmtKenaikanGaji" placeholder="tmtKenaikanGaji">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="masaKerjaGolRuangGajiBerkala" class="col-md-4 control-label">Masa Kerja Gol Ruang</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="masaKerjaGolRuangGajiBerkala" placeholder="Masa Kerja Gol Ruang">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="gajiPokokTerakhir" class="col-md-4 control-label">Gaji Pokok Terakhir</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="gajiPokokTerakhir" placeholder="gajiPokokTerakhir">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kantorBayar" class="col-md-4 control-label">Kantor Bayar</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kantorBayar" placeholder="Kantor Bayar">
                                                            </div>
                                                          </div>

                                                        </div>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                        <button type="submit" class="btn btn-default">Cancel</button>
                                                        <button type="submit" class="btn btn-default">Edit</button>
                                                        <button type="submit" class="btn btn-info">Save</button>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="Pendidikan_terakhir">
                                          <div class="box-body">
                                            <div class="row">
                                              <div class="col-md-12">

                                                                <p class="text-center">
                                                                  <strong>Pendidikan</strong>
                                                                </p>

                                                    <form class="form-horizontal">
                                                      <div class="box-body">
                                                        <div class="col-md-12">

                                                          <div class="form-group">
                                                            <label for="nip" class="col-md-4 control-label">NIP</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="nip" placeholder="NIP">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tingkatPendidikan" class="col-md-4 control-label">Tingkat Pendidikan</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="tingkatPendidikan" placeholder="Tingkat Pendidikan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="jurusan" class="col-md-4 control-label">Jurusan</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="jurusan" placeholder="Jurusan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="namaPendUmum" class="col-md-4 control-label">Nama Pendidikan Umum</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="namaPendUmum" placeholder="Nama Pendidikan Umum">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="masaKerjaGolRuangGajiBerkala" class="col-md-4 control-label">Masa Kerja Gol Ruang</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="masaKerjaGolRuangGajiBerkala" placeholder="Masa Kerja Gol Ruang">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="namaSekolah" class="col-md-4 control-label">Nama Sekolah</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="namaSekolah" placeholder="Nama Sekolah">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="namaDiklatStruktural" class="col-md-4 control-label">Diklat Struktural</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="namaDiklatStruktural" placeholder="Diklat Struktural">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="namaDiklatFungsional" class="col-md-4 control-label">Diklat Fungsional</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="namaDiklatFungsional" placeholder="Diklat Fungsional">
                                                            </div>
                                                          </div>


                                                          <div class="form-group">
                                                            <label for="namaDiklatTeknik" class="col-md-4 control-label">Diklat Teknik</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="namaDiklatTeknik" placeholder="Diklat Teknik">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="namaPenataran" class="col-md-4 control-label">Penataran</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="namaPenataran" placeholder="Penataran">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="namaSeminar" class="col-md-4 control-label">Seminar</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="namaSeminar" placeholder="Seminar">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="namaKursus" class="col-md-4 control-label">Kursus</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="namaKursus" placeholder="Kursus">
                                                            </div>
                                                          </div>

                                                        </div>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="Tempat">
                                          <div class="box-body">
                                            <div class="row">
                                              <div class="col-md-12">

                                                                <p class="text-center">
                                                                  <strong>Tempat</strong>
                                                                </p>

                                                    <form class="form-horizontal">
                                                      <div class="box-body">
                                                        <div class="col-md-12">

                                                          <div class="form-group">
                                                            <label for="nip" class="col-md-4 control-label">NIP</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="nip" placeholder="NIP">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="instansiInduk" class="col-md-4 control-label">Instansi Induk</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="instansiInduk" placeholder="Instansi Induk">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="provinsi" class="col-md-4 control-label">Provinsi</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="provinsi" placeholder="Provinsi">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kabKotaKotip" class="col-md-4 control-label">Kabupaten/Kota</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kabKotaKotip" placeholder="Kabupaten/Kota">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kecamatan" class="col-md-4 control-label">Kecamatan</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kecamatan" placeholder="Kecamatan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kelurahan" class="col-md-4 control-label">Kelurahan</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kelurahan" placeholder="Kelurahan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="komponen" class="col-md-4 control-label">Komponen</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="komponen" placeholder="Komponen">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="unitKerja" class="col-md-4 control-label">Unit Kerja</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="unitKerja" placeholder="Unit Kerja">
                                                            </div>
                                                          </div>


                                                          <div class="form-group">
                                                            <label for="provinsiLokasiKerja" class="col-md-4 control-label">Provinsi Lokasi Kerja</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="provinsiLokasiKerja" placeholder="Provinsi Lokasi Kerja">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kabKotaLokasiKerja" class="col-md-4 control-label">Kota/Kabupaten Lokasi Kerja</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kabKotaLokasiKerja" placeholder="Kota/Kab Lokasi Kerja">
                                                            </div>
                                                          </div>



                                                        </div>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                        <button type="submit" class="btn btn-default">Cancel</button>
                                                        <button type="submit" class="btn btn-default">Edit</button>
                                                        <button type="submit" class="btn btn-info">Save</button>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="Jabatan_terakhir">
                                          <div class="box-body">
                                            <div class="row">
                                              <div class="col-md-12">

                                                                <p class="text-center">
                                                                  <strong>Jabatan Terakhir</strong>
                                                                </p>

                                                    <form class="form-horizontal">
                                                      <div class="box-body">
                                                        <div class="col-md-6">

                                                          <div class="form-group">
                                                            <label for="nip" class="col-md-2 control-label">NIP</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="nip" placeholder="NIP">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="pejabatMenetapkanJabatanTerakhir" class="col-md-2 control-label">Pejabat Menetapkan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="pejabatMenetapkanJabatanTerakhir" placeholder="Pejabat Menetapkan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noSKJabatan" class="col-md-2 control-label">No SK Jabatan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noSKJabatan" placeholder="No SK Jabatan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglSKJabatan" class="col-md-2 control-label">Tanggal SK Jabatan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tglSKJabatan" placeholder="Tanggal SK Jabatan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="jenisJabatan" class="col-md-2 control-label">Jenis Jabatan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="jenisJabatan" placeholder="Jenis Jabatan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="eselon" class="col-md-2 control-label">Eselon</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="eselon" placeholder="Eselon">
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="subUnitKerja" class="col-md-2 control-label">Sub Unit Kerja</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="subUnitKerja" placeholder="Sub Unit Kerja">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="subSubUnitKerja" class="col-md-2 control-label">Sub Sub Unit Kerja</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="subSubUnitKerja" placeholder="Sub Unit Kerja">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="subBagianUnitKerja" class="col-md-2 control-label">Sub Bagian Unit Kerja</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="subBagianUnitKerja" placeholder="Sub Bagian Unit Kerja">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="namaJabatan" class="col-md-2 control-label">Nama Jabatan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="namaJabatan" placeholder="namaJabatan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noSKPelantikan" class="col-md-2 control-label">No SK Pelantikan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="masaKerjaGolRuang" placeholder="Masa Kerja Gol Ruang">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="tglPelantikan" class="col-md-2 control-label">Tanggal Pelantikan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tglPelantikan" placeholder="Tanggal Pelantikan">
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tmtJabatan" class="col-md-2 control-label">TMT Jabatan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="tmtJabatan" placeholder="TMT Jabatan">
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="sumpahJabatan" class="col-md-2 control-label">Sumpah Jabatan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="sumpahJabatan" placeholder="sumpah Jabatan">
                                                            </div>
                                                          </div>

                                                        </div>
                                                      </div>
                                                    </form>
                                              </div>
                                            </div>
                                          </div>





                                          <div class="box-footer">
                                                      <button type="submit" class="btn btn-default ">Cancel</button>
                                                      <button type="submit" class="btn btn-default">Edit</button>
                                                      <button type="submit" class="btn btn-info">Save</button>
                                         </div>



                                        </div>
                                      </div>
                                </div>
