<?php
include "../db/db.php";

if (isset($_POST['uname']) && isset($_POST['psw'])) {
 
    
	$uname = $_POST['uname'];
	$pass = $_POST['psw'];

		if (empty($uname)) {
			header("Location: login.php?error=User Name is required");
	    exit();
		}else if(empty($pass)){
        		header("Location: login.php?error=Password is required");
	    		exit();
			}else{
				$sql = "SELECT * FROM users WHERE username='$uname' AND pwd = '$pass'";

				$result = mysqli_query($con, $sql);

			if (mysqli_num_rows($result) === 1) {

				$row = mysqli_fetch_assoc($result);

            	if ($row['username'] === $uname && $row['pwd'] === $pass) {

				$_SESSION['username'] = $row['username'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['role'] = $row['role'];
				$id = $row['role'];
						if($id == 1)
						{
							header("Location: ../admin.php");
							exit();	
						}
						else{
						header("Location: ../index.php?id=".$_SESSION['id']."");
						exit();
						}
           		}else{
                	header("Location: login.php?");
               		echo("Incorrect Password");
		        	exit();
					}
			}else{
           		 header("Location: login.php?");
           		 echo("Incorrect Username or passowrd");
	       		 exit();
				}
	}
	
}else{
	header("Location: login.php");
	exit();
}
?>