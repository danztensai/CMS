<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/chartjs/Chart.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/chartjs/utils.js"></script>
<script src="<?php echo base_url()?>assets/chartjs/Chart.PieceLabel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js" type="text/javascript"></script>
<script src="https://chartjs-plugin-datalabels.netlify.com/chartjs-plugin-datalabels.js"></script>
<script type="text/javascript">
   $(document).ready(function(){

     $('#HistoryAbsensi').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "getHistoryAbsensi"
        } );
        $('#HistoryAbsensiBawahan').DataTable( {
               "processing": true,
               "serverSide": true,
               "ajax": "getHistoryAbsensiBawahan"
           } );


           //pieChart
   var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
					<?php
            foreach($countAbsensi as $data)
            {
              if($data['kode'] == 1 || $data['kode']==2)
              {
          ?>
              <?php echo $data['total']?>,
          <?php
              }
          }
          ?>
					],
					backgroundColor: [
						window.chartColors.blue,
						window.chartColors.red,
						window.chartColors.yellow,
						window.chartColors.green,
					],
					label: 'Dataset 1'
				}],
				labels: [
          <?php
            foreach($countAbsensi as $data)
            {
              if($data['kode'] == 1 || $data['kode']==2)
              {
          ?>
              '<?php echo $data['status']?>',
          <?php
              }
            }
          ?>
				]
			},
			options: {
				responsive: true,
        pieceLabel: {
   render: 'percentage',
   fontColor: ['white', 'white'],
   precision: 2,
   position : 'border'
 }

			}
		};
    var configOut = {
 			type: 'pie',
 			data: {
 				datasets: [{
 					data: [
 					<?php
             foreach($countAbsensi as $data)
             {
               if($data['kode'] == 3 || $data['kode']==4)
               {
           ?>
               <?php echo $data['total']?>,
           <?php
               }
           }
           ?>
 					],
 					backgroundColor: [
 						window.chartColors.blue,
 						window.chartColors.red,
 						window.chartColors.yellow,
 						window.chartColors.green,
 					],
 					label: 'Dataset 1'
 				}],
 				labels: [
           <?php
             foreach($countAbsensi as $data)
             {
               if($data['kode'] == 3 || $data['kode']==4)
               {
           ?>
               '<?php echo $data['status']?>',
           <?php
               }
             }
           ?>
 				]
 			},
 			options: {
 				responsive: true,
        pieceLabel: {
   render: 'percentage',
   fontColor: ['white', 'white'],
   precision: 2,
   position : 'border'
 }

 			}
 		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
      var ctx = document.getElementById('chart-area-out').getContext('2d');
      window.myPieOut = new Chart(ctx, configOut);
		};


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
      <div class="col-md-6">
              <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Chart Status Persensi Kedatangan</h3>
                          </div>
                          <div class="box-body">
                            <div id="canvas-holder">
                            		<canvas id="chart-area"></canvas>
                            	</div>
                          </div>
                          <!-- /.box-body -->
              </div>

      </div>
      <div class="col-md-6">
        <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Chart Status Persensi Kepulangan</h3>
                    </div>
                    <div class="box-body">
                      <div id="canvas-holder-out">
                          <canvas id="chart-area-out"></canvas>
                        </div>
                    </div>
                    <!-- /.box-body -->
        </div>

      </div>
      <div class="col-md-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">History Absensi</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="HistoryAbsensi" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>waktu</th>
                                    <th>Status</th>
                                    <th>Alasan</th>
                                    <th>Status Lokasi</th>
                                    <th>Status Approval</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <th>NIP</th>
                                  <th>Nama</th>
                                  <th>Waktu</th>
                                  <th>Status</th>
                                  <th>Alasan</th>
                                  <th>Status Lokasi</th>
                                  <th>Status Approval</th>
                                </tr>
                            </tfoot>
                        </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
      </div>
      <div class="col-md-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">History Absensi Bawahan</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="HistoryAbsensiBawahan" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>waktu</th>
                                    <th>Status</th>
                                    <th>Alasan</th>
                                    <th>Status Lokasi</th>
                                    <th>Status Approval</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <th>NIP</th>
                                  <th>Nama</th>
                                  <th>Waktu</th>
                                  <th>Status</th>
                                  <th>Alasan</th>
                                  <th>Status Lokasi</th>
                                  <th>Status Approval</th>
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
