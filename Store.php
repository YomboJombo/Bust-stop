<?php
session_start();
include("./header.php") ;
include("./connect_db.php");
?>  
<!DOCTYPE html>
<html>
<head>
	<!-- Add the page content container -->
	<div class="container-fluid">
		<h5 style="text-align: center; color: black; font-style: italic;">Products</h5>
		<p style="text-align: center; color: black; size: 15">Welcome to the Store page. This is where you find all of Bust Stops products</p>
	</div> <!-- Container -->
	<style>
    table {
    margin: 0 auto;
    }
  </style>
	<!-- Add the table container -->
	<div class="row justify-content-center">
		<div class="col-auto">
			<table class="table table-hover table-sm table-responsive">
			
				<?php

				  // Step 1: prepare the statement to list all the employees
				  $stmt=$connect->prepare("select Item, Description, Price, Quantity, Brand, ProductID from products where ProductID = 1") ;

				  // Step 2: execute the statement and produce an array of results									 
				  $stmt->execute(array());
				  ?>				
				
				  <!-- The employee table content -->
				  <?php
				  // Loop through the array assigning one row at a 
				  // time to the $a_row variable
				  // loop continues while rows exist!
				  while ($a_row = $stmt->fetch(PDO::FETCH_ASSOC))
					{	?>
					<div class="product">
					<form action="basket.php" method="post">
						<img src="img/Gossard animal print.jpg">
						<h1><input type="hidden" name="brand" id="brand" value="<?php echo $a_row['Brand']; ?>"><?php echo $a_row["Brand"];?></h1>
						<h2><input type="hidden" name="item" id="item" value="<?php echo $a_row['Item']; ?>"><?php echo $a_row["Item"];?></h2>
						<p><input type="hidden" name="Description" value="<?php $a_row['Description']; ?>"><?php echo $a_row["Description"];?></p>
						<p><input type="hidden" name="price" id="price" value="<?php echo $a_row['Price']; ?>">£<?php echo $a_row["Price"];?></p>
						<p><input type="number" name="quantity" id="quantity" value="<?php $a_row['Quantity']; ?>"><?php echo $a_row["Quantity"];?></p>
						<p><input type="hidden" name="productid" id="productid" value="<?php echo $a_row['ProductID']; ?>"><?php echo $a_row["ProductID"];?></p>


					<!-- Add the page content container -->

						<button class="btn btn-primary" type="submit">Add to basket</button>
					</form>
					</div> <!-- Container -->
			</table>
		</div>
	</div>

	
			<?php	}	// End of while loop ?>
			<div class="row justify-content-center">
		<div class="col-auto">
			<table class="table table-hover table-sm table-responsive">
			
				<?php

				  // Step 1: prepare the statement to list all the employees
				  $stmt=$connect->prepare("select Item, Description, Price, Quantity, Brand, ProductID from products where ProductID = 2") ;

				  // Step 2: execute the statement and produce an array of results									 
				  $stmt->execute(array());
				  ?>				
				
				  <!-- The employee table content -->
				  <?php
				  // Loop through the array assigning one row at a 
				  // time to the $a_row variable
				  // loop continues while rows exist!
				  while ($a_row = $stmt->fetch(PDO::FETCH_ASSOC))
					{	?>
					<div class="product">
					<form action="basket.php" method="post">
						<img src="Soft cup Berlei bra.jpg">
						<h1><input type="hidden" name="brand" id="brand" value="<?php echo $a_row['Brand']; ?>"><?php echo $a_row["Brand"];?></h1>
						<h2><input type="hidden" name="item" id="item" value="<?php echo $a_row['Item']; ?>"><?php echo $a_row["Item"];?></h2>
						<p><input type="hidden" name="Description" value="<?php $a_row['Description']; ?>"><?php echo $a_row["Description"];?></p>
						<p><input type="hidden" name="price" id="price" value="<?php echo $a_row['Price']; ?>">£<?php echo $a_row["Price"];?></p>
						<p><input type="number" name="quantity" id="quantity" value="<?php $a_row['Quantity']; ?>"><?php echo $a_row["Quantity"];?></p>
						<p><input type="hidden" name="productid" id="productid" value="<?php echo $a_row['ProductID']; ?>"><?php echo $a_row["ProductID"];?></p>


					<!-- Add the page content container -->

						<button class="btn btn-primary" type="submit">Add to basket</button>
					</form>
					</div> <!-- Container -->
			</table>
		</div>
	</div>

	
			<?php	}	// End of while loop ?>

	<style>


	.btn {
		text-align: center;
		}

	.product {
		display: inline-block;
		border: 1px solid #ccc;
		padding: 10px;
		margin: 80px;
		width: 300px;
		height: 1120px;
		text-align: center;
		}

	.product img {
		max-width: 100%;
		height: auto;
		margin-bottom: 10px;
	}

	.product h2 {
		font-size: 1.2em;
		margin-bottom: 5px;
	}

	.product p {
		font-size: 1em;
		margin-bottom: 10px;
	}

	.product .price {
		font-size: 1.2em;
		font-weight: bold;
		color: #f00;
	}

</style>	
</html>
</head>
<?php
// Include header
// Close the database connection
include("./footer.php") ;

include("./close_db.php") ; 
?>



