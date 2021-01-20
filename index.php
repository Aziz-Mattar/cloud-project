<?php

session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: pages\samples\0-login.php');
  exit;
}
if (isset($_GET['action']) && $_GET['action'] == "logout") {
      session_unset();
      $_SESSION['loggedin'] = false;
      session_destroy();
      header('Location: pages\samples\0-login.php');
      if ((isset($_COOKIE['remember-me']))) {
    setcookie("remember-me",$_COOKIE['remember-me'],time()-3600);     }
      
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Aziz Balaha  </p>
                </div>
                <div style="width: 10px"></div>
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href='pages\samples\0-login.php?action=logout'>
                  <i class="mdi mdi-logout mr-2 text-primary"></i> logout </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Aziz Balaha</span>
                  <span class="text-secondary text-small">Admin</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#F" aria-expanded="false" aria-controls="F">
               <span class="menu-title">Accept Students Requests</span>
               <i class="menu-arrow"></i>
               <i class="mdi mdi-checkbox-marked-circle menu-icon"></i>
               </a>
               <div class="collapse" id="F">
                  <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="pages/samples/Add.php">Accept</a></li>
                  </ul>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="collapse" href="#A" aria-expanded="false" aria-controls="A">
               <span class="menu-title">Add Grades</span>
               <i class="menu-arrow"></i>
               <i class="mdi mdi-plus-box-outline menu-icon"></i>
               </a>
               <div class="collapse" id="A">
                  <ul class="nav flex-column sub-menu">
                     <li class="nav-item"> <a class="nav-link" href="pages/samples/Add2.php">Add </a></li>
                  </ul>
               </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#B" aria-expanded="false" aria-controls="B">
                <span class="menu-title">Delete Students</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-delete-empty menu-icon"></i>
              </a>
              <div class="collapse" id="B">
                <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/Delete.php"> Delete </a></li>                 
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#C" aria-expanded="false" aria-controls="C">
                <span class="menu-title">View Student Report</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-view-list menu-icon"></i>
              </a>
              <div class="collapse" id="C">
                <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/View.php"> view </a></li>                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#D" aria-expanded="false" aria-controls="D">
                <span class="menu-title">Search</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-magnify menu-icon"></i>
              </a>
              <div class="collapse" id="D">
                <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/View2.php"> Search </a></li>                  
                </ul>
              </div>
            </li>                 
          </ul>
        </nav>	
        <div class="main-panel">
          <div class="content-wrapper containerA">
          <div class="card-body">
          <center><h1>Welcome to Student Record Management</h1></center>
        </div>
        </div>
        </div>
      </div>
    </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
  </body>
</html>