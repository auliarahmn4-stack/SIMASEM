<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "simasem";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal");
}

?>