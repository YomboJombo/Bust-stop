<?php
include("./header.php") ;
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
        <p style="text-align: left; color: black; font-weight: bold;">update your general information.</p>
		<fieldset class="form-group">
        <div class="form-group">
            <label class="form-control-label" for="User_Name" style="font-weight: bold;">User Name:</label>
            <input class="form-control" type="text" id="User_Name" name="User_Name" value="<?php echo $a_row['user_name'] ; ?>">
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="first_name" style="font-weight: bold;">First Name:</label>
            <input class="form-control" type="text" id="first_name" name="first_name" value="<?php echo $a_row['FirstName'] ; ?>" >
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="address_1" style="font-weight: bold;">Address 1:</label>
            <input class="form-control" type="text" style="width: 250px ;" id="address_1" name="address_1" value="<?php echo $a_row['Address1'] ; ?>" >
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="address_2" style="font-weight: bold;">Address 2:</label>
            <input class="form-control" type="text" id="address_2" name="address_2" value="<?php echo $a_row['Address2'] ; ?>" >
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="post_code" style="font-weight: bold;">Post Code:</label>
            <input class="form-control" type="text" style="width: 250px ;" id="post_code" name="post_code" value="<?php echo $a_row['PostCode'] ; ?>" >
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="pass" name="pass" placeholder="Update your password">
          </div>
          <input type="hidden" name="CustomerID" value="<?php echo htmlspecialchars($_SESSION['CustomerID']); ?>">
        </fieldset> <!-- Fieldset -->
    
         <div style="text-align: center;"><button class="btn btn-primary" type="submit">Update general information</button></div>
	      </form> <!-- Form -->
	    </div> <!-- Container -->
<br>
<br>
<br>
<br>
        
   <div class="container-fluid">
          <form action="process_update_measurment.php" method="POST">
           <!-- update customers mesurments -->
        <p style="text-align: left; color: black;">This section you can update your bra size.</p>
        <p style="text-align: left; color: black; font-weight: bold;">Use this section to update your measurments on the system.</p>
		  <fieldset class="form-group">

        <div class="form-group">
            <label class="form-control-label" for="bust_mes_update" style="font-weight: bold;">bust mesurment:</label>
            <input class="form-control" type="text" id="bust_mes_update" name="bust_mes_update">
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="underarm_mes_update" style="font-weight: bold;">Under arm mesurment:</label>
            <input class="form-control" type="text" id="underarm_mes_update" name="underarm_mes_update"  >
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="cup_size_update" style="font-weight: bold;">Cup size:</label>
            <input class="form-control" type="text" id="cup_size_update" name="cup_size_update"  >
          </div>
          <div class="form-group">
            <label class="form-control-label" for="masectomy_update" style="font-weight: bold;">Do you have Masectomy?</label>
            <input class="form-control" type="text" id="masectomy_update" name="masectomy_update"  >
            <input type="hidden" name="CustomerID" value="<?php echo htmlspecialchars($_SESSION['CustomerID']); ?>">
          </div>
        </fieldset> <!-- Fieldset -->
    
         <div style="text-align: center;"><button class="btn btn-primary" type="submit">Update your measurments</button></div>
	      </form> <!-- Form -->
	    </div> <!-- Container -->

      <br>

           <!-- update customers mesurments -->
           <p style="text-align: left; color: black;">Add your measurments</p>
        <p style="text-align: left; color: black; font-weight: bold;">Click the box to add your measurments</p>
      <div class="form-wrapper">
          <button class="arrow-button"></button>
          <form class="hidden-form" action="process_add_measurment.php" method="POST">

		  <fieldset class="form-group">

        <div class="form-group">
            <label class="form-control-label" for="bust_mes" style="font-weight: bold;">bust mesurment:</label>
            <input class="form-control" type="text" id="bust_mes" name="bust_mes"  >
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="underarm_mes" style="font-weight: bold;">Under arm mesurment:</label>
            <input class="form-control" type="text" id="underarm_mes" name="underarm"  >
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="cup_size" style="font-weight: bold;">Cup size:</label>
            <input class="form-control" type="text" id="cup_size" name="cup_size"  >
          </div>
          <div class="form-group">
            <label class="form-control-label" for="masectomy" style="font-weight: bold;">Do you have Masectomy?</label>
            <input class="form-control" type="text" id="masectomy" name="masectomy"  >
            <input type="hidden" name="CustomerID" value="<?php echo htmlspecialchars($_SESSION['CustomerID']); ?>">
          </div>
        </div>
        </fieldset> <!-- Fieldset -->
    
         <div style="text-align: center;"><button class="btn btn-primary" type="submit">add your measurments</button></div>
	      </form> <!-- Form -->
	    </div> <!-- Container -->

  <style>
  .hidden-form {
    display: none;
  }
  
  .arrow-button {
    width: 20px;
    height: 20px;
    background-image: url('path/to/arrow-icon.png');
    background-repeat: no-repeat;
    background-position: center;
  }
  
  /* rotate arrow icon when form is revealed */
  .open .arrow-button {
    transform: rotate(180deg);
  }
  </style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var formWrapper = document.querySelector('.form-wrapper');
    var arrowButton = formWrapper.querySelector('.arrow-button');
    var hiddenForm = formWrapper.querySelector('.hidden-form');
    
    arrowButton.addEventListener('click', function() {
      formWrapper.classList.toggle('open');
      hiddenForm.style.display = (hiddenForm.style.display === 'none') ? 'block' : 'none';
    });
  });
</script>
		  <!-- Get the users password -->

		</fieldset> <!-- Fieldset -->
    <a href="logout.php">Logout</a>
		<!-- The form Button -->

    <div class="container-fluid">
          <form action="update_password.php" method="POST">
           <!-- update customers mesurments -->
        <p style="text-align: left; color: black;">Use this form to update your password</p>
		  <fieldset class="form-group">


        </fieldset> <!-- Fieldset -->
    
         <div style="text-align: center;"><button class="btn btn-primary" type="submit">Update your password</button></div>
	      </form> <!-- Form -->
	    </div> <!-- Container -->


  <?php

  include("./footer.php") ;
  ?>