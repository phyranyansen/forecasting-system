 <!-- Row -->
 <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">
                    <a class="btn btn-outline-primary" href="javascript:void(0);" data-toggle="modal" data-target="#addModal">Tambah Data  <i class="fa fa-plus"></i></a>
                    <a class="btn btn-outline-success" href="javascript:void(0);" data-toggle="modal" data-target="#uploadModal">Upload Data  <i class="fa fa-upload"></i></a>
                   </h6>
                <a href="" data-toggle="modal" data-target="#deleteAllModal" style="float:right"> <i class="fas fa-ellipsis-v "></i></a>

                 </div>
                 <form action="<?= base_url('admin/delete_all_stok'); ?>" method="post" id="form-delete"></th>
                <div class="table-responsive mailbox-messages p-3">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="text-align:center"><button type="button" class="btn btn-default btn-sm checkbox-toggle" id="myCheck"><i class="far fa-square"></i></button>
                        </th>
                        <th>No.</th>
                        <th>Nama Roti</th>
                        <th>Jenis Roti</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                        <th>Jumlah Stok</th>
                        <th>Stok</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <td></td>
                        <th>No. </th>
                        <th>Nama Roti</th>
                        <th>Jenis Roti</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                        <th>Jumlah Stok</th>
                        <th>Stok</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php 
                      $no =1;
                      $no1 =1;
                      
                      foreach($roti as $show) { ?>
                      <tr>
                     
                        
                        <td style="text-align:center"><input type="checkbox" class="check-item" name="id_stok[]" value="<?=$show['id_stok']?>" id="check1" style="disabled"></td>
                       <td><?= $no++; ?></td>
                        
                        <td><?= $show['nama_roti']; ?></td>
                        <td><?= $show['nama_jenis']; ?></td>
                        <td style="text-align:center"> <?= number_format($show['harga'], 2); ?></td>
                        <td><?= $show['tgl']; ?></td>
                        <td><?= $show['jumlah']; ?></td>
                        <?php
                          if($show['status']=='terjual')
                          {
                        ?>
                        <td><?= $show['status']; ?> <i class="fa fa-times" style="color:red"></i></td>
                        <?php }else{?>
                          <td><?= $show['status']; ?> <i class="fa fa-check" style="color:green"></i></td>
                       <?php } ?>
                        <td style="width:15%"> 
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal<?= $show['id_stok']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a> 
                        <a href="" data-toggle="modal" data-target="#EditModal<?= $show['id_stok'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a> 
                      </td>
                       </tr>
                        <?php } ?>
                    </tbody>
                  </table>
                  </form>
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

          <!-- Modal upload data excel -->
            <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        Upload data files, format must be (xlsx/xls).
                                    </div>
                                    <div class="modal-body">
                                    <?= form_open_multipart('import/stok'); ?>
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

                              
                            <!-- Modal ADD -->
                            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      Add Data
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?= base_url('add-stok'); ?>" method="post">
                                    <div class="form-group">
                                      <label for="select2Single">Jenis Roti</label>
                                      <select class="select2-single form-control" name="jenis_roti" id="select2Single">
                                      <?= form_error('jenis_roti', '<div class="text-danger">', '</div>'); ?>
                                      <option value="<?= $show['id_jenis_roti'] ?>"><?= $show['nama_roti']; ?></option>
                                      <?php foreach($data as $t) { ?>
                                        <option value="<?= $t['id_jenis'] ?>"><?= $t['nama_jenis'] ?></option>
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
