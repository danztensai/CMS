	<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
	<script src="<?php echo base_url()?>assets/chartjs/Chart.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/chartjs/utils.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js" type="text/javascript"></script>
	<script src="https://chartjs-plugin-datalabels.netlify.com/chartjs-plugin-datalabels.js"></script>
	<script>
	$( document ).ready(function() {

		var respJson ="";
		var label =[];
		var data1 = [];
		var data2 = [];

		$('#rekapGolonganPerJurusan').on('change', function (e) {
			console.log('Rekap changed');
			var optionSelected = $("option:selected", this);
			var valueSelected = this.value;
			$("a.downloadRekapJurusan").attr("href", function(i, href) {
				var url = '<?php echo base_url() ?>dashboard/checkRekapGolonganPerJurusan'+ '?q='+valueSelected;
			  return url;
			});
		});

		$('#rekapInstansiUnkerUsia').on('change', function (e) {
			console.log('Rekap changed');
			var optionSelected = $("option:selected", this);
			var valueSelected = this.value;
			$("a.downloadRekapUsia").attr("href", function(i, href) {
				var url = '<?php echo base_url() ?>dashboard/checkRekapUsia'+ '?q='+valueSelected;
			  return url;
			});
		});

$('#rekapInstansiUnker').on('change', function (e) {
	console.log('Rekap changed');
	var optionSelected = $("option:selected", this);
	var valueSelected = this.value;
	$("a.downloadRekap").attr("href", function(i, href) {
		var url = '<?php echo base_url() ?>dashboard/checkRekap'+ '?q='+valueSelected;
	  return url;
	});
});
$('#rekapJenisKelamin').on('change', function (e) {
	console.log('Rekap changed');
	var optionSelected = $("option:selected", this);
	var valueSelected = this.value;
	$("a.downloadRekap").attr("href", function(i, href) {
		var url = '<?php echo base_url() ?>dashboard/checkRekapJenisKelaminPerInstansi'+ '?q='+valueSelected;
	  return url;
	});
});

		$('#instansiUnkerPendidikan').on('change',function(e){
			var optionSelected = $("option:selected", this);
			var valueSelected = this.value;
						console.log(this.value);
						$.get('persentasePendidikanPNS',{kunker:this.value},function(data){
								console.log(data);
								window.myBarPendidikan.destroy()
								var ctxPendidikan = document.getElementById('canvasPendidikan').getContext('2d');
								myBarPendidikan = new Chart(ctxPendidikan, {
 								 type: 'bar',
 								 data: barChartDataPendidikan,
 								 options: {
 									 responsive: true,
 									 legend: {
 										 position: 'top',
 									 },
 									 title: {
 										 display: true,
 										 text: 'Persentase Pendidikan PNS Di Jawa Barat'
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
 							 });//
							 barChartDataPendidikan.labels=[];

							barChartDataPendidikan.datasets=[];
						 callbackPendidikan(data,1);
						});

		});

		$('#instansiUnker').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
  				console.log(this.value);
					$.get('<?php echo base_url() ?>dashboard/persentaseGenderPNS',{ kunker: this.value } , function(data) {
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


		$.get('<?php echo base_url() ?>dashboard/persentaseGenderPNS', function(data) {
		  console.log(data);

				callback(data,0);
		});

		$.get('<?php echo base_url() ?>dashboard/persentasePendidikanPNS', function(data) {
			console.log(data);

				callbackPendidikan(data,0);
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


		function callbackPendidikan(response,sts) {
			console.log('Inside Callback Pendidikan');
			respJson = JSON.parse(response);
			//use return_first variable here
			var data1=0;
			var data2=0;
			if(sts==0){
				barChartDataPendidikan.datasets.splice(0, 1);
			}

			for(var i =0;i<respJson.length;i++)
			{
				var result = respJson[i]
				//console.log(result.count);
				//label.push(result.range);

				// if(i==0)
				// {
				// barChartDataPendidikan.labels.push(result.pendidikan);
				// }
				// else {
				// 	var prevResult = respJson[i-1];
				// 	if(prevResult.pendidikan != result.pendidikan)
				// 	{
				// 		barChartDataPendidikan.labels.push(result.pendidikan);
				// 	}
				// }
				//
				//
				//
				// 	//data1.push(result.count);
				// 	barChartDataPendidikan.datasets[0].data.push(result.total);
				// 	data1 += parseInt(result.total);


					var colorNames = Object.keys(window.chartColors);
					//add new datasets
							var colorName = colorNames[barChartDataPendidikan.datasets.length % colorNames.length];
						//	console.log(colorName);
					var dsColor = window.chartColors[colorName];
					var newDataset = {
						label: result.pendidikan,
						backgroundColor: color(dsColor).alpha(0.5).rgbString(),
						borderColor: dsColor,
						borderWidth: 1,
						data: []
					};

					for (var index = 0; index < barChartData.labels.length; ++index) {
						newDataset.data.push(result.total);
					}

					barChartDataPendidikan.datasets.push(newDataset);
				//	window.myBar.update();


				if(sts==0)
				{
					window.myBarPendidikan.update();

				}else {
					myBarPendidikan.update();
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


	 var colorPendidikan = Chart.helpers.color;
	 var barChartDataPendidikan = {
		 labels: [],
		 datasets: [{
			 label: 'S1',
			 backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
			 borderColor: window.chartColors.red,
			 borderWidth: 1,
			 data: [
			 ]
		 },]

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



		 var ctxPendidikan = document.getElementById('canvasPendidikan').getContext('2d');
		window.myBarPendidikan = new Chart(ctxPendidikan, {
			type: 'bar',
			data: barChartDataPendidikan,
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Analisa Pendidikan  PNS Di Jawa Barat'
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
			},


		});

	 };

	 document.getElementById('download-pdf').addEventListener("click", downloadPDF);
	 document.getElementById('download-pdf-pendidikan').addEventListener("click", downloadPDFPendidikan);
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
	 function downloadPDFPendidikan() {
		 var canvas = document.querySelector('#canvasPendidikan');
		//creates image
		var canvasImg = canvas.toDataURL("image/png", 1.0);
		//console.log(canvasImg);
		//creates PDF from img
		var doc = new jsPDF('landscape');
		doc.setFontSize(15);
		//doc.text(15, 20, "Laporan Analisa Jenis Kelamin PNS");
		doc.addImage(canvasImg, 'JPEG', 10, 10, 280, 150 );
		doc.save('Laporan Analisa Tingkat Pendidikan PNS.pdf');
	 }
	 $('#rekapInstansiUnkerEselon').on('change', function (e) {
	 	console.log('Rekap changed');
	 	var optionSelected = $("option:selected", this);
	 	var valueSelected = this.value;
	 	$("a.downloadRekapEselon").attr("href", function(i, href) {
	 		var url = '<?php echo base_url() ?>dashboard/checkRekapEselon'+ '?q='+valueSelected;
	 	  return url;
	 	});
	 });

	 $('#rekapInstansiUnkerGolongan').on('change', function (e) {
	 	console.log('Rekap Golongan changed');
	 	var optionSelected = $("option:selected", this);
	 	var valueSelected = this.value;
	 	$("a.downloadRekapGolongan").attr("href", function(i, href) {
	 		var url = '<?php echo base_url() ?>dashboard/checkRekapGolongan'+ '?q='+valueSelected;
	 	  return url;
	 	});
	 });

	 $('#rekapPendidikan').on('change', function (e) {
	console.log('Rekap changed');
	var optionSelected = $("option:selected", this);
	var valueSelected = this.value;
	$("a.downloadRekapPendidikan").attr("href", function(i, href) {
		var url = '<?php echo base_url() ?>dashboard/checkRekapPendidikan'+ '?q='+valueSelected;
	  return url;
	});
});

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
				<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $totalPNSAktif[0]['total'];?></h3>

              <p>Total Jumlah PNS</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>
				<div class="col-lg-3 col-xs-6">
				          <!-- small box -->
				          <div class="small-box bg-red">
				            <div class="inner">
				              <h3><?php echo count($instansiUnkerja)?></h3>

				              <p>Organisasi Perangkat Daerah</p>
				            </div>
				            <div class="icon">
				              <i class="fa fa-briefcase"></i>
				            </div>
				          </div>
			 </div>
			 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $totalGender[0]['total']?></h3>

              <p>Total Laki-laki</p>
            </div>
            <div class="icon">
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>

				<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $totalGender[1]['total']?></h3>

              <p>Total Perempuan</p>
            </div>
            <div class="icon">
              <i class="fa fa-female"></i>
            </div>

          </div>
        </div>
				<!-- Mini Box Top  -->
				<div class="col-md-12">

					<div class="row">
						<div class="col-md-6">
							<div class="box box-success">
								<div class="box-header with-border">
									<h3 class="box-title">Rekap Instansi Golongan</h3>
								</div>
								<div class="box-body">
									<div class="form-group">
											<label>Pilih Instansi</label>
											<select id="rekapInstansiUnkerGolongan" class="form-control">
												<option value="100000000000">Semua (Memakan Waktu yang Lama Harap Bersabar)</option>
												<?php foreach($instansiUnkerja as $key)
												{
													?>
													<option value="<?php echo $key['kunker']?>"><?php echo $key['nunker']?></option>
												<?php
												}?>
											</select>
										</div>
									<a class="downloadRekapGolongan" href="<?php echo base_url() ?>dashboard/checkRekapGolongan">Download Rekap PNS</a>

								</div>

							</div>
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
                    <?php foreach($instansiUnkerjaPercentage as $key)
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
						<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Rekapitulasi PNS Do Berdasarkan Pendidikan dan Instansi</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
								<label>Pilih Instansi</label>
								<select id="rekapPendidikan" class="form-control">
									<option value="100000000000">Semua (Memakan Waktu yang Lama Harap Bersabar)</option>
									<?php foreach($instansiUnkerja as $key)
									{
										?>
										<option value="<?php echo $key['kunker']?>"><?php echo $key['nunker']?></option>
									<?php
									}?>
								</select>
							</div>
						<a class="downloadRekapPendidikan" href="<?php echo base_url() ?>dashboard/checkRekapPendidikan">Download Rekap PNS Usia Pendidikan dan Instansi</a>

					</div>

						</div>
						<div class="box box-success">
											<div class="box-header with-border">
												<h3 class="box-title">Rekapitulasi PNS DO Berdasarkan Jenis Kelamin dan Instansi</h3>
											</div>
											<div class="box-body">
												<div class="form-group">
														<label>Pilih Instansi</label>
														<select id="rekapJenisKelamin" class="form-control">
															<option value="100000000000">Semua (Memakan Waktu yang Lama Harap Bersabar)</option>
															<?php foreach($instansiUnkerja as $key)
															{
																?>
																<option value="<?php echo $key['kunker']?>"><?php echo $key['nunker']?></option>
															<?php
															}?>
														</select>
													</div>
												<a class="downloadRekap" href="<?php echo base_url() ?>dashboard/checkRekapJenisKelaminPerInstansi">Download Rekap PNS Jenis Kelamin dan Instansi</a>

											</div>

												</div>
            <!-- /.box-body -->

          </div>

					<div class="col-md-6">
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Rekap Instansi Unker Eselon</h3>
							</div>
							<div class="box-body">
								<div class="form-group">
										<label>Pilih Instansi</label>
										<select id="rekapInstansiUnkerEselon" class="form-control">
											<option value="100000000000">Semua (Memakan Waktu yang Lama Harap Bersabar)</option>
											<?php foreach($instansiUnkerja as $key)
											{
												?>
												<option value="<?php echo $key['kunker']?>"><?php echo $key['nunker']?></option>
											<?php
											}?>
										</select>
									</div>
								<a class="downloadRekapEselon" href="<?php echo base_url() ?>dashboard/checkRekapEselon">Download Rekap PNS</a>

							</div>

						</div>
						<!-- BAR CHART -->
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Analisa Pendidikan PNS </h3>
							</div>
							<div class="box-body">
								<div class="form-group">
										<label>Pilih Instansi</label>
										<select id="instansiUnkerPendidikan" class="form-control">
											<option value="All">Semua</option>
											<?php foreach($instansiUnkerjaPercentage as $key)
											{
												?>
												<option value="<?php echo $key['kunker']?>"><?php echo $key['nunker']?></option>
											<?php
											}?>
										</select>
									</div>
								<div class="chartPendidikan">
									<!-- <canvas id="ageRange" style="height: 229px; width: 594px;" width="742" height="286"></canvas> -->
									<canvas id="canvasPendidikan"></canvas>
									<button type="button" id="download-pdf-pendidikan" >
										Download PDF
									</button>
								</div>

								</div>
							</div>

							<!-- /.box-body -->
				<!-- BAR CHART -->
				<div class="box box-success">
 					<div class="box-header with-border">
 						<h3 class="box-title">Rekapitulasi PNS Do Berdasarkan Golongan Per Jurusan</h3>
 					</div>
 					<div class="box-body">
 						<div class="form-group">
 								<label>Pilih Jurusan</label>
 								<select id="rekapGolonganPerJurusan" class="form-control">
 									<option value="01">Semua (Memakan Waktu yang Lama Harap Bersabar)</option>
 									<?php foreach($tingkatPendidikanPns as $key)
 									{
 										?>
 										<option value="<?php echo $key['KJUR']?>"><?php echo $key['NJUR']?></option>
 									<?php
 									}?>
 								</select>
 							</div>
 						<a class="downloadRekapJurusan" href="<?php echo base_url() ?>dashboard/checkRekapGolonganPerJurusan">Download Rekap PNS Golongan Per Jurusan</a>

 					</div>

 					</div>
					<!-- //End Of Box -->
				<div class="box box-success">
								<div class="box-header with-border">
									<h3 class="box-title">Rekapitulasi PNS Do Berdasarkan Usia</h3>
								</div>
								<div class="box-body">
									<div class="form-group">
											<label>Pilih Instansi</label>
											<select id="rekapInstansiUnkerUsia" class="form-control">
												<option value="100000000000">Semua (Memakan Waktu yang Lama Harap Bersabar)</option>
												<?php foreach($instansiUnkerja as $key)
												{
													?>
													<option value="<?php echo $key['kunker']?>"><?php echo $key['nunker']?></option>
												<?php
												}?>
											</select>
										</div>
									<a class="downloadRekapUsia" href="<?php echo base_url() ?>dashboard/checkRekapUsia">Download Rekap PNS Usia</a>

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
