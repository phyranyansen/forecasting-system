
<!-- DataTables  & Plugins -->
<script src="<?= base_url().'assets/bootstrap2/plugins/datatables/jquery.dataTables.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/datatables-responsive/js/dataTables.responsive.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/datatables-buttons/js/dataTables.buttons.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/jszip/jszip.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/pdfmake/pdfmake.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/pdfmake/vfs_fonts.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/datatables-buttons/js/buttons.html5.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/datatables-buttons/js/buttons.print.min.js';?>"></script>
<script src="<?= base_url().'assets/bootstrap2/plugins/datatables-buttons/js/buttons.colVis.min.js';?>"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(function () {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
        
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for font awesome
    $('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var fa    = $this.hasClass('fa')

      //Switch states
      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>