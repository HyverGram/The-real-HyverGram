<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css?<?php echo time()?>">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

		<title>HyverGram | Home</title>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('body').toggleClass('day')
        })
    })
</script>

	</head>
	<body>

		<header class="header">
			<div class="title">
				<h2><a class="titleLink" href="index.html">HyverGram</a></h2>
			</div>
			<div class="navigation">
				<ul class="topnav">
					<div class="toggleText">Dark/Light</div>
			<div class="toggle"></div>
					<li><a href="timeline.php">Timeline <i style='font-size:24px' class='fas'>&#xf015;</i></a></li>
					<li><a href="upload.php">Upload <i class="material-icons">&#xe2c3;</i></a></li>
					<li><a href="login.php">Login <i style="font-size:24px" class="fa">&#xf013;</i></a></li>
					<li><a href="profile.php">Profile <i class="fa fa-user"></i></a></li>
					<li class="search-container">
      <input class="search_text" type="text" placeholder="Search.." name="search">
      <button class="search_button" type="submit"><i class="fa fa-search"></i></button>
  </li>
				</ul>
			</div>
		</header>

		<div class="content">
