<?php
session_start();
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
// Get the user ID from the session
$Password = sha1($_POST['pass']);

$Crypted_pass  = sha1($Password);

	// The entered passwords are identical
	// Proceed to update the record based on employee number
	// Step 1. - Prepare the SQL statement
	$stmt = $connect->prepare("update customer set Password = :a where CustomerID = :b");
	
	
	// Step 2. - Execute the SQL statement
	$stmt->execute(array(
		":a" => $Crypted_pass,
		":b" => $CustomerID
    ));
	// lead customer to log out
	header("Location: ./logout.php");

// Close the database connection
include("./close_db.php") ;
?>
	

