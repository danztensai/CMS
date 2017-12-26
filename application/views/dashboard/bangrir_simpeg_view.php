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
      <li class="active">Bangrir Simpeg</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Bangrir Simpeg</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#jabatan" data-toggle="tab" aria-expanded="true">Jabatan</a></li>
                <li class=""><a href="#pendidikan" data-toggle="tab" aria-expanded="true">Pendidikan</a></li>
                <li class=""><a href="#struktural" data-toggle="tab" aria-expanded="true">Kepemimpinan</a></li>
                <li class=""><a href="#fungsional" data-toggle="tab" aria-expanded="true">Fungsional</a></li>
                <li class=""><a href="#tugas" data-toggle="tab" aria-expanded="true">Tugas Luar</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="jabatan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/bangrirSimpegJabatan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="pendidikan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/bangrirSimpegPendidikan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="struktural">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/bangrirSimpegDiklatStruktural');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="fungsional">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/bangrirSimpegDiklatFungsional');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="tugas">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/bangrirSimpegTugas');?>></IFRAME>
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
