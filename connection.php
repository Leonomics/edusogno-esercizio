<?php
// db credentials
$servername = "localhost";
$username = "root";
$password = "root";
$name = "edusogno-esercizio";
$port = 8889;


// create connection
$connect = new mysqli($servername, $username, $password, $name, $port);



if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
?>