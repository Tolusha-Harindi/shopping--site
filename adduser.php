<?php
include "db/db.php";
	if(isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['uname']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['repasw'])) {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $pass = $_POST['psw']; 
        $re_pass = $_POST['repasw'];
        $email= $_POST['email'];

 if($pass !== $re_pass){
        header("Location: adduser.php?error=The confirmation password  does not match");
	    exit();
      }

	    $sql = "SELECT * FROM users WHERE username='$uname'";
		  $result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=The username is taken try another&$user_data");
      
	        exit();
    }
    else {
           $sql2 = "INSERT INTO users (fname, lname, username, email, pwd) VALUES('$fname', '$lname', '$uname', '$email', '$pass')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
                header("Location: admin.php");
                echo("useradded success");
                
	         exit();
           }else {
	           	header("Location: admin.php?error=unknown error occurred");
		        exit();
           }
		}


    } 

	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="newstyles.css" />
 <style type="text/css">
    input[type="password"]
      {
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
 </style>
	
<title>adduser</title>
</head>

<body>
	 <!--Header-->
    <header id="home" class="header">
        <!--navigation-->
        <?php include_once("adminnav.php");?>
		
		
		<center><h1>ADD USER</h1> <br />

	<div class="productcontainer">
        <div>

  		<form name="userForm" action="adduser.php" method="post">
          <div class="row">
          <div class="col-25">
          <label for="fname"><b>Firstname</b></label>
          </div>
          <div class="col-75">
            <input type="text" placeholder="Enter Firstname" name="fname" required><br><br>
        </div>
        </div>

        <div class="row">
        <div class="col-25">
            <label for="lname"><b>Lastname</b></label>
            </div>

            <div class="col-75">
            <input type="text" placeholder="Enter Lastname" name="lname" required><br><br>
            </div>
        </div>

        <div class="row">
        <div class="col-25">
            <label for="uname"><b>Username</b></label>
            </div>

            <div class="col-75">
            <input type="text" placeholder="Enter Username" name="uname" required><br><br>
            </div>
        </div>

        <div class="row">
        <div class="col-25">
            <label for="email"><b>Email</b></label>
            </div>

            <div class="col-75">
            <input type="text" placeholder="Enter Email" name="email" required><br><br>
            </div>
        </div>

        <div class="row">
        <div class="col-25">
            <label for="psw"><b>Password</b></label>
            </div>

            <div class="col-75">
            <input type="password" placeholder="Enter Password" name="psw" required><br><br>
            </div>
        </div>

        <div class="row">
        <div class="col-25">
            <label for=""><b>Re-Enter Password</b></label>
            </div>

            <div class="col-75">
            <input type="password" placeholder="Re-Enter Password" name="repasw" required><br><br>
            </div>
        </div>

        <div class="row">
        <input type="submit" value="submit" name="submit">
		</div>
        </center>
  	</form>
		
		<br />
		
		  <footer id="footer" class="section footer">
            <div class="container">
                <div class="footer-container">
                    <div class="footer-center">
                        <h3>CONTACT US</h3>
                        <div>
                            <span>
                </span> Reid Avenue , Colombo
                        </div>
                        <div>
                            <span>
                </span> company@gmail.com
                        </div>
                        <div>
                            <span>
                </span> 011 8558551
                        </div>
                        <div>
                            <span>
                </span> CMB , SRI LANKA
                        </div>
                    </div>
                    
                    <div class="footer-center">

                    </div>
                    <div class="footer-center">

                    </div>
                </div>
            </div>
            </div>
        </footer>
</body>
</html>
