<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
$pageTitles = [
  'index.php' => 'Dashboard',
  'schools.php' => 'Schools',
  'viewall.php' => 'Schools',
  'add-new.php' => 'Add School',
];
$mainHeading = $pageTitles[$currentPage] ?? 'KNM Dashboard';
?>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo.svg" alt="Health Basix logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo.svg" alt="Health Basix logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize" aria-label="Toggle sidebar">
      <span><img src="assets/images/menu.svg" alt="Open menu"></span>
    </button>

    <h3 class="HeadingThree mb-0" id="main-heading"><?php echo htmlspecialchars($mainHeading, ENT_QUOTES, 'UTF-8'); ?></h3>

    <ul class="navbar-nav navbar-nav-right"></ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas" aria-label="Open navigation">
      <span><img src="assets/images/menu.svg" alt="Open menu"></span>
    </button>
  </div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

      <li class="nav-item<?php echo $currentPage === 'index.php' ? ' active' : ''; ?>">
        <i class=""><img src="assets/images/t2.svg" alt=""></i>
        <a class="nav-link" href="index.php">
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Schools</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-school menu-icon"></i> </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#" onclick="showpage('list')">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="#" onclick="showpage('add')">Add New</a></li>
              </ul>
            </div>
          </li> -->
      <li class="nav-item<?php echo in_array($currentPage, ['schools.php', 'viewall.php', 'add-new.php'], true) ? ' active' : ''; ?>">
        <i class=""><img src="assets/images/t5.svg" alt=""></i>
        <a class="nav-link" href="schools.php">
          <span class="menu-title">Schools</span>
        </a>
      </li>
      <li class="nav-item">
        <i class=""><img src="assets/images/t3.svg" alt=""></i>
        <a class="nav-link" href="#">
          <span class="menu-title">Costings</span>
        </a>
      </li>
      <li class="nav-item">
        <i class=""><img src="assets/images/t4.svg" alt=""></i>
        <a class="nav-link" href="#">
          <span class="menu-title">Invoice</span>
        </a>
      </li>


      <li class="nav-item">
        <i class=""><img src="assets/images/t6.svg" alt=""></i>
        <a class="nav-link" href="#">
          <span class="menu-title">Users</span>
        </a>
      </li>


    </ul>
  </nav>