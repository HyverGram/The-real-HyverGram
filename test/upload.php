<?php
include "dbVars.php";
// $myHost = "127.0.0.1";
// $myDB = "c3664upload";
// $uid = "c3664giovanni";
// $pwd = "Vp5p_VthWZ";
if (isset($_FILES['image'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  // Get text
  $image_text = $_POST['image_text'];
  // image file directory
  $target = "images/" . basename($image);
  try {
        //$conn = new PDO("mysql:host=localhost;dbname=image_upload", 'okdoei', 'okdoei');
         // $conn = new PDO("mysql:host=127.0.0.1;dbname=c3664upload", 'c3664giovanni', 'Vp5p_VthWZ');


        $conn = new PDO("mysql:host=$myHost;dbname=$myDB", $uid, $pwd);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $IMGK = basename($image);
        $TXTK = $image_text;
        $stmt = $conn->prepare('INSERT INTO `images`(`image`, `image_text`) VALUES (:img, :txt)');
        $stmt->bindParam(':img', $IMGK);
        $stmt->bindParam(':txt', $TXTK);
        $stmt->execute();
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    // echo "Image uploaded successfully";
		header('Location: index.php');
		exit;
  }else{
    echo "Failed to upload image";
  }
}
  $msg = '';
  // If upload button is clicked ...
?>
<?php include 'header.php';?>

			<form method="POST" action="upload.php" enctype="multipart/form-data">
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
					<button id="post_button" type="submit" name="upload">POST</button>
				</div>
			</form>
			<!-- <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" class="upload1"></p>
		    <p class="uploadP"><label for="file" class="upload2">Upload Image</label></p>
		    <p><img id="output" width="835" /></p> -->
		<?php include 'footer.php';?>
