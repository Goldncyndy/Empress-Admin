<?php
session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
// $_SESSION = array();
// unset($_SESSION["email"]);
// unset($_SESSION["fullname"]);
// unset($_SESSION["username"]);
// unset($_SESSION["company"]);
header("Location:../index.php");
exit();
?>

<!-- `var user_response = confirm("Are you sure you want to logout? Your current session will be closed!");
if (user_response === true) {
$.ajax({url: "../logout.php", success: function(result){
console.log(result);
window.location.href = "../../index.php";
}});
} -->