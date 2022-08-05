<?php
session_start();
include("db.inc.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pass1 = $_POST['pwd'];
        $pass2 = $_POST['confirm_pwd'];

        //Check if passwords match
        if($pass1 != $pass2)
        {
                echo 'Passwords do not match';
        }
        else{
                //Salting and hashing password
                $pass = password_hash($pass1, PASSWORD_DEFAULT);
        }

        if($pass1 == $pass2)
        {
                //Save to database
                $query = "INSERT INTO customer(first_name, last_name, email, username, passwd) VALUES('$first', '$last', '$email', '$username', '$pass')";

                mysqli_query($conn, $query);

                header("Location:../webpages/login.php");
                die();
        }
}
                
               
