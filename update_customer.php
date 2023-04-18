<?php
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$newrole = $_POST["newrole"];

// prepare the SQL statement to retrieve the order ID based on the provided information
$stmt = $connect->prepare("SELECT CustomerID FROM customer WHERE FirstName = :FirstName OR LastName = :LastName");
$stmt->bindParam(':FirstName', $FirstName, PDO::PARAM_STR);
$stmt->bindParam(':LastName', $LastName, PDO::PARAM_STR);

// execute the SQL statement and retrieve the order ID
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!empty($result)) {
    $CustomerID = $result[0]['CustomerID'];
} else {
    // no order found with the provided information
    $CustomerID = null;
}

// prepare the SQL statement to update the order information
$stmt = $connect->prepare("UPDATE customer SET roles = :roles WHERE CustomerID = :CustomerID");

// bind parameters to the statement
$stmt->bindParam(':roles', $newrole);
$stmt->bindParam(':CustomerID', $CustomerID);

// execute the SQL statement
$stmt->execute();


header("Location: ./display_cust.php");
exit();
// Close the database connection
include("./close_db.php") ;
?>
	

