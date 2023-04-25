<?php 
session_start();
include("./header.php");
 // connect to connect_db.php
 include("./connect_db.php");
?> 

    <!-- Add teh page content container -->
    <div class="container-fluid">
        <h6 style="text-align: center; color: black; font-style: italic;">Update the customers order</h6>
        <p style="text-align: center; color: black;">Fill in the form below</p>
    </div> <!-- Container -->

  </tbody>
</table>

    <!-- Add the form container -->
    <div class="container-fluid">
        <form action="process_update_orders.php" method="POST">
            <fieldset class="form-group">

                <div class="form-group">
                    <label class="form-control-label" for="firstname" style="font-weight: bold;">Enter the order ID:</label>
                    <p><input type="number" name="OrderID" value="" required></p>
           
                    <label class="form-control-label" for="firstname" style="font-weight: bold;">Enter the date of delivery:</label>
                    <p><input type="date" name="Date_Delivered"  value="" required></p>
                  
                    <label class="form-control-label" for="firstname" style="font-weight: bold;">Enter the date of collection:</label>
                    <p><input type="date" name="Date_Collected"  value="" required></p>
                 
                    <label class="form-control-label" for="firstname" style="font-weight: bold;">Enter whats deposit is left:</label>
                    <p><input type="decimal" name="Deposit_Left"  value="" required></p>
                   
                    <label class="form-control-label" for="firstname" style="font-weight: bold;">Enter yes or no if the customer has been contacted:</label>
                    <p><input type="text" name="Contacted"  value="" required></p>
                  
                    <label class="form-control-label" for="firstname" style="font-weight: bold;">Enter yes or no if you hevant made teh courtesy call:</label>
                    <p><input type="text" name="Courtesy_Call" value="" required></p>
               
                </div> 
              </fieldset> <!-- Feildset-->
            <!-- The form button -->
            <div style="text-align: center;">
                 <button class="btn btn-primary" type="submit">Submit</button>
            <div>
        </form> <!-- Form-->
        <?php
	?>
    </div> <!-- Container -->
    <?php
    session_destroy();
   include("./footer.php")
   ?>  