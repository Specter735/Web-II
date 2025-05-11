<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_perpustakaan";

$koneksi = new mysqli($servername, $username, $password, $database);

if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
echo "Connected successfully";
?>