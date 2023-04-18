<?php
session_start(); // start the session
session_destroy(); // terminate the session
header('Location: login_cust.php'); // redirect to the login page
?>

