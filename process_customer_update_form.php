<?php
session_start();
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
// Get the user ID from the session
$CustomerID = $_POST['CustomerID'];
$user_name = $_POST["User_Name"] ;
$FirstName = $_POST["first_name"] ;
$Address1 = $_POST["address_1"] ;
$Address2 = $_POST["address_2"] ;
$PostCode = $_POST["post_code"] ;
$Crypted_pass = sha1($_POST['pass']);

	
	// The entered passwords are identical
	// Proceed to update the record based on employee number
	// Step 1. - Prepare the SQL statement
	$stmt = $connect->prepare("update customer set user_name = :a, FirstName = :b, Address1 = :c, Address2 = :d, PostCode = :e, Password = :f where CustomerID = :g");
	
	
	// Step 2. - Execute the SQL statement
	$stmt->execute(array(
		":a" => $user_name,
		":b" => $FirstName,
		":c" => $Address1,
		":d" => $Address2,
        ":e" => $PostCode,
		":f" => $Crypted_pass,
		":g" => $CustomerID
    ));
	// lead customer to log out
	header("Location: ./logout.php");


// Close the database connection
include("./close_db.php") ;
?>
	

