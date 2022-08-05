<?php

session_start();

include("db.inc.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $uid = $_POST['username'];
    $password = $_POST['pwd'];

    if(!empty($uid) && !empty($password))
    {
        $query = "SELECT * FROM customer where username = '$uid' limit 1";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if(password_verify($password, $user_data['passwd']))
                {
                    $_SESSION['username'] = $user_data['username'];
                    header("Location:../index.php");
                    
                }
            }
        }
        echo "wrong username or password";
    }else
    {
        echo "wrong username or password";
    }
}


