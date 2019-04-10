
<!-- <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Hyvergram | Home</title>
	</head>
	<body>

		<header class="header">
			<div class="title">
				<h2><a class="titleLink" href="index.html">Hyvergram</a></h2>
			</div>
			<div class="navigation">
				<ul class="topnav">
					<li><a href="index.html">Timeline</a></li>
					<li><a href="upload.php">Upload</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a class="active" href="profile.html">Profile</a></li>
				</ul>
			</div>
		</header>

		<div class="content"> -->
		<?php
		include "dbVars.php";

		  // Create database connection
		  try {

				$conn = new PDO("mysql:host=$myHost;dbname=$myDB", $uid, $pwd);

		        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		        $result = $conn->query('SELECT * FROM `images`');

		  } catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		  }

		  // Initialize message variable
		  $msg = "";
		?>
			<?php include 'header.php';?>

			<section class="contentInfo">
						<?php
					    foreach ($result as $image) {
					      echo "<div class='img2'>";
					      	echo "<img class='postprofile' src='images/".$image['image']."' >";
					      	// echo "<p class='comment' >".$image['image_text']."</p>";
					      echo "</div>";
					    }
					  ?>
					</div>
			</section>
			<!-- <section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>
			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>

			<br>

			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>
			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>
			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>

			<br>

			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>
			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>
			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>

			<br>

			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>
			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section>
			<section class="contentInfo">
				<img class="img2" src="images/HGlogo.png" alt="Uploaded image">
			</section> -->

<?php include 'footer.php';?>
		<!-- </div>

	</body>
	<script src="script.js"></script>
</html> -->
