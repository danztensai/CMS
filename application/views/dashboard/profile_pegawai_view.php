<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="fa fa-dashboard"></i> Dashboard

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Dashboard</li>
        <li class="active">Profile Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
          <div class="col-md-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Profile Pegawai</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#dataInduk" data-toggle="tab" aria-expanded="true">Data Induk</a></li>
                                  <li class=""><a href="#riwayatPegawai" data-toggle="tab" aria-expanded="false">Riwayat Pegawai</a></li>
                                  <li class=""><a href="#riwayatPendidikan" data-toggle="tab" aria-expanded="false">Riwayat Pendidikan</a></li>
                                  <li class=""><a href="#riwayatKeluarga" data-toggle="tab" aria-expanded="false">Riwayat Keluarga</a></li>
                                  <li class=""><a href="#documentOnline" data-toggle="tab" aria-expanded="false">Arsip/Dokumen</a></li>
                                  <li class=""><a href="#setting" data-toggle="tab" aria-expanded="false">Settings</a></li>
                                </ul>
                                <div class="tab-content">
                                <?php
                                  $dataIndukView= $this->load->view('dashboard/profile_pegawai_dataInduk_view', '', TRUE);
                                  $dataIndukRiwayatPegawai=$this->load->view('dashboard/profile_pegawai_riwayatPegawai_view','',TRUE);
                                  $dataIndukRiwayatPendidikan = $this->load->view('dashboard/profile_pegawai_riwayatPendidikan_view','',TRUE);
                                  $dataIndukRiwayatKeluarga = $this->load->view('dashboard/profile_pegawai_riwayatKeluarga_view','',TRUE);
                                  $documentOnline = $this->load->view('dashboard/profile_pegawai_documentArchive_view','',TRUE);
                                  echo $dataIndukView;
                                  echo $dataIndukRiwayatPegawai;
                                  echo $dataIndukRiwayatPendidikan;
                                  echo $dataIndukRiwayatKeluarga;
                                  echo $documentOnline;

                                ?>
                                <div class="tab-pane" id="setting">
                                  <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Kata Sandi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-4">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-4">
                      <button id="updatePass" class="btn btn-info pull-right">Ganti Password</button>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-info pull-right">Change Password</button> -->
              </div>
              <!-- /.box-footer -->

          </div>
                                </div>
                              </div>
                                <!-- /.tab-content -->
                  </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->

      </div>
     </div>
    </div>
    <script>
    $(document).ready(function(){
    $("#updatePass").click(function(){

      var pass = $('#inputPassword').val();
      console.log(pass);
      $.post( "<?php echo base_url() ?>dashboard/updatePassword", { password: pass })
            .done(function( data ) {
              alert( "Password Berhasil Di Update");
            });

    });
});</script>
