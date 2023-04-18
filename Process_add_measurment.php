<?php
session_start();
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$CustomerID = $_REQUEST["CustomerID"] ;
$bust_mes = $_REQUEST["bust_mes"] ;
$underarm_mes = $_REQUEST["underarm"] ;
$cup_size = $_REQUEST["cup_size"] ;
$masectomy = $_REQUEST["masectomy"] ;

// Retrieve user's measurements from the database
$stmt = $connect->prepare("SELECT * FROM measurements WHERE CustomerID = $CustomerID");
$result = mysqli_query($conn, $stmt);
$measurements = mysqli_fetch_assoc($result);
// Create adn encrypt a copy of the password 
// In this exercise we are going to use shal encryption in its simplest form
if ($measurements) {  
    echo "You have already added your measurements.<br>";
    echo "If you want to update them, please edit your existing measurements.";
    }else{
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
	header("Location: ./login_cust.php");



// Close the database connection
include("./close_db.php") ;
?>
	

