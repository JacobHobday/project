<?php
$servername = "localhost";
$username = "jeh80_dbUser";
#omitted password due to public repo
$dbname = "jeh80_userlist";
$tablename = "users";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect){
    die("Connection failed: " . mysqli_connect_error());
}