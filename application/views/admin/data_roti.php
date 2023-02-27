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
                  <table  class="table table-bordered table-striped" id="tableroti">
                    <thead>
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
                       
                        <th>No.</th>
                        <th>Nama Roti</th>
                        <th>Jenis Roti</th>
                        <th>Tanggal / Periode</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    
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
    
    <script>
      // Serverside Datatable
  $(document).ready(function(){
    table = $('#tableroti').DataTable({
        responsive: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],
 
        "ajax": {
            "url": "<?= site_url('admin/ambildata') ?>",
            "type": "POST"
        },
 
 
        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],
 
    });
  })
      </script>
    

                               