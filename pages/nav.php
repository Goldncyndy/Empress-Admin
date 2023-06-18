<?php
session_start();
// session_regenerate_id(true);
include('../pages/db.php');

$username = $_SESSION['username'];
$email = $_SESSION['email'];

// $conn = mysqli_connect("localhost", "root", "", "black_empress");
		
// // Check connection
// if($conn === false){
//   die("ERROR: Connection error. "
//     . mysqli_connect_error());
// }
$query = "select * from contact_info";
$result = mysqli_query($con,$query);

$query2 = "select * from newsletter";
$res = mysqli_query($con,$query2);
    
// Check if user is logged in as admin
  $image = "../assets/images/Black Empress-2.jpg";
  $mini = "../assets/images/logo-mini.svg";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Black Empress</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
  
  </head>
  <body>
  <div class="container-scroller">
      <!-- partial:../../partials/_navbar.php -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

        <!-- HTML code to display the image -->
          <a class="" href="home-contact.php"><img src="<?php echo $image; ?>" alt="logo" width="150" height="50"/></a>
          <a class="navbar-brand brand-logo-mini" href="home-contact.php"><img src="<?php echo $mini; ?>" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../assets/images/faces-clipart/pic-1.png" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                
                  <p class="mb-1 text-black"><?php echo $username; ?></p>
                  
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
              <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
              </div> -->
            </li>
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.php -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../assets/images/faces-clipart/pic-1.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"> <?php echo $username; ?></span>
                  <span class="text-secondary text-small">Admin</span>
                </div>
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
                </li>
                <li class="nav-item">
                  <a id="nav_style" class="nav-link" href="../pages/home-contact.php">
                    <span class="menu-title">Contact Info</span>
                    <i class="mdi mdi-home menu-icon"></i>
                  </a>
                </li>

                <li class="nav-item">
                  <a id="nav_style" class="nav-link" href="../pages/newsletter-signup.php">
                    <span class="menu-title">Newletter Signups</span>
                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                  </a>
                </li>
                  <!-- class="nav-link" -->
                <li class="nav-item">
                  <a class="nav-link" href="../pages/blog-content.php">
                    <span class="menu-title">Blog Content</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/projects.php">
                    <span class="menu-title">Projects</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/socials.php">
                    <span class="menu-title">Socials</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                </a>
                </li>
                <li class="nav-item">
                <a id="nav_style" class="nav-link" href="../index.php">
                  <span class="menu-title">Signout</span>
                  <i class="mdi mdi-logout me-2 text-primary"></i>
                </a>
                </li>
              </ul>
          </nav>
        <!-- partial -->
