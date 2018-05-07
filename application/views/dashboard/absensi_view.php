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

     var statusPersensi = 0;
     var bulan =0;
     var tanggal =0;
     $('#statusPersensi').on('change', function (e) {
     			var optionSelected = $("option:selected", this);
     			var valueSelected = this.value;
         statusPersensi = this.value;
         console.log("Status : "+statusPersensi);
         //historyAbsensi.ajax.reload();
         historyAbsensi.clear().draw();
      //   historyAbsensi.columns.adjust().draw(); // Redraw the DataTable
 		});

    $('#bulanAbsensi').on('change', function (e) {
         var optionSelected = $("option:selected", this);
         var valueSelected = this.value;
        bulan = this.value;
        console.log("Status : "+statusPersensi);
        //historyAbsensi.ajax.reload();
        historyAbsensi.clear().draw();
     //   historyAbsensi.columns.adjust().draw(); // Redraw the DataTable
   });

  //  $('#tanggalAbsensi').on('change', function (e) {
  //       var optionSelected = $("option:selected", this);
  //       var valueSelected = this.value;
  //      bulan = this.value;
  //      console.log("Status : "+statusPersensi);
  //      //historyAbsensi.ajax.reload();
  //      historyAbsensi.clear().draw();
  //   //   historyAbsensi.columns.adjust().draw(); // Redraw the DataTable
  // });
  $('#statusPersensiBawahan').on('change', function (e) {
       var optionSelected = $("option:selected", this);
       var valueSelected = this.value;
      statusPersensi = this.value;
      console.log("Status : "+statusPersensi);
      //historyAbsensi.ajax.reload();
      historyAbsensiBawahan.clear().draw();
   //   historyAbsensi.columns.adjust().draw(); // Redraw the DataTable
  });

  $('#bulanAbsensiBawahan').on('change', function (e) {
      var optionSelected = $("option:selected", this);
      var valueSelected = this.value;
     bulan = this.value;
     console.log("Status : "+statusPersensi);
     //historyAbsensi.ajax.reload();
     historyAbsensiBawahan.clear().draw();
  //   historyAbsensi.columns.adjust().draw(); // Redraw the DataTable
  });
  var historyAbsensi =   $('#HistoryAbsensi').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax":{
              "url":"getHistoryAbsensi",
              "data":function (d){
                console.log($('#statusPersensi').val());
                  d.StatusKey = $('#statusPersensi').val();
                  d.bulanKey = $('#bulanAbsensi').val();
              }
            }


        } );
var historyAbsensiBawahan =        $('#HistoryAbsensiBawahan').DataTable( {
               "processing": true,
               "serverSide": true,
               "ajax":{
                 "url":"getHistoryAbsensiBawahan",
                 "data":function (d){

                     d.StatusKey = $('#statusPersensiBawahan').val();
                     d.bulanKey = $('#bulanAbsensiBawahan').val();
                 }
               }
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
                      <div class="col-xs-3">
                        <div class="form-group">
      											<label>Pilih Status</label>
      											<select id="statusPersensi" class="form-control">
                              <option value="0">All</option>
      												<?php foreach($statusPersensi as $key)
      												{
      													?>
      													<option value="<?php echo $key['id']?>"><?php echo $key['status']?></option>
      												<?php
      												}?>
      											</select>
      										</div>
                      </div>
                      <div class="col-xs-3">
                        <div class="form-group">
      											<label>Pilih Bulan</label>
      											<select id="bulanAbsensi" class="form-control">
                              <option value="0">All</option>
      											  <option value="1">Januari</option>
                              <option value="2">Februari</option>
                              <option value="3">Maret</option>
                              <option value="4">April</option>
                              <option value="5">Mei</option>
                              <option value="6">Juni</option>
                              <option value="7">Juli</option>
                              <option value="8">Agustus</option>
                              <option value="9">September</option>
                              <option value="10">Oktober</option>
                              <option value="11">November</option>
                              <option value="12">Desember</option>
      											</select>
      										</div>
                      </div>
                      <!-- <div class="col-xs-3">
                        <div class="form-group">
      											<label>Pilih Tanggal</label>
      											<select id="tanggalAbsensi" class="form-control">
                              <option value="0">-</option>
                              <?php
                              for($i = 1; $i <=  31; $i++)
                                  {
                                ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
                                  }

                              ?>
      											</select>
      										</div>
                      </div> -->
                    <table id="HistoryAbsensi" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <!-- <th>NIP</th>
                                    <th>Nama</th> -->
                                    <th>waktu</th>
                                    <th>Status</th>
                                    <th>Alasan</th>
                                    <th>Status Lokasi</th>
                                    <th>Status Approval</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <!-- <th>NIP</th>
                                  <th>Nama</th> -->
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
                    <div class="col-xs-3">
                      <div class="form-group">
                          <label>Pilih Status</label>
                          <select id="statusPersensiBawahan" class="form-control">
                            <option value="0">All</option>
                            <?php foreach($statusPersensi as $key)
                            {
                              ?>
                              <option value="<?php echo $key['id']?>"><?php echo $key['status']?></option>
                            <?php
                            }?>
                          </select>
                        </div>
                    </div>
                    <div class="col-xs-3">
                      <div class="form-group">
                          <label>Pilih Bulan</label>
                          <select id="bulanAbsensiBawahan" class="form-control">
                            <option value="0">All</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select>
                        </div>
                    </div>
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
