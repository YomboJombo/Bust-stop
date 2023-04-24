<?php
session_start();
include("./connect_db.php");
//get the user input from a form or other source
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$postcode = $_POST['postcode'];
$payment_method = $_POST['payment_method'];

//prepare the SQL statement to retrieve the user ID based on the provided information
$stmt = $connect->prepare("SELECT CustomerID FROM customer WHERE firstname = ? AND lastname = ? OR postcode = ?");
$stmt->bindParam(1, $firstname, PDO::PARAM_STR);
$stmt->bindParam(2, $lastname, PDO::PARAM_STR);
$stmt->bindParam(3, $postcode, PDO::PARAM_STR);

// execute the SQL statement and retrieve the customer ID
if ($stmt->execute()) {
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        $customer_id = $result['CustomerID'];

    // Initialize the basket array
    $_SESSION['checkout'] = array();

// Check if an item has been added to the basket
if (isset($_POST['item'])) {
    // Add the item to the basket
    $item = $_POST['item'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $brand = $_POST['brand'];
    $totalPrice = $_POST['total_price'];
    $productID = $_POST['productID'];

    // Check if the item already exists in the basket
    if (isset($_SESSION['checkout'][$item])) {
        // Increment the quantity of the existing item
        $_SESSION['checkout'][$item]['quantity'] += $quantity;
    } else {
        // Add the new item to the basket
        $_SESSION['checkout'][$item] = array(
            'name' => $item,
            'price' => $price,
            'quantity' => $quantity,
            'brand' => $brand,
            'totalPrice' => $totalPrice,
            'productID' => $productID,
        );
    }
}
// Check if the basket session array exists
if(isset($_SESSION['checkout'])) {
    // Access the basket session array
    $checkout = $_SESSION['checkout'];
    
    // Start a transaction
    $connect->beginTransaction();
//loop through the basket array and insert each item into the database
foreach ($_SESSION['checkout'] as $product => $productInfo) {
    $name = $productInfo['name'];
    $price = $productInfo['price'];
    $quantity = $productInfo['quantity'];
    $brand = $productInfo['brand'];
    $totalPrice = $productInfo['totalPrice'];
    $productID = $productInfo['productID'];
        
        // Insert the basket item into the database including the CustomerID
        $stmt = $connect->prepare("INSERT INTO orders (Item, Price, Date_Ordered, Quantity, Payment_Method, Brand, Total_Price, CustomerID, ProductID) VALUES (:item, :price, NOW(), :Quantity, :Payment, :brand, :Total_Price, :CustomerID, :ProductID)");
        $stmt->execute(array(
            ":item" => $name,
            ":price" => $price,
            ":Quantity" => $quantity,
            ":Payment" => $payment_method,
            ":brand" => $brand,
            ":Total_Price" => $totalPrice,
            ":CustomerID" => $customer_id,
            ":ProductID" => $productID
        ));

    }
    // Redirect to thank you page
    include("./header.php");
    echo 'Thank you for purchasing from Bust Stop!';
    include("./footer.php");

    // Commit the transaction
    $connect->commit();

} else {
    include("./header.php");
    echo 'Your basket is empty.';
    include("./footer.php");
}
} else {
    echo "No customer found with firstname and lastname.";
}
} else {
echo "Error retrieving customer ID: " . $stmt->errorInfo()[2];
}
// Destroy the session
session_destroy();


// Close the database connection
include("./close_db.php");
?>
