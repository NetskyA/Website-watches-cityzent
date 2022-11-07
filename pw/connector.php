<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'data_server';
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_errno) {
  die("gagal connect : " . $conn->connect_error);
}
// echo "Session = ";
// print_r($_SESSION);
// echo "<br>";
?>