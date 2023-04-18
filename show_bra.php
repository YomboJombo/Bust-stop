<?php
session_start();
// Include connection to database
// Include header
$customerID = $_POST['customerID'];
include("./connect_db.php") ;
include("./header.php") ;

?>
<div class="row justify-content-center">
	<div class="col-auto">
		<h5 style="text-align: center; color: black; font-style: italic;">and this is all Customer measurments</h5>
		<p style="text-align: center; color: black;">All current customer's measurments.</p>
			<table action="delete_measurment.php" method="POST" class="table table-hover table-sm table-responsive" id="Measurments">
			
				<!-- The table header row -->
				<thead>
					<tr>
						<th style="font-weight: bold;">Bust Measurments</th>
						<th style="font-weight: bold;">Masectomy</th>
						<th style="font-weight: bold;">Cup Size</th>
						<th style="font-weight: bold;">Under arm measurments</th>
					</tr>
				</thead>

				  <?php
				  $stmt = $connect->prepare("select * from measurment where CustomerID = ? ");
				  $stmt->bindParam(1, $customerID, PDO::PARAM_INT);


					// Execute the SQL statement and retrieve the results
					$stmt->execute();
					$a_row = $stmt->fetch(PDO::FETCH_ASSOC);

		
				  ?>				
				
				  <!-- The employee table content -->
				  <?php
				  // Loop through the array assigning one row at a 
				  // time to the $a_row variable
				  // loop continues while rows exist!
					// Check if a customer was found with the provided ID
					if (!empty($a_row)) {
						// Display the table contents here ?>
						<tr>
							<td><?php echo$a_row["Bust_Measurments"];?></td>
							<td><?php echo$a_row["Masectomy"];?></td>
							<td><?php echo$a_row["Cup_size"];?></td>
							<td><?php echo$a_row["underarm_measurments"];?></td>
						 </tr>
					<?php } else {

						// No customer found with the provided ID
    					echo "<p>No customer found with ID " . $customerID . "</p>";
					}	// End of while loop
				  ?>
			</table>
		</div> <!-- Column container -->
	</div> <!-- Row container -->
</div> <!-- Row container -->
    <?php
session_destroy();
// Close the database connection
include("./close_db.php");
include("./footer.php") ;
?>