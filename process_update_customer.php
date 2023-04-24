<?php
session_start();
include("./connect_db.php");
?>
<?php
// Assign the transferred POST variables from the form name="" variables.
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$newrole = $_POST["role"];

// prepare the SQL statement to retrieve the order ID based on the provided information
$stmt = $connect->prepare("SELECT CustomerID FROM customer WHERE FirstName = :FirstName OR LastName = :LastName");
$stmt->bindParam(':FirstName', $firstname, PDO::PARAM_STR);
$stmt->bindParam(':LastName', $lastname, PDO::PARAM_STR);

// execute the SQL statement and retrieve the customer ID
if ($stmt->execute()) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $customer_id = $result['CustomerID'];

        // prepare the SQL statement to update the customer's role
        $stmt = $connect->prepare("UPDATE customer SET roles = :roles WHERE CustomerID = :CustomerID");

        // bind parameters to the statement
        $stmt->bindParam(':roles', $newrole);
        $stmt->bindParam(':CustomerID', $customer_id);

        // execute the SQL statement to update the customer's role
        if ($stmt->execute()) {
            header("Location: ./display_cust.php");
            exit();
        } else {
            echo "Error updating customer role: " . $stmt->errorInfo()[2];
        }
    } else {
        echo "No customer found with firstname and lastname.";
    }
} else {
    echo "Error retrieving customer ID: " . $stmt->errorInfo()[2];
}