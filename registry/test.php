
<!DOCTYPE html>
<html>
  <head>
    <title>Title</title>
  </head>

  <body>
    <table class="table-style">
    <?php
    require 'php/connection.php';
    $sql = "SELECT * FROM gifts_user WHERE user_id = 1";
    $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
      echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
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
$sql = "SELECT * FROM user_lists WHERE user_id = 1";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    echo"<tr>";
    echo"<td>".$row['g_name']."</td>";
    echo"<td>".$row['g_price']."</td>";
    echo"<td><a href=".$row['g_store'].">Go to Site</a></td>";
    echo"<td>".$row['g_notes']."</td>";
    echo"</tr>";
    }
    ?>
    </table>
<!-- ******************User Seperator****************************-->
<table class="table-style">
    <?php
    require 'php/connection.php';
    $sql = "SELECT * FROM gifts_user WHERE user_id = 2";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
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
$sql = "SELECT * FROM user_lists WHERE user_id = 2";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    echo"<tr>";
    echo"<td>".$row['g_name']."</td>";
    echo"<td>".$row['g_price']."</td>";
    echo"<td><a href=".$row['g_store'].">Go to Site</a></td>";
    echo"<td>".$row['g_notes']."</td>";
    echo"</tr>";
    }
    ?>
    </table>
    <!-- ******************User Seperator****************************-->
    <table class="table-style">
        <?php
        require 'php/connection.php';
        $sql = "SELECT * FROM gifts_user WHERE user_id = 3";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
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
    $sql = "SELECT * FROM user_lists WHERE user_id = 3";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        echo"<tr>";
        echo"<td>".$row['g_name']."</td>";
        echo"<td>".$row['g_price']."</td>";
        echo"<td><a href=".$row['g_store'].">Go to Site</a></td>";
        echo"<td>".$row['g_notes']."</td>";
        echo"</tr>";
        }
        ?>
        </table>
        <!-- ******************User Seperator****************************-->
        <table class="table-style">
            <?php
            require 'php/connection.php';
            $sql = "SELECT * FROM gifts_user WHERE user_id = 4";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                echo"<h2>".$row['first_name']." ".$row['last_name']."'s List</h2>";
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
        $sql = "SELECT * FROM user_lists WHERE user_id = 4";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            echo"<tr>";
            echo"<td>".$row['g_name']."</td>";
            echo"<td>".$row['g_price']."</td>";
            echo"<td><a href=".$row['g_store'].">Go to Site</a></td>";
            echo"<td>".$row['g_notes']."</td>";
            echo"</tr>";
            }
            ?>
            </table>
  </body>
</html>
