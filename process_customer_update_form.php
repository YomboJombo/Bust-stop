<?php
session_start();
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$CustomerID = $_REQUEST['CustomerID'];
$user_name = $_REQUEST["User_Name"] ;
$FirstName = $_REQUEST["first_name"] ;
$Address1 = $_REQUEST["address_1"] ;
$Address2 = $_REQUEST["address_2"] ;
$PostCode = $_REQUEST["post_code"] ;

$enter_password = $_REQUEST["enter_password"] ;
$confirm_password = $_REQUEST["confirm_password"] ;


// Create adn encrypt a copy of the password 
// In this exercise we are going to use shal encryption in its simplest form
$crypted_pass = sha1($enter_password);

// Check that the passwords entered match.
if ($enter_password == $confirm_password)
{
	
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
		":f" => $crypted_pass,
		":g" => $CustomerID
    ));
	header("Location: ./login_cust.php");
}
else
{
	// Output message to the employee that the passwords do not match
	include("./header.php") ;
	?>
	<!-- Add the page content container -->
	<div class="container-fluid">
		<h6 style="text-align: left; color: blue; font-style: italic;">Update Customer Data</h6>
		<p style="text-align: left; color: black;">Oops - the passwords you have entered do 
													not match, please use your browser 
													back button to return to the form and 
													enter the passwords again.</p>
	</div> <!-- Container -->
	<?php
	include("./footer.php") ;
}


// Close the database connection
include("./close_db.php") ;
?>
	

