<?php
// Include header
include("./header.php");
?>
<!DOCTYPE html>
<html>
	<body>
		
		<!-- Add the page content container -->
		<div class="container-fluid">
			<h1 class="mt-5" style="text-align: center; color: black; font-size: 20px; font-weight: bold;">This is the Location page.</h1>
            <p class="mt-5" style="text-align: center; color: black; font-size: 20px;">use it to find my store and contacts.</p>
            <p class="mt-5" style="text-align: center; color: black; font-size: 20px;">Address: 33 b Bank st, Dumfries, United Kingdome, DG <br><br>
            Service area: Lockerbie · Dumfries and Galloway · Kirkcudbright · <br>  Dumfries · Dalbeattie · New Abbey · Moffat · Lochmaben <br><br>
            Mobile: 07368 990591 <br><br> Email: jjdykes@hotmail.com</p>
		</div>

        <p class="mt-5" style="text-align: center; color: black; font-size: 20px;">Location where my store is</p>
    
    <iframe
        id="map"
        width="800" 
        height="600"
        style="border:0;"
        allowfullscreen=""
        frameborder="0"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9138.269948352134!2d-3.6111294!3d55.0683121!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4862cb8da878a8d3%3A0xdbf9a0106e7231d!2sThe%20Bust%20Stop%2033%20b%20Bank%20st!5e0!3m2!1sen!2suk!4v1681640745746!5m2!1sen!2suk"   
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    
<style>
    #map {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

</style>
	</body>
</html>
<?php
// Include footer
include("./footer.php");
?>