<?php 
include "../db/db.php";

  if (isset($_POST['email']) && isset($_POST['psw']) && isset($_POST['uname']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['repasw'])) 
  {
    
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $uname = $_POST['uname'];
     $pass = $_POST['psw']; 
     $re_pass = $_POST['repasw'];
     $email= $_POST['email'];

     
     if($pass !== $re_pass){
        header("Location: register.php?error=The confirmation password  does not match");
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
                header("Location: ../index.php");
                echo("Sign-up success");
                
	         exit();
           }else {
	           	header("Location: register.php?error=unknown error occurred");
		        exit();
           }
		}


    }else{
        header("Location: register.php");
        exit();
    }


?>  