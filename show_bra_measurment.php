<?php
session_start();
// Include header
include("./header.php") ;
?>
<div class="container-fluid">
    <form action="process_show_bra.php" method="POST">
         <!-- update customers mesurments -->
        <p style="text-align: left; color: black; font-weight: bold;">Put your details below to view your bra measurments</p>
		  <fieldset class="form-group">

        <div class="form-group">
            <label class="form-control-label" for="username" style="font-weight: bold;">User Name (Optional):</label>
            <input class="form-control" type="text" id="username" name="username">
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="firstname" style="font-weight: bold;">First Name (required):</label>
            <input class="form-control" type="text" id="firstname" name="firstname"required>
          </div>
		  <div class="form-group">
            <label class="form-control-label" for="lastname" style="font-weight: bold;">Last Name (required)</label>
            <input class="form-control" type="text" id="lastname" name="lastname" required>
            </div>
        </fieldset> <!-- Fieldset -->
    
         <div style="text-align: center;"><button class="btn btn-primary" type="submit">Show my bra measurments</button></div>
	 </form> <!-- Form -->
</div> <!-- Container -->
<?php
// Include footer
include("./footer.php") ;

?>