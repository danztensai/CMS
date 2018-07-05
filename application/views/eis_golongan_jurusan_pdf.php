<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">
<div class="page" title="Page 1">
<div class="layoutArea">
<div class="column">
<p style="text-align: center;"><strong>P E ME R I N T A H &nbsp;D A E R A H &nbsp;P R O V I N S I &nbsp;J A W A &nbsp;B A R A T </strong><br /><strong>REKAPITULASI PNS DO BERDASARKAN JURUSAN DAN GOLONGAN RUANG DI LINGKUNGAN </strong><br /><strong>PEMERINTAH DAERAH PROVINSI JAWA BARAT PERIODE</strong><br /><strong><?php setlocale(LC_ALL, 'IND');echo strftime('%B');?> <?php echo date("Y");?></strong></p>
</div>
</div>
</div>
</div>
</div>
</div>
<table style="height: 98px; width: 100%;" border="1">
<tbody>
<tr>
<td style="width: 22px; text-align: center;" rowspan="3">NO</td>
<td style="width: 88px; text-align: center;" rowspan="3">
<div class="page" title="Page 1">
<div class="section">
<div class="layoutArea">
<div class="column">
<p>TINGKAT PENDIDIKAN JURUSAN</p>
</div>
</div>
</div>
</div>
</td>
<td style="width: 14px; text-align: center;" rowspan="3">JUMLAH PNS</td>
<td style="width: 277px; text-align: center;" colspan="21">
<p class="p1">GOLONGAN</p>
</td>
<td style="width: 28px;" rowspan="3">
<p class="p1" style="text-align: center;">KET</p>
</td>
</tr>
<tr>
<td style="width: 76px; text-align: center;" colspan="6">IV</td>
<td style="width: 67px; text-align: center;" colspan="5">III</td>
<td style="width: 67px; text-align: center;" colspan="5">II</td>
<td style="width: 67px; text-align: center;" colspan="5">I</td>
</tr>
<tr>
<td style="width: 10px; text-align: center;">A</td>
<td style="width: 10px; text-align: center;">B</td>
<td style="width: 10px; text-align: center;">C</td>
<td style="width: 11px; text-align: center;">D</td>
<td style="width: 9px; text-align: center;">E</td>
<td style="width: 26px; text-align: center;">JML</td>
<td style="width: 10px; text-align: center;">A</td>
<td style="width: 10px; text-align: center;">B</td>
<td style="width: 10px; text-align: center;">C</td>
<td style="width: 11px; text-align: center;">D</td>
<td style="width: 26px; text-align: center;">JML</td>
<td style="width: 10px; text-align: center;">A</td>
<td style="width: 10px; text-align: center;">B</td>
<td style="width: 10px; text-align: center;">C</td>
<td style="width: 11px; text-align: center;">D</td>
<td style="width: 26px; text-align: center;">JML</td>
<td style="width: 10px; text-align: center;">A</td>
<td style="width: 10px; text-align: center;">B</td>
<td style="width: 10px; text-align: center;">C</td>
<td style="width: 11px; text-align: center;">D</td>
<td style="width: 26px; text-align: center;">JML</td>
</tr>
<?php
 $counter=0;
   foreach ($rekap as $rekap)
   {
     $counter ++;
     ?>
<tr>
<td style="width: 22px; text-align: right;"><?php echo $counter?></td>
<td style="width: 88px; text-align: right;"><?php echo $rekap["NJUR"]?></td>
<td style="width: 14px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahSemuaGolongan']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIVA']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIVB']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIVC']?></td>
<td style="width: 11px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIVD']?></td>
<td style="width: 9px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIVE']?></td>
<td style="width: 26px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIV']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahBGolonganIIIA']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIIIB']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIIIC']?></td>
<td style="width: 11px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIIID']?></td>
<td style="width: 26px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIII']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIIA']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIIB']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIIC']?></td>
<td style="width: 11px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIID']?></td>
<td style="width: 26px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganII']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIA']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIB']?></td>
<td style="width: 10px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganIC']?></td>
<td style="width: 11px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganID']?></td>
<td style="width: 26px; text-align: right;"><?php echo $rekap["golonganJurusanCount"][0]['JumlahGolonganI']?></td>
<td style="width: 28px; text-align: right;">&nbsp;</td>
</tr>
<?php }
?>
</tbody>
</table>
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
