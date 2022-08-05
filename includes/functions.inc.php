<?php

function check_login($conn)
{
    if($_SESSION['username'])
    {
        $id = $_SESSION['username'];
        $query = "SELECT * FROM customer where username = '$id' limit 1";

        $result = mysqli_query($conn, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

}