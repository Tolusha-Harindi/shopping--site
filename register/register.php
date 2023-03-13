<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="fade-in">
        <img src="banner3.png" class="image" alt="" />
    
    <div class="logo">
        <a href="../index.php">ENVY</a>
    </div>
    <form action="check.php" method="post">
        <div class="container">
            <h1>SIGN UP</h1>
            <label for="fname"><b>Firstname</b></label>
            <input type="text" placeholder="Enter Firstname" name="fname" required>

            <label for="lname"><b>Lastname</b></label>
            <input type="text" placeholder="Enter Lastname" name="lname" required>

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for=""><b>Re-Enter Password</b></label>
            <input type="password" placeholder="Re-Enter Password" name="repasw" required>

            <button type="submit">Register</button>
</div>
    </form>
</body>


</html>