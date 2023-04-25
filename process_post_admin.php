<?php
// Connect to the database
include("./connect_db.php");

// Get the form data
$title = $_POST['post_title'];
$content = $_POST['post_content'];
$date = $_POST['postdate'];


// Insert the post into the database
$stmt = $connect->prepare("INSERT INTO post (post_title, post_content, postdate) VALUES (:a, :b, :c) ");
	// Step 2. - Execute the SQL statement
	$stmt->execute(array(
		":a" => $title,
		":b" => $content,
		":c" => $date
    ));



// Check if the insertion was successful
if ($stmt->rowCount() > 0) {
    echo "Announcement submitted successfully!";

} else {
    echo "Error submitting announcement. Please try again later.";
}
 header("Location: ./Display_post.php") ;
include("./close_db.php") ;
?>
