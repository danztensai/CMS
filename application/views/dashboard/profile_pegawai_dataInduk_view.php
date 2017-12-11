<script>  //Date picker
$( document ).ready(function() {

$('.select2').select2();
$('.selectAgama').select2();

$("select[value]").each(function(){
  //console.log(this.getAttribute("value"));
  $(this).val(this.getAttribute("value"));
});

$(':checkbox').each(function(){
    console.log("Checked Value : "+this.getAttribute("value"));
    var sumpahPNS = this.getAttribute("value");

    if(sumpahPNS==1)
    {
      $(this).prop('checked',true);
    }else
    {
      $(this).prop('checked',false);
    }

})

  $('#tglLahir').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  });
$('#submitIdentitas').click(function(){
<<<<<<< HEAD

=======
  if (confirm('Anda Yakin Akan Merubah Data Identitas')) {

    var f = $("#formIdentitas").serialize()
    console.log(f);
    var myFile = $('#file').prop('files')[0];
    console.log(myFile);
    var file_data = $('#fotofile').prop('files');
    console.log(file_data);
    var form_data = new FormData();

    var other_data =$('#formIdentitas').serializeArray() ;
    var jsonData = JSON.stringify($('#formIdentitas').serializeArray(), null, "  ");

      $.each(other_data,function(key,input){
          form_data.append(input.name,input.value);
      });

    form_data.append('file', myFile);
    form_data.append('json',jsonData);
    console.log(form_data);

    $.ajax({
                          url: '<?php echo base_url()?>dashboard/editIdentitas', // point to server-side controller method
                          dataType: 'text', // what to expect back from the server
                          cache: false,
                          contentType: false,
                          processData: false,
                          data: form_data,
                          type: 'post',
                          success: function (response) {
                            console.log(response);

                            alert('Perubahan Berhasil, Menunggu Untuk Dikonfirmasi');

                          },
                          error: function (response) {
                            console.log(response);
                            alert('Ada Masalah Di server');
                          }
                      });


  } else {
      // Do nothing!
  }
>>>>>>> parent of cd832e2... Fix BUg data confirmation not updated datautama table
  // $.each($('input,select,textarea,checkbox', '#formIdentitas'),function(k){
  //       //  console.log(k+' '+$(this).attr('disabled'));
  //       console.log(k+' '+$(this).attr('id'));
  //     });
  var f = $("#formIdentitas").serialize()
  console.log(f);
  var myFile = $('#file').prop('files')[0];
  console.log(myFile);
  var file_data = $('#fotofile').prop('files');
  console.log(file_data);
  var form_data = new FormData();

  var other_data =$('#formIdentitas').serializeArray() ;
  var jsonData = JSON.stringify($('#formIdentitas').serializeArray(), null, "  ");

    $.each(other_data,function(key,input){
        form_data.append(input.name,input.value);
    });

  form_data.append('file', myFile);
  form_data.append('json',jsonData);
  console.log(form_data);

  $.ajax({
                        url: '<?php echo base_url()?>dashboard/upload_foto', // point to server-side controller method
                        dataType: 'text', // what to expect back from the server
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                          console.log(response);
                        },
                        error: function (response) {
                          console.log(response);
                        }
                    });


});

$('#editIdentitas').click(function (){
//console.log('Click Edit');

$.each($('input,select,textarea', '#formIdentitas'),function(k){
      //  console.log(k+' '+$(this).attr('disabled'));
        var isDisabled = $(this).is(':disabled');
        if (isDisabled) {
            $(this).prop('disabled', false);
        }
    });

});


$('#cancelIdentitas').click(function (){


$.each($('input,select,textarea', '#formIdentitas'),function(k){
      //  console.log(k+' '+$(this).attr('disabled'));
        var isDisabled = $(this).is(':disabled');
        if (!isDisabled) {
            $(this).prop('disabled', true);
        }
    });

});

$('#editCPNS').click(function (){


$.each($('input,select,textarea', '#formCPNS'),function(k){
      //  console.log(k+' '+$(this).attr('disabled'));
        var isDisabled = $(this).is(':disabled');
        if (isDisabled) {
            $(this).prop('disabled', false);
        }
    });
    $.each($('input,select,textarea', '#formPNS'),function(k){
          //  console.log(k+' '+$(this).attr('disabled'));
            var isDisabled = $(this).is(':disabled');
            if (isDisabled) {
                $(this).prop('disabled', false);
            }
        });
});




$('#cancelCPNS').click(function (){


$.each($('input,select,textarea', '#formCPNS'),function(k){
      //  console.log(k+' '+$(this).attr('disabled'));
        var isDisabled = $(this).is(':disabled');
        if (!isDisabled) {
            $(this).prop('disabled', true);
        }
    });
    $.each($('input,select,textarea', '#formPNS'),function(k){
          //  console.log(k+' '+$(this).attr('disabled'));
            var isDisabled = $(this).is(':disabled');
            if (!isDisabled) {
                $(this).prop('disabled', true);
            }
        });

});

//cancelPangkatTerakhir
$('#editPangkatTerakhir').click(function (){
//console.log('Click Edit');

$.each($('input,select,textarea', '#formPangkatTerakhir'),function(k){
      //  console.log(k+' '+$(this).attr('disabled'));
        var isDisabled = $(this).is(':disabled');
        if (isDisabled) {
            $(this).prop('disabled', false);
        }
    });

});


$('#cancelPangkatTerakhir').click(function (){


$.each($('input,select,textarea', '#formPangkatTerakhir'),function(k){
      //  console.log(k+' '+$(this).attr('disabled'));
        var isDisabled = $(this).is(':disabled');
        if (!isDisabled) {
            $(this).prop('disabled', true);
        }
    });

});

$('#cancelGajiBerkala').click(function (){


$.each($('input,select,textarea', '#formGaji'),function(k){
      //  console.log(k+' '+$(this).attr('disabled'));
        var isDisabled = $(this).is(':disabled');
        if (!isDisabled) {
            $(this).prop('disabled', true);
        }
    });

});

$('#editGajiBerkala').click(function (){


$.each($('input,select,textarea', '#formGaji'),function(k){
      //  console.log(k+' '+$(this).attr('disabled'));
        var isDisabled = $(this).is(':disabled');
        if (isDisabled) {
            $(this).prop('disabled', false);
        }
    });
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

                                                    <form class="form-horizontal" name="formIdentitas" id="formIdentitas" action="">
                                                      <div class="box-body">
                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                                          <label for="inputNipBaru" class="col-md-4 control-label">NIP</label>

                                                          <div class="col-md-8">
                                                            <input class="form-control" name="nipBaru" id="inputNipBaru" placeholder="NIP" value="<?php echo $identitas['nipBaru'];?>" disabled>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="inputNipLama" class="col-md-4 control-label">NIP Lama</label>

                                                        <div class="col-md-8">
                                                            <input class="form-control"  name="nipLama" id="inputNipLama" placeholder="NIP Lama" value="<?php echo $identitas['nipLama'];?>"   disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="nama" class="col-md-4 control-label">Nama</label>

                                                        <div class="col-md-8">
                                                            <input class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $identitas['nama'];?>" disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="gelarDepan" class="col-md-4 control-label">Gelar Depan</label>

                                                        <div class="col-md-8">
                                                            <input class="form-control" name="gelarDepan" id="gelarDepan" placeholder="Gelar Depan" value="<?php echo $identitas['gelarDepan'];?>" disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="gelarBelakang" class="col-md-4 control-label">Gelar Belakang</label>

                                                          <div class="col-md-8">
                                                            <input class="form-control" name="gelarBlk"  id="gelarBelakang" placeholder="gelarBelakang" value="<?php echo $identitas['gelarBlk'];?>" disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="tempatLahir" class="col-md-4 control-label">Tempat Lahir</label>

                                                        <div class="col-md-8">
                                                            <input class="form-control" id="KTLAHIR" placeholder="Tempat Lahir" value="<?php echo $identitas['KTLAHIR']?>" disabled >
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="tanggalLahir" class="col-md-4 control-label">Tanggal Lahir</label>

                                                          <div class="col-md-8">
                                                            <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                  <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <input type="text" class="form-control pull-right" id="tglLahir" name="TLAHIR" value="<?php echo $identitas['TLAHIR']?>" disabled>
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="jeniKelamin" class="col-md-4 control-label">Jenis Kelamin</label>

                                                          <div class="col-md-8">
                                                            <select id="jenisKelamin" disabled="disabled" value="<?php echo $identitas['KJKEL']?>" name="KJKEL" class="form-control select2" style="width: 100%;">


                                                                  <option value="1">Pria</option>
                                                                  <option value="2">Wanita</option>

                                                            </select>


                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="agama" class="col-md-4 control-label">Agama</label>

                                                          <div class="col-md-8">
                                                            <select id="agama" disabled="disabled" value="<?php echo $identitas['agamaId']?>" name="agamaId" class="form-control selectAgama" style="width: 100%;">
                                                              <?php
                                                                foreach ($agama as $value) {
                                                                  ?>
                                                                    <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                              <?php
                                                              }
                                                              ?>
                                                            </select>
                                                          </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                          <label for="statusNikah" class="col-md-4 control-label">Status Nikah</label>

                                                          <div class="col-md-8">
                                                            <select id="statusNikah" disabled="disabled" value="<?php echo $identitas['jenisKawin']?>"  name="jenisKawin" class="form-control selectAgama" style="width: 100%;">
                                                              <?php
                                                                foreach ($relationShipSts as $value) {
                                                                  ?>
                                                                    <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                              <?php
                                                              }
                                                              ?>
                                                            </select>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="golonganDarah" class="col-md-4 control-label">Golongan Darah</label>

                                                          <div class="col-md-8">
                                                            <input class="form-control" id="golonganDarah" placeholder="Golongan Darah" name="KGOLDAR" value="<?php echo $identitas['KGOLDAR']?>" disabled>
                                                          </div>
                                                        </div>


                                                      </div>
                                                      <div class="col-md-6">

                                                        <div class="form-group">
                                                          <label for="alamat" class="col-md-4 control-label">Alamat</label>

                                                          <div class="col-md-8">
                                                            <input class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?php echo $identitas['alamat']?>" disabled >
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="rtrw" class="col-md-4 control-label">RT/RW</label>

                                                          <div class="col-md-2">
                                                            <input class="form-control" id="rt" placeholder="RT" name="ALRT" value="<?php echo $identitas['ALRT']?>" disabled>
                                                          </div>
                                                          <div class="col-md-2">
                                                            <input class="form-control" id="rw" placeholder="RW" name="ALRW" value="<?php echo $identitas['ALRW']?>" disabled>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="telepon" class="col-md-4 control-label">Telepon</label>

                                                          <div class="col-md-8">
                                                            <input class="form-control" id="telepon" placeholder="Telepon" name="noTelpon" value="<?php echo $identitas['noTelpon']?>" disabled>
                                                          </div>

                                                        </div>
                                                        <div class="form-group">
                                                          <label for="kodePos" class="col-md-4 control-label">Kode Pos</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="kodePos" placeholder="Kode Pos" name="KPOS" value="<?php echo $identitas['KPOS']?>" disabled>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="nomorKarpeg" class="col-md-4 control-label">No KARPEG</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="nomorKarpeg" placeholder="No Karpeg" name="kartuPegawai" value="<?php echo $identitas['kartuPegawai']?>" disabled>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="noTaspen" class="col-md-4 control-label">No Taspen</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="noTaspen" placeholder="noTaspen" name="taspen" value="<?php echo $identitas['taspen']?>" disabled>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="noAskes" class="col-md-4 control-label">No Askes</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="noAskes" placeholder="noAskes" name="askesNomor" value="<?php echo $identitas['askesNomor']?>" disabled>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="noKarisSU" class="col-md-4 control-label">No KARIS/SU</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="noKarissu" placeholder="No Karis/SU" name="NKARIS_SU" value="<?php echo $identitas['NKARIS_SU']?>" disabled>
                                                          </div>
                                                        </div>


                                                        <div class="form-group">
                                                          <label for="npwp" class="col-md-4 control-label">npwp</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="npwp" placeholder="NPWP" name="npwpNomor" value="<?php echo $identitas['npwpNomor']?>" disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="noKTP" class="col-md-4 control-label">No KTP</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="noKTP" placeholder="No KTP" name="NOPEN" value="<?php echo $identitas['NOPEN']?>" disabled>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="statusKepegawaian" class="col-sm-4 control-label">Status Kepegawaian</label>
                                                          <div class="col-md-8">
                                                            <select id="statusKepegawaian" disabled="disabled" value="<?php echo $identitas['statusCpnsPns']?>"  name="statusCpnsPns" class="form-control" style="width: 100%;">
                                                              <?php
                                                                foreach ($statusPegawai as $value) {
                                                                  ?>
                                                                    <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                              <?php
                                                              }
                                                              ?>
                                                            </select>
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="jenisKepegawaian" class="col-md-4 control-label">Jenis Kepegawaian</label>

                                                          <div class="col-md-8">
                                                            <select id="jenisKepegawaian" disabled="disabled" value="<?php echo $identitas['jenisPegawai']?>" name="jenisPegawai"class="form-control" style="width: 100%;">
                                                              <?php
                                                                foreach ($jenisPegawai as $value) {
                                                                  ?>
                                                                    <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                              <?php
                                                              }
                                                              ?>
                                                            </select>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="kedudukanPegawai" class="col-md-4 control-label">Kedudukan Pegawai</label>

                                                          <div class="col-md-8">
                                                            <select id="kedudukanPegawai" disabled="disabled" value="<?php echo $identitas['kedudukanHukum']?>" name="kedudukanHukum" class="form-control" style="width: 100%;">
                                                              <?php
                                                                foreach ($statusPegawai as $value) {
                                                                  ?>
                                                                    <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                              <?php
                                                              }
                                                              ?>
                                                            </select>
                                                          </div>
                                                        </div>

                                                      </div>
                                                    </form>
                                                      </div>

                                                      <!-- /.box-body -->

                                                      <!-- /.box-footer -->

                                              </div>
                                              <div class="col-md-2">
                                                                <p class="text-center">
                                                                  <strong>Foto</strong>
                                                                </p>

                                                                <img class="img-responsive" src="<?php echo $identitas['FILE_BMP'];?>" alt="Foto" width="460" height="345">
                                                                <div class="form-group">
                                                                  <label for="exampleInputFile">Upload Foto</label>
                                                                  <input type="file" id="file" name="file" >

                                                                  <p class="help-block">Upload Foto Anda Disini</p>
                                                                </div>
                                                                <!-- /.chart-responsive -->
                                              </div>
                                            </div>
                                          </div>
                                          <div class="box-footer">
<<<<<<< HEAD
                                            <button id="cancelIdentitas" type="submit" class="btn btn-danger">Cancel</button>
                                            <button id="editIdentitas" class="btn btn-warning">Edit</button>
                                            <button id="submitIdentitas" type="submit" class="btn btn-primary">Save</button>
=======
                                            <button id="cancelIdentitas" type="submit" class="btn btn-danger" disabled>Cancel</button>
                                            <button id="editIdentitas" class="btn btn-warning">Edit</button>
                                            <button id="submitIdentitas" type="submit" class="btn btn-primary" disabled>Save</button>
>>>>>>> parent of cd832e2... Fix BUg data confirmation not updated datautama table
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

                                                    <form class="form-horizontal" id="formCPNS">
                                                      <div class="box-body">
                                                        <div class="col-md-4">

                                                          <div class="form-group">
                                                            <label for="NIP" class="col-md-4 control-label">NIP</label>

                                                            <div class="col-md-8">
                                                              <input style='font-size: 12px;' class="form-control" id="NIP" placeholder="NIP" value="<?php echo $cpnspns['0']['nipBaru'] ?>" disabled>
                                                            </div>
                                                          </div>

                                                      <div class="form-group">
                                                        <label for="notaBKN" class="col-md-4 control-label">Nota BKN</label>
                                                        <div class="col-md-8">
                                                          <input class="form-control" id="notaBKN" placeholder="Nota BKN" value="<?php echo $cpnspns['0']['NTBAKN'] ?>" disabled>
                                                        </div>
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="tglNotaBKN" class="col-md-4 control-label">Tanggal Nota BKN</label>
                                                        <div class="col-md-8">

                                                          <div class="input-group date">
                                                              <div class="input-group-addon">
                                                                <i class="fa fa-calendar"></i>
                                                              </div>
                                                              <input type="text" class="form-control pull-right" id="tglNotaBKN" value="<?php echo $cpnspns['0']['TNTBAKN']?>" disabled>
                                                          </div>
                                                        </div>
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="pejabatMenetapkanCPNS" class="col-md-4 control-label">Yang Menetapkan</label>
                                                        <div class="col-md-8">
                                                          <select id="pejabatMenetapkanCPNS" disabled="disabled" value="<?php echo $cpnspns['0']['KPEJ_CPNS']?>" class="form-control" style="width: 100%;">
                                                            <?php
                                                              foreach ($pejabat as $value) {
                                                                ?>
                                                                  <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                          </select>
                                                        </div>
                                                      </div>

                                                      <div class="form-group">
                                                        <label for="noSKCPNS" class="col-md-4 control-label">No SK CPNS</label>
                                                        <div class="col-md-8">
                                                          <input class="form-control" id="noSKCPNS" placeholder="No SK CPNS" value="<?php echo $cpnspns['0']['nomorSkCpns']?>" disabled >
                                                        </div>
                                                      </div>
                                                      </div>

                                                      <div class="col-md-6">

                                                        <div class="form-group">
                                                          <label for="tanggalSKCPNS" class="col-md-4 control-label">Tanggal SK CPNS</label>
                                                          <div class="col-md-8">
                                                            <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                  <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <input type="text" class="form-control pull-right" id="tanggalSKCPNS" value="<?php echo $cpnspns['0']['tglSkCpns']?>" disabled>
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="tmtCPNS" class="col-md-4 control-label">TMT CPNS</label>
                                                          <div class="col-md-8">
                                                            <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                  <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <input type="text" class="form-control pull-right" id="tmtCPNS" value="<?php echo $cpnspns['0']['tmtCpns']?>" disabled>
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="golonganRuang" class="col-md-4 control-label">Golongan Ruang</label>
                                                          <div class="col-md-8">

                                                            <select id="golonganRuang" disabled="disabled" value="<?php echo $cpnspns['0']['KGOLRU_CPNS']?>" class="form-control" style="width: 100%;">
                                                              <?php
                                                                foreach ($jenisGolongan as $value) {
                                                                  ?>
                                                                    <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?> -<?php echo $value['pangkat'];?> </option>
                                                              <?php
                                                              }
                                                              ?>
                                                            </select>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="noSTTP" class="col-md-4 control-label">No STTP</label>
                                                          <div class="col-md-8">
                                                            <input class="form-control" id="noSTTP" placeholder="No STTP" value="<?php echo $cpnspns['0']['nomorSttpl']?>" disabled>
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                          <label for="tmtTugas" class="col-md-4 control-label">Tamat Tugas</label>
                                                          <div class="col-md-8">
                                                            <div class="input-group date">
                                                                <div class="input-group-addon">
                                                                  <i class="fa fa-calendar"></i>
                                                                </div>
                                                                <input type="text" class="form-control pull-right" id="tmtTugas" value="<?php echo $cpnspns['0']['tglSttpl']?>" disabled>
                                                            </div>
                                                          </div>
                                                        </div>

                                                      </div>
                                                      </div>

                                                      <!-- /.box-body -->
                                                      <div class="box-footer">
                                                        <button id="cancelCPNS" class="btn btn-danger">Cancel</button>
                                                        <button id="editCPNS"  class="btn btn-warning">Edit</button>
                                                        <button id="saveCPNS" type="submit" class="btn btn-info">Submit</button>
                                                      </div>
                                                      <!-- /.box-footer -->
                                                    </form>
                                              </div>
                                              <div class="col-md-4">
                                                                <p class="text-center">
                                                                  <strong>PNS</strong>
                                                                </p>
                                                                <form class="form-horizontal" id="formPNS">
                                                                  <div class="box-body">
                                                                      <div class="form-group">
                                                                        <label for="pejabatMenetapkanPNS" class="col-md-4 control-label">Pejabat Yang Menetapkan</label>
                                                                        <div class="col-md-8">

                                                                          <select id="pejabatMenetapkanPNS" disabled="disabled" value="<?php echo $cpnspns['0']['KPEJ_PNS']?>" class="form-control" style="width: 100%;">
                                                                            <?php
                                                                              foreach ($pejabat as $value) {
                                                                                ?>
                                                                                  <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                          </select>
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group">
                                                                        <label for="noSKPNS" class="col-md-4 control-label">No SK PNS</label>
                                                                        <div class="col-md-8">
                                                                          <input class="form-control" id="noSKPNS" placeholder="No SK PNS" value="<?php echo $cpnspns['0']['nomorSkPns']?>" disabled>
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group">
                                                                        <label for="tglSKPNS" class="col-md-4 control-label">Tanggal SK PNS</label>
                                                                        <div class="col-md-8">

                                                                          <div class="input-group date">
                                                                              <div class="input-group-addon">
                                                                                <i class="fa fa-calendar"></i>
                                                                              </div>
                                                                              <input type="text" class="form-control pull-right" id="tglSKPNS" value="<?php echo $cpnspns['0']['tglSkPns']?>" disabled>
                                                                          </div>
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group">
                                                                        <label for="tmtPNS" class="col-md-4 control-label">TMT PNS</label>
                                                                        <div class="col-md-8">

                                                                          <div class="input-group date">
                                                                              <div class="input-group-addon">
                                                                                <i class="fa fa-calendar"></i>
                                                                              </div>
                                                                              <input type="text" class="form-control pull-right" id="tmtPNS" value="<?php echo $cpnspns['0']['tmtPns']?>" disabled>
                                                                          </div>
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group">
                                                                        <label for="golRuangPNS" class="col-md-4 control-label">Golongan Ruang PNS</label>
                                                                        <div class="col-md-8">

                                                                          <select id="golRuangPNS" disabled="disabled" value="<?php echo $cpnspns['0']['KGOLRU_PNS']?>" class="form-control" style="width: 100%;">
                                                                            <?php
                                                                              foreach ($jenisGolongan as $value) {
                                                                                ?>
                                                                                  <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?> -<?php echo $value['pangkat'];?> </option>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                          </select>
                                                                        </div>
                                                                      </div>

                                                                      <div class="form-group">
                                                                        <label for="sumpahPNS" class="col-md-4 control-label">Sumpah PNS</label>
                                                                        <div class="col-md-8">

                                                                          <label>
                                                                              <input id="sumpahPNS" type="checkbox" value="<?php echo $cpnspns['0']['sumpahPNS']?>" disabled>
                                                                                Sudah
                                                                              </label>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                    <!-- <div class="box-footer">
                                                                      <button id="cancelPNS" class="btn btn-danger">Cancel</button>
                                                                      <button id="editPNS"  class="btn btn-warning">Edit</button>
                                                                      <button id="savePNS" type="submit" class="btn btn-info">Submit</button>
                                                                    </div> -->
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

                                                    <form id="formPangkatTerakhir" class="form-horizontal">
                                                      <div class="box-body">
                                                        <div class="col-md-6">

                                                          <div class="form-group">
                                                            <label for="nip" class="col-md-2 control-label">NIP</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $pangkatTerakhir['nip']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="stlud" class="col-md-2 control-label">STLUD</label>
                                                            <div class="col-md-8">

                                                              <select id="STLUD" disabled="disabled" value="<?php echo $pangkatTerakhir['KSTLUD']?>" class="form-control" style="width: 100%;">
                                                                <?php
                                                                  foreach ($stlud as $value) {
                                                                    ?>
                                                                      <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                              </select>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noStlud" class="col-md-2 control-label">NO STLUD</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noStlud" placeholder="No STLUD" value="<?php echo $pangkatTerakhir['NSTLUD']?>" disabled >
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglStlud" class="col-md-2 control-label">Tanggal STLUD</label>
                                                            <div class="col-md-8">

                                                              <div class="input-group date">
                                                                  <div class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                  </div>
                                                                  <input type="text" class="form-control pull-right" id="tglStlud" value="<?php echo $pangkatTerakhir['TSTLUD']?>" disabled>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="notaBAKN" class="col-md-2 control-label">Nota BAKN</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="notaBAKN" placeholder="Nota BAKN" value="<?php echo $pangkatTerakhir['NNTBAKN']?>" disabled >
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglBakn" class="col-md-2 control-label">Tanggal Nota BAKN</label>
                                                            <div class="col-md-8">

                                                              <div class="input-group date">
                                                                  <div class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                  </div>
                                                                  <input type="text" class="form-control pull-right" id="tglBakn" value="<?php echo $pangkatTerakhir['TNTBAKN']?>" disabled>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="pejabatMenetapkanPangkatTerakhir" class="col-md-2 control-label">Pejabat Menetapkan</label>
                                                            <div class="col-md-8">

                                                              <select id="pejabatMenetapkanPangkatTerakhir" disabled="disabled" value="<?php echo $pangkatTerakhir['PTETAP']?>" class="form-control" style="width: 100%;">
                                                                <?php
                                                                  foreach ($pejabat as $value) {
                                                                    ?>
                                                                      <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                              </select>
                                                            </div>
                                                          </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="noSKPangkat" class="col-md-2 control-label">No SK Pangkat</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noSKPangkat" placeholder="No SK Pangkat" value="<?php echo $pangkatTerakhir['NSKPANG']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglSKPangkat" class="col-md-2 control-label">Tanggal SK Pangkat</label>
                                                            <div class="col-md-8">

                                                              <div class="input-group date">
                                                                  <div class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                  </div>
                                                                  <input type="text" class="form-control pull-right" id="tglSKPangkat" value="<?php echo $pangkatTerakhir['TSKPANG']?>" disabled>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tmtPangkat" class="col-md-2 control-label">TMT Pangkat</label>
                                                            <div class="col-md-8">

                                                              <div class="input-group date">
                                                                  <div class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                  </div>
                                                                  <input type="text" class="form-control pull-right" id="tmtPangkat" value="<?php echo $pangkatTerakhir['TMTPANG']?>" disabled>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="golRuangPangkat" class="col-md-2 control-label">Gol/Ruang</label>
                                                            <div class="col-md-8">

                                                              <select id="golRuangPNS" disabled="disabled" value="<?php echo $pangkatTerakhir['KGOLRU']?>" class="form-control" style="width: 100%;">
                                                                <?php
                                                                  foreach ($jenisGolongan as $value) {
                                                                    ?>
                                                                      <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?> -<?php echo $value['pangkat'];?> </option>
                                                                <?php
                                                                }
                                                                ?>
                                                              </select>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="masaKerjaGolRuang" class="col-md-2 control-label">Masa Kerja Gol Ruang</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="masaKerjaGolRuang" placeholder="Masa Kerja Gol Ruang" value="<?php echo $pangkatTerakhir['MSKERJA']?>" disabled>
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="gajiPokok" class="col-md-2 control-label">Gaji Pokok</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="gajiPokok" placeholder="Gaji Pokok" value="<?php echo $pangkatTerakhir['GPOK']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="jenisNaikPangkat" class="col-md-2 control-label">Jenis Naik Pangkat</label>
                                                            <div class="col-md-8">

                                                              <select id="jenisNaikPangkat" disabled="disabled" value="<?php echo $pangkatTerakhir['KNPANG']?>" class="form-control" style="width: 100%;">
                                                                <?php
                                                                  foreach ($jenisNaikPangkat as $value) {
                                                                    ?>
                                                                      <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?> </option>
                                                                <?php
                                                                }
                                                                ?>
                                                              </select>
                                                            </div>
                                                          </div>

                                                        </div>
                                                      </div>
                                                    </form>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="box-footer">
                                                      <button id="cancelPangkatTerakhir" class="btn btn-danger ">Cancel</button>
                                                      <button id="editPangkatTerakhir" class="btn btn-warning">Edit</button>
                                                      <button id="savePangkatTerakhir" class="btn btn-info">Save</button>
                                         </div>
                                        </div>
                                        <div class="tab-pane" id="Gaji_berkala">
                                          <div class="box-body">
                                            <div class="row">
                                              <div class="col-md-12">

                                                                <p class="text-center">
                                                                  <strong>Gaji Berkala</strong>
                                                                </p>

                                                    <form class="form-horizontal" id="formGaji">
                                                      <div class="box-body">
                                                        <div class="col-md-12">

                                                          <div class="form-group">
                                                            <label for="nip" class="col-md-4 control-label">NIP</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $gaji[0]['NIP']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noSuratPemberitahuan" class="col-md-4 control-label">No Surat Pemberitahuan</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="noSuratPemberitahuan" placeholder="No Surat Pemberitahuan" value="<?php echo $gaji[0]['NSTAHU']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglSuratPemberitahuan" class="col-md-4 control-label">Tanggal Surat Pemberitahuan</label>
                                                            <div class="col-md-4">

                                                              <div class="input-group date">
                                                                  <div class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                  </div>
                                                                  <input type="text" class="form-control pull-right" id="tglSuratPemberitahuan" value="<?php echo $gaji[0]['TSTAHU']?>" disabled>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tmtKenaikanGajih" class="col-md-4 control-label">TMT Kenaikan Gaji</label>
                                                            <div class="col-md-4">

                                                              <div class="input-group date">
                                                                  <div class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                  </div>
                                                                  <input type="text" class="form-control pull-right" id="tmtKenaikanGaji" value="<?php echo $gaji[0]['TMTNGAJ']?>" disabled>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="masaKerjaGolRuangGajiBerkala" class="col-md-4 control-label">Masa Kerja Gol Ruang</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="masaKerjaGolRuangGajiBerkala" placeholder="Masa Kerja Gol Ruang" value="<?php echo $gaji[0]['MSKERJA']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="gajiPokokTerakhir" class="col-md-4 control-label">Gaji Pokok Terakhir</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="gajiPokokTerakhir" placeholder="gajiPokokTerakhir" value="<?php echo $gaji[0]['GPOKKHIR']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kantorBayar" class="col-md-4 control-label">Kantor Bayar</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kantorBayar" placeholder="Kantor Bayar" value="<?php echo $gaji[0]['NKANTOR']?>" disabled>
                                                            </div>
                                                          </div>

                                                        </div>
                                                      </div>
                                                    </form>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                              <button id="cancelGajiBerkala" class="btn btn-danger ">Cancel</button>
                                              <button id="editGajiBerkala" class="btn btn-warning">Edit</button>
                                              <button id="saveGajiBerkala" class="btn btn-info">Save</button>

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
                                                              <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $user->nip?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="instansiInduk" class="col-md-4 control-label">Instansi Induk</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="instansiInduk" placeholder="Instansi Induk" value="<?php echo $tempat['nunker']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="provinsi" class="col-md-4 control-label">Provinsi</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="provinsi" placeholder="Provinsi" value="<?php echo $tempat['nwil1']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kabKotaKotip" class="col-md-4 control-label">Kabupaten/Kota</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kabKotaKotip" placeholder="Kabupaten/Kota" value="<?php echo $tempat['nwil2']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kecamatan" class="col-md-4 control-label">Kecamatan</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kecamatan" placeholder="Kecamatan" disaled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kelurahan" class="col-md-4 control-label">Kelurahan</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kelurahan" placeholder="Kelurahan" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="komponen" class="col-md-4 control-label">Komponen</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="komponen" placeholder="Komponen" value="<?php echo $tempat['nunker2']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="unitKerja" class="col-md-4 control-label">Unit Kerja</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="unitKerja" placeholder="Unit Kerja" value="<?php echo $tempat['nunker']?>" disabled>
                                                            </div>
                                                          </div>


                                                          <div class="form-group">
                                                            <label for="provinsiLokasiKerja" class="col-md-4 control-label">Provinsi Lokasi Kerja</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="provinsiLokasiKerja" placeholder="Provinsi Lokasi Kerja" value="<?php echo $tempat['nwil1']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="kabKotaLokasiKerja" class="col-md-4 control-label">Kota/Kabupaten Lokasi Kerja</label>
                                                            <div class="col-md-4">
                                                              <input class="form-control" id="kabKotaLokasiKerja" placeholder="Kota/Kab Lokasi Kerja" value="<?php echo $tempat['nwil2']?>" disabled>
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

                                                    <form class="form-horizontal" id="formJabatanTerakhir">
                                                      <div class="box-body">
                                                        <div class="col-md-6">

                                                          <div class="form-group">
                                                            <label for="nip" class="col-md-2 control-label">NIP</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="nip" placeholder="NIP" value="<?php echo $jabatanTerakhir['NIP']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="pejabatMenetapkanJabatanTerakhir" class="col-md-2 control-label">Pejabat Menetapkan</label>
                                                            <div class="col-md-8">
                                                              <select id="pejabatMenetapkanJabatanTerakhir" disabled="disabled" value="<?php echo $jabatanTerakhir['KPEJ']?>" class="form-control" style="width: 100%;">
                                                                <?php
                                                                  foreach ($pejabat as $value) {
                                                                    ?>
                                                                      <option value="<?php echo $value['kode'];?>"><?php echo $value['nama'];?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                              </select>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noSKJabatan" class="col-md-2 control-label">No SK Jabatan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="noSKJabatan" placeholder="No SK Jabatan" value="<?php $jabatanTerakhir['NSKJABAT']?>" disabled>

                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tglSKJabatan" class="col-md-2 control-label">Tanggal SK Jabatan</label>
                                                            <div class="col-md-8">

                                                              <div class="input-group date">
                                                                  <div class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                  </div>
                                                                  <input type="text" class="form-control pull-right" id="tglSKJabatan" value="<?php echo $jabatanTerakhir['TSKJABAT']?>" disabled>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="jenisJabatan" class="col-md-2 control-label">Jenis Jabatan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="jenisJabatan" placeholder="Jenis Jabatan" value="<?php echo $jabatanTerakhir['namaJenisJabatan']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="eselon" class="col-md-2 control-label">Eselon</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="eselon" placeholder="Eselon" value="<?php echo $jabatanTerakhir['KESELON']?>" disabled>
                                                            </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                            <label for="subUnitKerja" class="col-md-2 control-label">Sub Unit Kerja</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="subUnitKerja" placeholder="Sub Unit Kerja" value="<?php echo $jabatanTerakhir['nunker']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="subSubUnitKerja" class="col-md-2 control-label">Sub Sub Unit Kerja</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="subSubUnitKerja" placeholder="Sub Unit Kerja" value="<?php echo $jabatanTerakhir['nunker2']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="subBagianUnitKerja" class="col-md-2 control-label">Sub Bagian Unit Kerja</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="subBagianUnitKerja" placeholder="Sub Bagian Unit Kerja" value="<?php echo $jabatanTerakhir['nunker3']?>" disabled>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="namaJabatan" class="col-md-2 control-label">Nama Jabatan</label>
                                                            <div class="col-md-8">
                                                              <textarea class="form-control" id="namaJabatan"  rows="6" placeholder="Nama Jabatan" disabled><?php echo $jabatanTerakhir['njab2']?></textarea>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="noSKPelantikan" class="col-md-2 control-label">No SK Pelantikan</label>
                                                            <div class="col-md-8">
                                                              <input class="form-control" id="masaKerjaGolRuang" placeholder="Masa Kerja Gol Ruang" value="<?php echo $jabatanTerakhir['NLANTIK']?>" disabled>
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="tglPelantikan" class="col-md-2 control-label">Tanggal Pelantikan</label>
                                                            <div class="col-md-8">

                                                              <div class="input-group date">
                                                                  <div class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                  </div>
                                                                  <input type="text" class="form-control pull-right" id="tglPelantikan" value="<?php echo $jabatanTerakhir['TLANTIK']?>" disabled>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="form-group">
                                                            <label for="tmtJabatan" class="col-md-2 control-label">TMT Jabatan</label>
                                                            <div class="col-md-8">

                                                              <div class="input-group date">
                                                                  <div class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                  </div>
                                                                  <input type="text" class="form-control pull-right" id="tglPelantikan" value="<?php echo $jabatanTerakhir['TMTJAB']?>" disabled>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="sumpahJabatan" class="col-md-2 control-label">Sumpah Jabatan</label>
                                                            <div class="col-md-8">

                                                              <label>
                                                                  <input id="sumpahJabatan" type="checkbox" value="<?php echo $jabatanTerakhir['SJAB']?>" disabled>
                                                                    Sudah
                                                                  </label>
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
