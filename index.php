<?php
session_start();
// $wrong = "Incorrect Username or password";
// $good = "Login Successful";
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
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
      #btn_input {
      background-color: #008CBA;
      border: none;
      color: white;
      padding: 12px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 4px;
      transition-duration: 0.4s;
      margin-right: 10px;
      margin-bottom: 15px;
    }
    #btn_input:hover {
    background-color: #e7e7e7; 
    color: black;
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
    <div id="popup2" class="text-center">
          <h5> <span>Success!</span> Login successfull </h5>
       </div>
      <div id="popup" class="text-center">
         <h5> <span> Sorry </span> Login Failed; Invalid credentials</h5>
      </div>
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        
        <div class="content-wrapper d-flex align-items-center auth">
          
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
              <div class="container-scroller">
    
                <div class="brand-logo">
                  <img src="assets/images/Black Empress.png">
                </div>
                <h4>Hello! let's get started </h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>

                <form class="pt-3" action="" method="POST" >

                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name = "email" placeholder="Enter email address" required >
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name = "pass" placeholder="Password" required>
                  </div>
                  <div class="mt-3">
                  <!-- btn-gradient-primary -->
                  <input id="btn_input" class="btn btn-block btn-lg btn-gradient-primary font-weight-medium auth-form-btn" name ="submit" type="submit" value ="SIGN IN" > 
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <!-- <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div> -->
                    <!-- <a href="pages/forms/geo-login.php" class="auth-link text-black">Admin? Sign In</a>
                    <a href="pages/forms/signup.php" class="auth-link text-black">New here? Signup</a> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>
<?php

// session_start(); 

$conn = mysqli_connect("localhost", "root", "", "black_empress");
		
// Check connection
if($conn === false){
  die("ERROR: Could not connect. "
    . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['pass'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $email = validate($_POST['email']);
    $pass = validate($_POST['pass']);
    if (empty($email)) {
        header("Location: index.php?error=Email is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM login WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {

              $email = $row['email'];
              $fullname = $row['username'];

              $_SESSION['email']=$email;
              $_SESSION['username']=$fullname;
              // var_dump($_SESSION);
              // header("Location:pages/home.php");
                echo "<script>window.location.href='pages/home-contact.php';</script>";
                exit();
            }else{
                echo '
                  <script type="text/javascript">
                  function hideMsg()
                  {
                      document.getElementById("popup").style.visibility = "hidden";
                  }
                      document.getElementById("popup").style.visibility = "visible";
                    window.setTimeout("hideMsg()", 2000);
                  </script>';
                exit();
            }
        }
        else{
            // header("Location: index.php?error=Incorect Username or password");
            echo '
                  <script type="text/javascript">
                  function hideMsg()
                  {
                      document.getElementById("popup").style.visibility = "hidden";
                  }
                      document.getElementById("popup").style.visibility = "visible";
                    window.setTimeout("hideMsg()", 2000);
                  </script>';
            exit();
        }
    }
}
	?>