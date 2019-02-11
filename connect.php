<?php
/**
 * Created by PhpStorm.
 * User: UClauDa
 * Date: 1/4/2019
 * Time: 12:05 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ciit_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully <br>";
?>