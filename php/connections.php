<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "barangaybuddy";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("Failed to connect!");
}
