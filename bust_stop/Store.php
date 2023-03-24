<?php
include("./header.php") ;
include("./connect_db.php");
?>  

	<!-- Add the page content container -->
	<div class="container-fluid">
		<h5 style="text-align: center; color: black; font-style: italic;">Products</h5>
		<p style="text-align: center; color: black; size: 15">Welcome to the Store page. This is where you find all of Bust Stops products</p>
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
                      <th style="font-weight: bold;">Descritption</th>
					  <th style="font-weight: bold;">Colour</th>
                      <th style="font-weight: bold;">Style Code</th>
                      <th style="font-weight: bold;">Masectomy</th>
					  <th style="font-weight: bold;">Band Mesurments</th>
					  <th style="font-weight: bold;">Brand</th>
					  <th style="font-weight: bold;">Item</th>
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
                        echo "<td>$a_row[Description]</td>" ;
                        echo "<td>$a_row[Colour]</td>" ;
                        echo "<td>$a_row[Style_Code]</td>" ;
                        echo "<td>$a_row[Masectomy]</td>" ;
						echo "<td>$a_row[Band_Mesurments]</td>" ;
						echo "<td>$a_row[Brand]</td>" ;
						echo "<td>$a_row[Item]</td>" ;
						echo "<td>$a_row[Cup_Measurments]</td>" ;
                        echo "<td>$a_row[Price]</td>" ;
						echo "</tr>" ;
					}	// End of while loop
				  ?>
			</table>
		</div> <!-- Column -->
	</div> <!-- Row Container -->
	

<?php
// Include header
// Close the database connection
include("./footer.php") ;

include("./close_db.php") ; 
?>