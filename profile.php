<?php
include "./db/db.php";
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $usersId = $_GET['id'];
    $sql = "SELECT id, fname, lname, username, email, pwd FROM users WHERE id='$usersId';";
    $get_usersId = mysqli_query($con, $sql);

    if(mysqli_num_rows($get_usersId) == 1){
      $row = mysqli_fetch_assoc($get_usersId);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="fade-in">
        
        <div class="logo">
            <a href="./index.php">CODEVO</a>
        </div>

        <div class="container">
        <div class="userimage">
            <img src="images/images.png" height="150" width="150">
        </div>
        <?php

        if(isset($_SESSION["id"])){
            echo "<h2>Hello ". $_SESSION["username"] ."! </h2>";

          }

         ?>

        <form action="logout.php" method="post">
            <div class="container">
            <button type="logout">Logout</button>
            </div>
        </form>
            <form action="updateuser.php" method="post">
                <input type="hidden" placeholder="Enter uid" name="uid" value="<?php echo $row['id'];?>">
                <input type="hidden" placeholder="Enter username" name="uname" value="<?php echo $row['username'];?>" readonly>
                <input type="text" placeholder="Enter Firstname" name="fname" value="<?php echo $row['fname'];?>">
                <input type="text" placeholder="Enter Lastname" name="lname" value="<?php echo $row['lname'];?>">
                <input type="text" placeholder="Enter Email" name="email" value="<?php echo $row['email'];?>">
                <input type="password" placeholder="password" name="psw" value="<?php echo $row['pwd'];?>">
                <input type="password" placeholder="Re-Enter password" name="repsw">
                <button type="edit" name="edit">Update</button>
        </form>
        <form>
        <button><a href="deleteuser.php?id=<?php echo $row['id'];?>">Delete</a></button>
        </form>
    </div>


</body>

</html>