<?php

$servername  = "localhost";
$username  = "user";
$password = "";
$dbname = "registerUser";

$comm = mysqli_connect($servername, $username, $password, $dbname);

if (!$comm){
    die("Connection Failed". mysqli_connect_error());
} else {
    echo "Great!";
}

?>