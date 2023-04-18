<?php
session_start();
include("./connect_db.php");
include("./header.php") ;

//get the user input from a form or other source
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

//prepare the SQL statement to retrieve the user ID based on the provided information
$stmt = $connect->prepare("SELECT CustomerID FROM customer WHERE user_name = ? AND FirstName = ? OR LastName = ?");
$stmt->bindParam(1, $username, PDO::PARAM_STR);
$stmt->bindParam(2, $firstname, PDO::PARAM_STR);
$stmt->bindParam(3, $lastname, PDO::PARAM_STR);

//execute the SQL statement and retrieve the customer ID
$stmt->execute();
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
if (!empty($result)) {
    $CustomerID = $result[0]['CustomerID'];

} else {
    //no user found with the provided information
    $CustomerID = null;
}
//store the customer ID in a session variable
$_SESSION['customerID'] = $CustomerID;
?>  

<!-- Add the form container -->
<div class="container-fluid">
    <form action="show_bra.php" method="POST">
        <fieldset class="form-group">
        <p style="font-weight: bold;">Is this correct?</p>
                <h2><input type="hidden" name="customerID" id="customerID" value="<?php echo $_SESSION['customerID'];?>"></h2>
                  </div> 
              </fieldset> <!-- Feildset-->
        <!-- The form button -->
        <div style="text-align: center;">
             <button class="btn btn-primary" type="submit">Yes</button> <a href="show_bra_measurment.php" <?php session_destroy();?> class="button">No</a>
        <div>
    </form> <!-- Form-->
</div>
<?php

// Close the database connection
include("./close_db.php");
include("./footer.php") ;
?>
