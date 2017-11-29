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
      <li class="active"><a href="#kelompokJabatan" data-toggle="tab">Kelompok Jabatan</a></li>
      <li><a href="#jabatanFungsional" data-toggle="tab">Jabatan Fungsional</a></li>
      <li><a href="#eselonJabatan" data-toggle="tab">Eselon Jabatan</a></li>
      <li><a href="#pejabatTetap" data-toggle="tab">Pejabat Tetap</a></li>
      <li><a href="#pejabatNegara" data-toggle="tab">Pejabat Negara</a></li>
      <li><a href="#rJabatan" data-toggle="tab">rJabatan</a></li>
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
      <div class="tab-pane" id="jabatanFungsional">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Jabatan Fungsional</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiJabatanFungsional');?>></IFRAME>
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
      <div class="tab-pane" id="rJabatan">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>rJabatan</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/refJabatan');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
