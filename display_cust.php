<?php
// Include function
// Include connection to database
// Include header
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
		<fieldset class="form-group">
			<table class="table table-hover table-sm table-responsive" id="Customers">

				<thead>
					<tr>
					<th style="font-weight: bold;">role</th>
					<th style="font-weight: bold;">CustomerID</th>
                      <th style="font-weight: bold;">User Name</th>
					  <th style="font-weight: bold;">First Name</th>
                      <th style="font-weight: bold;">Last name</th>
                      <th style="font-weight: bold;">Date of Birth</th>
					  <th style="font-weight: bold;">Address1</th>
					  <th style="font-weight: bold;">Address2</th>
					  <th style="font-weight: bold;">Postcode</th>
					  <th style="font-weight: bold;">Email Address</th>
                      <th style="font-weight: bold;">Phone Number</th>
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
				while ($a_row = $stmt->fetch(PDO::FETCH_ASSOC)){

				// Display the table contents here?>
			<thead class="thead-silver">
				<form action="update_customer.php" method="POST">
					<tr>
						<td><?php echo $a_row["roles"];?></td>
						<td><input type="" name="ID" value="<?php echo $a_row['CustomerID']; ?>"></td>
						<td><input type="" name="user_name" value="<?php echo $a_row['user_name']; ?>"></td> 
						<td><input type="" name="FirstName" value="<?php echo $a_row['FirstName']; ?>"></td> 
						<td><input type="" name="LastName" value="<?php echo $a_row['LastName']; ?>"></td> 
						<td><input type="" name="dob" value="<?php echo $a_row['dob']; ?>"></td> 
						<td><input type="" name="Address1" value="<?php echo $a_row['Address1']; ?>"></td> 
						<td><input type="" name="Address2" value="<?php echo $a_row['Address2']; ?>"></td> 
						<td><input type="" name="PostCode" value="<?php echo $a_row['PostCode']; ?>"></td> 
						<td><input type="" name="EmialAddress" value="<?php echo $a_row['EmailAddress']; ?>"></td> 
						<td><input type="" name="PhoneNumber" value="<?php echo $a_row['PhoneNumber']; ?>"></td> 

					  	<?php }	// End of while loop
				  		?>
				  	</tr>
					  <button type="submit">Update Role</button>
				</form>
			</thead>
		</table>
	</fieldset>
</div> <!-- Container -->
<br>
<br>
<br>	
</div> <!-- Row Container -->
	<div class="row justify-content-center">
		<div class="col-auto">
			<h5 style="text-align: center; color: black; font-style: italic;">Customer orders</h5>
			<p style="text-align: center; color: black;">All Customers orders.</p>
			<table class="table table-hover table-sm table-responsive" id="Customers">
				<form action="update_order.php" method="POST">
					<fieldset class="form-group">
						<tr>
							<th style="font-weight: bold;">OrderID</th>
							<th style="font-weight: bold;">Customer ID</th>
							<th style="font-weight: bold;">User Name</th>
							<th style="font-weight: bold;">First Name</th>
							<th style="font-weight: bold;">Last name</th>
							<th style="font-weight: bold;">Date Ordered</th>
							<th style="font-weight: bold;">Date Delivered</th>
							<th style="font-weight: bold;">Date Collected</th>
							<th style="font-weight: bold;">Deposit Left</th>
							<th style="font-weight: bold;">Payment Method</th>
							<th style="font-weight: bold;">Brand</th>
							<th style="font-weight: bold;">Contacted</th>
							<th style="font-weight: bold;">Courtesy Call</th>
							<th style="font-weight: bold;">Total Price</th>
						</tr>

							<?php
							// Step 1: prepare the statement to list all the employees
							$stmt=$connect->prepare("select customer.CustomerID, customer.user_name, customer.FirstName, customer.LastName, orders.Date_Ordered,
							orders.Date_Delivered, orders.Date_Collected, orders.Deposit_Left, orders.Quantity, orders.CustomerID, orders.OrderID, orders.Contacted, orders.Courtesy_Call,
							orders.Brand, orders.Payment_Method, orders.Total_Price
							from orders
							inner join customer on orders.CustomerID=customer.CustomerID;") ;

							// Step 2: execute the statement and produce an array of results									 
							$stmt->execute(array());
							
							// Loop through the array assigning one row at a 
							// time to the $a_row variable
							// loop continues while rows exist!
							$a_row = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

        					// Now you have an array of a_row  with their details, which you can display as needed
							foreach ($a_row as $a_row) {?>

								<tr>
									<td name="OrderID"><?php echo $a_row["OrderID"];?></td>
									<td name="CustomerID"><?php echo $a_row["CustomerID"];?></td>
									<td><input type="" name="user_name" value="<?php echo $a_row['user_name']; ?>"></td> 
									<td><input type="" name="FirstName" value="<?php echo $a_row['FirstName']; ?>"></td> 
									<td><input type="" name="LastName" value="<?php echo $a_row['LastName']; ?>"></td> 
									<td><input type="" name="Date_Ordered" value="<?php echo $a_row['Date_Ordered']; ?>"></td> 
									<td><input type="" name="Date_Delivered" value="<?php echo $a_row['Date_Delivered']; ?>"></td> 
									<td><input type="" name="Date_Collected" value="<?php echo $a_row['Date_Collected']; ?>"></td> 
									<td><input type="" name="Deposit_Left" value="<?php echo $a_row['Deposit_Left']; ?>"></td> 
									<td><input type="" name="Payment_Method" value="<?php echo $a_row['Payment_Method']; ?>"></td> 
									<td><input type="" name="Brand" value="<?php echo $a_row['Brand']; ?>"></td> 
									<td><input type="" name="Contacted" value="<?php echo $a_row['Contacted']; ?>"></td> 
									<td><input type="" name="Courtesy_Call" value="<?php echo $a_row['Courtesy_Call']; ?>"></td> 
									<td><input type="" name="" value="<?php echo $a_row['Total_Price']; ?>"></td> 
									<?php }	// End of while loop
									?>
									
								</tr>

					</fieldset>
					<div style="text-align: center;">
						<button class="btn btn-primary" type="submit">Update orders</button>
					<div>
				</form>
			</table>
		</div> <!-- Column -->
	</div> <!-- Justify center -->
</div> <!-- Row Container -->
	<br>
	<br>
	<br>
<!-- Add 2nd table container -->
</div> <!-- Row Container -->
	<div class="row justify-content-center">
		<div class="col-auto">
			<h5 style="text-align: center; color: black; font-style: italic;">and this is all Customer measurments</h5>
			<p style="text-align: center; color: black;">All current customer's measurments.</p>
			<table action="delete_measurment.php" method="POST" class="table table-hover table-sm table-responsive" id="Measurments">
					<!-- The table header row -->
				<thead>
					<tr>
						<th style="font-weight: bold;">Customer ID</th>
						<th style="font-weight: bold;">User Name</th>
						<th style="font-weight: bold;">First Name</th>
						<th style="font-weight: bold;">Last name</th>
						<th style="font-weight: bold;">Bust Measurments</th>
						<th style="font-weight: bold;">Masectomy</th>
						<th style="font-weight: bold;">Cup Size</th>
						<th style="font-weight: bold;">Under arm measurments</th>
					</tr>
				</thead>

				<?php
				// Step 1: prepare the statement to list all the employees
				$stmt=$connect->prepare("select customer.CustomerID, customer.user_name, customer.FirstName, customer.LastName, measurment.Bust_Measurments, measurment.Masectomy, measurment.Cup_size, measurment.underarm_measurments
											from measurment
											inner join customer on measurment.CustomerID=customer.CustomerID;") ;

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
						// Display the table contents here ?>
						<tr>
							<td><?php echo $a_row["CustomerID"];?></td>
							<td><?php echo $a_row["user_name"];?></td>
							<td><?php echo$a_row["FirstName"];?></td>
							<td><?php echo$a_row["LastName"];?></td>
							<td><?php echo$a_row["Bust_Measurments"];?></td>
							<td><?php echo$a_row["Masectomy"];?></td>
							<td><?php echo$a_row["Cup_size"];?></td>
							<td><?php echo$a_row["underarm_measurments"];?></td>
						</tr>
					<?php }	// End of while loop
				?>
			</table>
		</div> <!-- Column container -->
	</div> <!-- Justify center -->
</div> <!-- Row container -->

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
// Include footer
// Close the database connection
include("./footer.php") ;

include("./close_db.php") ; 
?>