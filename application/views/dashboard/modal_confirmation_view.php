<div class="box-body">
  <div class="col-sm-6">
    <p class="text-center">
      <strong>Data Lama </strong>
    </p>
    <form class="form-horizontal" id="formCPNS">
      <div class="box-body">
        <div class="form-group">
          <label for="NIP" class="col-md-4 control-label">NIP</label>

          <div class="col-md-8">
            <input style='font-size: 12px;' class="form-control" id="NIP" placeholder="NIP" value="<?php echo $oData['nipBaru']?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="agama" class="col-md-4 control-label">Agama</label>
          <div class="col-md-8">
            <input style='font-size: 12px;' class="form-control" id="Agama" placeholder="Agama" value="<?php echo $oData['agamaId']?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="KGOLDAR" class="col-md-4 control-label">Golongan Darah</label>
          <div class="col-md-8">
            <input style='font-size: 12px;' class="form-control" id="KGOLDAR" placeholder="KGOLDAR" value="<?php echo $oData['KGOLDAR']?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="alamat" class="col-md-4 control-label">Alamat</label>
          <div class="col-md-8">
            <input style='font-size: 12px;' class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $oData['alamat']?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="rtrw" class="col-md-4 control-label">RT/RW</label>

          <div class="col-md-4">
            <input class="form-control" id="rt" placeholder="RT" name="ALRT" value="<?php echo $oData['ALRT']?>" disabled>
          </div>
          <div class="col-md-4">
            <input class="form-control" id="rw" placeholder="RW" name="ALRW" value="<?php echo $oData['ALRW']?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="telepon" class="col-md-4 control-label">Telepon</label>

          <div class="col-md-8">
            <input class="form-control" id="telepon" placeholder="Telepon" name="noTelpon" value="<?php echo $oData['noTelpon']?>" disabled>
          </div>

        </div>
        <div class="form-group">
          <label for="kodePos" class="col-md-4 control-label">Kode Pos</label>
          <div class="col-md-8">
            <input class="form-control" id="kodePos" placeholder="Kode Pos" name="KPOS" value="<?php echo $oData['KPOS']?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="nomorKarpeg" class="col-md-4 control-label">No KARPEG</label>
          <div class="col-md-8">
            <input class="form-control" id="nomorKarpeg" placeholder="No Karpeg" name="kartuPegawai" value="<?php echo $oData['ALRT']?>" disabled>
          </div>
        </div>

        <div class="form-group">
          <label for="noAskes" class="col-md-4 control-label">No Askes</label>
          <div class="col-md-8">
            <input class="form-control" id="noAskes" placeholder="noAskes" name="askesNomor" value="<?php echo $oData['askesNomor']?>" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="npwp" class="col-md-4 control-label">npwp</label>
          <div class="col-md-8">
            <input class="form-control" id="npwp" placeholder="NPWP" name="npwpNomor" value="<?php echo $oData['npwpNomor']?>" disabled>
          </div>
        </div>
      </div>
    </form>
</div>
  <div class="col-sm-6">
    <p class="text-center">
      <strong>Data Baru</strong>
    </p>
    <form class="form-horizontal" id="formCPNS">
      <div class="box-body">
      <div class="form-group">
        <label for="NIP" class="col-md-4 control-label">NIP</label>

        <div class="col-md-8">
          <input style='font-size: 12px;' class="form-control" id="NIP" placeholder="NIP" value="<?php echo $nData['nipBaru']?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="agama" class="col-md-4 control-label">Agama</label>
        <div class="col-md-8">
          <input style='font-size: 12px;' class="form-control" id="Agama" placeholder="Agama" value="<?php echo $nData['agamaId']?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="KGOLDAR" class="col-md-4 control-label">Golongan Darah</label>
        <div class="col-md-8">
          <input style='font-size: 12px;' class="form-control" id="KGOLDAR" placeholder="KGOLDAR" value="<?php echo $nData['KGOLDAR']?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="alamat" class="col-md-4 control-label">Alamat</label>
        <div class="col-md-8">
          <input style='font-size: 12px;' class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $nData['alamat']?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="rtrw" class="col-md-4 control-label">RT/RW</label>

        <div class="col-md-4">
          <input class="form-control" id="rt" placeholder="RT" name="ALRT" value="<?php echo $nData['ALRT']?>" disabled>
        </div>
        <div class="col-md-4">
          <input class="form-control" id="rw" placeholder="RW" name="ALRW" value="<?php echo $nData['ALRW']?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="telepon" class="col-md-4 control-label">Telepon</label>

        <div class="col-md-8">
          <input class="form-control" id="telepon" placeholder="Telepon" name="noTelpon" value="<?php echo $nData['noTelpon']?>" disabled>
        </div>

      </div>
      <div class="form-group">
        <label for="kodePos" class="col-md-4 control-label">Kode Pos</label>
        <div class="col-md-8">
          <input class="form-control" id="kodePos" placeholder="Kode Pos" name="KPOS" value="<?php echo $nData['KPOS']?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="nomorKarpeg" class="col-md-4 control-label">No KARPEG</label>
        <div class="col-md-8">
          <input class="form-control" id="nomorKarpeg" placeholder="No Karpeg" name="kartuPegawai" value="<?php echo $nData['ALRT']?>" disabled>
        </div>
      </div>

      <div class="form-group">
        <label for="noAskes" class="col-md-4 control-label">No Askes</label>
        <div class="col-md-8">
          <input class="form-control" id="noAskes" placeholder="noAskes" name="askesNomor" value="<?php echo $nData['askesNomor']?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="npwp" class="col-md-4 control-label">npwp</label>
        <div class="col-md-8">
          <input class="form-control" id="npwp" placeholder="NPWP" name="npwpNomor" value="<?php echo $nData['npwpNomor']?>" disabled>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
