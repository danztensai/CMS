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
      <li class="active">Admin Simpeg</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Admin Simpeg</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#kepangkatan" data-toggle="tab" aria-expanded="true">Kepangkatan</a></li>
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
                <li class=""><a href="#suamiIstri" data-toggle="tab" aria-expanded="true">Suami/Istri</a></li>
                <li class=""><a href="#anak" data-toggle="tab" aria-expanded="true">Anak</a></li>
                <li class=""><a href="#ayah" data-toggle="tab" aria-expanded="true">Ayah</a></li>
                <li class=""><a href="#ibu" data-toggle="tab" aria-expanded="true">Ibu</a></li>
                <li class=""><a href="#instansi" data-toggle="tab" aria-expanded="false">Instansi</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="kepangkatan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegKepangkatan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="jabatan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegJabatan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="pendidikan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegPendidikan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="struktural">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegDiklatStruktural');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="fungsional">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegDiklatFungsional');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="teknik">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegDiklatTeknik');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="penataran">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegPenataran');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="seminar">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegSeminar');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="kursus">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegKursus');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="penghargaan">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegPenghargaan');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="organisasi">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegOrganisasi');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="tugas">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegTugas');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="bahasa">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegBahasa');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="dppp">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegDPPP');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="hukuman">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegHukuman');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="suamiIstri">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegSuamiIstri');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="anak">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegAnak');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="ayah">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegAyah');?>></IFRAME>
                  </div>
                </div>
                <div class="tab-pane" id="ibu">
                  <div class="intrinsic-container intrinsic-container-16x9">
                    <IFRAME SRC=<?php echo base_url('dashboard/adminSimpegIbu');?>></IFRAME>
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
