<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registreer</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
  <div class="header">
  	<h2>Registreer</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Gebruikersnaam</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>E-mail</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Wachtwoord</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Bevestig wachtwoord</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registreer</button>
  	</div>
  	<p>
  		Al een account? <a class="btn" href="login.php">Login</a>
		</p>
		<br>
		<p>
			Terug naar timeline <a class="btn" href="timeline.php">Timeline</a>
	</P>
  </form>
</body>
</html>