<?php
session_start();
 ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width">  <!-- for mobile device layout -->
		<title>Gift Registry</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style-mygifts.css">
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
  <h2>Insert a gift you want here!</h2>
    <form action="php/mylist.php" method="post" enctype="multipart/form-data">

        <fieldset class="form-items">
          <input type="hidden" name="size" value="1000000">
          <label title="What is the name of the gift?" class="fieldname" for="g_name">Name: </label>
          <input type="text" id="g_name" name="g_name"  required>

          <label title="Round to the nearest dollar." class="fieldname" for="g_price">Price: </label>
          <input type="number" id="g_price" name="g_price"  required>

          <label title="Paste a link where someone can find this gift." class="fieldname" for="g_store">Link: </label>
          <input type="url" id="g_store" name="g_store" required>

          <label title="Write anything important! Ex: This is what I want the most!" class="fieldname" for="g_notes">Notes: </label>
          <textarea type="text" id="g_notes" name="g_notes" ></textarea>
          <button type="submit" class="glow" name="create-list-submit">Create</button>
        </fieldset>


    </form>
    </div>

    <div class="secondary col">
    <!--sign in form-->

    <?php echo"<h2>".$_SESSION['first_name']." ".$_SESSION['last_name']."'s List</h2>" ?>
<form method="post" class="form-items" action='php/delete.php'>
<table class="table-style">
  <tr>
  <th>Gift Name</th>
  <th>Price</th>
  <th>Where to buy</th>
  <th>Notes</th>
  <th>Select</th>
  <th>Delete</th>
</tr>
  <?php
require 'php/connection.php';
$sql = "SELECT * FROM user_lists WHERE user_id = '".$_SESSION['user_id']."'";
$result = mysqli_query($conn, $sql);
 while ($row = mysqli_fetch_assoc($result)) {
echo"<tr class='ttr'>";
echo"<td>".$row['g_name']."</td>";
echo"<td>$".$row['g_price']."</td>";
echo"<td><a target='_blank' href=".$row['g_store'].">Go to Site</a></td>";
echo"<td>".$row['g_notes']."</td>";
echo"<td><input type='checkbox' name='keyToDelete' value='".$row['gift_id']."' required</td>";
echo"<td><button type='submit' class='glow' name='delete-button'>Delete</button></td>";
echo"</tr>";

if (isset($_GET['error'])) {
  if ($_GET['error'] == "deleteerror") {
    echo '<p class="signuperror">Please click the SELECT checkbox on the row you would like to delete</p>';

}
}

if (isset($_GET['delete'])) {
 if ($_GET['delete'] == "success")  {
echo '<p class="signupsuccess">Successfuly deleted gift!</p>';
}
}
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
