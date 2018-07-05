<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">
<p style="text-align: center;"><strong>P E M E R I N T A H&nbsp; D A E R A H&nbsp; P R O V I N S I&nbsp; J A W A&nbsp; B A R A T</strong><br /> <strong>REKAPITULASI PNS DO BERDASARKAN TINGKAT PENDIDIKAN DI LINGKUNGAN PEMERINTAH DAERAH PROVINSI JAWA BARAT PERIODE </strong><br /><strong><?php setlocale(LC_ALL, 'IND');echo strftime('%B');?> <?php echo date("Y");?></strong></p>
</div>
</div>
<div class="layoutArea">
<div class="column">
<table style="height: 90px;" border="1" width="100%">
<tbody>
<tr>
<td style="width: 22px; text-align: center;" rowspan="2">NO</td>
<td style="width: 45px; text-align: center;" rowspan="2">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>UNIT KERJA</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 440px; text-align: center;" colspan="13">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>TINGKAT PENDIDIKAN&nbsp; &nbsp; &nbsp;</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 39px; text-align: center;" rowspan="2">&nbsp;KET&nbsp;</td>
</tr>
<tr>
<td style="width: 6%; text-align: center;">S3</td>
<td style="width: 6%; text-align: center;">S2</td>
<td style="width: 6%; text-align: center;">S1</td>
<td style="width: 6%; text-align: center;">D4</td>
<td style="width: 6%; text-align: center;">D3</td>
<td style="width: 6%; text-align: center;">D2</td>
<td style="width: 6%; text-align: center;">D1</td>
<td style="width: 6%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>SLTA</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 35px; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>SLTP</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</td>
<td style="width: 6%; text-align: center;">&nbsp;SD</td>
<td style="width: 6%; text-align: center;">NON SD</td>
<td style="width: 6%; text-align: center;">DATA TDK ADA</td>
<td style="width: 8%; text-align: center;">&nbsp;JUMLAH</td>
</tr>
<?php
 $counter=0;
   foreach ($rekap as $rekap)
   {
     $counter ++;
     ?>
<tr>
<td style="width: 22px; text-align: right;"><?php echo $counter?></td>
<td style="width: 45px; text-align: left;"><?php echo $rekap["nunker"]?></td>
<td style="width: 19px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahS3']?></td>
<td style="width: 19px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahS2']?></td>
<td style="width: 19px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahS1']?></td>
<td style="width: 20px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahDIV']?></td>
<td style="width: 20px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahD3']?></td>
<td style="width: 20px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahD2']?></td>
<td style="width: 20px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahD1']?></td>
<td style="width: 36px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahSMA']?></td>
<td style="width: 35px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahSMP']?></td>
<td style="width: 26px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahSD']?></td>
<td style="width: 32px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['NonSD']?></td>
<td style="width: 40px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['TidakAda']?></td>
<td style="width: 62px; text-align: right;"><?php echo $rekap["tingkatPendidikanCount"][0]['JumlahSemua']?></td>
<td style="width: 39px; text-align: right;">&nbsp;</td>
</tr>
<?php }
?>
</tbody>
</table>
</div>
</div>
</div>
<p style="text-align: center;"><br /><br /></p>
</div>
</div>
</div>
</div>
</div>
</div>
