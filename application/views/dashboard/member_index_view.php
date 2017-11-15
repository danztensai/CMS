<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
     $('#birthday').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "dashboard/getCurrentDayBirthday"
        } );

   });

</script>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <i class="fa fa-dashboard"></i> Dashboard

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">

      <div class="col-md-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Today Birthday</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="birthday" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nip</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Instansi</th>
                                    <th>SubUnit</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <th>Nip</th>
                                  <th>Nama</th>
                                  <th>Umur</th>
                                  <th>Instansi</th>
                                  <th>SubUnit</th>
                                  <th>Jabatan</th>
                                </tr>
                            </tfoot>
                        </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>



     </div>



    </div>
