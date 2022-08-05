<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Salon</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <header>

        <div class="main-nav">
            <a class="active" href="#">Login</a>
            <a href="signup.php">Register</a>

        </div>

        <div class="login">
            <form style="width:50vw; margin-left:30vw;" action="../includes/login.inc.php" method="POST">
                <label for="Uid">username</label>
                <input type="text" id="Uid" name="username" placeholder="username" required>

                <label for="password">password</label>
                <input type="password" id="password" name="pwd" placeholder="password" required>

                <input type="submit" name= "login"value="login">
            </form>
        </div>


    </header>

</body>

</html>