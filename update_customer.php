<?php 
include("./header.php");
 // connect to connect_db.php
 include("./connect_db.php");
    ?> 

    <!-- Add teh page content container -->
    <div class="container-fluid">
        <h6 style="text-align: center; color: black; font-style: italic;">Basket</h6>
        <p style="text-align: center; color: black;">Your items.</p>
    </div> <!-- Container -->

</tbody>
</table>

    <!-- Add the form container -->
    <div class="container-fluid">
        <p>Who do you want to recieve this role?</p>
        <form action="process_update_customer.php" method="POST">
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
                    <label class="form-control-label" for="role" style="font-weight: bold;">Enter a role for the customer:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="role" name="role" required>
                </div>
              </fieldset> <!-- Feildset-->
            <!-- The form button -->
            <div style="text-align: center;">
                 <button class="btn btn-primary" type="submit">submit</button>
            <div>
        </form> <!-- Form-->
        <?php
	?>
    </div> <!-- Container -->
    <?php
   include("./footer.php")
   ?>  
	

