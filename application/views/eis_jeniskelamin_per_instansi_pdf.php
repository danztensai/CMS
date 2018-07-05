<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">
<h4 style="text-align: center;"><strong>P E ME R I N T A H &nbsp; P R O V I N S I</strong><br /><strong> J A W A &nbsp;BA R A T</strong><br /><strong> REKAPITULASI PNS DO BERDASARKAN JENIS KELAMIN DI LINGKUNGAN&nbsp;PEMERINTAH PROPINSI JAWA BARAT PERIODE</strong><br /><strong><?php setlocale(LC_ALL, 'IND');echo strftime('%B');?> <?php echo date("Y");?></strong></h4>
<table style="height: 41px;" border="1" width="100%">
<tbody>
<tr>
<td style="width: 3%; text-align: center;" rowspan="2">NO</td>
<td style="width: 31%; text-align: center;" rowspan="2">UNIT KERJA</td>
<td style="width: 25%; text-align: center;" colspan="2">JENIS KELAMIN</td>
<td style="width: 16%; text-align: center;" rowspan="2">JUMLAH</td>
<td style="width: 15%; text-align: center;" rowspan="2">KET</td>
</tr>
<tr>
<td style="width: 12%; text-align: center;">LAKI-LAKI</td>
<td style="width: 13%; text-align: center;">PEREMPUAN</td>
</tr>
<?php
 $counter=0;
   foreach ($rekap as $rekap)
   {
     $counter ++;
     ?>
<tr>
<td style="width: 10%; text-align: right;"><?php echo $counter?></td>
<td style="width: 24%; text-align: left;"><?php echo $rekap["nunker"]?></td>
<td style="width: 10%; text-align: right;"><?php echo $rekap["jenisKelaminCount"][0]['Laki_Laki']?></td>
<td style="width: 15%; text-align: right;"><?php echo $rekap["jenisKelaminCount"][0]['Perempuan']?></td>
<td style="width: 16%; text-align: right;"><?php echo $rekap["jenisKelaminCount"][0]['Jumlah']?></td>
<td style="width: 15%;">&nbsp;</td>
</tr>
<?php }
?>
</tbody>
</table>
</div>
</div>
</div>
