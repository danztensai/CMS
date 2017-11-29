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

<div class="tab-pane" id="kantorBayar">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#kantor" data-toggle="tab">Kantor Bayar</a></li>
      <li><a href="#ktua" data-toggle="tab">Daftar KTUA</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="kantor">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Instansi Induk</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiKantorBayar');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="ktua">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Daftar KTUA</strong>
              </p>
              <div class="intrinsic-container intrinsic-container-16x9">
                <IFRAME SRC=<?php echo base_url('dashboard/referensiKTUA');?>></IFRAME>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
