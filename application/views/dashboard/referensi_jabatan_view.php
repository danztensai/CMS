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

<div class="tab-pane" id="jabatan">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#kelompokJabatan" data-toggle="tab">Kelompok</a></li>
      <li><a href="#jabatanStruktural" data-toggle="tab">Struktural</a></li>
      <li><a href="#jabatanFungsional" data-toggle="tab">Fungsional Khusus</a></li>
      <li><a href="#jabatanNegara" data-toggle="tab">Negara</a></li>
      <li><a href="#jabatanFungsionalUmum" data-toggle="tab">Fungsional Umum</a></li>
      <li><a href="#jabatanKorpri" data-toggle="tab">KORPRI</a></li>
      <li><a href="#eselonJabatan" data-toggle="tab">Eselon</a></li>
      <li><a href="#pejabatTetap" data-toggle="tab">Pejabat Tetap</a></li>
      <li><a href="#pejabatNegara" data-toggle="tab">Pejabat Negara</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="kelompokJabatan">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Kelompok Jabatan</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiKelompokJabatan');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="jabatanStruktural">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Jabatan Struktural</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiJabatanStruktural');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="jabatanFungsional">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Jabatan Fungsional Khusus</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiJabatanFungsionalKhusus');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="jabatanNegara">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Jabatan Negara</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiJabatanNegara');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="jabatanFungsionalUmum">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Jabatan Fungsional Umum</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiJabatanFungsionalUmum');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="jabatanKorpri">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Jabatan KORPRI</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiJabatanKorpri');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="eselonJabatan">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Eselon Jabatan</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiEselonJabatan');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="pejabatTetap">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Pejabat Tetap</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiPejabatTetap');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="pejabatNegara">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Pejabat Negara</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiPejabatNegara');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
