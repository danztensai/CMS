	<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/chartjs/utils.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js" type="text/javascript"></script>
	<script src="https://chartjs-plugin-datalabels.netlify.com/chartjs-plugin-datalabels.js"></script>
	<script>
	$( document ).ready(function() {

		var respJson ="";
		var label =[];
		var data1 = [];
		var data2 = [];

		$('#instansiUnker').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
  				console.log(this.value);
					$.get('/cms/dashboard/persentaseGenderPNS',{ kunker: this.value } , function(data) {
					  console.log(data);
 					window.myBar.destroy();
  						 var ctx = document.getElementById('canvas').getContext('2d');
							 myBar = new Chart(ctx, {
								 type: 'bar',
								 data: barChartData,
								 options: {
									 responsive: true,
									 legend: {
										 position: 'top',
									 },
									 title: {
										 display: true,
										 text: 'Persentase Jenis Kelamin PNS Di Jawa Barat'
									 },
									 plugins: {
									 datalabels: {
										 color: 'Black',
										 display: function(context) {
											 return context.dataset.data[context.dataIndex] > 15;
										 },
										 font: {
											 weight: 'bold'
										 },
										 formatter: Math.round,
										 align:'end'
									 }
								 },
								 tooltips:{
									callbacks:{
												label: function(tooltipItem,data){
													var allData = data.datasets[tooltipItem.datasetIndex].data;
                    var tooltipLabel = data.labels[tooltipItem.index];
                    var tooltipData = allData[tooltipItem.index];
                    var total = 0;
                    for (var i in allData) {
                        total += allData[i];
                    }
                    var tooltipPercentage = Math.round((tooltipData / total) * 100);
                    return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
												}
											}
								 		}
								 }
							 });

							 barChartData.labels=[];
							 barChartData.datasets.forEach(function(dataset) {
									dataset.data=[];
								});
							callback(data,1);
					});
				});


		$.get('/cms/dashboard/persentaseGenderPNS', function(data) {
		  console.log(data);

				callback(data,0);
		});

		function callback(response,sts) {
		  respJson = JSON.parse(response);
		  //use return_first variable here


			var data1=0;
			var data2=0;
			for(var i =0;i<respJson.length;i++)
			{
				var result = respJson[i]
				//console.log(result.count);
				//label.push(result.range);

				if(i==0)
				{
				barChartData.labels.push(result.range);
				}
				else {
					var prevResult = respJson[i-1];
					if(prevResult.range != result.range)
					{
						barChartData.labels.push(result.range);
					}
				}


				if(result.gender=='LAKI-LAKI')
				{
					//data1.push(result.count);
					barChartData.datasets[0].data.push(result.count);
					data1 += parseInt(result.count);
				}else if(result.gender=='PEREMPUAN') {

						//data2.push(result.count);
						barChartData.datasets[1].data.push(result.count);
						data2 +=parseInt(result.count);
				}
				if(i==respJson.length-1)
				{

					console.log('Data Total 1:'+data1);
					console.log('Data Total 2:'+data2);
					var totalCount = data1+data2;
					var percentage1 = Math.round((data1/totalCount)*100);
					var percentage2 = Math.round((data2/totalCount)*100);
					console.log("Persentase Pria "+percentage1);
					console.log("Persentase Wanita "+percentage2);
					barChartData.datasets[0].label='Pria ('+percentage1+' %) ';
					barChartData.datasets[1].label='Wanita ('+percentage2+' %) ';
				}


				if(sts==0)
				{
					window.myBar.update();

				}else {
					myBar.update();
				}

			}

		}

		console.log("Ini :"+respJson);


	 var color = Chart.helpers.color;
	 var barChartData = {
		 labels: [],
		 datasets: [{
			 label: 'Pria',
			 backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
			 borderColor: window.chartColors.red,
			 borderWidth: 1,
			 data: [
			 ]
		 }, {
			 label: 'Wanita',
			 backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
			 borderColor: window.chartColors.blue,
			 borderWidth: 1,
			 data: [			 ]
		 }]

	 };

	 window.onload = function() {
		 var ctx = document.getElementById('canvas').getContext('2d');
		 window.myBar = new Chart(ctx, {
			 type: 'bar',
			 data: barChartData,
			 options: {
				 responsive: true,
				 legend: {
					 position: 'top',
				 },
				 title: {
					 display: true,
					 text: 'Analisa Persentase Jenis Kelamin PNS Di Jawa Barat'
				 },
				 plugins: {
					datalabels: {
						color: 'Black',
						display: function(context) {
							return context.dataset.data[context.dataIndex] > 15;
						},
						font: {
							weight: 'bold'
						},
						formatter: Math.round,
						align:'end'
					}
				},
				// tooltips:{
				//  callbacks:{
				// 			 label: function(tooltipItem,data){
				// 				 var allData = data.datasets[tooltipItem.datasetIndex].data;
				// 	 var tooltipLabel = data.labels[tooltipItem.index];
				// 	 var tooltipData = allData[tooltipItem.index];
				// 	 var total = 0;
				// 	 for (var i in allData) {
				// 		 console.log(allData[i]);
				// 			 total += parseInt(allData[i]);
				// 	 }
				// 	 console.log("Ini Totalnya : "+ total);
				// 	 var tooltipPercentage = Math.round((tooltipData / total) * 100);
				// 	 return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
				// 			 }
				// 		 }
				// 	 }
			 },


		 });



	 };

	 document.getElementById('download-pdf').addEventListener("click", downloadPDF);

	 //donwload pdf from original canvas
	 function downloadPDF() {
		 var canvas = document.querySelector('#canvas');
		//creates image
		var canvasImg = canvas.toDataURL("image/png", 1.0);
		//console.log(canvasImg);
		//creates PDF from img
		var doc = new jsPDF('landscape');
		doc.setFontSize(15);
		//doc.text(15, 20, "Laporan Analisa Jenis Kelamin PNS");
		doc.addImage(canvasImg, 'JPEG', 10, 10, 280, 150 );
		doc.save('Laporan Analisa Jenis Kelamin PNS.pdf');
	 }


	});
	</script>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				EIS
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
						<div class="col-md-6">
          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Analisa Jenis Kelamin PNS </h3>
            </div>
            <div class="box-body">
							<div class="form-group">
                  <label>Pilih Instansi</label>
                  <select id="instansiUnker" class="form-control">
                    <option value="All">Semua</option>
                    <?php foreach($instansiUnkerja as $key)
										{
											?>
											<option value="<?php echo $key['kunker']?>"><?php echo $key['nunker']?></option>
										<?php
										}?>
                  </select>
                </div>
              <div class="chart">
                <!-- <canvas id="ageRange" style="height: 229px; width: 594px;" width="742" height="286"></canvas> -->
								<canvas id="canvas"></canvas>
								<button type="button" id="download-pdf" >
								  Download PDF
								</button>
			</div>

              </div>
            </div>
            <!-- /.box-body -->
          </div>

					<div class="col-md-6">
				<!-- BAR CHART -->
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Rekap Data Untuk BKD</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
								<label>Pilih Instansi</label>
								<select id="instansiUnker" class="form-control">
									<option value="All">Semua</option>
									<?php foreach($instansiUnkerja as $key)
									{
										?>
										<option value="<?php echo $key['kunker']?>"><?php echo $key['nunker']?></option>
									<?php
									}?>
								</select>
							</div>
						<a href="<?php echo base_url() ?>dashboard/checkRekap">Download Rekap PNS BKD</a>

		</div>

						</div>
					</div>
					<!-- /.box-body -->
				</div>
          <!-- /.box -->

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
