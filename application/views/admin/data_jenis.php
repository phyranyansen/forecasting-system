 <!-- Row -->
 <div class="row">
            <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">
                  <a href="" class="btn btn-outline-primary" data-toggle="modal" data-target="#AddModal">Tambah Data  <i class="fa fa-plus"></i></a></h6>
                 
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No.</th>
                        <th>Nama Jenis Roti</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No.</th>
                        <th>Nama Jenis Roti</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php 
                      $no =1;
                      foreach($jenis as $j) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $j['nama_jenis']; ?></td>
                        <td style="width:15%"> 
                        <a href="" data-toggle="modal" data-target="#deleteModal<?= $j['id_jenis'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a> 
                        <a href="" data-toggle="modal" data-target="#EditModal<?= $j['id_jenis'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a> 
                      </td>
                      </tr>

                      <!-- Modal delete -->
                      <div class="modal fade" id="deleteModal<?= $j['id_jenis'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                      <p>Are you sure, you want to delete?</p>
                                      <p style="color:red"><small>Data: [<?= $j['nama_jenis'] ?>]</small></p>
                                    </div>
                                    <div class="modal-footer">
                                      <a href="<?= base_url('admin/delete_jenis/'.$j['id_jenis']); ?>" class="btn btn-warning">Delete</a>
                                      <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                                <!-- Modal edit -->
                                <div class="modal fade" id="EditModal<?= $j['id_jenis'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      Edit Data
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?= base_url('admin/edit_jenis'); ?>" method="post">
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Nama Jenis Roti</label>
                                      <input type="hidden" name="id_jenis" value="<?= $j['id_jenis'] ?>" id="">
                                      <input class="form-control  mb-3" type="text" name="nama_jenis" value="<?= $j['nama_jenis']; ?>" placeholder="Nama roti">
                                      <?= form_error('nama_jenis', '<div class="text-danger">', '</div>'); ?>
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
            
                            <!-- Modal ADD -->
                            <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      Add Data
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?= base_url('admin/addjenis'); ?>" method="post">
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Nama Jenis Roti</label>
                                      <input class="form-control  mb-3" type="text" name="jenis_roti" placeholder="Nama jenis roti">
                                      <?= form_error('nama_jenis', '<div class="text-danger">', '</div>'); ?>
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
                            
                              
