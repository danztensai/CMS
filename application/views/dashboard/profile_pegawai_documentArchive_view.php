<div class="tab-pane" id="documentOnline">
  <div class="box box-info">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Arsip Anda</h3>

            </div>
            <div class="box-body">
              <div class="intrinsic-container intrinsic-container-16x9">
            <IFRAME SRC=<?php echo base_url('dashboard/arsipDokumenPegawai?nip='.$user->nip);?>></IFRAME>
              </div>
            </div>
          </div>
</div>
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
