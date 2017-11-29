<style>
.scroll{
  height:300px;
  overflow-y:scroll;
}

</style>
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
  <style>
  .scroll{
    height:800px;
    overflow-y:scroll;
  }
  .row-bordered:after {
    content: "";
    display: block;
    border-bottom: 2px solid #ccc;
    margin:  15px;
  }
</style>

<div class="tab-pane" id="pegawai">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#statusPegawai" data-toggle="tab">Status</a></li>
      <li><a href="#kedudukanPegawai" data-toggle="tab">Kedudukan</a></li>
      <li><a href="#golru" data-toggle="tab">Golongan Ruang</a></li>
      <li><a href="#naikPangkat" data-toggle="tab">Naik Pangkat</a></li>
      <li><a href="#daftarPekerjaan" data-toggle="tab">Pekerjaan</a></li>
      <li><a href="#STLUD" data-toggle="tab">STLUD</a></li>
      <li><a href="#jenisPegawai" data-toggle="tab">Jenis</a></li>
      <li><a href="#gajiPokok" data-toggle="tab">Gaji Pokok</a></li>
      <li><a href="#kelompokusia" data-toggle="tab">Kelompok Usia</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="statusPegawai">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Daftar Status Pegawai</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiStatusPegawai');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane active" id="kedudukanPegawai">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Daftar Kedudukan Pegawai</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiKedudukanPegawai');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane active" id="golru">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Daftar Kedudukan Pegawai</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiGolonganRuang');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane active" id="naikPangkat">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Daftar Kenaikan Pangkat Pegawai</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiKenaikanPangkatPegawai');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="daftarPekerjaan">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Daftar Pekerjaan Pegawai</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiPekerjaan');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="STLUD">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Daftar STLUD Pegawai</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiSTLUD');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>gajiPokok
      <div class="tab-pane" id="jenisPegawai">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Jenis Pegawai</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiJenisPegawai');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="gajiPokok">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Gaji Pokok Pegawai</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiGajiPokokPegawai');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="gajiPokok">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Gaji Pokok Pegawai</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiGajiPokokPegawai');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="kelompokusia">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Daftar Kelompok Usia</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiKelompokUsia');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
