<?php
session_start();
function checkAdmin(){
    if (!isset($_SESSION['admin'])) {
        if (!isset($_SESSION['username'])) {
            header("Location: Home.php");
        } else {
            header("Location: UserProfile.php");
        }
    }
}

function checkUser() {
    if (isset($_SESSION['username'])) {
        if (isset($_SESSION['admin'])) {
            header("Location: AdminPage.php");
        }
    } else {
        header("Location: Home.php");
    }
}

function forHomeAndRegister() {
    if(isset($_SESSION['username'])) {
        if(isset($_SESSION['admin'])) {
            header("Location: AdminPage.php");
        } else {
            header("Location: UserProfile.php");
        }
    }
}