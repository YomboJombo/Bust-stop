<?php
// Include header
// Start session
session_start();
include("./header.php") ;
?>

	
	<!-- Add the page content container -->
	<div class="container-fluid">
		<p class="mt-5" style="text-align: center; color: black; font-size: 20px;">Use the links here to see either <a class="nav-item nav_link" href="./disp_pro.php">products</a> in stock or out, <br> 
		<a class="nav-item nav_link" href="./display_cust.php">customers </a> and their bra measurments.
		<br> and or <a class="nav-item nav_link" href="./admin_post.php">post an update </a>on your business and stocks.
		</p>
		
	</div> <!-- Container -->
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
include("./footer.php") ;
?>