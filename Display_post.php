
<?php
include("./header.php") ;
// Connect to the database
include("./connect_db.php");
?>
<br>
<div class="container-fluid">
  <h1 style="text-align: center; color: black; font-style: italic;">Post and Updates</h1>
  <p style="text-align: center; color: black;">Authors posts</p>
</div> <!-- Container -->

<!-- Add 2nd table container -->
<div class="row justify-content-center">
  <div class="col-auto">
      <table class="table table-hover table-sm table-responsive">
          <?php
          // Retrieve the posts from the database
          $stmt=$connect->prepare("select * from post order by postID desc");

				  // Step 2: execute the statement and produce an array of results									 
				  $stmt->execute(array());
          ?>
          <?php
          while ($a_row = $stmt->fetch(PDO::FETCH_ASSOC))
          { ?>
        <div class="post">
          <h2><?php echo $a_row["post_title"];?></h2>
          <p><?php echo $a_row["post_content"];?></p>
          <small><?php echo $a_row["postdate"];?></small>
        </div> <!-- Container -->
          <?php }
        ?>
      </table>
	</div> <!-- Column container -->
</div> <!-- Row container -->

<style>
.post {
	display: block;
	border: 3px solid #ccc;
	padding: 10px;
	margin: 30px;
	width: 500px;
	text-align: center;
	}
  .post h2 {
	font-size: 2.0em;
	margin-bottom: 10px;
	}

	.post p {
	font-size: 1.2em;
	margin-bottom: 10px;
	}
  .post small {
	font-size: 1.1em;
	margin-bottom: 10px;
	}
  </style>
<?php
  include("./footer.php") ;
  include("./close_db.php") ;

?>