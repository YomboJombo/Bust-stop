<?php
session_start();
// connect to databse
include("./connect_db.php") ;

// Assign the transferred POST variables from the form name="" variables.
// Cusotmer info variables
$quantity = $_REQUEST["quantity"] ;
$item = $_REQUEST["item"] ;
$descritption = $_REQUEST["descritption"] ;
$brand = $_REQUEST["brand"] ;
$colour = $_REQUEST["colour"] ;
$style_code = $_REQUEST["style_code"] ;
$masectomy = $_REQUEST["masectomy"] ;
$band_mes = $_REQUEST["band_mes"] ;
$cup_mes = $_REQUEST["cup_mes"] ;
$Price = $_REQUEST["Price"] ;

	
	// PDO statement for the insert row requirement, 
	// defends against SQL injection attack by using parameterised values.
	// Step 1. - Prepare the SQL statement
	// Customer table
	$stmt = $connect->prepare("insert into products (Quantity, Item, Description, Brand, Colour, Style_Code, Masectomy, Band_Mesurments, Cup_Measurments, Price) 
								values (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j)");

	// Step 2. - Execute the SQL statement
	// for Customer 
	$stmt->execute(array(
		":a" => $quantity,
		":b" => $item,
		":c" => $descritption,
		":d" => $brand,
		":e" => $colour,
		":f" => $style_code,
        ":g" => $masectomy,
		":h" => $band_mes,
        ":i" => $cup_mes,
		":j" => $Price
	));

	// Transfer processing to the display_cust.php script
	header("Location: ./disp_pro.php") ;

// Close the database connection
include("./close_db.php") ;

?>