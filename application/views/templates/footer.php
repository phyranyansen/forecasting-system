<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to logout?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
        <a href="<?= base_url('welcome/logout') ?>" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>

</div>
<!---Container Fluid-->
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>copyright &copy; <script>
          document.write(new Date().getFullYear());
        </script> - developed by
        <b><a href="https://indrijunanda.gitlab.io/" target="_blank">phyranyansen</a></b>
      </span>
    </div>
  </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


<script type="text/javascript">
  $(document).ready(function() {
    $('#periode_awal').on('change', function() {
      var periode = $('#periode_awal').val();
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url('admin/get_periode') ?>',
        data: {
          'tgl': periode
        },
        success: function(data) {
          $("#periode_akhir").html(data);
        }
      })
    })
  })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.0-alpha/Chart.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#ramal').on('click', function() {
      var jenis_roti = $('#jenis_roti').val();
      var periode_awal = $('#periode_awal').val();
      var periode_akhir = $('#periode_akhir').val();
      var alpha = $('#alpha').val();
      $('#viewalpha').text(alpha);

      $.ajax({
        type: 'POST',
        url: '<?php echo base_url('admin/forecasting_view') ?>',
        data: {
          'jenis_roti': jenis_roti,
          'periode_awal': periode_awal,
          'periode_akhir': periode_akhir,
          'alpha': alpha
        },
        success: function(data) {
          $("#tampil").html(data);
          $("#rata_rata").html();

          $.ajax({
            type: "POST",
            url: '<?php echo base_url('admin/forecasting_json') ?>',
            data: {
              'jenis_roti': jenis_roti,
              'periode_awal': periode_awal,
              'periode_akhir': periode_akhir,
              'alpha': alpha
            },
            success: function(data) {
              $('#graph').empty();
              Morris.Line({
                element: 'graph',
                data: JSON.parse(data),
                xkey: 'tgl',
                ykeys: ['jumlah', 'ramalan'],
                labels: ['Data Aktual', 'Ramalan'],
                hideHover: 'auto',
                parseTime:false,
                stacked: true
              });
            }
          })


        }
      });




    });

  });
</script>


<script src="<?= base_url() . 'assets/bootstrap1/vendor/jquery/jquery.min.js'; ?>"></script>
<script src="<?= base_url() . 'assets/bootstrap1/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?= base_url() . 'assets/bootstrap1/vendor/jquery-easing/jquery.easing.min.js'; ?>"></script>
<script src="<?= base_url() . 'assets/bootstrap1/js/ruang-admin.min.js'; ?>"></script>
<!-- Page level plugins -->
<script src="<?= base_url() . 'assets/bootstrap1/vendor/datatables/jquery.dataTables.min.js'; ?>"></script>
<script src="<?= base_url() . 'assets/bootstrap1/vendor/datatables/dataTables.bootstrap4.min.js'; ?>"></script>
 <!-- Select2 -->
 <script src="<?= base_url() . 'assets/bootstrap1/vendor/select2/dist/js/select2.min.js';?>"></script>
<!-- Page level custom scripts -->
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable(); // ID From dataTable 
    $('#dataTableHover').DataTable(); // ID From dataTable with Hover
  });
</script>
<script src="<?= base_url() . 'assets/bootstrap1/vendor/select2/dist/js/select2.min.js'; ?>"></script>
<!-- Bootstrap Datepicker -->
<script src="<?= base_url() . 'assets/bootstrap1/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>
<!-- Bootstrap Touchspin -->
<script src="<?= base_url() . 'assets/bootstrap1/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js'; ?>"></script>
<!-- ClockPicker -->
<script src="<?= base_url() . 'assets/bootstrap1/vendor/clock-picker/clockpicker.js'; ?>"></script>
<!-- RuangAdmin Javascript -->
<script src="<?= base_url() . 'assets/bootstrap1/js/ruang-admin.min.js'; ?>"></script>
<!-- Javascript for this page -->
<!-- Page level plugins -->
<script src="<?= base_url() . 'assets/bootstrap1/vendor/chart.js/Chart.min.js'; ?>"></script>
<!-- Page level custom scripts -->
<script src="<?= base_url() . 'assets/bootstrap1/js/demo/chart-area-demo.js'; ?>"></script>
<script src="<?= base_url() . 'assets/bootstrap1/js/demo/chart-pie-demo.js'; ?>"></script>
<script src="<?= base_url() . 'assets/bootstrap1/js/demo/chart-bar-demo.js'; ?>"></script>
<script>
  $(document).ready(function() {


    $('.select2-single').select2();

    // Select2 Single  with Placeholder
    $('.select2-single-placeholder').select2({
      placeholder: "Select a Province",
      allowClear: true
    });

    // Select2 Multiple
    $('.select2-multiple').select2();

    // Bootstrap Date Picker
    $('#simple-date1 .input-group.date').datepicker({
      format: 'yyyy-mm-dd',
      todayBtn: 'linked',
      todayHighlight: true,
      autoclose: true,
    });

    $('#simple-date2 .input-group.date').datepicker({
      startView: 1,
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
      todayBtn: 'linked',
    });

    $('#simple-date3 .input-group.date').datepicker({
      startView: 2,
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
      todayBtn: 'linked',
    });

    $('#simple-date4 .input-daterange').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
      todayBtn: 'linked',
    });

    // TouchSpin

    $('#touchSpin1').TouchSpin({
      min: 0,
      max: 100,
      boostat: 5,
      maxboostedstep: 10,
      initval: 0
    });

    $('#touchSpin2').TouchSpin({
      min: 0,
      max: 100,
      decimals: 2,
      step: 0.1,
      postfix: '%',
      initval: 0,
      boostat: 5,
      maxboostedstep: 10
    });

    $('#touchSpin3').TouchSpin({
      min: 0,
      max: 100,
      initval: 0,
      boostat: 5,
      maxboostedstep: 10,
      verticalbuttons: true,
    });

    $('#clockPicker1').clockpicker({
      donetext: 'Done'
    });

    $('#clockPicker2').clockpicker({
      autoclose: true
    });

    let input = $('#clockPicker3').clockpicker({
      autoclose: true,
      'default': 'now',
      placement: 'top',
      align: 'left',
    });

    $('#check-minutes').click(function(e) {
      e.stopPropagation();
      input.clockpicker('show').clockpicker('toggleView', 'minutes');
    });

  });
</script>

</body>

</html>