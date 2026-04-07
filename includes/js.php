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

<script>
const labelPlugin = {
  id: 'labelPlugin',
  afterDraw(chart) {
    const { ctx } = chart;

    chart.data.datasets.forEach((dataset, i) => {
      const meta = chart.getDatasetMeta(i);
      const arc = meta.data[0];

      if (!arc) return;

      const value = dataset.data[0];
      const label = dataset.label;

      // ✅ Start angle (beginning of arc)
      const angle = arc.startAngle;

      const radius = arc.outerRadius + 30;

      const x = arc.x + Math.cos(angle) * radius;
      const y = arc.y + Math.sin(angle) * radius;

      ctx.save();
      ctx.font = '500 13px Arial';
      ctx.fillStyle = '#737373';
      ctx.textBaseline = 'middle';

      ctx.textAlign = x > arc.x ? 'left' : 'right';

      // ✅ Proper spacing (instead of marginTop)
      const yOffset = 35;

      ctx.fillText(`${label} ${value}%`, x, y + yOffset);

      ctx.restore();
    });
  }
};

const data = {
  datasets: [
    {
      label: 'Received',
      data: [75, 25],
      backgroundColor: ['#22a699', '#fff'],
      borderWidth: 0,
      radius: '100%',
      cutout: '75%'
    },
    {
      label: 'Pending',
      data: [75, 25],
      backgroundColor: ['#3a7bd5', '#fff'],
      borderWidth: 0,
      radius: '85%',
      cutout: '75%'
    },
    {
      label: 'Overdue',
      data: [75, 25],
      backgroundColor: ['#f39c12', '#fff'],
      borderWidth: 0,
      radius: '70%',
      cutout: '75%'
    }
  ]
};

const config = {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true,
    maintainAspectRatio: false,
    layout: {
      padding: 40
    },
    plugins: {
      legend: {
        display: false
      },
      tooltip: {
        enabled: false
      }
    }
  },
  plugins: [labelPlugin]
};

new Chart(document.getElementById('chart'), config);
</script>


<script>
    const ctx = document.getElementById('schoolchart').getContext('2d');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['New', 'Renewed', 'Expiring', 'Closed'],
        datasets: [{
          data: [90, 72, 40, 22],
          backgroundColor: '#f5a300',
          borderRadius: 10,
          barPercentage: 0.6,
          categoryPercentage: 0.6
        }]
      },
      options: {
        plugins: {
          legend: { display: false }
        },
        scales: {
          y: {
            beginAtZero: true,
            max: 100,
            ticks: {
              stepSize: 20
            },
            grid: {
              color: '#d0d7de',
              borderDash: [5, 5]
            }
          },
          x: {
            grid: {
              display: false
            }
          }
        }
      }
    });
  </script>