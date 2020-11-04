<?php
session_start();
require 'php/connection.php';
 ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width">  <!-- for mobile device layout -->
		<title>Gift Registry</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet">
		<script src="script/jscript.js"></script>
	</head>

	<body>
		<header id="top" class="main-header">
				<h1 class = "name">Gift Registry</h1>
			<ul class ="navbar">
						<li><a href="welcome.php">Welcome</a></li>
						<li><a href="my_gifts.php">My Gifts</a></li>
						<li><a href="everyone.php">All Lists</a></li>
						<li><a href="php/logout.php" name="logout-submit">Logout</a></li>
				</ul>
			<!--nav menu separation-->
		</header>
		<div class="banner">
	 <img class="gift_img" src="img/gift.png" alt="Gift">
</div>

		<div class="row">
		<div class="welcome col">
			<?php echo"<h2>Welcome ".$_SESSION['first_name']."</h2>" ?>
				<p>Welcome to Gift Registry!</p>
        <p> This site was created to allow family and friends to know exactly what gifts to get each other for special occassions.
          This way we can always have a good idea of what to get each other without the hassle of fishing for the perfect gift!</p>
          <p> You can start by clicking on the "My Gifts" where you can create your own list of gifts that your family and friends will be able to view when they try to buy you a present!</p>
          <p> Then you can click on the "All Lists" button where you can view everyone's list of gifts so you can get them the perfect gift!</p>

		</div>

		<div class="primary col">
			<h2>My Gifts</h2>
			<a href="my_gifts.php"><button class="glow" type="button">My Gifts</button></a>
		</div>

		<div class="secondary col">
			<h2>My Groups</h2>
			<a href="everyone.php"><button class="glow" type="button">All List's</button></a>
		</div>
		</div>



		<footer class="main-footer">
			<p><small>&copy;2020 College of Technology, University of Houston</small></p>
		</footer>


	</body>
  </html>
