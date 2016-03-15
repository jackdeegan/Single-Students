<?php
ini_set('display_errors',1);
require 'Connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = "Invalid username/password";
    mysqli_select_db($db,"REGISTER");
    if (!empty($username) && !empty($password)) {
        $query = ("SELECT USERNAME, PASSWORD, ADMIN FROM REGISTER WHERE USERNAME = '$username'");
        if ($query_run = mysqli_query($db, $query)) {
            $query_num_rows = mysqli_num_rows($query_run);
            if ($query_num_rows==0) {
                header("Location: Home.html");
            } else if ($query_num_rows = 1) {
                $query_array = mysqli_fetch_array($query_run);
                if (password_verify($password, $query_array[1])) {
                    session_start();
                    if ($query_array[2] == 0)
                        $admin = false;
                    else
                        $admin = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['admin'] = $admin;
                    header("Location: UserProfile.html");
                } else {
                    header("Location: Home.html");
                }
            }
        }
} else {
    echo 'You must supply a username and password.';
}
}

mysqli_close($db);
