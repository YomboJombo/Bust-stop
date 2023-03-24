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
		<h5 style="text-align: center; color: black; font-style: italic;">The current Customers</h5>
		<p style="text-align: center; color: black;">All current customers that are resgistered.</p>
	</div> <!-- Container -->
	
	<!-- Add the table container -->
	<div class="row justify-content-center">
		<div class="col-auto">
			<table class="table table-hover table-sm table-responsive" id="Customers">
			
				<!-- The table header row -->
				<thead class="thead-light">
					<tr>
					  <th style="font-weight: bold;">Customer ID</th>
                      <th style="font-weight: bold;">User Name</th>
					  <th style="font-weight: bold;">First Name</th>
                      <th style="font-weight: bold;">Last name</th>
                      <th style="font-weight: bold;">Date of Birth</th>
					  <th style="font-weight: bold;">Address1</th>
					  <th style="font-weight: bold;">Address2</th>
					  <th style="font-weight: bold;">Postcode</th>
					  <th style="font-weight: bold;">Email Address</th>
                      <th style="font-weight: bold;">Phone Number</th>
                      <th style="font-weight: bold;">VIP</th>
                      <th style="font-weight: bold;">Password</th>
					</tr>
				</thead>

				  <?php
				  // Step 1: prepare the statement to list all the employees
				  $stmt=$connect->prepare("select * from customer") ;

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
						echo "<td>$a_row[CustomerID]</td>" ;
                        echo "<td>$a_row[user_name]</td>" ;
                        echo "<td>$a_row[FirstName]</td>" ;
                        echo "<td>$a_row[LastName]</td>" ;
                        echo "<td>$a_row[dob]</td>" ;
						echo "<td>$a_row[Address1]</td>" ;
						echo "<td>$a_row[Address2]</td>" ;
						echo "<td>$a_row[PostCode]</td>" ;
						echo "<td>$a_row[EmailAddress]</td>" ;
                        echo "<td>$a_row[PhoneNumber]</td>" ;
                        echo "<td>$a_row[VIP]</td>" ;
                        echo "<td>$a_row[Password]</td>" ;
						echo "</tr>" ;
					}	// End of while loop
				  ?>
			</table>
		</div> <!-- Column -->
	</div> <!-- Row Container -->
	
	<!-- Add 2nd table container -->
	<div class="row justify-content-center">
		<div class="col-auto">
			<table class="table table-hover table-sm table-responsive" id="Mesurments">
			
				<!-- The table header row -->
				<thead class="thead-light">
					<tr>
					  <th style="font-weight: bold;">MesurmentID</th>
                      <th style="font-weight: bold;">Band Mesurments</th>
					  <th style="font-weight: bold;">Masectomy</th>
                      <th style="font-weight: bold;">Cup Mesurments</th>
                      <th style="font-weight: bold;">The csutomer ID</th>
					</tr>
				</thead>

				  <?php
				  // Step 1: prepare the statement to list all the employees
				  $stmt=$connect->prepare("select * from mesurment") ;

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
						echo "<td>$a_row[MesurmentID]</td>" ;
                        echo "<td>$a_row[Band_Mesurments]</td>" ;
                        echo "<td>$a_row[Masectomy]</td>" ;
                        echo "<td>$a_row[Cup_mesurments]</td>" ;
                        echo "<td>$a_row[CustomerID]</td>" ;
						echo "</tr>" ;
					}	// End of while loop
				  ?>

<?php
// Include footer
// Close the database connection
include("./footer.php") ;

include("./close_db.php") ; 
?>