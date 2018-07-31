<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Dashboard</li>
        <li class="active">Data Kepegawaian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kepegawaian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                  <table id="example" class="display" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th>Nip</th>
                                  <th>Nama</th>
                                  <th>Picture</th>
                                  <th>Jabatan</th>
                                  <th>Pendidikan Terakhir</th>
                                  <th>Jurusan</th>
                                  <th>Unit Kerja</th>
                                  <th>Sub Unit Kerja</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Picture</th>
                                <th>Jabatan</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Jurusan</th>
                                <th>Unit Kerja</th>
                                <th>Sub Unit Kerja</th>
                              </tr>
                          </tfoot>
                      </table>

              <!-- /.row -->
            </div>
            <!-- ./box-body -->

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
$(document).ready(function() {
    $('#example').DataTable( {
      "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "http://localhost/apiCI/index.php/api/simpeg/simpegs",
        "columnDefs": [ {
              "targets": 2,
              "searchable": false,
              "data" : "img",
              "render" : function( url, type, full){
                return '<img height="100" width="100"src="'+full[2]+'"/>';
              }
            } ]
    } );
} );

</script>
