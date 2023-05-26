<?php
session_start();
if (isset($_session['CustomerID'])){
// connect to databse
include("./connect_db.php") ;

// Assign the transferred POST variables from the form name="" variables.\
$bust_mes = $_REQUEST["bust_mes"] ;
$masectomy = $_REQUEST["masectomy"] ;
$cup_size = $_REQUEST["cup_size"] ;
$underarm_mes = $_REQUEST["underarm_mes"] ;

	// PDO statement for the insert row requirement, 
	// defends against SQL injection attack by using parameterised values.
	// Step 1. - Prepare the SQL statement
	// Customer table
	$CustomerID = $_session['CustomerID'];
	$stmt = $connect->prepare("insert into measurment (Bust_Measurments, Masectomy, Cup_size, underarm_measurments, CustomerID) 
								values (Bust_Measurments, Masectomy, Cup_size, underarm_measurments, CustomerID) ");

    
	// Step 2. - Execute the SQL statement
	// for Measurmets 
	
	$stmt->execute(array(
		":Bust_Measurments" => $bust_mes,
		":Masectomy" => $masectomy,
		":Cup_size" => $cup_size,
		":underarm_measurments" => $underarm_mes

	// For measurment
	));

	// Close the database connection
	include("./close_db.php") ;

	 // Redirect to success page
	 session_destroy();
	 header("Location: display_cust.php");
	 exit();
	 
	} else {
	// Transfer processing to the display_cust.php script
	session_destroy(); // terminate the session
	header("Location: ./login_cust.php") ;
	exit();
	}



?>