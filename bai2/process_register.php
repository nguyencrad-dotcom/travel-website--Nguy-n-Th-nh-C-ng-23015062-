<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sql = "INSERT INTO users (username, email, password, full_name) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username, $email, $pass_hash, $full_name]);
        
        echo "Đăng ký thành công! <a href='login.php'>Đăng nhập</a>";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>