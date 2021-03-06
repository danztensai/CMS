<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>SIMPEG 2.0</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">

      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col-md-12">

        <div class="row">
          <div class="col-md-12">
            <!-- USERS LIST -->
            <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Referensi Agama</a></li>
                          <!-- <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Menu Management</a></li>
                          <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Instansi Management</a></li>
                          <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Group Management</a></li> -->

                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_1">

                            <div class="intrinsic-container intrinsic-container-16x9">
                          <IFRAME SRC=<?php echo base_url('dashboard/referensiAgama');?>></IFRAME>
                            </div>

                          </div>
                        
                        </div>
                        <!-- /.tab-content -->
                      </div>

          </div>
        </section>
        <!-- /.content -->
      </div>
  <!-- /.content-wrapper -->
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
