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
      <li class="active">Operator Simpeg</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Operator Simpeg</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
				<li class="active"><a href="#dataUtama" data-toggle="tab" aria-expanded="true">Profile</a></li>
				<li class=""><a href="#suamiIstri" data-toggle="tab" aria-expanded="true">Suami/Istri</a></li>
                <li class=""><a href="#anak" data-toggle="tab" aria-expanded="true">Anak</a></li>
                <li class=""><a href="#ayah" data-toggle="tab" aria-expanded="true">Ayah</a></li>
                <li class=""><a href="#ibu" data-toggle="tab" aria-expanded="true">Ibu</a></li>
                <li class=""><a href="#kepangkatan" data-toggle="tab" aria-expanded="true">Kepangkatan</a></li>
                <li class=""><a href="#jabatan" data-toggle="tab" aria-expanded="true">Jabatan</a></li>
                <li class=""><a href="#pendidikan" data-toggle="tab" aria-expanded="true">Pendidikan</a></li>
                <li class=""><a href="#struktural" data-toggle="tab" aria-expanded="true">Kepemimpinan</a></li>
                <li class=""><a href="#fungsional" data-toggle="tab" aria-expanded="true">Fungsional</a></li>
                <li class=""><a href="#teknik" data-toggle="tab" aria-expanded="true">Teknik</a></li>
                <li class=""><a href="#penataran" data-toggle="tab" aria-expanded="true">Penataran</a></li>
                <li class=""><a href="#seminar" data-toggle="tab" aria-expanded="true">Seminar</a></li>
                <li class=""><a href="#kursus" data-toggle="tab" aria-expanded="true">Kursus</a></li>
                <li class=""><a href="#penghargaan" data-toggle="tab" aria-expanded="true">Penghargaan</a></li>
                <li class=""><a href="#organisasi" data-toggle="tab" aria-expanded="true">Organisasi</a></li>
                <li class=""><a href="#tugas" data-toggle="tab" aria-expanded="true">Tugas Luar</a></li>
                <li class=""><a href="#bahasa" data-toggle="tab" aria-expanded="true">Bahasa</a></li>
                <li class=""><a href="#dppp" data-toggle="tab" aria-expanded="true">DPPP</a></li>
                <li class=""><a href="#hukuman" data-toggle="tab" aria-expanded="true">Hukuman</a></li>
                
              </ul>
              <div class="tab-content">
			  <div class="tab-pane active" id="dataUtama">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/addNewPNSDataUtama');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="kepangkatan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegKepangkatan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="jabatan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegJabatan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="pendidikan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegPendidikan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="struktural">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegDiklatStruktural');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="fungsional">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegDiklatFungsional');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="teknik">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegDiklatTeknik');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="penataran">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegPenataran');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="seminar">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegSeminar');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="kursus">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegKursus');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="penghargaan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegPenghargaan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="organisasi">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegOrganisasi');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="tugas">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegTugas');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="bahasa">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegBahasa');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="dppp">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegDPPP');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="hukuman">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegHukuman');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="suamiIstri">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegSuamiIstri');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="anak">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegAnak');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="ayah">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegAyah');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="ibu">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/operatorSimpegIbu');?>></IFRAME>
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
