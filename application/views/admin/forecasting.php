
      <div class="row">
            <div class="col-lg-4">
              <!-- Select2 -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Forecasting Form</h6>
                  
                </div>
                <div class="card-body">        
                <form action="<?= base_url('admin/forecasting_process') ?>" method="post">
                <div class="form-group">
                    <label for="select2SinglePlaceholder">Jenis Roti</label>
                    <select class="select2-single-placeholder form-control" name="jenis_roti"  id="jenis_roti">
                    <?= form_error('jenis_roti', '<div class="text-danger">', '</div>'); ?>
                      <option>Select</option>
                    <?php foreach($aktual as $show) { ?>
                      <option value="<?= $show['id_jenis'] ?>"><?= $show['nama_jenis'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="select2SinglePlaceholder">Periode Awal Ke-</label>
                    <select class="select2-single form-control" name="periode_awal" id="periode_awal">
                    <?= form_error('jenis_roti', '<div class="text-danger">', '</div>'); ?>
                      <option>Select</option>
                  <?php 
                  $minggu=1;
                  foreach($periode as $s) { ?>
                        <option value="<?= $s['tgl'] ?>"><?= $s['tgl'] ?></option>
                  <?php }?>
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="select2SinglePlaceholder">Periode Akhir Ke-</label>
                    <select class="select2-single form-control" name="periode_akhir" id="periode_akhir">
                   
                  </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="select2SinglePlaceholder">Nilai Alpha</label>
                    <select class="select2-single-placeholder form-control" name="alpha" id="alpha">
                    <?= form_error('jenis_roti', '<div class="text-danger">', '</div>'); ?>
                      <option>Select</option>
                      <option value="0.1">0.1</option>
                      <option value="0.2">0.2</option>
                      <option value="0.3">0.3</option>
                      <option value="0.4">0.4</option>
                      <option value="0.5">0.5</option>
                      <option value="0.6">0.6</option>
                      <option value="0.7">0.7</option>
                      <option value="0.8">0.8</option>
                      <option value="0.9">0.9</option>
                    </select>
                  </div>
                  <button type="button" class="btn btn-primary" id="ramal">Proses <i class="fas fa-arrow-right"></i></button>

                </form>
                </div>
              </div>
            </div>

            <div class="col-lg-8">
              <!-- Select2 -->
              <div class="card mb-4">
                <div class="card-header">
                  <h5>Alpha <span id="viewalpha"></span> </h5>
                </div>
                <div class="card-body">        
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light" >
                        <tr>
                          <th>Nama Roti</th>
                          <th>Periode (Minggu/Pekan)</th>
                          <th>Data Aktual</th>
                          <th>Hasil Ramalan</th>
                          <th>MAPE</th>
                        </tr>
                      </thead>
                      <tfoot id="rata_rata">
                        
                      
                      </tfoot>
                      <tbody id="tampil">
                      
                      </tbody>
                    </table>
                    <hr>
                  </div>
                  <div class="card-footer">
                  <div id="graph" style="margin-left:2%"></div>
                  </div>
                  </div>
                    
                  <hr>
                  
              </div> 
              
            </div>
           

            
          </div>
          <!--Row-->
  

