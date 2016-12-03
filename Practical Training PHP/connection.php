<?php

/**
 * Created by PhpStorm.
 * User: Haya
 * Date: 8/11/2016
 * Time: 11:51 AM
 */



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbproject";
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully<br>";


?>