<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">

    <script>
        function validateform() {
            var name = document.myform.uname.value;
            var password = document.myform.psw.value;

            if (name == null || name == "") {
                alert("Name can't be blank Enter the name");
                return false;
            } else if (password.length < 3) {
                alert("Password must be consist of at least 3 characters.");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="fade-in">
        <img src="banner2.png" class="image" alt="" />

        <div class="logo">
            <a href="../index.php">ENVY</a>
        </div>
        <form action="check-login.php" method="post" name="myform" onsubmit="return validateform()">
            <div class="container">
                <h1>LOGIN</h1>
                <div class="form-style">
                    <label for="uname"><b>USERNAME</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>PASSWORD</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                </div>
            </div>
        </form>
</body>
</div>

</html>