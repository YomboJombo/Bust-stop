<?php 
session_start();
include("./header.php");
 // connect to connect_db.php
 include("./connect_db.php");
    ?> 

    <!-- Add teh page content container -->
    <div class="container-fluid">
        <h6 style="text-align: center; color: black; font-style: italic;">Basket</h6>
        <p style="text-align: center; color: black;">Your items.</p>
    </div> <!-- Container -->

 <?php

    // Initialize the basket array
    $_SESSION['basket'] = array();

    // Initialize the total price to 0
    $totalPrice = 0;

// Check if an item has been added to the basket
if (isset($_POST['item'])) {
    // Add the item to the basket
    $item = $_POST['item'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $brand = $_POST['brand'];
    $productid = $_POST['productid'];

    // Check if the item already exists in the basket
    if (isset($_SESSION['basket'][$item])) {
        // Increment the quantity of the existing item
        $_SESSION['basket'][$item]['quantity'] += $quantity;

    } else {
        // Add the new item to the basket
        $_SESSION['basket'][$item] = array(
            'name' => $item,
            'price' => $price,
            'quantity' => $quantity,
            'brand' => $brand,
            'totalPrice' => $totalPrice,
            'productid' => $productid
        );
    }
}

else {

} 
?>

<!-- HTML code to display the basket -->
<table>
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Brand</th>
      <th>ProductID</th>
    </tr>
  </thead>
  <tbody>
    <?php
      // Check if the basket array exists in the session
      if (isset($_SESSION['basket'])) {
        // Loop through the basket array and display the product information
        foreach ($_SESSION['basket'] as $product => $productInfo) {
          echo "<tr>";
          echo "<td>" . $productInfo['name'] . "</td>";
          echo "<td>" . $productInfo['price'] . "</td>";
          echo "<td>" . $productInfo['quantity'] . "</td>";
          echo "<td>" . $productInfo['brand'] . "</td>";
          echo "<td>" . $productInfo['productid'] . "</td>";
          echo "</tr>";
          // Add up the price of the item to the total price
          $totalPrice += $productInfo['price'] * $productInfo['quantity'];
        }
          // Display the total price
          echo "<tr><td colspan='5'>Total price: $" . number_format($totalPrice, 2) . "</td></tr>";
          $total = number_format($totalPrice, 2);
      } else {
        echo "<tr><td colspan='3'>Basket is empty.</td></tr>";
      }
    ?>	
  </tbody>
</table>

    <!-- Add the form container -->
    <div class="container-fluid">
        <form action="process_checkout.php" method="POST">
            <fieldset class="form-group">

                <div class="form-group">
                    <label class="form-control-label" for="firstname" style="font-weight: bold;">Enter First Name:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="firstname" name="firstname" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="lastname" style="font-weight: bold;">Enter Last Name:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="lastname" name="lastname" required>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="payment_method" style="font-weight: bold;">Payment Method:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="payment_method" name="payment_method" required>
                </div>
                    <label class="form-control-label" for="postcode" style="font-weight: bold;">Post Code:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="postcode" name="postcode" required>
                <div class="form-group">
                    <h2><input type="hidden" name="item" id="item" value="<?php echo $item;?>"></h2>
                    <h2><input type="hidden" name="price" id="item" value="<?php echo $price;?>"></h2>
                    <h2><input type="hidden" name="quantity" id="item" value="<?php echo $quantity;?>"></h2>
                    <h2><input type="hidden" name="brand" id="item" value="<?php echo $brand;?>"></h2>
                    <h2><input type="hidden" name="productID" id="productID" value="<?php echo $productid;?>"></h2>
                    <h2><input type="hidden" name="total_price" id="total_price" value="<?php echo $total;?>"></h2>
                      </div> 
              </fieldset> <!-- Feildset-->
            <!-- The form button -->
            <div style="text-align: center;">
                 <button class="btn btn-primary" type="submit">Checkout</button>
            <div>
        </form> <!-- Form-->
        <?php
	?>
    </div> <!-- Container -->
    <?php
    session_destroy();
   include("./footer.php")
   ?>  