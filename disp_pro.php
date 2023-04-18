<?php
// Include function
// Include connection to database
// Include header
include("./function.php");

include("./connect_db.php") ;

include("./header.php") ;
?>

	
	<!-- Add the page content container -->
	<div class="container-fluid">
		<h5 style="text-align: center; color: black; font-style: italic;">Products</h5>
		<p style="text-align: center; color: black;">This page lists off all products in stock and out of stock.</p>
	</div> <!-- Container -->
	
	<!-- Add the table container -->
	<div class="row justify-content-center">
		<div class="col-auto">
			<table class="table table-hover table-sm table-responsive" id="employees">
			
				<!-- The table header row -->
				<thead class="thead-light">
					<tr>
					  <th style="font-weight: bold;">Product ID</th>
                      <th style="font-weight: bold;">Quantity</th>
					  <th style="font-weight: bold;">Item</th>
                      <th style="font-weight: bold;">Descritption</th>
					  <th style="font-weight: bold;">Brand</th>
					  <th style="font-weight: bold;">Colour</th>
                      <th style="font-weight: bold;">Style Code</th>
                      <th style="font-weight: bold;">Masectomy</th>
					  <th style="font-weight: bold;">Band Mesurments</th>
					  <th style="font-weight: bold;">Cup Mesurments</th>
                      <th style="font-weight: bold;">Price</th>
					</tr>
				</thead>

				  <?php
				  // Step 1: prepare the statement to list all the employees
				  $stmt=$connect->prepare("select * from products") ;

				  // Step 2: execute the statement and produce an array of results									 
				  $stmt->execute(array());
				  ?>				
				
				  <!-- The employee table content -->
				  <?php
				  // Loop through the array assigning one row at a 
				  // time to the $a_row variable
				  // loop continues while rows exist!
				  while ($a_row = $stmt->fetch(PDO::FETCH_ASSOC))
					{	
						// Display the table contents here
						echo "<tr>" ;
						echo "<td>$a_row[ProductID]</td>" ;
                        echo "<td>$a_row[Quantity]</td>" ;
						echo "<td>$a_row[Item]</td>" ;
                        echo "<td>$a_row[Description]</td>" ;
						echo "<td>$a_row[Brand]</td>" ;
						echo "<td>$a_row[Colour]</td>" ;
                        echo "<td>$a_row[Style_Code]</td>" ;
                        echo "<td>$a_row[Masectomy]</td>" ;
						echo "<td>$a_row[Band_Mesurments]</td>" ;
						echo "<td>$a_row[Cup_Measurments]</td>" ;
                        echo "<td>$a_row[Price]</td>" ;
						echo "</tr>" ;
					}	// End of while loop
				  ?>
			</table>
		</div> <!-- Column -->
	</div> <!-- Row Container -->
	
  <!-- Add the form container -->
  <div class="container-fluid">
        <form action="process_pro.php" method="POST">
            <fieldset class="form-group">

                <!-- General Info -->
                <div class="form-group">
                    <label class="form-control-label" for="quantity" style="font-weight: bold;">Quantity:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="quantity" name="quantity" placeholder="Type in the user name" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="item" style="font-weight: bold;">Item:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="item" name="item" placeholder="Enter your First Name" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="descritption" style="font-weight: bold;">Descritption:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="descritption" name="descritption" placeholder="Type in the Second Name" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="brand" style="font-weight: bold;">Brand:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="brand" name="brand" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="colour" style="font-weight: bold;">Colour:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="colour" name="colour" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="style_code" style="font-weight: bold;">Style Code:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="style_code" name="style_code" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="masectomy" style="font-weight: bold;">Masectomy:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="masectomy" name="masectomy" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="band_mes" style="font-weight: bold;">Band Mesurments:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="band_mes" name="band_mes" placeholder="" required>
                </div> 
                <div class="form-group">
                    <label class="form-control-label" for="cup_mes" style="font-weight: bold;">Cup Mesurments:</label>
                    <input class="form-control" style="width: 50%;" type="text" id="cup_mes" name="cup_mes" placeholder="" required>
                </div> 
				<div class="form-group">
                    <label class="form-control-label" for="Price" style="font-weight: bold;">Price:</label>
                    <input class="form-control" style="width: 50%;" type="float" id="price" name="Price" placeholder="" required>
                </div> 
                </fieldset> <!-- Feildset-->

            <!-- The form button -->
            <div style="text-align: center;"><button class="btn btn-success" id="submit">Register item</button></div>
        </form> <!-- Form-->
    </div> <!-- Container -->

<br>
<a href="logout_admin.php" class="button">Logout</a>

<style>
.button {
  display: block;
  width: 100px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background-color: #5A5A5A;
  color: #FFFFFF;
  border-radius: 5px;
  margin: 0 auto;
}
</style>
<?php
// Include header
// Close the database connection
include("./footer.php") ;

include("./close_db.php") ; 
?>