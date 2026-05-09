<?php
session_start();

// Kiểm tra đã đăng nhập chưa
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập thành công</title>
</head>
<body>

<h2>Đăng nhập thành công!</h2>

<p>Xin chào:
    <b><?php echo $_SESSION['username']; ?></b>
</p>

<a href="logout.php">
    <button>Đăng xuất</button>
</a>

</body>
</html>