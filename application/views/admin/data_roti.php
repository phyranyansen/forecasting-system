 <!-- Row -->
          <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">
                    <a class="btn btn-outline-primary" href="<?= base_url('admin/addroti'); ?>">Tambah Data  <i class="fa fa-plus"></i></a>
                    <a class="btn btn-outline-success" href="javascript:void(0);" data-toggle="modal" data-target="#uploadModal">Upload Data  <i class="fa fa-upload"></i></a>
                </h6>
                <a href="" data-toggle="modal" data-target="#deleteAllModal" style="float:right"> <i class="fas fa-ellipsis-v "></i></a>
                  </div>
                
                  <div class="table-responsive mailbox-messages p-3">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="text-align:center">
                        <input type="checkbox" class="btn btn-default btn-sm checkbox-toggle" id="group1">
                        </th>
                        <th>No.</th>
                        <th>Nama Roti</th>
                        <th>Jenis Roti</th>
                        <th>Tanggal / Periode</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th>No.</th>
                        <th>Nama Roti</th>
                        <th>Jenis Roti</th>
                        <th>Tanggal / Periode</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php 
                      $no =1;
                      $no1 =1;
                      
                      foreach($roti as $show) { ?>
 
                       <tr>
                        <td style="text-align:center">
                        <input type="checkbox" class="check-item group1" name="id_roti[]" value="<?=$show['id_roti']?>">
                       </td>
                        <td><?= $no++; ?></td>
                        <td><?= $show['nama_roti']; ?></td>
                        <td><?= $show['nama_jenis']; ?></td>
                        <td><?= $show['tgl']; ?></td>
                        <td><?= $show['jumlah']; ?></td>
                        <td style="width:15%"> 
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal<?= $show['id_roti']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a> 
                        <a href="" data-toggle="modal" data-target="#EditModal<?= $show['id_roti'];?>" class="btn btn-primary"><i class="fas fa-edit"></i></a> 
                      </td>
                      </form>
                        </tr>

                         <!-- Modal delete -->
                      <div class="modal fade" id="deleteModal<?= $show['id_roti'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                      <p>Are you sure, you want to delete data?</p>
                                      <p style="color:red"><small>Data: [<?= $show['nama_roti'] ?>, <?= $show['jumlah'] ?>, <?= $show['tgl'] ?>, Periode ke-<?= $show['minggu'] ?>]</small></p>
                                    </div>
                                    <div class="modal-footer">
                                      <a href="<?= base_url('admin/delete_roti/'.$show['id_roti']); ?>" class="btn btn-warning">Delete</a>
                                      <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </div>



                        <!-- Modal edit -->
                     <div class="modal fade" id="EditModal<?= $show['id_roti'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      Edit Data
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?= base_url('admin/edit_roti'); ?>" method="post">
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Nama Roti</label>
                                      <input type="hidden" name="id_roti" value="<?= $show['id_roti']; ?>" id="">
                                      <input class="form-control  mb-3" type="text" name="nama_roti" value="<?= $show['nama_roti']; ?>" placeholder="Nama roti">
                                      <?= form_error('nama_roti', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Periode Minggu Ke-</label>
                                      <input class="form-control  mb-3" type="number" name="minggu" value="<?= $show['minggu']; ?>" placeholder="Minggu ke-">
                                      <?= form_error('nama_roti', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group" id="simple-date1">
                                    <label for="simpleDataInput">Tanggal</label>
                                      <div class="input-group date">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="tanggal" value="<?= $show['tgl'];?>" id="simpleDataInput">
                                        <?= form_error('tanggal', '<div class="text-danger">', '</div>'); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="touchSpin3">Jumlah</label>
                                    <input type="number" name="jumlah" value="<?= $show['jumlah']; ?>" class="form-control">
                                    <?= form_error('jumlah', '<div class="text-danger">', '</div>'); ?>
                                  </div>
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Jenis Roti</label>
                                      <select class="select2-single-placeholder form-control" name="jenis_roti" id="select2SinglePlaceholder">
                                      <?= form_error('jenis_roti', '<div class="text-danger">', '</div>'); ?>
                                      <option value="<?= $show['id_jenis_roti']; ?>"><?= $show['nama_roti']; ?></option>
                                      <?php foreach($data as $show) { ?>
                                        <option value="<?= $show['id_jenis'] ?>"><?= $show['nama_jenis'] ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-success" >Save <i class="fas fa-save"></i></button>
                                      <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>

                        
                        <?php } ?>
                    </tbody>
                  </table>
               
                  </div>
                

                  </div>
                  </div>


          <!-- Modal upload data excel -->
            <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        Upload data files, format must be (xlsx/xls).
                                    </div>
                                    <div class="modal-body">
                                    <?= form_open_multipart('import'); ?>
                                    <div class="form-group">
                                        <div class="custom-file">
                                          <input type="file" name="excel"  class="custom-file-input" id="customFile">
                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                           </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" name="submit" value="upload" class="btn btn-primary">Upload Data <i class="fa fa-cloud"></i></button>
                                      <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Cancel</button>
                                    </div>
                                    <?= form_close(); ?>
                                  </div>
                                </div>
                              </div>


                               

                               <!-- Modal delete -->
        <div class="modal fade" id="deleteAllModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                      <p>Are you sure, you want to delete all data?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" id="btn-delete" class="btn btn-warning">Delete <i class="fas fa-trash"></i></button>
                                  
                                      <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

  <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    $("#check-all").click(function(){ // Ketika user men-cek checkbox all
      if($(this).is(":checked")) // Jika checkbox all diceklis
        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
      else // Jika checkbox all tidak diceklis
        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
    });
    
    $("#btn-delete").click(function(){ // Ketika user mengklik tombol delete
        $("#form-delete").submit(); // Submit form
    });
  });
  </script>
  <script type="text/javascript">
       $(function() {
        enable_cb();
        $("#group1").click(enable_cb);
      });

      function enable_cb() {
        if (this.checked) {
          $("input.group1").removeAttr("disabled");
        } else {
          $("input.group1").attr("disabled", true);
        }
      }
    </script>
    

                               