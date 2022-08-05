<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Salon</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
    <header>
        <div class="main-nav">
           <a class="active" href="#">Signup</a>
           <a href="login.php">Login</a>
        </div>
        <div class="register">
            <form style="width: 50vw; margin-left: 30vw;" action="../includes/signup.inc.php" method="POST">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="email@example.com" required>

                <label for="Uid">username</label>
                <input type="text" id="uid" name="username" placeholder="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="pwd" placeholder="Password" required>

                <label for="repeat password">Confirm password</label>
                <input type="password" id="confirm_password" name="confirm_pwd" placeholder="confirm password" required>


                <input type="submit" name="submit" value="Signup">
                <div class="registered-user">Already a member? <a href="login.php">login now</a></div>
            </form>
        </div>
    </header>
</body>
</html>