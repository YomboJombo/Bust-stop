<?php
// connect to databse
include("./connect_db.php") ;

// Assign the transferred POST variables from the form name="" variables.
$band_mes = $_REQUEST["band_mes"] ;
$cup_mes = $_REQUEST["cup_mes"] ;
$masectomy = $_REQUEST["masectomy"] ;

// Create adn encrypt a copy of the password 
// In this exercise we are going to use shal encryption in its simplest form
$crypted_pass = sha1($enter_password);

// Check that the passwords entered match.
if ($enter_password == $confirm_password)
{
	// Mesurment table
	$stmt = $db->prepare("insert into measurment ( Band Measurment, Masectomy, cup_measurment) 
								values (:a, :b, :c) ");
	
	$stmt->execute(array(
	":a" => $band_mes,
	":b" => $cup_mes,
	":c" => $masectomy
	));

    // Transfer processing to the display_cust.php script
	header("Location: ./display_cust.php") ;
}
else
{
	// Output message to the employee that the passwords do not match
	include("./header.php") ;
	?>
	<!-- Add the page content container -->
	<div class="container-fluid">
		<h6 style="text-align: left; color: blue; font-style: italic;">Add a Customer</h6>
		<p style="text-align: left; color: black;">Oops - the passwords you have entered do not match, please use your browser 
													back button to return to the form and enter the passwords again.</p>
	</div> <!-- Container -->
	<?php
	//Inlcude teh footer
	include("./footer.php") ;
}

// Close the database connection
include("./close_db.php") ;

?>