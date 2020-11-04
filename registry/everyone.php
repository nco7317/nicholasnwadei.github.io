<?php
session_start();
 ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width">  <!-- for mobile device layout -->
		<title>Gift Registry</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style-everyone.css">
		<link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet">
		<script src="registry-script/boom-button.js"></script>
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

  <div class="row">

    <div class="primary col">
    <!--sign in form-->
<h2>Get someone a gift!</h2>

<form method="post">
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 6";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 6";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 7";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 7";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 8";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 8";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 9";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 9";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a  target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 10";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 10";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a  target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator 11***********************************************************************************************************************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 11";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>

<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 11";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a  target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 12";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 12";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a  target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 13";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 13";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a  target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 14";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 14";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a  target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 15";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 15";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a  target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 16";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 16";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 17";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 17";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 18";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 18";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 19";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 19";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 20";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 20";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator 21********************************************************************************************************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 21";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>

<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 21";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 22";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 22";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 23";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 23";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 24";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 24";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 25";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 25";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 26";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 26";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 27";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 27";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 28";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 28";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 29";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 29";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 30";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 30";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator 31*************************************************************************************************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 31";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>

<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 31";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 32";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 32";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 33";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 33";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 34";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 34";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 35";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 35";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 36";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 36";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 37";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 37";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 38";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 38";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 39";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 39";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 40";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 40";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator 41**********************************************************************************************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 41";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>

<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 41";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 42";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 42";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 43";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 43";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 44";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 44";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 45";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 45";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 46";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 46";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 47";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 47";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 48";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 48";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 49";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
echo"<tr>";
echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
echo"</tr>";
echo"<tr>";
echo"<th>Gift Name</th>";
echo"<th>Price</th>";
echo"<th>Where to buy</th>";
echo"<th>Notes</th>";
echo"</tr>";
}
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 49";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
<?php
require 'php/connection.php';
$sql = "SELECT * FROM gifts_user WHERE user_id = 50";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
    echo"<tr>";
    echo"<th title='Year-Month-Day'>Birthday: ".$row['birthday']."</th>";
    echo"</tr>";
    echo"<tr>";
    echo"<th>Gift Name</th>";
    echo"<th>Price</th>";
    echo"<th>Where to buy</th>";
    echo"<th>Notes</th>";
    echo"</tr>";
    }
?>
<?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = 50";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
echo"<tr>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"</tr>";
}
?>
</table>
</form>
</div>

</div>
    <footer class="main-footer">
      <p><small>&copy;2020 College of Technology, University of Houston</small></p>
    </footer>

</body>
  </html>
