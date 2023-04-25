<?php
// connect to connect_db.php
include("./connect_db.php");

session_start();

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

    if ($stmt->rowCount() > 0) {

        // Fetch the row as an associative array
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the user has admin privileges
        if ($row['roles'] === 'admin') {

         // User is an admin, set session variable to indicate authentication
         $_SESSION['admin'] = true;

         // Redirect to admin page
         header("Location: admin.php");

         exit;
       } else {
            // User is not an admin, show error message
            include("./header.php"); 
            echo "You do not have permission to access this page.";
            include("./footer.php");
            exit;
       }
    } else {
        // User is not authenticated, show error message
        echo "Invalid username or password.";
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
            italic">The Admin Login</h6>
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
