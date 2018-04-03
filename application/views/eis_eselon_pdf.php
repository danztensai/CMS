<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
  <p class="p1" style="text-align: center;"><strong>P E ME R I N T A H  D A E R A H P R O V I N S I  J A W A B A R A T</strong></p>
  <p class="p1" style="text-align: center;">REKAPITULASI PNS DO BERDASARKAN Eselon</p>
  <p class="p1" style="text-align: center;">DI LINGKUNGAN PEMERINTAH DAERAH PROVINSI JAWA BARAT PERIODE</p>
  <p class="p1" style="text-align: center;">2018</p>
<table  border="1">
<tbody>
<tr>
<td style="width: 47.3125px; text-align: center;" rowspan="3">NO</td>
<td style="width: 47.3125px; text-align: center;" rowspan="3">UNIT KERJA</td>
<td style="width: 47.3125px; text-align: center;" colspan="4">JUMLAH ESELON SELURUHNYA</td>
<td style="width: 47.3125px; text-align: center;" colspan="12">ESELON</td>

<td style="width: 47.3125px; text-align: center;" rowspan="3">JML ESELON TERISI&nbsp;&nbsp;</td>
<td style="width: 47.3125px; text-align: center;" rowspan="3">JML ESELON BLM TERISI&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 47.3125px; text-align: center;" rowspan="2">I</td>
<td style="width: 47.3125px; text-align: center;" rowspan="2">II</td>
<td style="width: 47.3125px; text-align: center;" rowspan="2">III</td>
<td style="width: 47.3125px; text-align: center;" rowspan="2">IV</td>
<td style="width: 47.3125px; text-align: center;" colspan="3">I</td>
<td style="width: 47.3125px; text-align: center;" colspan="3">II&nbsp;&nbsp;</td>
<td style="width: 47.3125px; text-align: center;" colspan="3">III&nbsp;&nbsp;</td>
<td style="width: 47.3125px; text-align: center;" colspan="3">IV&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 47.3125px; text-align: center;">A</td>
<td style="width: 47.3125px; text-align: center;">B</td>
<td style="width: 47.3125px; text-align: center;">JML</td>
<td style="width: 47.3125px; text-align: center;">A</td>
<td style="width: 47.3125px; text-align: center;">B</td>
<td style="width: 47.3125px; text-align: center;">JML</td>
<td style="width: 47.3125px; text-align: center;">A</td>
<td style="width: 47.3125px; text-align: center;">B</td>
<td style="width: 47.3125px; text-align: center;">JML</td>
<td style="width: 47.3125px; text-align: center;">A</td>
<td style="width: 47.3125px; text-align: center;">B</td>
<td style="width: 47.3125px; text-align: center;">JML</td>
</tr>
<?php
 $counter=0;
   foreach ($rekap as $rekap)
   {
     $counter ++;
     ?>

<tr>
<td style="width: 47.3125px;"><?php echo $counter?></td>
<td style="width: 47.3125px;"><?php echo $rekap["nunker"]?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselon1']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselon2']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselon3']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselon4']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIA']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIB']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIVALID']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIIA']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIIB']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIIVALID']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIIIA']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIIIB']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIIIVALID']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIVA']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIVB']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselonIVVALID']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['JumlahEselon']?></td>
<td style="width: 47.3125px;"><?php echo $rekap["eselonCount"][0]['EselonTidakTerpenuhi']?></td>
</tr>
<?php }
?>
</tbody>
</table>
</body>
</html>
