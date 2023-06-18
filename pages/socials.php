<?php
session_start();
include_once('../pages/db.php');

ini_set('display_errors', 1);
error_reporting(E_ALL);

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Socials</title>
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
    <style>
    #popup {
    visibility: hidden; 
    background-color: red;
    color: white; 
    position: absolute;
    text-align: center;
    top: 2px;
    z-index: 100; 
    height: 60px;
    width: 100%;
    margin: auto;
    padding-top: 20px;
    border: 0.2px solid red;
    box-shadow: 10px 10px 5px lightgray;
    border-radius: 1px;
    }
    #popup2 {
    visibility: hidden; 
    background-color: lightgreen; 
    color: white;
    position: absolute;
    text-align: center;
    top: 5px;
    z-index: 100; 
    height: 60px;
    width: 100%;
    margin: auto;
    padding-top: 20px;
    border: 0.2px solid green;
    box-shadow: 10px 10px 5px lightgray;
    border-radius: 5px;
    }
    #popup3 {
    visibility: hidden; 
    background-color: #FF9999;
    color: white; 
    position: absolute;
    text-align: center;
    top: 2px;
    z-index: 100; 
    height: 60px;
    width: 100%;
    margin: auto;
    padding-top: 20px;
    border: 0.2px solid red;
    box-shadow: 10px 10px 5px lightgray;
    border-radius: 1px;
    }
    #btn_input {
      background-color: #008CBA;
      color: white;
    }
    #btn_input:hover {
    background-color: #e7e7e7; 
    color: black;
    }
    #check_input {
        border-color: #008CBA;
        background-color: blue;
    }
    a {
      text-decoration: none;
    }
    a:active {
    color: #0000ff;;
    }
    #nav_style {

    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.php -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <?php
        // Check if user is logged in as Admin
          $image = "../assets/images/Black Empress-2.jpg"; // company logo
          $mini = "../assets/images/logo-mini.svg";
        
        ?>
          <a class="" href="../pages/home-contact.php"><img src="<?php echo $image;?>" alt="logo" width="150" height="50" /></a>
          <a class="navbar-brand brand-logo-mini" href="../pages/home-contact.php"><img src="<?php echo $mini; ?>" alt="logo" /></a>
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
                  <p class="mb-1 text-black"><?php echo $_SESSION['username']; ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../../index.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
              </div>
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
        
        <div class="main-panel">
          <div class="content-wrapper">
          
            <div class="page-header">
              <h3 class="page-title"> Our Socials Feeds</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <!-- <div class="col-md-6 grid-margin stretch-card">
              </div> -->
              <div class="col-12 grid-margin stretch-card">
              
                <div class="card">
                <div id="popup2" class="text-center">
                    <h5> <span> Success! </span> Submitted successfully </h5>
                </div>
                <div id="popup" class="text-center">
                    <h5> <span> Sorry </span>Failed to submit</h5>
                </div>
                  <div class="card-body">
                    <h4 class="card-title">Socials</h4>
                    <p class="card-description">Post Some of your social media comments. </p>
                    <form class="forms-sample" action="" method="POST">
                      <!-- <div class="form-group">
                        <label for="exampleInputName1">Date and Time</label>
                        <input type="time" class="form-control" id="exampleInputName1" placeholder="Time" name="time" required>
                      </div> -->
                      <div class="form-group">
                        <label for="exampleInputName1">Link To Post</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Post Link" name="link" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Comment</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="comment"></textarea>
                      </div>
                      <!-- class="btn btn-gradient-primary me-2" -->
                      <input id="btn_input" class="btn me-2" type="submit" name="submit" value="Submit">
                      <button class="btn btn-light" type="cancel">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
          <!-- content-wrapper ends -->

  <!-- partial:../../partials/_footer.php -->
    <footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
      <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Black Empress </span>
     </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../assets/js/file-upload.js"></script>
<!-- End custom js for this page -->
</body>
</html>

<?php
// $con = mysqli_connect("localhost", "root", "", "black_empress");

// if (!$con)
// {
//     die("Connection failed!" . mysqli_connect_error());
// }

if(isset($_POST["submit"])) {

  $current_time = date("H:i:s");
  $link = mysqli_real_escape_string($con, $_POST['link']);
  $comment = mysqli_real_escape_string($con, $_POST['comment']);
  
      $sql="INSERT INTO socials VALUES ('0', '$current_time', '$link', '$comment')";
      $result = mysqli_query($con, $sql);
      if($result) {
        echo '
        <script type="text/javascript">
          function hideMsg()
          {
             document.getElementById("popup2").style.visibility = "hidden";
          }
 
          document.getElementById("popup2").style.visibility = "visible";
          window.setTimeout("hideMsg()", 2000);
        </script>';
        // header("Location: home.php?uploadsuccess");
        exit();
      } else {
        echo '
        <script type="text/javascript">
          function hideMsg()
          {
             document.getElementById("popup").style.visibility = "hidden";
          }
 
          document.getElementById("popup").style.visibility = "visible";
          window.setTimeout("hideMsg()", 2500);
        </script>';
        exit();
      }
    } 
 ?>
