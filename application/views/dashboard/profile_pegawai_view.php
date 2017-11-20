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
                                </ul>
                                <div class="tab-content">
                                <?php
                                  $dataIndukView= $this->load->view('dashboard/profile_pegawai_dataInduk_view', '', TRUE);
                                  $dataIndukRiwayatPegawai=$this->load->view('dashboard/profile_pegawai_riwayatPegawai_view','',TRUE);
                                  $dataIndukRiwayatPendidikan = $this->load->view('dashboard/profile_pegawai_riwayatPendidikan_view','',TRUE);
                                  $dataIndukRiwayatKeluarga = $this->load->view('dashboard/profile_pegawai_riwayatKeluarga_view','',TRUE);
                                  echo $dataIndukView;
                                  echo $dataIndukRiwayatPegawai;
                                  echo $dataIndukRiwayatPendidikan;
                                  echo $dataIndukRiwayatKeluarga;

                                ?>
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
