<?php
session_start();
if (!isset($_SESSION['user_name'])) { header("Location: login.php"); }
?>
<h1>Chào mừng <?php echo $_SESSION['user_name']; ?> đã đăng nhập thành công!</h1>
<a href="logout.php">Thoát</a>