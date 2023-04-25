<?php
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$CustomerID = $_REQUEST["CustomerID"] ;
$bust_mes = $_REQUEST["bust_mes"] ;
$underarm_mes = $_REQUEST["underarm"] ;
$cup_size = $_REQUEST["cup_size"] ;
$masectomy = $_REQUEST["masectomy"] ;

// Check if the user has already added their measurements
$stmt = $connect->prepare( "SELECT * FROM measurment WHERE CustomerID = ?");
$stmt->execute((
	[$CustomerID]
));
$result = $stmt->fetch();
?>
<?php
if ($result) {
	include("./header.php") ;
  	echo "You have already added your measurements. <br>";
	echo " Back to log in screen. "; ?>
	<a href='./login_cust.php'>login page</a> 
	<?php	include("./footer.php") ;
	exit();

} else {

    // Allow the user to add their measurements
	$stmt = $connect->prepare("insert into measurment (Bust_Measurments, Masectomy, Cup_size, underarm_measurments, CustomerID) 
							   values (:Bust_Measurments, :Masectomy, :Cup_size, :underarm_measurments, :CustomerID) ");
	
	// Execute the SQL statement
	$stmt->execute(array(
		":Bust_Measurments" => $bust_mes,
		":Masectomy" => $masectomy,
		":Cup_size" => $cup_size,
		":underarm_measurments" => $underarm_mes,
		":CustomerID" => $CustomerID
	));
    } 
    // Allow the user to add their measurements
    // ...
	header("Location: ./logout.php");



// Close the database connection
include("./close_db.php") ;

session_destroy();
?>
	

