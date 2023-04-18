<?php
// Include header
include("./header.php") ;
?>	
	<!-- Add the page content container -->
	<div class="container-fluid">
		<p class="mt-5" style="text-align: center; color: black; font-size: 20px; font-weight: bold;">Here is the post update page <br> After filling your info click the "post" buttun below</p>
		
	</div> <!-- Container -->
	<form action="process_post_admin.php" method="POST" >

 		<label for="post_title">Title:</label>
  		<input type="text" id="post_title" name="post_title" required><br>

		<label for="post_content">Content:</label>
		<textarea id="post_content" name="post_content" required></textarea><br>

		<label for="post_image">Image:</label>
		<input type="file" id="post_image" name="post_image" accept="post_image/*"><br>

		<div class="form-group">
		<label for="postdate">Date of post</label>
		<input type="date" id="postdate" name="postdate" required>
	</div>
	<input type="submit" value="Submit"> 
	</form>
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