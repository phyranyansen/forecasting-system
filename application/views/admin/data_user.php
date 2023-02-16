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
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Activation</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Activation</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    <?php 
                      $no =1;
                      foreach($user as $j) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $j['username']; ?></td>
                        <td><?= $j['email']; ?></td>
                        <td><?= $j['password']; ?></td>
                        <?php
                            if($j['active']<1)
                            {
                                ?>
                           <td>Belum diaktivasi <i style="color:red" class="fa fa-times"></i></td>
                        <?php }else{
                            ?>
                        <td>Diaktivasi <i style="color:green" class="fa fa-check"></i></td>
                       <?php }
                        ?>
                        
                        <td> 
                        <a href="" data-toggle="modal" data-target="#deleteModal<?= $j['id_user'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a> 
                        <a href="" data-toggle="modal" data-target="#EditModal<?= $j['id_user'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a> 
                      </td>
                      </tr>


                      <!-- Modal edit -->
                      <div class="modal fade" id="EditModal<?= $j['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      Edit Data User
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?= base_url('admin/adduser'); ?>" method="post">
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Username</label>
                                      <input class="form-control  mb-3" type="text" name="username" value="<?= $j['username'] ?>" placeholder="Username">
                                      <?= form_error('username', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Email</label>
                                      <input class="form-control  mb-3" type="email" name="email" value="<?= $j['email'] ?>" placeholder="Email">
                                      <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                                    </div>

                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Password</label>
                                     
                                      <input class="form-control  mb-3" type="text" name="password" value="<?= base64_decode($j['password']); ?>" placeholder="password">
                                      <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                    <label for="select">Aktivasi</label>
                                    <select class="form-control" name="active">
                                    <?= form_error('active', '<div class="text-danger">', '</div>'); ?>
                                      <option>Select</option>
                                      <option value="1">Diaktivasi</option>
                                      <option value="2">Tidak diaktivasi</option>
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





                      <!-- Modal delete -->
                      <div class="modal fade" id="deleteModal<?= $j['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                      <p>Are you sure, do you want to delete <span style="color:red"><?= $j['username'] ?></span>?</p>
                                    </div>
                                    <div class="modal-footer">
                                      <a href="<?= base_url('admin/delete_user/'.$j['id_user']); ?>" class="btn btn-warning">Delete</a>
                                      <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                    </div>
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
                                      Add Data User
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?= base_url('admin/adduser'); ?>" method="post">
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Username</label>
                                      <input class="form-control  mb-3" type="text" name="username" placeholder="Username">
                                      <?= form_error('username', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Email</label>
                                      <input class="form-control  mb-3" type="email" name="email" placeholder="Email">
                                      <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                      <label for="select2SinglePlaceholder">Password</label>
                                      <input class="form-control  mb-3" type="password" name="password" placeholder="password">
                                      <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                   
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-success" >Save <i class="fas fa-save"></i></button>
                                      <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Cancel</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                              </div>
                            
                              
