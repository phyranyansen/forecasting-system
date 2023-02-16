            <div class="row">

            <div class="col-lg-3">
            <div class="card mb-4 alert-light">
              <div class="card-header">
                <p>Data Penjualan Roti
                  <br><span class="small">Data count</span>
                </p>
                <hr>
              </div>
             
              <div class="card-footer">
              <div class="progress">
              <?php foreach($ready as $ready) { ?>
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $ready['jumlah']; ?>%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="1000"><?= $ready['jumlah']; ?> </div>
                  </div>
                  <?php } ?>
              </div>
            </div>
            </div>

            <div class="col-lg-3">
            <div class="card mb-4 alert-light">
              <div class="card-header ">
                <p>Data Jenis Roti
                <br><span class="small">Data count</span>
                </p>
                <hr>
              </div>
             
              <div class="card-footer">
              <div class="progress">
                <?php foreach($terjual as $terjual) { ?>
                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $terjual['jumlah']; ?>%;" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="1000"><?= $terjual['jumlah']; ?> </div>
                  </div>
                <?php } ?>
              </div>
              </div>
            </div>
           

            <div class="col-lg-6 ">
            <div class="alert alert-light alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  Halo <strong><?= $this->session->userdata('username') ?></strong>, selamat data di Sistem Peramalan Penjualan Roti Alfarizqy Bakery Surabaya, <br><span> Menggunakan
                   Metode Single Exponential Smoothing.
                    <br> <br><small><?= date('d F Y') ?></small>
                  </span> 
                  </div>
            </div>




            </div>