<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

<script src="assets/vendors/chart.js/chart.umd.js"></script>
<script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/new.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> -->
<script src="assets/js/select2new.js"></script>

<script>
  $(document).ready(function() {
    $(".select2").select2();
  });



$(document).ready(function() {
  // document.title = 'Simple DataTable';

  if ($.fn.DataTable && $('#example').length) {
    $('#example').DataTable({
      dom: '<"dt-buttons"B><"clear">rtpl', 

      paging: true,
      lengthMenu: [10, 25, 50, 100], 
      pageLength: 10,
      
      searching: false,
      info: false,
      autoWidth: true,

      // ADD THIS LINE TO REMOVE THE SORTING ARROWS:
      ordering: false 
    });
  }
});

</script>
