<?php
session_start(); // start the session
session_destroy(); // terminate the session
header('Location: login_admin.php'); // redirect to the login page
?>

