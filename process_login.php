<?php
// connect to connect_db.php
include("./connect_db.php");

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ./login_cust.php");
    exit;
}

// Assign the transferred POST variables.
$user_name = $_POST["user_name"] ;
$enter_password = $_POST["enter_password"] ;
$confirm_password = $_POST["confirm_password"] ;

// Create adn encrypt a copy of the password 
// In this exercise we are going to use sha1 encryption in its simplest form
$crypted_pass = sha1($enter_password);

// Check that the passowrd entered match.
if ($enter_password == $confirm_password)
{

    // PDO statement for the insert row requirement, 
    // defends against SQL injection attack by using parameterised values.
    // Step 1. - Prepare the SQL statement
    $stmt = $connect->prepare("select * from customer where 
                        user_name = :a 
                        and Password = :b") ;

    // Step 2. Execute the SQL statement
    $stmt->execute(array(
        ":a" => $user_name,
        ":b" => $crypted_pass
    ));

    // Only one row should be returned from this query
    $a_row = $stmt->fetch(PDO::FETCH_ASSOC) ;
   
    //check if a match has been found
    if (($a_row["user_name"] && $a_row["Password"]) != null )
    {
        // Store om session varaibles
        $_SESSION["loggedin"] = true;
        $_SESSION["CustomerID"] = $a_row['CustomerID'];
        $_SESSION["user_name"] = 'user_name';
        
        // Include teh form at this point 
        include("./customer_update_form.php");

    }
    else
    {
           //Display a message to the employee confirming details are correct 
           include("./header.php");
           ?>
           <!-- Add the page content -->
           <div class="container-fluid">
               <h6 style="text-align: left; color: blue; font-style:
               italic">The Cusotmer Login</h6>
               <p style="text-align: left; color: black;">The password you entered was incorrect.</p>
           </div> <!-- Container -->
   
           <?php
           include("./footer.php");
    }
}
else
{
    // Output message to the employee that the passowrd does not match 
    include("./header.php");
        ?>
        <!-- Add the page content -->
        <div class="container-fluid">
            <h6 style="text-align: left; color: blue; font-style:
            italic">The Customer Login</h6>
            <p style="text-align: left; color: black;">Oops - the 
            password you entered does not match, please try again
    
                                                                back button to retrun 
                                                                to the form and enter  
                                                                the password again.</p>
        </div> <!-- Container -->
        <?php
        include("./footer.php");

}
?>