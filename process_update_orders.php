<?php
session_start();
include("./connect_db.php");
?>
<?php
    $Date_Delivered = $_POST['Date_Delivered'];
    $Date_Collected = $_POST['Date_Collected'];
    $Deposit_Left = $_POST['Deposit_Left'];
    $Contacted = $_POST['Contacted'];
    $Courtesy_Call = $_POST['Courtesy_Call'];
    $OrderID = $_POST['OrderID'];

    // prepare the SQL statement to update the order information
    $stmt = $connect->prepare("UPDATE orders 
                                SET Date_Delivered = :a, Date_Collected = :b, Deposit_Left = :c, Contacted = :d, Courtesy_Call = :e 
                                WHERE OrderID = :f");
    // execute the SQL statement
    $stmt->execute(array(
        ":a" => $Date_Delivered, 
        ":b" => $Date_Collected, 
        ":c" => $Deposit_Left,
        ":d" => $Contacted, 
        ":e" => $Courtesy_Call,   
        ":f" => $OrderID
    ));
$stmt->execute();

header("Location: ./display_cust.php");
exit();
// Close the database connection
include("./close_db.php") ;
session_destroy();
?>