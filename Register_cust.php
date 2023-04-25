<?php
include("./header.php") ;
include("./connect_db.php");
?>    
    <!-- Add teh page content container -->
    <div class="container-fluid">
        <h6 style="text-align: center; color: black; font-style: italic;">Register page</h6>
        <p style="text-align: center; color: black;">Once you have finished filling your details bellow click the "Register" button.</p>
    </div> <!-- Container -->

    <!-- Add the form container -->
    <div class="container-fluid">
        <form action="process_register.php" method="POST">
            <fieldset class="form-group">

                <!-- General Info -->
                <div class="form-group">
                    <label class="form-control-label" for="user_name" style="font-weight: bold;">UserName:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="user_name" name="user_name" placeholder="Type in the user name" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="firstname" style="font-weight: bold;">First Name:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="firstname" name="firstname" placeholder="Enter your First Name" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="lastname" style="font-weight: bold;">Last Name:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="lastname" name="lastname" placeholder="Type in the Second Name" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="dob" style="font-weight: bold;">Date of Birth:</label>
                    <input class="form-control" style="width: 50%;" type="date" id="dob" name="dob" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="address1" style="font-weight: bold;">address 1:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="address1" name="address1" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="address2" style="font-weight: bold;">address 2:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="address2" name="address2" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="postCode" style="font-weight: bold;">Post Code:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="postCode" name="postCode" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="email_address" style="font-weight: bold;">Email Address:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="email_address" name="email_address" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="phone_number" style="font-weight: bold;">Phone Number:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="phone_number" name="phone_number" placeholder="" required>
                </div> 

                
                <!-- Password -->
                <div class="form-group">
                    <label class="form-control-label" for="enter_password" style="font-weight: bold;">Enter Password :</label>
                    <input class="form-control" style="width: 50%;" type="text" id="enter_password" name="enter_password" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="confirm_password" style="font-weight: bold;">Confirm Password:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="confirm_password" name="confirm_password" placeholder="" required>
                </div> 
                </fieldset> <!-- Feildset-->

            <!-- The form button -->
            <div style="text-align: center;"><button class="btn btn-success" id="submit">Register</button></div>
        </form> <!-- Form-->
    </div> <!-- Container -->
</html>   
<?php
include("./footer.php") ;
?>