<?php
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$brand = $_POST["Brand"];
$paymentMethod = $_POST["Payment_Method"];

$dateDelivered = $_POST["Date_Delivered"];
$dateCollected = $_POST["Date_Collected"];
$depositLeft = $_POST["Deposit_Left"];
$contacted = $_POST["Contacted"];
$courtesyCall = $_POST["Courtesy_Call"];
$orderID = $_POST["OrderID"];

// prepare the SQL statement to retrieve the order ID based on the provided information
$stmt = $connect->prepare("SELECT OrderID FROM orders WHERE Brand = :brand OR Payment_Method = :paymentMethod");
$stmt->bindParam(':brand', $brand, PDO::PARAM_STR);
$stmt->bindParam(':paymentMethod', $paymentMethod, PDO::PARAM_STR);

// execute the SQL statement and retrieve the order ID
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!empty($result)) {
    $orderID = $result[0]['OrderID'];
} else {
    // no order found with the provided information
    $orderID = null;
}

// prepare the SQL statement to update the order information
$stmt = $connect->prepare("UPDATE orders SET Date_Delivered = :dateDelivered, Date_Collected = :dateCollected, Deposit_Left = :depositLeft, Contacted = :contacted, Courtesy_Call = :courtesyCall WHERE OrderID = :orderID");

// bind parameters to the statement
$stmt->bindParam(':dateDelivered', $dateDelivered);
$stmt->bindParam(':dateCollected', $dateCollected);
$stmt->bindParam(':depositLeft', $depositLeft);
$stmt->bindParam(':contacted', $contacted);
$stmt->bindParam(':courtesyCall', $courtesyCall);
$stmt->bindParam(':orderID', $orderID);

// execute the SQL statement
$stmt->execute();


header("Location: ./display_cust.php");
exit();
// Close the database connection
include("./close_db.php") ;
?>