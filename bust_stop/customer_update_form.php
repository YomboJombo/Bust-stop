<?php

?>
  <!-- Add the page content container -->
	<div class="container-fluid">
		<h6 style="text-align: center; color: black; font-style: italic; font-size: 20px;">Customer update page</h6>
		<p style="text-align: center; color: black;">Use this page to update your customer details on the system.
				Once you have completed all fields then you should click the 'Update Customer' button.</p>
	</div> <!-- Container -->

	<!-- Add the form container -->
	<div class="container-fluid">
	  <form action="process_customer_update_form.php" method="POST">

        <!-- General user info -->
        <p style="text-align: left; color: black;">General information information</p>
		<fieldset class="form-group">
        <div class="form-group">
            <label class="form-control-label" for="User_Name" style="font-weight: bold;">User Name:</label>
            <input class="form-control" type="text" id="User_Name" name="User_Name" value="<?php echo $a_row['user_name'] ; ?>" required>
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="first_name" style="font-weight: bold;">First Name:</label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="<?php echo $a_row['FirstName'] ; ?>" required>
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="address_1" style="font-weight: bold;">Address 1:</label>
            <input class="form-control" type="text" style="width: 250px ;" id="address_1" name="address_1" value="<?php echo $a_row['Address1'] ; ?>" required>
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="address_2" style="font-weight: bold;">Address 2:</label>
            <input class="form-control" type="text" id="address_2" name="address_2" value="<?php echo $a_row['Address2'] ; ?>" required>
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="post_code" style="font-weight: bold;">Post Code:</label>
            <input class="form-control" type="text" style="width: 250px ;" id="post_code" name="post_code" value="<?php echo $a_row['PostCode'] ; ?>" required>
          </div>

         <!-- Get users mesurments -->
          <p style="text-align: left; color: black;">This section you can fill in your exact bra size.</p>
          <div class="form-group">
            <label class="form-control-label" for="band_mes" style="font-weight: bold;">Your band mesurment?</label>
            <input class="form-control" type="text" id="band_mes" name="band_mes" value="<?php echo $a_row['Band Measurment'] ; ?>" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="cup_mes" style="font-weight: bold;">Cup mesurment?</label>
            <input class="form-control" type="text" id="cup_mes" name="cup_mes" value="<?php echo $a_row['Cup_Measurment'] ; ?>" required>
          </div>
          <p style="text-align: left; color: black;">Type either "Y" or "N"</p>
          <div class="form-group">
            <label class="form-control-label" for="masectomy" style="font-weight: bold;">Are you condition with masectomy?</label>
            <input class="form-control" type="text" id="masectomy" name="masectomy" value="<?php echo $a_row['Masectomy'] ; ?>" required>
          </div>

		  <!-- Get the users password -->
		  <div class="form-group">
			<label class="form-control-label" for="enter_password" style="font-weight: bold;">Password:</label>
			<input class="form-control" type="password" name="enter_password" id="enter_password" placeholder="Enter a password" required>
		  </div>
		  <div class="form-group">
			<label class="form-control-label" for="confirm_password" style="font-weight: bold;">Confirm password:</label>
			<input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm the password" required>
		  </div>
		</fieldset> <!-- Fieldset -->

  
		<!-- The form Button -->
		<div style="text-align: center;"><button class="btn btn-primary" type="submit">Update Customer Details</button></div>
	  </form> <!-- Form -->
	</div> <!-- Container -->