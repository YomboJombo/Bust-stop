<?php include("./header.php"); ?>
    
    <!-- Add teh page content container -->
    <div class="container-fluid">
        <h6 style="text-align: center; color: black; font-style: italic;">Customer log in</h6>
        <p style="text-align: center; color: black;">Welcome to the log in page, plaese enter your details below to log into your account.</p>
    </div> <!-- Container -->

    <!-- Add the form container -->
    <div class="container-fluid">
        <form action="process_login.php" method="POST">
            <fieldset class="form-group">

                <div class="form-group">
                    <label class="form-control-label" for="user_name" style="font-weight: bold;">User Name or email:</label>
                    <input class="form-control" style="width: 50%;" type="text" type="email" id="user_name" name="user_name" placeholder="Enter user name or email" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="enter_password" style="font-weight: bold;">Password:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="enter_password" name="enter_password" placeholder="Enter password" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="confirm_password" style="font-weight: bold;">Confirm password:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="confirm_password" name="confirm_password" placeholder="Re-enter password" required>
                </div> 
            </fieldset> <!-- Feildset-->

            <!-- The form button -->
            <div style="text-align: center;">
                 <button class="btn btn-primary" type="submit">Login Now</button></div>
            <div>
        </form> <!-- Form-->
    </div> <!-- Container -->
    <?php
   include("./footer.php")
   ?>