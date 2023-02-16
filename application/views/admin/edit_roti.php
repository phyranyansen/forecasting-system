<div class="row">
            <div class="col-lg-6">
              <!-- Select2 -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Roti</h6>
                </div>
                <div class="card-body">        
                <form action="<?= base_url('admin/editroti'); ?>" method="post">
                  <div class="form-group">
                    <label for="select2SinglePlaceholder">Nama Roti</label>
                    <input type="hidden" name="id_roti" value="<?= $roti->id_roti; ?>" id="">
                    <input class="form-control  mb-3" type="text" name="nama_roti" value="<?= $roti->nama_roti; ?>" placeholder="Nama roti">
                    <?= form_error('nama_roti', '<div class="text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="select2SinglePlaceholder">Jenis Roti</label>
                    <select class="select2-single-placeholder form-control" name="jenis_roti" id="select2SinglePlaceholder">
                    <?= form_error('jenis_roti', '<div class="text-danger">', '</div>'); ?>
                    <option value="<?= $roti->id_jenis_roti; ?>"><?= $roti->nama_roti; ?></option>
                    <?php foreach($data as $show) { ?>
                      <option value="<?= $show['id_jenis'] ?>"><?= $show['nama_jenis'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group" id="simple-date1">
                    <label for="simpleDataInput">Tanggal</label>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control" name="tanggal" value="<?= $roti->tgl;?>" id="simpleDataInput">
                        <?= form_error('tanggal', '<div class="text-danger">', '</div>'); ?>
                      </div>
                  </div>
                  <div class="form-group" id="simple-date1">
                    <label for="simpleDataInput">Periode Minggu Ke-</label>
                        <input type="number" class="form-control" name="minggu" value="<?= $roti->minggu; ?>" id="simpleDataInput">
                        <?= form_error('tanggal', '<div class="text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="touchSpin3">Jumlah</label>
                    <input type="number" name="jumlah" value="<?= $roti->jumlah; ?>" class="form-control">
                    <?= form_error('jumlah', '<div class="text-danger">', '</div>'); ?>
                  </div>
                  <button type="submit" class="btn btn-success">Save <i class="fas fa-save"></i></button>
                  <a href="<?= base_url('admin/roti'); ?>" class="btn btn-warning">Cancel </a>

                </form>
                </div>
              </div>
            </div>


          </div>
          <!--Row-->