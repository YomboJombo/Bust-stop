<?php
session_start();
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$CustomerID = $_REQUEST["CustomerID"] ;
$bust_mes_update = $_REQUEST["bust_mes_update"] ;
$underarm_mes_update = $_REQUEST["underarm_mes_update"] ;
$cup_size_update = $_REQUEST["cup_size_update"] ;
$masectomy_update = $_REQUEST["masectomy_update"] ;

// Create adn encrypt a copy of the password 
// In this exercise we are going to use shal encryption in its simplest form

	// Update measurments
	// Step 1. - Prepare the SQL statement
	$stmt = $connect->prepare("update measurment set Bust_Measurments = :a, Masectomy = :b, Cup_size = :c, underarm_measurments = :d where CustomerID = :e ");
	
	
	// Step 2. - Execute the SQL statement
	$stmt->execute(array(
	":a" => $bust_mes_update,
	":b" => $masectomy_update,
	":c" => $cup_size_update,
	":d" => $underarm_mes_update,
	":e" => $CustomerID
	));
	
	header("Location: ./login_cust.php");



// Close the database connection
include("./close_db.php") ;
?>
	

