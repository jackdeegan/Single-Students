<?php
$server= "localhost";
$user="root";
$password="";
$dbname="group19DB";
//$port="3307";

$db = mysqli_connect($server,$user,$password, $dbname) or die("Unable to connect to server.");