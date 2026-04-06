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


  const tabs = document.querySelectorAll(".tabs li");
  const contents = document.querySelectorAll(".tab-content");

  function showTab(tabId) {
    contents.forEach((content) => (content.style.display = "none"));
    document.getElementById(tabId).style.display = "block";

    tabs.forEach((tab) => tab.classList.remove("active"));
    document.querySelector(`[data-tab="${tabId}"]`).classList.add("active");
  }

  tabs.forEach((tab) => {
    tab.addEventListener("click", function() {
      showTab(this.getAttribute("data-tab"));
    });
  });

  // Hiển thị tab đầu tiên khi tải trang
  showTab("tab1");



  $(document).ready(function() {
    // document.title = 'Simple DataTable';

    if ($.fn.DataTable && $('#example').length) {
      if ($.fn.DataTable.isDataTable('#example')) {
        return;
      }

      $('#example').DataTable({
        dom: 'rtpl',

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


  $(document).ready(function() {
    // document.title = 'Simple DataTable';

    if ($.fn.DataTable && $('#exampleTwo').length) {
      if ($.fn.DataTable.isDataTable('#exampleTwo')) {
        return;
      }

      $('#exampleTwo').DataTable({
        dom: 'rtpl',

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



  $(document).ready(function() {
    // document.title = 'Simple DataTable';

    if ($.fn.DataTable && $('#exampleThree').length) {
      if ($.fn.DataTable.isDataTable('#exampleThree')) {
        return;
      }

      $('#exampleThree').DataTable({
        dom: 'rtpl',

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


    $(document).ready(function() {
    // document.title = 'Simple DataTable';

    if ($.fn.DataTable && $('#exampleFour').length) {
      if ($.fn.DataTable.isDataTable('#exampleFour')) {
        return;
      }

      $('#exampleFour').DataTable({
        dom: 'rtpl',

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




      $(document).ready(function() {
    // document.title = 'Simple DataTable';

    if ($.fn.DataTable && $('#exampleFive').length) {
      if ($.fn.DataTable.isDataTable('#exampleFive')) {
        return;
      }

      $('#exampleFive').DataTable({
        dom: 'rtpl',

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



        $(document).ready(function() {
    // document.title = 'Simple DataTable';

    if ($.fn.DataTable && $('#exampleSix').length) {
      if ($.fn.DataTable.isDataTable('#exampleSix')) {
        return;
      }

      $('#exampleSix').DataTable({
        dom: 'rtpl',

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


  $(document).ready(function() {
    // document.title = 'Simple DataTable';

    if ($.fn.DataTable && $('#exampleSeven').length) {
      if ($.fn.DataTable.isDataTable('#exampleSeven')) {
        return;
      }

      $('#exampleSeven').DataTable({
        dom: 'rtpl',

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


  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach(item => {
    const btn = item.querySelector(".faq-question");

    btn.addEventListener("click", () => {
      // close other items
      faqItems.forEach(i => {
        if (i !== item) {
          i.classList.remove("active");
          i.querySelector(".icon").innerHTML = `<img src="assets/images/Vector3.svg" alt="">`;
        }
      });

      // toggle current item
      const isActive = item.classList.toggle("active");
      if(isActive){
        icon.innerHTML `<img src="assets/images/Vector3.svg" alt="">`;
      } else {
        icon.innerHTML `<img src="assets/images/Vector3.svg" alt="">`;
      }
    });
  });
</script>