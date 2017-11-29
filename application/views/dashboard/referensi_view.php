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
      <li class="active">Referensi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Referensi</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Agama</a></li>
                <li class=""><a href="#instansi" data-toggle="tab" aria-expanded="false">Instansi</a></li>
                <li class=""><a href="#pegawai" data-toggle="tab" aria-expanded="false">Pegawai</a></li>
                <li class=""><a href="#kantorBayar" data-toggle="tab" aria-expanded="false">Kantor Bayar</a></li>
                <li class=""><a href="#pendidikan" data-toggle="tab" aria-expanded="false">Pendidikan</a></li>
                <li class=""><a href="#jabatan" data-toggle="tab" aria-expanded="false">Jabatan</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/referensiAgama');?>></IFRAME>
                  </div>
                </div>
                <?php
                $instansi=$this->load->view('dashboard/referensi_instansi_view','',TRUE);
                $pegawai=$this->load->view('dashboard/referensi_pegawai_view','',TRUE);
                $kantorBayar=$this->load->view('dashboard/referensi_kantor_bayar_view','',TRUE);
                $pendidikan=$this->load->view('dashboard/referensi_pendidikan_view','',TRUE);
                $jabatan=$this->load->view('dashboard/referensi_jabatan_view','',TRUE);
                echo $instansi;
                echo $pegawai;
                echo $kantorBayar;
                echo $pendidikan;
                echo $jabatan;
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
