<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "ltweb_users";

// Kết nối MySQL
$conn = mysqli_connect($host, $user, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

?>