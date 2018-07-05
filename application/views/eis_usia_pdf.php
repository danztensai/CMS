<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->
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
<h4 style="text-align: center;"><strong>P E ME R I N T A H &nbsp;P R O V I N S I</strong><br /><strong> J A W A &nbsp;BA R A T</strong><br /><strong> REKAPITULASI PNS DO BERDASARKAN KELOMPOK USIA PERIODE</strong><br /><strong><?php setlocale(LC_ALL, 'IND');echo strftime('%B');?> <?php echo date("Y");?></strong></h4>
<table style="height: 151px;" border="1" width="100%">
<tbody>
<tr>
<td style="width: 35.4375px; text-align: center;" rowspan="2">NO</td>
<td style="width: 43.234375px; text-align: center;" rowspan="2">Unit Kerja</td>
<td style="width: 417.4375px; text-align: center;" colspan="10">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>KELOMPOK USIA &nbsp;</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 39.9375px; text-align: center;" rowspan="2">KET.</td>
</tr>
<tr>
<td style="width: 7%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>&lt;= 25</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 7%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>26 - 30</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 7%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>31 - 35</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 7%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>36 - 40</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 7%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>41 - 45</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 7%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>46 - 50</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 7%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>51 - 55</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 7%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>56 - 60</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 7%; text-align: center;">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>&gt;= 61</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</td>
<td style="width: 56.296875px; text-align: center;">JUMLAH</td>
</tr>
<?php
 $counter=0;
   foreach ($rekap as $rekap)
   {
     $counter ++;
     ?>
<tr>
<td style="width: 35.4375px;"><?php echo $counter?></td>
<td style="width: 43.234375px;"><?php echo $rekap["nunker"]?></td>
<td style="width: 36.15625px;"><?php echo $rekap["usiaCount"][0]['usiakurangsamadengan25']?></td>
<td style="width: 33.546875px;"><?php echo $rekap["usiaCount"][0]['usia26_30']?></td>
<td style="width: 33.546875px;"><?php echo $rekap["usiaCount"][0]['usia31_35']?></td>
<td style="width: 33.546875px;"><?php echo $rekap["usiaCount"][0]['usia36_40']?></td>
<td style="width: 33.546875px;"><?php echo $rekap["usiaCount"][0]['usia41_45']?></td>
<td style="width: 33.546875px;"><?php echo $rekap["usiaCount"][0]['usia46_50']?></td>
<td style="width: 33.546875px;"><?php echo $rekap["usiaCount"][0]['usia51_55']?></td>
<td style="width: 33.546875px;"><?php echo $rekap["usiaCount"][0]['usia56_60']?></td>
<td style="width: 36.15625px;"><?php echo $rekap["usiaCount"][0]['usialebihbesarsamadengan61']?></td>
<td style="width: 56.296875px;"><?php echo $rekap["usiaCount"][0]['Jumlah']?></td>
<td style="width: 39.9375px;">&nbsp;</td>
</tr>
<?php }
?>
</tbody>
</table>
</div>
</div>
</div>
