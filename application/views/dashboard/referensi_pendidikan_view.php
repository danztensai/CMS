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

<div class="tab-pane" id="pendidikan">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#jurusan" data-toggle="tab">Jurusan</a></li>
      <li><a href="#diklatStruktural" data-toggle="tab">Diklat Struktural</a></li>
      <li><a href="#diklatFungsional" data-toggle="tab">Diklat Fungsional</a></li>
      <li><a href="#diklatTeknik" data-toggle="tab">Diklat Teknik</a></li>
      <li><a href="#seminar" data-toggle="tab">Seminar</a></li>
      <li><a href="#penataran" data-toggle="tab">Penataran</a></li>
      <li><a href="#kursus" data-toggle="tab">Kursus</a></li>
      <li><a href="#tingkatPendidikan" data-toggle="tab">Tingkat Pendidikan</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="jurusan">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Jurusan Pendidikan</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiJurusanPendidikan');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="diklatStruktural">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Diklat Struktural</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiDiklatStruktural');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="diklatFungsional">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Diklat Fungsional</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiDiklatFungsional');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="diklatTeknik">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Diklat Teknik</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiDiklatTeknik');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="seminar">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Seminar</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiSeminar');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="penataran">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Penataran</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiPenataran');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="kursus">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Kursus</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiKursus');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="tingkatPendidikan">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Tingkat Pendidikan</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiTingkatPendidikan');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
