<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width">  <!-- for mobile device layout -->
		<title>Gift Registry</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style-form.css">
		<link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet">
		<script src="script/jscript.js"></script>
	</head>
<body>
    <header id="top" class="main-header">
				<h1 class = "name">Gift Registry</h1>
    </header>
    <div class="row">
      <div class="primary col">
      <!--sign in form-->
      <form action="php/signin.php" method="post">
          <h2>Sign In</h2>
					<?php
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "emptyfields") {
							echo '<p class="signuperror">Please fill in all fields</p>';
						} else if ($_GET['error'] == "wrongpwd") {
							echo '<p class="signuperror">Password is incorrect</p>';
						} else if ($_GET['error'] == "sqlerror") {
							echo '<p class="signuperror">Username is incorrect</p>';
						}
				}
					?>
          <fieldset class="form-items">

            <label for="mail">Username: </label>
            <input type="text" id="username" name="username" placeholder="Username" required>

            <label for="password"> Password: </label>
            <input type="password" id="password" name="password" placeholder="Password" required>

						<p>Forgot your password?<br> Email: <a href="mailto:nicholasnwadei@gmail.com?subject=Gift%20registry%20password%20help!">nicholasnwadei@gmail.com</a> for assistance</p>

          </fieldset>
          <button type="submit" class="glow" name="signin-submit">Sign in</button>
      </form>
      </div>

      <div class="secondary col">
      <!--sign up form-->
      <form action="php/signup.php" method="post">
          <h2>Sign up</h2>
					<?php
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "emptyfields") {
							echo '<p class="signuperror">Please fill in all fields</p>';
						} else if ($_GET['error'] == "invalidemail") {
							echo '<p class="signuperror">Please fill in a valid email</p>';
						} else if ($_GET['error'] == "usertaken") {
							echo '<p class="signuperror">This user has already been taken</p>';
						}
				}

				if (isset($_GET['signup'])) {
					 if ($_GET['signup'] == "success")  {
					echo '<p class="signupsuccess">Welcome to Gift Registry! Please sign in.</p>';
				}
			}
					?>
          <fieldset class="form-items">

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" placeholder="First Name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>

            <label for="text">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Password" required>

            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required>

          </fieldset>
            <button type="submit" class="glow" name="signup-submit">Sign up</button>
      </form>
      </div>

</div>

<footer class="main-footer">
  <p><small>&copy;2020 College of Technology, University of Houston</small></p>
</footer>


</body>
</html>
