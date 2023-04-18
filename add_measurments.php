<?php
// Include header
include("./header.php") ;
session_start();
?>
  <!-- Add the page content container -->
	<div class="container-fluid">
		<h6 style="text-align: center; color: black; font-style: italic; font-size: 20px;">Add your bra measurments</h6>
		<p style="text-align: center; color: black;">Use this page to add your bra measurments in the system.
				Once you have completed all fields click the 'Add measurments' button.</p>
	</div> <!-- Container -->

	<!-- Add the form container -->
	<div class="container-fluid">
	  <form action="add_measurments_process.php" method="POST">

         <!-- Get users mesurments -->
        <p style="text-align: left; color: black;">This section you can fill in your exact bra size.</p>
		<fieldset class="form-group">
        <div class="form-group">
            <label class="form-control-label" for="bust_mes" style="font-weight: bold;">bust mesurment:</label>
            <input class="form-control" type="text" id="bust_mes" name="bust_mes" placeholder="Enter your bust mesurments" required>
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="underarm_mes" style="font-weight: bold;">Under arm mesurment:</label>
            <input class="form-control" type="text" id="underarm_mes" name="underarm_mes" placeholder="Enter your under arm mesurments" required>
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="cup_size" style="font-weight: bold;">Cup size:</label>
            <input class="form-control" type="text" style="width: 250px ;" id="cup_size" name="cup_size" placeholder="Enter your cup size" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="masectomy" style="font-weight: bold;">Do you have Masectomy?</label>
            <input class="form-control" type="text" id="masectomy" name="masectomy" placeholder="Enter Y or N" required>
          </div>
        </div>
		</fieldset> <!-- Fieldset -->

    <input type="hidden" name="CustomerID" value="<?php echo $_SESSION['CustomerID']; ?>">
  
		<!-- The form Button -->
		<div style="text-align: center;"><button class="btn btn-primary" type="submit">Add measurments</button></div>
	  </form> <!-- Form -->
	</div> <!-- Container -->

<?php
// Include footer
include("./footer.php") ;
?>