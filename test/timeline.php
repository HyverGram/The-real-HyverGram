<?php
include "dbVars.php";
  // Create database connection
  try {

        $conn = new PDO("mysql:host=127.0.0.1;dbname=c3664upload", 'c3664giovanni', 'Vp5p_VthWZ');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $conn->query('SELECT * FROM `images`');

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  // Initialize message variable
  $msg = "";
?>

		<?php include 'header.php';?>
			<div class="contentInfo">

				<?php
			    foreach ($result as $image) {
			      echo "<div class='img1'>";
			      	echo "<img class='post' src='images/".$image['image']."' >";
			      	echo "<p class='comment' >".$image['image_text']."</p>";
			      echo "</div>";
			    }
			  ?>
			</div>
			<!-- <div class="contentInfo">
				<img class="img1" src="images/HGlogo.png" alt="Uploaded image">
				<h3>Title</h3>
				<p>Description here... (image is a placeholder)</p>
			</div>
			<div class="contentInfo">
				<img class="img1" src="images/HGlogo.png" alt="Uploaded image">
				<h3>Title</h3>
				<p>Description here... (image is a placeholder)</p>
			</div>
			<div class="contentInfo">
				<img class="img1" src="images/HGlogo.png" alt="Uploaded image">
				<h3>Title</h3>
				<p>Description here... (image is a placeholder)</p>
			</div> -->
			<?php include 'footer.php';?>
		<!-- </div>

	</body>
	<script src="script.js"></script>
</html> -->
