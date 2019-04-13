<?php
include "dbVars.php";

  // Create database connection
  try {

        $conn = new PDO("mysql:host=".$myHost.";dbname=".$myDB, $uid, $pwd);
        // $conn = new PDO("mysql:host=localhost;dbname=image_upload", 'okdoei', 'okdoei');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = $conn->query('SELECT * FROM `images`');

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  // Initialize message variable
  $msg = "";
?>

<?php include 'header.php';?>

  <?php
    foreach ($result as $image) {
      echo "<div class='imgpreview'>";
      	echo "<img src='images/".$image['image']."' >";
      	echo "<p>".$image['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="index.php" enctype="multipart/form-data">
    <p class="disclaimer">Pictures must be under 2mb to upload.</p>
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea
      	id="text"
      	cols="40"
      	rows="4"
      	name="image_text"
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
  <?php include 'footer.php';?>
<!-- </div>
</body>
</html> -->
