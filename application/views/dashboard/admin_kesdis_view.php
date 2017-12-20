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
                <li class="active"><a href="#penghargaan" data-toggle="tab" aria-expanded="true">Penghargaan</a></li>
                <li class=""><a href="#cuti" data-toggle="tab" aria-expanded="true">Cuti</a></li>
                <li class=""><a href="#statusperkawinan" data-toggle="tab" aria-expanded="true">Status Perkawinan</a></li>
                <li class=""><a href="#hukuman" data-toggle="tab" aria-expanded="true">Hukuman</a></li>
                <li class=""><a href="#instansi" data-toggle="tab" aria-expanded="false">Instansi</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="penghargaan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminKesdisPenghargaan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="cuti">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminKesdisCuti');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="statusperkawinan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminKesdisStatusPerkawinan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="hukuman">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminKesdisHukuman');?>></IFRAME>
                  </div>
                </div>
                <?php
                $instansi=$this->load->view('dashboard/referensi_instansi_view','',TRUE);
                echo $instansi;
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
